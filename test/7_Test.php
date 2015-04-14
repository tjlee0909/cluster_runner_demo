<?php

class Seven_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(7);
        $this->assertTrue(true);
    }
}
