(function ($) {
	/**
	 * 幻灯片
	 * @param options
	 */
	$.fn.slide = function (options) {
		//配置参数
		var opt = $.extend({blockCls: '.slide-block', itemCls: '.slide-item', numberCls: '.slide-number', speed: 1000, delay: 3000}, options || {});

		//初始化一些变量
		var $this = $(this);
		var itemWidth = $(this).find(opt.itemCls).outerWidth(true);
		var len = $(this).find(opt.itemCls).length;
		var index = 0;
		var timer;

		//初始化block宽度
		$(this).find(opt.blockCls).width(itemWidth * (len + 1));

		//初始化序号
		var number = document.createElement('div');
		number.className = opt.numberCls.substr(1);
		for (x = 1; x <= len; x++) {
			var span = document.createElement('span');
			span.innerHTML = x;
			if (x === 1) {
				span.className = 'active';
			}
			$(number).append(span);
		}
		$(this).append(number);

		//开始动画
		function start(i) {
			$this.find(opt.numberCls).find('span').eq(i).addClass('active').siblings().removeClass('active');
			$this.find(opt.blockCls).stop().animate({left: -i * itemWidth}, opt.speed);
		}

		//指定跳转
		$(this).find(opt.numberCls).find('span').on('mouseover', function () {
			clearInterval(timer);
			index = $(this).html() - 1;
			start(index);
		});

		//定时器
		$(this).hover(function () {
			clearInterval(timer);
		}, function () {
			timer = setInterval(function () {
				index++;
				if (index >= len) {
					index = 0
				}
				start(index);
				//动画
			}, opt.delay + opt.speed)
		}).mouseout();
	};
	/**
	 * 拖动块
	 * @param options
	 */
	$.fn.dragBlock = function (options) {
		//配置参数
		var opt = $.extend({blockCls: '.slide-block', mode: 0, range: false}, options || {});

		//鼠标当前位置
		var mouse_location_x = 0;
		var mouse_location_y = 0;
		//鼠标怎么移动的
		var mouse_offset_x = 0;
		var mouse_offset_y = 0;

		//获取鼠标位置
		$(document).on('mousemove', function (event) {
			var e = event || window.event;
			//鼠标当前位置
			mouse_offset_x = e.clientX - mouse_location_x;
			mouse_offset_y = e.clientY - mouse_location_y;
			//鼠标怎么移动的
			mouse_location_x = e.clientX;
			mouse_location_y = e.clientY;
		});

		$(this).each(function () {
			var sync = false;
			var $block = $(this).find(opt.blockCls);
			//按下鼠标
			$(document).on('mousedown', function () {
				sync = true;
				//获取鼠标位置
				$(document).on('mousemove', function () {
					if (sync) {
						var result = {};
						switch (opt.mode) {
							//左右上下都移动
							default:
							case 0:
								result = {
									left: $block.position().left + mouse_offset_x,
									top: $block.position().top + mouse_offset_y,
								};
								break;
							//只左右
							case 1:
								result = {
									left: $block.position().left + mouse_offset_x,
									top: $block.position().top,
								};
								break;
							//只上下
							case 2:
								result = {
									left: $block.position().left,
									top: $block.position().top + mouse_offset_y,
								};
								break;
						}
						if (opt.range !== false) {
							var limit = $.extend({min: 0, max: 50}, opt.range || {});
							if (result.left < limit.min) {
								result.left = limit.min;
							}
							if (result.left > limit.max) {
								result.left = limit.max;
							}
							if (result.top < limit.min) {
								result.top = limit.min;
							}
							if (result.top > limit.max) {
								result.top = limit.max;
							}
						}
						//移动位置
						$block.css(result);
					}
				});
				return false;
			});
			//弹起鼠标
			$(document).on('mouseup', function () {
				sync = false;
			});
		});
		// $(this).each(function () {
		//     //初始化一些变量
		//
		//     // $(this).find(opt.blockCls).mousedown(function (event) {
		//     //     var e = event || window.event;
		//     //     console.log(e.clientX);
		//     //     console.log(e.clientY);
		//     //     return false;
		//     // });
		// });
	};
})(jQuery);

var utils = (function(){
	return {
	 			//-win:编写一个有关于操作浏览器盒子模型的方法
			win: function (attr,value) {
					if(typeof value === "undefined"){
						// console.log( document.body[attr]);
						return document.documentElement[attr] || document.body[attr];
					}

				document.documentElement[attr] = value;
				document.body[attr] = value;
				},
//->getCss:获取当前元素所有经过浏览器计算过的样式中的atttr对应的值
	getCss: function (curEle,attr){
		var val =null,reg =null;
		if ("getComputedStyle" in window) {
			val =window.getComputedStyle(curEle,null)[attr];
		}else{
		if(attr === "opacity"){
			val = curEle.currentStyle["filter"];
			reg =/^alpha\(opacity=(\d+(?:\.\d+)?)\)$/i;
			ret.test(val)?reg.exec(val)[1]/100:1;
		}
		val =curEle.currentStyle[attr];
	}
	reg = /^-?\d+(\.\d+)?(px|pt|rem|em)?$/i;
	return reg.test(val) ? parseFloat(val) : val;
},
//->function:等同于jQuery中的offset方法，实现获取页面中任意一个元素，距离body的偏移（左偏移和上偏移），不管当前元素的父级参照物是谁
offset: function (curEle){
 	var totalLeft = null,totalTop = null,par=curEle.offsetParent;
 	totalLeft += curEle.offsetLeft;
 	totalTop += curEle.offsetTop;
 	while(par){
 		if(navigator.userAgent.indexOf("MAIE 8.0")===-1){
 			 totalLeft += par.clientLeft;
 			totalTop += par.clientTop;	
 		}
 		
 		totalLeft += par.offsetLeft;
 		totalTop += par.offsetTop;

 		par = par.offsetParent; 
 	}
 	return {left:totalLeft,top:totalTop};
 }
	};
})();