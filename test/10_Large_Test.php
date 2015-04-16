<?php

class Large_10_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(10);
        $this->assertTrue(true);
    }
}
