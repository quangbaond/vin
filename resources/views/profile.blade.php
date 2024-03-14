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
    <link rel="stylesheet" href="https://vinhomess.org/statics/js/layer/theme/default/layer.css?v=3.1.0"
          id="layuicss-layer">
    <script type="text/javascript" src="statics/js/global.js"></script>
    <script type="text/javascript" src="statics/js/common.js"></script>
    <style>
        .success{
            color: green;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
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
        <a class="back" href="{{ route('me') }}" title="Trở lại"><i class="iconfont icon-fanhui"></i></a>
        <a class="home" href="{{ route('home') }}"  title="Trang chủ"><i class="iconfont icon-home"></i></a>
        <h4>Sửa thông tin</h4>
    </div>
    <div class="scroll_box" style="height: 914px;">
        <div class="user_box">
            @if(session()->has('success'))
                <li class="success">{{ session()->get('success') }}</li>
            @endif
            <form action="{{ route('updateProfile') }}" method="post">
                @csrf
                <div class="form_div">
                    <ul>
                        <li>
                            <input class="inputxt" type="text" id="username" name="username" value="{{ auth()->user()->username }}"
                                   placeholder="Đặt biệt danh">
                        </li>
                        <li>
                            <input class="inputxt" type="text" id="name" name="name" value="{{ auth()->user()->name }}"
                                   placeholder="Họ Tên">
                        </li>
                        <li>
                            <input class="inputxt" type="text" id="mobile" name="number_phone" value="{{ auth()->user()->number_phone }}"
                                   placeholder="Số điện thoại">
                        </li>
                        <li>
                            <input class="inputxt" type="text" id="bankName" name="bankName" value="{{ auth()->user()->bankName }}"
                                   placeholder="Tên ngân hàng">
                        </li>
                        <li>
                            <input class="inputxt" type="text" id="bankNumber" name="bankNumber" value="{{ auth()->user()->bankNumber }}"
                                   placeholder="Số tài khoản ngân hàng">
                        </li>
                    </ul>
                </div>
                <div class="submit"><input type="submit" id="submit" name="submit" value=" Lưu "></div>
            </form>
        </div>
        <div class="tps">
            <h4>Gợi ý：</h4>
            <p>1、Tên thật cần trùng với tên thẻ ngân hàng rút tiền, nếu không việc rút tiền sẽ không thành công</p>
            <p>2、Ngoại trừ biệt danh, các mục dữ liệu khác không thể sửa đổi lại sau khi đã lưu và xác nhận.</p>
        </div>
    </div>
</div>

</body>
</html>
