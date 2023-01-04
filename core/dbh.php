<?php

class Dbh
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect()
    {
        try {
            $this->username = "root";
            $this->password = "";
            $this->servername = 'localhost';
            $this->dbname = 'scandiweb';
            $dbh = new PDO('mysql:host=' . $this->servername . ';dbname=' . $this->dbname, $this->username, $this->password);
            $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $dbh;
        } catch (PDOException $e) {
            print "Connection failed: " . $e->getMessage();
            die();
        }
    }
}