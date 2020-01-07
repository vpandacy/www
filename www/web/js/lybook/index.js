
$(function (){
	//文本框事件
    inputText($('#wrapper .header .search .text'), '请输入项目/品牌/行业关键字');

    function inputText(obj, txt) {
        obj.focus(function () {
            if ($(this).val() == txt) {
                $(this).val('');
            }
        }).blur(function () {
            if ($(this).val() == '') {
                $(this).val(txt);
            }
        });
    }
	//窗口改变时
	$(window).resize(function (){ 
		//getCenter('#video');
		//getLeft("#video");
		backTop('#topBox');
	});
	
	//浏览器滚动时
	$(window).scroll(function (){ 
		//getCenter('#video');
		getLeft("#video");
		backTop('#topBox');
	});	
	
	//右侧悬浮居中(留言/QQ/微信/回到顶部)
	function backTop(obj){
		$(obj).animate({
			'top' : parseInt(($(window).height()-$(obj).outerHeight(true))*0.8+$(window).scrollTop())+'px'
		}).dequeue();	
	}
	
	backTop('#topBox');
	
	//留言
	var liuyan=$('#topBox ul li a.a1')
	liuyan.click(function (){
		$(window).scrollTop($('#message').offset().top);	
	});
	
	//QQ聊天（略）
	
	//微信扫描
	var WeiXin=$('#topBox ul li a.a3');
	WeiXin.hover(function (){
		$('#topBox ul li .weixin').stop(true,true).fadeIn();
	},function (){
		$('#topBox ul li .weixin').stop(true,true).fadeOut();
	});
	
	//回到顶部
	var back_timer=null;
	$('#topBox ul li a.a4').click(function (){
		back_timer=setInterval(function (){
			if ($(window).scrollTop() <= 0){ 
				clearInterval(back_timer);
				$(window).scrollTop(0);	
			}else{
				$(window).scrollTop($(window).scrollTop()-30);				
			}
		},1);
	});

	//项目介绍/项目视频/......
	var  aLi=$('#nav .chead1 .chead2 .chead3 .tubiao li');
	var BaiDi=$('#nav .chead1 .chead4');
	var timer=null;
	
	aLi.mouseover(function (){
		clearTimeout(timer);
		var Index=$(this).index();
		var _this=$(this);

		timer=setTimeout(function (){
			if(Index==aLi.length-1){
				_this.addClass('active_li').siblings().removeClass('active_li');
				BaiDi.hide();
			}else{
				_this.addClass('active_li').siblings().removeClass('active_li');
				BaiDi.show().find('.chead6').eq(Index).show().siblings().hide();			
			}	
			switch(Index){
				case 0:
							_this.children('a').addClass('active_a1');
							aLi.eq(1).children('a').removeClass('active_a2');
							aLi.eq(2).children('a').removeClass('active_a3');
							aLi.eq(3).children('a').removeClass('active_a4');
							break;
				case 1:
							_this.children('a').addClass('active_a2');
							aLi.eq(0).children('a').removeClass('active_a1');
							aLi.eq(2).children('a').removeClass('active_a3');
							aLi.eq(3).children('a').removeClass('active_a4');
							break;
				case 2:
							_this.children('a').addClass('active_a3');
							aLi.eq(0).children('a').removeClass('active_a1');
							aLi.eq(1).children('a').removeClass('active_a2');
							aLi.eq(3).children('a').removeClass('active_a4');
							break;
				case 3:
							_this.children('a').addClass('active_a4');
							aLi.eq(0).children('a').removeClass('active_a1');
							aLi.eq(1).children('a').removeClass('active_a2');
							aLi.eq(2).children('a').removeClass('active_a3');
							break;
				default :
							aLi.eq(0).children('a').removeClass('active_a1');
							aLi.eq(1).children('a').removeClass('active_a2');
							aLi.eq(2).children('a').removeClass('active_a3');
							aLi.eq(3).children('a').removeClass('active_a4');
							break;
			}			
		});
	}).mouseout(function (){
		var _this=$(this);
		clearTimeout(timer);
		timer=setTimeout(function (){
			_this.removeClass('active_li');
			BaiDi.hide();
			aLi.eq(0).children('a').removeClass('active_a1');
			aLi.eq(1).children('a').removeClass('active_a2');
			aLi.eq(2).children('a').removeClass('active_a3');
			aLi.eq(3).children('a').removeClass('active_a4');			
		});
	});
	
	BaiDi.mouseover(function (){
		clearTimeout(timer);
	}).mouseout(function (){
		clearTimeout(timer);
		timer=setTimeout(function (){
			aLi.removeClass('active_li');
			BaiDi.hide();
			aLi.eq(0).children('a').removeClass('active_a1');
			aLi.eq(1).children('a').removeClass('active_a2');
			aLi.eq(2).children('a').removeClass('active_a3');
			aLi.eq(3).children('a').removeClass('active_a4');
		});		
	});


	//在窗口居中
	function center(obj, left ,top){
		$('#zhezhao').width($(document).width()).height($(document).height());
		$(obj).animate({
			'left' : parseInt(($(window).width()-$(obj).outerWidth(true))/2)+'px',
			'top' : parseInt(($(window).height()-$(obj).outerHeight(true))/2+$(window).scrollTop())+'px'
		},function (){
			$(this).show();
		}).dequeue();
	};
	
	//在窗口居左
	function left(obj,left,top){
		$('#zhezhao').width($(document).width()).height($(document).height());
	/* 	$(obj).animate({
			'left' : parseInt(($(window).width()-$(obj).outerWidth(true)-1250)/2)+'px',
			'top' : parseInt(($(window).height()-$(obj).outerHeight(true))/2+$(window).scrollTop())+'px'
		},function (){
			$(this).show();
		}).dequeue();  */
		$(obj).show();
	};

	//判断元素显示
	function getCenter(obj){ 
		if($(obj).is(':visible')){
			center(obj);
		}
	};
	
	function getLeft(obj){
		if($(obj).is(':visible')){
			left(obj);
		}
	};
	
	//视频显示
	$('#nav .chead1 .chead4 .chead5 .chead6 .d2 dl dt img').click(function (){
		center('#video');
		$('#zhezhao').css({ 
			'opacity' : '0.5',
			'filter' : 'alpha(opacity=50)' 
		}).fadeIn();
	});
	
	
	left("#video");
	$("#video").mouseover(function(){
		$("#video .stop").css('display','block');
	});
	$("#video .stop").mouseout(function(){
		$(this).css('display','none');
	});

	$('#video .stop a').click(function (){
		$('#video').hide();
		$('#zhezhao').fadeOut();
		return false;
	});

	//文本框快速留言事件
	var aLi_text=$('#message .right form dl dd .textBox ul li');
	var textarea=$('#message .right form dl dd textarea');
	aLi_text.on('click',function (){
		textarea.val('');
		textarea.val($(this).text());
	});
	
	//底部通栏400电话
	//文本框事件
	inputText($('#bottom .bottomBox .txt1'),'请输入您的手机号');
	function inputText(obj, txt){
		obj.focus(function (){
			if($(this).val() == txt){
				$(this).val('');
			}
		}).blur(function (){
			if($(this).val() == ''){
				$(this).val(txt);
			}
		});
	};
	
	$('#bottom .bottomBox a').click(function (){
		$(window).scrollTop($('#message').offset().top-10);
		return false;
	});
        
        $('input.btn1').on('click', function () {
            var     _val = $('input[name=phonenum1]').val(),
                    _mburl = window.location.href;
            reg = /^(\+\d{2,3}\-)?\d{11}$/;
            if (reg.test(_val)) {
                $.getJSON('/Api/rmphone', {gid: khid, mburl: _mburl, phone: _val,sjid:sjid},function(data){
                    if(data.code == 200){
                        alert(data.info);
                    }

                    if(data.code == 400){
                        alert(data.info);
                        $('input[name=phonenum1]').val('');
                        $('input[name=phonenum1]').focus();
                    }
                });
            } else {
                $('input[name=phonenum1]').val('');
                $('input[name=phonenum1]').focus();
            }
        
        return false;
        });


});


