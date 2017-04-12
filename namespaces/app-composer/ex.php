<?php
/**
 * Working namespace with composer
 * 
 * In composer, you can specify a package using autoload with PSR-4.
 * Once you load the composer with vendor/autoload.php, the classes specify in 
 * the autoload config is loaded automatically. 
 * Just call by using "use"
 * If the class as the same name, you can alter the name by using "as" keyword
 */
require __DIR__.'/vendor/autoload.php';
use appcomposer\my;
use lib\my as libMy;

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('test');

$my = new my();

(new libMy)->getName();