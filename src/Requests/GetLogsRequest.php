<?php

namespace Aliyun\SLS\Requests;

/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved.
 *
 * The request used to get logs by a query from log service.
 *
 * @author log service dev
 */
class GetLogsRequest extends Request
{
    /**
     * @var string logStore name
     */
    private $logStore;

    /**
     * @var string topic name of logs
     */
    private $topic;

    /**
     * @var int the begin time
     */
    private $from;

    /**
     * @var int the end time
     */
    private $to;

    /**
     * @var string user defined query
     */
    private $query;

    /**
     * @var int max line number of return logs
     */
    private $line;

    /**
     * @var int line offset of return logs
     */
    private $offset;

    /**
     * @var bool if reverse is set to true, the query will return the latest logs first
     */
    private $reverse;

    /**
     * GetLogsRequest Constructor.
     *
     * @param string $project  project name
     * @param string $logStore logStore name
     * @param int    $from     the begin time
     * @param int    $to       the end time
     * @param string $topic    topic name of logs
     * @param string $query    user defined query
     * @param int    $line     query return line number
     * @param int    $offset   the log offset to return
     * @param bool   $reverse  if reverse is set to true, the query will return the latest logs first
     */
    public function __construct(
        $project = null,
        $logStore = null,
        $from = null,
        $to = null,
        $topic = null,
        $query = null,
        $line = null,
        $offset = null,
        $reverse = null
    ) {
        $this->project  = $project;
        $this->logStore = $logStore;
        $this->from     = $from;
        $this->to       = $to;
        $this->topic    = $topic;
        $this->query    = $query;
        $this->line     = $line;
        $this->offset   = $offset;
        $this->reverse  = $reverse;
    }

    /**
     * Get logStore name.
     *
     * @return string logStore name
     */
    public function getLogStore()
    {
        return $this->logStore;
    }

    /**
     * Set logStore name.
     *
     * @param string $logStore
     *                         logStore name
     */
    public function setLogStore($logStore)
    {
        $this->logStore = $logStore;
    }

    /**
     * Get topic name.
     *
     * @return string topic name
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Set topic name.
     *
     * @param string $topic
     *                      topic name
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
    }

    /**
     * Get begin time.
     *
     * @return int begin time
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set begin time.
     *
     * @param int $from
     *                  begin time
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * Get end time.
     *
     * @return int end time
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set end time.
     *
     * @param int $to
     *                end time
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * Get user defined query.
     *
     * @return string user defined query
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set user defined query.
     *
     * @param string $query
     *                      user defined query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }

    /**
     * Get max line number of return logs.
     *
     * @return int max line number of return logs
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set max line number of return logs.
     *
     * @param int $line
     *                  max line number of return logs
     */
    public function setLine($line)
    {
        $this->line = $line;
    }

    /**
     * Get line offset of return logs.
     *
     * @return int line offset of return logs
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Set request line offset of return logs.
     *
     * @param int $offset
     *                    line offset of return logs
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * Get request reverse flag.
     *
     * @return bool reverse flag
     */
    public function getReverse()
    {
        return $this->reverse;
    }

    /**
     * Set request reverse flag.
     *
     * @param bool $reverse
     *                      reverse flag
     */
    public function setReverse($reverse)
    {
        $this->reverse = $reverse;
    }
}
