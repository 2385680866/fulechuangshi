<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><!-- 360安全游览器使用webkit极速核 -->
	<meta name="renderer" content="webkit" /><!-- IE使用它支持的最高模式 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta property="wb:webmaster" content="bde65bab61e33f62" />
	<meta name="description" content="创世中文网为您提供最新好看的都市小说推荐、都市小说排行榜完本，免费经典都市小说在线阅读和下载，精彩经典都市小说尽在创世中文网!" />
	<meta name="keywords" content="都市小说，都市小说排行榜，好看的都市小说，都市小说完本，都市小说排行榜完本，都市小说推荐，经典都市小说" />
	<meta property="qc:admins" content="151626767763051673016375" />
	<title>【都市小说】好看的都市小说完本下载_经典都市小说排行榜推荐_创世中文网</title>
	<link rel="shortcut icon" type="image/x-icon" href="http://img1.chuangshi.qq.com/chuangshi/p1/ico/c_mini_logo.ico" />
	<link rel="Bookmark" type="image/x-icon" href="http://img1.chuangshi.qq.com/chuangshi/p1/ico/c_mini_logo.ico" />
	<link rel="stylesheet" type="text/css" href="static/css/base.css" /><!-- prevent dom xss -->
	<script type="text/javascript" src="static/js/aq_common.js"></script>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="static/css/search_allbooks.css" /><!-- 3G站提示 -->
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
		<div class="top_nav2">
			<div class="mainnav">
				<a href="http://chuangshi.qq.com" title="首页">首页</a>&nbsp;<a class="red" href="http://chuangshi.qq.com/bk/" title="书库">书库</a>&nbsp;<a rel="nofollow" href="http://chuangshi.qq.com/search/" title="搜书">搜书</a>&nbsp;<a href="http://chuangshi.qq.com/bang/" title="排行榜">排行榜</a>&nbsp;<a class="red dotted" href="http://chuangshi.qq.com/bk/huan/" title="玄幻">玄幻</a>·<a class="red" href="http://chuangshi.qq.com/bk/huan/" title="奇幻">奇幻</a>&nbsp;<a href="http://chuangshi.qq.com/bk/xia/" title="武侠">武侠</a>·<a href="http://chuangshi.qq.com/bk/xia/" title="仙侠">仙侠</a>&nbsp;<a href="http://chuangshi.qq.com/bk/chun/" title="都市">都市</a>·<a href="http://chuangshi.qq.com/bk/chun/" title="现实">现实</a>&nbsp;<a href="http://chuangshi.qq.com/bk/shi/" title="历史">历史</a>·<a href="http://chuangshi.qq.com/bk/shi/" title="军事">军事</a>&nbsp;<a class="dotted" href="http://chuangshi.qq.com/bk/you/" title="游戏">游戏</a>·<a href="http://chuangshi.qq.com/bk/you/" title="体育">体育</a>&nbsp;<a href="http://chuangshi.qq.com/bk/ke/" title="科幻">科幻</a>·<a href="http://chuangshi.qq.com/bk/ke/" title="悬疑">悬疑</a>&nbsp;<a href="http://chuangshi.qq.com/bk/ecy/" title="轻小说">轻小说</a>·<a href="http://chuangshi.qq.com/bk/duan/" title="短篇">短篇</a>&nbsp;<a class="red" href="http://yunqi.qq.com" title="女生">女生</a>·<a class="red" href="http://yunqi.qq.com" title="言情">言情</a>&nbsp;<a rel="nofollow" class="red dotted" target="_blank" href="http://acts.book.qq.com/cssp/theme1.html" title="作家福利">作家福利</a>&nbsp;<a rel="nofollow" href="https://write.qq.com/?siteid=3" title="作家专区">作家专区</a>&nbsp;<a rel="nofollow" href="http://chuangshi.qq.com/about/questions_newuser.html" title="帮助">帮助</a>
			</div>
		</div>
		<div class="topbanner">
			<a href="http://www.oneplusbbs.com/thread-3905634-1-1.html" target="_blank" class="">
				<img src="static/picture/598730b24f134bcfba536913f3e3e3be.gif" class="" alt="" title="" height="90" width="1000">
			</a>
		</div>
		<div class="rank_mainbox_sk">
			<div class="topbox">
				<h1>创世书库</h1>
				<span>250270本精品小说任你选读</span>
				<div class="rank_search">
					<i id="searchType" type="all">全部</i>
					<input id="searchInput" name="" type="text" value="复兴之路" autocomplete="off" def="复兴之路" class="rank_s gray">
					<input id="searchBtn" class="rank_searchbtn" value="搜 索" type="button" name="">
					<!--搜索下拉小菜单-->
					<div id="searchTypeDropdown" class="index_sub_serach">
						<a href="javascript:" id="s1" type="all">全部</a>
						<a href="javascript:" id="s2" type="chuangshi">创世</a>
						<a href="javascript:" id="s3" type="yunqi">云起</a>
						<a href="javascript:" id="s4" type="dushu">图书</a>
					</div>
				</div>
			</div>
			<ul>
				<li class="fenzhan">
					<b>
						<span>作品分站：</span>
					</b>
					<a href="http://chuangshi.qq.com/bk/">
						<img class="act" src="static/picture/cs.png">
					</a>
					<a rel="nofollow" href="http://yunqi.qq.com/bk/">
						<img src="static/picture/yunqi.png">
					</a>
					<a rel="nofollow" href="http://dushu.qq.com/store.html">
						<img width="97" height="45" src="static/picture/dushu.png">
					</a>
				</li>
				<li class="fenlei">
					<b class="top">
						<span>小说分类：</span>
						<a href="/bk/" id="a_Subjectid_active_">全部</a>
						<a href="http://chuangshi.qq.com/bk/xh/" id="a_Subjectid_active_20001">玄幻</a>
						<a href="http://chuangshi.qq.com/bk/qh/" id="a_Subjectid_active_20005">奇幻</a>
						<a href="http://chuangshi.qq.com/bk/wx/" id="a_Subjectid_active_20010">武侠</a>
						<a href="http://chuangshi.qq.com/bk/xx/" id="a_Subjectid_active_20014">仙侠</a>
						<a href="http://chuangshi.qq.com/bk/ds/" class="active" id="a_Subjectid_active_20019">都市</a>
						<a href="http://chuangshi.qq.com/bk/ls/" id="a_Subjectid_active_20028">历史</a>
						<a href="http://chuangshi.qq.com/bk/js/" id="a_Subjectid_active_20032">军事</a>
						<a href="http://chuangshi.qq.com/bk/ly/" id="a_Subjectid_active_20037">悬疑</a>
						<a href="http://chuangshi.qq.com/bk/kh/" id="a_Subjectid_active_20042">科幻</a>
						<a href="http://chuangshi.qq.com/bk/yx/" id="a_Subjectid_active_20050">游戏</a>
						<a href="http://chuangshi.qq.com/bk/ty/" id="a_Subjectid_active_20054">体育</a>
						<a href="http://chuangshi.qq.com/bk/2cy/" id="a_Subjectid_active_20059">轻小说</a>
						<a href="http://chuangshi.qq.com/bk/qc/" id="a_Subjectid_active_20065">现实</a>
						<a href="http://chuangshi.qq.com/bk/dp/" id="a_Subjectid_active_20076">短篇</a>
					</b>
					<p class="smallbox">
						<a rel="nofollow" href="
                    http://chuangshi.qq.com/bk/ds/                    " class="active" id="a_Contentid_active_">全部</a>
						<a href="http://chuangshi.qq.com/bk/ds/xx20022/" id="a_Contentid_active_20022">娱乐明星</a>
						<a href="http://chuangshi.qq.com/bk/ds/xx20025/" id="a_Contentid_active_20025">商战职场</a>
						<a href="http://chuangshi.qq.com/bk/ds/xx20027/" id="a_Contentid_active_20027">恩怨情仇</a>
						<a href="http://chuangshi.qq.com/bk/ds/xx20020/" id="a_Contentid_active_20020">都市生活</a>
						<a href="http://chuangshi.qq.com/bk/ds/xx20069/" id="a_Contentid_active_20069">青春校园</a>
						<a href="http://chuangshi.qq.com/bk/ds/xx20026/" id="a_Contentid_active_20026">异术超能</a>
					</p>
				</li>
				<li>
					<b>
						<span>作品标签：</span>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/" class="active" id="a_TagList_active_all">不限</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21101/" id="a_TagList_active_21101">宅男</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21070/" id="a_TagList_active_21070">医生</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21067/" id="a_TagList_active_21067">学生</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21064/" id="a_TagList_active_21064">老师</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21062/" id="a_TagList_active_21062">杀手</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21061/" id="a_TagList_active_21061">特种兵</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21058/" id="a_TagList_active_21058">明星</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21053/" id="a_TagList_active_21053">黑客</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21052/" id="a_TagList_active_21052">特工</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21049/" id="a_TagList_active_21049">盗贼</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21952/" id="a_TagList_active_21952">豪门</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21950/" id="a_TagList_active_21950">孤儿</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25003/" id="a_TagList_active_25003">法师</a>
					</b>
					<br>
					<b>
						<a href="javascript:;" class="showtag showl" onclick="$('.hidetag').show();$('.showtag').hide();">全部显示</a>
						<a href="javascript:;" class="hidetag showl" style="display:none;" onclick="$('.hidetag').hide();$('.showtag').show();">收起</a>
					</b>
					<p class="hidetag hidelist" style="display:none;">
						<a href="http://chuangshi.qq.com/bk/ds/tg21959/" id="a_TagList1_active_21959">淡定</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21957/" id="a_TagList1_active_21957">坚毅</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21956/" id="a_TagList1_active_21956">机智</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21955/" id="a_TagList1_active_21955">阳光</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21122/" id="a_TagList1_active_21122">腹黑</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21115/" id="a_TagList1_active_21115">冷酷</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21114/" id="a_TagList1_active_21114">热血</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21112/" id="a_TagList1_active_21112">护短</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21108/" id="a_TagList1_active_21108">猥琐</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21030/" id="a_TagList1_active_21030">铁血</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21027/" id="a_TagList1_active_21027">励志</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21017/" id="a_TagList1_active_21017">恶搞</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21014/" id="a_TagList1_active_21014">爆笑</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21013/" id="a_TagList1_active_21013">轻松</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25001/" id="a_TagList1_active_25001">嚣张</a>
						<br>
						<a href="http://chuangshi.qq.com/bk/ds/tg25002/" id="a_TagList1_active_25002">狡猾</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21196/" id="a_TagList1_active_21196">练功流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21964/" id="a_TagList1_active_21964">争霸流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21060/" id="a_TagList1_active_21060">软饭流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21910/" id="a_TagList1_active_21910">穿越</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21966/" id="a_TagList1_active_21966">洪荒流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21967/" id="a_TagList1_active_21967">学院流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21968/" id="a_TagList1_active_21968">强者回归</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21131/" id="a_TagList1_active_21131">重生</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21134/" id="a_TagList1_active_21134">种田文</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21135/" id="a_TagList1_active_21135">随身流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21165/" id="a_TagList1_active_21165">无限流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21193/" id="a_TagList1_active_21193">技术流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21194/" id="a_TagList1_active_21194">凡人流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21528/" id="a_TagList1_active_21528">无敌文</a>
						<br>
						<a href="http://chuangshi.qq.com/bk/ds/tg21523/" id="a_TagList1_active_21523">系统流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21121/" id="a_TagList1_active_21121">废柴流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21171/" id="a_TagList1_active_21171">魔王附体</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21175/" id="a_TagList1_active_21175">召唤流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25004/" id="a_TagList1_active_25004">异兽流</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25005/" id="a_TagList1_active_25005">感情</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21961/" id="a_TagList1_active_21961">赚钱</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21104/" id="a_TagList1_active_21104">胖子</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21084/" id="a_TagList1_active_21084">龙</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21078/" id="a_TagList1_active_21078">丧尸</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21077/" id="a_TagList1_active_21077">僵尸</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21998/" id="a_TagList1_active_21998">变身</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21999/" id="a_TagList1_active_21999">群穿</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg22000/" id="a_TagList1_active_22000">宠物</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21138/" id="a_TagList1_active_21138">盗墓</a>
						<br>
						<a href="http://chuangshi.qq.com/bk/ds/tg21167/" id="a_TagList1_active_21167">蜀山</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21180/" id="a_TagList1_active_21180">玄学</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21174/" id="a_TagList1_active_21174">卡片</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21176/" id="a_TagList1_active_21176">位面</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg21162/" id="a_TagList1_active_21162">丹药</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25006/" id="a_TagList1_active_25006">魔兽</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25007/" id="a_TagList1_active_25007">西游</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25008/" id="a_TagList1_active_25008">LOL</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25009/" id="a_TagList1_active_25009">阵法</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25010/" id="a_TagList1_active_25010">吸血鬼</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25011/" id="a_TagList1_active_25011">亡灵</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25012/" id="a_TagList1_active_25012">鉴宝</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25013/" id="a_TagList1_active_25013">手游</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25014/" id="a_TagList1_active_25014">鬼怪</a>
						<a href="http://chuangshi.qq.com/bk/ds/tg25015/" id="a_TagList1_active_25015">职场</a>
						<br>
					</p>
				</li>
				<li>
					<b>
						<span>作品字数：</span>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/" class="active" id="a_Bookwords_active_all">不限</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/zp1/" id="a_Bookwords_active_1">30万以下</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/zp30/" id="a_Bookwords_active_30">30万-50万</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/zp50/" id="a_Bookwords_active_50">50万-100万</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/zp100/" id="a_Bookwords_active_100">100万-200万</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/zp200/" id="a_Bookwords_active_200">200万以上</a>
					</b>
				</li>
				<li>
					<b>
						<span>写作进度：</span>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/" class="active" id="a_Updatestatus_active_all">不限</a>
						<a href="http://chuangshi.qq.com/bk/ds/xz1/" id="a_Updatestatus_active_1">连载中</a>
						<a href="http://chuangshi.qq.com/bk/ds/xz2/" id="a_Updatestatus_active_2">已完结</a>
					</b>
				</li>
				<li>
					<b>
						<span>更新时间：</span>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/" class="active" id="a_Lastupdate_active_all">不限</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/gx3/" id="a_Lastupdate_active_3">三日内</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/gx7/" id="a_Lastupdate_active_7">七日内</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/gx15/" id="a_Lastupdate_active_15">半月内</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/gx30/" id="a_Lastupdate_active_30">一月内</a>
					</b>
				</li>
				<li>
					<!--排序方式：字数排序 更新时间排序 周人气 月人气 总人气 周推荐 月推荐 总推荐-->
					<b>
						<span>排序方式：</span>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/" class="active" id="a_Sortby_active_all">默认</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/so1/" id="a_Sortby_active_1">字数排序</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/so2/" id="a_Sortby_active_2">更新时间</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/so3/" id="a_Sortby_active_3">周人气</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/so4/" id="a_Sortby_active_4">月人气</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/so5/" id="a_Sortby_active_5">总人气</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/so6/" id="a_Sortby_active_6">周推荐</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/so7/" id="a_Sortby_active_7">月推荐</a>
					</b>
				</li>
				<li>
					<!--全部 公众作品 VIP作品-->
					<b>
						<span>其它选项：</span>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/" class="active" id="a_Isvip_active_all">全部</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/vi2/" id="a_Isvip_active_2">公共作品</a>
						<a rel="nofollow" href="http://chuangshi.qq.com/bk/ds/vi1/" id="a_Isvip_active_1">VIP作品</a>
					</b>
				</li>
			</ul>
		</div>
		<div class="allbooklist">
			<div class="leftlist">
				<div class="topbox">
					<span class="left">全部小说 - 每页显示100部小说 - 按更新时间排序</span>
					<span class="right">1/2页 </span>
				</div>
				<table border="0">
					<tr class="underline">
						<td width="60px" class="underline">序号</td>
						<td width="180px" class="underline">小说类别</td>
						<td width="350px" align="left" class="underline">小说书名/小说章节</td>
						<td width="70px" class="underline">字数</td>
						<td width="50px" class="underline">作者</td>
						<td width="110px" class="underline">更新时间</td>
					</tr>
					<tr>
						<td>1</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20022/" class="grey2">[都市/娱乐明星]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29964750.html" class="green" target="_blank">我要成为天王</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1pVjEAPlRjATQBZA-r-51.html" class="grey" title="第1卷 第四十九章叶氏书法问世" target="_blank">第1卷 第四十九章叶氏书法问</a>
						</td>
						<td>113358</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNAtsV2RTZgA5WzRQNQNn" class="grey3" target="_blank">吃柠檬的桃子</a>
						</td>
						<td>
							<span>20-04-04 21:53</span>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/28438296.html" class="green" target="_blank">极品兵王女婿</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPF1kVjQAMlRmATgBYg-r-88.html" class="grey" title="第87章 平步青云" target="_blank">第87章 平步青云</a>
							<em class="org">VIP</em>
						</td>
						<td>267640</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQPwdjWWtcMwtjV2lTbQA2WzA%25253D" class="grey3" target="_blank">单人格</a>
						</td>
						<td>
							<span>20-04-04 21:53</span>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30115993.html" class="green" target="_blank">最强全系战神</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1hVjYAP1RtATgBZw-r-3.html" class="grey" title="第1卷 第2章 绝不放过你！" target="_blank">第1卷 第2章 绝不放过你！</a>
						</td>
						<td>4648</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOgdtWW9cMgtrV2lTYwA4WzY%25253D" class="grey3" target="_blank">锦绣十公里</a>
						</td>
						<td>
							<span>20-04-04 21:52</span>
						</td>
					</tr>
					<tr>
						<td>4</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26459167.html" class="green" target="_blank">天道送来个系统</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1kVjIAM1RlATcBYw-r-321.html" class="grey" title="第2卷 第三百零六章 巨尾蝎" target="_blank">第2卷 第三百零六章 巨尾</a>
							<em class="org">VIP</em>
						</td>
						<td>661741</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQPgdtWWpcNAtuV2ZTYQA3WzQ%25253D" class="grey3" target="_blank">香橙也疯狂</a>
						</td>
						<td>
							<span>20-04-04 21:51</span>
						</td>
					</tr>
					<tr>
						<td>5</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/28433747.html" class="green" target="_blank">都市战神女婿</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPF1kVjQAOVRjATUBYw-r-91.html" class="grey" title="第121章 解决完事" target="_blank">第121章 解决完事</a>
							<em class="org">VIP</em>
						</td>
						<td>309603</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQPwdjWWtcMAtqV2FTbAA3Wzg%25253D" class="grey3" target="_blank">次元世纪</a>
						</td>
						<td>
							<span>20-04-04 21:51</span>
						</td>
					</tr>
					<tr>
						<td>6</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29576558.html" class="green" target="_blank">我给大佬送快递</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1lVjAAPFRhATQBbA-r-53.html" class="grey" title="第1卷 第三十一章 唐馨痛哭" target="_blank">第1卷 第三十一章 唐馨痛</a>
						</td>
						<td>60890</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADxQMgdqWWpcNQtoV2hTbQA%25252B" class="grey3" target="_blank">香蕉快递</a>
						</td>
						<td>
							<span>20-04-04 21:51</span>
						</td>
					</tr>
					<tr>
						<td>7</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/20356405.html" class="green" target="_blank">老君传人</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoENF1jVjIAPFRgATEBYQ-r-1815.html" class="grey" title="第一八零一章" target="_blank">第一八零一章</a>
							<em class="org">VIP</em>
						</td>
						<td>4210552</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADZQPQduWWlcNwtiV2BTYAA6" class="grey3" target="_blank">风晨曦01</a>
						</td>
						<td>
							<span>20-04-04 21:50</span>
						</td>
					</tr>
					<tr>
						<td>8</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/1001302523.html" class="green" target="_blank">超级兵王混都市</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGkENF1gVjYAOVRkATMBYQ1sBzY-r-5200.html" class="grey" title="第2卷 第4971章 天高地厚（2）" target="_blank">第2卷 第4971章 天高</a>
							<em class="org">VIP</em>
						</td>
						<td>10731207</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOQdsWWNcMgtuV2ZTbQA4" class="grey3" target="_blank">风火江南</a>
						</td>
						<td>
							<span>20-04-04 21:50</span>
						</td>
					</tr>
					<tr>
						<td>9</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20025/" class="grey2">[都市/商战职场]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30088418.html" class="green" target="_blank">广告大师</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1gVj8AMlRgATABbA-r-13.html" class="grey" title="第1卷 第十三章 熬了整夜" target="_blank">第1卷 第十三章 熬了整夜</a>
						</td>
						<td>23000</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtoV2JTYQA3WzBQMgNl" class="grey3" target="_blank">勇气夺回</a>
						</td>
						<td>
							<span>20-04-04 21:49</span>
						</td>
					</tr>
					<tr>
						<td>10</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/27444254.html" class="green" target="_blank">无限兑换之神级装逼系统</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEM11kVjMAPlRmATQBYA-r-306.html" class="grey" title="第304章 数据刷子" target="_blank">第304章 数据刷</a>
							<em class="org">VIP</em>
						</td>
						<td>603027</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQOgdvWWpcNAtvV2ZTZQA4" class="grey3" target="_blank">打脸老怪</a>
						</td>
						<td>
							<span>20-04-04 21:48</span>
						</td>
					</tr>
					<tr>
						<td>11</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/25592450.html" class="green" target="_blank">令人震惊就变强</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMV1lVj4AOFRgATQBZA-r-1213.html" class="grey" title="第3卷 第1211章 觉得我不能赢的虎英彩" target="_blank">第3卷 第1211章 觉得</a>
							<em class="org">VIP</em>
						</td>
						<td>2521035</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADFQPAdqWW5cNgtqV2dTbQA3" class="grey3" target="_blank">莽浪</a>
						</td>
						<td>
							<span>20-04-04 21:48</span>
						</td>
					</tr>
					<tr>
						<td>12</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29543559.html" class="green" target="_blank">都市全能逍遥人生</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1lVjMAOVRhATQBbQ-r-25.html" class="grey" title="第1卷 第二十三章，疫情全面控制，为英雄默哀！" target="_blank">第1卷 第二十三章，疫情</a>
						</td>
						<td>46085</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QOgdqWWhcNwtjV2dTZAA%25252BWzdQNANk" class="grey3" target="_blank">寒夜当家的</a>
						</td>
						<td>
							<span>20-04-04 21:47</span>
						</td>
					</tr>
					<tr>
						<td>13</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/28936734.html" class="green" target="_blank">万古最牛战神</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPF1pVjQAPFRjATIBYA-r-44.html" class="grey" title="第1卷 第四十二章 剑来" target="_blank">第1卷 第四十二章 剑来</a>
						</td>
						<td>94476</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQPwdqWWNcMwtiV2dTYwA2WzE%25253D" class="grey3" target="_blank">殺破狼</a>
						</td>
						<td>
							<span>20-04-04 21:46</span>
						</td>
					</tr>
					<tr>
						<td>14</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/20798233.html" class="green" target="_blank">都市最强捉妖系统</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoENF1nVj4AMlRmATIBZw-r-1574.html" class="grey" title="第1卷 第1550章迷魂" target="_blank">第1卷 第1550章迷魂</a>
							<em class="org">VIP</em>
						</td>
						<td>3366853</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADZQOwdrWWlcMgtpV2NTZAA5WzY%25253D" class="grey3" target="_blank">夕阳笙箫</a>
						</td>
						<td>
							<span>20-04-04 21:46</span>
						</td>
					</tr>
					<tr>
						<td>15</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30117730.html" class="green" target="_blank">我和婆婆的三年战争</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1hVjYAPVRjATIBZA-r-14.html" class="grey" title="顺利完婚" target="_blank">顺利完婚</a>
						</td>
						<td>28713</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOwdjWWtcPwtsV2lTYwA6WzVQPgNk" class="grey3" target="_blank">旺仔妈咪</a>
						</td>
						<td>
							<span>20-04-04 21:44</span>
						</td>
					</tr>
					<tr>
						<td>16</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/25833112.html" class="green" target="_blank">开局神级技能</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMV1oVjQAOVRlATABZg-r-42.html" class="grey" title="第1卷 第四十二章汪冷的暴怒！" target="_blank">第1卷 第四十二章汪冷的暴怒</a>
						</td>
						<td>88310</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOgdoWW1cPgtuV2JTYAA4WzM%25253D" class="grey3" target="_blank">牧人纯金羊</a>
						</td>
						<td>
							<span>20-04-04 21:43</span>
						</td>
					</tr>
					<tr>
						<td>17</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26661200.html" class="green" target="_blank">坑神攻略</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1mVjEAO1RmATEBZA-r-27.html" class="grey" title="第1卷 第27章 先吃饭" target="_blank">第1卷 第27章 先吃饭</a>
						</td>
						<td>65331</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWpcNgtrV2ZTbQA%25252FWzZQPwNn" class="grey3" target="_blank">天外飞魂</a>
						</td>
						<td>
							<span>20-04-04 21:42</span>
						</td>
					</tr>
					<tr>
						<td>18</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26911848.html" class="green" target="_blank">我有一座超级仙药园</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1pVjYAO1RsATUBbA-r-351.html" class="grey" title="第1卷 第三百四十八章 一锅端" target="_blank">第1卷 第三百四十八章</a>
							<em class="org">VIP</em>
						</td>
						<td>1014238</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQPQdvWW9cNwtjV2ZTbQA6Wzk%25253D" class="grey3" target="_blank">天外老道</a>
						</td>
						<td>
							<span>20-04-04 21:42</span>
						</td>
					</tr>
					<tr>
						<td>19</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29370450.html" class="green" target="_blank">从签到开始天下无敌</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1jVjAAOlRgATQBZA-r-70.html" class="grey" title="第1卷 第70章 狮子凶猛" target="_blank">第1卷 第70章 狮子</a>
						</td>
						<td>147344</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADZQOQduWWhcMwtpV2lTbAA4WzU%25253D" class="grey3" target="_blank">司马浪</a>
						</td>
						<td>
							<span>20-04-04 21:41</span>
						</td>
					</tr>
					<tr>
						<td>20</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29349502.html" class="green" target="_blank">开局召唤黑影兵团</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1jVjMAM1RhATEBZg-r-79.html" class="grey" title="第1卷 第77章:暗系异能到手" target="_blank">第1卷 第77章:暗系异</a>
						</td>
						<td>159539</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADFQMgdpWWJcMAtqV2dTYQA9" class="grey3" target="_blank">帝馨01</a>
						</td>
						<td>
							<span>20-04-04 21:40</span>
						</td>
					</tr>
					<tr>
						<td>21</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/20347295.html" class="green" target="_blank">贴身兵王的总裁老婆</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoENF1jVjMAPVRmATgBYQ-r-1872.html" class="grey" title="第2卷 第一千八百十九章 毫无进展" target="_blank">第2卷 第一千八百十九</a>
							<em class="org">VIP</em>
						</td>
						<td>3686634</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtuV2lTYgA9WzBQMANh" class="grey3" target="_blank">东方祭司</a>
						</td>
						<td>
							<span>20-04-04 21:40</span>
						</td>
					</tr>
					<tr>
						<td>22</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20069/" class="grey2">[都市/青春校园]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/23454469.html" class="green" target="_blank">无敌小民工</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEN11kVjIAPlRgATcBbQ-r-934.html" class="grey" title="第1卷 第0854章 聊千万别掏心窝" target="_blank">第1卷 第0854章 聊千万别</a>
							<em class="org">VIP</em>
						</td>
						<td>1755905</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADNQPgdjWW1cMAtrV2NTZgA8" class="grey3" target="_blank">披着红皮的狼</a>
						</td>
						<td>
							<span>20-04-04 21:39</span>
						</td>
					</tr>
					<tr>
						<td>23</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20069/" class="grey2">[都市/青春校园]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30104769.html" class="green" target="_blank">恋如墨香</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1hVjcAPlRjATcBbQ-r-20.html" class="grey" title="第1卷 15.人傻了" target="_blank">第1卷 15.人傻了</a>
						</td>
						<td>18396</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADNQMwdrWWJcPwtvV2VTZgA%25252B" class="grey3" target="_blank">流年cxy</a>
						</td>
						<td>
							<span>20-04-04 21:39</span>
						</td>
					</tr>
					<tr>
						<td>24</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20022/" class="grey2">[都市/娱乐明星]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30188477.html" class="green" target="_blank">死后穿越平行世界</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1hVj8AMlRgATYBYw-r-8.html" class="grey" title="第1卷 第六章 绿光" target="_blank">第1卷 第六章 绿光</a>
						</td>
						<td>8309</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWtcMwtsV2dTZQA2WzRQNANi" class="grey3" target="_blank">东双青木</a>
						</td>
						<td>
							<span>20-04-04 21:39</span>
						</td>
					</tr>
					<tr>
						<td>25</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29094185.html" class="green" target="_blank">都市绝品女婿</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1gVj4APlRlATkBYQ-r-146.html" class="grey" title="第146章 难以置信" target="_blank">第146章 难以置信</a>
							<em class="org">VIP</em>
						</td>
						<td>326411</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADZQOAdrWWxcNwtjV2VTZwA9WzU%25253D" class="grey3" target="_blank">小丑童话</a>
						</td>
						<td>
							<span>20-04-04 21:39</span>
						</td>
					</tr>
					<tr>
						<td>26</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26884516.html" class="green" target="_blank">不死药神在都市</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1oVj8APlRhATABYg-r-31.html" class="grey" title="第1卷 第27章 亲戚？呵呵！" target="_blank">第1卷 第27章 亲戚？呵</a>
						</td>
						<td>60976</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADZQOwdpWW9cMgtrV2JTZgA8WzA%25253D" class="grey3" target="_blank">火锅饺子</a>
						</td>
						<td>
							<span>20-04-04 21:39</span>
						</td>
					</tr>
					<tr>
						<td>27</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/22480721.html" class="green" target="_blank">都市少年狂兵</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoENl1kVj8AOlRjATMBZQ-r-975.html" class="grey" title="第1卷 967 上了热搜" target="_blank">第1卷 967 上了热搜</a>
							<em class="org">VIP</em>
						</td>
						<td>1828491</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADxQOwduWW1cNwtsV2BTYQA%25252F" class="grey3" target="_blank">脆弱的香蕉</a>
						</td>
						<td>
							<span>20-04-04 21:38</span>
						</td>
					</tr>
					<tr>
						<td>28</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29823373.html" class="green" target="_blank">当宝物成精后</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1oVjUAOVRnATYBZw-r-37.html" class="grey" title="第1卷 第三十三章：献祭生命得到的财富" target="_blank">第1卷 第三十三章：献祭生命</a>
						</td>
						<td>93402</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADJQMwdpWW9cMwtpV2NTYwA3" class="grey3" target="_blank">如月雪</a>
						</td>
						<td>
							<span>20-04-04 21:38</span>
						</td>
					</tr>
					<tr>
						<td>29</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30180838.html" class="green" target="_blank">史上最强帝仙</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1hVj8AOlRsATIBbA-r-16.html" class="grey" title="第1卷 第十六章 收徒（爆更第四章）" target="_blank">第1卷 第十六章 收徒（爆更</a>
						</td>
						<td>31234</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwdqWWpcNgtrV2BTYQA%25252BWzZQPgNi" class="grey3" target="_blank">七支刀</a>
						</td>
						<td>
							<span>20-04-04 21:38</span>
						</td>
					</tr>
					<tr>
						<td>30</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/28316518.html" class="green" target="_blank">都市最强神选王者</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPF1jVjYAPFRhATABbA-r-28.html" class="grey" title="第1卷 第二十八章我就是这么屌" target="_blank">第1卷 第二十八章我就是</a>
						</td>
						<td>60394</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQOQdiWWxcMQtiV2NTZQA2WzY%25253D" class="grey3" target="_blank">雪蝴蝶O</a>
						</td>
						<td>
							<span>20-04-04 21:38</span>
						</td>
					</tr>
					<tr>
						<td>31</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29542579.html" class="green" target="_blank">若遇众生</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1lVjMAOFRhATYBbQ-r-6.html" class="grey" title="第1卷 第六章 七原罪之懒惰" target="_blank">第1卷 第六章 七原罪之懒惰</a>
						</td>
						<td>7796</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNwtuV2NTbQA5WzRQNgNj" class="grey3" target="_blank">傅家小溢</a>
						</td>
						<td>
							<span>20-04-04 21:38</span>
						</td>
					</tr>
					<tr>
						<td>32</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26475490.html" class="green" target="_blank">我是神级电流</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1kVjAAP1RgATgBZA-r-373.html" class="grey" title="第322章 小试牛刀" target="_blank">第322章 小试牛刀</a>
							<em class="org">VIP</em>
						</td>
						<td>671908</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWpcNgtpV2JTYwA3WzdQNANs" class="grey3" target="_blank">雨落天河</a>
						</td>
						<td>
							<span>20-04-04 21:38</span>
						</td>
					</tr>
					<tr>
						<td>33</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/28423394.html" class="green" target="_blank">超级旅行家</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPF1kVjUAOVRnATgBYA-r-99.html" class="grey" title="第94章 美女的开导" target="_blank">第94章 美女的开导</a>
							<em class="org">VIP</em>
						</td>
						<td>227974</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQPQdpWWxcNgttV2BTZwA%25252BWzg%25253D" class="grey3" target="_blank">骤醒惊珏</a>
						</td>
						<td>
							<span>20-04-04 21:36</span>
						</td>
					</tr>
					<tr>
						<td>34</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29077504.html" class="green" target="_blank">我的房客是超能力者</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1gVjAAPVRhATEBYA-r-78.html" class="grey" title="第1卷 第74章 尚医生" target="_blank">第1卷 第74章 尚医</a>
						</td>
						<td>152773</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNwtuV2RTbAA2WzdQNQNh" class="grey3" target="_blank">周斯达的替身</a>
						</td>
						<td>
							<span>20-04-04 21:36</span>
						</td>
					</tr>
					<tr>
						<td>35</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/28389245.html" class="green" target="_blank">我活了上万年</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPF1jVj8AM1RmATUBYQ-r-68.html" class="grey" title="第1卷 068 气功" target="_blank">第1卷 068 气功</a>
						</td>
						<td>155737</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADJQOQdrWW9cPgttV2RTYwA%25252B" class="grey3" target="_blank">爱吃大樱桃</a>
						</td>
						<td>
							<span>20-04-04 21:35</span>
						</td>
					</tr>
					<tr>
						<td>36</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/28203929.html" class="green" target="_blank">农场大王</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPF1iVjcAOVRtATMBbQ-r-87.html" class="grey" title="第1卷 第八十三章 美白" target="_blank">第1卷 第八十三章 美白</a>
						</td>
						<td>188624</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQMgdvWW1cNwtsV2lTbQA7" class="grey3" target="_blank">晚上无风</a>
						</td>
						<td>
							<span>20-04-04 21:35</span>
						</td>
					</tr>
					<tr>
						<td>37</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29511280.html" class="green" target="_blank">魔神奶爸餐厅</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1lVjYAO1RmATkBZA-r-34.html" class="grey" title="第1卷 第三十四章 死神来了(下)" target="_blank">第1卷 第三十四章 死神来了</a>
						</td>
						<td>67686</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQMwdqWW1cPwtiV2JTYwA3WzM%25253D" class="grey3" target="_blank">乱七九怪</a>
						</td>
						<td>
							<span>20-04-04 21:35</span>
						</td>
					</tr>
					<tr>
						<td>38</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/28105511.html" class="green" target="_blank">我的女朋友是富二代</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPF1hVjcAP1RhATABZQ-r-110.html" class="grey" title="077 一触即发" target="_blank">077 一触即发</a>
						</td>
						<td>158359</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtsV2FTZAA5WzBQMgNs" class="grey3" target="_blank">堕落的丝</a>
						</td>
						<td>
							<span>20-04-04 21:34</span>
						</td>
					</tr>
					<tr>
						<td>39</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/23453663.html" class="green" target="_blank">都市之最强杂兵</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEN11kVjIAOVRiATcBZw-r-114.html" class="grey" title="第0112章：嚣张挑衅" target="_blank">第0112章：嚣张挑衅</a>
							<em class="org">VIP</em>
						</td>
						<td>336232</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQPwdqWWpcNAtsV2dTZwA%25252FWzY%25253D" class="grey3" target="_blank">太乄子</a>
						</td>
						<td>
							<span>20-04-04 21:34</span>
						</td>
					</tr>
					<tr>
						<td>40</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26320005.html" class="green" target="_blank">超级力工</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1jVjUAOlRkATEBYQ-r-441.html" class="grey" title="第2卷 第四百三十五章 田中幸雄" target="_blank">第2卷 第四百三十五章 田中幸雄</a>
							<em class="org">VIP</em>
						</td>
						<td>985945</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWtcNwtoV2NTYgA5WzNQPgNh" class="grey3" target="_blank">愚公慕雪</a>
						</td>
						<td>
							<span>20-04-04 21:33</span>
						</td>
					</tr>
					<tr>
						<td>41</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/27329072.html" class="green" target="_blank">桃花同载少年游</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEM11jVjUAM1RkATYBZg-r-115.html" class="grey" title="第1卷 第一百一十章还是客随主便吧！" target="_blank">第1卷 第一百一十章还是客</a>
						</td>
						<td>291041</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADJQMgdqWWtcMwtiV2RTZgA9" class="grey3" target="_blank">兀和</a>
						</td>
						<td>
							<span>20-04-04 21:33</span>
						</td>
					</tr>
					<tr>
						<td>42</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26989594.html" class="green" target="_blank">从武林高手到全民偶像</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1pVj8AM1RhATgBYA-r-290.html" class="grey" title="第1卷 第286章 心魔" target="_blank">第1卷 第286章 </a>
							<em class="org">VIP</em>
						</td>
						<td>608560</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQOwdpWWtcMgtrV2ZTZgA%25252BWzU%25253D" class="grey3" target="_blank">仗键走天涯</a>
						</td>
						<td>
							<span>20-04-04 21:33</span>
						</td>
					</tr>
					<tr>
						<td>43</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/28389399.html" class="green" target="_blank">首富小村长</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPF1jVj8AM1RnATgBbQ-r-67.html" class="grey" title="第1卷 067 仓皇美女" target="_blank">第1卷 067 仓皇美女</a>
						</td>
						<td>144271</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQPwduWWxcPwttV2JTbAA9WzU%25253D" class="grey3" target="_blank">喜欢吃小葡萄</a>
						</td>
						<td>
							<span>20-04-04 21:32</span>
						</td>
					</tr>
					<tr>
						<td>44</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29906190.html" class="green" target="_blank">我只想好好的陪陪我妈</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1pVjcAPFRlATgBZA-r-17.html" class="grey" title="第1卷 第十二章光天化日" target="_blank">第1卷 第十二章光天</a>
						</td>
						<td>23462</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QOgdqWWtcPgtpV2BTZwA%25252BWzVQNQNm" class="grey3" target="_blank">糖丑丑</a>
						</td>
						<td>
							<span>20-04-04 21:32</span>
						</td>
					</tr>
					<tr>
						<td>45</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/21488348.html" class="green" target="_blank">地球有个极品仙</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoENV1kVj8AMlRnATUBbA-r-521.html" class="grey" title="第4卷 第513章 叶凌君的学妹（求推荐！求订阅！）" target="_blank">第4卷 第513章 叶凌君</a>
							<em class="org">VIP</em>
						</td>
						<td>1040288</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtsV2lTYwA6WzhQNwNm" class="grey3" target="_blank">旗开嘚胜</a>
						</td>
						<td>
							<span>20-04-04 21:32</span>
						</td>
					</tr>
					<tr>
						<td>46</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26872140.html" class="green" target="_blank">医神女婿</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1oVjAAOFRlATUBZA-r-218.html" class="grey" title="第1卷 第二百一十八章" target="_blank">第1卷 第二百一十八章</a>
							<em class="org">VIP</em>
						</td>
						<td>951585</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdjWW1cMwtsV2dTZgA9Wzc%25253D" class="grey3" target="_blank">头孢喝点酒</a>
						</td>
						<td>
							<span>20-04-04 21:32</span>
						</td>
					</tr>
					<tr>
						<td>47</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29166827.html" class="green" target="_blank">张三丰的大弟子</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1hVjEAPFRsATMBYw-r-35.html" class="grey" title="第1卷 第三十五章 清微道长" target="_blank">第1卷 第三十五章 清微道</a>
						</td>
						<td>71775</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWtcNwtsV2FTYAA5WzZQNgNl" class="grey3" target="_blank">大意食柠檬</a>
						</td>
						<td>
							<span>20-04-04 21:31</span>
						</td>
					</tr>
					<tr>
						<td>48</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29733522.html" class="green" target="_blank">人至三十</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1nVjQAOVRhATMBZg-r-34.html" class="grey" title="第1卷 第32章 谈生意" target="_blank">第1卷 第32章 谈生意</a>
						</td>
						<td>52022</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNwtuV2RTZAA3WzdQNwNi" class="grey3" target="_blank">赤耳羘</a>
						</td>
						<td>
							<span>20-04-04 21:31</span>
						</td>
					</tr>
					<tr>
						<td>49</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/28231703.html" class="green" target="_blank">都市霸道赘婿</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPF1iVjQAO1RjATEBZw-r-120.html" class="grey" title="第109章 需要喝水吗？" target="_blank">第109章 需要喝水吗？</a>
							<em class="org">VIP</em>
						</td>
						<td>227459</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNwtvV2dTZQA%25252BWzJQNwNm" class="grey3" target="_blank">释苍穹</a>
						</td>
						<td>
							<span>20-04-04 21:31</span>
						</td>
					</tr>
					<tr>
						<td>50</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26268952.html" class="green" target="_blank">我的微信群聊强无敌</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1iVjEAMlRtATQBZg-r-258.html" class="grey" title="第1卷 第二百三十六章" target="_blank">第1卷 第二百三十六章</a>
							<em class="org">VIP</em>
						</td>
						<td>1244072</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADZQOgdvWW5cMwtiV2RTbAA8Wzg%25253D" class="grey3" target="_blank">塑料小玩具</a>
						</td>
						<td>
							<span>20-04-04 21:31</span>
						</td>
					</tr>
					<tr>
						<td>51</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29552866.html" class="green" target="_blank">最帅工程师</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1lVjIAOFRsATcBYg-r-40.html" class="grey" title="第1卷 第四十章 雨梦带回幸运" target="_blank">第1卷 第四十章 雨梦带回幸运</a>
						</td>
						<td>82045</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtoV2BTZAA%25252FWzBQMANm" class="grey3" target="_blank">八零火</a>
						</td>
						<td>
							<span>20-04-04 21:30</span>
						</td>
					</tr>
					<tr>
						<td>52</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30134596.html" class="green" target="_blank">天道掉了个系统</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1hVjQAPlRhATgBYg-r-7.html" class="grey" title="第1卷 6、关系户" target="_blank">第1卷 6、关系户</a>
						</td>
						<td>14079</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtrV2VTYAA3WzlQMwNm" class="grey3" target="_blank">辛火</a>
						</td>
						<td>
							<span>20-04-04 21:30</span>
						</td>
					</tr>
					<tr>
						<td>53</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/14975589.html" class="green" target="_blank">都市最强仙帝</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGkEMF1pVjAAP1RhATkBbQ-r-1671.html" class="grey" title="第1卷 第1610章 背后偷袭" target="_blank">第1卷 第1610章 背后偷</a>
							<em class="org">VIP</em>
						</td>
						<td>4917453</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOwdsWWhcNAttV2RTZAA9WzA%25253D" class="grey3" target="_blank">水月天蓬</a>
						</td>
						<td>
							<span>20-04-04 21:30</span>
						</td>
					</tr>
					<tr>
						<td>54</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/27277846.html" class="green" target="_blank">都市凡人长生战纪</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEM11iVjAAPVRsATUBYg-r-251.html" class="grey" title="第1卷 第234章 向主人汇报" target="_blank">第1卷 第234章 向主</a>
							<em class="org">VIP</em>
						</td>
						<td>524422</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QOgdqWWtcNAtpV2RTZAA4WzJQNANi" class="grey3" target="_blank">雷公楼主</a>
						</td>
						<td>
							<span>20-04-04 21:30</span>
						</td>
					</tr>
					<tr>
						<td>55</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29149961.html" class="green" target="_blank">七情绝帝</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1hVjMAM1RtATcBZQ-r-102.html" class="grey" title="第1卷 第九十三章 灯光下的人影" target="_blank">第1卷 第九十三章 灯光下的人影</a>
						</td>
						<td>209114</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWtcMwtpV2ZTbQA8WzFQMANt" class="grey3" target="_blank">饮者无争</a>
						</td>
						<td>
							<span>20-04-04 21:30</span>
						</td>
					</tr>
					<tr>
						<td>56</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30249024.html" class="green" target="_blank">我的手机时间提前了一天</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1iVjMAM1RkATMBYA-r-7.html" class="grey" title="第1卷 第七章：学霸级女同学！" target="_blank">第1卷 第七章：学</a>
						</td>
						<td>14889</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADBQMwdtWW5cNQtoV2BTbQA5" class="grey3" target="_blank">二十斤的大头</a>
						</td>
						<td>
							<span>20-04-04 21:29</span>
						</td>
					</tr>
					<tr>
						<td>57</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30088902.html" class="green" target="_blank">我的儿子真的出色</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1gVj8AMlRtATEBZg-r-6.html" class="grey" title="第1卷 第六章 大动作" target="_blank">第1卷 第六章 大动作</a>
						</td>
						<td>14668</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQMgdrWW5cNgtsV2BTZQA2WzE%25253D" class="grey3" target="_blank">疯狂的鲶鱼</a>
						</td>
						<td>
							<span>20-04-04 21:29</span>
						</td>
					</tr>
					<tr>
						<td>58</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29466196.html" class="green" target="_blank">其实我真的很有钱</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1kVjEAPFRlATgBYg-r-64.html" class="grey" title="第1卷 第六十二章 过奖了" target="_blank">第1卷 第六十二章 过奖</a>
						</td>
						<td>113762</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADZQOQdsWWJcNgtpV2BTZQA6WzI%25253D" class="grey3" target="_blank">夜炊</a>
						</td>
						<td>
							<span>20-04-04 21:29</span>
						</td>
					</tr>
					<tr>
						<td>59</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30042788.html" class="green" target="_blank">我有一个万界外卖系统</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1gVjMAOFRjATkBbA-r-19.html" class="grey" title="第1卷 第十九章 杂碎" target="_blank">第1卷 第十九章 杂</a>
						</td>
						<td>36525</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQPAdvWWhcMgtsV2dTZwA9WzU%25253D" class="grey3" target="_blank">浅烟爱你</a>
						</td>
						<td>
							<span>20-04-04 21:28</span>
						</td>
					</tr>
					<tr>
						<td>60</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29610858.html" class="green" target="_blank">美女总裁的超级赘婿</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1mVjYAOlRsATQBbA-r-60.html" class="grey" title="第1卷 第六十章 一梦千年" target="_blank">第1卷 第六十章 一梦</a>
						</td>
						<td>110180</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QOgdqWWtcMwtoV2lTZwA4WzBQMwNl" class="grey3" target="_blank">剑破八方</a>
						</td>
						<td>
							<span>20-04-04 21:27</span>
						</td>
					</tr>
					<tr>
						<td>61</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26571347.html" class="green" target="_blank">最完美之爱情公寓</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1lVjAAO1RnATUBYw-r-379.html" class="grey" title="第1卷 第333章 陈美嘉戳胎大作战" target="_blank">第1卷 第333章 陈美</a>
							<em class="org">VIP</em>
						</td>
						<td>957876</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNwtpV2ZTZQA5WzFQNgNj" class="grey3" target="_blank">爱吃喵的鱼L</a>
						</td>
						<td>
							<span>20-04-04 21:25</span>
						</td>
					</tr>
					<tr>
						<td>62</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/25793808.html" class="green" target="_blank">无敌从狂野吞噬开始</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMV1nVj4AOVRsATEBbA-r-676.html" class="grey" title="第1章杀手转生" target="_blank">第1章杀手转生</a>
							<em class="org">VIP</em>
						</td>
						<td>1457501</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQOAdsWWpcNAtoV2VTYwA4WzM%25253D" class="grey3" target="_blank">无齿狂徒</a>
						</td>
						<td>
							<span>20-04-04 21:24</span>
						</td>
					</tr>
					<tr>
						<td>63</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/28344704.html" class="green" target="_blank">离开那间书店</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPF1jVjMAPlRjATEBYA-r-53.html" class="grey" title="第1卷 第五十二章 前往京城" target="_blank">第1卷 第五十二章 前往京城</a>
						</td>
						<td>105225</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QOgdqWWtcPgtsV2ZTZgA%25252BWzhQMgNn" class="grey3" target="_blank">飞快骑摩托</a>
						</td>
						<td>
							<span>20-04-04 21:22</span>
						</td>
					</tr>
					<tr>
						<td>64</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29073996.html" class="green" target="_blank">我有一棵属性树</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1gVjAAOVRtATgBYg-r-70.html" class="grey" title="第1卷 第六十五章：富婆的魅力" target="_blank">第1卷 第六十五章：富婆的</a>
						</td>
						<td>145425</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQOAdvWWlcMwtvV2NTYgA4WzQ%25253D" class="grey3" target="_blank">巴扎辉</a>
						</td>
						<td>
							<span>20-04-04 21:20</span>
						</td>
					</tr>
					<tr>
						<td>65</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30245146.html" class="green" target="_blank">我有亿万手下</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1iVjMAP1RlATUBYg-r-6.html" class="grey" title="第1卷 第六章 碎了" target="_blank">第1卷 第六章 碎了</a>
						</td>
						<td>13192</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOwdjWWpcPwtiV2lTYAA3WzdQMgNj" class="grey3" target="_blank">林海茫茫</a>
						</td>
						<td>
							<span>20-04-04 21:20</span>
						</td>
					</tr>
					<tr>
						<td>66</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20022/" class="grey2">[都市/娱乐明星]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/27663702.html" class="green" target="_blank">不成名就回家继承亿万财产</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEM11mVjEAOVRjATEBZg-r-182.html" class="grey" title="第一百七十五章 武侠宗师的赞许" target="_blank">第一百七十五章 </a>
							<em class="org">VIP</em>
						</td>
						<td>453704</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgttV2dTYQA8WzZQNwNk" class="grey3" target="_blank">正俏阳</a>
						</td>
						<td>
							<span>20-04-04 21:18</span>
						</td>
					</tr>
					<tr>
						<td>67</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20069/" class="grey2">[都市/青春校园]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29954747.html" class="green" target="_blank">重生之从签到开始</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1pVjIAPlRjATUBYw-r-21.html" class="grey" title="第1卷 第二十章 厄运的铁钉" target="_blank">第1卷 第二十章 厄运的</a>
						</td>
						<td>41939</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWpcNgttV2NTYgA9WzBQNANm" class="grey3" target="_blank">夕阳几度秋</a>
						</td>
						<td>
							<span>20-04-04 21:18</span>
						</td>
					</tr>
					<tr>
						<td>68</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20069/" class="grey2">[都市/青春校园]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30236104.html" class="green" target="_blank">梦想人生之校园生涯</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1iVjQAPFRlATEBYA-r-7.html" class="grey" title="第1卷 初入大学（下)" target="_blank">第1卷 初入大学（下)</a>
						</td>
						<td>4443</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADZQOwdqWWhcPwttV2RTYgA6Wzk%25253D" class="grey3" target="_blank">相思断红肠</a>
						</td>
						<td>
							<span>20-04-04 21:17</span>
						</td>
					</tr>
					<tr>
						<td>69</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/27964930.html" class="green" target="_blank">界主的日常生活</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEM11pVjEAPlRtATIBZA-r-116.html" class="grey" title="第一百一十一章 尘埃落定" target="_blank">第一百一十一章 尘埃落定</a>
							<em class="org">VIP</em>
						</td>
						<td>322261</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWpcNAtsV2VTZwA5WzhQMgNj" class="grey3" target="_blank">雨点爸爸</a>
						</td>
						<td>
							<span>20-04-04 21:16</span>
						</td>
					</tr>
					<tr>
						<td>70</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26634801.html" class="green" target="_blank">诸天万界旅游团</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1mVjQAPlRsATEBZQ-r-38.html" class="grey" title="第1卷 加油 祖国" target="_blank">第1卷 加油 祖国</a>
						</td>
						<td>67601</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWNcMgttV2JTbAA8WzU%25253D" class="grey3" target="_blank">爱笑的蔬菜</a>
						</td>
						<td>
							<span>20-04-04 21:14</span>
						</td>
					</tr>
					<tr>
						<td>71</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29283349.html" class="green" target="_blank">我的爸爸有个世界</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1iVj8AOVRnATUBbQ-r-32.html" class="grey" title="第1卷 这个奶奶身上好臭" target="_blank">第1卷 这个奶奶身上好臭</a>
						</td>
						<td>49378</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtrV2RTYwA8WzNQMQNs" class="grey3" target="_blank">岩旭世界</a>
						</td>
						<td>
							<span>20-04-04 21:13</span>
						</td>
					</tr>
					<tr>
						<td>72</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29624143.html" class="green" target="_blank">无敌从当灵术师开始</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1mVjUAPlRlATUBZw-r-23.html" class="grey" title="第1卷 第二十二章 救人" target="_blank">第1卷 第二十二章 救</a>
						</td>
						<td>43405</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQPgdjWW1cNwtoV2hTZQA7WzE%25253D" class="grey3" target="_blank">幽龙梦</a>
						</td>
						<td>
							<span>20-04-04 21:13</span>
						</td>
					</tr>
					<tr>
						<td>73</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26758474.html" class="green" target="_blank">最强人生主宰</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1nVjIAMlRgATYBYA-r-315.html" class="grey" title="第1卷 253干活" target="_blank">第1卷 253干活</a>
							<em class="org">VIP</em>
						</td>
						<td>963638</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQOwdjWW9cMAtuV2JTbAA%25252FWzc%25253D" class="grey3" target="_blank">星屑晨光</a>
						</td>
						<td>
							<span>20-04-04 21:11</span>
						</td>
					</tr>
					<tr>
						<td>74</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20022/" class="grey2">[都市/娱乐明星]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30175407.html" class="green" target="_blank">瑞雪封年</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1hVjAAP1RgATEBYw-r-5.html" class="grey" title="第1卷 开学第一天" target="_blank">第1卷 开学第一天</a>
						</td>
						<td>5241</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOwdjWWtcPwtoV2lTZgA9WzVQMgNg" class="grey3" target="_blank">小酌一杯酒</a>
						</td>
						<td>
							<span>20-04-04 21:10</span>
						</td>
					</tr>
					<tr>
						<td>75</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/14860194.html" class="green" target="_blank">全职厨师</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGkEMF1oVjEAOlRlATgBYA-r-1248.html" class="grey" title="第1卷 第一千二百四十七章 真诚道歉" target="_blank">第1卷 第一千二百四十七章 真诚</a>
							<em class="org">VIP</em>
						</td>
						<td>2683697</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQOQdiWWNcPwtsV2BTYQ%25253D%25253D" class="grey3" target="_blank">花羽少</a>
						</td>
						<td>
							<span>20-04-04 21:10</span>
						</td>
					</tr>
					<tr>
						<td>76</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/27424618.html" class="green" target="_blank">强悍人生之万千角色系统</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEM11kVjUAPlRiATABbA-r-197.html" class="grey" title="第1卷 第195章 既然你们这么想受虐、那就成全你们" target="_blank">第1卷 第195章</a>
							<em class="org">VIP</em>
						</td>
						<td>412675</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQMwdtWWtcMwtiV2ZTYwA2Wzc%25253D" class="grey3" target="_blank">沧海有龙</a>
						</td>
						<td>
							<span>20-04-04 21:10</span>
						</td>
					</tr>
					<tr>
						<td>77</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/25884464.html" class="green" target="_blank">惹谁都别惹医圣大人</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMV1oVj8APlRgATcBYA-r-602.html" class="grey" title="第1卷 第六百零三章 惊变" target="_blank">第1卷 第六百零三章 </a>
							<em class="org">VIP</em>
						</td>
						<td>1232182</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADZQOwdiWWtcMQtoV2JTYgA3WzA%25253D" class="grey3" target="_blank">谁也惹不起</a>
						</td>
						<td>
							<span>20-04-04 21:10</span>
						</td>
					</tr>
					<tr>
						<td>78</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29500111.html" class="green" target="_blank">开挂的全科医生</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1lVjcAOlRlATABZQ-r-31.html" class="grey" title="第1卷 第三十一章 雷明对于陈母的判断！" target="_blank">第1卷 第三十一章 雷明对</a>
						</td>
						<td>51145</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNwtqV2ZTYwA9WzdQNgNg" class="grey3" target="_blank">掉了尾巴的狼</a>
						</td>
						<td>
							<span>20-04-04 21:08</span>
						</td>
					</tr>
					<tr>
						<td>79</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30102553.html" class="green" target="_blank">爱情公寓之我的大力我做主</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1hVjcAOFRhATQBZw-r-8.html" class="grey" title="第1卷 第八章 张伟要追咖喱酱？" target="_blank">第1卷 第八章 </a>
						</td>
						<td>17340</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QOgdqWWhcNgtoV2lTZwA2WzBQMwNk" class="grey3" target="_blank">迷茫狗子</a>
						</td>
						<td>
							<span>20-04-04 21:08</span>
						</td>
					</tr>
					<tr>
						<td>80</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/27406530.html" class="green" target="_blank">妹妹别打我</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEM11kVjcAPFRhATIBZA-r-123.html" class="grey" title="第2卷 第一一六章 没意思" target="_blank">第2卷 第一一六章 没意思</a>
							<em class="org">VIP</em>
						</td>
						<td>309838</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWtcNQttV2lTZQA6WzNQNgNg" class="grey3" target="_blank">翎宇落处</a>
						</td>
						<td>
							<span>20-04-04 21:08</span>
						</td>
					</tr>
					<tr>
						<td>81</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29864234.html" class="green" target="_blank">赘婿也能翻天</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1oVjEAPlRmATIBYA-r-13.html" class="grey" title="第1卷 第十一章 南宫问天" target="_blank">第1卷 第十一章 南宫问天</a>
						</td>
						<td>20378</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtjV2ZTYgA9WzlQNQNs" class="grey3" target="_blank">大虾瓜</a>
						</td>
						<td>
							<span>20-04-04 21:07</span>
						</td>
					</tr>
					<tr>
						<td>82</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20069/" class="grey2">[都市/青春校园]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29556492.html" class="green" target="_blank">你是我的全糖百分百</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1lVjIAPFRgATgBZg-r-21.html" class="grey" title="第1卷 游乐园之旅（一）" target="_blank">第1卷 游乐园之旅（一</a>
						</td>
						<td>22360</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQOAdsWWhcMQtqV2VTYAA%25252FWzY%25253D" class="grey3" target="_blank">阪元宿宿</a>
						</td>
						<td>
							<span>20-04-04 21:06</span>
						</td>
					</tr>
					<tr>
						<td>83</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26835812.html" class="green" target="_blank">超级捡漏系统</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1oVjQAP1RsATABZg-r-313.html" class="grey" title="第1卷 307 新的技能" target="_blank">第1卷 307 新的技能</a>
							<em class="org">VIP</em>
						</td>
						<td>636441</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWpcNgtvV2JTZwA9WzVQNANn" class="grey3" target="_blank">我是小嘟嘟</a>
						</td>
						<td>
							<span>20-04-04 21:05</span>
						</td>
					</tr>
					<tr>
						<td>84</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/27469881.html" class="green" target="_blank">二师兄实在太不稳健了</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEM11kVjEAM1RsATkBZQ-r-149.html" class="grey" title="第1卷 第一百五十章 谁是抵罪羊" target="_blank">第1卷 第一百五十章</a>
							<em class="org">VIP</em>
						</td>
						<td>384609</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtrV2ZTbAA5WzVQMANi" class="grey3" target="_blank">疯编110</a>
						</td>
						<td>
							<span>20-04-04 21:05</span>
						</td>
					</tr>
					<tr>
						<td>85</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/23475205.html" class="green" target="_blank">都市极品医神</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEN11kVjAAP1RmATEBYQ-r-3101.html" class="grey" title="第2卷 第2907章 再见冥殿！（九更！求票！）" target="_blank">第2卷 第2907章 再见冥</a>
							<em class="org">VIP</em>
						</td>
						<td>6019735</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgtiV2dTZgA3WzNQPgNg" class="grey3" target="_blank">风会笑</a>
						</td>
						<td>
							<span>20-04-04 21:05</span>
						</td>
					</tr>
					<tr>
						<td>86</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30244160.html" class="green" target="_blank">我的极品签到系统</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1iVjMAPlRlATcBZA-r-5.html" class="grey" title="第3卷 第四章:演员的必修之路!" target="_blank">第3卷 第四章:演员的必</a>
						</td>
						<td>10097</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOQdsWW1cNQtuV2hTZgA9" class="grey3" target="_blank">.打更人</a>
						</td>
						<td>
							<span>20-04-04 21:04</span>
						</td>
					</tr>
					<tr>
						<td>87</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20025/" class="grey2">[都市/商战职场]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/21900800.html" class="green" target="_blank">美女总裁的超级狂兵</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoENV1pVjcAOlRsATEBZA-r-1798.html" class="grey" title="第3卷 第1787章 揣着明白装糊涂" target="_blank">第3卷 第1787章 </a>
							<em class="org">VIP</em>
						</td>
						<td>3680234</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNgttV2VTbAA4WzFQPwNg" class="grey3" target="_blank">巫小胖</a>
						</td>
						<td>
							<span>20-04-04 21:03</span>
						</td>
					</tr>
					<tr>
						<td>88</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26763941.html" class="green" target="_blank">重生都市之神皇</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1nVjEAOVRtATUBZQ-r-137.html" class="grey" title="第2卷 第一百三十四章 打破人体极限，鸿蒙天体" target="_blank">第2卷 第一百三十四章 打</a>
							<em class="org">VIP</em>
						</td>
						<td>317560</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQMwdsWWNcPgttV2VTZAA%25252FWzI%25253D" class="grey3" target="_blank">思十六</a>
						</td>
						<td>
							<span>20-04-04 21:03</span>
						</td>
					</tr>
					<tr>
						<td>89</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29939987.html" class="green" target="_blank">神豪游戏从签到开始</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1pVjQAM1RtATkBYw-r-34.html" class="grey" title="第1卷 第33章看不到明天落山的太阳？" target="_blank">第1卷 第33章看不到</a>
						</td>
						<td>67282</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQPwdvWW5cMwtpV2lTZQA9WzI%25253D" class="grey3" target="_blank">何焱焱</a>
						</td>
						<td>
							<span>20-04-04 21:02</span>
						</td>
					</tr>
					<tr>
						<td>90</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/26138749.html" class="green" target="_blank">考核者</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEMl1hVjQAMlRjATUBbQ-r-241.html" class="grey" title="第1卷 第236章 比试？" target="_blank">第1卷 第236章 比试？</a>
						</td>
						<td>751071</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWpcNgttV2FTYgA8WzNQNgNk" class="grey3" target="_blank">以文入圣</a>
						</td>
						<td>
							<span>20-04-04 21:01</span>
						</td>
					</tr>
					<tr>
						<td>91</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30253482.html" class="green" target="_blank">我在诸天万界打卡签到</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1iVjIAOVRgATkBZg-r-4.html" class="grey" title="第1卷 第4章 前往天龙世界签到" target="_blank">第1卷 第4章 前往</a>
						</td>
						<td>10633</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWtcNgtqV2dTZAA8WzVQNgNt" class="grey3" target="_blank">耳东二子文</a>
						</td>
						<td>
							<span>20-04-04 21:01</span>
						</td>
					</tr>
					<tr>
						<td>92</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29309357.html" class="green" target="_blank">豪门第一狂婿</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1jVjcAM1RnATQBYw-r-39.html" class="grey" title="第1卷 第39章 人前人后！" target="_blank">第1卷 第39章 人前人后！</a>
						</td>
						<td>80963</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQPAdtWWxcMQtsV2BTZwA8Wzc%25253D" class="grey3" target="_blank">白猫不是猫</a>
						</td>
						<td>
							<span>20-04-04 21:00</span>
						</td>
					</tr>
					<tr>
						<td>93</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30100864.html" class="green" target="_blank">崛起从签到作死开始</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1hVjcAOlRsATcBYA-r-8.html" class="grey" title="第1卷 第八章 武根立誓" target="_blank">第1卷 第八章 武根立</a>
						</td>
						<td>21762</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQOQdrWW9cPwtiV2RTYAA8WzM%25253D" class="grey3" target="_blank">渡劫飞升</a>
						</td>
						<td>
							<span>20-04-04 21:00</span>
						</td>
					</tr>
					<tr>
						<td>94</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20027/" class="grey2">[都市/都市异能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/23225361.html" class="green" target="_blank">做保镖的那些日子</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEN11iVjUAP1RnATcBZQ-r-54.html" class="grey" title="第1卷 第二十章 你们随意，我无敌。" target="_blank">第1卷 第二十章 你们随</a>
						</td>
						<td>45073</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQMwduWW9cMQtoV2lTYwA9WzY%25253D" class="grey3" target="_blank">打小就欠</a>
						</td>
						<td>
							<span>20-04-04 21:00</span>
						</td>
					</tr>
					<tr>
						<td>95</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20069/" class="grey2">[都市/青春校园]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29477926.html" class="green" target="_blank">情商进化</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1kVjAAPVRtATMBYg-r-28.html" class="grey" title="第1卷 第二十七章 清明追思 国家永念" target="_blank">第1卷 第二十七章 清明追思 国</a>
						</td>
						<td>61992</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADZQOQdjWW5cPwttV2FTZwA6WzI%25253D" class="grey3" target="_blank">兰岚麒</a>
						</td>
						<td>
							<span>20-04-04 21:00</span>
						</td>
					</tr>
					<tr>
						<td>96</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20069/" class="grey2">[都市/青春校园]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/27963988.html" class="green" target="_blank">我从天庭来</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEM11pVjEAOVRtATkBbA-r-68.html" class="grey" title="第1卷 第六十四章 陷害？" target="_blank">第1卷 第六十四章 陷害？</a>
						</td>
						<td>143131</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QPwduWWpcNwtvV2VTZgA7WzJQMQNm" class="grey3" target="_blank">辰孖</a>
						</td>
						<td>
							<span>20-04-04 21:00</span>
						</td>
					</tr>
					<tr>
						<td>97</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20026/" class="grey2">[都市/异术超能]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30193182.html" class="green" target="_blank">九天秩序</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1hVj4AOVRlATkBZg-r-7.html" class="grey" title="第1卷 第7章 任务腕表" target="_blank">第1卷 第7章 任务腕表</a>
						</td>
						<td>15720</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADRQOAdqWWpcNgtiV2FTZAA%25252BWzlQNwNk" class="grey3" target="_blank">微笑的橘猫</a>
						</td>
						<td>
							<span>20-04-04 21:00</span>
						</td>
					</tr>
					<tr>
						<td>98</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/29985697.html" class="green" target="_blank">开局继承世界首富</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEPV1pVj8AP1RiATgBYw-r-26.html" class="grey" title="第1卷 第二十六章 哥，帮人家捏捏脚嘛~" target="_blank">第1卷 第二十六章 哥，</a>
						</td>
						<td>58414</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/AD1QOAdsWW5cNgtqV2FTbAA3" class="grey3" target="_blank">潞西白鸥</a>
						</td>
						<td>
							<span>20-04-04 21:00</span>
						</td>
					</tr>
					<tr>
						<td>99</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/30173451.html" class="green" target="_blank">首富从黄瓜卖疯开始</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGsENF1hVjAAOVRgATQBZQ-r-13.html" class="grey" title="第1卷 第13章 管饱" target="_blank">第1卷 第13章 管饱</a>
						</td>
						<td>20329</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADdQPQdtWWlcPwtiV2BTbAA6Wzg%25253D" class="grey3" target="_blank">大兵</a>
						</td>
						<td>
							<span>20-04-04 21:00</span>
						</td>
					</tr>
					<tr>
						<td>100</td>
						<td>
							<a href="http://chuangshi.qq.com/bk/ds/xx20020/" class="grey2">[都市/都市生活]</a>
						</td>
						<td align="left">
							<a href="http://chuangshi.qq.com/bk/ds/27480392.html" class="green" target="_blank">我把三个小舅子逼成扶姐魔</a>
							<a href="http://chuangshi.qq.com/bk/ds/AGoEM11kVj8AOlRnATgBZg-r-294.html" class="grey" title="第1卷 第【294】章：上演英雄救美" target="_blank">第1卷 第【29</a>
							<em class="org">VIP</em>
						</td>
						<td>608071</td>
						<td>
							<a rel="nofollow" href="http://account.book.qq.com/bk/author/ADZQOgdrWWpcPgtoV2dTYAA6WzM%25253D" class="grey3" target="_blank">老牛拉破车</a>
						</td>
						<td>
							<span>20-04-04 21:00</span>
						</td>
					</tr>
				</table>
			</div>
			<div class="rightbox">
				<div class="main5">
					<div class="list02 right">
						<div class="allBookTitle">
							<h3 class="redico">本周强推</h3>
						</div>
						<div id="recommendListByWeek" class="show02">
							<ul class="storylist focus_tablist cf">
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/yx/" target="_blank">[游戏]</a>
									</span>
									<a bid="28646362" target="_blank" href="http://chuangshi.qq.com/bk/yx/28646362.html">全世界都在演我怎么办</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/xh/" target="_blank">[玄幻]</a>
									</span>
									<a bid="29856338" target="_blank" href="http://chuangshi.qq.com/bk/xh/29856338.html">我师兄实在太谦逊了</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/2cy/" target="_blank">[轻小说]</a>
									</span>
									<a bid="28462646" target="_blank" href="http://chuangshi.qq.com/bk/2cy/28462646.html">斗破之最强老公</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/js/" target="_blank">[军事]</a>
									</span>
									<a bid="29279452" target="_blank" href="http://chuangshi.qq.com/bk/js/29279452.html">从我是特种兵开始阅读变强</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/xh/" target="_blank">[玄幻]</a>
									</span>
									<a bid="29183669" target="_blank" href="http://chuangshi.qq.com/bk/xh/29183669.html">一不小心挖出一个仙帝</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/xh/" target="_blank">[玄幻]</a>
									</span>
									<a bid="28357739" target="_blank" href="http://chuangshi.qq.com/bk/xh/28357739.html">大秦之召唤诸天</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/ls/" target="_blank">[历史]</a>
									</span>
									<a bid="26315802" target="_blank" href="http://chuangshi.qq.com/bk/ls/26315802.html">我有一个名将系统</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/xh/" target="_blank">[玄幻]</a>
									</span>
									<a bid="26674523" target="_blank" href="http://chuangshi.qq.com/bk/xh/26674523.html">史上第一前夫</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/kh/" target="_blank">[科幻]</a>
									</span>
									<a bid="25266350" target="_blank" href="http://chuangshi.qq.com/bk/kh/25266350.html">我是个莫得感情的刺客</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/ds/" target="_blank">[都市]</a>
									</span>
									<a bid="27239528" target="_blank" href="http://chuangshi.qq.com/bk/ds/27239528.html">带着系统做巨星</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/2cy/" target="_blank">[轻小说]</a>
									</span>
									<a bid="29530873" target="_blank" href="http://chuangshi.qq.com/bk/2cy/29530873.html">从斗罗开始成神</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/yx/" target="_blank">[游戏]</a>
									</span>
									<a bid="28401360" target="_blank" href="http://chuangshi.qq.com/bk/yx/28401360.html">从英雄联盟开始爆红全网</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/xh/" target="_blank">[玄幻]</a>
									</span>
									<a bid="29450662" target="_blank" href="http://chuangshi.qq.com/bk/xh/29450662.html">从执掌鸿蒙开始垂钓诸天</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/xh/" target="_blank">[玄幻]</a>
									</span>
									<a bid="29238022" target="_blank" href="http://chuangshi.qq.com/bk/xh/29238022.html">大师兄万古无敌</a>
								</li>
								<li>
									<b></b>
									<span>
										<a href="http://chuangshi.qq.com/bk/xh/" target="_blank">[玄幻]</a>
									</span>
									<a bid="29317059" target="_blank" href="http://chuangshi.qq.com/bk/xh/29317059.html">召唤神话之大秦天帝</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bookListPage">
			<div class="Pagination">
				<a class='prevBtn disable' href='###'>上一页</a>
				<a class='nextBtn disable' href='###'>下一页</a>
				<em>到</em>
				<input id='pageInput' type='text' onkeyup="var pageInput=document.getElementById('pageInput').value;if(pageInput>1)pageInput=1 ;document.getElementById('pageConfirmBtn').href='http://chuangshi.qq.com/bk/ds/p/'+pageInput+'.html'" value="1">
				<em>页/1页</em>
				<a id='pageConfirmBtn' totalpage='1' class='confirmBtn' href='javascript:;'>确定</a>
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
					<img width="122" height="52" src="static/picture/footer_img1.png">
				</a>
				<a href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external nofollow">
					<img width="122" height="52" src="static/picture/footer_img2.png">
				</a>
				<a href="http://beian.miit.gov.cn/state/outPortal/loginPortal.action" target="_blank" rel="external nofollow">
					<img width="122" height="52" src="static/picture/footer_img3.png">
				</a>
				<a href="http://www.12377.cn/" target="_blank" rel="external nofollow">
					<img width="122" height="52" src="static/picture/footer_img4.png">
				</a>
				<a href="http://www.wenming.cn/" target="_blank" rel="external nofollow">
					<img width="122" height="52" src="static/picture/footer_img5.png">
				</a>
				<a href="http://www.shjbzx.cn/" target="_blank" rel="external nofollow">
					<img width="122" height="52" src="static/picture/footer_img6.png">
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
				<img src="static/picture/code02.png" width="80" height="80" alt="" />
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
				<img src="static/picture/code03.png" width="80" height="80" alt="" />
			</span>
			<p class="code_txt">QQ阅读
				<br>客户端下载</p>
		</div>
	</div>
	<script type="text/javascript" src="static/js/base.js"></script>
	<script type="text/javascript" src="static/js/allbooks.js"></script>
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
									'url' : "ACtVNAJqBnhQYQNzBSo",
									'bid' : '',
									'uuid' : '0',
									'encrypt' : 1
								};
				
							CS.page.statistics.init(commonResourceUrl, refreshKeyUrl, requestStatLogUrl, requestStatLogData);
						});
					
				        var searchResultUrl = "/search/searchindex/type/p1/wd/p2.html";
				
				        $(function () {
				            //初始化搜索框
				            CS.searchInput.init(searchResultUrl, 'p_navtit_hover');
				            //qq阅读广告条
				            CS.qqReadAd.init();
				        });
	</script>
</body>
</html>