<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/biens']], [], []],
    'new' => [[], ['_controller' => 'App\\Controller\\AdminController::create'], [], [['text', '/new']], [], []],
    'edit' => [['id'], ['_controller' => 'App\\Controller\\AdminController::edit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/edit']], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/delete']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'bien' => [[], ['_controller' => 'App\\Controller\\HomeController::bien'], [], [['text', '/bien']], [], []],
    'like' => [['id'], ['_controller' => 'App\\Controller\\HomeController::like'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/like']], [], []],
    'show' => [['id'], ['_controller' => 'App\\Controller\\HomeController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/show']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'security_registration' => [[], ['_controller' => 'App\\Controller\\SecurityController::registration'], [], [['text', '/inscription']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/admin/user/']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/admin/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/user']], [], []],
    'admin_ajax_icon' => [[], ['filename' => null, '_controller' => 'Artgris\\Bundle\\MediaBundle\\Controller\\AjaxController::ajaxIcon'], [], [['text', '/ajax-icon/']], [], []],
    'admin_ajax_crop' => [[], ['_controller' => 'Artgris\\Bundle\\MediaBundle\\Controller\\AjaxController::ajaxCrop'], [], [['text', '/ajax-crop/']], [], []],
    'file_manager' => [[], ['_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::indexAction'], [], [['text', '/manager/']], [], []],
    'file_manager_rename' => [['fileName'], ['_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::renameFileAction'], [], [['variable', '/', '[^/]++', 'fileName'], ['text', '/manager/rename']], [], []],
    'file_manager_upload' => [[], ['_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::uploadFileAction'], [], [['text', '/manager/upload/']], [], []],
    'file_manager_file' => [['fileName'], ['_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::binaryFileResponseAction'], [], [['variable', '/', '[^/]++', 'fileName'], ['text', '/manager/file']], [], []],
    'file_manager_delete' => [[], ['_controller' => 'Artgris\\Bundle\\FileManagerBundle\\Controller\\ManagerController::deleteAction'], [], [['text', '/manager/delete/']], [], []],
];