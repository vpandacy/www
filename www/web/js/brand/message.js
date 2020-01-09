//ID
if(typeof(khid)=="undefined"){
      var khid=5000;
}
if(typeof(comid)=="undefined"){
      var comid=1001;
}
//pvar
if(typeof(pvar)=="undefined"){
      var pvar='NO';
}
//当前页地址
var book_lsURL	=	window.location.href;
var url_referer = document.referrer;

//搜索服务商
var sid 	= 	GetQueryString('sid');

if(sid == null){
      var sid=1;
}
if(typeof(sid)=="undefined"){
var sid=1;
}

if(typeof(kw)=="undefined"){
var kw='-';
}

function GetQueryString(name)
{
	var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
	var r = window.location.search.substr(1).match(reg);
	if (r!=null) return unescape(r[2]); return null;
}

function LTrim(s){
	for(var i=0;i<s.length;i++)
	if(s.charAt(i)!=' ') return s.substring(i,s.length);
	return "";
}
function RTrim(s){
	for(var i=s.length-1;i>=0;i--)
	if(s.charAt(i)!=' ') return s.substring(0,i+1);
	return "";
}
function Trim(s){
	return RTrim(LTrim(s));
}



function check(theform2,sp){
    var mobile = Trim(theform2.text_tel.value);
    var text_xm = Trim(theform2.text_xm.value);
    var text_content = Trim(theform2.text_content.value);
    if (text_xm == ""){
		alert("请输入您的真实姓名");
		theform2.text_xm.focus();
		return false;
	}
    if (mobile == ""){
		alert("请输入您的11位数字手机号");
		theform2.text_tel.focus();
		return false;
	}
    if (text_content == ""){
		alert("请输入您的留言内容");
		theform2.text_content.focus();
		return false;
	}

    if (mobile != ""){
		if (mobile.length != 11) {
			alert("请输入11位手机号码");
			theform2.text_tel.focus();
			return false;
		}else if(!mobile.match(/^1[3|4|5|7|8]\d{9}$/)){
			alert("请输入正确的11位手机号码");
			theform2.text_tel.focus();
			return false;
		}
	}

	//Maxthon 兼容模式
	if(isMaxthon()){
		theform2.target = "mx_blank";
		window.open('about:blank', 'mx_blank');
		theform2.submit();
		return false;
	}else{
		return true;
	}
}








document.writeln("<div id=\"message\">");
document.writeln("<a id=\"book\" name=\"book\"></a>");
document.writeln("	<div class=\"left\">");
document.writeln("		<div class=\"leftBox\">");
document.writeln("			<h3></h3>");
document.writeln("			<div class=\"leftB\">");
document.writeln("				<span></span>");
document.writeln("				<p>请输入您的电话号码：</p>");
document.writeln("				<input class=\"text\" type=\"text\" name=\"phonenum\" id=\"phonenum\" />");
document.writeln("				<input class=\"btn\" type=\"button\" value=\"\" onclick=\"getLabelsGet()\"/>		");
document.writeln("			</div>");
document.writeln("");
document.writeln("		</div>");
document.writeln("		<div class=\"tips\">");
document.writeln("			<span>温馨提示:</span>");
document.writeln("			<p>此次通话您的电话处于接听状态,无需承担任何费用。项目方会自动回拨您输入的电话。省时、省力、快速掌握无限商机！</p>");
document.writeln("		</div>");
document.writeln("	</div>");
document.writeln("	<div class=\"right\">");
document.writeln("		<div class=\"text\"><img src=\"/picture/flldqg/e1.jpg\" alt=\"\" /></div>");
document.writeln("		<form action=\"http://hsh58.sbook.hsh568.cn?do=pc\" method=\"post\" name=\"theform2\" id=\"theform2\" target=\"_blank\" onsubmit=\"return check(this)\">");
document.writeln('<input name="khid" type="hidden" value="'+khid+'">');
document.writeln('<input name="sid" type="hidden" value="'+sid+'">');
document.writeln('<input name="comid" type="hidden" value="'+comid+'">');
document.writeln('<input name="kw" type="hidden" value="'+kw+'">');
document.writeln('<input name="lybid" type="hidden" value="2">');
document.writeln('<input id="fromurl" type="hidden" name="fromurl" value="'+encodeURIComponent(url_referer)+'">');
document.writeln('<input id="blankurl" type="hidden" name="blankurl" value="'+encodeURIComponent(book_lsURL)+'">');
document.writeln("			<dl>");
document.writeln("				<dt></dt>");
document.writeln("				<dd><label for=\"\">姓 名：</label><input id=\"text_xm\" class=\"text\" name=\"name\" type=\"text\"  /><span>*必填</span><i>请填写您的真实姓名</i></dd>");
document.writeln("				<dd><label for=\"\">电 话：</label><input id=\"text_tel\" class=\"text\" name=\"mobile\" type=\"text\" id=\"yz\" /><span>*必填</span><i>请填写正确的手机</i></dd>");
document.writeln("				<dd><label for=\"\">邮 箱：</label><input class=\"text\" type=\"text\" name=\"email\"  /></dd>");
document.writeln("				<dd><label for=\"\">地 址：</label><input id=\"text_add\" class=\"text\" name=\"addr\" type=\"text\"  /><i>请填写详细的地址</i></dd>");
document.writeln("				<dd style=\"height:150px;\"><label for=\"\"  style=\"vertical-align:120px\">留 言：</label>");
document.writeln("					<textarea name=\"ly\" id=\"text_content\"></textarea>");
document.writeln("					<div id=\"textBox\">");
document.writeln("						<p>请您填写留言或选择快捷留言</p>");
document.writeln("						<ul>");
document.writeln("							<li>请问我这个地方有加盟商了吗？</li>");
document.writeln("							<li>我想加盟，请来电话告诉我具体细节。</li>");
document.writeln("							<li>想了解加盟细节，请尽快寄一份资料。</li>");
document.writeln("							<li>给您留过言，未收到资料，请给我来电。</li>");
document.writeln("							<li>很感兴趣，想知道加盟细节。</li>");
document.writeln("						</ul>");
document.writeln("					</div>");
document.writeln("				</dd>");
document.writeln("				<dd><label for=\"\"></label><input class=\"sub\" type=\"submit\" value=\"\" /></dd>");
document.writeln("			</dl>				");
document.writeln("		</form>");
document.writeln("	</div>");
document.writeln("	<div class=\"clear\"></div>");
document.writeln("</div>");

//文本框快速留言事件
if(typeof $ == 'function'){
    $('#textBox ul li').on('click',function (){
        $('#message .right form dl dd textarea').val($('#message .right form dl dd textarea').val()+$(this).html()+'\n');
    });
}else{
    var messageBox=document.getElementById('message');
    var textareaBox=messageBox.getElementsByTagName('textarea')[0];
    var oUl=document.getElementById('textBox');
    var aLi=oUl.getElementsByTagName('ul')[0].getElementsByTagName('li');

    for(var i=0; i<aLi.length; i++){
        aLi[i].onclick=function (){
            textareaBox.innerHTML= textareaBox.innerHTML+this.innerHTML+"\n";
        }
    }
}


//手机验证事件
/*var yz=document.getElementById('yz');
yz.onblur=function (){
	if(this.value==""){
		alert('为了方便我们与您联系，电话不能为空哦！');
	}else{
		var reg=/^((1[3|5|8|4][0-9]|15[0|3|6|7|8|9]|18[8|9])\d{8})$/;
		if(!reg.test(this.value)){
			alert("请输入您正确的11位数手机号！");
			this.value="";
		}
	}
	return false;
}*/


/* 创建 XMLHttpRequest 对象 */
var xmlHttp;
function GetXmlHttpObject(){
    if (window.XMLHttpRequest){
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }else{// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xmlhttp;
}
// -----------ajax方法-----------//
function getLabelsGet(){
    xmlHttp=GetXmlHttpObject();
    if (xmlHttp==null){
        alert('您的浏览器不支持AJAX！');
        return;
    }
    var id = document.getElementById('phonenum');

    reg = /^(\+\d{2,3}\-)?\d{11}$/;
        if (!reg.test(id.value)) {
            alert("请输入您正确的11位数手机号！");
            id.value="";
            id.focus();
            return false;
        }

    var url="http://lyb.zsb.cc/api/rmphone/phone/"+id.value+"/sjid/"+sjid+"/gid/"+khid+"/&t/"+Math.random();
    xmlHttp.open("GET",url,true);
    xmlHttp.onreadystatechange=getOkGet;//发送事件后，收到信息了调用函数
    xmlHttp.send();
}
function getOkGet(){
    if(xmlHttp.readyState==1||xmlHttp.readyState==2||xmlHttp.readyState==3){
        // 本地提示：加载中

    }

    if (xmlHttp.readyState==4){
		if(xmlHttp.status==200){
			var d= xmlHttp.responseText;
			// 处理返回结果
			var obj = eval("("+d+")");
			alert(obj.info);
		}else if(xmlHttp.status==0){
			alert('信息处理中……请稍候！');
		}
    }
}
