@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="top-nav">
            <div class="top-nav-menu">
                <div class="top-nav-menu-left">
                    <ul>
                        <li><a href="#"><span>站长工具</span></a></li>
                        <li><a href="#"><span>站长工具</span></a></li>
                        <li><a href="#"><span>站长工具</span></a></li>
                        <li><a href="#"><span>站长工具</span></a></li>
                        <li><a href="#"><span>站长工具</span></a></li>
                    </ul>
                </div>
                <div class="top-nav-menu-right">
                    <a href="#">立即登录</a>
                    <a href="#">注册新帐号</a>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="middle">
            <div>
                <div class="logo">
                    <a href="">
                        <img src="{{ asset('images/logo.png') }}" />
                    </a>
                </div>
                <div class="advertising">

                </div>
            </div>
        </div>

    </div>
@endsection