<?php

namespace Bailangzhan\Result;

class Result
{
    /**
     * @param $data
     * @return array
     */
    public static function success($data = [])
    {
        return static::end(ErrorCode::SUCCESS, ErrorCode::getMessage(ErrorCode::SUCCESS), $data);
    }

    /**
     * @param int $code
     * @param string $message
     * @param array $data
     * @return array
     */
    public static function error($message = '', $code = ErrorCode::ERROR, $data = [])
    {
        if (empty($message)) {
            return static::end($code, ErrorCode::getMessage($code), $data);
        } else {
            return static::end($code, $message, $data);
        }
    }

    /**
     * @param $code
     * @param $message
     * @param $data
     * @return array
     */
    protected static function end($code, $message, $data)
    {
        return [
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ];
    }
}

