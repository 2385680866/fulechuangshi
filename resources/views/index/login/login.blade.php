<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>用户登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="{{asset('/backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/css/login.css')}}" rel="stylesheet">
    <script>if (window.top !== window.self) { window.top.location = window.location;}
    </script>
    <style>
        .no-margins{ padding:0 35px; width:129px;height:30px;line-height:30px;}
        .login{width:258px;height:30px;}
        .cte{background-color:red;}
    </style>
</head>
<body class="signin">
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-12">
                <form method="post">
                    @csrf
                    <div class="login">
                        <h4 class="no-margins cte" style="float:left;">手机登录</h4>
                        <h4 class="no-margins" style="float:right;">扫码登录</h4>
                    </div>
                    <input type="text" class="form-control uname" name="username" placeholder="用户名" />
                    <input type="password" class="form-control pword m-b" name="password" placeholder="密码" />
                    <a href="">忘记密码了？</a>
                    <button class="btn btn-success btn-block">登录</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
