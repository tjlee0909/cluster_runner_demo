<?php

class Eleven_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(11);
        $this->assertTrue(true);
    }
}
