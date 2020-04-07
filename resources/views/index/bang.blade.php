<!DOCTYPE html>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- 360安全游览器使用webkit极速核 -->
    <meta name="renderer" content="webkit" /><!-- IE使用它支持的最高模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="wb:webmaster" content="bde65bab61e33f62" />
    <meta name="description" content="创世中文网小说排行榜为您提供最新、最全面的小说排行榜完本，找最新小说排行榜，就来创世中文网" />
    <meta name="keywords" content="小说排行榜,小说排行榜完结版" />
    <meta property="qc:admins" content="151626767763051673016375" />
    <title>小说排行榜_小说排行榜完本_前十名_创世中文小说排行榜</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://img1.chuangshi.qq.com/chuangshi/p1/ico/c_mini_logo.ico" />
    <link rel="Bookmark" type="image/x-icon" href="http://img1.chuangshi.qq.com/chuangshi/p1/ico/c_mini_logo.ico" />
    <link rel="stylesheet" type="text/css" href="/index/css/base.css" /><!-- prevent dom xss -->
    <script type="text/javascript" src="/index/js/aq_common.js"></script>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="/index/css/ranklist.css" /><!-- 3G站提示 -->
    <div id="top3GBanner" class="top3G" style="display:none;">
        <div id="top3g_inner">
            <a id="click3g" href="http://3g.chuangshi.qq.com"></a>
            <a id="close_3g" href="javascript:"></a>
            <img id="top3g_img" width="1000" height="300" src="">
        </div>
    </div><!-- 顶部导航 -->
    <div id="topNav" class="top_nav" style="background-color:#575757;"></div><!-- 顶部导航模板 -->
    <textarea id="topNavBarTpl" style="display:none;"><div class="top_nav_center cf"><div class="toolbar"><a attr="inner:toggleSiteListBtn;" class="qqSite" href="http://book.qq.com" target="_blank">QQ阅读</a><span class="navline">|</span><a attr="click:addFavorite;" class="favorite" href="javascript:">一键收藏</a><div attr="inner:siteListDropdown;" class="navDownLoad"><a class="downStar" href="http://www.qq.com/" onclick="pgvSendClick({hottag:'ISD.SHOW.INDEX.LINK01'});" target="_blank">腾讯网首页</a><a class="downStar" href="https://yuedu.reader.qq.com/common/common/down/dist/index.html?actid=11822" target="_blank">客户端下载</a><!-- <a class="downAn" href="http://book.qq.com/act/reader/index.html" target="_blank">安卓端下载</a> --></div></div><div class="loginbar"><%if isLogin%><span class="login_after"><a class="login user" href="http://account.book.qq.com">                        欢迎您，<i><%=userInfo.Nickname ? userInfo.Nickname : ''%></i></a><a class="exit" attr="click:ywlogout;" href="javascript:;">退出</a><span class="navline">|</span></span><a attr="inner:toggleBookshelfBtn;" class="myreader" href="http://account.book.qq.com/userfavorite/index.html">我的书架</a><%else%><span class="login_before"><a attr="click:openLoginPopup;" class="login current btnpoplogin" href="javascript:;">登录/注册</a><!-- <a class="reg" target="_blank" href="http://zc.qq.com/chs/index.html?from=pt">注册</a> --><span class="navline">|</span></span><a attr="inner:toggleRecentReadBtn;" class="myreader" href="javascript:">最近阅读</a><%/if%><a attr="inner:toggleUserCenterBtn;" class="user_center" href="http://account.book.qq.com">个人中心</a><a class="pay " href="http://account.book.qq.com/public/recharge.html" target="_blank">充值</a><span class="navline">|</span><a attr="inner:toggleChannelBtn;" class="more_nav" href="javascript:">导航</a><!-- 书架下拉菜单 --><div attr="inner:bookshelfDropdown;" class="bookrack"><%if isLogin%><p><span class="ccc">藏书：</span><span><%=userInfo.collectBookNum ? userInfo.collectBookNum : 0%></span>本
                    </p><div class="nav_hover_list cf"><a href="http://account.book.qq.com/userfavorite/index.html?bookshelf_show=2">最近阅读</a><span class="booktags"><%if userInfo.bookshelfList && userInfo.bookshelfList.length%><%each userInfo.bookshelfList as bookshelf i%><a href="http://account.book.qq.com/userfavorite/index.html?Favoriteid=<%=bookshelf.groupId%>"><%=bookshelf.groupName%></a><%/each%><%/if%></span></div><%else%><div class="nav_hover_list cf"><span class="booktags"><%if userInfo.recentReadList && userInfo.recentReadList.length%><%each userInfo.recentReadList as book i%><a href="<%=book.bookUrl%>"><%=book.bookName%></a><%/each%><%else%>                                    没有阅读作品
                                <%/if%></span></div><%/if%></div><!-- 用户中心下拉菜单  --><div attr="inner:userCenterDropdown;" class="user_menu"><div class="nav_hover_list cf"><a href="http://account.book.qq.com/userfavorite/index.html">我的书架</a><a href="http://account.book.qq.com/usercenter/index.html">账户设置</a><a class="a_nobg" href="http://account.book.qq.com/usermoney/index.html">账务中心</a><a class="a_nobg" href="https://write.qq.com/?siteid=3">作家专区</a></div></div><!-- 导航下拉菜单 --><div attr="inner:channelDropdown;" class="more_box"><div class="nav_hover_list cf"><a href="http://chuangshi.qq.com/bk/huan/" title="玄幻·奇幻">玄幻·奇幻</a><a href="http://chuangshi.qq.com/bk/xia/" title="武侠·仙侠">武侠·仙侠</a><a href="http://chuangshi.qq.com/bk/chun/" title="都市·现实">都市·现实</a><a href="http://chuangshi.qq.com/bk/shi/" title="历史·军事">历史·军事</a><a href="http://chuangshi.qq.com/bk/you/" title="游戏·体育">游戏·体育</a><a href="http://chuangshi.qq.com/bk/ke/" title="科技·悬疑">科技·悬疑</a><a href="http://chuangshi.qq.com/bk/ecy/" style="width:37px;" title="轻小说">轻小说</a><a style="width:1px; margin-left:-6px;">·</a><a href="http://chuangshi.qq.com/bk/duan/" style="width:37px;" title="短篇">短篇</a><a href="http://chuangshi.qq.com" title="女生·言情">女生·言情</a><a href="http://chuangshi.qq.com/bk/" title="书库" style="width:37px;">书库</a><a style="width:1px; margin-left:-6px;">·</a><a href="http://book.qq.com/cdkey" title="兑奖" style="width:37px;" target="_blank">兑奖</a></div></div><%if isLogin%><div id="pointy_msg"></div><div id="topnav_msg"><a class="red" href="http://account.book.qq.com/usermessage/index.html">有新短消息</a></div><%/if%></div></div></textarea>
    <div class="wrap">
        <div class="mainnav">
            <a href="http://chuangshi.qq.com" title="首页">首页</a>&nbsp;<a class="red" href="http://chuangshi.qq.com/bk/" title="书库">书库</a>&nbsp;<a rel="nofollow" href="http://chuangshi.qq.com/search/" title="搜书">搜书</a>&nbsp;<a href="http://chuangshi.qq.com/bang/" title="排行榜">排行榜</a>&nbsp;<a class="red dotted" href="http://chuangshi.qq.com/bk/huan/" title="玄幻">玄幻</a>·<a class="red" href="http://chuangshi.qq.com/bk/huan/" title="奇幻">奇幻</a>&nbsp;<a href="http://chuangshi.qq.com/bk/xia/" title="武侠">武侠</a>·<a href="http://chuangshi.qq.com/bk/xia/" title="仙侠">仙侠</a>&nbsp;<a href="http://chuangshi.qq.com/bk/chun/" title="都市">都市</a>·<a href="http://chuangshi.qq.com/bk/chun/" title="现实">现实</a>&nbsp;<a href="http://chuangshi.qq.com/bk/shi/" title="历史">历史</a>·<a href="http://chuangshi.qq.com/bk/shi/" title="军事">军事</a>&nbsp;<a class="dotted" href="http://chuangshi.qq.com/bk/you/" title="游戏">游戏</a>·<a href="http://chuangshi.qq.com/bk/you/" title="体育">体育</a>&nbsp;<a href="http://chuangshi.qq.com/bk/ke/" title="科幻">科幻</a>·<a href="http://chuangshi.qq.com/bk/ke/" title="悬疑">悬疑</a>&nbsp;<a href="http://chuangshi.qq.com/bk/ecy/" title="轻小说">轻小说</a>·<a href="http://chuangshi.qq.com/bk/duan/" title="短篇">短篇</a>&nbsp;<a class="red" href="http://yunqi.qq.com" title="女生">女生</a>·<a class="red" href="http://yunqi.qq.com" title="言情">言情</a>&nbsp;<a rel="nofollow" class="red dotted" target="_blank" href="http://acts.book.qq.com/cssp/theme1.html" title="作家福利">作家福利</a>&nbsp;<a rel="nofollow" href="https://write.qq.com/?siteid=3" title="作家专区">作家专区</a>&nbsp;<a rel="nofollow" href="http://chuangshi.qq.com/about/questions_newuser.html" title="帮助">帮助</a>
        </div>
        <div class="topbanner">
            <a href="http://www.oneplusbbs.com/thread-3905634-1-1.html" target="_blank" class="">
                <img src="/index/picture/c908a6d175764ea39d70a6d05e4f0726.gif" class="" alt="" title="" height="90" width="1000">
            </a>
        </div>
        <!--排行榜-->
        <div class="rank_mainbox">
            <div class="topbox">
                <div class="rank_search">
                    <i id="searchType" type="all">全部</i>
                    <input id="searchInput" name="" type="text" value="复兴之路" autocomplete="off" def="复兴之路" class="rank_s gray">
                    <input id="searchBtn" class="rank_searchbtn" value="搜 索" type="button" name="">
                    <!--搜索下拉小菜单-->
                    <div id="searchTypeDropdown" class="index_sub_serach">
                        <a href="javascript:" id="s1" type="all">全部</a>
                        <a href="javascript:" id="s2" type="chuangshi">创世</a>
                        <a href="javascript:" id="s3" type="yunqi">云起</a>
                        <a href="javascript:" id="s4" type="dushu">读书</a>
                    </div>
                </div>
                <h1>排行榜</h1>
                <span>有榜单，找书更简单</span>
            </div>
            <div class="chartbox">
                <div class="left_index">
                    <div class="tophead">
                        <div class="t_point">创世榜单大全</div>
                    </div>
                    <div class="oclicktop">
                        <span>作品榜单</span>
                        <a style="display:none;" class="open" href="javascript:"></a>
                        <a class="aclose" href="javascript:"></a>
                    </div>
                    <ul>
                        <li>
                            <a class=' red' href="/bang/">全部</a>
                        </li>
                        <li>
                            <a class='' href="/bang/mo/">原创文学风云榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/jinbang/">销售金榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/yinbang/">销售银榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/zs/">总字数榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/cs/">创世销售榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/pt/">全平台销售榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/fav/">总收藏榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/gz/">公众新书人气榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/qy/">签约新书人气榜</a>
                        </li>
                    </ul>
                    <div class="oclicktop">
                        <span>用户排行</span>
                        <a style="display:none;" class="open" href="javascript:"></a>
                        <a class="aclose" href="javascript:"></a>
                    </div>
                    <ul>
                        <li>
                            <a class='' href="/bang/fs/">用户总粉丝值排行</a>
                        </li>
                    </ul>
                    <div class="oclicktop">
                        <span>女生频道排行</span>
                        <a style="display:none;" class="open" href="javascript:"></a>
                        <a class="aclose" href="javascript:"></a>
                    </div>
                    <ul>
                        <li>
                            <a class='' href="/bang/nv/">女生人气榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/nt/">女生推荐榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/nzs/">女生总字数榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/ngz/">女生公众新书人气榜</a>
                        </li>
                        <li>
                            <a class='' href="/bang/nqy/">女生签约新书人气榜</a>
                        </li>
                    </ul>
                </div>
                <div class="right_index">
                    <!--月票-->
                    <div class="chart_box">
                        <div class="tophead">
                            <div class="t_point">原创文学风云榜</div>
                        </div>
                        <ul id="Week05">
                            <li class="underline">VIP作品月票本月月票数排行</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/20868264.html' class='grey'>诡秘之主</a>
                                </b>
                                <b class='right2'>14104</b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/kh/25581825.html' class='grey'>圣光</a>
                                </b>
                                <b class='right2'>8142</b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xx/26572786.html' class='grey'>我师兄实在太稳健了</a>
                                </b>
                                <b class='right2'>8103</b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/2cy/27176480.html' class='grey'>平平无奇大师兄</a>
                                </b>
                                <b class='right2'>8071</b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/yx/26150754.html' class='grey'>亏成首富从游戏开始</a>
                                </b>
                                <b class='right2'>7395</b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/28027842.html' class='grey'>万族之劫</a>
                                </b>
                                <b class='right2'>5798</b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/2cy/26418552.html' class='grey'>这号有毒</a>
                                </b>
                                <b class='right2'>5448</b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ls/25609210.html' class='grey'>明天下</a>
                                </b>
                                <b class='right2'>5140</b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ls/20056141.html' class='grey'>东晋北府一丘八</a>
                                </b>
                                <b class='right2'>5049</b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/23562540.html' class='grey'>第一序列</a>
                                </b>
                                <b class='right2'>4935</b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:53</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/mo/" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--人气榜单-->
                    <div class="chart_box">
                        <div class="tophead">
                            <div class="t_point">销售金榜</div><!-- <div id="popularListTabBox" class="tabswish"><div class="tabs choice"><a href="javascript:;">周</a></div><div class="tabs"><a href="javascript:;">月</a></div><div class="tabs"><a href="javascript:;">总</a></div></div> -->
                        </div>
                        <ul id="popularListByWeek">
                            <li class="underline">销售金榜</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>伏天氏</a>
                                </b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>万道龙皇</a>
                                </b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>都市极品医神</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>万古神帝</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>万古第一仙宗</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>我有一座天地钱庄</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>妖孽奶爸在都市</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>凌天战尊</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>极品全能高手</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>垂钓之神</a>
                                </b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:54</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/jinbang.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul><!-- <ul id="popularListByMonth" style="display:none;"><li class="underline">本月人气作品排行</li><li> <b class='list01'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/ls/20307022.html'  class='grey'>唐残</a></b><b class='right2'>1633</b> </li><li> <b class='list02'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/wx/23240412.html'  class='grey'>鸿渐于磐</a></b><b class='right2'>1630</b> </li><li> <b class='list03'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/29968845.html'  class='grey'>道德经成就至尊人生</a></b><b class='right2'>1230</b> </li><li><b class='list'>4</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/29975442.html'  class='grey'>齐天大圣直播间</a></b><b class='right2'>1157</b> </li><li><b class='list'>5</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xx/26281320.html'  class='grey'>鹿妖逐鹿</a></b><b class='right2'>894</b> </li><li><b class='list'>6</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html'  class='grey'>凌天战尊</a></b><b class='right2'>751</b> </li><li><b class='list'>7</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/yx/28646362.html'  class='grey'>全世界都在演我怎么办</a></b><b class='right2'>739</b> </li><li><b class='list'>8</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html'  class='grey'>万古神帝</a></b><b class='right2'>737</b> </li><li><b class='list'>9</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/ds/29349502.html'  class='grey'>开局召唤黑影兵团</a></b><b class='right2'>710</b> </li><li><b class='list'>10</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/27306177.html'  class='grey'>最强爆装系统</a></b><b class='right2'>708</b> </li><li class="lastline"><b class="name">刷新时间：2020-04-02 18:26:53</b><b class="right2"><a  target="_blank" href="/bang/rq/all-month.html" class="red2">更多</a></b></li></ul><ul id="popularListByAll" style="display:none;"><li class="underline">创世人气作品总排行</li><li> <b class='list01'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html'  class='grey'>极品全能高手</a></b><b class='right2'>2352502</b> </li><li> <b class='list02'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xx/432313.html'  class='grey'>盖世仙尊</a></b><b class='right2'>2044195</b> </li><li> <b class='list03'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/20496369.html'  class='grey'>大道朝天</a></b><b class='right2'>1807604</b> </li><li><b class='list'>4</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html'  class='grey'>万古神帝</a></b><b class='right2'>1693816</b> </li><li><b class='list'>5</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html'  class='grey'>凌天战尊</a></b><b class='right2'>1273276</b> </li><li><b class='list'>6</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/ls/20307022.html'  class='grey'>唐残</a></b><b class='right2'>929688</b> </li><li><b class='list'>7</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xx/304875.html'  class='grey'>终极武力</a></b><b class='right2'>920001</b> </li><li><b class='list'>8</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html'  class='grey'>伏天氏</a></b><b class='right2'>828860</b> </li><li><b class='list'>9</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/407602.html'  class='grey'>武神血脉</a></b><b class='right2'>811876</b> </li><li><b class='list'>10</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/wx/23240412.html'  class='grey'>鸿渐于磐</a></b><b class='right2'>798557</b> </li><li class="lastline"><b class="name">刷新时间：2020-04-02 18:26:53</b><b class="right2"><a  target="_blank" href="/bang/rq/all-zong.html" class="red2">更多</a></b></li></ul> -->
                    </div>
                    <!--推荐榜单-->
                    <div class="chart_box chart_box_right">
                        <div class="tophead">
                            <div class="t_point">销售银榜</div><!-- <div id="recommendListTabBox" class="tabswish"><div class="tabs choice"><a href="javascript:;">周</a></div><div class="tabs"><a href="javascript:;">月</a></div><div class="tabs"><a href="javascript:;">总</a></div></div> -->
                        </div>
                        <ul id="recommendListByWeek">
                            <li class="underline">销售银榜</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>万古第一仙宗</a>
                                </b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>我每天随机一个新系统</a>
                                </b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>从千亿集团开始签到</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>神豪从签到打卡开始</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>全世界都在演我怎么办</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>开局签到一个首富姐姐</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>爱情公寓之学霸女友诸葛大...</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>我震惊了全世界</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>召唤万界当魔皇</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='' class='grey'>召唤万界之绝世帝皇</a>
                                </b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:54</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/yinbang.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul><!-- <ul id="recommendListByMonth" style="display:none;"><li class="underline">本月推荐票排行</li><li> <b class='list01'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html'  class='grey'>伏天氏</a></b><b class='right2'>31083</b> </li><li> <b class='list02'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html'  class='grey'>万古神帝</a></b><b class='right2'>18467</b> </li><li> <b class='list03'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/ds/23475205.html'  class='grey'>都市极品医神</a></b><b class='right2'>10545</b> </li><li><b class='list'>4</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html'  class='grey'>极品全能高手</a></b><b class='right2'>9363</b> </li><li><b class='list'>5</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html'  class='grey'>凌天战尊</a></b><b class='right2'>9286</b> </li><li><b class='list'>6</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/ds/29349502.html'  class='grey'>开局召唤黑影兵团</a></b><b class='right2'>8630</b> </li><li><b class='list'>7</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/2cy/27851785.html'  class='grey'>奥特曼之迪迦临诸天</a></b><b class='right2'>7615</b> </li><li><b class='list'>8</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/25546807.html'  class='grey'>垂钓之神</a></b><b class='right2'>6995</b> </li><li><b class='list'>9</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/ds/27501062.html'  class='grey'>我有一个签到系统</a></b><b class='right2'>6832</b> </li><li><b class='list'>10</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/2cy/26869634.html'  class='grey'>从斗罗开始打卡</a></b><b class='right2'>6194</b> </li><li class="lastline"><b class="name">刷新时间：2020-04-02 18:26:53</b><b class="right2"><a  target="_blank" href="/bang/tj/all-month.html" class="red2">更多</a></b></li></ul><ul id="recommendListByAll" style="display:none;"><li class="underline">作品推荐票总排行</li><li> <b class='list01'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html'  class='grey'>伏天氏</a></b><b class='right2'>16666416</b> </li><li> <b class='list02'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html'  class='grey'>极品全能高手</a></b><b class='right2'>12407941</b> </li><li> <b class='list03'></b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/614782.html'  class='grey'>全职法师</a></b><b class='right2'>8446922</b> </li><li><b class='list'>4</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html'  class='grey'>万古神帝</a></b><b class='right2'>8140225</b> </li><li><b class='list'>5</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/20496369.html'  class='grey'>大道朝天</a></b><b class='right2'>4419896</b> </li><li><b class='list'>6</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html'  class='grey'>凌天战尊</a></b><b class='right2'>4102289</b> </li><li><b class='list'>7</b><b class='name'><a  target='_blank' href='http://book.qq.com/bk/ns/161342.html'  class='grey'>校花之贴身高手</a></b><b class='right2'>3950822</b> </li><li><b class='list'>8</b><b class='name'><a  target='_blank' href='http://book.qq.com/bk/ns/357735.html'  class='grey'>择天记</a></b><b class='right2'>3683559</b> </li><li><b class='list'>9</b><b class='name'><a  target='_blank' href='http://chuangshi.qq.com/bk/ly/21514146.html'  class='grey'>都市灵剑仙</a></b><b class='right2'>3515968</b> </li><li class="lastline"><b class="name">刷新时间：2020-04-02 18:26:53</b><b class="right2"><a  target="_blank" href="/bang/tj/all-zong.html" class="red2">更多</a></b></li></ul> -->
                    </div>
                    <!--总字数榜单-->
                    <div class="chart_box ">
                        <div class="tophead">
                            <div class="t_point">总字数榜</div>
                        </div>
                        <ul id="Week03">
                            <li class="underline">全部作品总字数排行</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html' class='grey'>极品全能高手</a>
                                </b>
                                <b class='right2'>20586965</b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/13740740.html' class='grey'>太古龙象诀</a>
                                </b>
                                <b class='right2'>16137791</b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/445834.html' class='grey'>逆剑狂神</a>
                                </b>
                                <b class='right2'>15731576</b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/13639697.html' class='grey'>霸天武魂</a>
                                </b>
                                <b class='right2'>13682388</b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/13354339.html' class='grey'>我的绝色美女房客</a>
                                </b>
                                <b class='right2'>13527567</b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/459739.html' class='grey'>极品最强大少</a>
                                </b>
                                <b class='right2'>12802548</b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html' class='grey'>凌天战尊</a>
                                </b>
                                <b class='right2'>11970926</b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/454823.html' class='grey'>武傲九霄</a>
                                </b>
                                <b class='right2'>11876420</b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/14847674.html' class='grey'>美女总裁的最强高手</a>
                                </b>
                                <b class='right2'>11672451</b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ls/20346227.html' class='grey'>重生之战神吕布</a>
                                </b>
                                <b class='right2'>11369829</b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:53</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/zs/all-zong.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--新书人气榜单-->
                    <div class="chart_box">
                        <div class="tophead">
                            <div class="t_point">公众新书人气榜</div>
                        </div>
                        <ul>
                            <li class="underline">新作品人气值排行</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/29968845.html' class='grey'>道德经成就至尊人生</a>
                                </b>
                                <b class='right2'>1584</b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/29891163.html' class='grey'>逆袭从签到打卡开始</a>
                                </b>
                                <b class='right2'>683</b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ly/29235938.html' class='grey'>皇玉之谜</a>
                                </b>
                                <b class='right2'>616</b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/30102181.html' class='grey'>都市之医帝归来</a>
                                </b>
                                <b class='right2'>491</b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/30154245.html' class='grey'>废柴重生恋爱手册</a>
                                </b>
                                <b class='right2'>424</b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/kh/29996757.html' class='grey'>从一滴血开始</a>
                                </b>
                                <b class='right2'>401</b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/30070904.html' class='grey'>签到从合租开始</a>
                                </b>
                                <b class='right2'>371</b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/wx/29915980.html' class='grey'>唐朝斩鬼录</a>
                                </b>
                                <b class='right2'>332</b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/30022604.html' class='grey'>抚剑行</a>
                                </b>
                                <b class='right2'>320</b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/29955112.html' class='grey'>元主武神</a>
                                </b>
                                <b class='right2'>304</b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:28:57</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/gz/" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--女生人气榜-->
                    <div class="chart_box chart_box_right">
                        <div class="tophead">
                            <div class="t_point">女生人气榜</div>
                        </div>
                        <ul id="Week05">
                            <li class="underline">最受欢迎的女生类作品</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/xhyq/607991.html' class='grey'>神医弃女</a>
                                </b>
                                <b class='right2'>2797435</b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/khkj/22727621.html' class='grey'>这个大佬画风不对</a>
                                </b>
                                <b class='right2'>1054999</b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/gdyq/13659694.html' class='grey'>卦妃天下</a>
                                </b>
                                <b class='right2'>995442</b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/gdyq/19818084.html' class='grey'>神医凰后</a>
                                </b>
                                <b class='right2'>991832</b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/khkj/1001304536.html' class='grey'>快穿之炮灰女配逆袭记</a>
                                </b>
                                <b class='right2'>754377</b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/xdyq/21212492.html' class='grey'>电竞大神暗恋我</a>
                                </b>
                                <b class='right2'>702734</b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/xhyq/13714263.html' class='grey'>云家小九超皮哒</a>
                                </b>
                                <b class='right2'>649810</b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/gdyq/749376.html' class='grey'>锦绣农女种田忙</a>
                                </b>
                                <b class='right2'>580804</b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/gdyq/704039.html' class='grey'>医妃惊世</a>
                                </b>
                                <b class='right2'>579914</b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/xdyq/753423.html' class='grey'>娱乐圈之女王在上</a>
                                </b>
                                <b class='right2'>531952</b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:54</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/nv/all-zong.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--女生推荐榜-->
                    <div class="chart_box ">
                        <div class="tophead">
                            <div class="t_point">女生推荐榜</div>
                        </div>
                        <ul id="Week06">
                            <li class="underline">女生类作品推荐票排行</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/xdyq/29311522.html' class='grey'>喜欢你我说了算</a>
                                </b>
                                <b class='right2'>247716</b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/xdyq/29095084.html' class='grey'>每天被迫和大佬谈恋爱</a>
                                </b>
                                <b class='right2'>160431</b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/gdyq/28261680.html' class='grey'>魔偶天成</a>
                                </b>
                                <b class='right2'>90822</b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/xdyq/24951746.html' class='grey'>你是我戒不掉的甜</a>
                                </b>
                                <b class='right2'>88730</b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/xdyq/27997019.html' class='grey'>重生成校草的亲闺女</a>
                                </b>
                                <b class='right2'>86065</b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/gdyq/25851815.html' class='grey'>凤鸾九霄</a>
                                </b>
                                <b class='right2'>84839</b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/lmqc/27290986.html' class='grey'>恋你上瘾</a>
                                </b>
                                <b class='right2'>75906</b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/khkj/22727621.html' class='grey'>这个大佬画风不对</a>
                                </b>
                                <b class='right2'>63007</b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/xdyq/29259086.html' class='grey'>越界招惹</a>
                                </b>
                                <b class='right2'>57042</b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://yunqi.qq.com/bk/xdyq/28170203.html' class='grey'>种田不努力只能回家当首富</a>
                                </b>
                                <b class='right2'>56780</b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:54</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/nt/all-week.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--玄幻奇幻榜-->
                    <div class="chart_box">
                        <div class="tophead">
                            <div class="t_point">玄幻奇幻人气榜</div>
                        </div>
                        <ul id="Week04">
                            <li class="underline">最受欢迎的玄幻奇幻类作品</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/27306177.html' class='grey'>最强爆装系统</a>
                                </b>
                                <b class='right2'>2120</b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html' class='grey'>伏天氏</a>
                                </b>
                                <b class='right2'>1988</b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html' class='grey'>万古神帝</a>
                                </b>
                                <b class='right2'>1710</b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/29968845.html' class='grey'>道德经成就至尊人生</a>
                                </b>
                                <b class='right2'>1584</b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/29975442.html' class='grey'>齐天大圣直播间</a>
                                </b>
                                <b class='right2'>1546</b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html' class='grey'>凌天战尊</a>
                                </b>
                                <b class='right2'>1458</b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/27566625.html' class='grey'>万古第一仙宗</a>
                                </b>
                                <b class='right2'>1266</b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/25546807.html' class='grey'>垂钓之神</a>
                                </b>
                                <b class='right2'>1241</b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/20733915.html' class='grey'>九龙圣祖</a>
                                </b>
                                <b class='right2'>1216</b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/20496369.html' class='grey'>大道朝天</a>
                                </b>
                                <b class='right2'>1161</b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:53</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/rq/all-week.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--武侠仙侠榜-->
                    <div class="chart_box chart_box_right">
                        <div class="tophead">
                            <div class="t_point">武侠仙侠人气榜</div>
                        </div>
                        <ul>
                            <li class="underline">最受欢迎的武侠仙侠类作品</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/wx/23240412.html' class='grey'>鸿渐于磐</a>
                                </b>
                                <b class='right2'>6912</b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xx/26281320.html' class='grey'>鹿妖逐鹿</a>
                                </b>
                                <b class='right2'>2472</b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/wx/25013842.html' class='grey'>恩仇红尘劫</a>
                                </b>
                                <b class='right2'>1695</b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/wx/25367551.html' class='grey'>我是大大侠呀</a>
                                </b>
                                <b class='right2'>1336</b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xx/23561350.html' class='grey'>仙宫</a>
                                </b>
                                <b class='right2'>1108</b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xx/26296772.html' class='grey'>哪吒我搅乱了封神</a>
                                </b>
                                <b class='right2'>798</b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xx/29605006.html' class='grey'>仙门第一婿</a>
                                </b>
                                <b class='right2'>781</b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/wx/26791947.html' class='grey'>风云际会之风波令</a>
                                </b>
                                <b class='right2'>761</b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/wx/17107977.html' class='grey'>凌天剑神</a>
                                </b>
                                <b class='right2'>522</b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xx/13695667.html' class='grey'>永恒圣王</a>
                                </b>
                                <b class='right2'>508</b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:53</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/rq/all-week.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--都市青春榜-->
                    <div class="chart_box ">
                        <div class="tophead">
                            <div class="t_point">都市现实人气榜</div>
                        </div>
                        <ul id="Week07">
                            <li class="underline">最受欢迎的都市现实类作品</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/29349502.html' class='grey'>开局召唤黑影兵团</a>
                                </b>
                                <b class='right2'>1878</b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/27753270.html' class='grey'>我每天随机一个新系统</a>
                                </b>
                                <b class='right2'>1302</b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/14174819.html' class='grey'>都市超级医圣</a>
                                </b>
                                <b class='right2'>1207</b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/23475205.html' class='grey'>都市极品医神</a>
                                </b>
                                <b class='right2'>1181</b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/29377792.html' class='grey'>开局签到一个校花</a>
                                </b>
                                <b class='right2'>1139</b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/29306447.html' class='grey'>从签到开始百亿神豪</a>
                                </b>
                                <b class='right2'>906</b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/29371317.html' class='grey'>我真是医仙</a>
                                </b>
                                <b class='right2'>867</b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/13477263.html' class='grey'>我的冰山总裁老婆</a>
                                </b>
                                <b class='right2'>858</b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/26687741.html' class='grey'>重生之神极兵王</a>
                                </b>
                                <b class='right2'>823</b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/26413152.html' class='grey'>我的意识好神奇</a>
                                </b>
                                <b class='right2'>805</b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:53</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/rq/all-week.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--历史军事榜-->
                    <div class="chart_box">
                        <div class="tophead">
                            <div class="t_point">历史军事人气榜</div>
                        </div>
                        <ul id="Week04">
                            <li class="underline">最受欢迎的历史军事类作品</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ls/20307022.html' class='grey'>唐残</a>
                                </b>
                                <b class='right2'>3596</b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/js/29279452.html' class='grey'>从我是特种兵开始阅读变强</a>
                                </b>
                                <b class='right2'>1562</b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ls/25476104.html' class='grey'>马谡别传</a>
                                </b>
                                <b class='right2'>1493</b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ls/28249678.html' class='grey'>大唐一刀999级</a>
                                </b>
                                <b class='right2'>1173</b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ls/753153.html' class='grey'>寒门状元</a>
                                </b>
                                <b class='right2'>1047</b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ls/22281417.html' class='grey'>吾乃大皇帝</a>
                                </b>
                                <b class='right2'>953</b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ls/391539.html' class='grey'>1627崛起南海</a>
                                </b>
                                <b class='right2'>834</b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/js/22816327.html' class='grey'>最强妖孽特种兵王</a>
                                </b>
                                <b class='right2'>807</b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ls/19882772.html' class='grey'>混在大唐的工科宅男</a>
                                </b>
                                <b class='right2'>771</b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/js/23635409.html' class='grey'>抗日之全能兵王</a>
                                </b>
                                <b class='right2'>720</b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:53</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/rq/all-week.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--游戏体育榜-->
                    <div class="chart_box chart_box_right">
                        <div class="tophead">
                            <div class="t_point">游戏体育人气榜</div>
                        </div>
                        <ul>
                            <li class="underline">最受欢迎的游戏体育类作品</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/yx/28646362.html' class='grey'>全世界都在演我怎么办</a>
                                </b>
                                <b class='right2'>2028</b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/yx/21816679.html' class='grey'>文明之万界领主</a>
                                </b>
                                <b class='right2'>890</b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/yx/25501429.html' class='grey'>从绝地求生开始无敌</a>
                                </b>
                                <b class='right2'>830</b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/yx/24290122.html' class='grey'>从现在开始当男神</a>
                                </b>
                                <b class='right2'>803</b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/yx/29414788.html' class='grey'>网游之超强幸运</a>
                                </b>
                                <b class='right2'>593</b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/yx/29630177.html' class='grey'>捡个露娜当老婆</a>
                                </b>
                                <b class='right2'>541</b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/yx/26525207.html' class='grey'>网游之我能融合骸骨</a>
                                </b>
                                <b class='right2'>425</b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/yx/26798065.html' class='grey'>网游之神级病毒师</a>
                                </b>
                                <b class='right2'>415</b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/yx/27159403.html' class='grey'>漫威之万亿卡牌之神</a>
                                </b>
                                <b class='right2'>407</b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/yx/26689682.html' class='grey'>我在东厂当大佬</a>
                                </b>
                                <b class='right2'>399</b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:53</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/rq/all-week.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--科幻悬疑榜-->
                    <div class="chart_box ">
                        <div class="tophead">
                            <div class="t_point">科幻悬疑人气榜</div>
                        </div>
                        <ul id="Week07">
                            <li class="underline">最受欢迎的科幻悬疑类作品</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ly/25731839.html' class='grey'>上下杂货铺</a>
                                </b>
                                <b class='right2'>1251</b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/kh/27912885.html' class='grey'>带着骷髅军团闯末世</a>
                                </b>
                                <b class='right2'>1075</b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/kh/25266350.html' class='grey'>我是个莫得感情的刺客</a>
                                </b>
                                <b class='right2'>1029</b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ly/25912804.html' class='grey'>心理化学师</a>
                                </b>
                                <b class='right2'>856</b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/kh/29902996.html' class='grey'>我能偷走敌人资源</a>
                                </b>
                                <b class='right2'>709</b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/kh/20939674.html' class='grey'>美漫之道门修士</a>
                                </b>
                                <b class='right2'>689</b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/kh/29221758.html' class='grey'>武神基因</a>
                                </b>
                                <b class='right2'>680</b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ly/25181791.html' class='grey'>通灵纸扎店</a>
                                </b>
                                <b class='right2'>648</b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/kh/23755708.html' class='grey'>你，是我的命</a>
                                </b>
                                <b class='right2'>640</b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/kh/21264537.html' class='grey'>末世之渊</a>
                                </b>
                                <b class='right2'>627</b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:53</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/rq/all-week.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--创世销售榜单-->
                    <div class="chart_box">
                        <div class="tophead">
                            <div class="t_point">创世销售榜</div>
                            <div id="chuangshiSaleListTabBox" class="tabswish">
                                <div class="tabs choice">
                                    <a href="javascript:;">周</a>
                                </div>
                                <div class="tabs">
                                    <a href="javascript:;">月</a>
                                </div>
                                <div class="tabs">
                                    <a href="javascript:;">总</a>
                                </div>
                            </div>
                        </div>
                        <ul id="chuangshiSaleListByWeek">
                            <li class="underline">本周创世销售排行</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html' class='grey'>伏天氏</a>
                                </b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/27216384.html' class='grey'>玄黄龙皇</a>
                                </b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/19454017.html' class='grey'>万道龙皇</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xx/26281320.html' class='grey'>鹿妖逐鹿</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html' class='grey'>万古神帝</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/22658128.html' class='grey'>神魔之上</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html' class='grey'>凌天战尊</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/js/26350069.html' class='grey'>从我是特种兵开始打卡</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/25546807.html' class='grey'>垂钓之神</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/16488029.html' class='grey'>妖龙古帝</a>
                                </b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:54</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/cs/all-week.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                        <ul id="chuangshiSaleListByMonth" style="display:none;">
                            <li class="underline">本月创世销售排行</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html' class='grey'>极品全能高手</a>
                                </b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/19454017.html' class='grey'>万道龙皇</a>
                                </b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/23475205.html' class='grey'>都市极品医神</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html' class='grey'>伏天氏</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/27216384.html' class='grey'>玄黄龙皇</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xx/26281320.html' class='grey'>鹿妖逐鹿</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/js/26617422.html' class='grey'>喋血年华</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/20496369.html' class='grey'>大道朝天</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html' class='grey'>万古神帝</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>10</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/19704653.html' class='grey'>史上最牛帝皇系统</a>
                                </b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:54</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/cs/all-month.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                        <ul id="chuangshiSaleListByAll" style="display:none;">
                            <li class="underline">创世销售总排行</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/js/295037.html' class='grey'>最强兵王</a>
                                </b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xx/227536.html' class='grey'>青帝</a>
                                </b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html' class='grey'>极品全能高手</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/614782.html' class='grey'>全职法师</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xx/432313.html' class='grey'>盖世仙尊</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/js/21726382.html' class='grey'>兵者</a>
                                </b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:54</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/cs/all-zong.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                    <!--全平台销售榜单-->
                    <div class="chart_box chart_box_right">
                        <div class="tophead">
                            <div class="t_point">全平台销售榜</div>
                            <div id="saleListTabBox" class="tabswish">
                                <div class="tabs choice">
                                    <a href="javascript:;">周</a>
                                </div>
                                <div class="tabs">
                                    <a href="javascript:;">月</a>
                                </div>
                                <div class="tabs">
                                    <a href="javascript:;">总</a>
                                </div>
                            </div>
                        </div>
                        <ul id="saleListByWeek">
                            <li class="underline">本周全平台销售排行</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/23475205.html' class='grey'>都市极品医神</a>
                                </b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html' class='grey'>伏天氏</a>
                                </b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html' class='grey'>凌天战尊</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html' class='grey'>极品全能高手</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/js/26350069.html' class='grey'>从我是特种兵开始打卡</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html' class='grey'>万古神帝</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/25546807.html' class='grey'>垂钓之神</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/2cy/26869634.html' class='grey'>从斗罗开始打卡</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/19454017.html' class='grey'>万道龙皇</a>
                                </b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:54</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/pt/all-week.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                        <ul id="saleListByMonth" style="display:none;">
                            <li class="underline">本月全平台销售排行</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/23475205.html' class='grey'>都市极品医神</a>
                                </b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/21058239.html' class='grey'>伏天氏</a>
                                </b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html' class='grey'>凌天战尊</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html' class='grey'>极品全能高手</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html' class='grey'>万古神帝</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/js/26350069.html' class='grey'>从我是特种兵开始打卡</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/2cy/26869634.html' class='grey'>从斗罗开始打卡</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>8</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/25546807.html' class='grey'>垂钓之神</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>9</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/16488029.html' class='grey'>妖龙古帝</a>
                                </b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:54</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/pt/all-month.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                        <ul id="saleListByAll" style="display:none;">
                            <li class="underline">全平台销售总排行</li>
                            <li>
                                <b class='list01'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/413455.html' class='grey'>凌天战尊</a>
                                </b>
                            </li>
                            <li>
                                <b class='list02'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/520146.html' class='grey'>极品全能高手</a>
                                </b>
                            </li>
                            <li>
                                <b class='list03'></b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/648963.html' class='grey'>万古神帝</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>4</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/js/295037.html' class='grey'>最强兵王</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>5</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/ds/13354339.html' class='grey'>我的绝色美女房客</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>6</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/1001294720.html' class='grey'>万道剑尊</a>
                                </b>
                            </li>
                            <li>
                                <b class='list'>7</b>
                                <b class='name'>
                                    <a target='_blank' href='http://chuangshi.qq.com/bk/xh/713729.html' class='grey'>神道丹尊</a>
                                </b>
                            </li>
                            <li class="lastline">
                                <b class="name">刷新时间：2020-04-02 18:26:54</b>
                                <b class="right2">
                                    <a target="_blank" href="/bang/pt/all-zong.html" class="red2">更多</a>
                                </b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
    <script type="text/javascript" src="/index/js/base.js"></script>
    <script type="text/javascript" src="/index/js/ranklist.js"></script>
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
            
                $(function () {
                    //展开/收拢导航列表
                    $('.oclicktop').on('click', '.open, .aclose', function(){
                        var $this = $(this),
                            $ul = $this.parent().next('ul');
        
                        $this.hide();
        
                        if ($ul.css('display') === 'none') {
                            $ul.show();
                            $this.next().show();
                        } else {
                            $ul.hide();
                            $this.prev().show();
                        }
                        return false;
                    });
                });
            
        		$(function(){
        			var commonResourceUrl = "http://sta1.chuangshi.qq.com/common";
        			var refreshKeyUrl = "";//"http://book.qq.com/ywlogin/refreshkey.html";
        
        			var requestStatLogUrl = "http://account.book.qq.com/statlog/index.html",
        				requestStatLogData = {
        					'site' : "cs",
        					'url' : "ACtVNAJgBjlQYgMv",
        					'bid' : '',
        					'uuid' : '0',
        					'encrypt' : 1
        				};
        
        			CS.page.statistics.init(commonResourceUrl, refreshKeyUrl, requestStatLogUrl, requestStatLogData);
        		});
        	
                //切换排行榜的页签
                var searchResultUrl = "/search/searchindex/type/p1/value/p2.html";
        
                $(function () {
                    //初始化搜索框
                    CS.searchInput.init(searchResultUrl, 'p_navtit_hover');
                    //排行榜页面
                    CS.page.rankList.main.init();
                });
    </script>
</body>
</html>