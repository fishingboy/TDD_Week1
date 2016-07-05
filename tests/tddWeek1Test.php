<?php
/**
 * 91 TDD 第一週作業 
 */
class RowDataCalculatorTest extends PHPUnit_Framework_TestCase
{
    public function test_groupSum_field_is_Cost_group_size_is_3_should_be_array_6_15_24_21()
    {
        // arrange
        $data = [
            ['id' => 1,  'Cost' => 1,  'Revenue' => 11, 'SellPrice' => 21],
            ['id' => 2,  'Cost' => 2,  'Revenue' => 12, 'SellPrice' => 22],
            ['id' => 3,  'Cost' => 3,  'Revenue' => 13, 'SellPrice' => 23],
            ['id' => 4,  'Cost' => 4,  'Revenue' => 14, 'SellPrice' => 24],
            ['id' => 5,  'Cost' => 5,  'Revenue' => 15, 'SellPrice' => 25],
            ['id' => 6,  'Cost' => 6,  'Revenue' => 16, 'SellPrice' => 26],
            ['id' => 7,  'Cost' => 7,  'Revenue' => 17, 'SellPrice' => 27],
            ['id' => 8,  'Cost' => 8,  'Revenue' => 18, 'SellPrice' => 28],
            ['id' => 9,  'Cost' => 9,  'Revenue' => 19, 'SellPrice' => 29],
            ['id' => 10, 'Cost' => 10, 'Revenue' => 20, 'SellPrice' => 30],
            ['id' => 11, 'Cost' => 11, 'Revenue' => 21, 'SellPrice' => 31],
        ];
        $target = new RowDataCalculator($data);
        $field = "cost";
        $group_size = 3;
        $expected = [6, 15, 24, 21];

        // act
        $actual = $target->groupSum($field, $group_size);

        // assert
        $this->assertEquals($expected, $actual);
    }

    public function test_groupSum_field_is_Revenue_group_size_is_4_should_be_array_50_66_60()
    {
        // arrange
        $data = [
            ['id' => 1,  'Cost' => 1,  'Revenue' => 11, 'SellPrice' => 21],
            ['id' => 2,  'Cost' => 2,  'Revenue' => 12, 'SellPrice' => 22],
            ['id' => 3,  'Cost' => 3,  'Revenue' => 13, 'SellPrice' => 23],
            ['id' => 4,  'Cost' => 4,  'Revenue' => 14, 'SellPrice' => 24],
            ['id' => 5,  'Cost' => 5,  'Revenue' => 15, 'SellPrice' => 25],
            ['id' => 6,  'Cost' => 6,  'Revenue' => 16, 'SellPrice' => 26],
            ['id' => 7,  'Cost' => 7,  'Revenue' => 17, 'SellPrice' => 27],
            ['id' => 8,  'Cost' => 8,  'Revenue' => 18, 'SellPrice' => 28],
            ['id' => 9,  'Cost' => 9,  'Revenue' => 19, 'SellPrice' => 29],
            ['id' => 10, 'Cost' => 10, 'Revenue' => 20, 'SellPrice' => 30],
            ['id' => 11, 'Cost' => 11, 'Revenue' => 21, 'SellPrice' => 31],
        ];
        $target = new RowDataCalculator($data);
        $field = "Revenue";
        $group_size = 4;
        $expected = [50, 66, 60];

        // act
        $actual = $target->groupSum($field, $group_size);

        // assert
        $this->assertEquals($expected, $actual);
    }
}