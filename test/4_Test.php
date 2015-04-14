<?php

class Four_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(4);
        $this->assertTrue(true);
    }
}
