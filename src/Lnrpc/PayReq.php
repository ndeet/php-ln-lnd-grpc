<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PayReq</code>
 */
class PayReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string destination = 1[json_name = "destination"];</code>
     */
    private $destination = '';
    /**
     * Generated from protobuf field <code>string payment_hash = 2[json_name = "payment_hash"];</code>
     */
    private $payment_hash = '';
    /**
     * Generated from protobuf field <code>int64 num_satoshis = 3[json_name = "num_satoshis"];</code>
     */
    private $num_satoshis = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string destination = 1[json_name = "destination"];</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Generated from protobuf field <code>string destination = 1[json_name = "destination"];</code>
     * @param string $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string payment_hash = 2[json_name = "payment_hash"];</code>
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->payment_hash;
    }

    /**
     * Generated from protobuf field <code>string payment_hash = 2[json_name = "payment_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 num_satoshis = 3[json_name = "num_satoshis"];</code>
     * @return int|string
     */
    public function getNumSatoshis()
    {
        return $this->num_satoshis;
    }

    /**
     * Generated from protobuf field <code>int64 num_satoshis = 3[json_name = "num_satoshis"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumSatoshis($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_satoshis = $var;

        return $this;
    }

}

