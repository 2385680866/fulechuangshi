;(function($){$.fn.pagination=function(pageCount,opts){opts=$.extend({prevPageText:"上一页",nextPageText:"下一页",middleDisplayPageCount:4,showPageInput:false,callback:function(){return false;}},opts||{});return this.each(function(){var currentPage=1,parentNode=this;function pageLinkHandler(pageIndex,evt){currentPage=pageIndex;render();var continuePropagation=opts.callback(pageIndex,parentNode);if(!continuePropagation&&evt){if(evt.stopPropagation){evt.stopPropagation();}else{evt.cancelBubble=true;}}
return continuePropagation;}
function getClickHandler(pageIndex){return function(evt){return pageLinkHandler(pageIndex,evt);};}
function getLinkItem(pageIndex,config){pageIndex=pageIndex<1?1:pageIndex;pageIndex=pageIndex<pageCount?pageIndex:pageCount;config=$.extend({text:pageIndex,classes:''},config||{});var $link=null;if(pageIndex===currentPage){$link=$('<span class="current">'+config.text+'</span>');}else{$link=$('<a href="javascript:;">'+config.text+'</a>').on('click',getClickHandler(pageIndex));}
if(config.classes){$link.addClass(config.classes);}
return $link;}
function render(){if(!pageCount||pageCount===1){$(parentNode).empty();return;}
var frag=document.createDocumentFragment(),$frag=$(frag),halfPageCount=Math.ceil(opts.middleDisplayPageCount/2);var $prevPageLink=getLinkItem(currentPage-1,{text:opts.prevPageText});$frag.append($prevPageLink);var $firstPageLink=getLinkItem(1,{text:1});$frag.append($firstPageLink);if(currentPage-halfPageCount-2>0){$frag.append('<span>...</span>');}
var startPage=currentPage-halfPageCount>1?currentPage-halfPageCount:2,endPage=currentPage+halfPageCount<pageCount?currentPage+halfPageCount:pageCount-1;for(var i=startPage;i<=endPage;i++){var $pageLink=getLinkItem(i,{text:i});$frag.append($pageLink);}
if(currentPage+halfPageCount+1<pageCount){$frag.append('<span>...</span>');}
if(pageCount>1){var $lastPageLink=getLinkItem(pageCount,{text:pageCount});$frag.append($lastPageLink);}
var $nextPageLink=getLinkItem(currentPage+1,{text:opts.nextPageText});$frag.append($nextPageLink);if(opts.showPageInput){var $pageInput=$('<input class="booksInput" type="text" />');$frag.append($pageInput);var $pageBtn=$('<a href="'+opts.link_to+'">GO</a>');$pageBtn.on('click',function(evt){var pageIndex=$pageInput.val();if(/^[1-9]+.?[0-9]*$/.test(pageIndex)){pageIndex=parseInt(pageIndex,10);if(pageIndex>pageCount){pageIndex=pageCount;}
pageLinkHandler(pageIndex,evt);}
return false;});$frag.append($pageBtn);}
$container=$('<div class="pageinner cf" ></div>');$container.append($frag);$(parentNode).empty().append($container);}
render();});};})(jQuery);;(function($){var _util=CS.util;var _params={},_pager=null;function init(friendId,getFriendBookshelfAjaxUrl){_params.friendId=friendId||0;_params.getFriendBookshelfAjaxUrl=getFriendBookshelfAjaxUrl||'';_getFriendBookshelf(1,_params.friendId,'');_bindEvent();}
function _bindEvent(){$('#showAllCollectBooksBtn').on('click',function(){var friendId=$(this).attr('friendid');_pager=null;_getFriendBookshelf(1,friendId,'');_switchBookshelfTab(this);return false;});$('#collectBookList a[favoriteid]').on('click',function(){var friendId=$(this).attr('friendid'),favoriteId=$(this).attr('favoriteid');_pager=null;_getFriendBookshelf(1,friendId,favoriteId);_switchBookshelfTab(this);return false;});}
function _getFriendBookshelf(pageIndex,friendId,favoriteId){var $bookList=$('#friend_bookshelf'),$pager=$('#pager');pageIndex=pageIndex||1;friendId=friendId||'';favoriteId=favoriteId||'';_util.request({url:_params.getFriendBookshelfAjaxUrl,data:{"pageIndex":pageIndex,"friend_id":friendId,"Favoriteid":favoriteId},type:'get',dataType:"json",success:function(data){if(data&&data.ListHTMl){$bookList.html(data.ListHTMl);if(!_pager){_pager=$pager.pagination(data.PageCount,{'callback':function(pageNo){_getFriendBookshelf(pageNo,friendId,favoriteId);}});}}else{$bookList.empty();$pager.empty();}}});}
function _switchBookshelfTab(tab){var $tab=$(tab);$('#collectBookList a[friendid]').each(function(index,el){var $el=$(el);$el.html($el.text());});$tab.html("<b class='gray3'>"+$tab.text()+"</b>");}
_util.initNameSpace("CS.page.friend");CS.page.friend.index={"init":init};})(jQuery);