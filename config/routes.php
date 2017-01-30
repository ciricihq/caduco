<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'DatePublished',
    ['path' => '/date-published'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
