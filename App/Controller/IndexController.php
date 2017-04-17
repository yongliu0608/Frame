<?php
/**
 * Created by PhpStorm.
 * User: kok2015
 * Date: 2017/4/17
 * Time: 17:06
 */
namespace App\Controller;

class IndexController {
    public function index() {
            dump(mt_rand(1,180));
    }
    public function test(){
        $model = M();
        $res =  $model->query('select * from test');
        dump($res->fetchAll());
    }

    public function hig(){
        echo 888;
    }
}