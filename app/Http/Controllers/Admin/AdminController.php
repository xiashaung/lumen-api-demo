<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Services\Auth\AdminAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController  extends  Controller
{
    protected $admin;

    protected $request;

    protected $middleware = [
        'App\Http\Middleware\AdminAuthMiddle' => [
            //排除不需要登录的方法
            'except' => ['login'],
        ],
    ];
}
