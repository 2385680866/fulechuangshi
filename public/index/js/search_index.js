;(function($){var _dialog=CS.dialog;var _defaultSearchType='all';function search(searchResultUrl){this.searchResultUrl=searchResultUrl||'';this.defaultInputValue='';}
search.prototype={bindSearchInputEvent:function(searchInput,searchType){var me=this,$searchInput=null,$searchType=null;if(typeof searchInput==='string'){$searchInput=$('#'+searchInput);}else if(searchInput.parentNode){$searchInput=$(searchInput);}else if(searchInput.jquery){$searchInput=searchInput;}
if(typeof searchType==='string'){$searchType=$('#'+searchType);}else if(searchType.parentNode){$searchType=$(searchType);}else if(searchType.jquery){$searchType=searchType;}
if(!$searchInput||!$searchType){return;}
this.defaultInputValue=$searchInput.attr("def");$searchInput.on('focus',function(){var $this=$(this);if($this.val()===me.defaultInputValue){$this.val('');}}).on('blur',function(){var $this=$(this);if($this.val()===''){$this.val(me.defaultInputValue);}}).on('keyup',function(event){if(event.keyCode==13){var searchType=$searchType.length>1?$searchType.filter(':checked').val():$searchType.attr('type');return me.submitSearch($searchInput.val(),searchType);}});},submitSearch:function(searchValue,searchType){searchValue=$.trim(searchValue);searchType=searchType||_defaultSearchType;searchValue=this.filterSearchWord(searchValue);if(searchValue.length===0){_dialog.alert("请输入搜索内容");return false;}
window.location.href=this.searchResultUrl+"?type="+searchType+"&wd="+searchValue;return false;},filterSearchWord:function(str){var ret='',strChar='';for(var i=0,len=str.length;i<len;i++){strChar=str.charAt(i);if(/^[A-Za-z0-9\u4E00-\u9FFF：，]{1,15}$/.test(strChar)){ret+=strChar;}}
return ret;}};CS.util.initNameSpace("CS");CS.search=search;})(jQuery);;(function($){var _search=CS.search;var _params={};function init(searchResultUrl){_params.searchResultUrl=searchResultUrl||'';_bindEvent();}
function _bindEvent(){var search=new _search(_params.searchResultUrl);search.bindSearchInputEvent($('#searchInput'),$(":radio[name='find_type']"));$('#searchBtn').bind('click',function(){var searchValue=$("#searchInput").val(),searchType=$(":radio[name='find_type']:checked").val();return search.submitSearch(searchValue,searchType);});}
CS.util.initNameSpace("CS.page.search");CS.page.search.index={"init":init};})(jQuery);