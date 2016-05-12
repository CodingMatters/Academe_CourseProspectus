<?php

/**
 * ZF2 Routing Scheme Configuration
 */
return [
    'router' => [
        'routes' => [
            [
                'name' => 'prospectus',
                'path' => '/prospectus',
                'middleware' => Academe\Prospectus\Action\DashboardPageAction::class,
                'allowed_methods' => ['GET'],
            ],
        ]
    ]
];
