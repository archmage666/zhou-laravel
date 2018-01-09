<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function unixtime()
    {

        return view('tools.unixtime');

    }

    public function unixtimeAction(Request $request)
    {

        if ($request->ajax())
        {
            $firstunixtime = $request->input('firstunixtime','');
            $secondunixtime = $request->input('secondunixtime','');

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


            json_return(2,'参数错误',[]);

        }


        json_return(3,'非法请求',[]);

    }
}
