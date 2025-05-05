<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::number'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ebookReader/([^/]++)(*:28)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [
            [['_route' => 'ebook_reader', '_controller' => 'App\\Controller\\DefaultController::ebookReader'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
