Caduco plugin for CakePHP 3
===========================

[![Build status][build svg]][build status]
[![Code coverage][coverage svg]][coverage]
[![License][license svg]][license]
[![Latest stable version][releases svg]][releases]
[![Total downloads][downloads svg]][downloads]
[![Code climate][climate svg]][climate]

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

License
-------

Copyright (c) 2016, [Cirici New Media][cirici] - licensed under [GNU GPL3 license][gnu].


[gnu]: LICENSE.md
[cirici]: https://cirici.com

[build status]: https://travis-ci.org/ciricihq/caduco
[coverage]: https://codecov.io/gh/ciricihq/caduco
[license]: https://github.com/ciricihq/caduco/blob/master/LICENSE.md
[releases]: https://github.com/ciricihq/caduco/releases
[downloads]: https://packagist.org/packages/ciricihq/caduco
[climate]: https://codeclimate.com/github/ciricihq/caduco

[build svg]: https://img.shields.io/travis/ciricihq/caduco/master.svg?style=flat-square
[coverage svg]: https://img.shields.io/codecov/c/github/ciricihq/caduco/master.svg?style=flat-square
[license svg]: https://img.shields.io/github/license/ciricihq/caduco.svg?style=flat-square
[releases svg]: https://img.shields.io/github/release/ciricihq/caduco.svg?style=flat-square
[downloads svg]: https://img.shields.io/packagist/dt/ciricihq/caduco.svg?style=flat-square
[climate svg]: https://img.shields.io/codeclimate/github/ciricihq/caduco.svg?style=flat-square
