<?php
namespace app\model;

use \core\lib\conf;

class model extends \PDO{
    public function __construct()
    {
        $conf = conf::all('database');
        try{
            parent::__construct($conf['dsn'], $conf['username'], $conf['passwd']);
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }
}
