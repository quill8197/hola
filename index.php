<?php
/**
 * Created by PhpStorm.
 * User: quill
 * Date: 4/8/2019
 * Time: 2:16 PM
 */

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');

//create an instance of the base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function()
{
    echo '<h1>Hola World!</h1>';
});

//run fat-free
$f3->run();