# correlate-php-core

---

## Overview

It's very difficult to track a request accross the system when we are working with microservices. We came out a solution for that. We generate a unique version 4 uuid for every request and every service passes this id via request header to other services. We call this **correlation ID**.

## Packages

- [proemergotech/correlate-php-laravel](https://github.com/proemergotech/correlate-php-laravel)
  - Middleware for Laravel and Lumen frameworks.
- [proemergotech/correlate-php-psr-7](https://github.com/proemergotech/correlate-php-psr-7)
  - Middleware for any PSR-7 compatible frameworks like [Slim Framework](https://www.slimframework.com/).
- [proemergotech/correlate-php-monolog](https://github.com/proemergotech/correlate-php-monolog)
  - Monolog processor for correlate middlewares (you don't have to use this directly).
- [proemergotech/correlate-php-guzzle](https://github.com/proemergotech/correlate-php-guzzle)
  - Guzzle middleware to add correlation id to every requests.
- [proemergotech/correlate-php-core](https://github.com/proemergotech/correlate-php-core)
  - Common package for correlate id middlewares to provide consistent header naming accross projects.

## Overview

It's very difficult to track a request accross the system when we work microservices. We came out a solution for that. We generate a unique version 4 uuid for every request and every service passes this id via request header to other services. We call this **correlation ID**.

## Installation

You should not use this directly. 

By the way if you want to use it directly, you can install it via composer.

```bash
$ composer require proemergotech/correlate-php-core
```

## Defaults

Default header name is ```X-Correlation-ID``` and default parameter name is ```x_correlation_id```.

## Usage

Generate a correlation id:
```php
\ProEmergotech\Correlate\Correlate\Correlate::id();
```

Other methods:
```php
\ProEmergotech\Correlate\Correlate::getHeaderName();
\ProEmergotech\Correlate\Correlate::getParamName();
\ProEmergotech\Correlate\Correlate::getGeneratorFunc();

// You can override defaults...
\ProEmergotech\Correlate\Correlate::setHeaderName('X-My-Correlation-ID');
\ProEmergotech\Correlate\Correlate::setParamName('my_correlation_id');
\ProEmergotech\Correlate\Correlate::setGeneratorFunc(function(){
  return uniqid();
});
```

## Contributing

See `CONTRIBUTING.md` file.

## Credits

This package developed by [Soma Szélpál](https://github.com/shakahl/) at [Pro Emergotech Ltd.](https://github.com/proemergotech/).

## License

This project is released under the [MIT License](http://www.opensource.org/licenses/MIT).
