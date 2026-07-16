<?php

namespace Dcat\Admin\Http\Middleware;

use Dcat\Admin\Admin;
use Illuminate\Http\Request;

class Application
{
    public function handle(Request $request, \Closure $next, $app = null)
    {
        if ($app) {
            Admin::app()->switch($app);
        }

        return $next($request);
    }
}
