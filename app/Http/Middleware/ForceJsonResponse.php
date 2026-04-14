<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

final class ForceJsonResponse
{
    /**
     * Set the Accept header to application/json.
     */
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');

        $next($request);
    }
}
