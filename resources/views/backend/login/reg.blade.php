<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台--注册</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('/backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/backend/css/style.css')}}" rel="stylesheet">
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
</head>
<body class="gray-bg">
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">H+</h1>
            </div>
            <h3>欢迎注册 H+</h3>
            <p>创建一个H+新账户</p>
            <form class="m-t" role="form" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="请输入用户名" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="请输入密码" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password1" placeholder="请再次输入密码" required="">
                </div>
                <div class="form-group text-left">
                    <div class="checkbox i-checks">
                        <label class="no-padding">
                            <input type="checkbox" name="status" value="1"><i></i> 我同意注册协议</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">注 册</button>
                <p class="text-muted text-center"><small>已经有账户了？</small><a href="{{url('/admin/login')}}">点此登录</a>
                </p>
            </form>
        </div>
    </div>

    <!-- 全局js -->
    <script src="{{asset('/backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('/backend/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('/backend/js/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    
    

</body>

</html>
