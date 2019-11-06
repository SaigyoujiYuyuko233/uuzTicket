@extends("layouts.auth")

@section("title") 登录 @endsection

@section("head")
    <style>
        body {
            background-image: url("{{ asset("/images/login-background.png") }}");
        }
    </style>
@endsection


@section("form-title") 登录 @endsection


@section("form")

    <div class="mdui-textfield mdui-textfield-floating-label">
        <i class="mdui-icon material-icons">account_circle</i>
        <label class="mdui-textfield-label">用户名</label>
        <textarea class="mdui-textfield-input" name="username"></textarea>
    </div>

    <div class="mdui-textfield mdui-textfield-floating-label">
        <i class="mdui-icon material-icons">&#xe0da;</i>
        <label class="mdui-textfield-label">密码</label>
        <textarea class="mdui-textfield-input" name="password"></textarea>
    </div>

    <button class="submit mdui-btn mdui-btn-block mdui-color-pink-400 mdui-ripple" type="submit">登陆</button>

@endsection
