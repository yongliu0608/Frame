<?php
/**
 * Created by PhpStorm.
 * User: kok2015
 * Date: 2017/4/17
 * Time: 17:46
 */
namespace core\Library;

class Model extends \PDO {
    public function __construct(){
        $dsn = 'mysql:host=localhost;dbname=test';
        $u='root';
        $p='root';

        try {
            parent::__construct($dsn,$u,$p);
        }catch (\PDOException $e) {
            dump($e->getMessage());
        }

    }
}