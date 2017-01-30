<?php
use Cake\Routing\Router;
Router::scope('/', function ($routes) {
    $routes->connect('/pages/test/', [
        'controller' => 'Pages',
        'action' => 'view',
        'plugin' => false,
        'admin' => false
    ]);
});
