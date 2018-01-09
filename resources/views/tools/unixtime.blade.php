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
            <div class="tools-unixtime-left">
                <label>Unix时间戳（Unix timestamp）</label>
                <input type="text" id="firstunixtime" name="firstunixtime" value="<?php echo time(); ?>" />
            </div>

            <div class="tools-unixtime-right">
                <input type="button" value="转换成北京时间" id="firstbutton" tabindex="2" class="tools-unixtime-right-con">
                <input type="text" value="" id="firsttimeshow" size="30" readonly />
            </div>
            <div class="clear"></div>

            <div class="tools-unixtime-left mt30">
                <label class="mr5">北京时间（年-月-日 时:分:秒）</label>
                <input type="text" id="secondunixtime" name="secondunixtime" value="<?php echo date('Y-m-d H:i:s',time()); ?>" />
            </div>

            <div class="tools-unixtime-right mt30">
                <input type="button" value="转换成Unix时间戳" id="secondbutton" tabindex="2" class="tools-unixtime-right-con">
                <input type="text" value="" id="secondtimeshow" size="30" readonly />
            </div>
            <div class="clear"></div>

        </div>
    </div>
@endsection


@section('js')
<script src="{{ asset('js/tools.js') }}"></script>
@endsection