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
        .note {
            height: auto !important;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }

        .success {
            color: green;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>

    <style>
        #smartsupp-widget-container div {
            bottom: 55px !important;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="header">
            <a class="back" href="{{ route('me') }}" title="返回"><i class="iconfont icon-fanhui"></i></a>
            <a class="home" href="{{ route('home') }}" title="首页"><i class="iconfont icon-home"></i></a>
            <h4>Rút tiền</h4>
        </div>
        <div class="scroll_box" style="height: 914px;">
            <div class="user_box">
                <form action="{{ route('withdraw') }}" method="post">
                    @csrf
                    <div class="form_div">
                        <ul>
                            <li>
                                <input class="inputxt" type="text" id="inputxt" name="amount" value="{{ old('amount') }}" placeholder="Nhập số tiền muốn rút">
                            </li>
                            @if(session()->has('error'))
                            <li class="error">{{ session()->get('error') }}</li>
                            @endif
                            @if(session()->has('success'))
                            <li class="success">{{ session()->get('success') }}</li>
                            @endif
                            <li>
                                <textarea rows="4" class="inputxt note" type="password" id="newpassword" name="note" placeholder="Ghi chú">{{ old('note') }}</textarea>
                            </li>
                        </ul>
                    </div>
                    <div class="submit"><input type="submit" id="submit" name="submit" value=" Rút tiền "></div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $('#inputxt').keyup(function() {
            var a = $(this).val().replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            $(this).val(a)
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