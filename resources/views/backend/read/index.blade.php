<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>阅读列表</title>
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
                                    <th data-toggle="true">阅读ID</th>
                                    <th>阅读名称</th>
                                    <th>添加时间</th>
                                    <th>修改时间</th>
                                    <th data-hide="all">分类名称</th>
                                    <th data-hide="all">作家笔名</th>
                                    <th data-hide="all">作品标签</th>
                                    <!-- <th data-hide="all">首页轮播图</th> -->
                                    <!-- <th data-hide="all">是否首页轮播图</th> -->
                                    <th data-hide="all">阅读图片</th>
                                    <th data-hide="all">是否显示</th>
                                    <th data-hide="all">是否精品</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($readInfo as $key=>$value)
                                <tr>
                                    <td>{{$value['read_id']}}</td>
                                    <td>{{$value['read_name']}}</td>
                                    <td>{{$value['created_at']}}</td>
                                    <td>{{$value['updated_at']}}</td>
                                    <td>{{$value['cate_name']}}</td>
                                    <td>{{$value['author_nickname']}}</td>
                                    <td>{{$value['label_name']}}</td>
                                    <!-- <td><img src="{{$value['home_img']}}" alt="{{$value['read_name']}}"></td> -->
                                    <!-- <td>@if($value['is_show_home']==1)是@else否@endif</td> -->
                                    <td><img src="/{{$value['read_img']}}" alt="{{$value['read_name']}}"></td>
                                    <td>@if($value['is_show']==1)是@else否@endif</td>
                                    <td>@if($value['is_boutique']==1)是@else否@endif</td>
                                    <td>
                                        <a href="{{url('/read/edit')}}/{{$value['read_id']}}"><i class="fa fa-check text-navy"></i>编辑</a>
                                        <a href="{{url('/read/destroy')}}/{{$value['read_id']}}"><i class="fa fa-check text-navy"></i>删除</a>
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
    </script>
</body>
</html>
