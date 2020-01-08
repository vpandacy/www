$(function(){
	
	// weixin('#header .top .topmain .topNav ul li.weixinLi');

	// 商机大全分类 -- 点击显示大分类
	function typeDown(){
		var oBtn = $('#nav .navBox ul li.last');
		var typeBox = $('#nav .navBox .max_type');
		var oPink = $('#pink .pinkMain');
		var boff = true;

		oBtn.hover(function(){
			typeBox.stop().animate({
				'height' : '170px',
				'opacity' : '1'
			},500);
		},function(){
			typeBox.stop().animate({
				'height' : '0px',
				'opacity' : '0'
			},500);
		});

		typeBox.hover(function(){
			typeBox.stop().animate({
				'height' : '170px',
				'opacity' : '1'
			},500);
		},function(){
			typeBox.stop().animate({
				'height' : '0px',
				'opacity' : '0'
			},500);
		});


	}


	typeDown();

	mouseOver("#searchList .searchListmain .listMain .listMainLeft .listMainLeftBox li .listContent .listContentBox .listContentBoxMain .listContentBoxMainBtn .listContentBoxMainBtnA a");
});
// 图片预加载
 (function(){
        var imgList = document.body.getElementsByTagName('img');
        function lazyImg(curImg){
            var oImg = new Image;
            oImg.src =curImg.getAttribute("trueImg");
            oImg.onload = function(){
                // console.log(curImg)
                curImg.src = this.src;
                curImg.style.display = "block";
                oImg = null;
            };
            curImg.isLoad = true;
        }
        function handleAllImg(){
            for(var i =0; i<imgList.length;i++){
                var curImg = imgList[i];
                // console.log(curImg);
                if(curImg.isLoad == true){
                    continue;
                }
                var curImgPar = curImg.parentNode;
                var A =utils.offset(curImgPar).top + curImgPar.offsetHeight, B = utils.win("clientHeight") + utils.win("scrollTop");
                // console.log(A,B);
                if(A<B){
                    lazyImg(curImg);
                }
            }
        }
        window.setTimeout(handleAllImg(),500);
        window.onscroll =handleAllImg;

})();