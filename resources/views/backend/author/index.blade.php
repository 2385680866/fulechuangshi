<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>作者列表</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico"> <link href="/backend/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/backend/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/backend/css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="/backend/css/animate.css" rel="stylesheet">
    <link href="/backend/css/style.css?v=4.1.0" rel="stylesheet">
</head>
<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>分类列表</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">选项 01</a>
                                    </li>
                                    <li><a href="#">选项 02</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="搜索表格...">
                            <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="8">
                                <thead>
                                    <tr>
                                        <th data-toggle="true">作家ID</th>
                                        <th >作家笔名</th>
                                        <th>手机号</th>
                                        <th>作家邮箱</th>
                                        <th>是否通过</th>
                                        <th data-hide="all">作家头像</th>
                                        <th>添加时间</th>
                                        <th>修改时间</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($authorInfo as $key=>$value)
                                        <tr>
                                            <td>{{$value['author_id']}}</td>
                                            <td>{{$value['author_nickname']}}</td>
                                            <td>{{$value['author_name']}}</td>
                                            <td>{{$value['author_email']}}</td>
                                            <td author_name="{{$value['author_name']}}">
                                                @if($value['status'] == 0)
                                                    <span class="btn btn-info status">未通过</button> 
                                                @else 
                                                    <span class="btn btn-success" disabled="">已通过</span>
                                                @endif
                                            </td>
                                            <td><span class="pie"><img src="/{{$value['author_img']}}" alt=""></span></td>
                                            <td>{{$value['created_at']}}</td>
                                            <td>{{$value['updated_at']}}</td>
                                            <td>
                                                <a href="{{url('/author/edit')}}/{{$value['author_id']}}"><i class="fa fa-check text-navy"></i>编辑</a>
                                                <a href="{{url('/author/destroy')}}/{{$value['author_id']}}"><i class="fa fa-check text-navy"></i>删除</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- 全局js -->
    <script src="/backend/js/jquery.min.js?v=2.1.4"></script>
    <script src="/backend/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/backend/js/plugins/footable/footable.all.min.js"></script>
    <!-- 自定义js -->
    <script src="/backend/js/content.js?v=1.0.0"></script>
    <script>
        $(document).ready(function() {
            $('.footable').footable();
            $('.footable2').footable();
        });
        $(document).on("click",".status",function(){
            var _this = $(this);
            var author_name = _this.parent("td").attr("author_name");
            $.ajax({
                url:"/author/status",
                data:{author_name:author_name},
                success:function(res){
                     if(res == 1){
                        _this.removeClass("btn-info").addClass("btn-success").prop("disabled");
                        _this.text('已通过');
                     }
                }
            })
        });
    </script>
</body>
</html>
