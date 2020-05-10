<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;

class checkSiteActive
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Setting::all()->first()->isSiteActive && $request->segment(1) != 'admin') {
            $message = Setting::all()->first()->closingMessage;
            return abort(503, $message);
        }
        return $next($request);
    }
}
