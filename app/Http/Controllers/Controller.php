<?php

namespace App\Http\Controllers;

use App\Enum\CodeEnum;
use Illuminate\Http\JsonResponse;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    /**
     * 接口成功返回
     *
     * @param $data
     * @param $msg
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiSuccess($data,$msg = 'success'): JsonResponse
    {
        return $this->apiReturn(CodeEnum::API_SUCCESS, $msg, $data);
    }

    /**
     * 接口失败返回
     *
     * @param $msg
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiError($msg,$data = []):JsonResponse
    {
        return $this->apiReturn(CodeEnum::API_ERROR,$msg,$data);
    }

    /**
     * 接口返回格式化
     *
     * @param $code
     * @param $msg
     * @param $data
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiReturn($code,$msg,$data) : JsonResponse
    {
        $res = [
            'code' => $code,
            'msg' => $msg,
            'data' => $data,
        ];
        return new JsonResponse($res);
    }
}
