<?php

namespace Aliyun\SLS\Models;

/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved.
 *
 * The class used to present the result of log histogram status. For every log
 * histogram, it contains : from/to time range, hit log count and query
 * completed status.
 *
 * @author log service dev
 */
class Histogram
{
    /**
     * @var int the begin time
     */
    private $from;

    /**
     * @var int the end time
     */
    private $to;

    /**
     * @var int log count of histogram that query hits
     */
    private $count;

    /**
     * @var string histogram query status(Complete or InComplete)
     */
    private $progress;

    /**
     * Histogram constructor.
     *
     * @param int    $from
     *                         the begin time
     * @param int    $to
     *                         the end time
     * @param int    $count
     *                         log count of histogram that query hits
     * @param string $progress
     *                         histogram query status(Complete or InComplete)
     */
    public function __construct($from, $to, $count, $progress)
    {
        $this->from     = $from;
        $this->to       = $to;
        $this->count    = $count;
        $this->progress = $progress;
    }

    /**
     * Get begin time.
     *
     * @return int the begin time
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Get the end time.
     *
     * @return int the end time
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Get log count of histogram that query hits.
     *
     * @return int log count of histogram that query hits
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Check if the histogram is completed.
     *
     * @return bool true if this histogram is completed
     */
    public function isCompleted()
    {
        return $this->progress == 'Complete';
    }
}
