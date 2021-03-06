@extends('layouts.app')

@section('title')
    Base64加密
@endsection

@section('styles')
    <link href="{{ asset('css/tools.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="tools-base">
        <div class="tools-breadcrumbs">
            <div class="tools-breadcrumbs-text">
                <label class="ml10">当前位置：</label>
                <a href="/">IT工具</a>
                <label>></label>
                <a href="javascript:void(0);">Base64加密</a>
            </div>
        </div>
        <div class="tools-base-content">
            <div class="tools-base-content-main">
                <div class="tools-base-top">
                    <label class="block">原码</label>
                    <textarea class="p10 w700 h200 tools-textarea" id="textarea-enc" placeholder="输入加密前的内容"></textarea>
                </div>

                <div class="tools-base-bottom">
                    <label class="block">base64加密后</label>
                    <textarea class="p10 w700 h200 tools-textarea" id="textarea-enc-show" placeholder="base64加密后的内容"></textarea>
                </div>

                <div class="base-but">
                    <input type="button" id="base64Enc" value="Base64加密" class="base64Btn">
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="tools-introduce">
            <div class="tools-introduce-text">
                <label class="ml10">工具简介</label>
                <p class="ml10 mr10">Base64编码要求把3个8位字节（3*8=24）转化为4个6位的字节（4*6=24），之后在6位的前面补两个0，形成8位一个字节的形式。 如果剩下的字符不足3个字节，则用0填充，输出字符使用‘=’，因此编码后输出的文本末尾可能会出现1或2个‘=’。</p>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="{{ asset('js/tools.js') }}"></script>
@endsection