<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class ApiAuthMiddle
{
    /**
     * The authentication guard factory instance.
     *
     * @var \Illuminate\Contracts\Auth\Factory
     */
    protected $auth;

    /**
     * Create a new middleware instance.
     *
     * @param \Illuminate\Contracts\Auth\Factory $auth
     * @return void
     */
    public function __construct()
    {
        $this->auth = Auth::guard('api');
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        app()->instance('App\Services\Auth\AdminAuth', Auth::guard('api')->user());
        return $next($request);
    }
}
