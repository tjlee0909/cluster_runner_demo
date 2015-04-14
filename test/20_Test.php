<?php

class Twenty_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(20);
        $this->assertTrue(true);
    }
}
