<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RestrictByIP
{
    public function handle(Request $request, Closure $next)
    {      
        $allowedIps = DB::table('ipaddress')->pluck('ip_address')->toArray();

        if (!in_array($request->ip(), $allowedIps)) {
            abort(403, 'Access Denied: Your IP is not authorized.');
        }

        return $next($request);
    }
}