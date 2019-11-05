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

    <div class="mdui-textfield mdui-textfield-floating-label">
        <i class="mdui-icon material-icons">account_circle</i>
        <label class="mdui-textfield-label">用户名</label>
        <textarea class="mdui-textfield-input" name="username"></textarea>
        <div class="mdui-textfield-helper">4-16个字符 / 允许: A-Z大小写 数字 下/中划线</div>
    </div>

    <div class="mdui-textfield mdui-textfield-floating-label">
        <i class="mdui-icon material-icons">&#xe0da;</i>
        <label class="mdui-textfield-label">密码</label>
        <textarea class="mdui-textfield-input" name="password"></textarea>
        <div class="mdui-textfield-helper">至少8位</div>
    </div>

    <div class="mdui-textfield mdui-textfield-floating-label">
        <i class="mdui-icon material-icons">contact_mail</i>
        <label class="mdui-textfield-label">联系方式</label>
        <textarea class="mdui-textfield-input" name="contact"></textarea>
        <div class="mdui-textfield-helper">邮箱</div>
    </div>

    <button class="submit mdui-btn mdui-btn-block mdui-color-pink-400 mdui-ripple" type="submit">注册</button>

@endsection
