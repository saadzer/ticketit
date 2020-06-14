<?php

namespace Saadzer\Ticketit;
use Saadzer\Ticketit\Models\Setting;

class Ticketit
{

    

    public static function adminRoutes() 
    {
        $main_route = Setting::grab('main_route');
        $main_route_path = Setting::grab('main_route_path');
        $admin_route = Setting::grab('admin_route');
        $admin_route_path = Setting::grab('admin_route_path');
        require (__DIR__ . '/admin-routes.php');
    }

    public static function agentRoutes() 
    {
        $main_route = Setting::grab('main_route');
        $main_route_path = Setting::grab('main_route_path');
        $admin_route = Setting::grab('admin_route');
        $admin_route_path = Setting::grab('admin_route_path');
        require (__DIR__ . '/admin-routes.php');
    }

    public static function publicRoutes() 
    {
        $main_route = Setting::grab('main_route');
        $main_route_path = Setting::grab('main_route_path');
        $admin_route = Setting::grab('admin_route');
        $admin_route_path = Setting::grab('admin_route_path');
        require (__DIR__ . '/public-routes.php');
    }

}