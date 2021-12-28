<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class AdminAuthMiddle
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
        $this->auth = Auth::guard('admin')->user();
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
        app()->instance('App\Services\Auth\AdminAuth', Auth::guard('admin')->user());
        return $next($request);
    }
}
