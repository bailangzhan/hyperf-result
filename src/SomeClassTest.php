<?php

namespace Bailangzhan\Result;

//require_once dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Class SomeClassTest
 * @package BaiLangZhan
 */
class SomeClassTest
{
    /**
     * 需要输出正确内容
     * @return array
     */
    public function success()
    {
        $result = [
            'name' => 'Bailangzhan',
        ];

        return Result::success($result);
    }

    /**
     * 需要输出错误内容时，可自定义code和消息内容
     * @return array
     */
    public function error()
    {
        return Result::error('not found');
        // return Result::error('not found', 404, []);
    }
}

//$someClass = new SomeClassTest();
//
//var_dump(json_encode($someClass->success()));
//var_dump(json_encode($someClass->error()));

// 分别输出结果如下
// string(55) "{"code":200,"message":"","data":{"name":"Bailangzhan"}}"
// string(42) "{"code":0,"message":"not found","data":[]}"

// 输出的数据格式固定 code message data