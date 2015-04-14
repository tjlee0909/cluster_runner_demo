<?php

class Fifteen_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(15);
        $this->assertTrue(true);
    }
}
