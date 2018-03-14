<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ForwardingHistoryRequest</code>
 */
class ForwardingHistoryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; Start time is the starting point of the forwarding history request. All records beyond this point will be included, respecting the end time, and the index offset.
     *
     * Generated from protobuf field <code>uint64 start_time = 1[json_name = "start_time"];</code>
     */
    private $start_time = 0;
    /**
     *&#47; End time is the end point of the forwarding history request. The response will carry at most 50k records between the start time and the end time. The index offset can be used to implement pagination.
     *
     * Generated from protobuf field <code>uint64 end_time = 2[json_name = "end_time"];</code>
     */
    private $end_time = 0;
    /**
     *&#47; Index offset is the offset in the time series to start at. As each response can only contain 50k records, callers can use this to skip around within a packed time series.
     *
     * Generated from protobuf field <code>uint32 index_offset = 3[json_name = "index_offset"];</code>
     */
    private $index_offset = 0;
    /**
     *&#47; The max number of events to return in the response to this query.
     *
     * Generated from protobuf field <code>uint32 num_max_events = 4[json_name = "num_max_events"];</code>
     */
    private $num_max_events = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; Start time is the starting point of the forwarding history request. All records beyond this point will be included, respecting the end time, and the index offset.
     *
     * Generated from protobuf field <code>uint64 start_time = 1[json_name = "start_time"];</code>
     * @return int|string
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     *&#47; Start time is the starting point of the forwarding history request. All records beyond this point will be included, respecting the end time, and the index offset.
     *
     * Generated from protobuf field <code>uint64 start_time = 1[json_name = "start_time"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_time = $var;

        return $this;
    }

    /**
     *&#47; End time is the end point of the forwarding history request. The response will carry at most 50k records between the start time and the end time. The index offset can be used to implement pagination.
     *
     * Generated from protobuf field <code>uint64 end_time = 2[json_name = "end_time"];</code>
     * @return int|string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     *&#47; End time is the end point of the forwarding history request. The response will carry at most 50k records between the start time and the end time. The index offset can be used to implement pagination.
     *
     * Generated from protobuf field <code>uint64 end_time = 2[json_name = "end_time"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkUint64($var);
        $this->end_time = $var;

        return $this;
    }

    /**
     *&#47; Index offset is the offset in the time series to start at. As each response can only contain 50k records, callers can use this to skip around within a packed time series.
     *
     * Generated from protobuf field <code>uint32 index_offset = 3[json_name = "index_offset"];</code>
     * @return int
     */
    public function getIndexOffset()
    {
        return $this->index_offset;
    }

    /**
     *&#47; Index offset is the offset in the time series to start at. As each response can only contain 50k records, callers can use this to skip around within a packed time series.
     *
     * Generated from protobuf field <code>uint32 index_offset = 3[json_name = "index_offset"];</code>
     * @param int $var
     * @return $this
     */
    public function setIndexOffset($var)
    {
        GPBUtil::checkUint32($var);
        $this->index_offset = $var;

        return $this;
    }

    /**
     *&#47; The max number of events to return in the response to this query.
     *
     * Generated from protobuf field <code>uint32 num_max_events = 4[json_name = "num_max_events"];</code>
     * @return int
     */
    public function getNumMaxEvents()
    {
        return $this->num_max_events;
    }

    /**
     *&#47; The max number of events to return in the response to this query.
     *
     * Generated from protobuf field <code>uint32 num_max_events = 4[json_name = "num_max_events"];</code>
     * @param int $var
     * @return $this
     */
    public function setNumMaxEvents($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_max_events = $var;

        return $this;
    }

}

