<?php
/**
 * Created by PhpStorm.
 * User: kok2015
 * Date: 2017/4/17
 * Time: 16:15
 */
namespace core\Library;
class Route {
    public $cont,$method;
    public function __construct() {
       if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            $path = $_SERVER['REQUEST_URI'];
            $pathArr = explode('/',trim($path,'/'));
            if($pathArr[0])$this->cont = $pathArr[0];
            $this->method =  $pathArr[1] ? :'index';
       } else {
            $this->cont = 'index';
            $this->method='index';
       }
       if(isset($pathArr)) $count   = count($pathArr);
        $i = 2;
        if(empty($count))$count=0;
        while($i<$count) {
            $_GET[$pathArr[$i]] = $pathArr[$i+1];
            $i+=2;
        }

    }

}