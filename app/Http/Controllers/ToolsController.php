<?php

namespace App\Http\Controllers;

use App\Providers\Tools\ToolsServiceProvider;
use Illuminate\Http\Request;
use App\Model\Shorturl;

class ToolsController extends Controller
{

    public function __construct()
    {
        //注册tools服务类
        app()->register(ToolsServiceProvider::class);
    }

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
     * win系统先这样，整理一下线上思路用于备忘
     * 1.利用key-value缓存方法，当一个url申请短链接插入数据库同时将该原始url作为key，生成的短链接作为value缓存起来
     * 2.当有原始url过来申请生成时，以原始url为key查询该缓存，如果有立即返回该url已经生成的短链接
     *
     * @param Request $request
     */
    public function tdurlAction(Request $request)
    {

        try {

            if ($request->ajax())
            {

                $tdurlen = $request->input('tdurlen','');

                if(!empty($tdurlen))
                {
                    //处理短链接生成逻辑
                    $data = [

                        's_url' => $tdurlen,
                        'ip' => $request->getClientIp()

                    ];

                    $shorturl = Shorturl::create($data);

                    //先将自增id返回一个64进制数
                    $num = app('tdurl.tools')->hex10to64($shorturl->id);
                    //重新拼接出一个url地址
                    $url = 'tdurl.cn/'.$num;

                    json_return(0,'短链接已生成',['tdurlen' => $url]);
                }

            }

            json_return(2,'非法请求',[]);


        } catch (\Exception $e) {
            json_return(-1,$e->getMessage(),[]);
        }

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

            json_return(2,'非法请求',[]);


        } catch (\Exception $e) {
            //$e->getMessage()." ".$e->getFile()." ".$e->getLine();
            json_return(-1,$e->getMessage(),[]);
        }
    }
















}
