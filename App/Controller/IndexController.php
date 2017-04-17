<?php
/**
 * Created by PhpStorm.
 * User: kok2015
 * Date: 2017/4/17
 * Time: 17:06
 */
namespace App\Controller;

class IndexController extends \core\F {
    public function index() {
            dump(mt_rand(1,180));
    }
    public function test(){
        $model = M();
        $res =  $model->query('select * from test');
        dump($res->fetchAll());
    }

    public function test2(){
        $data = 'king';
        $this->assign('data',$data);
        $this->assign('title','hello,myFrame');
        $this->display('Index/index.html');
    }
}