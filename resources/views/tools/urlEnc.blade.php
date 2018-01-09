@extends('layouts.app')

@section('title')
    Urlencode加密
@endsection

@section('styles')
    <link href="{{ asset('css/tools.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="tools-urlencode">
        <div class="tools-breadcrumbs">
            <div class="tools-breadcrumbs-text">
                <label class="ml10">当前位置：</label>
                <a href="/">IT工具</a>
                <label>></label>
                <a href="javascript:void(0);">Urlencode加密</a>
            </div>
        </div>
        <div class="tools-urlencode-content">
            <div class="tools-urlencode-content-main">
                <div class="tools-urlencode-top">
                    <label class="block">原码</label>
                    <textarea class="p10 w700 h200 tools-textarea" id="textarea-dec" placeholder="urlencode加密后的内容"></textarea>
                </div>

                <div class="tools-urlencode-bottom">
                    <label class="block">Urlencode解密后</label>
                    <textarea class="p10 w700 h200 tools-textarea" id="textarea-dec-show" placeholder="urlencode解密后的内容"></textarea>
                </div>

                <div class="urlencode-but">
                    <input type="button" id="urlencodeDec" value="urlencode解密" class="urlencodeBtn">
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('js/tools.js') }}"></script>
@endsection