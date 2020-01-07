
function mouseOver(obj){
	var aBtn = $(obj);
	aBtn.hover(function(){
		$(this).addClass('active').siblings().removeClass('active');
	},function(){

	});
}