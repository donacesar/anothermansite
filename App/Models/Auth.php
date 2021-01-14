<?php


namespace App\Models;

class Auth
{
    protected $login;
    protected $password;

    public function  __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function tryAuth()
    {
        if (empty($this->login) || empty($this->password)) {
            $this->wrongLog();
            return false;
        }
        $db = Db::instance();
        $sql = 'SELECT * FROM admins WHERE login=:login';
        $params = [':login' => $this->login];
        $data = $db->query($sql, $params);
        $data = $data[0];
        if (!empty($data)) {
            if (password_verify($this->password, $data['password'])) {
                $this->adminLog();
                return $data['id'];
            }

        }
        $this->wrongLog();
        return false;
    }

    //логгирование неверного входа
    protected function wrongLog()
    {
        include __DIR__ . '/../../config.php';
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date('[Y-m-d H:i:s]');
        $str =
            '#' . $ip . '#' . 'Login: ' . $this->login
            . '#' . 'Password: ' . $this->password
            . '#' . $date . PHP_EOL . PHP_EOL;

        file_put_contents(WRONG_LOG, $str, FILE_APPEND | LOCK_EX);

    }
    //логгирование сессии администратора
    protected function adminLog()
    {
        include __DIR__ . '/../../config.php';
        $ip = $_SERVER['REMOTE_ADDR'];
        $date = date('[Y-m-d H:i:s]');
        $str = '# ' . $ip . ' # ' . $this->login . ' #' . $date . PHP_EOL . PHP_EOL;
        file_put_contents(ADMIN_LOG, $str, FILE_APPEND | LOCK_EX);
    }


}