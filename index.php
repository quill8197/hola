<?php
/**
 * Created by PhpStorm.
 * User: quill
 * Date: 4/10/2019
 * Time: 1:13 PM
 */

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//instantiate Fat-Free with an instance of the base class
$f3 = Base::instance();

//turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function()
{
    echo '<h1>Hola!</h1>';
});

//run fat-free
$f3->run();