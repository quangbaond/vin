<html style="font-size: 48px;" lang="vi"><head>
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
    <script type="text/javascript" src="statics/js/layer/layer.min.js"></script><link rel="stylesheet" href="https://vinhomess.org/statics/js/layer/theme/default/layer.css?v=3.1.0" id="layuicss-layer">
    <script type="text/javascript" src="statics/js/global.js"></script>
    <script type="text/javascript" src="statics/js/common.js"></script>
    <script type="text/javascript">
        var WEB_PATH = '/';//首页路径
        var INDEX_PATH = 'index.php?';//首页URL
        var JS_PATH = 'statics/js/';//JS路径
        var CSS_PATH = 'statics/css/';//CSS路径
        var IMG_PATH = 'statics/images/';//IMG路径
        var USERNAME_TYPE = '*';//用户名的限制类型
        var ISMOBILE = 0;//是否手机
    </script>
    <script>
        if(('standalone' in window.navigator)&&window.navigator.standalone){
            var noddy,remotes=false;
            document.addEventListener('click',function(event){
                noddy=event.target;
                while(noddy.nodeName!=='A'&&noddy.nodeName!=='HTML') noddy=noddy.parentNode;
                if('href' in noddy&&noddy.href.indexOf('http')!==-1&&(noddy.href.indexOf(document.location.host)!==-1||remotes)){
                    event.preventDefault();
                    document.location.href=noddy.href;
                }
            },false);
        }
    </script>
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
<style>#app, .footer-nav, .dream-header, .header-nav{max-width:750px;margin:auto}.my_item_more img{display:block;margin:auto;width:auto}</style>
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '{{ env('SMARTSUPP_KEY') }}';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<style>
    #smartsupp-widget-container div {
    bottom: 55px !important;
    }
</style>
</head>
<body>


<div class="main">
    <div class="header">
        <a class="back" href="{{ route('home') }}" title="Trở lại"><i class="iconfont icon-fanhui"></i></a>
        <a class="home" href="{{ route('home') }}" title="Trang chủ"><i class="iconfont icon-home"></i></a>
        <h4>nạp tiền </h4>
    </div>
    <div class="scroll_box">
        <div class="user_box">
                <div class="form_div" style="font-size: x-large; display:block ;text-align: center ">
                    <ul>

                        <li>
                            <div><span>Số dư：</span>
                                <span class="numberStyle">{{ auth()->user()->balance }}</span></div>
                        </li>
                    </ul>
                </div>
                <div class="submit"><input id="submit" disabled name="submit" value=" Dịch vụ CSKH " style="font-size: x-large; text-align: center "> </div>
        </div>
    </div>

    <footer class="footer-nav">
    <div>
        <li><a class="footer-link active" aria-current="page" href="{{ route('home') }}"><img src="/zhuyetu/zy1.png" style="transform: scale(1);"><span style="color: red;">Trang chủ</span></a><span></span></li>
        <li><a class="footer-link" href="{{ route('pay') }}"><img src="statics/images/7338c98e.recharge.png" style="transform: scale(1);"><span>Nạp tiền</span></a><span></span></li>
        <li><a class="footer-link" href="{{ route('me') }}"><img src="/zhuyetu/wd.png" style="transform: scale(1);"><span>Của tôi</span></a><span></span></li>
    </div>
    <p></p>
</footer>
</div>


</body>
</html>
