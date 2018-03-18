<?php

/**
 * 返回json格式
 * @param int $code
 * @param string $msg
 * @param $data
 */
function json_return($code=0, $msg='', $data)
{
    header('Content-Type: application/json; charset=utf-8');
    exit(json_encode(array('code'=>(int)$code, 'msg'=>$msg, 'data'=>$data)));
}

/**
 * 判断字符串是否被base64编码过
 * @param $str
 * @return bool
 */
function is_base64($str){
    if($str==base64_encode(base64_decode($str))){
        return true;
    }else{
        return false;
    }
}