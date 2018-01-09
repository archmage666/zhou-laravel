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
                    <textarea class="p10 w700 h200 tools-textarea" id="textarea-urlen" placeholder="需要进行UrlEncode加密的url地址"></textarea>
                </div>

                <div class="tools-urlencode-bottom">
                    <label class="block">UrlEncode加密后</label>
                    <textarea class="p10 w700 h200 tools-textarea" id="textarea-enc-show" placeholder="UrlEncode加密后的内容"></textarea>
                </div>

                <div class="urlencode-but">
                    <input type="button" id="urlencode" value="UrlEncode加密" class="urlencodeBtn">
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="tools-introduce">
            <div class="tools-introduce-text">
                <label class="ml10">工具简介</label>
                <p class="ml10 mr10">为了让包含中文的URL可以使用，您可以使用本工具对中文进行UrlEncode编码。</p>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('js/tools.js') }}"></script>
@endsection