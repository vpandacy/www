$(function(){

	// 微信显示隐藏
	// weixin('#zsbHeader .zsbmain .zsbNav .topNav ul li.weixinLi');

	// 头部导航条的url
	// var mainNavA = $('#zsbHeader .zsbmain .zsbNav .mainNav li a');
	// for (var i = 1; i < mainNavA.length; i++) {
	// 	var zsburl = mainNavA.eq(i).attr('href');
	// 	zsburl = url + zsburl;
	// 	mainNavA.eq(i).attr('href', zsburl);
	// }


	//适应广告页宽度
	var oZsbMainWidth = $('#zsbHeader .zsbmain')[0].offsetWidth;
	var oWidth = parseInt(oZsbMainWidth);
	var oRes = null;
	var numLi = null;
	if(oWidth >= 1200) {
		oRes = 1;
	}else if(oWidth >= 1100) {
		oRes = 2;
	}else if(oWidth >= 1000){
		oRes = 3;
	}else {
		oRes = 4;
	}

	var aImg = $('#zsbTxt .zsbmain .zsbmainImg li');
	var aLi = $('#zsbTxt .zsbmain .zsbmainTxt li');

	switch(oRes)
	{
	case 1:
	  aImg.css('width', '8.333%'),
	  aLi.css('width', '14.285%'),
	  aLi.parent('ul').css('height', aLi.outerHeight()*4),
	  numLi = 7,
	  NumLi(numLi,oRes)
	  break;
	case 2:
	  aImg.css('width', '9.090%'),
	  aLi.css('width', '16.666%'),
	  aLi.parent('ul').css('height', aLi.outerHeight()*4),
	  numLi = 6,
	  NumLi(numLi,oRes)
	  break;
	case 3:
	  aImg.css('width', '10%'),
	  aLi.css('width', '20%'),
	  aLi.parent('ul').css('height', aLi.outerHeight()*4),
	  numLi = 5,
	  NumLi(numLi,oRes)
	  break;
	case 4:
	  aImg.css('width', '11.110%'),
	  aLi.css('width', '20%'),
	  aLi.parent('ul').css('height', aLi.outerHeight()*4),
	  numLi = 5,
	  NumLi(numLi,oRes)
	  break;
	}

	function NumLi(numLi,oRes){
		for (var i = 1; i < 5; i++) {
			aLi.eq(i*numLi - 1).css({
				'borderRight' : 'none',
				'borderRight' : '0px'
			});
		}
		if (oRes%2 == 0) {
			for (var j = 0; j < numLi; j++) {
				aLi.eq(j).find('a').css('color','#43c1f4');
				aLi.eq(j+numLi*2).find('a').css('color','#43c1f4');
			}
		}else {
			for (var j = 0; j < aLi.length; j++) {
				aLi.eq(2*j).find('a').css('color','#43c1f4');
			}
		}
	}


	//改项目两个按钮
	function zsbBtn(obj){
		obj.hover(function(){
			$(this).addClass('active').siblings().removeClass('active');
		},function(){

		});
	}
	zsbBtn($('#zsbTxt .zsbmain .zsbInfo .zsbBtn a'));
	zsbBtn($('#zsbTxt .zsbmain .thisBtn a'));
});
