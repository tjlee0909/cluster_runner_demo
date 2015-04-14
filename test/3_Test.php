<?php

class Three_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(3);
        $this->assertTrue(true);
    }
}
