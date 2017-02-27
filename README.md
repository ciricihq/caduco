Caduco plugin for CakePHP 3
===========================

This plugin allows you to easily stablish a begin and end dates to your ORM entities.

Installation
------------

You can install this plugin into your CakePHP application using [composer](http://getcomposer.org).

The recommended way to install composer packages is:

~~~bash
composer require ciricihq/caduco
~~~

Execute migration

~~~bash
bin/cake migrations migrate --plugin Cirici/Caduco
~~~
Execute seed

~~~bash
bin/cake migrations seed --plugin Cirici/Caduco
~~~

Configuration
-------------

First you need to load the plugin. To do so, edit your `bootstrap.php` file and
add line below:

~~~php
Plugin::load('Cirici/Caduco', ['bootstrap' => true]);
~~~

Usage
-----

TODO
