<html style="font-size: 48px;" lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta name="Robots" contect="none">
    <link rel="shortcut icon" id="link-icon" href="/new image/favinpearl.png">
    <link href="statics/css/app.cc8ec.css" rel="stylesheet">
    <title>Vinhomes </title>
    <link href="statics/css/app.cc8ec.css" rel="stylesheet">
    <style>
        #app,
        .footer-nav,
        .dream-header,
        .header-nav {
            max-width: 750px;
            margin: auto
        }

        .my_item_more img {
            display: block;
            margin: auto;
            width: auto
        }
    </style>
    <style>
        .ruttien {
            width: 100% !important;
            background-color: red;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            width: 2.12rem;
            height: 0.7rem;
            align-items: center;
            font-family: PingFangSC-Regular;
            font-size: 0.28rem;
            color: #FFFFFF;
            padding-right: 5px;
            padding-left: 5px;

        }

        .my_item_div {
            display: flex;
            width: 100%;
            height: 35px !important;

            justify-content: flex-start;
        }

        .my_item_div>div {
            width: 100%;
            height: 35px !important;
            padding: 0px 60px;
            align-items: center;
            display: flex;
            flex-direction: row;
            padding: 30px;
            justify-content: flex-start;
        }

        .my_item_div>div span {
            padding: 4px;
            margin-left: 5px;
            font-size: 15px;
        }

        .money {
            display: flex;
            flex-direction: row;
        }

        .my_header_v2 {
            font-size: 16px;
            margin-left: 0px;
            margin-right: 0px;
            width: 100%;
            height: 25%;
            min-height: 200px;
        }

        .my_header_v2_div-logo {
            display: flex;
            width: 100%;
            height: auto;
            flex-flow: row wrap;
            align-items: center;
            vertical-align: middle;
            padding: 0 5%;
            margin-top: 30px;
        }

        .my_header_v2 img {
            width: 100%;
            max-width: 130px;
            height: auto;
        }

        .logo-header {
            width: 30%;
            height: auto;
            flex: 0 0 30%;
        }

        .info-user {
            font-weight: bold;
            font-size: 0.8em;
            color: black;
            line-height: 28px;
            padding: 5px 5px;

        }

        .logout {
            padding: 30px 0 !important;

        }

        .logout span {
            margin: auto !important;
            font-weight: bold;
        }

        .logout span a {
            color: red;
        }

        .my-content-wrapper {
            overflow-y: hidden;
        }
    </style>
    <style type="text/css">
        .transition {
            transition: all .3s
        }
    </style>

    <style>
        #chat-widget-container {
            bottom: 55px !important;
        }
    </style>
</head>

<body>


    <div id="app">
        <div class="my-content-wrapper style=" width:="" 525px ";="" "="">
            <div class="my-content">
                <div class="my_header_v2">
                    <div class="my_header_v2_div-logo">
                        <div class="logo-header" onclick="window.open('/?a=user_pic','_self')">
                            <img class="pic" src="/statics/css/images/6.png" alt="PIC">
                        </div>
                        <div style="width: 70%">
                            <div style="padding-left: 30px">
                                <h3 class="info-user">TÀI KHOẢN :&nbsp;&nbsp;&nbsp;{{ auth()->user()->username }}</h3>
                                <h4 class="info-user">ID :&nbsp;&nbsp;&nbsp;{{ auth()->user()->code }}</h4>

                                <span class="info-user">SỐ DƯ :&nbsp;&nbsp;&nbsp;{{ auth()->user()->balance_text }}&nbsp; VNĐ</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my_item_v2">

                    <div class="my_item_div">

                        <div class="money" onclick="window.open('{{route('pay')}}','_self')">

                            <img class="pic" src="/statics/css/images/user-tz.png" alt="PIC">
                            <span>Nạp tiền trực tuyến</span>
                        </div>

                        <div class="money" onclick="window.open('{{route('withdraw')}}', '_self')">

                            <img class="pic" src="/statics/css/images/user-zd.png" alt="PIC">
                            <span>Rút tiền trực tuyến</span>
                        </div>

                        <div class="money" onclick="window.open('{{ route('historyDeposit') }}','_self')">

                            <img class="pic" src="/statics/css/images/user-fx.png" alt="PIC">
                            <span>Lịch sử nạp tiền</span>
                        </div>
                        <div class="money" onclick="window.open('{{ route('historyWithdraw') }}','_self')">

                            <img class="pic" src="/statics/css/images/user-tx.png" alt="PIC">
                            <span>Lịch sử rút tiền</span>
                        </div>
                        <div class="money" onclick="window.open('{{ route('historyInvest') }}','_self')">
                            <img class="pic" src="/statics/css/images/user-lczd.png" alt="PIC">
                            <span>Lịch sử đầu tư</span>
                        </div>
                        <div class="money" style="border-left: medium none;" onclick="window.open('{{ route('profile') }}','_self')">
                            <img class="pic" src="/statics/css/images/user-xzjl.png" alt="PIC">
                            <span>Thông tin tài khoản</span>
                        </div>

                        <div class="logout">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <span><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     this.closest('form').submit();">Đăng xuất an toàn</a></span>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
            <footer class="footer-nav">
                <div>
                    <li><a class="footer-link active" aria-current="page" href="{{ route('home') }}"><img src="/zhuyetu/zy1.png" style="transform: scale(1);"><span style="color: red;">Trang chủ</span></a><span></span></li>
                    <li><a class="footer-link" href="{{ route('pay') }}"><img src="statics/images/7338c98e.recharge.png" style="transform: scale(1);"><span>Nạp tiền</span></a><span></span>
                    </li>
                    <li><a class="footer-link" href="{{ route('me') }}"><img src="/zhuyetu/wd.png" style="transform: scale(1);"><span>của tôi</span></a><span></span>
                    </li>
                </div>
                <p></p>
            </footer>
        </div>
    </div>
    <script>
        var container = document.getElementById('app');
        container.style.webkitOverflosScrolling = 'auto';
        container.scrollTop = 9999;
        container.style.webkitOverflosScrolling = 'touch';
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