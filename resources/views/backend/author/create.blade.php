<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>作者添加</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/backend/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/backend/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/backend/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/backend/css/animate.css" rel="stylesheet">
    <link href="/backend/css/style.css?v=4.1.0" rel="stylesheet">
    <style>.i-checks{float:left;}</style>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" action="{{url('/author/store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-2 control-label">作家账号</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon">@</span>
                                        <input type="text" name="author_name" placeholder="作者名称" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">作家笔名</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon">@</span>
                                        <input type="text" name="author_nickname" placeholder="作家笔名" class="form-control">
                                    </div>
                                </div>
                            </div> 
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">作家邮箱</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon">@</span>
                                        <input type="email" name="author_email" placeholder="作家邮箱" class="form-control">
                                    </div>
                                </div>
                            </div> 
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">作者头像</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b">
                                        <input type="file" name="author_img">
                                    </div>
                                </div>
                            </div> 
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">作家身份证</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon">@</span>
                                        <input type="text" name="author_card" placeholder="作家身份证" class="form-control">
                                    </div>
                                </div>
                            </div> 
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">保存内容</button>
                                    <button class="btn btn-info" type="button">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 全局js -->
    <script src="/backend/js/jquery.min.js?v=2.1.4"></script>
    <script src="/backend/js/bootstrap.min.js?v=3.3.6"></script>

    <!-- 自定义js -->
    <script src="/backend/js/content.js?v=1.0.0"></script>

    <!-- iCheck -->
    <script src="/backend/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
        //唯一性验证
        $(document).on("blur","input[name='author_nickname']",function(){
            var _this =$(this);
            var author_nickname = _this.val();
            if(author_nickname==''){
                alert("笔名不能为空");
                return false;
            }
            $.ajax({
                url:"/author/authorName",
                data:{author_nickname:author_nickname},
                success:function(res){
                    if(res!=0){
                        alert("笔名已存在");
                        return false;
                    }
                }
            })
        });
    </script>
</body>

</html>
