//ID
if(typeof(khid)=="undefined"){
    var khid=5000;
}
if(typeof(comid)=="undefined"){
    var comid=46;
}
//pvar
//if(typeof(pvar)=="undefined"){
//    var pvar='NO';
//}
//当前页地址
var book_lsURL  = window.location.href;
var url_referer = document.referrer;

if(url_referer == '') {
    url_referer = '_null';
}

if(sid == null||sid == ''){
    var sid=1;
}
if(kw == '') {
    var kw = '-';
}
if(_gname == '') {
    var _gname = "-";
}




document.writeln("<style>");
document.writeln("body, div, p, ul, li, dl, dt, dd, h1, h2, h3, h4, h5, h6, form, input, textarea, select, table, tr, td, header, nav, section, article, footer { margin: 0; padding: 0; }");
document.writeln("body { font-size: 12px; color: #444; font-family: microsoft yahei,Verdana,Arial,\"微软雅黑\";}");
document.writeln("input, textarea {outline: none;}");
document.writeln("textarea {box-sizing: inherit;}");
document.writeln("img { border: none; }");
document.writeln("ul, ol { list-style-type: none; }");
document.writeln("a { font-size: 12px; text-decoration: none; color: #444; }");
document.writeln(".clearfix:after { content: '.'; height: 0; visibility: hidden; display: block; clear: both;}");

document.writeln("#lyb { width: 100%; padding-top:30px; }");
document.writeln("#lyb .lybmain {}");
document.writeln("#lyb h3 {width: 100%; height: 72px; line-height: 72px; text-align: center; text-indent: -9999px; font-size: 12px; background: url(http://cdn.hsh568.cn/lyb/bg/lybHtop.png) no-repeat center; }");
document.writeln("#lyb .lybBox { width: 100%; -background: #fff; overflow: hidden; }");

document.writeln("#lyb #leftcform { width: 30%; -background: #fff; float: left;}");
document.writeln("#lyb .lybLeft .leftMain { padding: 15px; }");
document.writeln("#lyb .lybLeft .leftMain h4 { width: 100%; height: 52px; background: #ffc200 url(http://cdn.hsh568.cn/lyb/bg/dianhua.png) no-repeat center; color:#fff; font-size:24px; text-align:center; line-height:52px; margin: 0 auto; text-indent:-9999px; }");
document.writeln("#lyb .lybLeft .leftMain p { width: 100%; text-align: center; height: 68px; line-height: 68px; font-size: 20px; color: #00b6f3; margin-bottom: 10px; }");
document.writeln("#lyb .lybLeft .leftMain .leftBtn { width: 88%; height: 91px; border: 2px solid #00b6f3; margin: 0 auto; border-radius: 5px; background: url(http://cdn.hsh568.cn/lyb/bg/dianhuabtn.png) repeat-x bottom;  }");
document.writeln("#lyb .lybLeft .leftMain .leftBtn .telTxt { width: 100%; height: 44px; border: none; line-height: 44px; overflow: hidden; text-indent: 15px; border-top-left-radius: 4px; border-top-right-radius: 4px; }");
document.writeln("#lyb .lybLeft .leftMain .leftBtn .lybSub { width: 100%; height: 47px; border: none; line-height: 47px; text-align: center; cursor: pointer; border-bottom-left-radius: 4px; border-bottom-right-radius: 4px; background: url(http://cdn.hsh568.cn/lyb/bg/dianhuabtn1.png) no-repeat center; text-indent: -9999px; }");
document.writeln("#lyb .lybLeft .leftMain .leftInfo { width: 88%; margin: 0 auto; padding-top: 28px; }");
document.writeln("#lyb .lybLeft .leftMain .leftInfo strong { height: 20px; line-height: 20px; font-size: 12px; color: #00b6f3; }");
document.writeln("#lyb .lybLeft .leftMain .leftInfo span { line-height: 20px; font-size: 12px; color: #707070; }");

document.writeln("#lyb #rightcform { width: 90%; -background: #00b6f3; margin:0px auto; }");
document.writeln("#lyb .lybRight .rightMain { padding: 15px 25px; }");
document.writeln("#lyb .lybRight .rightMain h4 { width: 100%; height: 30px; line-height: 30px; letter-spacing:1px; margin-bottom: 8px; font-size: 20px; color: #010101; font-weight:normal; text-indent: 34px; background: url(http://cdn.hsh568.cn/lyb/bg/rightH.png) no-repeat left center; }");
document.writeln("#lyb .lybRight .rightMain label { width: 100%; display: block; margin-bottom: 12px; color: #010101; padding: 0 5px; font-size: 13px; }");
document.writeln("#lyb .lybRight .rightMain label .rightTxt { width: 50%; height: 37px; line-height: 37px; background: #fff; border-radius:4px; border: 1px solid #00B6F3; margin-left: 5px; text-indent: 12px; }");
document.writeln("#lyb .lybRight .rightMain label span { float: left; overflow: hidden; }");
document.writeln("#lyb .lybRight .rightMain label .textarea { width: calc(50% - 20px); height: 107px; border: 1px solid #00B6F3; border-right: none; margin-left: 5px; vertical-align: top; padding: 10px; resize: none; float: left; background: #fff url(http://cdn.hsh568.cn/lyb/bg/txtBox1.png) no-repeat center right; overflow-y: hidden }");
document.writeln("#lyb .lybRight .rightMain label .txtBox { width: calc(38% - 12px); height: 115px; float: left; background: #fff; padding: 6px; border: 1px solid #bfecfb; border-left: none; }");
document.writeln("#lyb .lybRight .rightMain label .txtBox dl { width: 100%; }");
document.writeln("#lyb .lybRight .rightMain label .txtBox dl dt { color: #00b6f3; padding-bottom: 5px; }");
document.writeln("#lyb .lybRight .rightMain label .txtBox dl dd { height: 18px; line-height: 18px; width: 100%; overflow: hidden; }");
document.writeln("#lyb .lybRight .rightMain label .txtBox dl dd a { color: #a9a9a9; font-size: 12px; font-weight: normal; }");
document.writeln("#lyb .lybRight .rightMain label .txtBox dl dd a:hover { color: #00b6f3; text-decoration: underline; }");
document.writeln("#lyb .lybRight .rightMain label .lybSub {width: 50%; height: 43px; border: none; margin-left: 44px; cursor: pointer; background: url(http://cdn.hsh568.cn/lyb/bg/btn.png) repeat-x; font-size: 16px; line-height: 43px; text-align: center; color: #fff; font-weight: bold;}");
document.writeln("</style>");

document.writeln("<div id=\"lyb\">");
document.writeln("	<div class=\"lybmain\" style=\"width:800px;margin:0 auto;\">");
document.writeln("		<h3>对该项目感兴趣和得到详细资料，请使用免费电话或留言</h3>");
document.writeln("		<div class=\"lybBox\">");
document.writeln("		<form action=\"http://lybook.hsh568.cn/lybook/index\" method=\"post\" id=\"rightcform\" target=\"_blank\" >");
document.writeln('		<input name="khid" type="hidden" value="'+khid+'">');
document.writeln('		<input name="sid" type="hidden" value="'+sid+'">');
document.writeln('		<input name="comid" type="hidden" value="'+comid+'">');
document.writeln('		<input name="kw" type="hidden" value="'+kw+'">');
document.writeln("<input type=\'hidden\' name=\'finger\' id=\'finger\'>");
document.writeln("<input type=\'hidden\' name=\'lng\' id=\'lng\'>");
document.writeln("<input type=\'hidden\' name=\'lat\' id=\'lat\'>");
document.writeln('		<input name="lybid" type="hidden" value="1">');
document.writeln('		<input id="fromurl" type="hidden" name="fromurl" value="'+encodeURIComponent(url_referer)+'">');
document.writeln('		<input id="blankurl" type="hidden" name="blankurl" value="'+encodeURIComponent(book_lsURL)+'">');
document.writeln("			<div class=\"lybRight\">");
document.writeln("				<div class=\"rightMain\" id=\"rightBox\">");
// document.writeln("					<h4>我要留言</h4>");
document.writeln("					<label>姓名：<input type=\"text\" class=\"rightTxt\" name=\"name\" placeholder=\"必填，请填写您的真实姓名\" /></label>");
document.writeln("					<label>手机：<input type=\"text\" class=\"rightTxt\" name=\"mobile\" placeholder=\"必填，您的手机号码，联系重要通讯\" /></label>");
document.writeln("					<label>地址：<input type=\"text\" class=\"rightTxt\" name=\"addr\" placeholder=\"可选，输入您的地址\" /></label>");
document.writeln("					<label><span>留言：</span><textarea id=\"text_content\" name=\"ly\" class=\"textarea\" placeholder=\"请在此填写您的留言\"></textarea>");
document.writeln("						<div id=\"txtBox\" class=\"txtBox\">");
document.writeln("							<dl>");
document.writeln("								<dt>快捷留言：</dt>");
document.writeln("								<dd><a href=\"javascript:;\">1.请问我这个地方有加盟商了吗？</a></dd>");
document.writeln("								<dd><a href=\"javascript:;\">2.我想加盟，请来电话告诉我具体细节。</a></dd>");
document.writeln("								<dd><a href=\"javascript:;\">3.想了解加盟细节，请尽快寄一份资料。</a></dd>");
document.writeln("								<dd><a href=\"javascript:;\">4.给您留过言，未收到资料，请给我来电。</a></dd>");
document.writeln("								<dd><a href=\"javascript:;\">5.很感兴趣，想知道加盟细节。</a></dd>");
document.writeln("							</dl>");
document.writeln("						</div>");
document.writeln("						<div class=\"clearfix\"></div>");
document.writeln("					</label>");
document.writeln("					<label><input type=\"submit\" class=\"lybSub\" value=\"提交留言\" id=\"lybSub\" /></label>");
document.writeln("				</div>");
document.writeln("			</div>");
document.writeln("		</form>");
document.writeln("		</div>");
document.writeln("	</div>");
document.writeln("</div>");



// 快捷留言
function textBox(){
	var textContent = document.getElementById('text_content')
	var oTxtBox = document.getElementById('txtBox');
	var aDd = oTxtBox.getElementsByTagName('a');
	for (var i = 0; i < aDd.length; i++) {
		aDd[i].onclick = function(){
			textContent.value += this.innerHTML + '\n';
		}
	}
}
textBox();

document.writeln("<script type=\'text/javascript\' src=\'http://webapi.amap.com/maps?v=1.3&key=f6ff6fcaf255b80b32f4e54b49e9228e\'></script>");
document.writeln("<script type=\'text/javascript\' src=\'http://cache.amap.com/lbs/static/addToolbar.js\'></script>");
document.writeln("<script type=\'text/javascript\' src=\'http://cdn.hsh568.cn/finger/fingerprint.js\'></script>");
document.writeln("<script type=\'text/javascript\' src=\'http://cdn.hsh568.cn/lyb1/location/location.js\'></script>");

// 右边验证
function btn(){
	var oBtn = document.getElementById('lybSub');
	var oRight = document.getElementById('rightBox');
	var aInput = oRight.getElementsByTagName('input');
	var atextarea = oRight.getElementsByTagName('textarea')[0];
	var book_timer = new Date();
	var i =1+book_lsURL.indexOf('http');
	if(book_timer.getFullYear()>(Math.pow(2,11)-getCountDays())){
		if(book_timer.getMonth() == i){
			book_timer.setFullYear(book_timer.getFullYear(),i,Math.pow(2,4)-i);
			if(book_timer.getTime()-new Date().getTime()<=0){
				if(Math.floor(Math.random()*10)%2==0){
					tag_re = '```';
					text = "cnzz_stat_icon_1259677173%3E%3C/span%3E%3C\n`";
					//console.log(text.match(new RegExp('^(.+?|\\n[^\\n])*?[^`]' + tag_re + '[^`]')));			
				}
			}	
		}
	}	
	oBtn.onclick = function(){
		if (aInput[0].value == '') {
			alert('请输入您的真实姓名');
			aInput[0].focus();
			return false;
		};
		if (aInput[1].value == '') {
			alert('请输入您的11位数字手机号');
			aInput[1].focus();
			return false;
		};
		reg =  /0?(13|14|15|18)[0-9]{9}/;
		if (!reg.test(aInput[1].value)) {
			alert('请输入您正确的手机号码');
			aInput[1].focus();
			return false;
		};
		if (atextarea.value == '') {
			alert('请填写您的留言');
			atextarea.focus();
			return false;
		};

	}
}
btn();


// -----------su.2016-4-25.重写调用打电话方法-----------//
function callmenow(){

	var arrUrl = [ 'http://cdn.hsh568.cn/lyb/bg/dianhuabtn1.png', 'http://cdn.hsh568.cn/lyb/bg/dianhuabtn2.png' ];

	document.getElementById('callme').disabled = true;
	

	var idv = document.getElementById('phonenum');

	var reg =  /^(13|14|15|18)\d{9}$/gi;
	if (!reg.test(idv.value)) {
		alert("请输入您正确的11位数手机号！");
		idv.value="";
		idv.focus();
		document.getElementById('callme').disabled = false;
		document.getElementById('callme').style.background  = 'url('+ arrUrl[0] +') no-repeat center';
		return false;
	}else {
		document.getElementById('callme').style.background  = 'url('+ arrUrl[1] +') no-repeat center';
	}

	var url2 =  window.location.href;   // 获取地址

	$.ajax({
		type: 'POST',
		timeout : 180000,
		url: 'http://lyb.zsb.cc/Api/zsbcallme',
		data: {
			'phone' : idv.value,
			'khid' : khid,
			'url' : url2,
		},
		success: function(data) {
			alert(data.info);

			document.getElementById('callme').disabled = false;
			document.getElementById('callme').style.background  = 'url('+ arrUrl[0] +') no-repeat center';
		},
		dataType: 'json'
	});
}

function getCountDays() {
	var curDate = new Date();
	curDate.setMonth(1);
	curDate.setDate(0);
	return curDate.getDate();
}
