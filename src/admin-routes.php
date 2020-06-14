<?php
Route::group(['middleware' => 'Saadzer\Ticketit\Middleware\IsAdminMiddleware'], function () use ($admin_route, $admin_route_path) {
    //Ticket admin index route (ex. http://url/tickets-admin/)
    Route::get("$admin_route_path/indicator/{indicator_period?}", [
            'as'   => $admin_route.'.dashboard.indicator',
            'uses' => 'Saadzer\Ticketit\Controllers\DashboardController@index',
    ]);
    Route::get($admin_route_path, 'Saadzer\Ticketit\Controllers\DashboardController@index');

    //Ticket statuses admin routes (ex. http://url/tickets-admin/status)
    Route::resource("$admin_route_path/status", 'Saadzer\Ticketit\Controllers\StatusesController', [
        'names' => [
            'index'   => "$admin_route.status.index",
            'store'   => "$admin_route.status.store",
            'create'  => "$admin_route.status.create",
            'update'  => "$admin_route.status.update",
            'show'    => "$admin_route.status.show",
            'destroy' => "$admin_route.status.destroy",
            'edit'    => "$admin_route.status.edit",
        ],
    ]);

    //Ticket priorities admin routes (ex. http://url/tickets-admin/priority)
    Route::resource("$admin_route_path/priority", 'Saadzer\Ticketit\Controllers\PrioritiesController', [
        'names' => [
            'index'   => "$admin_route.priority.index",
            'store'   => "$admin_route.priority.store",
            'create'  => "$admin_route.priority.create",
            'update'  => "$admin_route.priority.update",
            'show'    => "$admin_route.priority.show",
            'destroy' => "$admin_route.priority.destroy",
            'edit'    => "$admin_route.priority.edit",
        ],
    ]);

    //Agents management routes (ex. http://url/tickets-admin/agent)
    Route::resource("$admin_route_path/agent", 'Saadzer\Ticketit\Controllers\AgentsController', [
        'names' => [
            'index'   => "$admin_route.agent.index",
            'store'   => "$admin_route.agent.store",
            'create'  => "$admin_route.agent.create",
            'update'  => "$admin_route.agent.update",
            'show'    => "$admin_route.agent.show",
            'destroy' => "$admin_route.agent.destroy",
            'edit'    => "$admin_route.agent.edit",
        ],
    ]);

    //Agents management routes (ex. http://url/tickets-admin/agent)
    Route::resource("$admin_route_path/category", 'Saadzer\Ticketit\Controllers\CategoriesController', [
        'names' => [
            'index'   => "$admin_route.category.index",
            'store'   => "$admin_route.category.store",
            'create'  => "$admin_route.category.create",
            'update'  => "$admin_route.category.update",
            'show'    => "$admin_route.category.show",
            'destroy' => "$admin_route.category.destroy",
            'edit'    => "$admin_route.category.edit",
        ],
    ]);

    //Settings configuration routes (ex. http://url/tickets-admin/configuration)
    Route::resource("$admin_route_path/configuration", 'Saadzer\Ticketit\Controllers\ConfigurationsController', [
        'names' => [
            'index'   => "$admin_route.configuration.index",
            'store'   => "$admin_route.configuration.store",
            'create'  => "$admin_route.configuration.create",
            'update'  => "$admin_route.configuration.update",
            'show'    => "$admin_route.configuration.show",
            'destroy' => "$admin_route.configuration.destroy",
            'edit'    => "$admin_route.configuration.edit",
        ],
    ]);

    //Administrators configuration routes (ex. http://url/tickets-admin/administrators)
    Route::resource("$admin_route_path/administrator", 'Saadzer\Ticketit\Controllers\AdministratorsController', [
        'names' => [
            'index'   => "$admin_route.administrator.index",
            'store'   => "$admin_route.administrator.store",
            'create'  => "$admin_route.administrator.create",
            'update'  => "$admin_route.administrator.update",
            'show'    => "$admin_route.administrator.show",
            'destroy' => "$admin_route.administrator.destroy",
            'edit'    => "$admin_route.administrator.edit",
        ],
    ]);

    //Tickets demo data route (ex. http://url/tickets-admin/demo-seeds/)
    // Route::get("$admin_route/demo-seeds", 'Saadzer\Ticketit\Controllers\InstallController@demoDataSeeder');
});
