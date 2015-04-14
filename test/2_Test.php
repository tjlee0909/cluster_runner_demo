<?php

class Two_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(2);
        $this->assertTrue(true);
    }
}
