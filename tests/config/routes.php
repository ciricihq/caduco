<?php
use Cake\Routing\Router;
Router::scope('/', function ($routes) {
    $routes->connect('/pages/index/', [
        'controller' => 'Pages',
        'action' => 'index',
        'plugin' => false,
        'admin' => false
    ]);
});
