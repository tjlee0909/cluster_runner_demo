<?php

class Sixteen_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(16);
        $this->assertTrue(true);
    }
}
