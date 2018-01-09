<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{

    /**
     * 短链接生成页面 模版
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tdurlEn()
    {

        return view('tools.tdurlEn');

    }

    public function tdurlDe()
    {

        return view('tools.tdurlDe');

    }

    /**
     * 短链接生成 解析 操作方法
     *
     * @param Request $request
     */
    public function tdurlAction(Request $request)
    {



    }


    /**
     * 时间戳转换view层
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function unixtime()
    {

        return view('tools.unixtime');

    }

    /**
     * 时间戳转换逻辑
     *
     * @param Request $request
     */
    public function unixtimeAction(Request $request)
    {

        if ($request->ajax())
        {
            $firstunixtime = $request->input('firstunixtime','');
            $secondunixtime = $request->input('secondunixtime','');
            $year = $request->input('year','');
            $month = $request->input('month','');
            $day = $request->input('day','');
            $hour = $request->input('hour','');
            $minute = $request->input('minute','');
            $second = $request->input('second','');

            if(!empty($firstunixtime))
            {

                $bjtime = date('Y-m-d H:i:s',$firstunixtime);

                json_return(0,'转换成功',['time' => $bjtime]);

            }

            if(!empty($secondunixtime))
            {

                $unixtime = strtotime($secondunixtime);

                if($unixtime === false){

                    json_return(1,'输入的时间有误',[]);

                }

                json_return(0,'转换成功',['unixtime' => $unixtime]);

            }

            if(!empty($year) && !empty($month) && !empty($day) && !empty($hour) && !empty($minute) && !empty($second))
            {

                $thirdunixtime = $year.'-'.$month.'-'.$day.' '.$hour.':'.$minute.':'.$second;

                $unixtime = strtotime($thirdunixtime);

                if($unixtime === false){

                    json_return(2,'输入的时间有误',[]);

                }

                json_return(0,'转换成功',['unixtime' => $unixtime]);

            }

            json_return(3,'参数错误',[]);

        }

        json_return(3,'非法请求',[]);
    }

    /**
     * base64视图模版
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function base64enc()
    {

        return view('tools.baseEnc');

    }

    public function base64dec()
    {

        return view('tools.baseDec');

    }

    /**
     * base64操作类
     *
     * @param Request $request
     */
    public function baseAction(Request $request)
    {

        if ($request->ajax())
        {

            $encode = $request->input('encode','');
            $decode = $request->input('decode','');

            if(!empty($encode))
            {

                $baseencode = base64_encode($encode);

                if($baseencode === false || $baseencode == ''){

                    json_return(2,'输入内容有误',[]);

                }

                json_return(0,'base64加密成功',['encode' => $baseencode]);

            }

            if(!empty($decode))
            {

                $basedecode = base64_decode($decode);

                if($basedecode === false || $basedecode == ''){

                    json_return(3,'输入内容有误',[]);

                }

                json_return(0,'base64解密成功',['decode' => $basedecode]);

            }

            json_return(4,'参数错误',[]);

        }

        json_return(1,'非法请求',[]);
    }

    /**
     * UrlEncode 加密模版
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function urlenc()
    {

        return view('tools.urlEnc');

    }

    /**
     * UrlDecode 解密模版
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function urldec()
    {

        return view('tools.urlDec');

    }

    /**
     * UrlEncode 加密/解密操方法
     *
     * @param Request $request
     */
    public function urlAction(Request $request)
    {
        try {

            if ($request->ajax())
            {

                $encode = $request->input('encode','');
                $decode = $request->input('decode','');

                if(!empty($encode))
                {

                    $urlencode = urlencode($encode);

                    json_return(0,'UrlEncode成功',['encode' => $urlencode]);

                }

                if(!empty($decode))
                {

                    $urldecode = urldecode($decode);

                    json_return(0,'UrlEncode成功',['decode' => $urldecode]);

                }

                json_return(1,'参数错误',[]);

            }


        } catch (\Exception $e) {
            //$e->getMessage()." ".$e->getFile()." ".$e->getLine();
            json_return(-1,$e->getMessage(),[]);
        }
    }
















}
