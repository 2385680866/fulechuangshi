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
        .no-margins{  width:160px;height:30px;line-height:30px;}
        .login{width:320px;height:30px;}
        .cte{background-color:red;}
    </style>
</head>
<body class="signin">
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-12">
                <div class="login">
                    <h4 class="btn no-margins cte" style="float:left;">手机登录</h4>
                    <h4 class="btn no-margins" style="float:right;">扫码登录</h4>
                </div>
                <form method="post">
                    @csrf
                    <input type="text" class="form-control uname" name="username" placeholder="用户名" />
                    <input type="password" class="form-control pword m-b" name="password" placeholder="密码" />
                    <a href="">忘记密码了？</a>
                    <button class="btn btn-success btn-block">登录</button>
                </form>
                <div class="weatch-login" style="display:none;">
                    <div style="width:320px;height:230px;">
                        <div style="width:320px;height:200px;padding:10px 70px;">
                            <img src="/index/picture/code03.png" alt="" style="width:180px;height:180px;">
                        </div>
                        <div class="button" style="height:30px;text-align:center;">
                           <p style="color:red;">微信扫码登录</p>
                        </div>
                    </div>
                    <div class="button" style="height:30px;text-align:center;">
                        <a href="{{url('/reg')}}">免费注册</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('/backend/js/jquery.min.js')}}"></script>
    <script>
        $(document).on("click",".no-margins",function(){
            var _this = $(this);
            var name = _this.text();
            if(name=="手机登录"){
                $("form").show();
                $(".weatch-login").hide();
                _this.addClass("cte").siblings().removeClass("cte");

            }else{
                $("form").hide();
                $(".weatch-login").show();
                _this.addClass("cte").siblings().removeClass("cte");
            }
        });
    </script>
</body>
</html>
