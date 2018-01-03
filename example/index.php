<?php

// Path to autoload.php created by composer.
require dirname(__FILE__).'/../vendor/autoload.php';

// LND node IP and Port (lnd option "rpcport").
$lndIp   = '127.0.0.1:10001';

// This should be the public SSL certificate of your LND.
// Copy from your lnd directory (or make sure both use the same cert):
// MacOS: ~/Library/Application Support/Lnd/tls.cert
// Linux: ~/.lnd/tls.cert
if (! $sslCert = file_get_contents(dirname(__FILE__) . '/tls.cert')) {
  $certError = <<<EOT
    tls.cert not found in "example" directory. Make sure to copy it from your 
    LND config directory.
    MacOS: ~/Library/Application Support/Lnd/tls.cert
    Linux: ~/.lnd/tls.cert
EOT;

  throw new Exception($certError);
}

$client = new Lnrpc\LightningClient($lndIp, [
  'credentials' => Grpc\ChannelCredentials::createSsl($sslCert)
]);

if (is_null($client)) {
  throw new Exception('Could not connect or authenticate to LND node.');
}

// As example we get the public key of the lnd node.
// See directory "src/Lnrpc" for available classes.
$request = new Lnrpc\GetInfoRequest();
/** @var $reply Lnrpc\GetInfoResponse */
list($reply, $status) = $client->GetInfo($request)->wait();
print_r($reply->getIdentityPubkey());
print("\n");
