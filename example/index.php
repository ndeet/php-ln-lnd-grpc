<?php

// Path to autoload.php created by composer.
require dirname(__FILE__).'/../vendor/autoload.php';

// LND node IP and Port (lnd option "rpcport").
$lndIp   = '127.0.0.1:10001';

// We need to set env variables to make ssl work:
putenv('GRPC_SSL_CIPHER_SUITES=ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-SHA256');

// This should be the public SSL certificate of your LND.
// We try to load the TLS cert from your users home directory.
// MacOS: ~/Library/Application Support/Lnd/tls.cert
// Linux: ~/.lnd/tls.cert
$local_user = posix_getpwuid(posix_getuid());
switch (PHP_OS) {
  case "Darwin":
    $tls_path = $local_user['dir'] . '/Library/Application Support/Lnd/tls.cert';
    break;

  case "Linux":
    $tls_path = $local_user['dir'] . '/.lnd/tls.cert';
}

if (! $sslCert = file_get_contents($tls_path)) {
  $certError = <<<EOT
    tls.cert not found in "example" directory. Make sure to copy it from your 
    LND config directory.
    MacOS: ~/Library/Application Support/Lnd/tls.cert
    Linux: ~/.lnd/tls.cert
EOT;

  throw new Exception($certError);
}

// Create new client using SSL connection.
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
/** @var $reply Lnrpc\WalletBalanceResponse */
list($reply, $status) = $client->WalletBalance($walletBalanceRequest)->wait();
print_r($reply->getTotalBalance());
print(PHP_EOL);

print('ChannelBalance:' . PHP_EOL);
$channelBalanceRequest = new Lnrpc\ChannelBalanceRequest();
/** @var $reply Lnrpc\ChannelBalanceResponse */
list($reply, $status) = $client->ChannelBalance($channelBalanceRequest)->wait();
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
