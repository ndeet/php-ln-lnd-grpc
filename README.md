PHP lnd gRPC client
===================

This library is a gRPC client for [lnd](https://github.com/lightningnetwork/lnd) version [0.4.1-beta](https://github.com/lightningnetwork/lnd/releases/tag/v0.4.1-beta). It is generated code
from [rpc.proto](https://github.com/lightningnetwork/lnd/blob/v0.4.1-beta/lnrpc/rpc.proto).


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

#### Via composer
```
$ cd /project/
$ composer require ndeet/ln-lnd-grpc
```

#### Cloning from Git
```
$ cd /project/
$ git clone https://github.com/ndeet/php-ln-lnd-grpc.git lndrpc
$ cd ./lnrpc/
$ composer install
```



Example
=======

Example of usage you can find in [example/index.php](https://github.com/ndeet/php-ln-lnd-grpc-client/tree/master/example/index.php).
Note: Currently the examples only work with macaroons disabled. Starting lnd with `--no-macaroons` option. The examples 
will be updated asap. 

Generation of PHP classes
=========================
As a primer to grpc and PHP see the [official tutorial](https://grpc.io/docs/quickstart/php.html) and the `lnrpc` [readme](https://github.com/lightningnetwork/lnd/tree/v0.4-beta/lnrpc).

The following command was used to generate the classes:
```
protoc -I/usr/local/include -I. -I$GOPATH/src -I$GOPATH/src/github.com/grpc-ecosystem/grpc-gateway/third_party/googleapis/ --php_out=src --grpc_out=src --plugin=protoc-gen-grpc=/usr/local/Cellar/grpc/1.9.1/bin/grpc_php_plugin rpc.proto
```

Credits
=======
This is a fork of [Bitfury Lighting gRPC PHP client](https://github.com/BitfuryLightning/php-lnd-grpc-client). Unfortunately they seem to have abandoned it and did not respond to issues/pull requests [#1](https://github.com/BitfuryLightning/php-lnd-grpc-client/issues/2) [#2](https://github.com/BitfuryLightning/php-lnd-grpc-client/pull/3) [#3](https://github.com/BitfuryLightning/php-lnd-grpc-client/pull/1). That's why this fork now lives here on its own.
