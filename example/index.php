<?php

# Path to autoload.php created by composer
require dirname(__FILE__).'/../vendor/autoload.php';

class Client extends \Grpc\BaseStub
{
    public function __construct($hostname, $opts, $channel = null)
    {
        parent::__construct($hostname, $opts, $channel);
    }

    public function info($request)
    {
        return $this->_simpleRequest('/lnrpc.Lightning/GetInfo',
            $request,
            ['\Lnrpc\GetInfoResponse', 'decode']);
    }
}

$lndIp   = '127.0.0.1:3000'; //Lnd ip:grpc port
$client  = new Client($lndIp, ['credentials' => Grpc\ChannelCredentials::createInsecure()]);
$request = new Lnrpc\GetInfoRequest();
/** @var $reply Lnrpc\GetInfoResponse */
list($reply, $status) = $client->info($request)->wait();
print_r($reply->getIdentityPubkey());
print("\n");