<?php

return [
    'routes' => [
        [
            'name' => 'prospectus',
            'path' => '/prospectus',
            'middleware' => Academe\Prospectus\Page\IndexPage::class,
            'allowed_methods' => ['GET'],
        ]
    ]
];