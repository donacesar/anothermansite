<?php

namespace Models;

class DB
{
    protected $dbh;
    protected $sth;

    public function __construct()
    {
        include __DIR__ . '/../../config.php';
        $this->dbh = new \PDO(DB_PATH, DB_LOGIN, DB_PASSWORD);
    }

    public function query(string $sql, array $data)
    {
        $this->sth = $this->dbh->prepare($sql);
        if ($this->sth == false) {
            return false;
        }
        $this->sth->execute($data);
        if ($this->sth == false) {
            return false;
        }
        return $this->sth->fetchAll();
    }

}