<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
    @yield('styles')
</head>
<body>
    <div class="main">
        <div class="top-nav">
            <div class="top-nav-menu">
                <div class="top-nav-menu-left">
                    <ul>
                        <li><a href="{{ url('/tools/tdurlen') }}"><span>短链接生成</span></a></li>
                        <li><a href="{{ url('/tools/unixtime') }}"><span>Unix时间戳</span></a></li>
                        <li><a href="{{ url('/tools/base64enc') }}"><span>Base64加密/解密</span></a></li>
                        <li><a href="{{ url('/tools/urlenc') }}"><span>UrlEncode加密/解密</span></a></li>
                        <li><a href="#"><span>专属动态加密/解密</span></a></li>
                    </ul>
                </div>
                <div class="top-nav-menu-right">
                    <a href="#" class="mr30">立即登录</a>
                    <a href="#">注册新帐号</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="middle">
            <div class="logo">
                <a href="">
                    <img src="{{ asset('images/logo.png') }}" />
                </a>
            </div>
            <div class="advertising">
                <div class="advertising-box ml10">
                    <a href=""><img src="" /></a>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="navbg">
            <div class="col1000">
                <ul id="navul" class="zoom">
                    <li class="navhome">
                        <a href="/">首页</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">短链服务</a>
                        <ul>
                            <li><a href="{{ url('/tools/tdurlen') }}">短链生成</a></li>
                            <li><a href="{{ url('/tools/tdurlde') }}">短链解析</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Unix时间戳</a>
                        <ul>
                            <li><a href="{{ url('/tools/unixtime') }}">时间戳转换</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Base64</a>
                        <ul>
                            <li><a href="{{ url('/tools/base64enc') }}">加密</a></li>
                            <li><a href="{{ url('/tools/base64dec') }}">解密</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">UrlEncode</a>
                        <ul>
                            <li><a href="{{ url('/tools/urlenc') }}">加密</a></li>
                            <li><a href="{{ url('/tools/urldec') }}">解密</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">专属动态加密</a>
                        <ul>
                            <li><a href="#">加密</a></li>
                            <li><a href="#">解密</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">待定</a>
                        <ul>
                            <li><a href="#">待定</a></li>
                            <li><a href="#">待定</a></li>
                            <li><a href="#">待定</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">待定</a>
                        <ul>
                            <li><a href="#">待定</a></li>
                            <li><a href="#">待定</a></li>
                            <li><a href="#">待定</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);">待定</a>
                        <ul>
                            <li><a href="#">待定</a></li>
                            <li><a href="#">待定</a></li>
                            <li><a href="#">待定</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@yield('content')

<!-- Js -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/index.js') }}"></script>
@yield('js')
</body>
</html>
