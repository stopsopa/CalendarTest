<?php

namespace Calendar;

use DateTimeInterface;
use DateTime;
use DateInterval;
use DatePeriod;

class Calendar implements CalendarInterface {

    protected $datetime;
    /**
     * @param DateTimeInterface $datetime
     */
    public function __construct(DateTimeInterface $datetime) {
        $this->datetime = $datetime;
    }

    /**
     * Get the day
     *
     * @return int
     */
    public function getDay() {
        return intval($this->datetime->format('d'));
    }

    /**
     * Get the weekday (1-7, 1 = Monday)
     *
     * @return int
     */
    public function getWeekDay() {
        return intval($this->datetime->format('w')) ?: 7;
    }

    /**
     * Get the first weekday of this month (1-7, 1 = Monday)
     *
     * @return int
     */
    public function getFirstWeekDay() {
        $firstday = new DateTime($this->datetime->format('Y-m'));
        return intval($firstday->format('w')) ?: 7;
    }

    /**
     * Get the first week of this month (18th March => 9 because March starts on week 9)
     *
     * @return int
     */
    public function getFirstWeek() {

    }

    /**
     * Get the number of days in this month
     *
     * @return int
     */
    public function getNumberOfDaysInThisMonth() {
        return cal_days_in_month(CAL_GREGORIAN, $this->datetime->format('m'), $this->datetime->format('Y'));
    }

    /**
     * Get the number of days in the previous month
     *
     * @return int
     */
    public function getNumberOfDaysInPreviousMonth() {

        /* @var $date DateTime */
        $date = new DateTime($this->datetime->format('Y-m'));

        $date->sub(new DateInterval('PT1S'));
        // or
//        $date->modify("-1 second");

        return cal_days_in_month(CAL_GREGORIAN, $date->format('m'), $date->format('Y'));
    }

    /**
     * Get the calendar array
     *
     * @return array
     */
    public function getCalendar() {

        $firstDayOfMonth = new DateTime($this->datetime->format('Y-m'));

        $lastDayOfMonth = clone $firstDayOfMonth;
        $lastDayOfMonth->add(new DateInterval('P1M'));
        $lastDayOfMonth->sub(new DateInterval('PT1S'));

        $offset = (intval($firstDayOfMonth->format('w')) ?: 7) - 1;
        $firstDayOfStartWeek = clone $firstDayOfMonth;

        if ($offset) {
            $firstDayOfStartWeek->modify("-$offset days");
        }

        $offset = 6 - ((intval($lastDayOfMonth->format('w')) ?: 7) - 1);
        $lastDayOfEndWeek = clone $lastDayOfMonth;

        if ($offset) {
            $lastDayOfEndWeek->modify("+$offset days");
        }

        $interval = new DateInterval('P1D');
        $daterange = new DatePeriod($firstDayOfStartWeek, $interval ,$lastDayOfEndWeek);

        $prevWeek = clone $this->datetime;
        $prevWeek->modify('-1 week');
        $prevWeek = intval($prevWeek->format('W'));

        $tmp = array();

        foreach($daterange as $date) {

            /* @var $date DateTime */
            $weekOfTheYear = intval($date->format("W"));

            // if there is no array representing week, gently create it
            if (!isset($tmp[$weekOfTheYear])) {
                $tmp[$weekOfTheYear] = array();
            }

            $tmp[$weekOfTheYear][$date->format('j')] = $prevWeek === $weekOfTheYear;
        }

        return $tmp;
    }
}