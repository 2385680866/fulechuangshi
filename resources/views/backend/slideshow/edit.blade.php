<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>标签添加</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="/backend/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
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
                        <form method="post" class="form-horizontal" action="{{url('/label/update')}}/{{$labelInfo['label_id']}}">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-2 control-label">标签名称</label>
                                <div class="col-sm-10">
                                    <div class="input-group m-b"><span class="input-group-addon">@</span>
                                        <input type="text" name="label_name" value="{{$labelInfo['label_name']}}" placeholder="标签名称" class="form-control">
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
    <!-- <script src="/backend/js/content.js?v=1.0.0"></script> -->
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
        $(document).on("blur","input[name='label_name']",function(){
            var _this =$(this);
            var label_name = _this.val();
            var label_id = {{$labelInfo['label_id']}}
            if(label_name==''){
                alert("标签名称不能为空");
                return false;
            }
            $.ajax({
                url:"/label/labelName",
                data:{label_name:label_name,label_id:label_id},
                success:function(res){
                    if(res!=0){
                        alert("标签名称已存在");
                        return false;
                    }
                }

            })
        });
    </script>
</body>
</html>
