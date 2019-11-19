<!DOCTYPE html>

<html lang="zh-cn">

<head>

    <meta charset="UTF-8">
    <title> @yield('title') - {{ env("APP_NAME") }} </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="{{ asset("/favicon.ico") }}" rel="icon">
    <link href="https://cdn.bootcss.com/mdui/0.4.3/css/mdui.min.css" rel="stylesheet">

    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">

    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>

    @yield('head')

</head>


<body>

<div class="form-cover">

    <div class="form mdui-center mdui-typo">
        <div class="form-title"> @yield('form-title') </div>
        @yield("form")

        <div class="copyright">
            This site is using <a href="https://github.com/SaigyoujiYuyuko233/uuzTicket">uuzTicket</a><br/>
            <a href="https://github.com/SaigyoujiYuyuko233/uuzTicket">uuzTicket</a> is under GPLv3 license
        </div>
    </div>

</div>

<div class="triangle"></div>

<script src="https://cdn.bootcss.com/mdui/0.4.3/js/mdui.min.js"></script>

</body>

</html>
