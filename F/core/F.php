<?php
namespace core;

class F {
   static public $classMap = [];
    static public function run() {

        $route = new \core\Library\Route();
        $cont = $route->cont;
        $method = $route->method;
        $contFile = MODULE.'Controller/'.$cont.'Controller.php';
        $contClass = '\\'.MODULE.'Controller\\'.$cont.'Controller';
        if(is_file($contFile)){
           include $contFile;
           $obj =  new $contClass();
           $obj->$method();
        } else {
            throw new \Exception('找不到控制器'.$cont);
        }
    }

    //自动加载
    static public function load($class) {

        if(isset(self::$classMap[$class])) {
            return true;
        } else {
            $class = str_replace('\\','/',$class);
            if(is_file(F.$class.'.php')) {
                include F.$class.'.php';
            } else {
                return false;
            }
        }
    }
}



