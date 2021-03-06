<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/biens' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'new', '_controller' => 'App\\Controller\\AdminController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/bien' => [[['_route' => 'bien', '_controller' => 'App\\Controller\\HomeController::bien'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security_registration', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ajax-icon' => [[['_route' => 'admin_ajax_icon', 'filename' => null, '_controller' => 'Artgris\\Bundle\\MediaBundle\\Controller\\AjaxController::ajaxIcon'], null, null, null, true, false, null]],
        '/ajax-crop' => [[['_route' => 'admin_ajax_crop', '_controller' => 'Artgris\\Bundle\\MediaBundle\\Controller\\AjaxController::ajaxCrop'], null, null, null, true, false, null]],
        '/manager' => [[['_route' => 'file_manager', '_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::indexAction'], null, null, null, true, false, null]],
        '/manager/upload' => [[['_route' => 'file_manager_upload', '_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::uploadFileAction'], null, null, null, true, false, null]],
        '/manager/delete' => [[['_route' => 'file_manager_delete', '_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::deleteAction'], null, ['DELETE' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/edit/([^/]++)(*:183)'
                .'|/delete/([^/]++)(*:207)'
                .'|/like/([^/]++)(*:229)'
                .'|/show/([^/]++)(*:251)'
                .'|/admin/user/([^/]++)(?'
                    .'|(*:282)'
                    .'|/edit(*:295)'
                    .'|(*:303)'
                .')'
                .'|/manager/(?'
                    .'|rename/([^/]++)(*:339)'
                    .'|file/([^/]++)(*:360)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        183 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], null, null, false, true, null]],
        207 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'like', '_controller' => 'App\\Controller\\HomeController::like'], ['id'], null, null, false, true, null]],
        251 => [[['_route' => 'show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        295 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        303 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        339 => [[['_route' => 'file_manager_rename', '_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::renameFileAction'], ['fileName'], null, null, false, true, null]],
        360 => [
            [['_route' => 'file_manager_file', '_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::binaryFileResponseAction'], ['fileName'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
