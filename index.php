<?php
/**
 * Created by PhpStorm.
 * User: kok2015
 * Date: 2017/4/17
 * Time: 14:58
 */
define('F',realpath('./F').'/');
define('CORE',F.'/core/');
define('MODULE','App');
define('DEBUG',true);
define('COMMON',CORE.'/Common');
define('LIB_PATH',CORE.'/Library');

if(DEBUG) {
    ini_set('display_errors','On');
} else {
    ini_set('display_errors', 'Off');
}
require(CORE.'F.php');
require(COMMON.'/function.php');
spl_autoload_register('\core\F::load');
\core\F::run();




