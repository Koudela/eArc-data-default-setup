# eArc-data-default-setup

This package bundles the following bridges for the [earc/data](https://github.com/Koudela/eArc-data)
abstraction:
* [earc/data-filesystem](https://github.com/Koudela/eArc-data-filesystem) entity backup
* [earc/data-redis](https://github.com/Koudela/eArc-data) entity caching
* [earc/data-elasticsearch](https://github.com/Koudela/eArc-data) entity searching
* [earc/data-primary-key-generator](https://github.com/Koudela/eArc-data-primary-key-generator) primary key auto generation

## installation

Install the earc/data-default-setup library via composer.

```bash
$ composer require earc/data-default-setup
```

## basic usage

Initialize the earc/data abstraction and the default setup in your index.php, 
bootstrap or configuration script.

```php
use eArc\DataDefaultSetup\Initializer;

Initializer::init();
```

Check the `ParameterInterface` for optional parameters that can be set via 
[earc/di](https://github.com/Koudela/eArc-di#parameters). For example the redis 
connection.

```php
use eArc\DataDefaultSetup\ParameterInterface;

$redisConnection = ['127.0.0.1', 6379];

di_set_param(ParameterInterface::REDIS_CONNECTION, $redisConnection);
di_set_param(ParameterInterface::KEY_GENERATOR_REDIS_CONNECTION, $redisConnection);
```

You may use for data/redis and earc/data-primary-key-generator different redis
servers. Thus, you have to set it twice.

## releases

### release 0.0

* first official release
