@extends('layouts.app')

@section('title')
Unix时间戳
@endsection

@section('styles')
<link href="{{ asset('css/tools.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="tools-unixtime">
        <div class="tools-unixtime-content">
            <div class="tools-unixtime-content-main">
                <div class="tools-unixtime-left">
                    <label>Unix时间戳（Unix timestamp）</label>
                    <input type="text" id="firstunixtime" name="firstunixtime" value="<?php echo time(); ?>" />
                </div>

                <div class="tools-unixtime-right">
                    <input type="button" value="转换成北京时间" id="firstbutton" class="tools-unixtime-right-con">
                    <input type="text" value="" id="firsttimeshow" size="20" readonly />
                </div>
                <div class="clear"></div>

                <div class="tools-unixtime-left mt50">
                    <label class="mr5">北京时间（年-月-日 时:分:秒）</label>
                    <input type="text" id="secondunixtime" name="secondunixtime" value="<?php echo date('Y-m-d H:i:s',time()); ?>" />
                </div>

                <div class="tools-unixtime-right mt50">
                    <input type="button" value="转换成Unix时间戳" id="secondbutton" class="tools-unixtime-right-con">
                    <input type="text" value="" id="secondtimeshow" size="20" readonly />
                </div>
                <div class="clear"></div>

                <div class="mt50">
                    <label class="YaHei fz14 col-blue02">北京时间</label>
                    <input type="text" size="2" tabindex="3" name="year" id="year" maxlength="4" value="<?php echo date('Y',time()); ?>">
                    <label>年</label>
                    <input type="text" size="1" tabindex="4" name="month" id="month" maxlength="2" >
                    <label>月</label>
                    <input type="text" size="1" tabindex="5" name="day" id="day" maxlength="2">
                    <label>日</label>
                    <input type="text" size="1" tabindex="6" name="hour" id="hour" maxlength="2">
                    <label>时</label>
                    <input type="text" size="1" tabindex="7" name="minute" id="minute" maxlength="2">
                    <label>分</label>
                    <input type="text" size="1" tabindex="8" name="second" id="second" maxlength="2">
                    <label>秒</label>
                    <input type="button" value="转换Unix时间戳" id="thirdbutton" class="tools-unixtime-right-con">
                    <input type="text" name="" id="thirdtimeshow" size="20" readonly="">
                </div>


            </div>
        </div>
    </div>
@endsection


@section('js')
<script src="{{ asset('js/tools.js') }}"></script>
@endsection