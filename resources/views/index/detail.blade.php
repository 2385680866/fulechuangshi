<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>{{$info['read_name']}}最新章节_创世中文网</title>
    <link rel="shortcut icon" type="image/x-icon" href="http://img1.chuangshi.qq.com/chuangshi/p1/ico/c_mini_logo.ico" />
    <link rel="Bookmark" type="image/x-icon" href="http://img1.chuangshi.qq.com/chuangshi/p1/ico/c_mini_logo.ico" />
    <link rel="stylesheet" type="text/css" href="/index/css/base.css" />
    <!-- prevent dom xss -->
    <script type="text/javascript" src="/index/js/aq_common.js"></script>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="/index/css/bookmain.css" />
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
        <div class="mainnav">
            <a href="http://chuangshi.qq.com" title="首页">首页</a>&nbsp;<a class="red" href="http://chuangshi.qq.com/bk/" title="书库">书库</a>&nbsp;<a rel="nofollow" href="http://chuangshi.qq.com/search/" title="搜书">搜书</a>&nbsp;<a href="http://chuangshi.qq.com/bang/" title="排行榜">排行榜</a>
            @foreach($cateInfo as $key=>$value)
                @if($key%2==0)
                <a class="red dotted" href="{{url('/cate')}}/{{$value['cate_id']}}" title="{{$value['cate_name']}}">{{$value['cate_name']}}</a>
                @else
                · <a class="red" href="{{url('/cate')}}/{{$value['cate_id']}}" title="{{$value['cate_name']}}">{{$value['cate_name']}}</a>
                @endif
            @endforeach
            &nbsp;<a rel="nofollow" href="{{url('/author')}}" title="作家专区">作家专区</a>&nbsp;
            <a rel="nofollow" href="http://chuangshi.qq.com/about/questions_newuser.html" title="帮助">帮助</a>
            <!-- <a class="red dotted" href="http://chuangshi.qq.com/bk/huan/" title="玄幻">玄幻</a>·<a class="red" href="http://chuangshi.qq.com/bk/huan/" title="奇幻">奇幻</a>&nbsp; -->
        </div>
        <div class="topbanner">
            <a href="http://cpgame.qd.game.qidian.com/Home/Index/directLogin/name/qnss/way/1" target="_blank" class="">
                <img src="/index/picture/fefb4cdc03a71679313a235c1809b621.jpg" class="" alt="" title="" height="90" width="1000">
            </a>
        </div>
        <div class="mainbox">
            <!--书名及搜索-->
            <div class="main1">
                <div class="title">
                    <i class="grey">
                        <img class="qqredaer_tit" src="/index/picture/qqread.png" title="{{$info['read_name']}}" width="25" height="25" />
                    </i>
                    <a href="http://chuangshi.qq.com/bk/xx/27337639.html" title="{{$info['read_name']}}官网">
                        <b>&nbsp;{{$info['read_name']}}</b>
                    </a>
                    <i>连载中</i>
                    <span>|</span>
                    <i></i>
                </div>
                <div class="tag">
                    <div class="y">
                        <a href="javascript:void(0)" title="{{$info['read_name']}}">签约作品</a>
                    </div>
                    <div class="y">
                        <a href="javascript:void(0)" title="{{$info['read_name']}}">付费作品</a>
                    </div>
                </div>
                <div class="auther"> 书号：27337639</div>
                <div class="tablist">
                    <ul>
                        <li class="this"><a href="http://chuangshi.qq.com/bk/xx/27337639.html">介绍</a></li>
                        <li><a href="http://chuangshi.qq.com/bk/xx/AGoEM11jVjQAPVRiATIBbQ-l.html" class="active">目录</a></li>
                        <li class="midline">|</li>
                        <li><a target='_blank' href="http://account.book.qq.com/bk/author/ADZQOwdpWWJcPwttV2dTZQA4" class="active">作者</a></li>
                        <li class="midline">|</li>
                        <li><a href="http://chuangshi.qq.com/bk/xx/27337639-f.html" class="active">粉丝</a></li>
                        <li class="midline">|</li>
                    </ul>
                </div>
                <div class="searchbox">
                    <div class="inp">
                        <span id="searchType" class="search_tit" style="margin:2px 0 0 2px;" type="all">全部</span>
                        <input id="searchInput" class="searchinput gray" value="复兴之路" autocomplete="off" def="复兴之路" type="text" style="margin-top:4px;" maxlength="20" name="">
                        <!--搜索下拉小菜单-->
                        <div id="searchTypeDropdown" class="index_sub_serach" style="top: 32px; left: 2px; display: none;">
                            <a href="javascript:" id="s1" type="all">全部</a>
                            <a href="javascript:" id="s2" type="chuangshi">创世</a>
                            <a href="javascript:" id="s3" type="yunqi">云起</a>
                            <a href="javascript:" id="s4" type="dushu">图书</a>
                        </div>
                    </div>
                    <div class="btn">
                        <a id="searchBtn" href="javascript:;" class="search_btn default_search">搜 索</a>
                    </div>
                </div>
            </div>
            <!--作品简介和作者-->
            <div class="main2">
                <div class="left">
                    <!--活动专用按钮activeBtn-->
                    <div class="cover">
                        <!-- 限时免费的提示 -->
                        <cite id="discountTag" style="display:none;"></cite>
                        <em id="discountTime" style="display:none;"></em>
                        <a href="http://chuangshi.qq.com/bk/xx/AGoEM11jVjQAPVRiATIBbQ-l.html" class="bookcover">
                            <img src="/{{$info['read_img']}}" width="204" height="255" alt="{{$info['cate_name']}}">
                        </a>
                    </div>
                    <div class="button1">
                        <table width="216" height="100" border="0">
                            <tr>
                                <td>
                                    <a href="javascript:;" class="but01" id="addtobookshelf">&nbsp;</a>
                                </td>
                                <td>
                                    <a id="readNow" href="http://chuangshi.qq.com/bk/xx/AGoEM11jVjQAPVRiATIBbQ-l.html" alt=",最新章节,目录" class="but02">立即阅读</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a id="openRewardPopupBtn" href="javascript:;" class="but03 btnDashang">&nbsp;</a>
                                </td>
                                <td>
                                    <a id="openRecommendPopupBtn" href="javascript:;" class="but04 btnTuijian">&nbsp;</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="title">
                        <a href="{{url('/')}}">首页</a>&gt;
                        <a href="{{url('/index/cate')}}/{{$info['top_id']}}">{{$info['top']}}</a>&gt;
                        <a href="{{url('/index/cate')}}/{{$info['cate_id']}}">{{$info['cate_name']}}</a>&gt;
                        <strong>
                            <a href="http://chuangshi.qq.com/bk/xx/AGoEM11jVjQAPVRiATIBbQ-l.html">{{$info['read_name']}}</a>
                        </strong>
                        <a class="quickLink" href="/public/downShortcut/bid/27337639.html">保存快捷方式</a>
                    </div>
                    <div class="num"></div><!-- tms id 677 特殊标记 zhangjun-->
                    <!-- tms id 677 特殊标记 zhangjun-->
                    <div class="info">{{$info['read_content']}} </div>
                    <div class="tags">作品标签：{{$labelName}}</div>
                    <!--植树节活动 奇迹树 弹框 start-->
                    <div class="arborDay" id="noveltreedetail" style="display:none;"></div>
                    <!-- 奇迹树 弹框 end -->
                </div>
                <div class="right">
                    <div class="autherinfo">
                        <a href="http://account.book.qq.com/bk/author/ADZQOwdpWWJcPwttV2dTZQA4" class="head">
                            <img src="/index/picture/default-avatar.png" width="48" height="48">
                        </a>
                        <div class="au_name">
                            <p id='textauthor'>作者：</p>
                            <p>
                                <a href="http://account.book.qq.com/bk/author/ADZQOwdpWWJcPwttV2dTZQA4">{{$info['author_nickname']}}</a>
                            </p>
                        </div>
                        <div class="shortintro">
                            <p>希望书友们相互转告，帮忙广告，你们的支持就是我的力量！求点击、求推荐、求书评，各种求！</p>
                        </div>
                    </div><!-- 奇迹树小图 start -->
                    <div class="treeLink" id="novelTreemin">
                        <a href="javascript:" class="treebox level1" title="培养奇迹树"></a>
                    </div><!-- 奇迹树小图 end -->
                </div>
            </div><!-- 最新章节、作品信息、隆重推荐、作者其他作品 -->
            <div class="main3">
                <div class="middle">
                    <!-- 页签 -->
                    <div id="newChapterTabBox" class="tab">
                        <!-- tms id 533 特殊标记 xiexinzhong-->
                        <h1 class="tab2left choice" style="width: 222px;">
                            <a id="newChapterTab" listid="newChapterList" href="javascript:" title="万古修仙群最新章节">最新章节</a>
                        </h1><!-- tms id 533 特殊标记 xiexinzhong-->
                        <div class="tabnext">
                            <!--一键加群 chenjie-->
                            <!--一键加群 chenjie-->
                        </div><!-- 分享按钮 -->
                        <div id="bdshare" class="bdshare_b" style="float:none; position:absolute; top:7px; right:2px;">
                            <img width="135" height="24" src="/index/picture/type-button-1.jpg" />
                        </div>
                    </div><!-- 最新章节 -->
                    <div id="newChapterList" class="swishlist">
                        <div class="chaptername">
                            <b>
                                <a href="http://chuangshi.qq.com/bk/xx/AGoEM11jVjQAPVRiATIBbQ-r-437.html" class="green">第一百五十八章 众怒滔滔</a>
                            </b>
                            <span>&nbsp;&nbsp;VIP&nbsp;&nbsp;</span>(更新时间：2020-04-02 17:38:24)
                        </div>
                        <div class="chapternev">
                            <a href="http://chuangshi.qq.com/bk/xx/AGoEM11jVjQAPVRiATIBbQ-r-437.html" rel="nofollow">
                                <p>“……”</p>
                                <p>这个题目看似简单无比，然而却品愈觉得刁钻！</p>
                                <p>什么珠子？</p>
                                <p>说到底只是猜一个字，可供选择的似乎太宽泛了，让人完全摸不着头脑！</p>
                                <p>“主宰，看来这玄一怪叟还是一如既往的爱面子，一被喧宾夺主，立刻就跳将出来了，真是坏事！”</p>
                                <p>方才地狱魔仙的那记妙招很是惊艳，其厉害之处就是可以大范围操控在场之人的心魂，如是川流泽汇，意念叠加，就算少数几个高手不惧那初始攻击，随着时间推移最终也会独木难支！</p>
                                <p>然而此招是...</p>
                            </a>
                        </div>
                        <div class="btnlist">
                            <a href="http://chuangshi.qq.com/bk/xx/AGoEM11jVjQAPVRiATIBbQ-r-437.html" alt="万古修仙群最新章节" class="read"></a>
                            <a href="http://chuangshi.qq.com/bk/xx/AGoEM11jVjQAPVRiATIBbQ-l.html" class="index" alt="万古修仙群,万古修仙群最新章节,目录"></a>
                        </div>
                    </div><!-- 作品信息 -->
                    <div id="novelInfo" class="swishlist" style="display:none"></div>
                </div>
                <div class="right">
                    <div id="authorBookBox" class="authorRec">
                        <div class="otherbook">
                            <div id="authorBookTabBox" class="tab">
                                <h1 class="tableft choice" style="width: 203px;">
                                    <a href="javascript:">作者其他作品</a>
                                </h1>
                            </div>
                            <div class="otherList" id="theAuthorBest">
                                <ul>作者没有其他作品</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- 分享按钮 -->
            <script type="text/javascript" id="bdshare_js" data="type=button&amp;mini=1&amp;uid=6730035"></script>
            <script type="text/javascript" id="bdshell_js"></script>
            <div class="adv">
                <a href="http://chuangshi.qq.com/bk/ds/27104539.html" target="_blank" class="">
                    <img src="/index/picture/6bf01fc28507c6b795b143c0bf7b3437.jpg" class="" alt="" title="" height="90" width="1000">
                </a>
            </div><!-- 互动中心 -->
            <div class="main4" id="interactcenter" style="display:none"></div>
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
                <a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img1.png"></a>
                <a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img2.png"></a>
                <a href="http://beian.miit.gov.cn/state/outPortal/loginPortal.action" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img3.png"></a>
                <a href="http://www.12377.cn/" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img4.png"></a>
                <a href="http://www.wenming.cn/" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img5.png"></a>
                <a href="http://www.shjbzx.cn/" target="_blank" rel="external nofollow"><img width="122" height="52" src="/index/picture/footer_img6.png"></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/index/js/base.js"></script>
    <script type="text/javascript" src="/index/js/novel_index.js"></script>
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
    </div><!-- 好原创活动的投票浮层 -->
    <div id="goodOriginalVotePopup" class="iframeWrap" style="display:none; background:#FFF;">
        <a class="closeBtn" href="javascript:;" title="关闭"></a>
        <iframe src="" width="584" height="619" scrolling="no" frameborder="0"></iframe>
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
    
        $(function () {
            var searchURL = "/search/searchindex/type/p1/wd/p2.html";
            //初始化搜索框组件
            CS.searchInput.init(searchURL, 'search_tit_hover');
        });
            
        $(function () {
            // 切换最新章节、作品信息的页签
            $('#newChapterTab, #novelInfoTab').on('click', function () {
                var $this = $(this);

                $('#newChapterTabBox h1').removeClass('choice');
                $this.parent().addClass('choice');

                $('#newChapterList, #novelInfo').hide();
                $('#' + $this.attr('listid')).show();
            });

            var bdshellUrl = "http://bdimg.share.baidu.com//index/js/shell_v2.js?cdnversion=" + Math.ceil(new Date() / 3600000);
            $("#bdshell_js").attr('src', bdshellUrl);
        });
          
        $(function(){
            var commonResourceUrl = "http://sta1.chuangshi.qq.com/common";
            var refreshKeyUrl = "";//"http://book.qq.com/ywlogin/refreshkey.html";

            var requestStatLogUrl = "http://account.book.qq.com/statlog/index.html",
                requestStatLogData = {
                    'site' : "cs",
                    'url' : "ACtVNAJqBnhQfQN4BSpUaVIwAGZWY1RkUjkHMFU8XiJRPVUiBWtXag",
                    'bid' : '27337639',
                    'uuid' : '0',
                    'encrypt' : 1
                };

            CS.page.statistics.init(commonResourceUrl, refreshKeyUrl, requestStatLogUrl, requestStatLogData);
        });
        	
        var bid = "27337639";
        var isEpubNovel = 0;

        // 简介
        var getPersonalAjaxUrl = "/novel/getPersonal.html";

        //互动中心
        var interactionCenterTabIndex = "0",
            isVipNovel = 1,
            getInteractionCenterAjaxUrl = "/novel/interactCenter.html",
            submitSurveyAjaxUrl = "/novel/surveyvote.html",
            getSurveyResultAjaxUrl = "/novel/surveyresult.html";

        //书评列表
        var novel_pic = "//wfqqreader-1252317822.image.myqcloud.com/cover/639/27337639/t5_27337639.jpg",
            verifyImgUrl = "/novel/verify.html",
            faceImgPath = "http://img1.chuangshi.qq.com/chuangshi/p1", //书评表情组件使用
            getCommentListAjaxUrl = "/novelcomment/index.html",
            up_ajaxUrl = "/novelcomment/up.html",
            applyHelper_ajaxUrl = "/novelcomment/applyHelper.html",
            submitComment_ajaxUrl = "/novelcomment/addComment.html";

        var notShowRecommend = "";
        
        //读者互动组件的必填参数
        var readerInteractParams = {
                'bookName': "万古修仙群",
                'bid': bid,
                'getInteractonContent_ajaxUrl': "/novel/getInteractonTabContent.html",
                'submitReward_ajaxUrl': "/novel/dashang.html",
                'submitRecommend_ajaxUrl': "/novel/recommend.html",
                'submitMonthTicket_ajaxUrl': "/novel/Monthly.html",
                'is_reward' : "1"
            },
        //读者互动组件的可选配置
            readerInteractOptions = {
            'showMonthTicket': isVipNovel, //是否显示投月票页签 (1:开启 0：关闭)
            'showRecommend': !notShowRecommend //是否显示推荐票页签 (1:开启 0：关闭)
            };
        
        //奇迹树
        var getTreeAjaxUrl = "/tree/getnoveltree.html",
            checkUserFeedToolAjaxUrl = "/tree/checkUserFeed.html",
            feedTreeAjaxUrl = "/tree/useFeed.html";

        //zhangjun
        var from = "",
            bookClicksAjaxUrl = "/novel/bookClicks.html";

        //好原创活动
        var authorId = "ADZQOwdpWWJcPwttV2dTZQA4",
            getVoteNumAjaxUrl = "https://pages.book.qq.com/jinjianpan/votenumweb.html",
            votePopupUrl = "https://pages.book.qq.com/jinjianpan/voteshoweb.html";
        
        $(function () {
            //互动中心初始化
            CS.page.interactionCenter.init(bid, isVipNovel, interactionCenterTabIndex, getInteractionCenterAjaxUrl, submitSurveyAjaxUrl, getSurveyResultAjaxUrl);
            //读者互动
            CS.readerInteract.init(readerInteractParams, readerInteractOptions);
            //书评列表
            CS.page.intro.comment.init(bid, novel_pic, verifyImgUrl, faceImgPath, getCommentListAjaxUrl, up_ajaxUrl, applyHelper_ajaxUrl, submitComment_ajaxUrl);
            //书介绍页
            CS.page.intro.main.init(bid, isEpubNovel, getPersonalAjaxUrl);
            //奇迹树
            CS.page.intro.tree.init(bid, getTreeAjaxUrl, feedTreeAjaxUrl, checkUserFeedToolAjaxUrl);
            //好原创活动
            CS.activity.goodOriginal.init(bid, authorId, getVoteNumAjaxUrl, votePopupUrl);
            //qq阅读广告条
            CS.qqReadAd.init();

            function _requestBookClicks(){
                if(from){
                    new Image().src = bookClicksAjaxUrl +'?from='+ from +'&bid='+ bid;
                }
            }
            _requestBookClicks();
        });
    </script>
</body>
</html>