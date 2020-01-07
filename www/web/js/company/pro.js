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


	//<!-- 内页项目列表-两个按钮 -->
	mouseOver("#content .main .mainBox li .l_btn a");

	// <!-- 感兴趣的项目-受欢迎的项目 -->
	function LDown(){
		var aLi = $('#list .main .top li');
		var oCon = $('#list .main .mainBox');
		var oBox = oCon.children('div');
		var index = 0;
		aLi.hover(function(){
			index = $(this).index();
			$(this).addClass('active').siblings().removeClass('active');
			oBox.eq(index).css('display', 'block').siblings().css('display', 'none');
		},function(){

		});
	}
	LDown();

	// 添加事件
	function bind(obj, ev, fn) {
		if (obj.addEventListener) {
			obj.addEventListener(ev, fn, false);
		} else {
			obj.attachEvent('on' + ev, function() {
				fn.call(obj);
			});
		}
	}

	function scale(obj){
		var oWrap = document.getElementById(obj);
		var oRight = oWrap.getElementsByClassName('second')[0];
		var aUl = oRight.getElementsByTagName('ul');
		var timer = null;
		for (var i = 0; i < aUl.length; i++) {
			fn(aUl[i])
		}

		function fn(oUl){
			var aLi = oUl.getElementsByTagName('li');

			for (var i = 0; i < aLi.length; i++) {
				aLi[i].index = i;
				bind(aLi[i],"mouseover", function(){
					clearTimeout(timer);
					var _this = this;
					timer = setTimeout(function(){
						for (var i = 0; i < aLi.length; i++) {
							aLi[i].getElementsByTagName('img')[0].style.height = '0px';

							if (i%3 == 2) {
								aLi[i].getElementsByTagName('a')[0].style.color = '#4bb5c3';
							}else {
								aLi[i].getElementsByTagName('a')[0].style.color = '#707070';
							}
						}
						var oImg = _this.getElementsByTagName('img')[0];
						var oA = _this.getElementsByTagName('a')[0];
						oImg.style.height = '90px';
						oA.style.color = '#f56a19';
					},100);
				});
			}
		}
	}

	scale('list');

	
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