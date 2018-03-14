PHP lnd gRPC client
===================

This library is a gRPC client for [lnd](https://github.com/lightningnetwork/lnd) master commit 464f57d. It is generated code
from [rpc.proto](https://github.com/lightningnetwork/lnd/blob/464f57d3a5558ebb9f2521fcf7341e1e6b66115d/lnrpc/rpc.proto).


Requirements
============

To use this library you need to

* gRPC extension
* PHP >= 5.6

Install gRPC extension if not installed
```
# pecl install grpc
```

Add grpc.so to php.ini. For PHP 5.6 in ubuntu it will be
```
# echo 'extension=grpc.so' >> /etc/php/5.6/cli/php.ini
```

Adding to project
=================
Via composer
```
$ cd /project/
$ composer require bitfurylightning/lnrpc
```

If cloning from Git
```
$ cd /project/
$ git clone https://github.com/BitfuryLightning/php-lnd-grpc-client.git lnrpc
$ cd ./lnrpc/
$ composer install
```

Example
=======

Example of usage you can find in [example/index.php](https://github.com/BitfuryLightning/php-lnd-grpc-client/tree/master/example/index.php).
