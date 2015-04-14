<?php

class Twelve_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(12);
        $this->assertTrue(true);
    }
}
