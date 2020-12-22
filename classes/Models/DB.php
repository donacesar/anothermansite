<?php

namespace Models;

class DB
{
    use \Singleton;
    protected $dbh;

    protected function __construct()
    {
        include __DIR__ . '/../../config.php';
        $this->dbh = new \PDO(DB_PATH, DB_LOGIN, DB_PASSWORD);
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

    public function query($sql, array $data)
    {
        $sth = $this->dbh->prepare($sql);
        if ($sth == false) {
            return false;
        }
        $res = $sth->execute($data);
        if (false !== $res) {
            return $sth->fetchAll();
        }
        return [];
    }

}