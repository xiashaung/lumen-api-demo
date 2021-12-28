<?php


namespace App\Services\Auth;

/**
 * admin登录信息鉴权类
 */
class AdminAuth
{
    /**
     * 从token创建登录信息
     *
     * @param $token
     * @return static
     */
    public static function createFromToken($token)
    {
        return new static();
    }
}
