<?php

class Thirteen_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(13);
        $this->assertTrue(true);
    }
}
