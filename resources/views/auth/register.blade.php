@extends("layouts.auth")

@section("title") 注册 @endsection

@section("head")

    <style>
        body{
            background-image: url("{{ asset("/images/reg-background.jpg") }}");
        }
    </style>

@endsection


@section("form-title") 注册 @endsection


@section("form")
    <form action="{{ route("auth.register") }}" method="post">
        {{ csrf_field() }}

        <div class="mdui-textfield mdui-textfield-floating-label" id="username-field">
            <i class="mdui-icon material-icons">account_circle</i>
            <label class="mdui-textfield-label">用户名</label>
            <input class="mdui-textfield-input" name="username" maxlength="16">

            @if ($errors->first('username') != null)
                <script>
                    $("#username-field").addClass("mdui-textfield-invalid");
                </script>

                <div class="mdui-textfield-error">{{ $errors->first('username') }}</div>
            @else
                <div class="mdui-textfield-helper">4-16个字符 / A-Za-z0-9 下/中划线</div>
            @endif
        </div>

        <div class="mdui-textfield mdui-textfield-floating-label" id="password-field">
            <i class="mdui-icon material-icons">&#xe0da;</i>
            <label class="mdui-textfield-label">密码</label>
            <input class="mdui-textfield-input" name="password" type="password">

            @if ($errors->first('password') != null)
                <script>
                    $("#password-field").addClass("mdui-textfield-invalid");
                </script>

                <div class="mdui-textfield-error">{!! $errors->first('password') !!}</div>
            @else
                <div class="mdui-textfield-helper">最小长度: 8</div>
            @endif
        </div>

        <div class="mdui-textfield mdui-textfield-floating-label" id="email-field">
            <i class="mdui-icon material-icons">contact_mail</i>
            <label class="mdui-textfield-label">邮箱</label>
            <input class="mdui-textfield-input" name="email">

            @if ($errors->first('email') != null)
                <script>
                    $("#email-field").addClass("mdui-textfield-invalid");
                </script>

                <div class="mdui-textfield-error">{{ $errors->first('email') }}</div>
            @else
                <div class="mdui-textfield-helper">任意可用邮箱</div>
            @endif

        </div>

        <a href="{{ route('auth.showLoginForm') }}" class="tips-text mdui-float-left">已有账号? 戳我登陆</a>

        <button class="submit mdui-btn mdui-btn-block mdui-color-pink-400 mdui-ripple" type="submit">注册</button>
    </form>

@endsection
