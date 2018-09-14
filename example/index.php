<?php

// Path to autoload.php created by composer.
require dirname(__FILE__).'/../vendor/autoload.php';


error_reporting(2);

// LND node IP and Port (lnd option "rpcport").
$lndIp   = '127.0.0.1:10001';

// We need to set env variables to make ssl work:
putenv('GRPC_SSL_CIPHER_SUITES=ECDHE-RSA-AES128-GCM-SHA256:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-AES128-SHA256');

// Get tls and macaroon paths.
$tlsPath = '';
$macaroonPath = '';
$local_user = posix_getpwuid(posix_getuid());

switch (PHP_OS) {
  case "Darwin":
    $tlsPath = $local_user['dir'] . '/Library/Application Support/Lnd/tls.cert';
    $macaroonPath = $local_user['dir'] . '/Library/Application Support/Lnd/macaroon.admin';
    break;

  case "Linux":
    $tlsPath = $local_user['dir'] . '/.lnd/tls.cert';
    $macaroonPath = $local_user['dir'] . '/.lnd/macaroon.admin';
}

if (! $sslCert = file_get_contents($tlsPath)) {
  $certError = <<<EOT
    tls.cert not found in "example" directory. Make sure to copy it from your 
    LND config directory.
    MacOS: ~/Library/Application Support/Lnd/tls.cert
    Linux: ~/.lnd/tls.cert
EOT;

  throw new Exception($certError);
}

//// OVERWRITE MACAROON locally
$macaroonPath = "/Users/ndeet/go/dev/alice/test_data/admin.macaroon";

// Unlock the encrypted wallet.
$unlockWallet = new Lnrpc\WalletUnlockerClient($lndIp, [
  'credentials' => Grpc\ChannelCredentials::createSsl($sslCert)
]);
if (is_null($unlockWallet)) {
  throw new Exception('Could not connect or authenticate to LND node (unlockWallet).');
}
$unlockWalletRequest = new Lnrpc\UnlockWalletRequest();
$unlockWalletRequest->setWalletPassword("alicelight");
/** @var $reply Lnrpc\UnlockWalletResponse */
list($reply, $status) = $unlockWallet->UnlockWallet($unlockWalletRequest)->wait();
var_dump($reply);



$channel_credentials = Grpc\ChannelCredentials::createComposite(
  Grpc\ChannelCredentials::createSsl($sslCert),
  Grpc\CallCredentials::createFromPlugin('addMacaroon')
);

$opts = [
  'credentials' => $channel_credentials
];

function addMacaroon($context) {
  return [
    'Grpc-Metadata-macaroon' => [file_get_contents("/Users/ndeet/go/dev/alice/test_data/admin.macaroon")]
    ];
}

// Create new client using SSL connection.
//$client = new Lnrpc\LightningClient($lndIp, $opts);
/*
// Create new client using SSL connection.
$client = new Lnrpc\LightningClient($lndIp, [
  'credentials' => Grpc\ChannelCredentials::createSsl($sslCert),
  'Grpc-Metadata-macaroon' => bin2hex(file_get_contents($macaroonPath))
]);
*/
try {
  $client = new Lnrpc\LightningClient($lndIp, [
    'credentials' => Grpc\ChannelCredentials::createSsl($sslCert),
    'update_metadata' => addMacaroon('kasdkf')
  ]);
  var_dump($client);
} catch (Exception $e) {
  throw new Exception($e->getMessage());
}


if (is_null($client)) {
  throw new Exception('Could not connect or authenticate to LND node.');
}

// As example we get the public key of the lnd node.
// See directory "src/Lnrpc" for available classes.
print('GetInfo:' . PHP_EOL);
try {
  $getInfoRequest = new Lnrpc\GetInfoRequest();
  /** @var $reply Lnrpc\GetInfoResponse */
  list($reply, $status) = $client->GetInfo($getInfoRequest, addMacaroon('bla'))->wait();
  print_r($reply->getIdentityPubkey());
  print(PHP_EOL);
} catch (Exception $e) {
  print($e->getMessage());
}


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
