<?php

class Eight_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(8);
        $this->assertTrue(true);
    }
}
