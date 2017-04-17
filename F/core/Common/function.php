<?php
/**
 * Created by PhpStorm.
 * User: kok2015
 * Date: 2017/4/17
 * Time: 15:01
 * 公共函数文件
 */

    function dump($var) {
        if(is_bool($var)) {
            var_dump($var);
        } else if (is_null($var)) {
            var_dump(NULL);
        } else {
            echo "<pre>".print_r($var,true)."</pre>";
        }
    }

    function M(){
        $model = new \core\Library\Model();
        return $model;
    }
