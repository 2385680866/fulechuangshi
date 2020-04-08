<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!-- 360安全游览器使用webkit极速核 -->
    <meta name="renderer" content="webkit"/>
    <!-- IE使用它支持的最高模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="wb:webmaster" content="bde65bab61e33f62"/>
    <meta property="qc:admins" content="151626767763051673016375"/>
    <title>首页</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://img1.chuangshi.qq.com/chuangshi/p1/ico/c_mini_logo.ico"/>
    <link rel="Bookmark" type="image/x-icon" href="http://img1.chuangshi.qq.com/chuangshi/p1/ico/c_mini_logo.ico"/>
    <link rel="stylesheet" type="text/css" href="/index/css/base.css" />
    <!-- prevent dom xss -->
    <script type="text/javascript" src="/index/js/aq_common.js"></script>
</head>
<body>
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
            </div>
        </div>
        @if(session("users"))
        <div class="loginbar">
            <span class="login_after">
                <a class="login user" href="http://account.book.qq.com"> 欢迎，<i>{{session('users.username')}}</i></a>
                <a class="exit" attr="click:ywlogout;" href="{{url('/quit')}}">退出</a>
                <span class="navline">|</span>
            </span>
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

<div class="wrap">
    <link rel="stylesheet" type="text/css" href="/index/css/index.css" />
    <!-- logo -->
    <div class="index_logo cf">
        <a class="main_logo" href="http://chuangshi.qq.com" title="创世中文网"></a>
        <a href="https://acts.book.qq.com/2020/7023087/index.html" target="_blank" class="">
            <img src="/index/picture/694538f23912f5fbf46b75ed62132dfa.jpg" class="main_banner" alt="" title="" height="90" width="724">
        </a>
    </div>
    <div class="index_mainnav">
        <div class="index_mainnav_hd cf">
            <h3 class="index_navh1_cur"><a href="{{url('/')}}" title="首页">首页</a></h3>
            <h3><a href="/search/Allbooks/Lastupdate/3.html" title="最新更新">最新更新</a></h3>
            <h3><a href="{{url('/index/search')}}" title="搜书">搜书</a></h3>
            <h3><a href="{{url('/index/bang')}}" title="排行榜">排行榜</a></h3>
            <h3><a href="http://account.book.qq.com/public/recharge.html" target="_blank" title="充值" rel="external nofollow">充值</a></h3>
            <!-- <h3 style="background:none;"><a href="http://bbs.chuangshi.qq.com" title="论坛" target="_blank">论坛</a></h3> -->
            <div id="searchBar" class="index_serach">
                <i id="searchType" type="all">全部</i>
                <input id='searchInput' type="text" value="复兴之路" autocomplete="off" def="复兴之路"/>
                <a id="searchBtn" class="index_search" href="javascript:">搜 索</a>
                <div id="searchTypeDropdown" class="index_sub_serach">
                    <a href="javascript:" type="all">全部</a>
                    <a href="javascript:" type="chuangshi">创世</a>
                    <a href="javascript:" type="yunqi">云起</a>
                    <a href="javascript:" type="dushu">图书</a>
                </div>
            </div>
        </div>
        <div class="index_mainnav_bd cf">
            <p>
                <a href="{{url('/index/library')}}" title="原创书库">原创书库</a>&nbsp;|
                @foreach($cateInfo as $key=>$value)
                <a href="{{url('/index/cate')}}/{{$value['cate_id']}}" title="{{$value['cate_name']}}">{{$value['cate_name']}}</a>&nbsp;|
                @endforeach
                <!-- <a href="http://chuangshi.qq.com/bk/xia/" title="武侠·仙侠">武侠·仙侠</a>&nbsp;|&nbsp; -->
            </p>
            <span>
                <a href="http://acts.book.qq.com/cssp/theme1.html" target="_blank" title="作家福利" rel="external nofollow">作家福利</a>&nbsp;|
                <a href="{{url('/author')}}" title="作家专区" rel="external nofollow">作家专区</a>
            </span>
        </div>
    </div>
    <div class="index_notice cf">
        <div class="notice_left">
            <h6><a href="https://acts.book.qq.com/2019/6959333/index.html" target="_blank">白金作家宅猪新作来袭</a></h6>
            <p><a href="https://acts.book.qq.com/2019/6959333/index.html" target="_blank">临渊行：黑夜中临深渊而行</a></p>
        </div>
        <div class="noticeList cf">
            <ul>
                <li>
                    <span>公告</span>
                    <em>|</em>
                    <a href="https://v.cctv.com/2020/02/27/VIDEbrTX9FD3LyhrLAoJwQt6200227.shtml?from=timeline&isappinstalled=0" target="_blank">百名网络作家接力发声</a>
                </li>
                <li><span>公告</span><em>|</em><a href="https://acts.book.qq.com/2020/857269865/index.html" target="_blank">同舟共济，文学力量</a></li>
                <li><span>公告</span><em>|</em><a href="https://acts.book.qq.com/2019/6987435/index.html" target="_blank">2019网络文学年度榜样</a></li>
            </ul>
            <ul>
                <li>
                    <span>征文</span>
                    <em>|</em>
                    <a href="http://chuangshi.qq.com/news/62807053.html" target="_blank">2019玄幻征文获奖名单</a></li>
                <li><span>征文</span><em>|</em><a href="http://acts.book.qq.com/2019/6876645/index.html" target="_blank">2020年征文大奖赛！</a></li>
                <li><span>公告</span><em>|</em><a href="http://chuangshi.qq.com/news/91026351.html" target="_blank">网络举报知识竞赛</a></li>
            </ul>
            <ul>
                <li><span>公告</span><em>|</em><a href="http://chuangshi.qq.com/news/76427349.html" target="_blank">西安站星学院作家班开班啦！</a></li>
                <li><span>活动</span><em>|</em><a href="https://jubao.yuewen.com/notice/detail/863260472" target="_blank">网络乱象我举报志愿者招募</a></li>
                <li><span>征文</span><em>|</em><a href="https://acts.book.qq.com/2019/6729479/index.html" target="_blank">短篇创意征文第二季</a></li>
            </ul>
        </div>
    </div>
    <div id="firstWrap" class="focus_wrap">
        <div class="focus_left">
            <!--本周强推-->
            <div class="indexLeftList">
                <h3 class="redico">本周强推</h3>
                <div class="qiangtui">
                    <ul class="storylist focus_tablist cf">
                        <li>
                            <b></b>
                            <span><a href="http://chuangshi.qq.com/bk/yx/" target="_blank">[游戏]</a></span>
                            <a bid="28646362" target="_blank" href="http://chuangshi.qq.com/bk/yx/28646362.html">全世界都在演我怎么办</a>
                        </li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/ds/" target="_blank">[都市]</a></span><a bid="29349502" target="_blank" href="http://chuangshi.qq.com/bk/ds/29349502.html">开局召唤黑影兵团</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/2cy/" target="_blank">[轻小说]</a></span><a bid="28462646" target="_blank" href="http://chuangshi.qq.com/bk/2cy/28462646.html">斗破之最强老公</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/js/" target="_blank">[军事]</a></span><a bid="29279452" target="_blank" href="http://chuangshi.qq.com/bk/js/29279452.html">从我是特种兵开始阅读变强</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/ds/" target="_blank">[都市]</a></span><a bid="29377792" target="_blank" href="http://chuangshi.qq.com/bk/ds/29377792.html">开局签到一个校花</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/xh/" target="_blank">[玄幻]</a></span><a bid="28357739" target="_blank" href="http://chuangshi.qq.com/bk/xh/28357739.html">大秦之召唤诸天</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/ds/" target="_blank">[都市]</a></span><a bid="29306447" target="_blank" href="http://chuangshi.qq.com/bk/ds/29306447.html">从签到开始百亿神豪</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/xh/" target="_blank">[玄幻]</a></span><a bid="26674523" target="_blank" href="http://chuangshi.qq.com/bk/xh/26674523.html">史上第一前夫</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/kh/" target="_blank">[科幻]</a></span><a bid="25266350" target="_blank" href="http://chuangshi.qq.com/bk/kh/25266350.html">我是个莫得感情的刺客</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/ds/" target="_blank">[都市]</a></span><a bid="27239528" target="_blank" href="http://chuangshi.qq.com/bk/ds/27239528.html">带着系统做巨星</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/xh/" target="_blank">[玄幻]</a></span><a bid="28387322" target="_blank" href="http://chuangshi.qq.com/bk/xh/28387322.html">从末世修仙开始签到</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/yx/" target="_blank">[游戏]</a></span><a bid="28401360" target="_blank" href="http://chuangshi.qq.com/bk/yx/28401360.html">从英雄联盟开始爆红全网</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/kh/" target="_blank">[科幻]</a></span><a bid="28294356" target="_blank" href="http://chuangshi.qq.com/bk/kh/28294356.html">万界之神级阎罗系统</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/xh/" target="_blank">[玄幻]</a></span><a bid="29238022" target="_blank" href="http://chuangshi.qq.com/bk/xh/29238022.html">大师兄万古无敌</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/yx/" target="_blank">[游戏]</a></span><a bid="29255492" target="_blank" href="http://chuangshi.qq.com/bk/yx/29255492.html">因为太怕死所以我选择无敌</a></li>
                    </ul>
                    <p class="hyh"><a class="red2" target="_blank" href="/historyrecommend/recommendhistory/type/qiangtui/">更多...</a></p>
                </div>
            </div>
            <!--本周强推结束-->
        </div>
        <div class="focus_mid">
            <!-- 图片轮播 -->
            <div class="mF_games_tb mF_games_tb_myFocus" style="height: 295px;" id="myFocus" imagesliderbythumb="1155802">
                <div class="pic" style="width: 566px; height: 209px; overflow: hidden;">
                    <ul>
                    @foreach($homeInfo as $key=>$value)
                        <li style="display: list-item;">
                            <a alt="{{$value['read_name']}}" title="{{$value['read_name']}}" href="{{url('/detail')}}/{{$value['read_id']}}" target="_blank">
                                <img width="566" height="209" text="{{$value['read_text']}}" alt="{{$value['read_name']}}" title="{{$value['read_name']}}" src="{{$value['home_img']}}" />
                            </a>
                        </li>
                        <!-- 
                        <li style="">
                            <a alt="复兴之路" title="复兴之路" href="http://chuangshi.qq.com/bk/qc/707172.html" target="_blank">
                                <img width="566" height="209" text="日出日落，天道永恒。" alt="复兴之路" title="复兴之路" src="/index/picture/600e15ba898e0940f3f473473e4d8058.jpg" />
                            </a>
                        </li>-->
                        
                    @endforeach
                    </ul>
                </div>
                <!--描述-->
                <div class="txt">
                    <ul>
                        @foreach($homeInfo as $key=>$value)
                        <li style="bottom: 86px; display: list-item;">
                            <a title="{{$value['read_name']}}" target="_blank" href="{{url('/detail')}}/{{$value['read_id']}}">{{$value['read_name']}} [都市] {{$value['author_nickname']}}著{{$value['created_at']}}</a>
                            <p>{{$value['read_desc']}}</p>
                            <b></b>
                        </li>
                        @endforeach
                        <!-- <li style="bottom: 86px; ">
                            <a title="复兴之路" target="_blank" href="http://chuangshi.qq.com/bk/qc/707172.html">复兴之路 [现实] wanglong著 2020-04-01</a>
                            <p>日出日落，天道永恒。</p><b></b>
                        </li> -->
                    </ul>
                </div>
                <!--小图-->
                <div style="width: 526px; height: 86px; left: 20px;" class="thumb">
                    <ul style="width: 525px; left: 0px;">
                        @foreach($homeInfo as $key=>$value)
                            <li class="current" style="width:105px;">
                                <a>
                                    <img width="91" height="60" src="{{$value['home_img']}}" alt="{{$value['read_name']}}" title="{{$value['read_name']}}">
                                </a>
                                <b></b>
                            </li>
                        @endforeach
                   </ul>
                </div>
                <div class="prev_focus"><a href="javascript:;" class="gray2">‹</a></div>
                <div class="next_focus"><a href="javascript:;" class="gray2">›</a></div>
            </div>
            <!-- 图片轮播结束 -->
            <div class="salesRank">
                <div class="salesTab cf" id="salesTab"><span class="act"><em>创世销售周榜</em></span></div>
                <div id="salesListWrap">
                    <div class="salesList">
                        <ul class="cf">
                            <li>
                                <span class="n1"></span>
                                <a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[玄幻]</a>
                                <a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xh/21058239.html">伏天氏</a>
                            </li>
                            <li>
                                <span class="n7"></span>
                                <a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[玄幻]</a>
                                <a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xh/413455.html">凌天战尊</a>
                            </li>
                            <li class="lastimg"><span class="n13"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[悬疑]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/ly/27550099.html">我做帝君那些年</a></li>
                            <li><span class="n2"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[玄幻]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xh/27216384.html">玄黄龙皇</a></li>
                            <li><span class="n8"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[军事]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/js/26350069.html">从我是特种兵开始打卡</a></li>
                            <li class="lastimg"><span class="n14"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[玄幻]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xh/20496369.html">大道朝天</a></li>
                            <li><span class="n3"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[玄幻]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xh/19454017.html">万道龙皇</a></li>
                            <li><span class="n9"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[玄幻]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xh/25546807.html">垂钓之神</a></li>
                            <li class="lastimg"><span class="n15"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[武侠]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/wx/17107977.html">凌天剑神</a></li>
                            <li><span class="n4"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[仙侠]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xx/26281320.html">鹿妖逐鹿</a></li>
                            <li><span class="n10"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[玄幻]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xh/16488029.html">妖龙古帝</a></li>
                            <li class="lastimg"><span class="n16"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[玄幻]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xh/25241025.html">我是一把魔剑</a></li>
                            <li><span class="n5"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[玄幻]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xh/648963.html">万古神帝</a></li>
                            <li><span class="n11"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[历史]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/ls/23492216.html">重生世子爷</a></li>
                            <li class="lastimg"><span class="n17"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[悬疑]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/ly/25912804.html">心理化学师</a></li>
                            <li><span class="n6"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[玄幻]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xh/22658128.html">神魔之上</a></li>
                            <li><span class="n12"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[玄幻]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/xh/20504143.html">惊天剑帝</a></li>
                            <li class="lastimg"><span class="n18"></span><a target="_blank" class="gray2" href="http://chuangshi.qq.com/bk/ns/">[军事]</a><a class="green" target="_blank" href="http://chuangshi.qq.com/bk/js/22816327.html">最强妖孽特种兵王</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="focus_right">
            <div class="best_title mb10">
                <h3 class="redico"><a>大神推</a></h3>
                <div class="clicklist main_clicklist">
                    <div class="focus_rightdiv">
                        <a href="http://chuangshi.qq.com/bk/ds/823067.html" rel="nofollow" target="_blank"><img src="/index/picture/feb1e7da39caaf08743d33cd6278b87d.jpg" height="76" width="180"></a>
                        <p>【聚焦名家】<a href="http://account.book.qq.com/bk/author/AD1QOgdqWWhcNgtqV2dTYQA7WzlQPgNn" rel="nofollow" target="_blank">卓牧闲</a><br> 【焦点新书】<a href="http://chuangshi.qq.com/bk/ds/823067.html" rel="nofollow" target="_blank">韩警官</a><br>重活1996，且看韩博的警路人生。<br><a rel="nofollow" target="_blank" class="red2 godrecLink" href="/Godrec/index.html">更多</a></p>
                    </div>
                </div>
            </div>
            <!-- 用户面板 -->
            <div id="userBox" class="indexUserBox">
                <h3 class="redico">大家都在看</h3>
                <div class="noLoginRecList">
                    <ul>
                        <li><span>衍生同人</span>
                            <a target="_blank" class="green" href="http://chuangshi.qq.com/bk/2cy/29574361.html">斗罗之我的师傅太危险</a>
                        </li>
                        <li><span>架空历史</span><a target="_blank" class="green" href="http://chuangshi.qq.com/bk/ls/28417585.html">我在北梁做霸主</a></li>
                        <li><span>异术超能</span><a target="_blank" class="green" href="http://chuangshi.qq.com/bk/ds/29500414.html">从签到开始当全球大佬</a></li>
                        <li><span>娱乐明星</span><a target="_blank" class="green" href="http://chuangshi.qq.com/bk/ds/27520211.html">娱乐之王者归来</a></li>
                        <li><span>异世大陆</span><a target="_blank" class="green" href="http://chuangshi.qq.com/bk/xh/29142627.html">无敌魔尊之纵横天下</a></li>
                        <li><span>两晋隋唐</span><a target="_blank" class="green" href="http://chuangshi.qq.com/bk/ls/27616044.html">我的空间有座城</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div class="jptjWrap cf">
        <!--精品推荐-->
        <div class="jpRecBook fl">
            <span class="tit" title="精品推荐"><img src="/index/images/jptj.png" alt=""></span>
            <div id="zsgun">
                <a href="javascript:;" class="prenext zspre"></a>
                <a href="javascript:;" class="prenext zsnext"></a>
                <div id="gundiv" class="container2">
                    <ul>
                        @foreach($jpInfo as $key=>$value)
                            <li>
                                <a href="http://chuangshi.qq.com/bk/ds/29442711.html" target="_blank" title="{{$value['read_name']}}" class="imgBox">
                                    <img src="{{$value['read_img']}}" width="78" height="98"/>
                                </a>
                                <div class="recInfo">
                                    <a href="http://chuangshi.qq.com/bk/ds/29442711.html" target="_blank" title="{{$value['read_name']}}">{{$value['read_name']}}</a>
                                    <p class="index_authorlink" >{{$value['author_nickname']}}&nbsp;著</p><p>{{$value['read_desc']}}</p>
                                </div>
                            </li>
                        @endforeach
                        <!--
                            <li class="recAct" >
                                <a href="http://chuangshi.qq.com/bk/ds/28476424.html" target="_blank" title="我成为了外星王子" class="imgBox">
                                    <img src="/index/picture/t5_28476424.jpg" width="78" height="98"/>
                                </a>
                                <div class="recInfo">
                                    <a href="http://chuangshi.qq.com/bk/ds/28476424.html" target="_blank" title="我成为了外星王子">我成为了外星王子</a>
                                    <p class="index_authorlink" >西普御猫&nbsp;著</p><p>我成了王子殿下？</p>
                                </div>
                            </li> -->
                    </ul>
                </div>
                <a id="jingpinRecommendLeftBtn" href="javascript:;" class="hScrollPane_leftarrow"></a>
                <a id="jingpinRecommendRightBtn" href="javascript:;" class="hScrollPane_rightarrow"></a>
            </div>
        </div>
        <!--精品推荐结束-->
        <div class="jpBanner fr">
            <a href="http://www.oneplusbbs.com/thread-3905634-1-1.html" target="_blank" class="">
                <img src="/index/picture/ba553abcce834c0e918e93b813aa467b.gif" class="" alt="" title="" height="120" width="205">
            </a>
        </div>
    </div>
    <!---->
    <div id="secondWrap" class="focus_wrap">
        <div class="focus_left">
            <!--新书风云榜/原创风云榜-->
            <div class="tabid cf" style="margin-bottom:10px;">
                <h3 class="tableft choice"><a class="redico2">新书风云榜</a></h3>
                <h3 class="tabright"><a class="redico2">原创风云榜</a></h3>
                <div class="clicklist"> <ul class="storylist cf">
                        <li><b>3961</b><a title='[仙侠]我的外挂跑路了' target='_blank' href='http://chuangshi.qq.com/bk/xx/28261384.html'>我的外挂跑路了</a></li>
                        <li><b>3085</b><a title='[游戏]峡谷之巅' target='_blank' href='http://chuangshi.qq.com/bk/yx/28000426.html'>峡谷之巅</a></li>
                        <li><b>1733</b><a title='[游戏]全世界都在演我怎么办' target='_blank' href='http://chuangshi.qq.com/bk/yx/28646362.html'>全世界都在演我怎么...</a></li>
                        <li><b>1380</b><a title='[体育]我真的只是想打铁' target='_blank' href='http://chuangshi.qq.com/bk/ty/28126660.html'>我真的只是想打铁</a></li>
                        <li><b>1308</b><a title='[仙侠]我只想安心修仙' target='_blank' href='http://chuangshi.qq.com/bk/xx/27899301.html'>我只想安心修仙</a></li>
                        <li><b>1274</b><a title='[科幻]独行诸天末日' target='_blank' href='http://chuangshi.qq.com/bk/kh/28044323.html'>独行诸天末日</a></li>
                        <li><b>1125</b><a title='[游戏]轮回大劫主' target='_blank' href='http://chuangshi.qq.com/bk/yx/28269901.html'>轮回大劫主</a></li>
                        <li><b>930</b><a title='[都市]女装神豪' target='_blank' href='http://chuangshi.qq.com/bk/ds/25408186.html'>女装神豪</a></li>
                        <li><b>930</b><a title='[玄幻]女帝的神级星卡师' target='_blank' href='http://chuangshi.qq.com/bk/xh/28069605.html'>女帝的神级星卡师</a></li>
                        <li><b>737</b><a title='[历史]我的帝国无双' target='_blank' href='http://chuangshi.qq.com/bk/ls/27737715.html'>我的帝国无双</a></li>
                        <li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/mo/type/new/'>更多...</a><a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a></li>
                    </ul>
                </div>
                <div class="clicklist" style="display:none;">
                    <ul class="storylist cf">
                        <li><b>13682</b><a title='[玄幻]诡秘之主' target='_blank' href='http://chuangshi.qq.com/bk/xh/20868264.html'>诡秘之主</a></li>
                        <li><b>8012</b><a title='[轻小说]平平无奇大师兄' target='_blank' href='http://chuangshi.qq.com/bk/2cy/27176480.html'>平平无奇大师兄</a></li>
                        <li><b>7916</b><a title='[仙侠]我师兄实在太稳健了' target='_blank' href='http://chuangshi.qq.com/bk/xx/26572786.html'>我师兄实在太稳健了</a></li>
                        <li><b>7090</b><a title='[游戏]亏成首富从游戏开始' target='_blank' href='http://chuangshi.qq.com/bk/yx/26150754.html'>亏成首富从游戏开始</a></li>
                        <li><b>6766</b><a title='[科幻]圣光' target='_blank' href='http://chuangshi.qq.com/bk/kh/25581825.html'>圣光</a></li>
                        <li><b>5630</b><a title='[都市]万族之劫' target='_blank' href='http://chuangshi.qq.com/bk/ds/28027842.html'>万族之劫</a></li>
                        <li><b>5033</b><a title='[历史]东晋北府一丘八' target='_blank' href='http://chuangshi.qq.com/bk/ls/20056141.html'>东晋北府一丘八</a></li>
                        <li><b>4963</b><a title='[历史]明天下' target='_blank' href='http://chuangshi.qq.com/bk/ls/25609210.html'>明天下</a></li>
                        <li><b>4953</b><a title='[轻小说]这号有毒' target='_blank' href='http://chuangshi.qq.com/bk/2cy/26418552.html'>这号有毒</a></li>
                        <li><b>4779</b><a title='[都市]第一序列' target='_blank' href='http://chuangshi.qq.com/bk/ds/23562540.html'>第一序列</a></li>
                        <li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/mo.html'>更多...</a><a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a></li>
                    </ul>
                </div>
            </div>
            <!--新书风云榜/原创风云榜结束-->
            <!--文华榜-->
            <div class="indexLeftList mn10">
                <h3 class="redico">文华榜</h3>
                <div class="wenxiu">
                    <div class="xinxiu_story cf">
                        <a href="http://chuangshi.qq.com/bk/xx/28233750.html" target="_blank">
                            <img width="83" height="102" class="lazy" src="/index/picture/grey.gif" data-original="//wfqqreader-1252317822.image.myqcloud.com/cover/750/28233750/t5_28233750.jpg">
                        </a>
                        <div class="xinxiu_info">
                            <h5><a href="http://chuangshi.qq.com/bk/xx/28233750.html" class="green">洪荒之时辰为尊</a></h5>
                            <p>忘眼千年 著</p>
                            <p></p>
                        </div>
                    </div>
                    <ul class="storylist cf">
                        <li>
                            <b></b>
                            <span><a href="http://chuangshi.qq.com/bk/2cy/27795366.html" target="_blank">[轻小说]</a></span>
                            <a href="http://chuangshi.qq.com/bk/2cy/27795366.html" target="_blank">斗罗之黄猿斗罗</a>
                        </li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/2cy/25726868.html" target="_blank">[轻小说]</a></span><a href="http://chuangshi.qq.com/bk/2cy/25726868.html" target="_blank">斗罗系统万界行</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/xh/28372379.html" target="_blank">[玄幻]</a></span><a href="http://chuangshi.qq.com/bk/xh/28372379.html" target="_blank">我成了天庭之主</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/kh/28098410.html" target="_blank">[科幻]</a></span><a href="http://chuangshi.qq.com/bk/kh/28098410.html" target="_blank">末日不死者召唤师</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/xh/29075647.html" target="_blank">[玄幻]</a></span><a href="http://chuangshi.qq.com/bk/xh/29075647.html" target="_blank">玄幻三国之雄霸天下</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/ds/29435067.html" target="_blank">[都市]</a></span><a href="http://chuangshi.qq.com/bk/ds/29435067.html" target="_blank">天王巨星从签到开始</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/yx/28680093.html" target="_blank">[游戏]</a></span><a href="http://chuangshi.qq.com/bk/yx/28680093.html" target="_blank">全能男神从绝地求生开始</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/yx/29255492.html" target="_blank">[游戏]</a></span><a href="http://chuangshi.qq.com/bk/yx/29255492.html" target="_blank">因为太怕死所以我选择无敌</a></li>
                        <li><b></b><span><a href="http://chuangshi.qq.com/bk/2cy/28046581.html" target="_blank">[轻小说]</a></span><a href="http://chuangshi.qq.com/bk/2cy/28046581.html" target="_blank">吃下这个果实我们就是兄弟</a></li>
                        <li class="last"><a href="/historyrecommend/recommendhistory/type/wenhua.html" target="_blank" class="red2">更多...</a><a target="_blank" href="http://chuangshi.qq.com/about/questions_discuss.html">文华规则说明</a></li>
                    </ul>
                </div>
            </div>
            <!--文华榜结束-->
            <div class="write_talk">
                <h3 class="redico">作者访谈</h3>
                <a href="http://chuangshi.qq.com/news/87075255.html">
                    <img src="/index/picture/3c4df09d7f4f4a74a0c25960f3c51e25.gif" id="write_img" width="168" height="88">
                </a>
                <ul id="writer_list"><p><span>打眼:</span>阅文集团白金作家，中国网络作家富豪榜上榜作家，鉴宝、风水类小说顶级作家。根据作品《黄金瞳》改编、由张艺兴主演的同名影视剧正在热播中。<a href="http://chuangshi.qq.com/news/87075255.html" target="_blank">[详细]</a></p></ul>
            </div>
        </div>
        <div class="focus_mid mid_two">
            <div class="class_choiceness">
                <!--精品力荐-->
                <h3 class="choiceness"><a class="redico2">精品力荐</a></h3>
                <div id="boutiqueBox"><div class="jingping cf">
                        <div id="jingp_img">
                            <a href="http://chuangshi.qq.com/bk/ds/28089662.html" target="_blank">
                                <img src="/index/picture/t5_28089662.jpg" width="208" height="261" class="mid_img">
                            </a>
                            <h6>石头会眨眼 著 [都市]</h6>
                            <div id="boutique_list">
                                <ul class="cf">
                                    <li>
                                        <a href="http://chuangshi.qq.com/bk/ds/27753270.html" target="_blank">
                                            <img src="/index/picture/t5_27753270.jpg" width="72" height="92" class="bou_cur">
                                        </a>
                                    </li>
                                    <li><a href="http://chuangshi.qq.com/bk/ds/14139469.html" target="_blank"><img src="/index/picture/t5_14139469.jpg" width="72" height="92" class="bou_cur"></a></li>
                                    <li><a href="http://chuangshi.qq.com/bk/ds/27501062.html" target="_blank"><img src="/index/picture/t5_27501062.jpg" width="72" height="92" class="bou_cur"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="boutique" >
                            <h3><a href="http://chuangshi.qq.com/bk/ds/28089662.html" target="_blank" class="red2">从千亿集团开始签到</a></h3>
                            <p><span>[点评]：</span>获得神级签到系统，开局就被奖励千亿集团。胡途摇身一变成为了土豪，人生瞬间失去了奋斗目标。“叮！签到成功，恭喜宿主获得魔都金融中心一块地。”</p>
                        </div>
                        <div class="boutique" style="display: none;">
                            <h3><a href="http://chuangshi.qq.com/bk/ds/27753270.html" target="_blank" class="red2">我每天随机一个新系统</a></h3>
                            <p><span>[点评]：</span>叶天逸穿越到了一个人渣的身上，同时开启了一个无限系统，无限系统每次都会随机开启一个不一样的新系统，获得逆天奖励。</p>
                        </div>
                        <div class="boutique" style="display: none;">
                            <h3><a href="http://chuangshi.qq.com/bk/ds/14139469.html" target="_blank" class="red2">美女总裁的全能高手</a></h3>
                            <p><span>[点评]：</span>超级高手混迹花都，懂医术，会武术，看他如何横行都市，谱写传奇！</p>
                        </div>
                        <div class="boutique" style="display: none;"><h3><a href="http://chuangshi.qq.com/bk/ds/27501062.html" target="_blank" class="red2">我有一个签到系统</a></h3><p><span>[点评]：</span>一觉醒来，林浩获得了一个签到系统。首次完成签到，获得了系统奖励的一间店铺，本想转手卖掉，却因为她的出现，而“被迫”营业……</p></div>
                    </div>
                </div>
                <!--精品力荐结束-->
                <div>
                    <a class="sword"></a>
                    <h3 class="choiceness"><a class="redico2">分类精选</a></h3>
                    <div class="choiceness_list">
                        <ul class="cf">
                            <li >
                                <h3><a class="gray" target="_blank" href="http://chuangshi.qq.com/bk/huan/">更多...</a>
                                    <a target="_blank" href="http://chuangshi.qq.com/bk/huan/">玄幻·奇幻</a></h3>
                                <div>
                                    <a href="http://chuangshi.qq.com/bk/xh/29579687.html" target="_blank">
                                        <img src="/index/picture/339f9755072b12c0b97aa27f480a4e8f.jpg" height="87" width="219">
                                    </a>
                                    <span>一觉醒来八万年：我睡了八万年</span>
                                </div>
                                <dl>
                                    <dd>
                                        <a href="http://chuangshi.qq.com/bk/xh/" target="_blank" class="gray2">[玄幻]</a>
                                        <a href="http://chuangshi.qq.com/bk/xh/27221896.html" target="_blank" class="green">双重钟离征战异界：五族之重生异界</a>
                                    </dd>
                                    <dd><a href="http://chuangshi.qq.com/bk/xh/" target="_blank" class="gray2">[玄幻]</a><a href="http://chuangshi.qq.com/bk/xh/29111031.html" target="_blank" class="green">我只怕我姐姐：我的姐姐是仙王</a></dd>
                                    <dd><a href="http://chuangshi.qq.com/bk/xh/" target="_blank" class="gray2">[玄幻]</a><a href="http://chuangshi.qq.com/bk/xh/29534544.html" target="_blank" class="green">一个又一个黑夜降临：诸仙化魔</a></dd>
                                    <dd><a href="http://chuangshi.qq.com/bk/xh/" target="_blank" class="gray2">[玄幻]</a><a href="http://chuangshi.qq.com/bk/xh/26756985.html" target="_blank" class="green">开始了幕后生活：我的老婆要做宗主</a></dd>
                                </dl>
                            </li>
                            <li ><h3><a class="gray" target="_blank" href="http://chuangshi.qq.com/bk/xia/">更多...</a><a target="_blank" href="http://chuangshi.qq.com/bk/xia/">武侠·仙侠</a></h3><div><a href="http://chuangshi.qq.com/bk/xx/28115944.html" target="_blank"><img src="/index/picture/4d4ca51192d11e901cb4f71e80f8ba4e.jpg" height="87" width="219"></a><span>岁月流失，神族再现：那个神话传说</span></div><dl><dd><a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="gray2">[仙侠]</a><a href="http://chuangshi.qq.com/bk/xx/29338549.html" target="_blank" class="green">聊天群穿越诸天万界：诸妖聊天群</a></dd><dd><a href="http://chuangshi.qq.com/bk/wx/" target="_blank" class="gray2">[武侠]</a><a href="http://chuangshi.qq.com/bk/wx/28117009.html" target="_blank" class="green">神秘主脑武侠生涯：带着主脑混武侠</a></dd><dd><a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="gray2">[仙侠]</a><a href="http://chuangshi.qq.com/bk/xx/28108241.html" target="_blank" class="green">我要当仙尊！：第九妖徒</a></dd><dd><a href="http://chuangshi.qq.com/bk/xx/" target="_blank" class="gray2">[仙侠]</a><a href="http://chuangshi.qq.com/bk/xx/27623640.html" target="_blank" class="green">在线追师兄：灵能二师兄</a></dd></dl></li>
                            <li ><h3><a class="gray" target="_blank" href="http://chuangshi.qq.com/bk/chun/">更多...</a><a target="_blank" href="http://chuangshi.qq.com/bk/chun/">都市·青春</a></h3><div><a href="http://chuangshi.qq.com/bk/ds/29656175.html" target="_blank"><img src="/index/picture/d95142671b1f40c475d92a6c04207c70.jpg" height="87" width="219"></a><span>悄悄赚钱，轻松生活：闲人驾到</span></div><dl><dd><a href="http://chuangshi.qq.com/bk/ds/" target="_blank" class="gray2">[都市]</a><a href="http://chuangshi.qq.com/bk/ds/29306802.html" target="_blank" class="green">爷爷是至尊长老：我的爷爷是至尊</a></dd><dd><a href="http://chuangshi.qq.com/bk/ds/" target="_blank" class="gray2">[都市]</a><a href="http://chuangshi.qq.com/bk/ds/28316660.html" target="_blank" class="green">李毅成为天神级巨星：天神级巨星</a></dd><dd><a href="http://chuangshi.qq.com/bk/ds/" target="_blank" class="gray2">[都市]</a><a href="http://chuangshi.qq.com/bk/ds/27239528.html" target="_blank" class="green">男神逃婚去当演员：带着系统做巨星</a></dd><dd><a href="http://chuangshi.qq.com/bk/ds/" target="_blank" class="gray2">[都市]</a><a href="http://chuangshi.qq.com/bk/ds/28160563.html" target="_blank" class="green">恭喜主人强化体质：都市之强化万物</a></dd></dl></li>
                            <li ><h3><a class="gray" target="_blank" href="http://chuangshi.qq.com/bk/shi/">更多...</a><a target="_blank" href="http://chuangshi.qq.com/bk/shi/">历史·军事</a></h3><div><a href="http://chuangshi.qq.com/bk/ls/26711844.html" target="_blank"><img src="/index/picture/b1102e099bb1d4dba4badd01bd62751c.jpg" height="87" width="219"></a><span>同代无敌：以宋之名</span></div><dl><dd><a href="http://chuangshi.qq.com/bk/ls/" target="_blank" class="gray2">[历史]</a><a href="http://chuangshi.qq.com/bk/ls/23567778.html" target="_blank" class="green">被误会为谪仙降临：唐颂天下</a></dd><dd><a href="http://chuangshi.qq.com/bk/ls/" target="_blank" class="gray2">[历史]</a><a href="http://chuangshi.qq.com/bk/ls/29110770.html" target="_blank" class="green">得大内高手海大富：我不想当大佬啦</a></dd><dd><a href="http://chuangshi.qq.com/bk/ls/" target="_blank" class="gray2">[历史]</a><a href="http://chuangshi.qq.com/bk/ls/27895367.html" target="_blank" class="green">带着一个好人系统：极品小军师</a></dd><dd><a href="http://chuangshi.qq.com/bk/ls/" target="_blank" class="gray2">[历史]</a><a href="http://chuangshi.qq.com/bk/ls/27588407.html" target="_blank" class="green">征战异界：异界召唤之水浒英杰</a></dd></dl></li>
                            <li  class="nobottom"><h3><a class="gray" target="_blank" href="http://chuangshi.qq.com/bk/you/">更多...</a><a target="_blank" href="http://chuangshi.qq.com/bk/you/">游戏·体育</a></h3><div><a href="http://chuangshi.qq.com/bk/yx/25651458.html" target="_blank"><img src="/index/picture/e79099da694d87817bd14cc2173e6af8.jpg" height="87" width="219"></a><span>游戏职业制作师：疯狂制作师</span></div><dl><dd><a href="http://chuangshi.qq.com/bk/yx/" target="_blank" class="gray2">[游戏]</a><a href="http://chuangshi.qq.com/bk/yx/29414788.html" target="_blank" class="green">幸运值争霸网游：网游之超强幸运</a></dd><dd><a href="http://chuangshi.qq.com/bk/yx/" target="_blank" class="gray2">[游戏]</a><a href="http://chuangshi.qq.com/bk/yx/29281145.html" target="_blank" class="green">首富系统召唤英雄：王者召唤英雄</a></dd><dd><a href="http://chuangshi.qq.com/bk/yx/" target="_blank" class="gray2">[游戏]</a><a href="http://chuangshi.qq.com/bk/yx/29275320.html" target="_blank" class="green">传统网游小说：网游之最佳搭档</a></dd><dd><a href="http://chuangshi.qq.com/bk/yx/" target="_blank" class="gray2">[游戏]</a><a href="http://chuangshi.qq.com/bk/yx/25773103.html" target="_blank" class="green">获得了万物品鉴系统：万物品鉴系统</a></dd></dl></li>
                            <li  class="nobr nobottom"><h3><a class="gray" target="_blank" href="http://chuangshi.qq.com/bk/ke/">更多...</a><a target="_blank" href="http://chuangshi.qq.com/bk/ke/">科幻·悬疑</a></h3><div><a href="http://chuangshi.qq.com/bk/kh/25506266.html" target="_blank"><img src="/index/picture/f1a9d7e3b88b2758b1ac65615a746649.jpg" height="87" width="219"></a><span>灵凛冬降临：科武战纪</span></div><dl><dd><a href="http://chuangshi.qq.com/bk/kh/" target="_blank" class="gray2">[科幻]</a><a href="http://chuangshi.qq.com/bk/kh/27967815.html" target="_blank" class="green">一个属于强者的世界：我的随身工坊</a></dd><dd><a href="http://chuangshi.qq.com/bk/kh/" target="_blank" class="gray2">[科幻]</a><a href="http://chuangshi.qq.com/bk/kh/28240218.html" target="_blank" class="green">末世觉醒全都有：在末世我全都有</a></dd><dd><a href="http://chuangshi.qq.com/bk/kh/" target="_blank" class="gray2">[科幻]</a><a href="http://chuangshi.qq.com/bk/kh/28389161.html" target="_blank" class="green">道士行走诸天万界！：诸天最强道长</a></dd><dd><a href="http://chuangshi.qq.com/bk/ly/" target="_blank" class="gray2">[悬疑]</a><a href="http://chuangshi.qq.com/bk/ly/25912804.html" target="_blank" class="green">由作者真实故事改编：心理化学师</a></dd></dl></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="focus_right">
            <div class="popularity" style="height:571px">
                <h3 class="redico">销售金榜</h3>
                <!-- <div class="tab_subtab">
                <h3 class="week_h1 subtab_cur">周人气</h3>
                <h3 class="month_h1">月人气</h3>
                <h3 class="allin_h1">总人气</h3>
                </div> -->
                <div class="tab_subtabdiv_box">
                    <div class="week_list">
                        <ul class="storylist cf">
                            <li><a title='[玄幻]伏天氏' target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html'>伏天氏</a></li>
                            <li><a title='[玄幻]万道龙皇' target='_blank' href='http://chuangshi.qq.com/bk/xh/19454017.html'>万道龙皇</a></li>
                            <li><a title='[都市]都市极品医神' target='_blank' href='http://chuangshi.qq.com/bk/ds/23475205.html'>都市极品医神</a></li>
                            <li><a title='[玄幻]万古神帝' target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html'>万古神帝</a></li>
                            <li><a title='[玄幻]万古第一仙宗' target='_blank' href='http://chuangshi.qq.com/bk/xh/27566625.html'>万古第一仙宗</a></li>
                            <li><a title='[玄幻]我有一座天地钱庄' target='_blank' href='http://chuangshi.qq.com/bk/xh/27493878.html'>我有一座天地钱庄</a></li>
                            <li><a title='[都市]妖孽奶爸在都市' target='_blank' href='http://chuangshi.qq.com/bk/ds/21841831.html'>妖孽奶爸在都市</a></li>
                            <li><a title='[玄幻]凌天战尊' target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html'>凌天战尊</a></li>
                            <li><a title='[都市]极品全能高手' target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html'>极品全能高手</a></li>
                            <li><a title='[玄幻]垂钓之神' target='_blank' href='http://chuangshi.qq.com/bk/xh/25546807.html'>垂钓之神</a></li>
                            <li><a title='[轻小说]从斗罗开始打卡' target='_blank' href='http://chuangshi.qq.com/bk/2cy/26869634.html'>从斗罗开始打卡</a></li>
                            <li><a title='[都市]我有一个签到系统' target='_blank' href='http://chuangshi.qq.com/bk/ds/27501062.html'>我有一个签到系统</a></li>
                            <li><a title='[都市]我每天随机一个新系统' target='_blank' href='http://chuangshi.qq.com/bk/ds/27753270.html'>我每天随机一个新系统</a></li>
                            <li><a title='[都市]从千亿集团开始签到' target='_blank' href='http://chuangshi.qq.com/bk/ds/28089662.html'>从千亿集团开始签到</a></li>
                            <li><a title='[军事]从我是特种兵开始签到' target='_blank' href='http://chuangshi.qq.com/bk/js/27100983.html'>从我是特种兵开始签到</a></li>
                            <li><a title='[玄幻]全职法师' target='_blank' href='http://chuangshi.qq.com/bk/xh/614782.html'>全职法师</a></li>
                            <li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/jinbang.html'>更多...</a></li>
                        </ul>
                    </div>
                    <!--
                    <div class="month_list">
                        <ul class="storylist cf">
                            <li><b>1466</b><a title='[历史]唐残' target='_blank' href='http://chuangshi.qq.com/bk/ls/20307022.html'>唐残</a></li>
                            <li><b>1446</b><a title='[武侠]鸿渐于磐' target='_blank' href='http://chuangshi.qq.com/bk/wx/23240412.html'>鸿渐于磐</a></li>
                            <li><b>1151</b><a title='[玄幻]齐天大圣直播间' target='_blank' href='http://chuangshi.qq.com/bk/xh/29975442.html'>齐天大圣直播间</a></li>
                            <li><b>1083</b><a title='[玄幻]道德经成就至尊人生' target='_blank' href='http://chuangshi.qq.com/bk/xh/29968845.html'>道德经成就至尊人生</a></li>
                            <li><b>873</b><a title='[仙侠]鹿妖逐鹿' target='_blank' href='http://chuangshi.qq.com/bk/xx/26281320.html'>鹿妖逐鹿</a></li>
                            <li><b>701</b><a title='[玄幻]最强爆装系统' target='_blank' href='http://chuangshi.qq.com/bk/xh/27306177.html'>最强爆装系统</a></li>
                            <li><b>694</b><a title='[游戏]全世界都在演我怎么办' target='_blank' href='http://chuangshi.qq.com/bk/yx/28646362.html'>全世界都在演我怎么...</a></li>
                            <li><b>692</b><a title='[玄幻]凌天战尊' target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html'>凌天战尊</a></li>
                            <li><b>670</b><a title='[历史]马谡别传' target='_blank' href='http://chuangshi.qq.com/bk/ls/25476104.html'>马谡别传</a></li>
                            <li><b>632</b><a title='[悬疑]上下杂货铺' target='_blank' href='http://chuangshi.qq.com/bk/ly/25731839.html'>上下杂货铺</a></li>
                            <li><b>623</b><a title='[奇幻]上方九州' target='_blank' href='http://chuangshi.qq.com/bk/qh/26364468.html'>上方九州</a></li>
                            <li><b>595</b><a title='[军事]从我是特种兵开始阅读变强' target='_blank' href='http://chuangshi.qq.com/bk/js/29279452.html'>从我是特种兵开始阅...</a></li>
                            <li><b>594</b><a title='[都市]开局召唤黑影兵团' target='_blank' href='http://chuangshi.qq.com/bk/ds/29349502.html'>开局召唤黑影兵团</a></li>
                            <li><b>589</b><a title='[都市]都市超级医圣' target='_blank' href='http://chuangshi.qq.com/bk/ds/14174819.html'>都市超级医圣</a></li>
                            <li><b>585</b><a title='[武侠]恩仇红尘劫' target='_blank' href='http://chuangshi.qq.com/bk/wx/25013842.html'>恩仇红尘劫</a></li>
                            <li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/rq/all-month.html'>更多...</a><a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a></li>
                        </ul>
                    </div>
                    <div class="allin_list">
                        <ul class="storylist cf">
                            <li><b>2352502</b><a title='[都市]极品全能高手' target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html'>极品全能高手</a></li>
                            <li><b>2044190</b><a title='[仙侠]盖世仙尊' target='_blank' href='http://chuangshi.qq.com/bk/xx/432313.html'>盖世仙尊</a></li>
                            <li><b>1807604</b><a title='[玄幻]大道朝天' target='_blank' href='http://chuangshi.qq.com/bk/xh/20496369.html'>大道朝天</a></li>
                            <li><b>1693662</b><a title='[玄幻]万古神帝' target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html'>万古神帝</a></li>
                            <li><b>1273217</b><a title='[玄幻]凌天战尊' target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html'>凌天战尊</a></li>
                            <li><b>929521</b><a title='[历史]唐残' target='_blank' href='http://chuangshi.qq.com/bk/ls/20307022.html'>唐残</a></li>
                            <li><b>920000</b><a title='[仙侠]终极武力' target='_blank' href='http://chuangshi.qq.com/bk/xx/304875.html'>终极武力</a></li>
                            <li><b>828860</b><a title='[玄幻]伏天氏' target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html'>伏天氏</a></li>
                            <li><b>811871</b><a title='[玄幻]武神血脉' target='_blank' href='http://chuangshi.qq.com/bk/xh/407602.html'>武神血脉</a></li>
                            <li><b>798373</b><a title='[武侠]鸿渐于磐' target='_blank' href='http://chuangshi.qq.com/bk/wx/23240412.html'>鸿渐于磐</a></li>
                            <li><b>757237</b><a title='[历史]寒门状元' target='_blank' href='http://chuangshi.qq.com/bk/ls/753153.html'>寒门状元</a></li>
                            <li><b>733268</b><a title='[都市]都市超级医圣' target='_blank' href='http://chuangshi.qq.com/bk/ds/14174819.html'>都市超级医圣</a></li>
                            <li><b>677477</b><a title='[都市]三界红包群' target='_blank' href='http://chuangshi.qq.com/bk/ds/13665778.html'>三界红包群</a></li>
                            <li><b>674491</b><a title='[历史]1627崛起南海' target='_blank' href='http://chuangshi.qq.com/bk/ls/391539.html'>1627崛起南海</a></li>
                            <li><b>641532</b><a title='[玄幻]万道剑尊' target='_blank' href='http://chuangshi.qq.com/bk/xh/1001294720.html'>万道剑尊</a></li>
                            <li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/rq/all-zong.html'>更多...</a><a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a></li>
                        </ul>
                     </div> -->
                </div>
            </div>
            <div class="rec_rank" style="height:570px">
                <h3 class="redico">销售银榜</h3>
                <!-- <div class="tab_subtab"> <h3 class="week_h1 subtab_cur">周推荐</h3> <h3 class="month_h1">月推荐</h3><h3 class="allin_h1">总推荐</h3></div> -->
                <div class="tab_subtabdiv_box">
                    <div class="week_list">
                        <ul class="storylist cf"><
                            li><a title='[玄幻]万古第一仙宗' target='_blank' href='http://chuangshi.qq.com/bk/xh/27566625.html'>万古第一仙宗</a></li>
                            <li><a title='[都市]我每天随机一个新系统' target='_blank' href='http://chuangshi.qq.com/bk/ds/27753270.html'>我每天随机一个新系统</a></li>
                            <li><a title='[都市]从千亿集团开始签到' target='_blank' href='http://chuangshi.qq.com/bk/ds/28089662.html'>从千亿集团开始签到</a></li>
                            <li><a title='[都市]神豪从签到打卡开始' target='_blank' href='http://chuangshi.qq.com/bk/ds/28377656.html'>神豪从签到打卡开始</a></li>
                            <li><a title='[游戏]全世界都在演我怎么办' target='_blank' href='http://chuangshi.qq.com/bk/yx/28646362.html'>全世界都在演我怎么办</a></li>
                            <li><a title='[都市]开局签到一个首富姐姐' target='_blank' href='http://chuangshi.qq.com/bk/ds/28407408.html'>开局签到一个首富姐姐</a></li>
                            <li><a title='[轻小说]爱情公寓之学霸女友诸葛大力' target='_blank' href='http://chuangshi.qq.com/bk/2cy/27914901.html'>爱情公寓之学霸女友诸葛大力</a></li>
                            <li><a title='[都市]我震惊了全世界' target='_blank' href='http://chuangshi.qq.com/bk/ds/28171556.html'>我震惊了全世界</a></li>
                            <li><a title='[玄幻]召唤万界当魔皇' target='_blank' href='http://chuangshi.qq.com/bk/xh/27460343.html'>召唤万界当魔皇</a></li>
                            <li><a title='[玄幻]召唤万界之绝世帝皇' target='_blank' href='http://chuangshi.qq.com/bk/xh/27573047.html'>召唤万界之绝世帝皇</a></li>
                            <li><a title='[轻小说]从大主宰开始打卡' target='_blank' href='http://chuangshi.qq.com/bk/2cy/27901524.html'>从大主宰开始打卡</a></li>
                            <li><a title='[科幻]我从末世开始无敌' target='_blank' href='http://chuangshi.qq.com/bk/kh/27259555.html'>我从末世开始无敌</a></li>
                            <li><a title='[玄幻]诸天最强万道钓皇' target='_blank' href='http://chuangshi.qq.com/bk/xh/27436903.html'>诸天最强万道钓皇</a></li>
                            <li><a title='[军事]从特种兵开始的万界穿越' target='_blank' href='http://chuangshi.qq.com/bk/js/27404235.html'>从特种兵开始的万界穿越</a></li>
                            <li><a title='[玄幻]无敌从挂机开始' target='_blank' href='http://chuangshi.qq.com/bk/xh/27865608.html'>无敌从挂机开始</a></li>
                            <li><a title='[历史]大秦之铁血帝国' target='_blank' href='http://chuangshi.qq.com/bk/ls/28261040.html'>大秦之铁血帝国</a></li>
                            <li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/yinbang.html'>更多...</a></li>
                        </ul>
                    </div>
                    <!--
                    <div class="month_list">
                     <ul class="storylist cf">
                     <li><b>29750</b><a title='[玄幻]伏天氏' target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html'>伏天氏</a></li>
                     <li><b>17717</b><a title='[玄幻]万古神帝' target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html'>万古神帝</a></li>
                     <li><b>10101</b><a title='[都市]都市极品医神' target='_blank' href='http://chuangshi.qq.com/bk/ds/23475205.html'>都市极品医神</a></li>
                     <li><b>9008</b><a title='[玄幻]凌天战尊' target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html'>凌天战尊</a></li>
                     <li><b>8994</b><a title='[都市]极品全能高手' target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html'>极品全能高手</a></li>
                     <li><b>8227</b><a title='[都市]开局召唤黑影兵团' target='_blank' href='http://chuangshi.qq.com/bk/ds/29349502.html'>开局召唤黑影兵团</a></li>
                     <li><b>6603</b><a title='[都市]我有一个签到系统' target='_blank' href='http://chuangshi.qq.com/bk/ds/27501062.html'>我有一个签到系统</a></li>
                     <li><b>6349</b><a title='[玄幻]垂钓之神' target='_blank' href='http://chuangshi.qq.com/bk/xh/25546807.html'>垂钓之神</a></li>
                     <li><b>5939</b><a title='[轻小说]从斗罗开始打卡' target='_blank' href='http://chuangshi.qq.com/bk/2cy/26869634.html'>从斗罗开始打卡</a></li>
                     <li><b>5778</b><a title='[轻小说]奥特曼之迪迦临诸天' target='_blank' href='http://chuangshi.qq.com/bk/2cy/27851785.html'>奥特曼之迪迦临诸天</a></li>
                     <li><b>5568</b><a title='[玄幻]万古第一仙宗' target='_blank' href='http://chuangshi.qq.com/bk/xh/27566625.html'>万古第一仙宗</a></li>
                     <li><b>5018</b><a title='[玄幻]我有一座天地钱庄' target='_blank' href='http://chuangshi.qq.com/bk/xh/27493878.html'>我有一座天地钱庄</a></li>
                     <li><b>4938</b><a title='[都市]都市超级医圣' target='_blank' href='http://chuangshi.qq.com/bk/ds/14174819.html'>都市超级医圣</a></li>
                     <li><b>4846</b><a title='[都市]我每天随机一个新系统' target='_blank' href='http://chuangshi.qq.com/bk/ds/27753270.html'>我每天随机一个新系...</a></li>
                     <li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/tj/all-month.html'>更多...</a><a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a></li>
                     </ul>
                     </div>
                     <div class="allin_list">
                     <ul class="storylist cf">
                     <li><b>16665079</b><a title='[玄幻]伏天氏' target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html'>伏天氏</a></li>
                     <li><b>12407574</b><a title='[都市]极品全能高手' target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html'>极品全能高手</a></li>
                     <li><b>8446736</b><a title='[玄幻]全职法师' target='_blank' href='http://chuangshi.qq.com/bk/xh/614782.html'>全职法师</a></li>
                     <li><b>8139475</b><a title='[玄幻]万古神帝' target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html'>万古神帝</a></li>
                     <li><b>4419683</b><a title='[玄幻]大道朝天' target='_blank' href='http://chuangshi.qq.com/bk/xh/20496369.html'>大道朝天</a></li>
                     <li><b>4102005</b><a title='[玄幻]凌天战尊' target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html'>凌天战尊</a></li>
                     <li><b>3950782</b><a title='[都市]校花之贴身高手' target='_blank' href='http://book.qq.com/bk/ns/161342.html'>校花之贴身高手</a></li>
                     <li><b>3683549</b><a title='[玄幻]择天记' target='_blank' href='http://book.qq.com/bk/ns/357735.html'>择天记</a></li>
                     <li><b>3515953</b><a title='[悬疑]都市灵剑仙' target='_blank' href='http://chuangshi.qq.com/bk/ly/21514146.html'>都市灵剑仙</a></li>
                     <li><b>3208573</b><a title='[玄幻]太古神王' target='_blank' href='http://book.qq.com/bk/ns/561940.html'>太古神王</a></li>
                     <li><b>2744111</b><a title='[都市]三界红包群' target='_blank' href='http://chuangshi.qq.com/bk/ds/13665778.html'>三界红包群</a></li>
                     <li><b>2697089</b><a title='[都市]我的绝色美女房客' target='_blank' href='http://chuangshi.qq.com/bk/ds/13354339.html'>我的绝色美女房客</a></li>
                     <li><b>2627309</b><a title='[玄幻]天帝传' target='_blank' href='http://chuangshi.qq.com/bk/xh/22170902.html'>天帝传</a></li>
                     <li><b>2473126</b><a title='[玄幻]不灭龙帝' target='_blank' href='http://chuangshi.qq.com/bk/xh/13121988.html'>不灭龙帝</a></li>
                     <li class='last'><a  rel='nofollow' class='red2' target='_blank'  href='/bang/tj/all-zong.html'>更多...</a><a style='display:none' target='_blank' href='/about/questions_discuss.html'>榜单说明</a></li>
                     </ul>
                     </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="banner_index">
        <a href="http://chuangshi.qq.com/news/91026351.html" target="_blank" class="">
            <img src="/index/picture/f862efed180513858a1785515d0386b6.png" class="" alt="" title="" height="90" width="1000">
        </a>
    </div>
    <div class="friend_link">
            <h3>
                <a class="red2" target="_blank" href="http://chuangshi.qq.com/about/friendship.html">更多</a>
                <a class="gray3">阅文集团旗下网站</a>
            </h3>
            <div class="friend_linkbox">
                <a href="https://www.qidian.com/" target="_blank">起点中文网</a>&nbsp;
                <a href="https://www.qdmm.com/" target="_blank">起点女生网</a>&nbsp;
                <a href="http://chuangshi.qq.com/" target="_blank">创世中文网</a>&nbsp;
                <a href="http://yunqi.qq.com/" target="_blank">云起书院</a>&nbsp;
                <a href="https://www.hongxiu.com/" target="_blank">红袖添香</a>&nbsp;
                <a href="https://www.readnovel.com/" target="_blank">小说阅读网</a>&nbsp;
                <a href="https://www.xs8.cn/" target="_blank">言情小说吧</a>&nbsp;
                <a href="http://www.xxsy.net/" target="_blank">潇湘书院</a>&nbsp;
                <a href="http://www.tingbook.com/" target="_blank">天方听书网</a>&nbsp;
                <a href="http://www.lrts.me/" target="_blank">懒人听书</a>&nbsp;
                <a href="http://yuedu.yuewen.com/" target="_blank">阅文悦读</a>&nbsp;
                <a href="https://www.yuewen.com/app.html#appqq" target="_blank">QQ阅读</a>&nbsp;
                <a href="https://www.yuewen.com/app.html#appqd" target="_blank">起点读书</a>&nbsp;
                <a href="https://www.yuewen.com/app.html#appzj" target="_blank">作家助手</a>&nbsp;
                <a href="https://www.webnovel.com/" target="_blank">起点国际版</a>&nbsp;
            </div>
    </div>
    <div class="codeWrap fixedLeft" id="fixedLeft" style="display:none;">
        <div class="code_hd"><a class="code_close" id="LeftColse" href="javascript:;" title="关闭"></a></div>
        <div class="code_bd">
            <span class="code_pic"><img src="/index/picture/code02.png" width="80" height="80"  alt=""/></span>
            <p class="code_txt">关注QQ阅读<br>微信公众号</p>
        </div>
    </div>
        <div class="codeWrap fixedRight" id="fixedRight">
            <div class="code_hd"><a class="code_close" id="fixedRight_closeBtn" href="javascript:;" title="关闭"></a></div>
            <div class="code_bd"><span class="code_pic"><img src="/index/picture/code03.png" width="80" height="80"  alt=""/></span><p class="code_txt">QQ阅读<br>客户端下载</p></div>
        </div>
        <script type="text/javascript" src="/index/js/base.js"></script>
        <script type="text/javascript" src="/index/js/index.js"></script>
        <div class="footer">
            <div class="foot_nav">
                <a href="/about/about_us.html" target="_blank" rel="external nofollow">关于我们</a>
                <span>|</span>
                <a href="http://account.book.qq.com/usermember/author.html" target="_blank" rel="external nofollow">作者投稿</a><span>|</span>
                <a href="https://join.yuewen.com/" target="_blank" rel="external nofollow">诚聘英才</a><span>|</span>
                <a href="https://passport.yuewen.com/pact.html?mobile=0" target="_blank" rel="external nofollow">服务协议</a><span>|</span>
                <a href="https://www.yuewen.com/service.html" target="_blank" rel="external">客服中心</a><span>|</span>
                <a href="/about/questions_newuser.html" target="_blank" rel="external nofollow">用户指南</a><span>|</span>
                <a href="/about/contact_us.html" target="_blank" rel="external nofollow">联系我们</a>
            </div>
            <div class="foot_copy_right">
                <p>
                    Copyright (C) 2020 chuangshi.qq.com All Rights Reserved 上海阅文信息技术有限公司 版权所有
                    <a class="gray" href="http://yun.qq.com" target="_blank" rel="external nofollow">本网站由腾讯云提供服务器和带宽支持</a>
                </p>
                <p>
                    粤府新函[2001]87号 粤网文[2011]0483-070号 网络视听许可证1904073号 网站备案/许可证号：
                    <a href="http://beian.miit.gov.cn/publish/query/indexFirst.action" rel="noreferrer" target="_blank">粤B2-20090059 B2-20090028</a>
                </p>
            </div>
            <div id="icp">
                <a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img1.png"></a>
                <a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img2.png"></a>
                <a href="http://beian.miit.gov.cn/state/outPortal/loginPortal.action" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img3.png"></a>
                <a href="http://www.12377.cn/" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img4.png"></a>
                <a href="http://www.wenming.cn/" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img5.png"></a>
                <a href="http://www.shjbzx.cn/" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img6.png" ></a>
            </div>
        </div>
    </div>
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
            var search_url = "/search/searchindex/type/p1/wd/p2.html";
            //搜索框组件
            CS.searchInput.init(search_url, 'index_seach_hover');
        });

        var noForLogin = 1; //不需要弹求登录浮层

        $(function () {
            var getWeekRecommendAjaxUrl = "/index/getWeekRecommend.html",
                getGirlRecommendAjaxUrl = "/index/getGirlRecommend.html",
                getBoutiqueAjaxUrl = "/index/getJPRecommend.html",
                getUserBoxAjaxUrl = "/index/getBoxLogined.html",
                getBookInfoAjaxUrl = "/index/getBook.html";

            $('img.lazy').lazyload({'skip_invisible' : false});

            //首页
            CS.page.index.main.init(getWeekRecommendAjaxUrl, getGirlRecommendAjaxUrl,
                getBoutiqueAjaxUrl, getUserBoxAjaxUrl, getBookInfoAjaxUrl);

            //qq阅读广告条
            CS.qqReadAd.init();
        });

		$(function(){
			var commonResourceUrl = "http://sta1.chuangshi.qq.com/common";
			var refreshKeyUrl = "";//"http://book.qq.com/ywlogin/refreshkey.html";

			var requestStatLogUrl = "http://account.book.qq.com/statlog/index.html",
				requestStatLogData = {
					'site' : "cs",
					'url' : "ACs",
					'bid' : '',
					'uuid' : '0',
					'encrypt' : 1
				};

			CS.page.statistics.init(commonResourceUrl, refreshKeyUrl, requestStatLogUrl, requestStatLogData);
		});
	</script>
</body>
</html>
