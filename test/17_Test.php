<?php

class Seventeen_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(17);
        $this->assertTrue(true);
    }
}
