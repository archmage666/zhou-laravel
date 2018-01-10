@extends('layouts.app')

@section('title')
    短链接生成
@endsection

@section('styles')
    <link href="{{ asset('css/tools.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="tools-tdurl">
        <div class="tools-breadcrumbs">
            <div class="tools-breadcrumbs-text">
                <label class="ml10">当前位置：</label>
                <a href="/">IT工具</a>
                <label>></label>
                <a href="javascript:void(0);">短链接生成</a>
            </div>
        </div>
        <div class="tools-tdurl-content">
            <div class="tools-tdurl-content-main">
                <div class="tools-tdurl-top">
                    <label class="block">原Url地址</label>
                    <textarea class="p10 w700 h200 tools-textarea" id="textarea-tdurlen" placeholder="原Url地址"></textarea>
                </div>

                <div class="tools-tdurl-bottom">
                    <label class="block">生成的短链接形式Url地址</label>
                    <textarea class="p10 w700 h200 tools-textarea" id="textarea-enc-show" placeholder="短链接生成后的Url"></textarea>
                </div>

                <div class="tdurl-but">
                    <input type="button" id="tdurlen" value="生成短链接" class="tdurlBtn">
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="tools-introduce">
            <div class="tools-introduce-text">
                <label class="ml10">工具简介</label>
                <p class="ml10 mr10">为了简短url访问，以便于短息推广</p>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('js/tools.js') }}"></script>
@endsection