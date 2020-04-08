<?php

namespace Saadzer\Ticketit\Middleware;

use Closure;
use Saadzer\Ticketit\Models\Agent;
use Saadzer\Ticketit\Models\Setting;

class IsAdminMiddleware
{
    /**
     * Run the request filter.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Agent::isAdmin()) {
            return $next($request);
        }

        return redirect()->route(Setting::grab('main_route') . '.index')
            ->with('warning', trans('ticketit::lang.you-are-not-permitted-to-access'));
    }
}
