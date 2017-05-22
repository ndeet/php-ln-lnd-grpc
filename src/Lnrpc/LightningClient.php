<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Lnrpc {

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
     * @param \Lnrpc\PendingChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PendingChannels(\Lnrpc\PendingChannelRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/lnrpc.Lightning/PendingChannels',
      $argument,
      ['\Lnrpc\PendingChannelResponse', 'decode'],
      $metadata, $options);
    }

    /**
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
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SendPayment($metadata = [], $options = []) {
      return $this->_bidiRequest('/lnrpc.Lightning/SendPayment',
      ['\Lnrpc\SendResponse','decode'],
      $metadata, $options);
    }

    /**
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
     * @param \Lnrpc\SetAliasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SetAlias(\Lnrpc\SetAliasRequest $argument,
      $metadata = [], $options = []) {
      return $this->_simpleRequest('/lnrpc.Lightning/SetAlias',
      $argument,
      ['\Lnrpc\SetAliasResponse', 'decode'],
      $metadata, $options);
    }

    /**
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

  }

}
