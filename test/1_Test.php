<?php

class One_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(1);
        $this->assertTrue(true);
    }
}
