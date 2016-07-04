<?php
// 測試案例的 class
class addTest extends PHPUnit_Framework_TestCase
{
    public function test_add()
    {
    	// arr
    	$target = new Calculate();

        $expend = $target->add(1, 2);
        $result = 3;

        $this->assertEquals($result, $expend);
    }
}