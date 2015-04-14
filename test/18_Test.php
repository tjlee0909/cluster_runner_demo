<?php

class Eighteen_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(18);
        $this->assertTrue(true);
    }
}
