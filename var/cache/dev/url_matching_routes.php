<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ShopController::index'], null, null, null, false, false, null]],
        '/produits' => [[['_route' => 'produits', '_controller' => 'App\\Controller\\ShopController::produits'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/Shop/(?'
                    .'|produitSingle/\\{([^/]+)\\}(*:76)'
                    .'|remove/([^/]++)(*:98)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        76 => [[['_route' => 'produitSingle', '_controller' => 'App\\Controller\\ShopController::produitSingle'], ['id'], null, null, false, false, null]],
        98 => [
            [['_route' => 'remove', '_controller' => 'App\\Controller\\ShopController::removeShop'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
