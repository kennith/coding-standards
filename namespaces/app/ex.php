<?php
/**
 * Using namespace without framework
 * 
 * If you do not want to "require_once" with all the classes, do autoload. 
 * A reminder, __autoload function is depreciated starting 7.2, using 
 * spl_autoload_register() is better. 
 */
namespace app;

use app\core\my;
use app\lib\my as myLib;

/**
 * Autoloader for classes
 * 
 * In PHP7, the __autoloader is depreciated. A autoloader function is called via
 * spl_autoload_register()
 * 
 * @param string $class
 * @return null;
 */
function my_autoloader($class)
{
	require_once('../'.str_replace('\\', '/', $class).'.php');
	return null;
}

spl_autoload_register("app\my_autoloader");

(new my)->getName();
(new myLib)->getName();