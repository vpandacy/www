

$(function (){

	var aLi = $('.content .right .rightBoxTop .zsbBox ul li');
	var add = $('.content .right .rightBoxTop .zsbBox dl dd');

	aLi.hover(function (){
		var i = $(this).index();
		$(this).addClass('active').siblings().removeClass('active');
		add.eq(i).show().siblings().hide();
	});



});
