@extends('layouts.app')

@section('title')
    Base64解码
@endsection

@section('styles')
    <link href="{{ asset('css/tools.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="tools-base">
        <div class="tools-base-content">
            <div class="tools-base-content-main">
                <div class="tools-base-top">
                    <label class="block">原码</label>
                    <textarea class="p10 w700 h200 tools-textarea" id="textarea-dec" placeholder="输入经过base64编码后的内容"></textarea>
                </div>

                <div class="tools-base-bottom">
                    <label class="block">base64解码后</label>
                    <textarea class="p10 w700 h200 tools-textarea" id="textarea-dec-show" placeholder="这里将显示base64解码后的内容"></textarea>
                </div>

                <div class="base-but">
                    <input type="button" id="base64Dec" value="Base64解码" class="base64Btn">
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('js/tools.js') }}"></script>
@endsection