<?php

namespace Calendar;

use DateTime;
use PHPUnit_Framework_TestCase;

class CalendarTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        date_default_timezone_set('Europe/London');
    }

    /**
     * @dataProvider dataProvider
     */

    /**
     * @dataProvider dataProvider
     *
     * @param string $date
     * @param int    $day
     * @param int    $weekday
     * @param int    $first_weekday
     * @param int    $number_of_days
     * @param int    $number_of_days_prev
     * @param array  $result
     */
    public function testCalendar($date, $day, $weekday, $first_weekday, $number_of_days, $number_of_days_prev, array $result)
    {
        $calendar = new Calendar(new DateTime($date));

        $this->assertSame($day, $calendar->getDay());
        $this->assertSame($weekday, $calendar->getWeekDay());
        $this->assertSame($first_weekday, $calendar->getFirstWeekDay());
        $this->assertSame($number_of_days, $calendar->getNumberOfDaysInThisMonth());
        $this->assertSame($number_of_days_prev, $calendar->getNumberOfDaysInPreviousMonth());
//

        $this->assertSame($result, $calendar->getCalendar());
    }

    public function dataProvider()
    {
        return [
            ['2016-01-01', 1, 5, 5, 31, 31, [
                53 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
                1  => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-03', 3, 7, 5, 31, 31, [
                53 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
                1  => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-04', 4, 1, 5, 31, 31, [
                53 => [28 =>  true, 29 =>  true, 30 =>  true, 31 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, ],
                1  => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-05', 5, 2, 5, 31, 31, [
                53 => [28 =>  true, 29 =>  true, 30 =>  true, 31 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, ],
                1  => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-06', 6, 3, 5, 31, 31, [
                53 => [28 =>  true, 29 =>  true, 30 =>  true, 31 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, ],
                1  => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-07', 7, 4, 5, 31, 31, [
                53 => [28 =>  true, 29 =>  true, 30 =>  true, 31 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, ],
                1  => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-08', 8, 5, 5, 31, 31, [
                53 => [28 =>  true, 29 =>  true, 30 =>  true, 31 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, ],
                1  => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-09', 9, 6, 5, 31, 31, [
                53 => [28 =>  true, 29 =>  true, 30 =>  true, 31 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, ],
                1  => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-10', 10, 7, 5, 31, 31, [
                53 => [28 =>  true, 29 =>  true, 30 =>  true, 31 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, ],
                1  => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-11', 11, 1, 5, 31, 31, [
                53 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
                1  => [4  =>  true, 5  =>  true, 6  =>  true, 7  =>  true, 8  =>  true, 9  =>  true, 10 =>  true, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-17', 17, 7, 5, 31, 31, [
                53 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
                1  => [4  =>  true, 5  =>  true, 6  =>  true, 7  =>  true, 8  =>  true, 9  =>  true, 10 =>  true, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-25', 25, 1, 5, 31, 31, [
                53 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
                1  => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 =>  true, 19 =>  true, 20 =>  true, 21 =>  true, 22 =>  true, 23 =>  true, 24 =>  true, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-01-31', 31, 7, 5, 31, 31, [
                53 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
                1  => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                2  => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                3  => [18 =>  true, 19 =>  true, 20 =>  true, 21 =>  true, 22 =>  true, 23 =>  true, 24 =>  true, ],
                4  => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-02-01', 1, 1, 1, 29, 31, [
                5  => [1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, 7  => false, ],
                6  => [8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, 14 => false, ],
                7  => [15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, 21 => false, ],
                8  => [22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, 28 => false, ],
                9  => [29 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, ],
            ]],

            ['2016-02-08', 8, 1, 1, 29, 31, [
                5  => [1  =>  true, 2  =>  true, 3  =>  true, 4  =>  true, 5  =>  true, 6  =>  true, 7  =>  true, ],
                6  => [8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, 14 => false, ],
                7  => [15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, 21 => false, ],
                8  => [22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, 28 => false, ],
                9  => [29 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, ],
            ]],

            ['2016-02-29', 29, 1, 1, 29, 31, [
                5  => [1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, 7  => false, ],
                6  => [8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, 14 => false, ],
                7  => [15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, 21 => false, ],
                8  => [22 =>  true, 23 =>  true, 24 =>  true, 25 =>  true, 26 =>  true, 27 =>  true, 28 =>  true, ],
                9  => [29 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, ],
            ]],

            ['2016-03-07', 7, 1, 2, 31, 29, [
                9  => [29 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, 4  =>  true, 5  =>  true, 6  =>  true, ],
                10 => [7  => false, 8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, ],
                11 => [14 => false, 15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, ],
                12 => [21 => false, 22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, ],
                13 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
            ]],

            ['2016-04-01', 1, 5, 5, 30, 31, [
                13 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
                14 => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                15 => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                16 => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                17 => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 1  => false, ],
            ]],

            ['2016-04-04', 4, 1, 5, 30, 31, [
                13 => [28 =>  true, 29 =>  true, 30 =>  true, 31 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, ],
                14 => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                15 => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                16 => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                17 => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 1  => false, ],
            ]],

            ['2016-05-01', 1, 7, 7, 31, 30, [
                17 => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 1  => false, ],
                18 => [2  => false, 3  => false, 4  => false, 5  => false, 6  => false, 7  => false, 8  => false, ],
                19 => [9  => false, 10 => false, 11 => false, 12 => false, 13 => false, 14 => false, 15 => false, ],
                20 => [16 => false, 17 => false, 18 => false, 19 => false, 20 => false, 21 => false, 22 => false, ],
                21 => [23 => false, 24 => false, 25 => false, 26 => false, 27 => false, 28 => false, 29 => false, ],
                22 => [30 => false, 31 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, ],
            ]],

            ['2016-05-30', 30, 1, 7, 31, 30, [
                17 => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 1  => false, ],
                18 => [2  => false, 3  => false, 4  => false, 5  => false, 6  => false, 7  => false, 8  => false, ],
                19 => [9  => false, 10 => false, 11 => false, 12 => false, 13 => false, 14 => false, 15 => false, ],
                20 => [16 => false, 17 => false, 18 => false, 19 => false, 20 => false, 21 => false, 22 => false, ],
                21 => [23 =>  true, 24 =>  true, 25 =>  true, 26 =>  true, 27 =>  true, 28 =>  true, 29 =>  true, ],
                22 => [30 => false, 31 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, ],
            ]],

            ['2016-05-31', 31, 2, 7, 31, 30, [
                17 => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 1  => false, ],
                18 => [2  => false, 3  => false, 4  => false, 5  => false, 6  => false, 7  => false, 8  => false, ],
                19 => [9  => false, 10 => false, 11 => false, 12 => false, 13 => false, 14 => false, 15 => false, ],
                20 => [16 => false, 17 => false, 18 => false, 19 => false, 20 => false, 21 => false, 22 => false, ],
                21 => [23 =>  true, 24 =>  true, 25 =>  true, 26 =>  true, 27 =>  true, 28 =>  true, 29 =>  true, ],
                22 => [30 => false, 31 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, ],
            ]],

            ['2016-06-22', 22, 3, 3, 30, 31, [
                22 => [30 => false, 31 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, ],
                23 => [6  => false, 7  => false, 8  => false, 9  => false, 10 => false, 11 => false, 12 => false, ],
                24 => [13 =>  true, 14 =>  true, 15 =>  true, 16 =>  true, 17 =>  true, 18 =>  true, 19 =>  true, ],
                25 => [20 => false, 21 => false, 22 => false, 23 => false, 24 => false, 25 => false, 26 => false, ],
                26 => [27 => false, 28 => false, 29 => false, 30 => false, 1  => false, 2  => false, 3  => false, ],
            ]],

            ['2016-07-17', 17, 7, 5, 31, 30, [
                26 => [27 => false, 28 => false, 29 => false, 30 => false, 1  => false, 2  => false, 3  => false, ],
                27 => [4  =>  true, 5  =>  true, 6  =>  true, 7  =>  true, 8  =>  true, 9  =>  true, 10 =>  true, ],
                28 => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                29 => [18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, ],
                30 => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-07-31', 31, 7, 5, 31, 30, [
                26 => [27 => false, 28 => false, 29 => false, 30 => false, 1  => false, 2  => false, 3  => false, ],
                27 => [4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, ],
                28 => [11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, ],
                29 => [18 =>  true, 19 =>  true, 20 =>  true, 21 =>  true, 22 =>  true, 23 =>  true, 24 =>  true, ],
                30 => [25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, ],
            ]],

            ['2016-08-01', 1, 1, 1, 31, 31, [
                31 => [1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, 7  => false],
                32 => [8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, 14 => false],
                33 => [15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, 21 => false],
                34 => [22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, 28 => false],
                35 => [29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, 4  => false, ],
            ]],

            ['2016-08-29', 29, 1, 1, 31, 31, [
                31 => [1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, 7  => false],
                32 => [8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, 14 => false],
                33 => [15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, 21 => false],
                34 => [22 =>  true, 23 =>  true, 24 =>  true, 25 =>  true, 26 =>  true, 27 =>  true, 28 =>  true],
                35 => [29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, 4  => false, ],
            ]],

            ['2016-08-31', 31, 3, 1, 31, 31, [
                31 => [1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, 7  => false],
                32 => [8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, 14 => false],
                33 => [15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, 21 => false],
                34 => [22 =>  true, 23 =>  true, 24 =>  true, 25 =>  true, 26 =>  true, 27 =>  true, 28 =>  true],
                35 => [29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, 4  => false, ],
            ]],

            ['2016-09-03', 3, 6, 4, 30, 31, [
                35 => [29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, 4  => false, ],
                36 => [5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, 11 => false, ],
                37 => [12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, 18 => false, ],
                38 => [19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, 25 => false, ],
                39 => [26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 1  => false, 2  => false, ],
            ]],

            ['2016-09-06', 6, 2, 4, 30, 31, [
                35 => [29 =>  true, 30 =>  true, 31 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, 4  =>  true, ],
                36 => [5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, 11 => false, ],
                37 => [12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, 18 => false, ],
                38 => [19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, 25 => false, ],
                39 => [26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 1  => false, 2  => false, ],
            ]],

            ['2016-10-12', 12, 3, 6, 31, 30, [
                39 => [26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 1  => false, 2  => false, ],
                40 => [3  =>  true, 4  =>  true, 5  =>  true, 6  =>  true, 7  =>  true, 8  =>  true, 9  =>  true, ],
                41 => [10 => false, 11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, ],
                42 => [17 => false, 18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, ],
                43 => [24 => false, 25 => false, 26 => false, 27 => false, 28 => false, 29 => false, 30 => false, ],
                44 => [31 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, ],
            ]],

            ['2016-10-31', 31, 1, 6, 31, 30, [
                39 => [26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 1  => false, 2  => false, ],
                40 => [3  => false, 4  => false, 5  => false, 6  => false, 7  => false, 8  => false, 9  => false, ],
                41 => [10 => false, 11 => false, 12 => false, 13 => false, 14 => false, 15 => false, 16 => false, ],
                42 => [17 => false, 18 => false, 19 => false, 20 => false, 21 => false, 22 => false, 23 => false, ],
                43 => [24 =>  true, 25 =>  true, 26 =>  true, 27 =>  true, 28 =>  true, 29 =>  true, 30 =>  true, ],
                44 => [31 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, ],
            ]],

            ['2016-11-01', 1, 2, 2, 30, 31, [
                44 => [31 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, ],
                45 => [7  => false, 8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, ],
                46 => [14 => false, 15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, ],
                47 => [21 => false, 22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, ],
                48 => [28 => false, 29 => false, 30 => false, 1  => false, 2  => false, 3  => false, 4  => false, ],
            ]],

            ['2016-11-13', 13, 7, 2, 30, 31, [
                44 => [31 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, 4  =>  true, 5  =>  true, 6  =>  true, ],
                45 => [7  => false, 8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, ],
                46 => [14 => false, 15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, ],
                47 => [21 => false, 22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, ],
                48 => [28 => false, 29 => false, 30 => false, 1  => false, 2  => false, 3  => false, 4  => false, ],
            ]],

            ['2016-11-10', 10, 4, 2, 30, 31, [
                44 => [31 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, 4  =>  true, 5  =>  true, 6  =>  true, ],
                45 => [7  => false, 8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, ],
                46 => [14 => false, 15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, ],
                47 => [21 => false, 22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, ],
                48 => [28 => false, 29 => false, 30 => false, 1  => false, 2  => false, 3  => false, 4  => false, ],
            ]],

            ['2016-12-10', 10, 6, 4, 31, 30, [
                48 => [28 =>  true, 29 =>  true, 30 =>  true, 1  =>  true, 2  =>  true, 3  =>  true, 4  =>  true, ],
                49 => [5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, 11 => false, ],
                50 => [12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, 18 => false, ],
                51 => [19 => false, 20 => false, 21 => false, 22 => false, 23 => false, 24 => false, 25 => false, ],
                52 => [26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, 1  => false, ],
            ]],

            ['2016-12-31', 31, 6, 4, 31, 30, [
                48 => [28 => false, 29 => false, 30 => false, 1  => false, 2  => false, 3  => false, 4  => false, ],
                49 => [5  => false, 6  => false, 7  => false, 8  => false, 9  => false, 10 => false, 11 => false, ],
                50 => [12 => false, 13 => false, 14 => false, 15 => false, 16 => false, 17 => false, 18 => false, ],
                51 => [19 =>  true, 20 =>  true, 21 =>  true, 22 =>  true, 23 =>  true, 24 =>  true, 25 =>  true, ],
                52 => [26 => false, 27 => false, 28 => false, 29 => false, 30 => false, 31 => false, 1  => false, ],
            ]],

            ['2015-12-01', 1, 2, 2, 31, 30, [
                49 => [30 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, ],
                50 => [7  => false, 8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, ],
                51 => [14 => false, 15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, ],
                52 => [21 => false, 22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, ],
                53 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
            ]],

            ['2015-12-31', 31, 4, 2, 31, 30, [
                49 => [30 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, ],
                50 => [7  => false, 8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, ],
                51 => [14 => false, 15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, ],
                52 => [21 =>  true, 22 =>  true, 23 =>  true, 24 =>  true, 25 =>  true, 26 =>  true, 27 =>  true, ],
                53 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
            ]],

            ['2010-02-01', 1, 1, 1, 28, 31, [
                5  => [1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, 7  => false],
                6  => [8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, 14 => false],
                7  => [15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, 21 => false],
                8  => [22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, 28 => false],
            ]],

            ['2010-03-01', 1, 1, 1, 31, 28, [
                9  => [1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, 7  => false],
                10 => [8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, 14 => false],
                11 => [15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, 21 => false],
                12 => [22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, 28 => false],
                13 => [29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, 4  => false],
            ]],
        ];
    }
}
