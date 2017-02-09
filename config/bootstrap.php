<?php
use Cake\Core\Configure;
use Cake\Routing\DispatcherFactory;
Configure::write('Dateit', [
    'links' => [
        'logout' => null,
        'profile' => false,
        'forgot' => false
    ],
    'texts' => [
        'forgot' => 'I forgot my password'
    ]
]);
if (file_exists(CONFIG . 'dateit.php')) {
    Configure::load('dateit');
}
