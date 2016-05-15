<?php

return [
    'view_manager' => [
        'template_map' => [
            'prospectus/index/index'           => __DIR__ . '/../../view/application/index/index.phtml',
        ],
        'template_path_stack'       => [
            'prospectus'   => __DIR__ . '/../templates/prospectus/'
        ],
    ]
];