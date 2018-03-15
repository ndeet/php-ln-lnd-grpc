PHP lnd gRPC client
===================

This library is a gRPC client for [lnd](https://github.com/lightningnetwork/lnd) version [0.4-beta](https://github.com/lightningnetwork/lnd/releases/tag/v0.4-beta). It is generated code
from [rpc.proto](https://github.com/lightningnetwork/lnd/blob/v0.4-beta/lnrpc/rpc.proto).


Requirements
============

To use this library you need to

* gRPC extension
* PHP >= 7.0

Install gRPC extension if not installed
```
# pecl install grpc
```

Add grpc.so to php.ini. For PHP 7.0 in Ubuntu it will be
```
# echo 'extension=grpc.so' >> /etc/php/7.0/cli/php.ini
```

Adding to project
=================

####Via composer
```
$ cd /project/
$ composer require ndeet/lnd-grpc-client
```

####Cloning from Git
```
$ cd /project/
$ git clone https://github.com/ndeet/php-lnd-grpc-client.git lnrpc
$ cd ./lnrpc/
$ composer install
```



Example
=======

Example of usage you can find in [example/index.php](https://github.com/ndeet/php-lnd-grpc-client/tree/master/example/index.php).

Credits
=======
This is a fork of [Bitfury Lighting gRPC PHP client](https://github.com/BitfuryLightning/php-lnd-grpc-client). Unfortunately they seem to have abandoned it and did not respond to issues/pull requests [#1](https://github.com/BitfuryLightning/php-lnd-grpc-client/issues/2) [#2](https://github.com/BitfuryLightning/php-lnd-grpc-client/pull/3) [#3](https://github.com/BitfuryLightning/php-lnd-grpc-client/pull/1). That's why this fork now lives here on its own.
