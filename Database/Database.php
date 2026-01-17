<?php
namespace Database;

class Database {
    private $dbName;
    private $dbURL;

    public function getDbName() { return $this->dbName; }
    public function setDbName($n) { $this->dbName = $n; }
    public function getDbURL() { return $this->dbURL; }
    public function setDbURL($url) { $this->dbURL = $url; }
}
