<?php
/**
 * Created by PhpStorm.
 * User: bharatm
 * Date: 12/5/14
 * Time: 5:47 PM
 */

require 'vendor/autoload.php';

use MyDemo\Demo\DemoMe;

$demo = new DemoMe();

echo $demo->say();