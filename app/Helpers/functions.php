<?php

function json_return($code=0, $msg='', $data)
{
    header('Content-Type: application/json; charset=utf-8');
    exit(json_encode(array('code'=>(int)$code, 'msg'=>$msg, 'data'=>$data)));
}