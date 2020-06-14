<?php

//Ticket public route
Route::get("$main_route_path/complete", 'Saadzer\Ticketit\Controllers\TicketsController@indexComplete')
        ->name("$main_route-complete");
Route::get("$main_route_path/data/{id?}", 'Saadzer\Ticketit\Controllers\TicketsController@data')
        ->name("$main_route.data");

$field_name = last(explode('/', $main_route_path));
Route::resource($main_route_path, 'Saadzer\Ticketit\Controllers\TicketsController', [
    'names' => [
        'index'   => $main_route.'.index',
        'store'   => $main_route.'.store',
        'create'  => $main_route.'.create',
        'update'  => $main_route.'.update',
        'show'    => $main_route.'.show',
        'destroy' => $main_route.'.destroy',
        'edit'    => $main_route.'.edit',
    ],
    'parameters' => [
        $field_name => 'ticket',
    ],
]);

//Ticket Comments public route
$field_name = last(explode('/', "$main_route_path-comment"));
Route::resource("$main_route_path-comment", 'Saadzer\Ticketit\Controllers\CommentsController', [
    'names' => [
        'index'   => "$main_route-comment.index",
        'store'   => "$main_route-comment.store",
        'create'  => "$main_route-comment.create",
        'update'  => "$main_route-comment.update",
        'show'    => "$main_route-comment.show",
        'destroy' => "$main_route-comment.destroy",
        'edit'    => "$main_route-comment.edit",
    ],
    'parameters' => [
        $field_name => 'ticket_comment',
    ],
]);

    
