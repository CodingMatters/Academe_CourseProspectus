<?php

/**
 * ZF2 Routing Scheme Configuration
 * 
 * @todo Enable Zend Expressive Route Configuration With Middleware
 * 
 * <code>
 *   'routes' => [
 *       [
 *           'name' => 'prospectus',
 *           'path' => '/prospectus',
 *           'middleware' => Academe\Prospectus\Action\DashboardPageAction::class,
 *           'allowed_methods' => ['GET'],
 *       ]
 *   ]
 * </code>
 */
return [
    'router' => [
        'routes' => [
            'prospectus' => [
                'type'      => 'Literal',
                'options'   => [
                    'route'     => '/courses',
                    'defaults'  => [
                        'middleware' => "Academe\Prospectus\Middleware\CourseMiddleware"
                    ]
                ],
                //                'may_terminate' => true,
                //                'child_routes' => []
            ]
        ]
    ]
];