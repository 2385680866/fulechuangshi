<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>阅读添加</title>
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
                        <form method="post" class="form-horizontal" action="{{url('/read/store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-2 control-label">小说名称</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="read_name" placeholder="小说名称">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">分类名称</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="cate_id">
                                        @foreach($cateInfo as $key=>$value)
                                            @if($value['parend_id']==0)
                                                <option value="{{$value['cate_id']}}">{{$value['cate_name']}}</option>
                                            @else
                                                <option value="{{$value['cate_id']}}">----{{$value['cate_name']}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">作者</label>
                                <div class="col-sm-10">
                                    <select class="form-control m-b" name="author_id">
                                        @foreach($authorInfo as $key=>$value)
                                        <option value="{{$value['author_id']}}">{{$value['author_nickname']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">是否精品</label>
                                <div class="col-sm-10">
                                    <div class="radio i-checks">
                                        <label><input type="radio" value="1" name="is_jingpin" checked=""> <i></i>是</label>
                                    </div>
                                    <div class="radio i-checks">
                                        <label><input type="radio" value="0" name="is_jingpin"> <i></i>否</label>
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">首页轮播图</label>
                                <div class="col-sm-10">
                                    <div class="radio i-checks">
                                        <label><input type="radio" value="1" name="is_show_home"> <i></i>是</label>
                                    </div>
                                    <div class="radio i-checks">
                                        <label><input type="radio" value="0" name="is_show_home" checked=""> <i></i>否</label>
                                    </div>
                                    <div class="radio i-checks" style="padding-left:20px;">
                                        <input type="file" name="home_img">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">封面图片</label>
                                <div class="col-sm-10">
                                    <div class="radio i-checks">
                                        <label><input type="radio" value="1" name="is_show"> <i></i>是</label>
                                    </div>
                                    <div class="radio i-checks">
                                        <label><input type="radio" value="0" name="is_show" checked=""> <i></i>否</label>
                                    </div>
                                    <div class="radio i-checks" style="padding-left:20px;">
                                        <input type="file" name="read_img">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">作品标签</label>
                                <div class="col-sm-10">
                                    @foreach($labelInfo as $key=>$value)
                                    <div class="checkbox i-checks">
                                        <label><input type="checkbox" value="{{$value['label_id']}}" name="label_id[]"> <i></i>{{$value['label_name']}}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">阅读介绍</label>
                                <div class="col-sm-10">
                                    <textarea name="read_desc" data-provide="markdown" rows="2" style="width:678px;"></textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">阅读内容</label>
                                <div class="col-sm-10">
                                    <textarea name="read_content" data-provide="markdown" rows="2" style="width:678px;"></textarea>
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

    <!-- simditor -->
    <script type="text/javascript" src="/backend/js/plugins/markdown/markdown.js"></script>
    <script type="text/javascript" src="/backend/js/plugins/markdown/to-markdown.js"></script>
    <script type="text/javascript" src="/backend/js/plugins/markdown/bootstrap-markdown.js"></script>
    <script type="text/javascript" src="/backend/js/plugins/markdown/bootstrap-markdown.zh.js"></script>


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
        $(document).on("blur","input[name='read_name']",function(){
            var _this =$(this);
            var read_name = _this.val();
            if(read_name==''){
                alert("阅读名称不能为空");
                return false;
            }
            $.ajax({
                url:"/read/readName",
                data:{read_name:read_name},
                success:function(res){
                    if(res!=0){
                        alert("阅读名称已存在");
                        return false;
                    }
                }

            })
        });
    </script>
</body>
</html>
