<?php


namespace Models;


class Admin
{
    protected $hash;
    public function getCurrentAdmin()
    {
        require __DIR__ . '/../../config.php';
        $this->hash = $_COOKIE[COOCKIE_NAME] ?? null;
        if (empty($this->hash)) {
            return null;
        }
        $db = DB::instance();
        $sql = 'SELECT * FROM admin_sessions WHERE hash=:hash';
        $params = [':hash' => $this->hash];
        $data = $db->query($sql, $params);
        if (empty($data)) {
            return null;
        }

        $data = $data[0];
        $db = DB::instance();
        $sql = 'SELECT * FROM admins WHERE id=:id';
        $params = [':id' => $data['admin_id']];
        $arr = $db->query($sql, $params);
        $arr = $arr[0];
        $this->adminLog($arr['login']);
        return $arr;
    }

    //логгирование сессии администратора
    protected function adminLog($login)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date('[Y-m-d H:i:s]');
        $str = '# ' . $ip . ' # ' . $login . ' #' . $date . PHP_EOL . PHP_EOL;
        file_put_contents(ADMIN_LOG, $str, FILE_APPEND | LOCK_EX);
    }
}