<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PaymentHash</code>
 */
class PaymentHash extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string r_hash_str = 1[json_name = "r_hash_str"];</code>
     */
    private $r_hash_str = '';
    /**
     * Generated from protobuf field <code>bytes r_hash = 2[json_name = "r_hash"];</code>
     */
    private $r_hash = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string r_hash_str = 1[json_name = "r_hash_str"];</code>
     * @return string
     */
    public function getRHashStr()
    {
        return $this->r_hash_str;
    }

    /**
     * Generated from protobuf field <code>string r_hash_str = 1[json_name = "r_hash_str"];</code>
     * @param string $var
     * @return $this
     */
    public function setRHashStr($var)
    {
        GPBUtil::checkString($var, True);
        $this->r_hash_str = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes r_hash = 2[json_name = "r_hash"];</code>
     * @return string
     */
    public function getRHash()
    {
        return $this->r_hash;
    }

    /**
     * Generated from protobuf field <code>bytes r_hash = 2[json_name = "r_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setRHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->r_hash = $var;

        return $this;
    }

}

