<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('project-categories', ProjectCategoryController::class);
    $router->resource('project-tags', ProjectTagController::class);
    $router->resource('projects', ProjectController::class);
    $router->resource('project-medias', ProjectMediaController::class);

    $router->get('/project-files/{id}', 'ProjectFileController@view')->name('view-files');
});
