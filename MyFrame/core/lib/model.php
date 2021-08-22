<?php
namespace core\lib;

class model extends \PDO{
    public function __construct()
    {
        $dsn = 'mysql:host=127.0.0.1;dbname=test';
        $username = 'root';
        $passwd = '123456';
        try{
            parent::__construct($dsn, $username, $passwd);
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }
}
