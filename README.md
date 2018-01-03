Php lnd grpc client
===================

This library is a grpc client for [lnd](https://github.com/lightningnetwork/lnd) v0.2.1-alpha. It is generated code
from [rpc.proto](https://github.com/lightningnetwork/lnd/blob/2486097554baf8fe61b4e531e42d3c725dd0fca5/lnrpc/rpc.proto).


Requirements
============

To use this library you need to

* grpc extension
* php >= 5.6

Install grpc extension if not installed
```
# pecl install grpc
```

Add grpc.so to php.ini. For php5.6 in ubuntu it will be
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

If cloning from git
```
$ cd /project/
$ git clone repo
$ cd ./lnrpc/
$ composer install
```

Example
=======

Example of usage you can find in [example/index.php](https://github.com/BitfuryLightning/php-lnd-grpc-client/tree/master/example/index.php).
