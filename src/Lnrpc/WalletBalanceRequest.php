<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.WalletBalanceRequest</code>
 */
class WalletBalanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool witness_only = 1;</code>
     */
    private $witness_only = false;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bool witness_only = 1;</code>
     * @return bool
     */
    public function getWitnessOnly()
    {
        return $this->witness_only;
    }

    /**
     * Generated from protobuf field <code>bool witness_only = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setWitnessOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->witness_only = $var;

        return $this;
    }

}

