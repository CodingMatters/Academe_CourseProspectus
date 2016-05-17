<?php

use Academe\Prospectus;

return [
    "dependencies" =>  [
        'aliases'       => [],        
        'invokables'    => [],
        'factories'     => [
            Prospectus\Page\IndexPage::class => Prospectus\Factory\PageFactory::class
        ],
    ]    
];