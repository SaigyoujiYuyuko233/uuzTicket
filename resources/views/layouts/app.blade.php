<!DOCTYPE html>

<html lang="zh-cn">

<head>

    <meta charset="UTF-8">
    <title> @yield('title') - {{ env("APP_NAME") }} </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="{{ asset("/favicon.ico") }}" rel="icon">
    <link href="https://cdn.bootcss.com/mdui/0.4.3/css/mdui.min.css" rel="stylesheet">
    <link href="//at.alicdn.com/t/font_1501217_gr3niy59akd.css" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>

<div class="mdui-appbar ">
    <div class="mdui-toolbar mdui-color-pink-400">

        <a href="" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">menu</i></a>
        <a href="" class="mdui-typo-title">@yield('title') - {{ env("APP_NAME") }}</a>

        <div class="mdui-toolbar-spacer"></div>

        <div class="user-info mdui-valign">
            <div class="avatar mdui-valign"
                 style="background-image: url('https://www.gravatar.com/avatar/{{ md5(strtolower(Auth::getUser()->email)) }}');">
            </div>
            <p>{{ Auth::getUser()->username }}</p>
        </div>

        <a href="" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">search</i></a>
        <a href="{{ route('auth.logout') }}" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons iconfont icon-log-out"></i></a>

    </div>

    <div class="mdui-tab mdui-color-pink-500" mdui-tab>
        <a  class="mdui-ripple mdui-ripple-white">我的工单</a>
        <a  class="mdui-ripple mdui-ripple-white">新建工单</a>
        <a  class="mdui-ripple mdui-ripple-white">常见问题</a>
    </div>
</div>

</body>

</html>
