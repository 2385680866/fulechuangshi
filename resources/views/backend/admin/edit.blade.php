<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理员编辑</title>
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
                        <form method="post" class="form-horizontal" action="{{url('/admin/update')}}/{{$info['admin_id']}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-2 control-label">管理员名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="admin_name" value="{{$info['admin_name']}}" placeholder="请输入管理员名称">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">管理员邮箱</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="admin_email" value="{{$info['admin_email']}}" placeholder="请输入管理员邮箱">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">管理员手机号</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" name="admin_tel" value="{{$info['admin_tel']}}" placeholder="请输入管理员手机号">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">管理员头像</label>
                                <div class="col-sm-10">
                                    <img src="/{{$info['admin_img']}}" alt="{{$info['admin_name']}}头像" style="width:100px;height:100px;">
                                    <input type="file" name="admin_img">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">管理员级别</label>
                                <div class="col-sm-10">
                                    @if($info['admin_status']==0)
                                    <div class="radio i-checks">
                                        <label><input type="radio" value="0" name="admin_status" checked=""> <i></i>超级会员</label>
                                    </div>
                                    @elseif($info['admin_status']==1)
                                    <div class="radio i-checks">
                                        <label><input type="radio" value="1" name="admin_status" checked=""> <i></i>会员</label>
                                    </div>
                                    @else
                                    <div class="radio i-checks">
                                        <label><input type="radio" value="2" name="admin_status" checked=""> <i></i>普通用户</label>
                                    </div>
                                    @endif
                                   
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
    <script src="{{asset('/backend/js/jquery.min.js')}}"></script>
    <script src="{{asset('/backend/js/bootstrap.min.js')}}"></script>
    <!-- 自定义js -->
    <script src="{{asset('/backend/js/content.js')}}"></script>
    <!-- simditor -->
    <script type="text/javascript" src="{{asset('/backend/js/plugins/markdown/markdown.js')}}"></script>
    <script type="text/javascript" src="{{asset('/backend/js/plugins/markdown/to-markdown.js')}}"></script>
    <script type="text/javascript" src="{{asset('/backend/js/plugins/markdown/bootstrap-markdown.js')}}"></script>
    <script type="text/javascript" src="{{asset('/backend/js/plugins/markdown/bootstrap-markdown.zh.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('/backend/js/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
        //唯一性验证
        $(document).on("blur","input[name='admin_name']",function(){
            var _this =$(this);
            var admin_name = _this.val();
            if(admin_name==''){
                alert("管理员名称不能为空");
                return false;
            }
            $.ajax({
                url:"/admin/adminName",
                data:{admin_name:admin_name},
                success:function(res){
                    if(res!=0){
                        alert("管理员名称已存在");
                        return false;
                    }
                }
            })
        });
    </script>
</body>
</html>
