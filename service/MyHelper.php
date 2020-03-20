<?php

namespace app\service;

class MyHelper
{
    public static function mbCutString($str, $length = 200, $postfix = '...', $encoding = 'UTF-8')
    {
        if (mb_strlen($str, $encoding) <= $length) {
            return $str;
        }

        $tmp = mb_substr($str, 0, $length, $encoding);
        return mb_substr($tmp, 0, mb_strripos($tmp, ' ', 0, $encoding), $encoding) . $postfix;
    }
}