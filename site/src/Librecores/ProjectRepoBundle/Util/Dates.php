<?php
/**
 * Created by PhpStorm.
 * User: amitosh
 * Date: 22/6/17
 * Time: 10:52 PM
 */

namespace Librecores\ProjectRepoBundle\Util;


class Dates
{
    /**
     * An interval of one second
     *
     * @var int
     */
    const INTERVAL_SECOND = 0;

    /**
     * An interval of one minute
     *
     * @var int
     */
    const INTERVAL_MINUTE = 1;

    /**
     * An interval of one hour
     *
     * @var int
     */
    const INTERVAL_HOUR = 2;

    /**
     * An interval of one day
     *
     * @var int
     */
    const INTERVAL_DAY = 3;

    /**
     * An interval of one week
     *
     * @var int
     */
    const INTERVAL_WEEK = 4;

    /**
     * An interval of one month
     *
     * @var int
     */
    const INTERVAL_MONTH = 5;

    /**
     * An interval of one year
     *
     * @var int
     */
    const INTERVAL_YEAR = 6;

    /**
     * An interval of one second
     *
     * @var int
     */
    const INTERVAL_CUSTOM = 99999;
}