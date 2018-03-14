<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.Payment</code>
 */
class Payment extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The payment hash
     *
     * Generated from protobuf field <code>string payment_hash = 1[json_name = "payment_hash"];</code>
     */
    private $payment_hash = '';
    /**
     *&#47; The value of the payment in satoshis
     *
     * Generated from protobuf field <code>int64 value = 2[json_name = "value"];</code>
     */
    private $value = 0;
    /**
     *&#47; The date of this payment
     *
     * Generated from protobuf field <code>int64 creation_date = 3[json_name = "creation_date"];</code>
     */
    private $creation_date = 0;
    /**
     *&#47; The path this payment took
     *
     * Generated from protobuf field <code>repeated string path = 4[json_name = "path"];</code>
     */
    private $path;
    /**
     *&#47; The fee paid for this payment in satoshis
     *
     * Generated from protobuf field <code>int64 fee = 5[json_name = "fee"];</code>
     */
    private $fee = 0;
    /**
     *&#47; The payment preimage
     *
     * Generated from protobuf field <code>string payment_preimage = 6[json_name = "payment_preimage"];</code>
     */
    private $payment_preimage = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     *&#47; The payment hash
     *
     * Generated from protobuf field <code>string payment_hash = 1[json_name = "payment_hash"];</code>
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->payment_hash;
    }

    /**
     *&#47; The payment hash
     *
     * Generated from protobuf field <code>string payment_hash = 1[json_name = "payment_hash"];</code>
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
     *&#47; The value of the payment in satoshis
     *
     * Generated from protobuf field <code>int64 value = 2[json_name = "value"];</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     *&#47; The value of the payment in satoshis
     *
     * Generated from protobuf field <code>int64 value = 2[json_name = "value"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

    /**
     *&#47; The date of this payment
     *
     * Generated from protobuf field <code>int64 creation_date = 3[json_name = "creation_date"];</code>
     * @return int|string
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     *&#47; The date of this payment
     *
     * Generated from protobuf field <code>int64 creation_date = 3[json_name = "creation_date"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationDate($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_date = $var;

        return $this;
    }

    /**
     *&#47; The path this payment took
     *
     * Generated from protobuf field <code>repeated string path = 4[json_name = "path"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     *&#47; The path this payment took
     *
     * Generated from protobuf field <code>repeated string path = 4[json_name = "path"];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPath($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->path = $arr;

        return $this;
    }

    /**
     *&#47; The fee paid for this payment in satoshis
     *
     * Generated from protobuf field <code>int64 fee = 5[json_name = "fee"];</code>
     * @return int|string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     *&#47; The fee paid for this payment in satoshis
     *
     * Generated from protobuf field <code>int64 fee = 5[json_name = "fee"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee = $var;

        return $this;
    }

    /**
     *&#47; The payment preimage
     *
     * Generated from protobuf field <code>string payment_preimage = 6[json_name = "payment_preimage"];</code>
     * @return string
     */
    public function getPaymentPreimage()
    {
        return $this->payment_preimage;
    }

    /**
     *&#47; The payment preimage
     *
     * Generated from protobuf field <code>string payment_preimage = 6[json_name = "payment_preimage"];</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentPreimage($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_preimage = $var;

        return $this;
    }

}

