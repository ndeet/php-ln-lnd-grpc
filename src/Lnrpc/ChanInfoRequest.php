<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChanInfoRequest</code>
 */
class ChanInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
     */
    private $chan_id = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
     * @return int|string
     */
    public function getChanId()
    {
        return $this->chan_id;
    }

    /**
     * Generated from protobuf field <code>uint64 chan_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setChanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->chan_id = $var;

        return $this;
    }

}

