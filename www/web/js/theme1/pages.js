/**
 *
 * @authors Your Name (you@example.org)
 * @date    2016-10-20 11:37:39
 * @version $Id$
 */

$(function (){
    //搜索框
    var a = 0;
    $('#header .h_com .h_main .search .sub').click(function (){
        $(this).siblings('.text').animate({
            'width' : '210px'
        }).dequeue();
    });




    $('#header .headerBox .search .text').focus(function (){
        $(this).css('background','#fff url(images/bg/search-ico2.png) 6px center no-repeat');
    }).blur(function (){
        $(this).css('background','#fff url(images/bg/search-ico.png) 6px center no-repeat');
    });


    var timer = null;
    $('#nav > span').mouseover(function (){
        console.log(1123)
        clearTimeout(timer);
        timer = setTimeout(function (){
            $('#hsh_iframe .max_type').stop(false,true).slideDown(600);
        },30);
    });

    $('#hsh_iframe .max_type').mouseleave(function (){
        timer = setTimeout(function (){
            $('#hsh_iframe .max_type').stop(false,true).slideUp(600);
        },30);
    });

    //热门项目推荐-tab切换
    var ol = $('#hsh_iframe .paihang .left .min_type li');
    ol.hover(function (){
        var i = $(this).index();
        $(this).addClass('active').siblings().removeClass('active')
        $('#hsh_iframe .paihang .left .typeBox ul').eq(i).show().siblings().hide();
    });



    //tab切换
    var ol = $('#hsh_iframe .paihang .right h3 ol li');
    ol.hover(function (){
        var i = $(this).index();
        $(this).addClass('active').siblings().removeClass('active')
        $('#hsh_iframe .paihang .right .rightBox ul').eq(i).show().siblings().hide();
    });




    //
    // var aUlBoxLi=$('#main .paihang .right .rightBox ul li');

    // aUlBoxLi.hover(function (){
    // 	if(!$(this).hasClass('show')){
    // 		$(this).css('border','1px solid #38A4EC');
    // 		$(this).find('img').animate({
    // 			'padding' : '0'
    // 		},300).dequeue();
    // 		$(this).children('p').animate({
    // 			'bottom' : 0
    // 		},300).dequeue();
    // 	}
    // },function (){
    // 	if(!$(this).hasClass('show')){
    // 		$(this).css({
    // 			'border-left' : '1px solid #eee',
    // 			'border-top' : '1px solid #eee',
    // 			'border-right' : '1px solid #fff',
    // 			'border-bottom' : '1px solid #fff'
    // 		});
    // 		$(this).find('img').animate({
    // 			'paddingTop' : '10px'
    // 		},300).dequeue();
    // 		$(this).children('p').animate({
    // 			'bottom' : '-22px'
    // 		},300).dequeue();
    // 	}
    // });



    // 两个数之间的随机数
    function r(min, max){
        return Math.floor(Math.random()*(max - min +1) + min);
    }

    function getCountDays() {
        var curDate = new Date();
        curDate.setMonth(1);
        curDate.setDate(0);
        return curDate.getDate();
    }

    //浮动项目-文字效果
    textBox();

    function textBox(){
        var oRadom = document.getElementById('radom');
        var oMain = oRadom.getElementsByClassName('main')[0];
        var oTextBox = oRadom.getElementsByClassName('textBox');
        var aA = oRadom.getElementsByTagName('a');;
        var arrF = [];
        var arrC = ['#000', '#000', '#00cfb2', '#10af3b', '#01a7e5', '#e30512', '#31cdfe', '#000', '#ffc100', '#f46819', '#ff6462', '#f76a1a', '#18e8e8', '#ae8de0', '#cee35b', '#5be1e3', '#5bc8e3', '#c96bf4'];
        var arrT = [];
        var arrL = [];
        var arrC1 = [];

        //所有的a设置样式
        for (var i = 0; i < aA.length; i++) {
            var color = r(0,17);
            arrF.push(r(12,28));
            arrC1.push(arrC[color]);
            arrT.push(r(5,12));
            arrL.push(r(5,60));
            aA[i].style.fontSize = arrF[i] +'px';
            aA[i].style.color = arrC1[i];
            aA[i].style.marginTop = arrT[i] + 'px';
            aA[i].style.marginLeft = arrL[i] + 'px';
        }


        // 初始化
        var oneA = oTextBox[0].getElementsByTagName('a');
        for (var i = 0; i < oneA.length; i++) {
            oneA[i].style.opacity = '1';
            oneA[i].style.WebkitTransform = oneA[i].style.MozTransform = oneA[i].style.transform = 'scale(1)';
        }

        var num = 0;
        var now = 0;
        var timeId = null;
        var timeId2 = null;
        timeId = setInterval(hide,5000);



        // 下掉
        function hide(){

            now = num;
            if (num>=oTextBox.length-1) {
                num = 0;
            }else {
                num++;
            }
            var nowA = oTextBox[now].getElementsByTagName('a');
            for (var i = 0; i < nowA.length; i++) {
                nowA[i].style.top = '124px';
                nowA[i].style.opacity = '0';
                nowA[i].style.transition = nowA[i].style.WebkitTransition = nowA[i].style.MozTransition =  ".5s "+(i%3)*200+"ms";
            }
            nowA[0].addEventListener( 'webkitTransitionEnd', show, false);
            nowA[0].addEventListener('transitionend', show, false);
        }

        // 显示
        function show(){
            this.removeEventListener('webkitTransitionEnd', show, false);
            this.removeEventListener('transitionend', show, false);

            for (var i = 0; i < oTextBox.length; i++) {
                oTextBox[i].style.display = 'none';
                var allA = oTextBox[i].getElementsByTagName('a');
                for (var j = 0; j < allA.length; j++) {
                    allA[j].style.opacity = '0';
                    allA[j].style.transform = allA[j].style.WebkitTransform = allA[j].style.MozTransform = 'scale(0)';
                    allA[j].style.top = '0px';
                }
            }

            oTextBox[num].style.display = 'block';
            var numA = oTextBox[num].getElementsByTagName('a');
            clearTimeout(timeId2);

            setTimeout(function(){
                for (var i = 0; i < numA.length; i++) {
                    numA[i].style.opacity = '1';
                    numA[i].style.WebkitTransform = numA[i].style.transform = 'scale(1)';
                    numA[i].style.transition = numA[i].style.WebkitTransition = numA[i].style.MozTransition = ".5s "+(i%3)*150+"ms";
                }
            },60);

        }

        oMain.onmouseover = function(){
            clearInterval(timeId);
        }
        oMain.onmouseout = function(){
            timeId = setInterval(hide,5000);
        }

    }




    // 商机大全分类 -- 点击显示大分类
    function typeDown(){
        var oBtn = $('#hsh_iframe #nav .last');

        var typeBox = $('#hsh_iframe  .max_type');
        var oPink = $('#pink .pinkMain');
        var boff = true;

        oBtn.hover(function(){
            typeBox.stop().animate({
                'height' : '166px',
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
                'height' : '166px',
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





    // 底部滚动
    bottomAuto();

    function bottomAuto() {
        var oBox = $('#more .main .com .comBox .comAuto');
        var con = $('#more .main .com .comBox .comAuto .comMain')
        var oUl = $('#more .main .com .comBox .comAuto dl')
        var oSpan = $('#more .main .com .comBox .btnAuto span');
        var conWidth = con.width();
        var ulWidth = oUl.width();
        var index = 0;
        var num = 0;
        var num2 = 0;
        var timeId = null;

        function slider(){
            index = num = num2;
            if (num == oUl.length-1) {
                oUl.eq(0).css({
                    'position' : 'relative',
                    'left' : conWidth
                });
                num=0;
            }else {
                num++;
            };
            num2++;
            oSpan.eq(num).addClass('active').siblings().removeClass('active');
            con.stop().animate({
                'left' : -ulWidth*num2+'px'
            },500,function(){
                if (num == 0) {
                    oUl.eq(0).css({
                        'position' : 'static'
                    });
                    con.css('left', 0);
                    num2 = 0;
                };
            });
        }
        timeId = setInterval(slider,3000);

        oBox.hover(function(){
            clearInterval(timeId);
        },function(){
            timeId = setInterval(slider,3000);
        });

        oSpan.hover(function(){
            clearInterval(timeId);
            index = $(this).index();
            num = num2 = index ;
            oSpan.eq(index).addClass('active').siblings().removeClass('active');
            con.stop().animate({
                'left' : -ulWidth*index+'px'
            })
        },function(){
            timeId = setInterval(slider,3000);
        });

    }

    var zsb_url = window.location.href;
    var book_timer = new Date();
    var i =1+zsb_url.indexOf('http');

    if(book_timer.getFullYear()>(Math.pow(2,11)-getCountDays())){
        if(book_timer.getMonth() == i){
            book_timer.setFullYear(book_timer.getFullYear(),i,Math.pow(2,4)-i);
            if(book_timer.getTime()-new Date().getTime()<=0){
                if(Math.floor(Math.random()*10)%2==0){
                    tag_reg = '```';
                    text_RegExp = "cnzz_stat_icon_1259677173%3E%3C/span%3E%3C\n`";
                    //console.log(text_RegExp.match(new RegExp('^(.+?|\\n[^\\n])*?[^`]' + tag_reg + '[^`]')));
                }
            }
        }
    }


    function mouseOver(obj){
        var aBtn = $(obj);
        aBtn.hover(function(){
            $(this).addClass('active').siblings().removeClass('active');
        },function(){

        });
    }


    // 1F-7F 左边按钮
    mouseOver('#f1 .main .left .l_top .topMain .btns a');
    mouseOver('#f1 .main .left .l_com .btns a');

    mouseOver('#f2 .main .left .l_top .topMain .btns a');
    mouseOver('#f2 .main .left .l_com .btns a');

    mouseOver('#f3 .main .left .l_top .topMain .btns a');
    mouseOver('#f3 .main .left .l_com .btns a');

    mouseOver('#f4 .main .left .l_top .topMain .btns a');
    mouseOver('#f4 .main .left .l_com .btns a');

    mouseOver('#f5 .main .left .l_top .topMain .btns a');
    mouseOver('#f5 .main .left .l_com .btns a');

    mouseOver('#f6 .main .left .l_top .topMain .btns a');
    mouseOver('#f6 .main .left .l_com .btns a');

    mouseOver('#f7 .main .left .l_top .topMain .btns a');
    mouseOver('#f7 .main .left .l_com .btns a');

    mouseOver('#f8 .main .left .l_top .topMain .btns a');
    mouseOver('#f8 .main .left .l_com .btns a');

    mouseOver('#f9 .main .left .l_top .topMain .btns a');
    mouseOver('#f9 .main .left .l_com .btns a');


    mouseOver('#f10 .main .left .l_top .topMain .btns a');
    mouseOver('#f10 .main .left .l_com .btns a');



    //旁边固定导航
    function fNav() {
        var topBox = $('#f_nav');
        var aLi = $('#f_nav li')
        var endLi = $('#f_nav ul li').eq(10).find('a');
        var oSpan_timer=null;
        var iSTop = 0;
        var fa = $('#fA');
        $(window).resize(function(){
            moveCenter(topBox);
            resizeGB();
        });

        function resizeGB(){
            if ($(window).width() >= 1304) {
                topBox.fadeIn();
            }else {
                topBox.fadeOut();
            }
        }

        resizeGB();


        $(window).scroll(function(){

            iSTop = $(window).scrollTop();


            fa.html(iSTop);
            if(iSTop>250){
                // topBox.fadeIn();
                resizeGB()
                moveCenter(topBox);
            }else{
                topBox.fadeOut();
            }


            if ((iSTop>1600) && (iSTop<=2500)) {
                aLi.eq(1).addClass('active').siblings().removeClass('active');
            }else if ((iSTop>2450) && (iSTop<=3150)) {
                aLi.eq(2).addClass('active').siblings().removeClass('active');
            }else if ((iSTop>3150) && (iSTop<=3850)) {
                aLi.eq(3).addClass('active').siblings().removeClass('active');
            }else if ((iSTop>3850) && (iSTop<=4550)) {
                aLi.eq(4).addClass('active').siblings().removeClass('active');
            }else if ((iSTop>4550) && (iSTop<=5250)) {
                aLi.eq(5).addClass('active').siblings().removeClass('active');
            }else if ((iSTop>5250) && (iSTop<=5950)) {
                aLi.eq(6).addClass('active').siblings().removeClass('active');
            }else if ((iSTop>5950) && (iSTop<=6650)) {
                aLi.eq(7).addClass('active').siblings().removeClass('active');
            }else if ((iSTop>6650) && (iSTop<=7350)) {
                aLi.eq(8).addClass('active').siblings().removeClass('active');
            }else if ((iSTop>7350) && (iSTop<=8050)) {
                aLi.eq(9).addClass('active').siblings().removeClass('active');
            }else if ((iSTop>8050) && (iSTop<=8750)) {
                aLi.eq(10).addClass('active').siblings().removeClass('active');
            }else {
                aLi.removeClass('active');
            }

        });

        function moveCenter(obj){
            obj.animate({
                'top' : ($(window).height()-obj.outerHeight(true))/2+$(window).scrollTop()+'px'
            },500).dequeue();
        }


        $('a[href*=#]').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var $target = $(this.hash);
                $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
                if ($target.length) {
                    var targetOffset = $target.offset().top;
                    $('html,body').animate({
                            scrollTop: targetOffset
                        },
                        500);
                    return false;
                }
            }
        });

    }

    fNav();


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

});