PHP lnd gRPC client
===================

This library is a gRPC client for [lnd](https://github.com/lightningnetwork/lnd) master commit 5818bdba966570fd006b771a7263975b876bf868. It is generated code
from [rpc.proto](https://github.com/lightningnetwork/lnd/blob/97b7eb226d3b78b1f5700bdc311da180bbb2865d/lnrpc/rpc.proto).


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
