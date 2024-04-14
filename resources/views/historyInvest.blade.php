<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="zh-CN">
    <title>Vinhomes </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="telephone=no" name="format-detection">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="Shortcut Icon" href="statics/images/favinpearl.png">
    <link rel="apple-touch-icon-precomposed" href="statics/images/favinpearl.png">
    <link type="text/css" rel="stylesheet" href="statics/css/global.css">
    <link type="text/css" rel="stylesheet" href="statics/css/common_touch.css?2019">
    <link type="text/css" rel="stylesheet" href="statics/css/font/iconfont.css">
    <script type="text/javascript" src="statics/js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="statics/js/layer/layer.min.js"></script>
    <link rel="stylesheet" href="https://vinhomess.org/statics/js/layer/theme/default/layer.css?v=3.1.0" id="layuicss-layer">
    <script type="text/javascript" src="statics/js/global.js"></script>
    <script type="text/javascript" src="statics/js/common.js"></script>
    <script type="text/javascript">
        var WEB_PATH = '/'; //首页路径
        var INDEX_PATH = 'index.php?'; //首页URL
        var JS_PATH = 'statics/js/'; //JS路径
        var CSS_PATH = 'statics/css/'; //CSS路径
        var IMG_PATH = 'statics/images/'; //IMG路径
        var USERNAME_TYPE = '*'; //用户名的限制类型
        var ISMOBILE = 0; //是否手机
    </script>
    <script>
        if (('standalone' in window.navigator) && window.navigator.standalone) {
            var noddy, remotes = false;
            document.addEventListener('click', function(event) {
                noddy = event.target;
                while (noddy.nodeName !== 'A' && noddy.nodeName !== 'HTML') noddy = noddy.parentNode;
                if ('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)) {
                    event.preventDefault();
                    document.location.href = noddy.href;
                }
            }, false);
        }
    </script>

    <style>
        #chat-widget-container {
            bottom: 55px !important;
        }
    </style>
</head>

<body>
    <link type="text/css" rel="stylesheet" href="statics/css/style.mobile.css">
    <link type="text/css" rel="stylesheet" href="statics/css/swiper.min.css">
    <script type="text/javascript" src="statics/js/swiper.min.js"></script>
    <script type="text/javascript" src="statics/js/hSdrop.js"></script>
    <style>
        .header .container {
            position: absolute;
            top: 10px;
            right: 1%;
            width: 20%;
            height: 26px;
            line-height: 26px;
        }

        .header .container .x12 {
            right: 10px;
        }

        .m-form-gp .m-from-input input {
            height: 30px;
        }
    </style>
    <div class="main pay">
        <div class="header">
            <a class="back" href="{{ route('me') }}" title="Trở lại"><i class="iconfont icon-fanhui"></i></a>
            <!-- <a class="home" href="?a=init" title="首页"><i class="iconfont icon-home"></i></a> -->
            <input type="hidden" name="" id="select-value" value="">
            <div class="container">
                <div class="x12">
                    <div class="x12 m-form-gp">
                        <div class="x12 m-from-input select-xi sele-bp">
                            <input type="text" name="" id="select-input" value="" days="" placeholder="Tất cả" disabled="disabled">
                            <i class="iconfont iconqangwang-xia"></i>
                        </div>

                        <div class="display-none" id="days">
                            <div vid="180">Tất cả</div>
                            <div vid="1">Hôm nay</div>
                            <div vid="7">Trong vòng 7 ngày</div>
                            <div vid="30">Trong vòng 30 ngày</div>
                            <div vid="90">Trong vòng 90 ngày</div>
                        </div>
                    </div>

                </div>
            </div>
            <h4>Hóa đơn tài chính</h4>

        </div>


        <div class="scroll_box" style="height: 914px;">

            <div class="table">
                @if(count($lotos) > 0)
                <div class="list">
                    <ul>
                        <li class="w50 tl">Ghi chú</li>
                        <li class="w50 tr">Thời gian</li>
                        <li class="w30">Số tiền</li>
                        <li class="w70 tr f12">Số đơn hàng</li>
                    </ul>
                </div>
                @foreach($lotos as $item)
                <div class="list">
                    <ul>
                        <li class="w50 tl state">
                            Bạn đã đầu tư
                        </li>
                        <li class="w50 tr time">{{ $item->created_at }}</li>
                        <li class="w30 val">{{ number_format($item->result_money) }} VNĐ</li>
                        <li class="w70 tr f12">Tại phiên{{ $item->phien_id }}</li>
                    </ul>
                </div>
                @endforeach
                @else

                <div class="list">
                    <div class="no-data">Không có dữ liệu</div>
                </div>
                @endif
            </div>
            <div id="pages"></div>
        </div>
    </div>


    <script type="text/javascript">
        var paydata = []; //数据
        var stamp = 'VNĐ'; //货币单位

        var state = new Array('<span style="color: #FFA700;">Chờ thanh toán</span>', '<span style="color: #00B520;">Nạp tiền trực tuyến</span>', '<span style="color: #0070FF;">Nạp tiền thủ công</span>', '<span style="color: #0070FF;">Nạp tiền đại lý</span>', '<span style="color: #F00;">Nạp tiền không thành công</span>');
        $(function() {
            new hSdrop({
                els: '.sele-bp'
            })
            var html = '';
            $.each(paydata, function(i, v) {
                var button = '';
                if (v.state == 0) {
                    //button = '<li class="btn"><a href="{{ route('pay') }}_ewm&payid='+v.payid+'">立即支付</a></li>';
                }
                var comment = '';
                if (v.comment != '') {
                    comment = '<li class="msg">' + v.comment + '</li>';
                }

                var type2 = v.type2;
                /*if(v.type2 == 'zfbsm'){
                    type2 = '(Quét mã Alipay)';
                }else if(v.type2 =='ylkj'){
                    type2 = '(UnionPay Express)';
                }*/

                //拼接数据
                html += '' +
                    '<ul>' +
                    //'<li class="w50 tl state">'+state[v.state]+'【'+type2+'】</li>'+
                    '<li class="w50 tl state">' + state[v.state] + '</li>' +
                    '<li class="w50 tr time">' + getLocalTime(v.addtime) + '</li>' +
                    '<li class="w30 val">' + v.money + '</li>' +
                    //'<li class="w70 tr f12">Số đơn hàng '+v.payid+'</li>'+
                    comment +
                    button +
                    '</ul>';
            });
            setTimeout(function() { //让加载效果显示，并保证元素加载完成
                if (html) {
                    $('.list').empty().append(html);
                } else {
                    $('.list').empty().append('<div class="no-data">Không có dữ liệu</div>');
                }
            }, 100);

            $('#select-value').click(function() {
                //$('#select-value').bind('input propertychange', function() {
                console.log('chufa');
                var days = $('#select-value').val();
                $.ajax({
                    url: "{{ route('pay') }}_list_day&days=" + days,
                    type: 'GET',
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        var htmlx = '';
                        $.each(data, function(i, v) {
                            var button = '';
                            if (v.state == 0) {
                                //button = '<li class="btn"><a href="{{ route('pay') }}_ewm&payid='+v.payid+'">立即支付</a></li>';
                            }
                            var comment = '';
                            if (v.comment != '') {
                                comment = '<li class="msg">' + v.comment + '</li>';
                            }
                            //拼接数据
                            htmlx += '' +
                                '<ul>' +
                                '<li class="w50 tl state">' + state[v.state] + '</li>' +
                                '<li class="w50 tr time">' + getLocalTime(v.addtime) + '</li>' +
                                '<li class="w30 val">' + stamp + v.money + '</li>' +
                                '<li class="w70 tr f12">Số đơn hàng ' + v.payid + '</li>' +
                                comment +
                                button +
                                '</ul>';
                        });
                        setTimeout(function() { //让加载效果显示，并保证元素加载完成
                            if (htmlx) {

                                $('.list').empty().append(htmlx);
                            } else {
                                $('.list').empty().append('<div class="no-data">Không có dữ liệu</div>');
                            }
                        }, 100);
                    }
                });

            });


            //自动调整窗口
            $(window).resize(function() {
                var h = $(window).height();
                $('.scroll_box').css({
                    'height': h - 49
                });
            }).resize();
        });
    </script>
    <!-- Start of LiveChat (www.livechat.com) code -->
    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 17674977;;
        (function(n, t, c) {
            function i(n) {
                return e._h ? e._h.apply(null, n) : e._q.push(n)
            }
            var e = {
                _q: [],
                _h: null,
                _v: "2.0",
                on: function() {
                    i(["on", c.call(arguments)])
                },
                once: function() {
                    i(["once", c.call(arguments)])
                },
                off: function() {
                    i(["off", c.call(arguments)])
                },
                get: function() {
                    if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                    return i(["get", c.call(arguments)])
                },
                call: function() {
                    i(["call", c.call(arguments)])
                },
                init: function() {
                    var n = t.createElement("script");
                    n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n)
                }
            };
            !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
        }(window, document, [].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/17674977/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->

</body>

</html>