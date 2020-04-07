<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- 360安全游览器使用webkit极速核 -->
    <meta name="renderer" content="webkit" />
    <!-- IE使用它支持的最高模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="wb:webmaster" content="bde65bab61e33f62" />
    <meta property="qc:admins" content="151626767763051673016375" />
    <title>{{$info['cate_name']}}小说排行榜</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://img1.chuangshi.qq.com/chuangshi/p1/ico/c_mini_logo.ico" />
    <link rel="Bookmark" type="image/x-icon" href="http://img1.chuangshi.qq.com/chuangshi/p1/ico/c_mini_logo.ico" />
    <link rel="stylesheet" type="text/css" href="/index/css/base.css" /><!-- prevent dom xss -->
    <script type="text/javascript" src="/index/js/aq_common.js"></script>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="/index/css/channel.css" /><!-- 3G站提示 -->
    <div id="top3GBanner" class="top3G" style="display:none;">
        <div id="top3g_inner">
            <a id="click3g" href="http://3g.chuangshi.qq.com"></a>
            <a id="close_3g" href="javascript:"></a>
            <img id="top3g_img" width="1000" height="300" src="">
        </div>
    </div>
    <!-- 顶部导航 -->
    <div id="topNav" class="top_nav" style="background-color:#575757;">
        <div class="top_nav_center cf">
            <div class="toolbar">
                <a attr="inner:toggleSiteListBtn;" class="qqSite" href="http://book.qq.com" target="_blank">QQ阅读</a>
                <span class="navline">|</span>
                <a attr="click:addFavorite;" class="favorite" href="javascript:">一键收藏</a>
                <div attr="inner:siteListDropdown;" class="navDownLoad">
                    <a class="downStar" href="http://www.qq.com/" onclick="pgvSendClick({hottag:'ISD.SHOW.INDEX.LINK01'});" target="_blank">腾讯网首页</a>
                    <a class="downStar" href="https://yuedu.reader.qq.com/common/common/down/dist/index.html?actid=11822" target="_blank">客户端下载</a>
                    <!-- <a class="downAn" href="http://book.qq.com/act/reader/index.html" target="_blank">安卓端下载</a> -->
                </div>
            </div>
            @if(session("login"))
            <div class="loginbar">
                <span class="login_after">
                    <a class="login user" href="http://account.book.qq.com"> 欢迎您，<i><%=userInfo.Nickname ? userInfo.Nickname : ''%></i></a>
                    <a class="exit" attr="click:ywlogout;" href="javascript:;">退出</a>
                    <span class="navline">|</span>
                </span>
                <a attr="inner:toggleBookshelfBtn;" class="myreader" href="http://account.book.qq.com/userfavorite/index.html">我的书架</a>
                <a attr="inner:toggleUserCenterBtn;" class="user_center" href="http://account.book.qq.com">个人中心</a>
                <a class="pay " href="http://account.book.qq.com/public/recharge.html" target="_blank">充值</a>
                <span class="navline">|</span>
                <a attr="inner:toggleChannelBtn;" class="more_nav" href="javascript:">导航</a>
            </div>
            @else
            <div class="loginbar">
                <span class="login_before">
                    <a attr="click:openLoginPopup;" class="login current btnpoplogin" href="{{url('/login')}}">登录</a>
                    <a class="reg" target="_blank" href="{{url('/reg')}}">注册</a>
                    <span class="navline">|</span>
                </span>
                <a attr="inner:toggleRecentReadBtn;" class="myreader" href="javascript:">最近阅读</a>
                <a attr="inner:toggleUserCenterBtn;" class="user_center" href="http://account.book.qq.com">个人中心</a>
                <a class="pay " href="http://account.book.qq.com/public/recharge.html" target="_blank">充值</a>
                <span class="navline">|</span>
                <a attr="inner:toggleChannelBtn;" class="more_nav" href="javascript:">导航</a>
            </div>
            @endif
        </div>
    </div>
    <!-- 顶部导航模板 -->
    <textarea id="topNavBarTpl" style="display:none;">
    <div class="top_nav_center cf">
    <div class="toolbar">
    <a attr="inner:toggleSiteListBtn;" class="qqSite" href="http://book.qq.com" target="_blank">QQ阅读</a>
    <span class="navline">|</span>
    <a attr="click:addFavorite;" class="favorite" href="javascript:">一键收藏</a>
    <div attr="inner:siteListDropdown;" class="navDownLoad">
    <a class="downStar" href="http://www.qq.com/" onclick="pgvSendClick({hottag:'ISD.SHOW.INDEX.LINK01'});" target="_blank">腾讯网首页</a><a class="downStar" href="https://yuedu.reader.qq.com/common/common/down/dist/index.html?actid=11822" target="_blank">客户端下载</a><!-- <a class="downAn" href="http://book.qq.com/act/reader/index.html" target="_blank">安卓端下载</a> --></div></div><div class="loginbar"><%if isLogin%><span class="login_after"><a class="login user" href="http://account.book.qq.com">                        欢迎您，<i><%=userInfo.Nickname ? userInfo.Nickname : ''%></i></a><a class="exit" attr="click:ywlogout;" href="javascript:;">退出</a><span class="navline">|</span></span><a attr="inner:toggleBookshelfBtn;" class="myreader" href="http://account.book.qq.com/userfavorite/index.html">我的书架</a><%else%><span class="login_before"><a attr="click:openLoginPopup;" class="login current btnpoplogin" href="javascript:;">登录/注册</a><!-- <a class="reg" target="_blank" href="http://zc.qq.com/chs/index.html?from=pt">注册</a> --><span class="navline">|</span></span><a attr="inner:toggleRecentReadBtn;" class="myreader" href="javascript:">最近阅读</a><%/if%><a attr="inner:toggleUserCenterBtn;" class="user_center" href="http://account.book.qq.com">个人中心</a><a class="pay " href="http://account.book.qq.com/public/recharge.html" target="_blank">充值</a><span class="navline">|</span><a attr="inner:toggleChannelBtn;" class="more_nav" href="javascript:">导航</a><!-- 书架下拉菜单 --><div attr="inner:bookshelfDropdown;" class="bookrack"><%if isLogin%><p><span class="ccc">藏书：</span><span><%=userInfo.collectBookNum ? userInfo.collectBookNum : 0%></span>本
                    </p><div class="nav_hover_list cf"><a href="http://account.book.qq.com/userfavorite/index.html?bookshelf_show=2">最近阅读</a><span class="booktags"><%if userInfo.bookshelfList && userInfo.bookshelfList.length%><%each userInfo.bookshelfList as bookshelf i%><a href="http://account.book.qq.com/userfavorite/index.html?Favoriteid=<%=bookshelf.groupId%>"><%=bookshelf.groupName%></a><%/each%><%/if%></span></div><%else%><div class="nav_hover_list cf"><span class="booktags"><%if userInfo.recentReadList && userInfo.recentReadList.length%><%each userInfo.recentReadList as book i%><a href="<%=book.bookUrl%>"><%=book.bookName%></a><%/each%><%else%>                                    没有阅读作品
                                <%/if%></span></div><%/if%></div><!-- 用户中心下拉菜单  -->
                                <div attr="inner:userCenterDropdown;" class="user_menu">
                                <div class="nav_hover_list cf">
                                <a href="http://account.book.qq.com/userfavorite/index.html">我的书架</a>
                                <a href="http://account.book.qq.com/usercenter/index.html">账户设置</a>
                                <a class="a_nobg" href="http://account.book.qq.com/usermoney/index.html">账务中心</a>
                                <a class="a_nobg" href="https://write.qq.com/?siteid=3">作家专区</a>
                                </div>
                                </div>
                                <!-- 导航下拉菜单 -->
                                <div attr="inner:channelDropdown;" class="more_box">
                                <div class="nav_hover_list cf">
                                <a href="http://chuangshi.qq.com/bk/huan/" title="玄幻·奇幻">玄幻·奇幻</a>
                                <a href="http://chuangshi.qq.com/bk/xia/" title="武侠·仙侠">武侠·仙侠</a>
                                <a href="http://chuangshi.qq.com/bk/chun/" title="都市·现实">都市·现实</a>
                                <a href="http://chuangshi.qq.com/bk/shi/" title="历史·军事">历史·军事</a>
                                <a href="http://chuangshi.qq.com/bk/you/" title="游戏·体育">游戏·体育</a>
                                <a href="http://chuangshi.qq.com/bk/ke/" title="科技·悬疑">科技·悬疑</a>
                                <a href="http://chuangshi.qq.com/bk/ecy/" style="width:37px;" title="轻小说">轻小说</a>
                                <a style="width:1px; margin-left:-6px;">·</a>
                                <a href="http://chuangshi.qq.com/bk/duan/" style="width:37px;" title="短篇">短篇</a>
                                <a href="http://chuangshi.qq.com" title="女生·言情">女生·言情</a>
                                <a href="http://chuangshi.qq.com/bk/" title="书库" style="width:37px;">书库</a>
                                <a style="width:1px; margin-left:-6px;">·</a>
                                <a href="http://book.qq.com/cdkey" title="兑奖" style="width:37px;" target="_blank">兑奖</a>
                                </div>
                                </div>
                                <%if isLogin%>
                                <div id="pointy_msg"></div>
                                <div id="topnav_msg"><a class="red" href="http://account.book.qq.com/usermessage/index.html">有新短消息</a></div>
                                <%/if%>
                                </div>
                                </div>
                                </textarea>
    <div class="wrap">
        <div class="mainnav">
            <a href="{{url('/')}}" title="首页">首页</a>&nbsp;
            <a class="red" href="{{url('/index/library')}}" title="书库">书库</a>&nbsp;
            <a rel="nofollow" href="{{url('/index/search')}}" title="搜书">搜书</a>&nbsp;
            <a href="{{url('/index/bang')}}" title="排行榜">排行榜</a>&nbsp; 
            @foreach($cateInfo as $key=>$value)
                @if($key%2==0)
                <a class="red dotted" href="{{url('/index/cate')}}/{{$value['cate_id']}}" title="{{$value['cate_name']}}">{{$value['cate_name']}}</a>
                @else
                · <a class="red" href="{{url('/index/cate')}}/{{$value['cate_id']}}" title="{{$value['cate_name']}}">{{$value['cate_name']}}</a>
                @endif
            @endforeach
            <a rel="nofollow" href="{{url('/index/author')}}" title="作家专区">作家专区</a>&nbsp;
        </div>
        <div class="topbanner">
            <a href="http://www.oneplusbbs.com/thread-3905634-1-1.html" target="_blank" class="">
                <img src="/index/picture/a3b45bc9cdcb4b9584a142c34c54fdca.gif" class="" alt="" title="" height="90" width="1000">
            </a>
        </div><!-- 主导航 -->
        <div id="mainNav" class="index_nav cf">
            <img src="{{$info['cate_img']}}" alt="" style="float:left;herth:54px;wirth:250px">
            <div class="sub_channel_nav"></div>
            <div class="search cf">
                <span id="searchType" class="search_tit" type="all">全部</span>
                <input id="searchInput" class="searchinput gray" name="" type="text" value="复兴之路" autocomplete="off" def="复兴之路" maxlength="20" />
                <!--搜索类型的下拉菜单-->
                <div id="searchTypeDropdown" class="index_sub_serach" style="display:none;">
                    <a href="javascript:" type="all">全部</a>
                    <a href="javascript:" type="chuangshi">创世</a>
                    <a href="javascript:" type="yunqi">云起</a>
                    <a href="javascript:" type="dushu">图书</a>
                </div>
            </div>
            <a id="searchBtn" class="default_search" href="javascript:">搜 索</a>
        </div>
        <div class="box1 cf">
            <div id="box1_left" class="box1_left">
                <!-- 滚动书封面 -->
                <div class="graybox">
                    <a class="aleft" href="javascript:" title="右移"></a>
                    <a class="aright" href="javascript:" title="左移"></a>
                    <div class="innerbox" id="focus">
                        <ul>
                        @foreach($readSlide as $key=>$value)
                            <li>
                                <div class='imgbox'>
                                    <a target='_blank' href="{{url('/index/detail')}}/{{$value['read_id']}}">
                                        <img src="{{$value['read_img']}}" width='251' height='313'>
                                    </a>
                                    <p>{{$value['read_text']}}<a class='red2' target='_blank' href="http://chuangshi.qq.com/bk/xx/27337639.html">[阅读]</a>
                                    </p>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div><!-- 新书快递-->
                <!--频道页的新书快递开始-->
                <div class="best_hot cf">
                    <a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="red2 moretop" rel="nofollow">更多...</a>
                    <h2>新书速递</h2>
                    <div class="best1">
                        <a title="带着电脑去成仙" href="http://chuangshi.qq.com/bk/xx/20783898.html" target="_blank">
                            <img src="/index/picture/t5_20783898.jpg" width="120" height="150">
                        </a>
                        <div class="best1_info">
                            <h3>
                                <a href="http://chuangshi.qq.com/bk/xx/20783898.html" target="_blank" title="带着电脑去成仙">带着电脑去成仙</a>
                            </h3>
                            <p title="一台电脑开局的修仙">一台电脑开局的修仙</p>
                            <dl>
                                <dd> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="gray2">仙侠</a>]
                                    <a title="请，开始你的论道证明！" class="green" target="_blank" href="http://chuangshi.qq.com/bk/xx/27317377.html">请，开始你的论道证明！</a>
                                </dd>
                                <dd> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="gray2">仙侠</a>]
                                    <a title="异世界惊天的大秘密" class="green" target="_blank" href="http://chuangshi.qq.com/bk/xx/26539470.html">异世界惊天的大秘密</a>
                                </dd>
                                <dd> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="gray2">仙侠</a>]
                                    <a title="我是一个莫得感情的系统" class="green" target="_blank" href="http://chuangshi.qq.com/bk/xx/24977737.html">我是一个莫得感情的系统</a>
                                </dd>
                                <dd> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="gray2">仙侠</a>]
                                    <a title="肉身开挂，貌似没用" class="green" target="_blank" href="http://chuangshi.qq.com/bk/xx/29523112.html">肉身开挂，貌似没用</a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <div class="best2">
                        <a title="报告师傅他有系统" href="http://chuangshi.qq.com/bk/xx/28090976.html" target="_blank">
                            <img src="/index/picture/t5_28090976.jpg" width="120" height="150">
                        </a>
                        <div class="best1_info">
                            <h3>
                                <a href="http://chuangshi.qq.com/bk/xx/28090976.html" target="_blank" title="报告师傅他有系统">报告师傅他有系统</a>
                            </h3>
                            <p title="底层混混的修仙路">底层混混的修仙路</p>
                            <dl>
                                <dd> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="gray2">仙侠</a>]
                                    <a title="想像普通人一般活完一生" class="green" target="_blank" href="http://chuangshi.qq.com/bk/xx/28058589.html">想像普通人一般活完一生</a>
                                </dd>
                                <dd> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="gray2">仙侠</a>]
                                    <a title="坑爹修真系统" class="green" target="_blank" href="http://chuangshi.qq.com/bk/xx/27436917.html">坑爹修真系统</a>
                                </dd>
                                <dd> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="gray2">仙侠</a>]
                                    <a title="道君为本，夫复何求！" class="green" target="_blank" href="http://chuangshi.qq.com/bk/xx/27552187.html">道君为本，夫复何求！</a>
                                </dd>
                                <dd> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="gray2">仙侠</a>]
                                    <a title="史上最强猛将，会聚一堂" class="green" target="_blank" href="http://chuangshi.qq.com/bk/xx/28295700.html">史上最强猛将，会聚一堂</a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <!--频道页的新书快递结束-->
            </div>
            <div class="box1_right">
                <!-- 分类强推 -->
                <div class="recommend">
                    <h2 class="redico">分类强推</h2>
                    <ul class="storylist cf">
                        <li>
                            <span> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank">仙侠</a>]
                            </span>
                            <a href="http://chuangshi.qq.com/bk/xx/29078215.html" target="_blank" title="洛水新书">洛水新书</a>
                        </li>
                        <li>
                            <span> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank">仙侠</a>]
                            </span>
                            <a href="http://chuangshi.qq.com/bk/xx/26473629.html" target="_blank" title="位面道君">位面道君</a>
                        </li>
                        <li>
                            <span> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank">仙侠</a>]
                            </span>
                            <a href="http://chuangshi.qq.com/bk/xx/26374541.html" target="_blank" title="我是仙三代">我是仙三代</a>
                        </li>
                        <li>
                            <span> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank">仙侠</a>]
                            </span>
                            <a href="http://chuangshi.qq.com/bk/xx/26840774.html" target="_blank" title="诸天镇魔司">诸天镇魔司</a>
                        </li>
                        <li>
                            <span> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank">仙侠</a>]
                            </span>
                            <a href="http://chuangshi.qq.com/bk/xx/27589346.html" target="_blank" title="我有一棵大道树">我有一棵大道树</a>
                        </li>
                        <li>
                            <span> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank">仙侠</a>]
                            </span>
                            <a href="http://chuangshi.qq.com/bk/xx/29247525.html" target="_blank" title="封神从穿越开始">封神从穿越开始</a>
                        </li>
                        <li>
                            <span> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank">仙侠</a>]
                            </span>
                            <a href="http://chuangshi.qq.com/bk/xx/29717081.html" target="_blank" title="我真没想这么高调">我真没想这么高调</a>
                        </li>
                        <li>
                            <span> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank">仙侠</a>]
                            </span>
                            <a href="http://chuangshi.qq.com/bk/xx/28028765.html" target="_blank" title="带着智能手机修仙">带着智能手机修仙</a>
                        </li>
                        <li>
                            <span> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank">仙侠</a>]
                            </span>
                            <a href="http://chuangshi.qq.com/bk/xx/29380978.html" target="_blank" title="史上最低调的修仙">史上最低调的修仙</a>
                        </li>
                        <li>
                            <span> [<a href="http://chuangshi.qq.com/bk/xx/" target="_blank">仙侠</a>]
                            </span>
                            <a href="http://chuangshi.qq.com/bk/xx/27183270.html" target="_blank" title="神话召唤商城系统">神话召唤商城系统</a>
                        </li>
                    </ul>
                    <p class="last">
                        <a class="red2" target="_blank" rel="nofollow" href="http://chuangshi.qq.com/bk/wx/">更多...</a>
                    </p>
                </div><!-- 最新公告 -->
                <div class="edit_rec">
                    <div class="tabid cf">
                        <h2 class="tableft choice">
                            <a href="javascript:" class="redico2">主编力荐</a>
                        </h2>
                        <h2 class="tabright">
                            <a href="javascript:" class="redico2">上周推荐</a>
                        </h2>
                        <div class="clicklist edit_list" style="height:177px;">
                            <ul class="storylist focus_tablist cf">
                                <li>
                                    <span>
                                        <a>[仙侠]</a>
                                    </span>
                                    <a title="无敌丹道" target="_blank" href="http://chuangshi.qq.com/bk/xx/26916148.html">无敌丹道</a>
                                </li>
                                <li>
                                    <span>
                                        <a>[仙侠]</a>
                                    </span>
                                    <a title="西游之再压五百年" target="_blank" href="http://chuangshi.qq.com/bk/xx/28385472.html">西游之再压五百年</a>
                                </li>
                                <li>
                                    <span>
                                        <a>[仙侠]</a>
                                    </span>
                                    <a title="我的女友是苍龙" target="_blank" href="http://chuangshi.qq.com/bk/xx/27484527.html">我的女友是苍龙</a>
                                </li>
                                <li>
                                    <span>
                                        <a>[仙侠]</a>
                                    </span>
                                    <a title="师姐嫁我" target="_blank" href="http://chuangshi.qq.com/bk/xx/26278859.html">师姐嫁我</a>
                                </li>
                                <li>
                                    <span>
                                        <a>[仙侠]</a>
                                    </span>
                                    <a title="碎了你的天道又如何" target="_blank" href="http://chuangshi.qq.com/bk/xx/29135358.html">碎了你的天道又如何</a>
                                </li>
                            </ul>
                        </div>
                        <div style="display:none;height:177px;" class="clicklist edit_list">
                            <ul class="storylist focus_tablist cf">
                                <li>
                                    <span>
                                        <a>[武侠]</a>
                                    </span>
                                    <a title="明震武林" target="_blank" href="http://chuangshi.qq.com/bk/wx/29074357.html">明震武林</a>
                                </li>
                                <li>
                                    <span>
                                        <a>[仙侠]</a>
                                    </span>
                                    <a title="了不起的异界修仙" target="_blank" href="http://chuangshi.qq.com/bk/xx/27978924.html">了不起的异界修仙</a>
                                </li>
                                <li>
                                    <span>
                                        <a>[仙侠]</a>
                                    </span>
                                    <a title="我能超凡升级" target="_blank" href="http://chuangshi.qq.com/bk/xx/26533808.html">我能超凡升级</a>
                                </li>
                                <li>
                                    <span>
                                        <a>[武侠]</a>
                                    </span>
                                    <a title="功夫电影大穿越" target="_blank" href="http://chuangshi.qq.com/bk/wx/28212230.html">功夫电影大穿越</a>
                                </li>
                                <li>
                                    <span>
                                        <a>[武侠]</a>
                                    </span>
                                    <a title="我老婆是大当家" target="_blank" href="http://chuangshi.qq.com/bk/wx/28006014.html">我老婆是大当家</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_index">
            <a href="http://yunqi.qq.com/bk/ns/25110595.html" target="_blank" class="">
                <img src="/index/picture/114a9ed517869ca1add81da538b04c66.jpg" class="" alt="" title="" height="90" width="1000">
            </a>
        </div>
        <div class="box2 cf">
            <div class="box2_warp_left">
                <!-- 最潜力 -->
                <!--频道页最潜力模块开始-->
                <div class="box2_left">
                    <a target="_blank" class="red2 moretop two" rel="nofollow" href="http://chuangshi.qq.com/bk/xia/">更多...</a>
                    <h2 class="redico">最潜力</h2>
                    <div class="potential cf">
                        <div class="pleft">
                            <div class="potential_img">
                                <div class="bighover">
                                    <a title="仙胞" target="_blank" href="http://chuangshi.qq.com/bk/xx/29633560.html">
                                        <img src="/index/picture/t5_29633560.jpg" width="220" height="275">
                                    </a>
                                    <strong class="bookinfo biger">
                                        <b></b>
                                    </strong>
                                </div>
                                <div class="story_info">
                                    <h3> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                        <span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/29633560.html" title="仙胞">仙胞</a>
                                        </span>
                                    </h3>
                                    <p>
                                        <span title="混沌未分天地乱，茫茫渺渺无人见">混沌未分天地乱，茫茫渺渺无人见</span>
                                        <a href="http://chuangshi.qq.com/bk/xx/29633560.html" target="_blank" class="red2">[阅读]</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="potential_list">
                            <ul class="firstline cf">
                                <li>
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="洪荒师弟很危险" target="_blank" href="http://chuangshi.qq.com/bk/xx/28204622.html">
                                                <img src="/index/picture/t5_28204622.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/28204622.html" title="洪荒师弟很危险">洪荒师弟很危险</a>
                                        </h3>
                                        <p title="励志活到一千岁" style="height: 30px; overflow: hidden">励志活到一千岁</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="修真过来做咸鱼" target="_blank" href="http://chuangshi.qq.com/bk/xx/26502416.html">
                                                <img src="/index/picture/t5_26502416.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/26502416.html" title="修真过来做咸鱼">修真过来做咸鱼</a>
                                        </h3>
                                        <p title="做条史无前例的咸鱼" style="height: 30px; overflow: hidden">做条史无前例的咸鱼</p>
                                    </div>
                                </li>
                                <li class="lastimg">
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="鸿尘剑君" target="_blank" href="http://chuangshi.qq.com/bk/xx/28046229.html">
                                                <img src="/index/picture/t5_28046229.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/28046229.html" title="鸿尘剑君">鸿尘剑君</a>
                                        </h3>
                                        <p title="成就剑君风采！" style="height: 30px; overflow: hidden">成就剑君风采！</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="secondline cf">
                                <li>
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="吾乃左千户" target="_blank" href="http://chuangshi.qq.com/bk/xx/27999529.html">
                                                <img src="/index/picture/t5_27999529.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/27999529.html" title="吾乃左千户">吾乃左千户</a>
                                        </h3>
                                        <p title="如来神掌收了大蜈蚣" style="height: 30px; overflow: hidden">如来神掌收了大蜈蚣</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="凤鸣在天" target="_blank" href="http://chuangshi.qq.com/bk/xx/26914724.html">
                                                <img src="/index/picture/t5_26914724.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/26914724.html" title="凤鸣在天">凤鸣在天</a>
                                        </h3>
                                        <p title="一生传奇天下传" style="height: 30px; overflow: hidden">一生传奇天下传</p>
                                    </div>
                                </li>
                                <li class="lastimg">
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="开局就是巅峰" target="_blank" href="http://chuangshi.qq.com/bk/xx/26768847.html">
                                                <img src="/index/picture/t5_26768847.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/26768847.html" title="开局就是巅峰">开局就是巅峰</a>
                                        </h3>
                                        <p title="崛起于乱世" style="height: 30px; overflow: hidden">崛起于乱世</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--频道页最潜力模块结束-->
                <!-- 最当红 -->
                <!--频道页最当红的开始-->
                <div class="box2_left">
                    <a target="_blank" class="red2 moretop two" rel="nofollow" href="http://chuangshi.qq.com/bk/xia/">更多...</a>
                    <h2 class="redico">最当红</h2>
                    <div class="potential cf">
                        <div class="pleft">
                            <div class="potential_img">
                                <div class="bighover">
                                    <a title="西游之我可以签到诸天" target="_blank" href="http://chuangshi.qq.com/bk/xx/29533888.html">
                                        <img src="/index/picture/t5_29533888.jpg" width="220" height="275">
                                    </a>
                                    <strong class="bookinfo biger">
                                        <b></b>
                                    </strong>
                                </div>
                                <div class="story_info">
                                    <h3> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                        <span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/29533888.html" title="西游之我可以签到诸天">西游之我可以签到诸天</a>
                                        </span>
                                    </h3>
                                    <p>
                                        <span title="签到神墓落风山脉，获得后羿弓">签到神墓落风山脉，获得后羿弓</span>
                                        <a href="http://chuangshi.qq.com/bk/xx/29533888.html" target="_blank" class="red2">[阅读]</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="potential_list">
                            <ul class="firstline cf">
                                <li>
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="升级才是王道" target="_blank" href="http://chuangshi.qq.com/bk/xx/29482029.html">
                                                <img src="/index/picture/t5_29482029.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/29482029.html" title="升级才是王道">升级才是王道</a>
                                        </h3>
                                        <p title="斗妖灭魔，驰骋天下" style="height: 30px; overflow: hidden">斗妖灭魔，驰骋天下</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="云隐惊天" target="_blank" href="http://chuangshi.qq.com/bk/xx/26226289.html">
                                                <img src="/index/picture/t5_26226289.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/26226289.html" title="云隐惊天">云隐惊天</a>
                                        </h3>
                                        <p title="方寸间自成世界" style="height: 30px; overflow: hidden">方寸间自成世界</p>
                                    </div>
                                </li>
                                <li class="lastimg">
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="长青天路" target="_blank" href="http://chuangshi.qq.com/bk/xx/27699657.html">
                                                <img src="/index/picture/t5_27699657.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/27699657.html" title="长青天路">长青天路</a>
                                        </h3>
                                        <p title="穿越成了一棵树！" style="height: 30px; overflow: hidden">穿越成了一棵树！</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="secondline cf">
                                <li>
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="为了地球去修仙" target="_blank" href="http://chuangshi.qq.com/bk/xx/26993083.html">
                                                <img src="/index/picture/t5_26993083.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/26993083.html" title="为了地球去修仙">为了地球去修仙</a>
                                        </h3>
                                        <p title="直播修仙路" style="height: 30px; overflow: hidden">直播修仙路</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="神级职业去修仙" target="_blank" href="http://chuangshi.qq.com/bk/xx/29545421.html">
                                                <img src="/index/picture/t5_29545421.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/xx/">仙侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/xx/29545421.html" title="神级职业去修仙">神级职业去修仙</a>
                                        </h3>
                                        <p title="神级修仙职业" style="height: 30px; overflow: hidden">神级修仙职业</p>
                                    </div>
                                </li>
                                <li class="lastimg">
                                    <div class="bookbox">
                                        <div class="bookhover">
                                            <a title="我在网游当大侠" target="_blank" href="http://chuangshi.qq.com/bk/wx/27659930.html">
                                                <img src="/index/picture/t5_27659930.jpg" width="120" height="150">
                                            </a>
                                            <strong class="bookinfo small">
                                                <b></b>
                                            </strong>
                                        </div>
                                        <h3>
                                            <span> [<a target="_blank" href="http://chuangshi.qq.com/bk/wx/">武侠</a>]
                                            </span>
                                            <a target="_blank" href="http://chuangshi.qq.com/bk/wx/27659930.html" title="我在网游当大侠">我在网游当大侠</a>
                                        </h3>
                                        <p title="游戏世界当大侠" style="height: 30px; overflow: hidden">游戏世界当大侠</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--频道页最当红的结束-->
            </div>
            <div class="box2_warp_right">
                <div class="booklist">
                    <div class="week_rec">
                        <em alt="武侠·仙侠" title="武侠·仙侠" class='fantasy'></em>
                        <h2 class="redico">销售金榜</h2><!-- <div class="tab_subtab"><h3 class="week_h1 subtab_cur">周人气</h3><h3 class="month_h1">月人气</h3><h3 class="allin_h1">总人气</h3></div> -->
                        <div class="tab_subtabdiv_box">
                            <div class="week_list">
                                <ul class="storylist cf">
                                    <li>
                                        <a title='[仙侠]永恒圣王' target='_blank' href='http://chuangshi.qq.com/bk/xx/13695667.html'>永恒圣王</a>
                                    </li>
                                    <li>
                                        <a title='[仙侠]我能追踪万物' target='_blank' href='http://chuangshi.qq.com/bk/xx/25183684.html'>我能追踪万物</a>
                                    </li>
                                    <li class='last'>
                                        <a rel='nofollow' class='red2' target='_blank' href='/bang/jinbang.html'>更多...</a>
                                    </li>
                                </ul>
                            </div><!-- <div class="month_list"> <ul class="storylist cf"><li><b>1544</b><a title='[武侠]鸿渐于磐' target='_blank' href='http://chuangshi.qq.com/bk/wx/23240412.html'>鸿渐于磐</a></li><li><b>885</b><a title='[仙侠]鹿妖逐鹿' target='_blank' href='http://chuangshi.qq.com/bk/xx/26281320.html'>鹿妖逐鹿</a></li><li><b>590</b><a title='[武侠]恩仇红尘劫' target='_blank' href='http://chuangshi.qq.com/bk/wx/25013842.html'>恩仇红尘劫</a></li><li><b>479</b><a title='[仙侠]仙门第一婿' target='_blank' href='http://chuangshi.qq.com/bk/xx/29605006.html'>仙门第一婿</a></li><li><b>439</b><a title='[仙侠]仙宫' target='_blank' href='http://chuangshi.qq.com/bk/xx/23561350.html'>仙宫</a></li><li><b>431</b><a title='[武侠]我是大大侠呀' target='_blank' href='http://chuangshi.qq.com/bk/wx/25367551.html'>我是大大侠呀</a></li><li><b>409</b><a title='[仙侠]终极武力' target='_blank' href='http://chuangshi.qq.com/bk/xx/304875.html'>终极武力</a></li><li><b>361</b><a title='[武侠]风云际会之风波令' target='_blank' href='http://chuangshi.qq.com/bk/wx/26791947.html'>风云际会之风波令</a></li><li><b>275</b><a title='[仙侠]弑神赤龙之重振升仙门' target='_blank' href='http://chuangshi.qq.com/bk/xx/26412325.html'>弑神赤龙之重振升仙...</a></li><li><b>261</b><a title='[仙侠]天神学院' target='_blank' href='http://chuangshi.qq.com/bk/xx/20730806.html'>天神学院</a></li><li><b>236</b><a title='[仙侠]哪吒我搅乱了封神' target='_blank' href='http://chuangshi.qq.com/bk/xx/26296772.html'>哪吒我搅乱了封神</a></li><li><b>229</b><a title='[武侠]凌天剑神' target='_blank' href='http://chuangshi.qq.com/bk/wx/17107977.html'>凌天剑神</a></li><li><b>223</b><a title='[武侠]武仙传承系统' target='_blank' href='http://chuangshi.qq.com/bk/wx/23210905.html'>武仙传承系统</a></li><li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/rq/all-month.html'>更多...</a><a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a></li></ul></div><div class="allin_list"> <ul class="storylist cf"><li><b>2044193</b><a title='[仙侠]盖世仙尊' target='_blank' href='http://chuangshi.qq.com/bk/xx/432313.html'>盖世仙尊</a></li><li><b>920001</b><a title='[仙侠]终极武力' target='_blank' href='http://chuangshi.qq.com/bk/xx/304875.html'>终极武力</a></li><li><b>798471</b><a title='[武侠]鸿渐于磐' target='_blank' href='http://chuangshi.qq.com/bk/wx/23240412.html'>鸿渐于磐</a></li><li><b>631740</b><a title='[仙侠]苍穹九变' target='_blank' href='http://chuangshi.qq.com/bk/xx/354818.html'>苍穹九变</a></li><li><b>261471</b><a title='[仙侠]重生西游之天篷妖尊' target='_blank' href='http://chuangshi.qq.com/bk/xx/14085337.html'>重生西游之天篷妖尊</a></li><li><b>257555</b><a title='[仙侠]永恒圣王' target='_blank' href='http://chuangshi.qq.com/bk/xx/13695667.html'>永恒圣王</a></li><li><b>161916</b><a title='[仙侠]都市最强修真学生' target='_blank' href='http://chuangshi.qq.com/bk/xx/15025657.html'>都市最强修真学生</a></li><li><b>146705</b><a title='[武侠]凌天剑神' target='_blank' href='http://chuangshi.qq.com/bk/wx/17107977.html'>凌天剑神</a></li><li><b>139550</b><a title='[仙侠]仙宫' target='_blank' href='http://chuangshi.qq.com/bk/xx/23561350.html'>仙宫</a></li><li><b>134303</b><a title='[武侠]我是大大侠呀' target='_blank' href='http://chuangshi.qq.com/bk/wx/25367551.html'>我是大大侠呀</a></li><li><b>125360</b><a title='[仙侠]鹿妖逐鹿' target='_blank' href='http://chuangshi.qq.com/bk/xx/26281320.html'>鹿妖逐鹿</a></li><li><b>115101</b><a title='[仙侠]超品小农民' target='_blank' href='http://chuangshi.qq.com/bk/xx/13274073.html'>超品小农民</a></li><li><b>114013</b><a title='[仙侠]天神学院' target='_blank' href='http://chuangshi.qq.com/bk/xx/20730806.html'>天神学院</a></li><li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/rq/all-zong.html'>更多...</a><a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a></li></ul></div> -->
                        </div>
                    </div>
                    <div class="week_rec">
                        <em alt="武侠·仙侠" title="武侠·仙侠" class='fantasy'></em>
                        <h2 class="redico">销售银榜</h2><!-- <div class="tab_subtab"><h3 class="week_h1 subtab_cur">周推荐</h3><h3 class="month_h1">月推荐</h3><h3 class="allin_h1">总推荐</h3></div> -->
                        <div class="tab_subtabdiv_box">
                            <div class="week_list">
                                <ul class="storylist cf">
                                    <li>
                                        <a title='[仙侠]万界鸿蒙道主' target='_blank' href='http://chuangshi.qq.com/bk/xx/27624225.html'>万界鸿蒙道主</a>
                                    </li>
                                    <li>
                                        <a title='[武侠]带着主脑混武侠' target='_blank' href='http://chuangshi.qq.com/bk/wx/28117009.html'>带着主脑混武侠</a>
                                    </li>
                                    <li>
                                        <a title='[仙侠]我就是太古梦神' target='_blank' href='http://chuangshi.qq.com/bk/xx/28695394.html'>我就是太古梦神</a>
                                    </li>
                                    <li>
                                        <a title='[仙侠]师尊到底有多强' target='_blank' href='http://chuangshi.qq.com/bk/xx/27959849.html'>师尊到底有多强</a>
                                    </li>
                                    <li class='last'>
                                        <a rel='nofollow' class='red2' target='_blank' href='/bang/yinbang.html'>更多...</a>
                                    </li>
                                </ul>
                            </div><!-- <div class="month_list"> <ul class="storylist cf"><li><b>4232</b><a title='[仙侠]永恒圣王' target='_blank' href='http://chuangshi.qq.com/bk/xx/13695667.html'>永恒圣王</a></li><li><b>1347</b><a title='[仙侠]鹿妖逐鹿' target='_blank' href='http://chuangshi.qq.com/bk/xx/26281320.html'>鹿妖逐鹿</a></li><li><b>904</b><a title='[仙侠]我能追踪万物' target='_blank' href='http://chuangshi.qq.com/bk/xx/25183684.html'>我能追踪万物</a></li><li><b>854</b><a title='[武侠]凌天剑神' target='_blank' href='http://chuangshi.qq.com/bk/wx/17107977.html'>凌天剑神</a></li><li><b>677</b><a title='[仙侠]仙宫' target='_blank' href='http://chuangshi.qq.com/bk/xx/23561350.html'>仙宫</a></li><li><b>657</b><a title='[仙侠]仙武暴君之召唤群雄' target='_blank' href='http://chuangshi.qq.com/bk/xx/24020540.html'>仙武暴君之召唤群雄</a></li><li><b>531</b><a title='[仙侠]召唤封神之我是纣王' target='_blank' href='http://chuangshi.qq.com/bk/xx/26433813.html'>召唤封神之我是纣王</a></li><li><b>487</b><a title='[仙侠]都市最强修真学生' target='_blank' href='http://chuangshi.qq.com/bk/xx/15025657.html'>都市最强修真学生</a></li><li><b>459</b><a title='[仙侠]重生西游之天篷妖尊' target='_blank' href='http://chuangshi.qq.com/bk/xx/14085337.html'>重生西游之天篷妖尊</a></li><li><b>451</b><a title='[仙侠]玄天龙尊' target='_blank' href='http://chuangshi.qq.com/bk/xx/610002.html'>玄天龙尊</a></li><li><b>397</b><a title='[仙侠]最强反套路系统' target='_blank' href='http://chuangshi.qq.com/bk/xx/13899336.html'>最强反套路系统</a></li><li><b>374</b><a title='[武侠]重生之独步江湖' target='_blank' href='http://chuangshi.qq.com/bk/wx/24233865.html'>重生之独步江湖</a></li><li><b>352</b><a title='[仙侠]天门墟' target='_blank' href='http://chuangshi.qq.com/bk/xx/28266519.html'>天门墟</a></li><li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/tj/all-month.html'>更多...</a><a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a></li></ul></div><div class="allin_list"> <ul class="storylist cf"><li><b>2169335</b><a title='[仙侠]最强神话帝皇' target='_blank' href='http://chuangshi.qq.com/bk/xx/14995075.html'>最强神话帝皇</a></li><li><b>1866202</b><a title='[仙侠]最强反套路系统' target='_blank' href='http://chuangshi.qq.com/bk/xx/13899336.html'>最强反套路系统</a></li><li><b>1528968</b><a title='[仙侠]永恒圣王' target='_blank' href='http://chuangshi.qq.com/bk/xx/13695667.html'>永恒圣王</a></li><li><b>1260792</b><a title='[仙侠]万妖帝主' target='_blank' href='http://chuangshi.qq.com/bk/xx/22030154.html'>万妖帝主</a></li><li><b>1128264</b><a title='[仙侠]青帝' target='_blank' href='http://chuangshi.qq.com/bk/xx/227536.html'>青帝</a></li><li><b>938720</b><a title='[仙侠]盖世仙尊' target='_blank' href='http://chuangshi.qq.com/bk/xx/432313.html'>盖世仙尊</a></li><li><b>796149</b><a title='[仙侠]我有无数神剑' target='_blank' href='http://chuangshi.qq.com/bk/xx/23922100.html'>我有无数神剑</a></li><li><b>793659</b><a title='[仙侠]重生西游之天篷妖尊' target='_blank' href='http://chuangshi.qq.com/bk/xx/14085337.html'>重生西游之天篷妖尊</a></li><li><b>584211</b><a title='[仙侠]都市之无敌仙尊' target='_blank' href='http://chuangshi.qq.com/bk/xx/15720920.html'>都市之无敌仙尊</a></li><li><b>565521</b><a title='[仙侠]仙武暴君之召唤群雄' target='_blank' href='http://chuangshi.qq.com/bk/xx/24020540.html'>仙武暴君之召唤群雄</a></li><li><b>537725</b><a title='[仙侠]都市最强修真学生' target='_blank' href='http://chuangshi.qq.com/bk/xx/15025657.html'>都市最强修真学生</a></li><li><b>488863</b><a title='[仙侠]仙武之无限小兵' target='_blank' href='http://chuangshi.qq.com/bk/xx/22811178.html'>仙武之无限小兵</a></li><li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/tj/all-zong.html'>更多...</a><a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a></li></ul></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box2 cf">
            <div class="box2_warp_left">
                <!--深度阅读-->
                <!--频道页深度阅读开始-->
                <div class="box2_left cf">
                    <a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="red2 moretop two" rel="nofollow">更多...</a>
                    <h2 class="redico">深度阅读</h2>
                    <div class="deepread">
                        <h3 title="仙踪飘渺：何处可循">仙踪飘渺：何处可循</h3>
                        <div class="lead cf">
                            <h2>导语</h2>
                            <p title="仙踪飘渺，无人得见，滚滚红尘，何人不欲长生。仙，有之，无之？纵然大道无情，又岂能挡住众生不度轮回之愿。登浩瀚云海，临九幽之地，或问道求长生，或逍遥于天地。何谓长生？何谓成仙？天地之间一股青烟。			
">仙踪飘渺，无人得见，滚滚红尘，何人不欲长生。仙，有之，无之？纵然大道无情，又岂能挡住众生不度轮回之愿。登浩瀚云海，临九幽之地，或问道求长生，或逍遥于天地。何谓长生？何谓成仙？天地之间一股青烟。
                            </p>
                        </div>
                        <div class="deeplist">
                            <ul class="oneline cf">
                                <li>
                                    <div class="dbox cf">
                                        <a title="长生七万年" target="_blank" href="http://chuangshi.qq.com/bk/xx/27696609.html">
                                            <img width="120" height="150" target="_blank" src="/index/picture/t5_27696609.jpg">
                                        </a>
                                        <div class="deepinfo">
                                            <h2>【修真文明】<a href="http://chuangshi.qq.com/bk/xx/27696609.html" target="_blank" title="长生七万年">长生七万年</a>
                                            </h2>
                                            <p class="deeptxt" title="除魔天地间！">除魔天地间！</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dbox cf">
                                        <a title="从前有个海王" target="_blank" href="http://chuangshi.qq.com/bk/xx/27882149.html">
                                            <img width="120" height="150" target="_blank" src="/index/picture/t5_27882149.jpg">
                                        </a>
                                        <div class="deepinfo">
                                            <h2>【修真文明】<a href="http://chuangshi.qq.com/bk/xx/27882149.html" target="_blank" title="从前有个海王">从前有个海王</a>
                                            </h2>
                                            <p class="deeptxt" title="成为海王的男人！">成为海王的男人！</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="twoline cf">
                                <li>
                                    <div class="dbox cf">
                                        <a title="睡觉就无敌" target="_blank" href="http://chuangshi.qq.com/bk/xx/29107494.html">
                                            <img width="120" height="150" target="_blank" src="/index/picture/t5_29107494.jpg">
                                        </a>
                                        <div class="deepinfo">
                                            <h2>【幻想修仙】<a href="http://chuangshi.qq.com/bk/xx/29107494.html" target="_blank" title="睡觉就无敌">睡觉就无敌</a>
                                            </h2>
                                            <p class="deeptxt" title="偶获神秘生锈飞剑，获无量梦劫经">偶获神秘生锈飞剑，获无量梦劫经</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dbox cf">
                                        <a title="杀神赘婿" target="_blank" href="http://chuangshi.qq.com/bk/xx/29148889.html">
                                            <img width="120" height="150" target="_blank" src="/index/picture/t5_29148889.jpg">
                                        </a>
                                        <div class="deepinfo">
                                            <h2>【现代修真】<a href="http://chuangshi.qq.com/bk/xx/29148889.html" target="_blank" title="杀神赘婿">杀神赘婿</a>
                                            </h2>
                                            <p class="deeptxt" title="神魂不灭，意外重生">神魂不灭，意外重生</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--频道页深度阅读结束-->
            </div>
            <div class="box2_warp_right">
                <div class="booklist">
                    <div class="tabid cf">
                        <h2 class="tableft choice">
                            <a class="redico2" href="javascript:">武侠风云榜</a>
                        </h2>
                        <h2 class="tabright">
                            <a class="redico2" href="javascript:">仙侠风云榜</a>
                        </h2>
                        <div class="clicklist fy-type">
                            <ul class="storylist cf">
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>754</b>
                                    <a title='[武侠]盖世双谐' target='_blank' href='http://chuangshi.qq.com/bk/wx/27371184.html'>盖世双谐</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>367</b>
                                    <a title='[武侠]通幽大圣' target='_blank' href='http://chuangshi.qq.com/bk/wx/26758057.html'>通幽大圣</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>278</b>
                                    <a title='[武侠]超脑太监' target='_blank' href='http://chuangshi.qq.com/bk/wx/26710474.html'>超脑太监</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>246</b>
                                    <a title='[武侠]我有一块属性板' target='_blank' href='http://chuangshi.qq.com/bk/wx/26712456.html'>我有一块属性板</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>208</b>
                                    <a title='[武侠]武侠之最强BOSS只种田' target='_blank' href='http://chuangshi.qq.com/bk/wx/25656025.html'>武侠之最强BOSS...</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>158</b>
                                    <a title='[武侠]贼人休走' target='_blank' href='http://chuangshi.qq.com/bk/wx/26132437.html'>贼人休走</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>117</b>
                                    <a title='[武侠]重生之独步江湖' target='_blank' href='http://chuangshi.qq.com/bk/wx/24233865.html'>重生之独步江湖</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>101</b>
                                    <a title='[武侠]大隋国师' target='_blank' href='http://chuangshi.qq.com/bk/wx/25901168.html'>大隋国师</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>86</b>
                                    <a title='[武侠]苦境武学系统' target='_blank' href='http://chuangshi.qq.com/bk/wx/27381974.html'>苦境武学系统</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>58</b>
                                    <a title='[武侠]武神皇庭' target='_blank' href='http://chuangshi.qq.com/bk/wx/25630882.html'>武神皇庭</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>51</b>
                                    <a title='[武侠]凌天剑神' target='_blank' href='http://chuangshi.qq.com/bk/wx/17107977.html'>凌天剑神</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>49</b>
                                    <a title='[武侠]无限世界投影' target='_blank' href='http://chuangshi.qq.com/bk/wx/27597974.html'>无限世界投影</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>34</b>
                                    <a title='[武侠]逍遥派' target='_blank' href='http://chuangshi.qq.com/bk/wx/500985.html'>逍遥派</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>27</b>
                                    <a title='[武侠]重生南宋求长生' target='_blank' href='http://chuangshi.qq.com/bk/wx/26930515.html'>重生南宋求长生</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[武侠]</a>
                                    </span>
                                    <b>24</b>
                                    <a title='[武侠]开局获得排云掌' target='_blank' href='http://chuangshi.qq.com/bk/wx/26762102.html'>开局获得排云掌</a>
                                </li>
                                <li class='last'>
                                    <a rel='nofollow' class='red2' target='_blank' href='/bang/mo'>更多...</a>
                                    <a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clicklist fy-type hidden">
                            <ul class="storylist cf">
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>8009</b>
                                    <a title='[仙侠]我师兄实在太稳健了' target='_blank' href='http://chuangshi.qq.com/bk/xx/26572786.html'>我师兄实在太稳健了</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>3985</b>
                                    <a title='[仙侠]我的外挂跑路了' target='_blank' href='http://chuangshi.qq.com/bk/xx/28261384.html'>我的外挂跑路了</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>3150</b>
                                    <a title='[仙侠]我真不是仙二代' target='_blank' href='http://chuangshi.qq.com/bk/xx/27596129.html'>我真不是仙二代</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>2267</b>
                                    <a title='[仙侠]烂柯棋缘' target='_blank' href='http://chuangshi.qq.com/bk/xx/25990091.html'>烂柯棋缘</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>1329</b>
                                    <a title='[仙侠]我只想安心修仙' target='_blank' href='http://chuangshi.qq.com/bk/xx/27899301.html'>我只想安心修仙</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>1301</b>
                                    <a title='[仙侠]前任无双' target='_blank' href='http://chuangshi.qq.com/bk/xx/25444718.html'>前任无双</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>1181</b>
                                    <a title='[仙侠]大数据修仙' target='_blank' href='http://chuangshi.qq.com/bk/xx/20737835.html'>大数据修仙</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>1023</b>
                                    <a title='[仙侠]一剑斩破九重天' target='_blank' href='http://chuangshi.qq.com/bk/xx/25445167.html'>一剑斩破九重天</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>1012</b>
                                    <a title='[仙侠]问道红尘' target='_blank' href='http://chuangshi.qq.com/bk/xx/24243481.html'>问道红尘</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>860</b>
                                    <a title='[仙侠]剑徒之路' target='_blank' href='http://chuangshi.qq.com/bk/xx/21092046.html'>剑徒之路</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>816</b>
                                    <a title='[仙侠]永恒国度' target='_blank' href='http://chuangshi.qq.com/bk/xx/14086548.html'>永恒国度</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>653</b>
                                    <a title='[仙侠]玄浑道章' target='_blank' href='http://chuangshi.qq.com/bk/xx/25358161.html'>玄浑道章</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>629</b>
                                    <a title='[仙侠]三寸人间' target='_blank' href='http://chuangshi.qq.com/bk/xx/20327039.html'>三寸人间</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>569</b>
                                    <a title='[仙侠]天下第九' target='_blank' href='http://chuangshi.qq.com/bk/xx/21831961.html'>天下第九</a>
                                </li>
                                <li>
                                    <span>
                                        <a target='_blank' href='http://chuangshi.qq.com/bk/ns/'>[仙侠]</a>
                                    </span>
                                    <b>560</b>
                                    <a title='[仙侠]这个修士很危险' target='_blank' href='http://chuangshi.qq.com/bk/xx/701599.html'>这个修士很危险</a>
                                </li>
                                <li class='last'>
                                    <a rel='nofollow' class='red2' target='_blank' href='/bang/mo'>更多...</a>
                                    <a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_index">
            <a href="http://chuangshi.qq.com/bk/ds/13650712.html" target="_blank" class="">
                <img src="/index/picture/94d7f08381bb3e7a7d7569efc94ce479.jpg" class="" alt="" title="" height="90" width="1000">
            </a>
        </div>
        <div class="box1_left god_box">
            <div class="god cf">
                <h2>
                    <span>></span> 大神有约
                </h2>
                <div class="godinfo">
                    <a href="http://account.book.qq.com/bk/author/ADRQPgdsWWJcNAtvV2lTbAA%25252BWzE%25253D" title="任我笑" target="_blank">
                        <img src="/index/picture/51213844daca00a34a53a039fec39d61.jpg" width="143" height="121">
                    </a>
                    <p class="godname">
                        <a href="http://account.book.qq.com/bk/author/ADRQPgdsWWJcNAtvV2lTbAA%25252BWzE%25253D" target="_blank" title="任我笑">任我笑</a>
                    </p>
                </div>
                <p class="introduce" title="阅文集团长约作家，著有《最强神话帝皇》《万妖帝主》《我有无数神剑》等作品。擅长仙侠类型写作，首创王权神话流，作品总订阅超过千万，受到读者热烈追捧。">阅文集团长约作家，著有《最强神话帝皇》《万妖帝主》《我有无数神剑》等作品。擅长仙侠类型写作，首创王权神话流，作品总订阅超过千万，受到读者热烈追捧。</p>
                <span class="line"></span>
                <a href="http://chuangshi.qq.com/bk/xx/23922100.html" title="我有无数神剑" target="_blank">
                    <img src="/index/picture/t5_23922100.jpg" title="我有无数神剑" width="120" height="150" class="opus">
                </a>
                <div class="opus_info">
                    <h3 class="f900" title="我有无数神剑">
                        <a class="f900" href="http://chuangshi.qq.com/bk/xx/23922100.html" target="_blank" title="我有无数神剑">我有无数神剑</a>
                    </h3>
                    <p title="转世成为皇朝皇子周玄机，原以为会富贵一生，没想到遭遇宫廷恩怨，被迫逃离皇宫。
让他惊喜的是前世发明的一款金手指程序竟然成真了！
两岁获得赤龙剑，蕴含赤龙之魂！
三岁获得第二把神剑！
每长一岁，多一把神剑！
百年后，周玄机带着上百把神剑纵横天下！
万载后，周玄机震慑诸天，万剑凌空，以剑帝之名，登上神话宝座！">转世成为皇朝皇子周玄机，原以为会富贵一生，没想到遭遇宫廷恩怨，被迫逃离皇宫。
                        让他惊喜的是前世发明的一款金手指程序竟然成真了！
                        两岁获得赤龙剑，蕴含赤龙之魂...<a href="http://chuangshi.qq.com/bk/xx/23922100.html" target="_blank" class="red2">[阅读]</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="god_box">
            <div class="box1_right">
                <!--最新公告 start-->
                <div class="edit">
                    <h2>
                        <a href="http://chuangshi.qq.com/news/" target="_blank" class="nn_more red2" rel="nofollow">更多...</a> 最新公告
                    </h2>
                    <div class="edit_ctrl cf" style="display:none;">
                        <div class="flowctrl">
                            <span class="redpoint">1</span>
                            <span>2</span>
                            <span>3</span>
                        </div>
                        <a class="rightbtn" href="javascript:"></a>
                        <a class="leftbtn" href="javascript:"></a>
                    </div>
                    <div id="edit_focus_box">
                        <!--第一个焦点-->
                        <div class="edit_content edit_rank">
                            <ul>
                                <li>
                                    <a href="http://chuangshi.qq.com/news/37847510.html" target="_blank" rel="nofollow" title="电视剧《庆余年》豪华阵容曝光">电视剧《庆余年》豪华阵容曝光</a>
                                </li>
                                <li>
                                    <a href="http://chuangshi.qq.com/news/2734591.html" target="_blank" rel="nofollow" title="2018广东高级研修班报名开始">2018广东高级研修班报名开始</a>
                                </li>
                                <li>
                                    <a href="http://chuangshi.qq.com/news/2735932.html" target="_blank" rel="nofollow" title="武侠·百万征文">武侠·百万征文</a>
                                </li>
                                <li>
                                    <a href="http://chuangshi.qq.com/news/2737583.html" target="_blank" rel="nofollow" title="平台业务调整公告">平台业务调整公告</a>
                                </li>
                                <li>
                                    <a href="http://chuangshi.qq.com/news/37867811.html" target="_blank" rel="nofollow" title="用户等级规则变更通知">用户等级规则变更通知</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--最新公告 end-->
            </div>
        </div>
        <!--二级首页底部三栏自适应-->
        <div class="banner_index">
            <a href="https://v.qq.com/x/page/g0144odovs9.html" target="_blank" class="">
                <img src="/index/picture/7c413d3a4c3d41978abe26f9b06444ec.gif" class="" alt="" title="" height="90" width="1000">
            </a>
        </div>
        <style> .footer{
        clear: both;;
    }
</style>
        <div class="footer">
            <div class="foot_nav">
                <a href="/about/about_us.html" target="_blank" rel="external nofollow">关于我们</a>
                <span>|</span>
                <a href="http://account.book.qq.com/usermember/author.html" target="_blank" rel="external nofollow">作者投稿</a>
                <span>|</span>
                <a href="https://join.yuewen.com/" target="_blank" rel="external nofollow">诚聘英才</a>
                <span>|</span>
                <a href="https://passport.yuewen.com/pact.html?mobile=0" target="_blank" rel="external nofollow">服务协议</a>
                <span>|</span>
                <a href="https://www.yuewen.com/service.html" target="_blank" rel="external">客服中心</a>
                <span>|</span>
                <a href="/about/questions_newuser.html" target="_blank" rel="external nofollow">用户指南</a>
                <span>|</span>
                <a href="/about/contact_us.html" target="_blank" rel="external nofollow">联系我们</a>
            </div>
            <div class="foot_copy_right">
                <p> Copyright (C) 2020 chuangshi.qq.com All Rights Reserved 上海阅文信息技术有限公司 版权所有
                    <a class="gray" href="http://yun.qq.com" target="_blank" rel="external nofollow">本网站由腾讯云提供服务器和带宽支持</a>
                </p>
                <p> 粤府新函[2001]87号 粤网文[2011]0483-070号 网络视听许可证1904073号 网站备案/许可证号：<a href="http://beian.miit.gov.cn/publish/query/indexFirst.action" rel="noreferrer" target="_blank">粤B2-20090059 B2-20090028</a>
                </p>
            </div>
            <div id="icp">
                <a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external nofollow">
                    <img width="122" height="52" src="/index/picture/footer_img1.png">
                </a>
                <a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external nofollow">
                    <img width="122" height="52" src="/index/picture/footer_img2.png">
                </a>
                <a href="http://beian.miit.gov.cn/state/outPortal/loginPortal.action" target="_blank" rel="external nofollow">
                    <img width="122" height="52" src="/index/picture/footer_img3.png">
                </a>
                <a href="http://www.12377.cn/" target="_blank" rel="external nofollow">
                    <img width="122" height="52" src="/index/picture/footer_img4.png">
                </a>
                <a href="http://www.wenming.cn/" target="_blank" rel="external nofollow">
                    <img width="122" height="52" src="/index/picture/footer_img5.png">
                </a>
                <a href="http://www.shjbzx.cn/" target="_blank" rel="external nofollow">
                    <img width="122" height="52" src="/index/picture/footer_img6.png">
                </a>
            </div>
        </div>
    </div>
    <div class="codeWrap fixedLeft" id="fixedLeft" style="display:none;">
        <div class="code_hd">
            <a class="code_close" id="LeftColse" href="javascript:;" title="关闭"></a>
        </div>
        <div class="code_bd">
            <span class="code_pic">
                <img src="/index/picture/code02.png" width="80" height="80" alt="" />
            </span>
            <p class="code_txt">关注QQ阅读
                <br>微信公众号</p>
        </div>
    </div>
    <div class="codeWrap fixedRight" id="fixedRight">
        <div class="code_hd">
            <a class="code_close" id="fixedRight_closeBtn" href="javascript:;" title="关闭"></a>
        </div>
        <div class="code_bd">
            <span class="code_pic">
                <img src="/index/picture/code03.png" width="80" height="80" alt="" />
            </span>
            <p class="code_txt">QQ阅读
                <br>客户端下载</p>
        </div>
    </div>
    <input type="hidden" value="" />
    <script type="text/javascript" src="/index/js/base.js"></script>
    <script type="text/javascript" src="/index/js/channel.js"></script>
    <script type='text/javascript'>
        var userLang = "zhs";						
            $(function(){
                var webSite = "chuangshi";
                var getLoginStatusAjaxUrl = "http://book.qq.com/ywlogin/getStatus.html",
                    sendYWLoginStatusAjaxUrl = "http://book.qq.com/ywlogin/logined.html",
                    logoutYWSsoAjaxUrl = "http://chuangshi.qq.com/public/logout.html",
                    checkTokenAjaxUrl = "/api/checkTokenYw.html";
        
                //未登录时，更新登录状态
                CS.ssoLogin.init(getLoginStatusAjaxUrl, sendYWLoginStatusAjaxUrl,logoutYWSsoAjaxUrl, checkTokenAjaxUrl, webSite);
        
                CS.ssoLogin.getLoginStatus();
                //页面特定链接/按钮点击分析
                $.getScript("http://pingjs.qq.com/tcss.ping.js");
            });
                    
            $(function () {
                var top3gImgUrl = "http://img1.chuangshi.qq.com/chuangshi/p1/d_banner/top3g.gif",
                    getUserInfoAjaxUrl = "/public/showhead.html", //获取用户信息
                    getUserNewMsgUrl = "http://account.book.qq.com/usermessage/getMessageNew.html";
        
                //用户的提示浮层
                CS.remindPopup.init(top3gImgUrl);
                //初始化顶部导航
                CS.topNav.init(getUserInfoAjaxUrl, getUserNewMsgUrl);
            });
        
            $(function(){
                var commonResourceUrl = "http://sta1.chuangshi.qq.com/common";
                var refreshKeyUrl = "";//"http://book.qq.com/ywlogin/refreshkey.html";
        
                var requestStatLogUrl = "http://account.book.qq.com/statlog/index.html",
                    requestStatLogData = {
                        'site' : "cs",
                        'url' : "ACtVNAJqBnhQfQNpBWRUdA",
                        'bid' : '',
                        'uuid' : '0',
                        'encrypt' : 1
                    };
        
                CS.page.statistics.init(commonResourceUrl, refreshKeyUrl, requestStatLogUrl, requestStatLogData);
            });
                
            var searchUrl = "/search/searchindex/type/p1/wd/p2.html";
        
            $(function () {
                //频道页
                CS.page.channel.main.init();
                //搜索框组件
                CS.searchInput.init(searchUrl, 'search_tit_hover');
                //qq阅读广告条
                CS.qqReadAd.init();
            });
    </script>
</body>
</html>