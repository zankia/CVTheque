<?php

abstract class Model {
    protected $dbLink;
    private $salt;

    public function __construct() {
        $config = parse_ini_file('./config.ini');
        $this->salt = $config['salt'];
        try {
            $this->dbLink = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
            $this->dbLink->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            var_dump($e);
            View::error(10);
        }
    }

    final protected function passCrypt($string) {
        return sha1(sha1($string).$this->salt);
    }
}
