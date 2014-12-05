<?php
/**
 * Created by PhpStorm.
 * User: bharatm
 * Date: 12/5/14
 * Time: 7:18 PM
 */
use MyDemo\Demo\DemoMe;

class DemoTest extends  PHPUnit_Framework_TestCase {
    public function testDemoSayHello() {
        $demo = new DemoMe();
        $this->assertEquals("Hello",$demo->say("Hello"));
    }

    public function testDemoSayHelloWorld() {
        $demo = new DemoMe();
        $this->assertEquals("hello world",$demo->say());
    }
}