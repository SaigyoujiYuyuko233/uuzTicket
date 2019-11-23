@extends('layouts.app')

@section('title') 邮箱认证 @endsection

@section('header')
    <link href="{{ asset('css/auth/verify.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="mdui-row mdui-row-gapless">
    <div class="mdui-col-sm-10 mdui-col-md-8 mdui-col-lg-6 mdui-col-offset-sm-1 mdui-col-offset-md-2 mdui-col-offset-lg-3 ">
        <div class="uuz-box mdui-shadow-3">
            <div class="header"><div class="title">邮箱认证</div></div>

            <div class="body mdui-typo">
                <p>在使用本系统之前，您需要验证您的邮箱！</p>
                <p>请查看您的邮箱，如果一切正常您已经收到一封验证邮件! <strong>(请检查垃圾箱)</strong></p>
                <p>如验证邮件过期，请点击下面的按钮重新发送！</p>
                <a href="{{ route('auth.verification.resend') }}" class="mdui-btn mdui-btn-block mdui-ripple mdui-color-pink-400">重新发送验证邮件</a>
            </div>
        </div>
    </div>
</div>
@endsection
