<?php
namespace Application\module;

return [
    'router' => [
        'routes' => [
            // Route::get('/hello/world');
            'hello-world' => [
                'type' => Laminas\Router\Http\Literal::class, // exact match of URI path
                'options' => [
                    'route' => '/hello/world', // URI path
                    'defaults' => [
                        'controller' => Application\Controller\HelloController::class, // unique name
                        'action'     => 'world',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        // Tell the application how to instantiate our controller class
        'factories' => [
            Application\Controller\HelloController::class => Laminas\ServiceManager\Factory\InvokableFactory::class,
        ],
    ],
];

