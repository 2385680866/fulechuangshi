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