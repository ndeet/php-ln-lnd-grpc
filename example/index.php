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
print('GetInfo:' . PHP_EOL);
$getInfoRequest = new Lnrpc\GetInfoRequest();
/** @var $reply Lnrpc\GetInfoResponse */
list($reply, $status) = $client->GetInfo($getInfoRequest)->wait();
print_r($reply->getIdentityPubkey());
print(PHP_EOL);

print('WalletBalance:' . PHP_EOL);
$walletBalanceRequest = new Lnrpc\WalletBalanceRequest();
$walletBalanceRequest->setWitnessOnly(FALSE);
/** @var $reply Lnrpc\WalletBalanceResponse */
list($reply, $status) = $client->WalletBalance($walletBalanceRequest)->wait();
print_r($reply->getBalance());
print(PHP_EOL);

print('ChannelBalance:' . PHP_EOL);
/** @var $reply Lnrpc\ChannelBalanceResponse */
list($reply, $status) = $client->ChannelBalance(new Lnrpc\ChannelBalanceRequest())->wait();
print_r($reply->getBalance());
print(PHP_EOL);

print('GetTransactions:' . PHP_EOL);
/** @var $reply Lnrpc\TransactionDetails */
list($reply, $status) = $client->GetTransactions(new Lnrpc\GetTransactionsRequest())->wait();
$counter = 0;
foreach ($reply->getTransactions()->getIterator() as $key => $value) {
  /** var $value Lnrpc\Transaction */
  print_r($value->getAmount());
  print("\n");
  // Lets exit after 3 txs...
  $counter++;
  if ($counter >= 3) break;
}
print(PHP_EOL);

print('ListPeers:' . PHP_EOL);
/** @var $reply Lnrpc\ListPeersResponse */
list($reply, $status) = $client->ListPeers(new Lnrpc\ListPeersRequest())->wait();
$counter = 0;
foreach ($reply->getPeers()->getIterator() as $key => $value) {
  /** var $value Lnrpc\Peer */
  print_r($value->getPubKey());
  print("\n");
  // Lets exit after 3 txs...
  $counter++;
  if ($counter >= 3) break;
}
print(PHP_EOL);
