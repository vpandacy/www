function tabs () {
};
$(function () {

    $(document).on('click', '.editdata', function () {
        var _this = $(this);
        var _id = '{' + _this.parent().attr('data') + '}';
        var _data = eval('(' + _id + ')');
        layer.open({
            type: 1, //0-4的选择,
            title: [
                '添加广告',
                'border:none; background:#61BA7A; color:#fff;'
            ],
            border: [0],
            fix: false,
            shadeClose: true,
            bgcolor: '#eee', //设置层背景色
            area: ['488px', 'auto'],
            content: '    <div style="padding:25px;">\n' +
            '        <form id="form" name="form1" action="#" method="post">\n' +
            '            <div class="form_one">\n' +
            '                <div>\n' +
            '                    <div class="form_top">\n' +
            '                        <div >当前位置</div>\n' +
            '                        <div >首页--顶部图片--1x10</div>\n' +
            '                    </div>\n' +
            '                    <div class="form_top">\n' +
            '                        <div>项目名称</div>\n' +
            '                        <div class="ml20">\n' +
            '                            <select class="form_select">\n' +
            '                                <option selected>项目简称</option>\n' +
            '                                <option>项目简称1</option>\n' +
            '                                <option>项目简称2</option>\n' +
            '                            </select>\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                    <div class="pewier">预览</div>\n' +
            '            </div>\n' +
            '            <!-- tab -->\n' +
            '            <div class="tab">\n' +
            '                <div class="tabt">\n' +
            '                    <div class="tab_title">文字广告</div>\n' +
            '                    <div class="tab_title">图片广告</div>\n' +
            '                    <div class="tab_title">图文广告</div>\n' +
            '                </div>\n' +
            '                <div class="tabc">\n' +
            '                    <div class="tab_content">\n' +
            '                        <div class="content_style">\n' +
            '                        <div class="img_div"></div>\n' +
            '                        <div class="img_div"></div>\n' +
            '                        <div class="img_div"></div>\n' +
            '                        <div class="img_div"></div>\n' +
            '                        <div class="img_div"></div>\n' +
            '                        <div class="img_div"></div>\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                    <div class="tab_content">图片广告1</div>\n' +
            '                    <div class="tab_content">图文广告1</div>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '        </form>\n' +
            '    </div>\n',
            shift: 'top' //从上动画弹出
        });
        $('#submit1').click(function () {
            $.ajax({
                url: '/back/Position/insert/',
                type: 'post',
                data: $('form').serializeArray(),
                async: false, //默认为true 异步
                error: function () {
                    alert('error');
                },
                success: function (data) {
                    var obj = JSON.parse(data);
                    if (obj.status == '1') {
                        layer.alert(obj.info, {icon: 1});
                    } else {
                        layer.alert(obj.info, {icon: 2});
                    }
                }
            });
        });
        function tabs() {
            var list = document.getElementsByClassName("tab_title");
            var textlist = document.getElementsByClassName("tab_content");
            for (var i = 0; i < list.length; i++) {
                list[0].className = "tab_title tab-active" // 默认第一个
                textlist[1].style.display = "none";
                textlist[2].style.display = "none";
                // textlist[0].style.display = "block"
                list[i].index = i;
                list[i].onclick = function () {
                    for(var j = 0;j<list.length;j++){
                        list[j].className = '';
                        // list[0].addClass('tab_title tab-active')
                    }
                    this.className = 'tab_title tab-active';
                    for(var i = 0;i<textlist.length;i++)
                    {
                        textlist[i].style.display = "none";
                    }
                    textlist[this.index].style.display = "block";
                }
            }
        }
        tabs();
        return false;
    });

    $('.editad').on('click', function () {
        var _this = $(this);
        var _id = '{' + _this.attr('data') + '}';
        var _data = eval('(' + _id + ')');
        layer.open({
            type: 1, //0-4的选择,
            title: [
                '编辑广告',
                'border:none; background:#61BA7A; color:#fff;'
            ],
            border: [0],
            fix: false,
            shadeClose: true,
            bgcolor: '#eee', //设置层背景色
            area: ['488px', 'auto'],
                content: '    <div style="padding:25px;">\n' +
                '        <form id="form" name="form1" action="#" method="post">\n' +
                '            <div class="form_one">\n' +
                '                <div>\n' +
                '                    <div class="form_top">\n' +
                '                        <div >当前位置</div>\n' +
                '                        <div >首页--顶部图片--1x10</div>\n' +
                '                    </div>\n' +
                '                    <div class="form_top">\n' +
                '                        <div>项目名称</div>\n' +
                '                        <div class="ml20">\n' +
                '                            <select class="form_select">\n' +
                '                                <option selected>项目简称</option>\n' +
                '                                <option>项目简称1</option>\n' +
                '                                <option>项目简称2</option>\n' +
                '                            </select>\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                </div>\n' +
                '                    <div class="pewier">预览</div>\n' +
                '            </div>\n' +
                '            <!-- tab -->\n' +
                '            <div class="tab">\n' +
                '                <div class="tabt">\n' +
                '                    <div class="tab_title">文字广告</div>\n' +
                '                    <div class="tab_title">图片广告</div>\n' +
                '                    <div class="tab_title">图文广告</div>\n' +
                '                </div>\n' +
                '                <div class="tabc">\n' +
                '                    <div class="tab_content">\n' +
                '                        <div class="content_style">\n' +
                '                        <div class="img_div"></div>\n' +
                '                        <div class="img_div"></div>\n' +
                '                        <div class="img_div"></div>\n' +
                '                        <div class="img_div"></div>\n' +
                '                        <div class="img_div"></div>\n' +
                '                        <div class="img_div"></div>\n' +
                '                        </div>\n' +
                '                    </div>\n' +
                '                    <div class="tab_content">图片广告1</div>\n' +
                '                    <div class="tab_content">图文广告1</div>\n' +
                '                </div>\n' +
                '            </div>\n' +
                '        </form>\n' +
                '    </div>\n',
            shift: 'top' //从上动画弹出
        });
        $('#submit1').click(function () {
            $.ajax({
                url: '/back/Position/update/',
                type: 'post',
                data: $('form').serializeArray(),
                async: false, //默认为true 异步
                error: function () {
                    alert('error');
                },
                success: function (data) {
                    var obj = JSON.parse(data);
                    if (obj.status == '1') {
                        layer.alert(obj.info, {icon: 1});
                    } else {
                        layer.alert(obj.info, {icon: 2});
                    }
                }
            });
        });
        function tabs() {
            var list = document.getElementsByClassName("tab_title");
            var textlist = document.getElementsByClassName("tab_content");
            for (var i = 0; i < list.length; i++) {
                list[0].className = "tab_title tab-active" // 默认第一个
                textlist[1].style.display = "none";
                textlist[2].style.display = "none";
                // textlist[0].style.display = "block"
                list[i].index = i;
                list[i].onclick = function () {
                    for(var j = 0;j<list.length;j++){
                        list[j].className = '';
                        // list[0].addClass('tab_title tab-active')
                    }
                    this.className = 'tab_title tab-active';
                    for(var i = 0;i<textlist.length;i++)
                    {
                        textlist[i].style.display = "none";
                    }
                    textlist[this.index].style.display = "block";
                }
            }
        }
        tabs();
        return false;
    });

    $('#addmore a').on('click', function () {
        var _this = $(this);
        var _id = '{' + _this.attr('data') + '}';
        var _data = eval('(' + _id + ')');
        layer.open({
            type: 1, //0-4的选择,
            title: [
                '批量添加',
                'border:none; background:#61BA7A; color:#fff;'
            ],
            border: [0],
            fix: false,
            shadeClose: true,
            bgcolor: '#eee', //设置层背景色
            area: ['488px', 'auto'],
            content: '    <div style="padding:25px;">\n' +
            '        <form id="form" name="form1" action="#" method="post">\n' +
            '            <div class="form_one">\n' +
            '                <div>\n' +
            '                    <div class="form_top">\n' +
            '                        <div >当前位置</div>\n' +
            '                        <div >首页--顶部图片--1x10</div>\n' +
            '                    </div>\n' +
            '                    <div class="form_top">\n' +
            '                        <div>项目名称</div>\n' +
            '                        <div class="ml20">\n' +
            '                            <select class="form_select">\n' +
            '                                <option selected>项目简称</option>\n' +
            '                                <option>项目简称1</option>\n' +
            '                                <option>项目简称2</option>\n' +
            '                            </select>\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '                    <div class="pewier">预览</div>\n' +
            '            </div>\n' +
            '            <!-- tab -->\n' +
            '            <div class="tab">\n' +
            '                <div class="tabt">\n' +
            '                    <div class="tab_title">文字广告</div>\n' +
            '                    <div class="tab_title">图片广告</div>\n' +
            '                    <div class="tab_title">图文广告</div>\n' +
            '                </div>\n' +
            '                <div class="tabc">\n' +
            '                    <div class="tab_content">\n' +
            '                        <div class="content_style">\n' +
            '                        <div class="img_div"></div>\n' +
            '                        <div class="img_div"></div>\n' +
            '                        <div class="img_div"></div>\n' +
            '                        <div class="img_div"></div>\n' +
            '                        <div class="img_div"></div>\n' +
            '                        <div class="img_div"></div>\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                    <div class="tab_content">图片广告1</div>\n' +
            '                    <div class="tab_content">图文广告1</div>\n' +
            '                </div>\n' +
            '            </div>\n' +
            '        </form>\n' +
            '    </div>\n',
            shift: 'top' //从上动画弹出
        });
        $('#submore').click(function () {
            $.ajax({
                url: '/back/Position/addmore/',
                type: 'post',
                data: $('form').serializeArray(),
                async: false, //默认为true 异步
                error: function () {
                    alert('error');
                },
                success: function (data) {
                    var obj = JSON.parse(data);
                    if (obj.code == '1') {
                        layer.alert(obj.info, 9);
                    } else {
                        layer.alert(obj.info, 8);
                    }
                }
            });
        });
        function tabs() {
            var list = document.getElementsByClassName("tab_title");
            var textlist = document.getElementsByClassName("tab_content");
            for (var i = 0; i < list.length; i++) {
                list[0].className = "tab_title tab-active" // 默认第一个
                textlist[1].style.display = "none";
                textlist[2].style.display = "none";
                // textlist[0].style.display = "block"
                list[i].index = i;
                list[i].onclick = function () {
                    for(var j = 0;j<list.length;j++){
                        list[j].className = '';
                        // list[0].addClass('tab_title tab-active')
                    }
                    this.className = 'tab_title tab-active';
                    for(var i = 0;i<textlist.length;i++)
                    {
                        textlist[i].style.display = "none";
                    }
                    textlist[this.index].style.display = "block";
                }
            }
        }
        tabs();
        return false;
    });
    $(document).on('click', '#seepic', function () {
        var _val = $('#picpath').val();
        if (_val != '') {
            layer.open({
                type: 1,
                title: false, //不显示默认标题栏
                // shadeClose: true,
//                shade: [1], //不显示遮罩
                area: ['auto', 'auto'],
                //page: {html: '<img src="' + _val + '" alt="">'}
                content: '<img style="display:block" src="' + _val + '" alt="">'
            });
        }
        return false;
    });

});

function ajaxFileUpload() {
    $.ajaxFileUpload
    (
        {
            url: '/back/Position/upfile', //你处理上传文件的服务端
            secureuri: false,
            fileElementId: 'pic',
            dataType: 'json',
            success: function (data) {
                if (data.status != '0') {
                    $('#picpath').val(data.pic);
                } else {
                    layer.alert(data.msg, 8);
                }
            }
        }
    );
    return false;
}

function addcss(obj) {
    var _this = $(obj);
    // _this.attr('style','position: relative;');
    _this.append('<button class="editdata" title="添加位置">+</button>');
}

function recss(obj) {
    var _this = $(obj);
    _this.children('.editdata').remove();
}
