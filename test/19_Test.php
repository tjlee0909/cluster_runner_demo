<?php

class Nineteen_Test extends PHPUnit_Framework_TestCase
{
    public function test_only_test()
    {
        sleep(19);
        $this->assertTrue(true);
    }
}
