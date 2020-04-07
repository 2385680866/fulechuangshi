<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>用户注册</title>
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
        .code{width:150px;float:left;margin-right:6px;}
    </style>
</head>
<body class="signin">
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-12">
                <form method="post">
                    @csrf
                    <h4 class="no-margins">用户注册</h4>
                    <input type="text" class="form-control uname" name="username" placeholder="用户名" />
                    <input type="password" class="form-control pword m-b" name="password" placeholder="密码" />
                    <input type="text" class="form-control m-b code" name="code" placeholder="请输入验证码"/>
                    <input type="button" class="btn btn-success m-b getcode" value="获取验证码">
                    <p><a href="">忘记密码了？</a></p>
                    <button class="btn btn-success btn-block">注册</button>
                </form>
            </div>
        </div>
    </div>
</body>
    <script src="{{asset('/backend/js/jquery.min.js')}}"></script>
    <script>
        $(document).on("click",".getcode",function(){
            var username = $(".uname").val();
            var myreg = /^[1][3,5,7,8][0-9]{9}$/;
            if (!myreg.test(username)) {
                alert("手机号校验失败");
                return false;
            }
            $.ajax({
                url:"/getCode",
                data:{username:username},
                success:function(res){
                    $("input[name='code']").val(res);
                    // alert(res);
                }
            })
        });
        $(document).on("click",".btn-block",function(res){
            var username = $("input[name='username']").val();
            var password = $("input[name='password']").val();
            var code = $("input[name='code']").val();
            var myreg = /^[1][3,5,7,8][0-9]{9}$/;
            if (!myreg.test(username)) {
                alert("手机号校验失败");
                return false;
            }
            if(password ==''){
                alert("密码不能为空");
                return false;
            }
            if(code ==''){
                alert("验证码不能为空");
                return false;
            }
        });
    </script>
</html>
