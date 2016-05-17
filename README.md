[![Build Status](https://travis-ci.org/stopsopa/CalendarTest.svg?branch=master)](https://travis-ci.org/stopsopa/CalendarTest)
[![Coverage Status](https://coveralls.io/repos/github/stopsopa/CalendarTest/badge.svg?branch=master)](https://coveralls.io/github/stopsopa/CalendarTest?branch=master)

Fork this repo and write a Calendar class which implements the CalendarInterface and pass all the unit tests.

The Calendar class should accept any DateTimeInterface implementation and based on that you have to "draw" the current month and highlight the previous week. Instead of actually drawing it, the getCalendar method should just return an array.

For example if today is 9th March 2016, the array is:

```
Week   Day   Highlight
↓      ↓     ↓
9  => [29 => true,  1  => true,  2  => true,  3  => true,  4  => true,  5  => true,  6  => true,  ],
10 => [7  => false, 8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, ],
11 => [14 => false, 15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, ],
12 => [21 => false, 22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, ],
13 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
```

If the day is in the first week, like 6th March 2016, the array is:

```
9  => [29 => false, 1  => false, 2  => false, 3  => false, 4  => false, 5  => false, 6  => false, ],
10 => [7  => false, 8  => false, 9  => false, 10 => false, 11 => false, 12 => false, 13 => false, ],
11 => [14 => false, 15 => false, 16 => false, 17 => false, 18 => false, 19 => false, 20 => false, ],
12 => [21 => false, 22 => false, 23 => false, 24 => false, 25 => false, 26 => false, 27 => false, ],
13 => [28 => false, 29 => false, 30 => false, 31 => false, 1  => false, 2  => false, 3  => false, ],
```
