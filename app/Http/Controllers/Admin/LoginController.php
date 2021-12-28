<?php


namespace App\Http\Controllers\Admin;


use App\Services\Auth\AdminAuth;
use Illuminate\Http\Request;

class LoginController extends AdminController
{

    protected $except = [
        'login'
    ];
    public function login()
    {

    }


    public function logout()
    {

    }

    public function info(Request $request,AdminAuth $adminAuth)
    {
       dd($adminAuth);
    }
}
