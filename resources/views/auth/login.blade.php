@extends("layouts.auth")

@section("title") 登录 @endsection

@section("head")
    <style>
        body {
            background-image: url("{{ asset("/images/login-background.png") }}");
        }
    </style>
@endsection


@section("form-title") 欢迎回来 @endsection


@section("form")

    <div class="mdui-textfield mdui-textfield-floating-label">
        <i class="mdui-icon material-icons">account_circle</i>
        <label class="mdui-textfield-label">用户名</label>
        <input class="mdui-textfield-input" name="username">
    </div>

    <div class="mdui-textfield mdui-textfield-floating-label">
        <i class="mdui-icon material-icons">&#xe0da;</i>
        <label class="mdui-textfield-label">密码</label>
        <input class="mdui-textfield-input" name="password" type="password" />
    </div>

    <a href="{{ route('register') }}" class="tips-text mdui-float-left">没有账号? 戳我注册</a>
    <!--TODO: reset password url-->
    <a href="" class="tips-text mdui-float-right" style="margin-left: 0;">找回密码</a>

    <button class="submit mdui-btn mdui-btn-block mdui-color-pink-400 mdui-ripple" type="submit">登陆</button>

@endsection
