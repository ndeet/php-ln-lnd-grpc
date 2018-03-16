<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lnrpc;

/**
 */
class LightningClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * * lncli: `walletbalance`
     * WalletBalance returns total unspent outputs(confirmed and unconfirmed), all
     * confirmed unspent outputs and all unconfirmed unspent outputs under control
     * of the wallet. 
     * @param \Lnrpc\WalletBalanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function WalletBalance(\Lnrpc\WalletBalanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/WalletBalance',
        $argument,
        ['\Lnrpc\WalletBalanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `channelbalance`
     * ChannelBalance returns the total funds available across all open channels
     * in satoshis.
     * @param \Lnrpc\ChannelBalanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ChannelBalance(\Lnrpc\ChannelBalanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ChannelBalance',
        $argument,
        ['\Lnrpc\ChannelBalanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `listchaintxns`
     * GetTransactions returns a list describing all the known transactions
     * relevant to the wallet.
     * @param \Lnrpc\GetTransactionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetTransactions(\Lnrpc\GetTransactionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetTransactions',
        $argument,
        ['\Lnrpc\TransactionDetails', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `sendcoins`
     * SendCoins executes a request to send coins to a particular address. Unlike
     * SendMany, this RPC call only allows creating a single output at a time. If
     * neither target_conf, or sat_per_byte are set, then the internal wallet will
     * consult its fee model to determine a fee for the default confirmation
     * target.
     * @param \Lnrpc\SendCoinsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendCoins(\Lnrpc\SendCoinsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/SendCoins',
        $argument,
        ['\Lnrpc\SendCoinsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * SubscribeTransactions creates a uni-directional stream from the server to
     * the client in which any newly discovered transactions relevant to the
     * wallet are sent over.
     * @param \Lnrpc\GetTransactionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SubscribeTransactions(\Lnrpc\GetTransactionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/SubscribeTransactions',
        $argument,
        ['\Lnrpc\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `sendmany`
     * SendMany handles a request for a transaction that creates multiple specified
     * outputs in parallel. If neither target_conf, or sat_per_byte are set, then
     * the internal wallet will consult its fee model to determine a fee for the
     * default confirmation target.
     * @param \Lnrpc\SendManyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendMany(\Lnrpc\SendManyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/SendMany',
        $argument,
        ['\Lnrpc\SendManyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `newaddress`
     * NewAddress creates a new address under control of the local wallet.
     * @param \Lnrpc\NewAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function NewAddress(\Lnrpc\NewAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/NewAddress',
        $argument,
        ['\Lnrpc\NewAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * NewWitnessAddress creates a new witness address under control of the local wallet.
     * @param \Lnrpc\NewWitnessAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function NewWitnessAddress(\Lnrpc\NewWitnessAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/NewWitnessAddress',
        $argument,
        ['\Lnrpc\NewAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `signmessage`
     * SignMessage signs a message with this node's private key. The returned
     * signature string is `zbase32` encoded and pubkey recoverable, meaning that
     * only the message digest and signature are needed for verification.
     * @param \Lnrpc\SignMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SignMessage(\Lnrpc\SignMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/SignMessage',
        $argument,
        ['\Lnrpc\SignMessageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `verifymessage`
     * VerifyMessage verifies a signature over a msg. The signature must be
     * zbase32 encoded and signed by an active node in the resident node's
     * channel database. In addition to returning the validity of the signature,
     * VerifyMessage also returns the recovered pubkey from the signature.
     * @param \Lnrpc\VerifyMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function VerifyMessage(\Lnrpc\VerifyMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/VerifyMessage',
        $argument,
        ['\Lnrpc\VerifyMessageResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `connect`
     * ConnectPeer attempts to establish a connection to a remote peer. This is at
     * the networking level, and is used for communication between nodes. This is
     * distinct from establishing a channel with a peer.
     * @param \Lnrpc\ConnectPeerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ConnectPeer(\Lnrpc\ConnectPeerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ConnectPeer',
        $argument,
        ['\Lnrpc\ConnectPeerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `disconnect`
     * DisconnectPeer attempts to disconnect one peer from another identified by a
     * given pubKey. In the case that we currently have a pending or active channel
     * with the target peer, then this action will be not be allowed.
     * @param \Lnrpc\DisconnectPeerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DisconnectPeer(\Lnrpc\DisconnectPeerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DisconnectPeer',
        $argument,
        ['\Lnrpc\DisconnectPeerResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `listpeers`
     * ListPeers returns a verbose listing of all currently active peers.
     * @param \Lnrpc\ListPeersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListPeers(\Lnrpc\ListPeersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListPeers',
        $argument,
        ['\Lnrpc\ListPeersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `getinfo`
     * GetInfo returns general information concerning the lightning node including
     * it's identity pubkey, alias, the chains it is connected to, and information
     * concerning the number of open+pending channels.
     * @param \Lnrpc\GetInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInfo(\Lnrpc\GetInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetInfo',
        $argument,
        ['\Lnrpc\GetInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * TODO(roasbeef): merge with below with bool?
     *
     * * lncli: `pendingchannels`
     * PendingChannels returns a list of all the channels that are currently
     * considered "pending". A channel is pending if it has finished the funding
     * workflow and is waiting for confirmations for the funding txn, or is in the
     * process of closure, either initiated cooperatively or non-cooperatively.
     * @param \Lnrpc\PendingChannelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PendingChannels(\Lnrpc\PendingChannelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/PendingChannels',
        $argument,
        ['\Lnrpc\PendingChannelsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `listchannels`
     * ListChannels returns a description of all the open channels that this node
     * is a participant in.
     * @param \Lnrpc\ListChannelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListChannels(\Lnrpc\ListChannelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListChannels',
        $argument,
        ['\Lnrpc\ListChannelsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * OpenChannelSync is a synchronous version of the OpenChannel RPC call. This
     * call is meant to be consumed by clients to the REST proxy. As with all
     * other sync calls, all byte slices are intended to be populated as hex
     * encoded strings.
     * @param \Lnrpc\OpenChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function OpenChannelSync(\Lnrpc\OpenChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/OpenChannelSync',
        $argument,
        ['\Lnrpc\ChannelPoint', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `openchannel`
     * OpenChannel attempts to open a singly funded channel specified in the
     * request to a remote peer. Users are able to specify a target number of
     * blocks that the funding transaction should be confirmed in, or a manual fee
     * rate to us for the funding transaction. If neither are specified, then a
     * lax block confirmation target is used.
     * @param \Lnrpc\OpenChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function OpenChannel(\Lnrpc\OpenChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/OpenChannel',
        $argument,
        ['\Lnrpc\OpenStatusUpdate', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `closechannel`
     * CloseChannel attempts to close an active channel identified by its channel
     * outpoint (ChannelPoint). The actions of this method can additionally be
     * augmented to attempt a force close after a timeout period in the case of an
     * inactive peer. If a non-force close (cooperative closure) is requested,
     * then the user can specify either a target number of blocks until the
     * closure transaction is confirmed, or a manual fee rate. If neither are
     * specified, then a default lax, block confirmation target is used.
     * @param \Lnrpc\CloseChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CloseChannel(\Lnrpc\CloseChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/CloseChannel',
        $argument,
        ['\Lnrpc\CloseStatusUpdate', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `sendpayment`
     * SendPayment dispatches a bi-directional streaming RPC for sending payments
     * through the Lightning Network. A single RPC invocation creates a persistent
     * bi-directional stream allowing clients to rapidly send payments through the
     * Lightning Network with a single persistent connection.
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendPayment($metadata = [], $options = []) {
        return $this->_bidiRequest('/lnrpc.Lightning/SendPayment',
        ['\Lnrpc\SendResponse','decode'],
        $metadata, $options);
    }

    /**
     * *
     * SendPaymentSync is the synchronous non-streaming version of SendPayment.
     * This RPC is intended to be consumed by clients of the REST proxy.
     * Additionally, this RPC expects the destination's public key and the payment
     * hash (if any) to be encoded as hex strings.
     * @param \Lnrpc\SendRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendPaymentSync(\Lnrpc\SendRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/SendPaymentSync',
        $argument,
        ['\Lnrpc\SendResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `addinvoice`
     * AddInvoice attempts to add a new invoice to the invoice database. Any
     * duplicated invoices are rejected, therefore all invoices *must* have a
     * unique payment preimage.
     * @param \Lnrpc\Invoice $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddInvoice(\Lnrpc\Invoice $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/AddInvoice',
        $argument,
        ['\Lnrpc\AddInvoiceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `listinvoices`
     * ListInvoices returns a list of all the invoices currently stored within the
     * database. Any active debug invoices are ignored.
     * @param \Lnrpc\ListInvoiceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListInvoices(\Lnrpc\ListInvoiceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListInvoices',
        $argument,
        ['\Lnrpc\ListInvoiceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `lookupinvoice`
     * LookupInvoice attempts to look up an invoice according to its payment hash.
     * The passed payment hash *must* be exactly 32 bytes, if not, an error is
     * returned.
     * @param \Lnrpc\PaymentHash $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function LookupInvoice(\Lnrpc\PaymentHash $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/LookupInvoice',
        $argument,
        ['\Lnrpc\Invoice', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * SubscribeInvoices returns a uni-directional stream (sever -> client) for
     * notifying the client of newly added/settled invoices.
     * @param \Lnrpc\InvoiceSubscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SubscribeInvoices(\Lnrpc\InvoiceSubscription $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/SubscribeInvoices',
        $argument,
        ['\Lnrpc\Invoice', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `decodepayreq`
     * DecodePayReq takes an encoded payment request string and attempts to decode
     * it, returning a full description of the conditions encoded within the
     * payment request.
     * @param \Lnrpc\PayReqString $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DecodePayReq(\Lnrpc\PayReqString $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DecodePayReq',
        $argument,
        ['\Lnrpc\PayReq', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `listpayments`
     * ListPayments returns a list of all outgoing payments.
     * @param \Lnrpc\ListPaymentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListPayments(\Lnrpc\ListPaymentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ListPayments',
        $argument,
        ['\Lnrpc\ListPaymentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * DeleteAllPayments deletes all outgoing payments from DB.
     * @param \Lnrpc\DeleteAllPaymentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteAllPayments(\Lnrpc\DeleteAllPaymentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DeleteAllPayments',
        $argument,
        ['\Lnrpc\DeleteAllPaymentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `describegraph`
     * DescribeGraph returns a description of the latest graph state from the
     * point of view of the node. The graph information is partitioned into two
     * components: all the nodes/vertexes, and all the edges that connect the
     * vertexes themselves.  As this is a directed graph, the edges also contain
     * the node directional specific routing policy which includes: the time lock
     * delta, fee information, etc.
     * @param \Lnrpc\ChannelGraphRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DescribeGraph(\Lnrpc\ChannelGraphRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DescribeGraph',
        $argument,
        ['\Lnrpc\ChannelGraph', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `getchaninfo`
     * GetChanInfo returns the latest authenticated network announcement for the
     * given channel identified by its channel ID: an 8-byte integer which
     * uniquely identifies the location of transaction's funding output within the
     * blockchain.
     * @param \Lnrpc\ChanInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetChanInfo(\Lnrpc\ChanInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetChanInfo',
        $argument,
        ['\Lnrpc\ChannelEdge', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `getnodeinfo`
     * GetNodeInfo returns the latest advertised, aggregated, and authenticated
     * channel information for the specified node identified by its public key.
     * @param \Lnrpc\NodeInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNodeInfo(\Lnrpc\NodeInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetNodeInfo',
        $argument,
        ['\Lnrpc\NodeInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `queryroutes`
     * QueryRoutes attempts to query the daemon's Channel Router for a possible
     * route to a target destination capable of carrying a specific amount of
     * satoshis. The retuned route contains the full details required to craft and
     * send an HTLC, also including the necessary information that should be
     * present within the Sphinx packet encapsulated within the HTLC.
     * @param \Lnrpc\QueryRoutesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function QueryRoutes(\Lnrpc\QueryRoutesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/QueryRoutes',
        $argument,
        ['\Lnrpc\QueryRoutesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `getnetworkinfo`
     * GetNetworkInfo returns some basic stats about the known channel graph from
     * the point of view of the node.
     * @param \Lnrpc\NetworkInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetNetworkInfo(\Lnrpc\NetworkInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/GetNetworkInfo',
        $argument,
        ['\Lnrpc\NetworkInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `stop`
     * StopDaemon will send a shutdown request to the interrupt handler, triggering
     * a graceful shutdown of the daemon.
     * @param \Lnrpc\StopRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StopDaemon(\Lnrpc\StopRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/StopDaemon',
        $argument,
        ['\Lnrpc\StopResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * SubscribeChannelGraph launches a streaming RPC that allows the caller to
     * receive notifications upon any changes to the channel graph topology from
     * the point of view of the responding node. Events notified include: new
     * nodes coming online, nodes updating their authenticated attributes, new
     * channels being advertised, updates in the routing policy for a directional
     * channel edge, and when channels are closed on-chain.
     * @param \Lnrpc\GraphTopologySubscription $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SubscribeChannelGraph(\Lnrpc\GraphTopologySubscription $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/lnrpc.Lightning/SubscribeChannelGraph',
        $argument,
        ['\Lnrpc\GraphTopologyUpdate', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `debuglevel`
     * DebugLevel allows a caller to programmatically set the logging verbosity of
     * lnd. The logging can be targeted according to a coarse daemon-wide logging
     * level, or in a granular fashion to specify the logging for a target
     * sub-system.
     * @param \Lnrpc\DebugLevelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DebugLevel(\Lnrpc\DebugLevelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/DebugLevel',
        $argument,
        ['\Lnrpc\DebugLevelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `feereport`
     * FeeReport allows the caller to obtain a report detailing the current fee
     * schedule enforced by the node globally for each channel.
     * @param \Lnrpc\FeeReportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function FeeReport(\Lnrpc\FeeReportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/FeeReport',
        $argument,
        ['\Lnrpc\FeeReportResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `updatechanpolicy`
     * UpdateChannelPolicy allows the caller to update the fee schedule and
     * channel policies for all channels globally, or a particular channel.
     * @param \Lnrpc\PolicyUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateChannelPolicy(\Lnrpc\PolicyUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/UpdateChannelPolicy',
        $argument,
        ['\Lnrpc\PolicyUpdateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * * lncli: `fwdinghistory`
     * ForwardingHistory allows the caller to query the htlcswitch for a record of
     * all HTLC's forwarded within the target time range, and integer offset
     * within that time range. If no time-range is specified, then the first chunk
     * of the past 24 hrs of forwarding history are returned.
     *
     * A list of forwarding events are returned. The size of each forwarding event
     * is 40 bytes, and the max message size able to be returned in gRPC is 4 MiB.
     * As a result each message can only contain 50k entries.  Each response has
     * the index offset of the last entry. The index offset can be provided to the
     * request to allow the caller to skip a series of records.
     * @param \Lnrpc\ForwardingHistoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ForwardingHistory(\Lnrpc\ForwardingHistoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/lnrpc.Lightning/ForwardingHistory',
        $argument,
        ['\Lnrpc\ForwardingHistoryResponse', 'decode'],
        $metadata, $options);
    }

}
