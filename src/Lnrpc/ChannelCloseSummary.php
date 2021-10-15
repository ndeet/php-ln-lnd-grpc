<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.ChannelCloseSummary</code>
 */
class ChannelCloseSummary extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The outpoint (txid:index) of the funding transaction. 
     *
     * Generated from protobuf field <code>string channel_point = 1[json_name = "channel_point"];</code>
     */
    private $channel_point = '';
    /**
     *&#47;  The unique channel ID for the channel. 
     *
     * Generated from protobuf field <code>uint64 chan_id = 2[json_name = "chan_id"];</code>
     */
    private $chan_id = 0;
    /**
     *&#47; The hash of the genesis block that this channel resides within.
     *
     * Generated from protobuf field <code>string chain_hash = 3[json_name = "chain_hash"];</code>
     */
    private $chain_hash = '';
    /**
     *&#47; The txid of the transaction which ultimately closed this channel.
     *
     * Generated from protobuf field <code>string closing_tx_hash = 4[json_name = "closing_tx_hash"];</code>
     */
    private $closing_tx_hash = '';
    /**
     *&#47; Public key of the remote peer that we formerly had a channel with.
     *
     * Generated from protobuf field <code>string remote_pubkey = 5[json_name = "remote_pubkey"];</code>
     */
    private $remote_pubkey = '';
    /**
     *&#47; Total capacity of the channel.
     *
     * Generated from protobuf field <code>int64 capacity = 6[json_name = "capacity"];</code>
     */
    private $capacity = 0;
    /**
     *&#47; Height at which the funding transaction was spent.
     *
     * Generated from protobuf field <code>uint32 close_height = 7[json_name = "close_height"];</code>
     */
    private $close_height = 0;
    /**
     *&#47; Settled balance at the time of channel closure
     *
     * Generated from protobuf field <code>int64 settled_balance = 8[json_name = "settled_balance"];</code>
     */
    private $settled_balance = 0;
    /**
     *&#47; The sum of all the time-locked outputs at the time of channel closure
     *
     * Generated from protobuf field <code>int64 time_locked_balance = 9[json_name = "time_locked_balance"];</code>
     */
    private $time_locked_balance = 0;
    /**
     *&#47; Details on how the channel was closed.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelCloseSummary.ClosureType close_type = 10[json_name = "close_type"];</code>
     */
    private $close_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $channel_point
     *          &#47; The outpoint (txid:index) of the funding transaction. 
     *     @type int|string $chan_id
     *          &#47;  The unique channel ID for the channel. 
     *     @type string $chain_hash
     *          &#47; The hash of the genesis block that this channel resides within.
     *     @type string $closing_tx_hash
     *          &#47; The txid of the transaction which ultimately closed this channel.
     *     @type string $remote_pubkey
     *          &#47; Public key of the remote peer that we formerly had a channel with.
     *     @type int|string $capacity
     *          &#47; Total capacity of the channel.
     *     @type int $close_height
     *          &#47; Height at which the funding transaction was spent.
     *     @type int|string $settled_balance
     *          &#47; Settled balance at the time of channel closure
     *     @type int|string $time_locked_balance
     *          &#47; The sum of all the time-locked outputs at the time of channel closure
     *     @type int $close_type
     *          &#47; Details on how the channel was closed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The outpoint (txid:index) of the funding transaction. 
     *
     * Generated from protobuf field <code>string channel_point = 1[json_name = "channel_point"];</code>
     * @return string
     */
    public function getChannelPoint()
    {
        return $this->channel_point;
    }

    /**
     *&#47; The outpoint (txid:index) of the funding transaction. 
     *
     * Generated from protobuf field <code>string channel_point = 1[json_name = "channel_point"];</code>
     * @param string $var
     * @return $this
     */
    public function setChannelPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_point = $var;

        return $this;
    }

    /**
     *&#47;  The unique channel ID for the channel. 
     *
     * Generated from protobuf field <code>uint64 chan_id = 2[json_name = "chan_id"];</code>
     * @return int|string
     */
    public function getChanId()
    {
        return $this->chan_id;
    }

    /**
     *&#47;  The unique channel ID for the channel. 
     *
     * Generated from protobuf field <code>uint64 chan_id = 2[json_name = "chan_id"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setChanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->chan_id = $var;

        return $this;
    }

    /**
     *&#47; The hash of the genesis block that this channel resides within.
     *
     * Generated from protobuf field <code>string chain_hash = 3[json_name = "chain_hash"];</code>
     * @return string
     */
    public function getChainHash()
    {
        return $this->chain_hash;
    }

    /**
     *&#47; The hash of the genesis block that this channel resides within.
     *
     * Generated from protobuf field <code>string chain_hash = 3[json_name = "chain_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setChainHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->chain_hash = $var;

        return $this;
    }

    /**
     *&#47; The txid of the transaction which ultimately closed this channel.
     *
     * Generated from protobuf field <code>string closing_tx_hash = 4[json_name = "closing_tx_hash"];</code>
     * @return string
     */
    public function getClosingTxHash()
    {
        return $this->closing_tx_hash;
    }

    /**
     *&#47; The txid of the transaction which ultimately closed this channel.
     *
     * Generated from protobuf field <code>string closing_tx_hash = 4[json_name = "closing_tx_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setClosingTxHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->closing_tx_hash = $var;

        return $this;
    }

    /**
     *&#47; Public key of the remote peer that we formerly had a channel with.
     *
     * Generated from protobuf field <code>string remote_pubkey = 5[json_name = "remote_pubkey"];</code>
     * @return string
     */
    public function getRemotePubkey()
    {
        return $this->remote_pubkey;
    }

    /**
     *&#47; Public key of the remote peer that we formerly had a channel with.
     *
     * Generated from protobuf field <code>string remote_pubkey = 5[json_name = "remote_pubkey"];</code>
     * @param string $var
     * @return $this
     */
    public function setRemotePubkey($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_pubkey = $var;

        return $this;
    }

    /**
     *&#47; Total capacity of the channel.
     *
     * Generated from protobuf field <code>int64 capacity = 6[json_name = "capacity"];</code>
     * @return int|string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     *&#47; Total capacity of the channel.
     *
     * Generated from protobuf field <code>int64 capacity = 6[json_name = "capacity"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->capacity = $var;

        return $this;
    }

    /**
     *&#47; Height at which the funding transaction was spent.
     *
     * Generated from protobuf field <code>uint32 close_height = 7[json_name = "close_height"];</code>
     * @return int
     */
    public function getCloseHeight()
    {
        return $this->close_height;
    }

    /**
     *&#47; Height at which the funding transaction was spent.
     *
     * Generated from protobuf field <code>uint32 close_height = 7[json_name = "close_height"];</code>
     * @param int $var
     * @return $this
     */
    public function setCloseHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->close_height = $var;

        return $this;
    }

    /**
     *&#47; Settled balance at the time of channel closure
     *
     * Generated from protobuf field <code>int64 settled_balance = 8[json_name = "settled_balance"];</code>
     * @return int|string
     */
    public function getSettledBalance()
    {
        return $this->settled_balance;
    }

    /**
     *&#47; Settled balance at the time of channel closure
     *
     * Generated from protobuf field <code>int64 settled_balance = 8[json_name = "settled_balance"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSettledBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->settled_balance = $var;

        return $this;
    }

    /**
     *&#47; The sum of all the time-locked outputs at the time of channel closure
     *
     * Generated from protobuf field <code>int64 time_locked_balance = 9[json_name = "time_locked_balance"];</code>
     * @return int|string
     */
    public function getTimeLockedBalance()
    {
        return $this->time_locked_balance;
    }

    /**
     *&#47; The sum of all the time-locked outputs at the time of channel closure
     *
     * Generated from protobuf field <code>int64 time_locked_balance = 9[json_name = "time_locked_balance"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeLockedBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->time_locked_balance = $var;

        return $this;
    }

    /**
     *&#47; Details on how the channel was closed.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelCloseSummary.ClosureType close_type = 10[json_name = "close_type"];</code>
     * @return int
     */
    public function getCloseType()
    {
        return $this->close_type;
    }

    /**
     *&#47; Details on how the channel was closed.
     *
     * Generated from protobuf field <code>.lnrpc.ChannelCloseSummary.ClosureType close_type = 10[json_name = "close_type"];</code>
     * @param int $var
     * @return $this
     */
    public function setCloseType($var)
    {
        GPBUtil::checkEnum($var, \Lnrpc\ChannelCloseSummary_ClosureType::class);
        $this->close_type = $var;

        return $this;
    }

}
