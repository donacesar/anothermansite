<?php


namespace Models;


class AdminSession
{
    protected $adminSessionID;
    protected $adminID;

    public function __construct($adminID)
    {
        $this->adminID = $adminID;
        include __DIR__ . '/../../config.php';
        $this->adminSessionID = hash('sha256', microtime(true) . uniqid());
        setcookie(COOCKIE_NAME, $this->adminSessionID);
        $this->saveAdminSession();
    }

    protected function saveAdminSession()
    {
        $db = DB::instance();
        $sql = 'INSERT INTO admin_sessions (admin_id, hash) VALUES (:admin_id, :hash)';
        $data = [':admin_id' => $this->adminID, ':hash' => $this->adminSessionID];
        $db->query($sql, $data);
    }

}