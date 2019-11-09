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
    <form method="post" action="{{ route('logEntry') }}">
        {{ csrf_field() }}

        <div class="mdui-textfield mdui-textfield-floating-label" id="username-field">
            <i class="mdui-icon material-icons">account_circle</i>
            <label class="mdui-textfield-label">用户名</label>
            <input class="mdui-textfield-input" name="username">

            @if ($errors->first('username') != null)
                <script>
                    $("#username-field").addClass("mdui-textfield-invalid");
                </script>

                <div class="mdui-textfield-error">{{ $errors->first('username') }}</div>
            @endif
        </div>


        <div class="mdui-textfield mdui-textfield-floating-label" id="password-field">
            <i class="mdui-icon material-icons">&#xe0da;</i>
            <label class="mdui-textfield-label">密码</label>
            <input class="mdui-textfield-input" name="password" type="password" />

            @if ($errors->first('password') != null)
                <script>
                    $("#password-field").addClass("mdui-textfield-invalid");
                </script>

                <div class="mdui-textfield-error">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <a href="{{ route('register') }}" class="tips-text mdui-float-left">没有账号? 戳我注册</a>
        <!--TODO: reset password url-->
        <a href="" class="tips-text mdui-float-right" style="margin-left: 0;">找回密码</a>

        <button class="submit mdui-btn mdui-btn-block mdui-color-pink-400 mdui-ripple" type="submit">登陆</button>

    </form>
@endsection
