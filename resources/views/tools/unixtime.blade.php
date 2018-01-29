@extends('layouts.app')

@section('title')
    Unix时间戳
@endsection

@section('styles')
    <link href="{{ asset('css/tools.css') }}" rel="stylesheet" type="text/css">
@endsection


@section('content')
    <div class="tools-unixtime">
        <div class="tools-breadcrumbs">
            <div class="tools-breadcrumbs-text">
                <label class="ml10">当前位置：</label>
                <a href="/">IT工具</a>
                <label>></label>
                <a href="javascript:void(0);">Unix时间戳转换</a>
            </div>
        </div>
        <div class="tools-unixtime-content">
            <div class="tools-unixtime-content-main">
                <div class="tools-unixtime-left">
                    <label>Unix时间戳（Unix timestamp）</label>
                    <input type="text" id="firstunixtime" name="firstunixtime" value="<?php echo time(); ?>" />
                </div>

                <div class="tools-unixtime-right">
                    <input type="button" value="转换成北京时间" id="firstbutton" class="tools-unixtime-right-con">
                    <input type="text" value="<?php echo date('Y-m-d H:i:s',time()); ?>" id="firsttimeshow" size="20" readonly />
                </div>
                <div class="clear"></div>

                <div class="tools-unixtime-left mt50">
                    <label class="mr5">北京时间（年-月-日 时:分:秒）</label>
                    <input type="text" id="secondunixtime" name="secondunixtime" value="<?php echo date('Y-m-d H:i:s',time()); ?>" />
                </div>

                <div class="tools-unixtime-right mt50">
                    <input type="button" value="转换成Unix时间戳" id="secondbutton" class="tools-unixtime-right-con">
                    <input type="text" value="<?php echo time(); ?>" id="secondtimeshow" size="20" readonly />
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
        <div class="tools-introduce">
            <div class="tools-introduce-text">
                <label class="ml10">工具简介</label>
                <p class="ml10 mr10">什么是Unix时间戳(Unix timestamp)： Unix时间戳(Unix timestamp)，或称Unix时间(Unix time)、POSIX时间(POSIX time)，是一种时间表示方式，定义为从格林威治时间1970年01月01日00时00分00秒起至现在的总秒数。Unix时间戳不仅被使用在Unix系统、类Unix系统中，也在许多其他操作系统中被广泛采用。</p>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('js/tools.js') }}"></script>
@endsection