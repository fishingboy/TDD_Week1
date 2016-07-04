<?php
// 測試案例的 class
class tddWeek1Test extends PHPUnit_Framework_TestCase
{
    public function add_3_cost_field_sum_should_be_6_15_24_21()
    {
    	// arrange
    	$target = new Calculate();
    	$first = 1;
    	$second = 2;
    	$expected = 3;

    	// act
        $actual = $target->add(1, 2);

    	// assert
        $this->assertEquals($expected, $actual);
    }
}