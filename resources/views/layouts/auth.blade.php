<!DOCTYPE html>

<html lang="zh-cn">

<head>

    <meta charset="UTF-8">
    <title> @yield('title') - {{ env("APP_NAME") }} </title>

    <meta name="viewport" content="width=device-width">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="{{ asset("/favicon.ico") }}" rel="icon">
    <link href="https://cdn.bootcss.com/mdui/0.4.3/css/mdui.min.css" rel="stylesheet">

    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>

    <style>
        html {
            height: 100%;
        }

        body {
            font-family: 'Noto Sans SC', sans-serif;
            height: 100%;

            background-repeat: no-repeat;
            background-size: cover;
        }

        a {
            text-decoration: none;
        }

        ::-webkit-scrollbar {
            width: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background: #1396FF;
        }


        .form-cover {
            background-color: rgba(255, 255, 255, 1);
            opacity: 0.95;

            float: right;

            height: calc(100% - 2px);
            width: 380px;

            border-top: 2px solid #448AFF;
        }

        .form-cover .form {
            padding-top: calc(40% - 100px);
            width: 86%;
        }

        .form-cover .form .form-title {
            text-align: center;
            font-size: 34px;
        }

        .form-cover .form .submit {
            margin-top: 4px;
            border-radius: 4px;

            width: calc(100% - 56px);
            float: right;
        }

        .form-cover .form .tips-text {
            padding-top: 24px;
            margin-left: 54px;
        }

        .triangle {

            float: right;

            opacity: 0.95;
            border-bottom: 1800px solid rgba(255, 255, 255, 1);
            border-left: 140px solid transparent;
        }

        @media only screen and (max-width: 667px) {
            .form-cover{
                width: 100%;
            }

            .form-cover .form {
                padding-top: calc(20% - 20px);
            }

            .form-cover .form .submit {
                margin-top: 24px;
                border-radius: 4px;

                width: 100%;
            }

            .triangle{
                display: none;
            }
        }
    </style>

    @yield('head')

</head>


<body>

<div class="form-cover">

    <div class="form mdui-center">
        <div class="form-title"> @yield('form-title') </div>

            @yield("form")

    </div>

</div>

<div class="triangle"></div>

<script src="https://cdn.bootcss.com/mdui/0.4.3/js/mdui.min.js"></script>

</body>

</html>
