<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{

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


    public function base64()
    {

        return view('tools.base');

    }


    public function baseAction()
    {



    }
















}
