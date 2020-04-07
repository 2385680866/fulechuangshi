<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('/backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/backend/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/css/style.css') }}" rel="stylesheet">
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">乐</h1>
            </div>
            <h3>欢迎使用 hAdmin</h3>
            <form class="m-t" role="form" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="邮箱" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="密码" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登 录</button>
                <p class="text-muted text-center"> 
                    <a href="login.html#"><small>忘记密码了？</small></a> | 
                    <a href="{{url('/admin/reg')}}">注册一个新账号</a>
                </p>
            </form>
        </div>
    </div>
    <!-- 全局js -->
    <script src="{{asset('/backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('/backend/js/bootstrap.min.js')}}"></script>
</body>
</html>
