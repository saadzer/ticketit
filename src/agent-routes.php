<?php

Route::group(['middleware' => 'Saadzer\Ticketit\Middleware\IsAgentMiddleware'], function () use ($main_route, $main_route_path) {

    //API return list of agents in particular category
    Route::get("$main_route_path/agents/list/{category_id?}/{ticket_id?}", [
        'as'   => $main_route.'agentselectlist',
        'uses' => 'Saadzer\Ticketit\Controllers\TicketsController@agentSelectList',
    ]);
});
