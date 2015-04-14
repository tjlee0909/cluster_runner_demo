<?php

class Six_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(6);
        $this->assertTrue(true);
    }
}
