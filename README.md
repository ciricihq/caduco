DatePublished plugin for CakePHP 3
============================

## Installation

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

```
composer require ciricihq/DatePublished
```
Execute migration

```
bin/cake migrations migrate --plugin DatePublished
```
Execute seed

```
bin/cake migrations seed --plugin DatePublished
```

Configuration
-------------

First you need to load the plugin. To do so, edit your `bootstrap.php` file and
add line below:

```php
Plugin::load('DatePublished', ['bootstrap' => true]);
```
