<?php

use Academe\Prospectus;
use CodingMatters\Kernel;

return [
    "dependencies" =>  [
        'aliases'       => [],        
        'invokables'    => [],
        'factories'     => [
            Prospectus\Page\IndexPage::class => Kernel\Factory\PageFactory::class
        ],
    ],
    'routes' => [
        [
            'name' => 'prospectus',
            'path' => '/prospectus',
            'middleware' => Academe\Prospectus\Page\IndexPage::class,
            'allowed_methods' => ['GET'],
        ]
    ]
];