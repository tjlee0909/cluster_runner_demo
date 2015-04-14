<?php

class Fourteen_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(14);
        $this->assertTrue(true);
    }
}
