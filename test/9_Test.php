<?php

class Nine_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(9);
        $this->assertTrue(true);
    }
}
