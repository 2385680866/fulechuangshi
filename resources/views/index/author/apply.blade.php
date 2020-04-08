<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>申请作者</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
    <script>if(window.top !== window.self){ window.top.location = window.location;}</script>
    <style>
        .form-control{ float:right; width:220px;}
        .span{width:60px; hright:30px; }
    </style>
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <h3>欢迎申请作者</h3>
            <form class="m-t" role="form" action="{{url('author/doapply')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group" ><span class="span">登录账号</span><input type="text" value="{{session('users.username')}}" class="form-control" name="author_name" placeholder="登录账号" required=""></div>
                <div class="form-group"><span class="span">头像</span><input type="file" class="form-control" name="author_img"></div>
                <div class="form-group"><span class="span">笔名</span><input type="text" class="form-control" name="author_nickname" placeholder="笔名" required=""></div>
                <div class="form-group"><span class="span">邮箱</span><input type="email" class="form-control" name="author_email" placeholder="邮箱" required=""></div>
                <div class="form-group"><span class="span">身份证号</span><input type="text" class="form-control" name="author_card" placeholder="身份证号" required=""></div>
                <button type="submit" class="btn btn-primary block full-width m-b">申请作者</button>
            </form>
        </div>
    </div>
    <!-- 全局js -->
    <script src="{{asset('backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
</body>
</html>
