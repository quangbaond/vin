<html><head>
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
</head>
<body><link type="text/css" rel="stylesheet" href="statics/css/style.mobile.css">
<link type="text/css" rel="stylesheet" href="statics/css/swiper.min.css">
<script type="text/javascript" src="statics/js/swiper.min.js"></script>
<script type="text/javascript" src="statics/js/hSdrop.js"></script>
<style>
    .header .container{position: absolute;
        top: 10px;
        right: 1%;
        width: 20%;
        height: 26px;
        line-height: 26px;}
    .header .container .x12{
        right: 10px;
    }
    .m-form-gp .m-from-input input{height:30px;}
</style>
<div class="main pay">
    <div class="header">
        <a class="back" href="{{ route('me') }}"  title="Trở lại"><i class="iconfont icon-fanhui"></i></a>
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
        <h4>Hồ sơ Nạp tiền</h4>

    </div>


    <div class="scroll_box" style="height: 914px;">

        <div class="table">
            @if(count($historyDeposit) > 0)
                <div class="list">
                    <ul>
                        <li class="w50 tl">Trạng thái</li>
                        <li class="w50 tr">Thời gian</li>
                        <li class="w30">Số tiền</li>
                        <li class="w70 tr f12">Số đơn hàng</li>
                    </ul>
                </div>
                @foreach($historyDeposit as $item)
                    <div class="list">
                        <ul>
                            <li class="w50 tl state">
                                @if($item->status == 'pending')
                                    <span style="color: #FFA700;">Chờ thanh toán</span>
                                @elseif($item->status == 'success')
                                    <span style="color: #00B520;">Nạp tiền thành công</span>
                                @elseif($item->status == 'fail')
                                    <span style="color: #0070FF;">Nạp tiền thất bại</span>
                                @endif
                            </li>
                            <li class="w50 tr time">{{ date('d/m/Y H:i:s', strtotime($item->created_at)) }}</li>
                            <li class="w30 val">{{ number_format($item->amount) }} VNĐ</li>
                            <li class="w70 tr f12">Số đơn hàng {{ $item->id }}</li>
                        </ul>
                    </div>
                @endforeach
            @else

                <div class="list"><div class="no-data">Không có dữ liệu</div></div>
            @endif
        </div>
        <div id="pages"></div>
    </div>
</div>


<script type="text/javascript">
    var paydata = [];//数据
    var stamp = 'VNĐ';//货币单位

    var state = new Array('<span style="color: #FFA700;">Chờ thanh toán</span>', '<span style="color: #00B520;">Nạp tiền trực tuyến</span>', '<span style="color: #0070FF;">Nạp tiền thủ công</span>', '<span style="color: #0070FF;">Nạp tiền đại lý</span>', '<span style="color: #F00;">Nạp tiền không thành công</span>');
    $(function(){
        new hSdrop({
            els:'.sele-bp'
        })
        var html = '';
        $.each(paydata,function(i,v){
            var button = '';
            if (v.state == 0) {
                //button = '<li class="btn"><a href="?a=pay_ewm&payid='+v.payid+'">立即支付</a></li>';
            }
            var comment = '';
            if (v.comment != '') {
                comment = '<li class="msg">'+v.comment+'</li>';
            }

            var type2 = v.type2;
            /*if(v.type2 == 'zfbsm'){
                type2 = '(Quét mã Alipay)';
            }else if(v.type2 =='ylkj'){
                type2 = '(UnionPay Express)';
            }*/

            //拼接数据
            html += ''+
                '<ul>'+
                //'<li class="w50 tl state">'+state[v.state]+'【'+type2+'】</li>'+
                '<li class="w50 tl state">'+state[v.state]+'</li>'+
                '<li class="w50 tr time">'+getLocalTime(v.addtime)+'</li>'+
                '<li class="w30 val">'+v.money+'</li>'+
                //'<li class="w70 tr f12">Số đơn hàng '+v.payid+'</li>'+
                comment+
                button+
                '</ul>';
        });
        setTimeout(function() {//让加载效果显示，并保证元素加载完成
            if (html) {
                $('.list').empty().append(html);
            } else {
                $('.list').empty().append('<div class="no-data">Không có dữ liệu</div>');
            }
        }, 100);

        $('#select-value').click(function(){
            //$('#select-value').bind('input propertychange', function() {
            console.log('chufa');
            var days = $('#select-value').val();
            $.ajax({
                url:"?a=pay_list_day&days="+days,
                type:'GET',
                async:true,
                dataType:'json',
                success:function(data){
                    var htmlx = '';
                    $.each(data,function(i,v){
                        var button = '';
                        if (v.state == 0) {
                            //button = '<li class="btn"><a href="?a=pay_ewm&payid='+v.payid+'">立即支付</a></li>';
                        }
                        var comment = '';
                        if (v.comment != '') {
                            comment = '<li class="msg">'+v.comment+'</li>';
                        }
                        //拼接数据
                        htmlx += ''+
                            '<ul>'+
                            '<li class="w50 tl state">'+state[v.state]+'</li>'+
                            '<li class="w50 tr time">'+getLocalTime(v.addtime)+'</li>'+
                            '<li class="w30 val">'+stamp+v.money+'</li>'+
                            '<li class="w70 tr f12">Số đơn hàng '+v.payid+'</li>'+
                            comment+
                            button+
                            '</ul>';
                    });
                    setTimeout(function() {//让加载效果显示，并保证元素加载完成
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
            $('.scroll_box').css({'height':h-49});
        }).resize();
    });
</script>

<svg id="zohocomponents__svg" style="display: none" class="zh-dnone"><symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--add"> <polygon points="13,7.3 8.7,7.3 8.7,3 7.3,3 7.3,7.3 3,7.3 3,8.7 7.3,8.7 7.3,13 8.7,13 8.7,8.7 13,8.7 "></polygon> </symbol><symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--arrow"> <polygon points="6.5,12.5 5.5,11.5 9,8 5.5,4.5 6.5,3.5 11,8"></polygon> </symbol> <symbol id="zc__svg--arrowbottom" viewBox="0 0 10.70711 6.06066"> <polyline points="10.354 0.354 5.354 5.354 0.354 0.354"></polyline> </symbol> 	 <symbol id="zc__svg--arrowleft" viewBox="0 0 6.06066 10.70711"> <polyline points="5.707 10.354 0.707 5.354 5.707 0.354"></polyline> </symbol> 	 <symbol id="zc__svg--arrowright" viewBox="0 0 6.06066 10.70711"> <polyline points="0.354 0.354 5.354 5.354 0.354 10.354"></polyline> </symbol> <symbol id="zc__svg--arrowup" viewBox="0 0 10.70711 6.06066"> <polyline points="0.354 5.707 5.354 0.707 10.354 5.707"></polyline> </symbol> 	 	<symbol id="zc__svg--backward" viewBox="0 0 12 12" width="100%" height="100%"><polygon points="6.6,10.3 2.9,6.5 6.6,2.7 7.4,3.4 4.3,6.5 7.4,9.6"></polygon></symbol><symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--buttonarrow"> <polygon points="3.5,6.5 4.5,5.5 8,9 11.5,5.5 12.5,6.5 8,11"></polygon> </symbol><symbol viewBox="0 0 14 14" width="100%" height="100%" id="zc__svg--calendaricon"> <rect x="-22.5" y="3.5" width="13" height="10"></rect> <path d="M-10,4v9h-12V4H-10 M-9,3h-14v11h14V3L-9,3z"></path> <rect x="-20.6" y="1.4" width="1.2" height="3.2"></rect> <path d="M-19.8,1.8v2.5h-0.5V1.8H-19.8 M-19,1h-2v4h2V1L-19,1z"></path> <rect x="-20.6" y="7.4" width="1.2" height="1.2"></rect> <path d="M-19.8,7.8v0.5h-0.5V7.8H-19.8 M-19,7h-2v2h2V7L-19,7z"></path> <rect x="-16.6" y="1.4" width="1.2" height="3.2"></rect> <path d="M-15.8,1.8v2.5h-0.5V1.8H-15.8 M-15,1h-2v4h2V1L-15,1z"></path> <rect x="-12.6" y="1.4" width="1.2" height="3.2"></rect> <path d="M-11.8,1.8v2.5h-0.5V1.8H-11.8 M-11,1h-2v4h2V1L-11,1z"></path> <rect x="-16.6" y="7.4" width="1.2" height="1.2"></rect> <path d="M-15.8,7.8v0.5h-0.5V7.8H-15.8 M-15,7h-2v2h2V7L-15,7z"></path> <rect x="-12.6" y="7.4" width="1.2" height="1.2"></rect> <path d="M-11.8,7.8v0.5h-0.5V7.8H-11.8 M-11,7h-2v2h2V7L-11,7z"></path> <rect x="-20.6" y="10.4" width="1.2" height="1.2"></rect> <path d="M-19.8,10.8v0.5h-0.5v-0.5H-19.8 M-19,10h-2v2h2V10L-19,10z"></path> <rect x="-16.6" y="10.4" width="1.2" height="1.2"></rect> <path d="M-15.8,10.8v0.5h-0.5v-0.5H-15.8 M-15,10h-2v2h2V10L-15,10z"></path> <rect x="-12.6" y="10.4" width="1.2" height="1.2"></rect> <path d="M-11.8,10.8v0.5h-0.5v-0.5H-11.8 M-11,10h-2v2h2V10L-11,10z"></path> <path d="M4,3c0.6,0,1-0.4,1-1V1H3v1C3,2.6,3.4,3,4,3z"></path> <rect x="2" y="7" width="2" height="2"></rect> <rect x="2" y="10" width="2" height="2"></rect> <rect x="6" y="7" width="2" height="2"></rect> <rect x="6" y="10" width="2" height="2"></rect> <rect x="10" y="7" width="2" height="2"></rect> <rect x="10" y="10" width="2" height="2"></rect> <path d="M12.8,2c0,1-0.8,1.8-1.8,1.8S9.2,3,9.2,2H5.8C5.8,3,5,3.8,4,3.8S2.2,3,2.2,2H0v3v9h14V5V2H12.8z M13,13H1V6h12V13z"></path> <path d="M11,3c0.6,0,1-0.4,1-1V1h-2v1C10,2.6,10.4,3,11,3z"></path> </symbol><symbol viewBox="0 0 21.9 21.9" width="100%" height="100%" id="zc__svg--clear"> <path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0 c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4 s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3 s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7 s-0.1-0.5-0.3-0.7L14.1,11.3z"></path> </symbol><symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--close"> <rect x="1.5" y="7.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3137 8)" class="st0" width="13" height="1.1"></rect> <rect x="1.5" y="7.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 8 -3.3137)" class="st0" width="13" height="1.1"></rect> </symbol><symbol viewBox="0 0 600 598" width="100%" height="100%" id="zc__svg--zcolorpicker-advancedpicker"> <path d="M299.7-0.2C128.3-0.2-7,134,0.2,305.2C7.4,476.9,138,577.3,259.7,595.9c88.2,13.4,107.8-45.1,87.3-67.3 c-35.5-38.3-22.6-68.6-7.3-82.5c17.4-15.7,50.3-17.3,77.3-13.8c65.5,8.5,175-40,182.2-144.8C611,116.5,471.1-0.2,299.7-0.2z M118.1,299.7c-27.7,0-50.1-22.4-50.1-50.1c0-27.7,22.4-50.1,50.1-50.1c27.7,0,50.1,22.4,50.1,50.1 C168.2,277.3,145.8,299.7,118.1,299.7z M217.6,166.6c-27.7,0-50.1-22.4-50.1-50.1c0-27.7,22.4-50.1,50.1-50.1 c27.7,0,50.1,22.4,50.1,50.1C267.7,144.1,245.2,166.6,217.6,166.6z M384.9,166.9c-27.7,0-50.1-22.4-50.1-50.1 c0-27.7,22.4-50.1,50.1-50.1c27.7,0,50.1,22.4,50.1,50.1C435,144.4,412.6,166.9,384.9,166.9z M485.2,299.9 c-27.7,0-50.1-22.4-50.1-50.1c0-27.7,22.4-50.1,50.1-50.1c27.7,0,50.1,22.4,50.1,50.1C535.2,277.5,512.8,299.9,485.2,299.9z"> </path> </symbol><symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--zcolorpicker-nocolor"> <path d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M8,1c1.8,0,3.3,0.7,4.6,1.7l-9.9,9.9C1.7,11.3,1,9.8,1,8 C1,4.1,4.1,1,8,1z M8,15c-1.8,0-3.3-0.7-4.6-1.7l9.9-9.9C14.3,4.7,15,6.2,15,8C15,11.9,11.9,15,8,15z"></path> </symbol><symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--confirm"> <g> <path d="M24,0C10.7,0,0,10.7,0,24s10.7,24,24,24s24-10.7,24-24C48,10.8,37.3,0,24,0z M24,44.1c-11,0-20-9-20-20s9-20,20-20s20,9,20,20C44,35.2,35,44.1,24,44.1z"></path> <g> <path d="M22.8,31.9c-1.7,0-2.6,0.9-2.6,2.7c0,0.9,0.2,1.5,0.7,2c0.4,0.5,1.1,0.7,1.9,0.7c0.8,0,1.5-0.2,1.9-0.7c0.5-0.5,0.7-1.1,0.7-2c0-0.8-0.2-1.5-0.7-2C24.3,32.2,23.6,31.9,22.8,31.9z"></path> <path d="M29.3,12.4c-1.3-1.1-3.2-1.7-5.5-1.7s-4.4,0.5-6.5,1.4c-1.1,0.5-0.6,1.7-0.6,1.7l0.5,1c0,0,0.5,0.9,1.7,0.5l0,0c0.5-0.2,1-0.4,1.5-0.6c0.9-0.3,2-0.5,3.1-0.5c1.2,0,2.2,0.3,2.8,0.8c0.7,0.5,1,1.3,1,2.3c0,0.8-0.2,1.6-0.6,2.2c-0.4,0.6-1.3,1.5-2.7,2.6c-1.2,0.9-2,1.8-2.5,2.7c-0.5,0.9-0.7,1.9-0.7,3.2c0,0.9,1.1,1.1,1.1,1.1h0.7c0,0,1.4,0,1.6-1.2l0,0c0-0.8,0.2-1.4,0.5-1.8c0.4-0.6,1.1-1.3,2.2-2.1c1.3-1,2.2-1.8,2.7-2.4s0.9-1.3,1.2-2s0.4-1.5,0.4-2.3C31.4,15.1,30.7,13.5,29.3,12.4z"></path> </g> </g> </symbol><symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--decrement"> <path class="cls-1" d="M11.76,13L24,26.521,37.147,13,41,16.9,24,35,7,16.9Z"></path> </symbol><symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--downarrow"> <polygon points="3.5,6.5 4.5,5.5 8,9 11.5,5.5 12.5,6.5 8,11"></polygon> </symbol><symbol viewBox="0 0 17 16" id="zc__svg--download"> <path class="zpreview__fill" d="M17,16H0v-3h1v2h15v-2h1V16z M12.6,6.6L9,10.3V1H8v9.3L4.4,6.6L3.6,7.4l4.9,4.9l4.9-4.9L12.6,6.6z"></path> </symbol><symbol viewBox="-3 -3 22 22" width="100%" height="100%" id="zc__svg--downscroller"> <path d="M16,4l-8,8L0,4H16z"></path> </symbol><symbol viewBox="0 0 17 16" id="zc__svg--edit"> <path class="zpreview__fill" d="M13,0L1,12v4h3.8L17,4L13,0z M15.6,4l-2.5,2.4l-2.5-2.6L13,1.4L15.6,4z M4.3,15H2v-2.6l7.8-7.8l2.6,2.6L4.3,15z"></path> </symbol><symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--error"> <path d="M41.2,7.2C31.9-2.2,16.7-2.5,7.3,6.9c-9.5,9.3-9.7,24.5-0.4,33.9c9.3,9.5,24.5,9.7,33.9,0.4C50.3,31.9,50.4,16.8,41.2,7.2z M37.9,38.2C30,46,17.4,45.9,9.7,38S2.1,17.5,10,9.8S30.5,2.1,38.2,10C45.9,17.9,45.8,30.5,37.9,38.2z"></path> <path d="M31.7,17.5l-1.1-1.1c-0.8-0.8-1.7-0.1-2,0.1L24,21l-4.6-4.7c-0.3-0.3-1.1-0.8-1.9,0l-1.1,1.1c-0.8,0.8-0.1,1.7,0.1,2L21,24l-4.7,4.6c-0.9,0.9-0.3,1.6-0.1,1.8l1.3,1.3c0.2,0.2,0.9,0.8,1.8-0.1L24,27l4.6,4.7c0.9,0.9,1.6,0.3,1.8,0.1l1.3-1.3c0.2-0.2,0.8-0.9-0.1-1.8L27,24l4.7-4.6C32,19.1,32.5,18.4,31.7,17.5z"></path> </symbol><symbol viewBox="0 0 12 12" id="zc__svg--fastbackward" width="100%" height="100%"><polygon points="5.6,10.3 1.9,6.5 5.6,2.6 6.3,3.4 3.3,6.5 6.4,9.6"></polygon><polygon points="9.6,10.3 5.9,6.5 9.6,2.6 10.3,3.4 7.3,6.5 10.4,9.6"></polygon></symbol><symbol viewBox="1 0 12 12" id="zc__svg--fastforward" width="100%" height="100%"><polygon points="7.4,10.3 6.7,9.6 9.7,6.5 6.6,3.4 7.4,2.7 11.1,6.5"></polygon><polygon points="3.4,10.3 2.7,9.6 5.7,6.5 2.6,3.4 3.4,2.7 7.1,6.5"></polygon></symbol><symbol viewBox="0 0 19 10" id="zc__svg--filmstrip"> <path class="zpreview__fill" d="M4,4v5H1V4H4 M5,3H0v7h5V3L5,3z M0,0h19v1H0V0z M18,4v5h-3V4H18 M19,3h-5v7h5V3L19,3z M11,4v5H8V4H11 M12,3H7v7h5V3L12,3z"> </path> </symbol><symbol viewBox="1 0 12 12" id="zc__svg--forward" width="100%" height="100%"><polygon points="4.4,10.3 3.7,9.6 6.7,6.5 3.6,3.4 4.4,2.7 8.1,6.5"></polygon></symbol><symbol viewBox="0 0 17 16" id="zc__svg--fullscreen"> <path class="zpreview__fill" d="M6.9,10.9L2.7,15H5v1H1v-4h1v2.3l4.1-4.1C6.3,10,6.7,10,6.9,10.1S7,10.7,6.9,10.9z M15,12v2.3l-4.1-4.2c-0.2-0.1-0.6-0.1-0.8,0s-0.1,0.6,0,0.8l4.1,4.1H12v1h4v-4H15z M12,1v1h2.3l-4.2,4.1c-0.1,0.2-0.1,0.6,0,0.8C10.2,7,10.4,7,10.5,7s0.3,0,0.4-0.1L15,2.7V5h1V1H12z M6.9,6.1L2.7,2H5V1H1v4h1V2.7l4.1,4.1C6.2,7,6.4,7,6.5,7s0.3,0,0.4-0.1C7,6.7,7,6.3,6.9,6.1z"> </path></symbol><symbol viewBox="0 0 5 10" width="100%" height="100%" id="zc__svg--grippy"> <rect width="2" height="2"></rect><rect x="3" width="2" height="2"></rect> <rect y="4" width="2" height="2"></rect><rect x="3" y="4" width="2" height="2"></rect> <rect x="3" y="8" width="2" height="2"></rect><rect y="8" width="2" height="2"></rect> </symbol><symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--help"><g><path d="M24,0C10.7,0,0,10.7,0,24s10.7,24,24,24s24-10.7,24-24C48,10.8,37.3,0,24,0z M24,44.1c-11,0-20-9-20-20s9-20,20-20s20,9,20,20C44,35.2,35,44.1,24,44.1z"></path><g><path d="M22.8,31.9c-1.7,0-2.6,0.9-2.6,2.7c0,0.9,0.2,1.5,0.7,2c0.4,0.5,1.1,0.7,1.9,0.7c0.8,0,1.5-0.2,1.9-0.7c0.5-0.5,0.7-1.1,0.7-2c0-0.8-0.2-1.5-0.7-2C24.3,32.2,23.6,31.9,22.8,31.9z"></path><path d="M29.3,12.4c-1.3-1.1-3.2-1.7-5.5-1.7s-4.4,0.5-6.5,1.4c-1.1,0.5-0.6,1.7-0.6,1.7l0.5,1c0,0,0.5,0.9,1.7,0.5l0,0c0.5-0.2,1-0.4,1.5-0.6c0.9-0.3,2-0.5,3.1-0.5c1.2,0,2.2,0.3,2.8,0.8c0.7,0.5,1,1.3,1,2.3c0,0.8-0.2,1.6-0.6,2.2c-0.4,0.6-1.3,1.5-2.7,2.6c-1.2,0.9-2,1.8-2.5,2.7c-0.5,0.9-0.7,1.9-0.7,3.2c0,0.9,1.1,1.1,1.1,1.1h0.7c0,0,1.4,0,1.6-1.2l0,0c0-0.8,0.2-1.4,0.5-1.8c0.4-0.6,1.1-1.3,2.2-2.1c1.3-1,2.2-1.8,2.7-2.4s0.9-1.3,1.2-2s0.4-1.5,0.4-2.3C31.4,15.1,30.7,13.5,29.3,12.4z"></path></g></g></symbol><symbol viewBox="1 2 9 9" width="100%" height="100%" id="zc__svg--horizontaldecrement"> <polygon points="6.6,10.3 2.9,6.5 6.6,2.7 7.4,3.4 4.3,6.5 7.4,9.6"></polygon> </symbol><symbol viewBox="1 2 9 9" width="100%" height="100%" id="zc__svg--horizontalincrement"> <polygon points="4.4,10.3 3.7,9.6 6.7,6.5 3.6,3.4 4.4,2.7 8.1,6.5"></polygon> </symbol><symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--increment"> <path class="cls-1" d="M6,32l5,4L24,22,38,36l4-4L24,13Z"></path> </symbol><symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--info"> <g> <g> <path d="M23.9,17.4c1.5,0,2.5-1.1,2.4-2.3c0-1.3-0.9-2.4-2.3-2.4s-2.4,1.1-2.4,2.4C21.6,16.3,22.6,17.4,23.9,17.4z"></path> <path d="M26.2,35.5V21.8c0-1.2-1.4-1.3-1.8-1.3h-0.7c0,0-1.7,0-1.7,1.1v14.3c0,0.3,0.2,0.9,1.3,0.9h1.6C25.3,36.7,26.2,36.5,26.2,35.5z"></path> </g> <path d="M24,0C10.7,0,0,10.7,0,24s10.7,24,24,24s24-10.7,24-24S37.3,0,24,0z M24,44C13,44,4,35,4,24S13,4,24,4s20,9,20,20S35,44,24,44z"></path> </g> </symbol><symbol id="zc__svg--lines" viewBox="0 0 12 12" width="100%" height="100%"> <line x1="11" y1="1" x2="1" y2="11"></line> <line x1="11" y1="5" x2="5" y2="11"></line> <line x1="11" y1="9" x2="9" y2="11"></line> </symbol><symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--maximize"> <g transform="translate(0,-1036.3622)"> <g> <path d="M13,1040.4v8H3v-8H13 M14,1039.4H2v10h12V1039.4L14,1039.4z"></path> </g> </g> </symbol><symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--minimize"> <rect x="2" y="12" width="12" height="1"></rect> </symbol><symbol viewBox="0 0 12 10" width="100%" height="100%" id="zc__svg--minus"> <rect x="2" y="5" width="9" height="1"></rect> </symbol><symbol viewBox="0 0 4 16" id="zc__svg--more"> <path class="zpreview__fill" d="M2,1c0.6,0,1,0.4,1,1S2.6,3,2,3S1,2.6,1,2S1.4,1,2,1 M2,0C0.9,0,0,0.9,0,2s0.9,2,2,2s2-0.9,2-2S3.1,0,2,0L2,0z"> </path><path class="zpreview__fill" d="M2,13c0.6,0,1,0.4,1,1s-0.4,1-1,1s-1-0.4-1-1S1.4,13,2,13 M2,12c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S3.1,12,2,12L2,12z"> </path><path class="zpreview__fill" d="M2,7c0.6,0,1,0.4,1,1S2.6,9,2,9S1,8.6,1,8S1.4,7,2,7 M2,6C0.9,6,0,6.9,0,8s0.9,2,2,2s2-0.9,2-2S3.1,6,2,6L2,6z"> </path> </symbol><symbol viewBox="0 0 12 20" id="zc__svg--navigationnext"> <path class="zpreview__fill" d="M1.5,19.5c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4L9,10L0.8,2.2c-0.4-0.4-0.4-1,0-1.4c0.4-0.4,1-0.4,1.4,0l9,8.5c0.2,0.2,0.3,0.5,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7l-9,8.5C2,19.4,1.7,19.5,1.5,19.5z"> </path> </symbol><symbol viewBox="0 0 12 20" id="zc__svg--navigationprevious"> <path class="zpreview__fill" d="M9.8,19.2l-9-8.5c-0.2-0.2-0.3-0.4-0.3-0.7c0-0.2,0.1-0.5,0.3-0.7l9-8.5c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4L3,10l8.2,7.8c0.4,0.4,0.4,1,0,1.4c-0.2,0.2-0.4,0.3-0.7,0.3C10.3,19.5,10,19.4,9.8,19.2z"></path> </symbol><symbol viewBox="0 0 25 25" id="zc__svg--notfound"> <path class="zpreview__fill" d="M12.5,1.8c5.9,0,10.7,4.8,10.7,10.7s-4.8,10.7-10.7,10.7S1.8,18.4,1.8,12.5S6.6,1.8,12.5,1.8 M12.5,0C5.6,0,0,5.6,0,12.5S5.6,25,12.5,25S25,19.4,25,12.5S19.4,0,12.5,0L12.5,0z"> </path><line class="zpreview__stroke" stroke-width="2" x1="8" y1="8" x2="17" y2="17"> </line><line class="zpreview__stroke" stroke-width="2" x1="17" y1="8" x2="8" y2="17"> </line> </symbol><symbol viewBox="0 0 12 12" width="100%" height="100%" id="zc__svg--plus"> <polygon points="11,6 7,6 7,2 6,2 6,6 2,6 2,7 6,7 6,11 7,11 7,7 11,7 "></polygon> </symbol><symbol viewBox="0 0 16 16" id="zc__svg--print"> <path class="zpreview__fill" d="M16,3h-3.1L12,0H4L3.1,3H0v9h2.8L2,16h12l-0.8-4H16V3z M4.7,1h6.5l0.6,2H4.1L4.7,1z M3.2,15l1.1-6h7.3l1.1,6 H3.2z M15,11h-1.9l-0.6-3h-9l-0.6,3H1V4h14V11z"> </path><rect x="13" y="5" class="zpreview__fill" width="1" height="1"> </rect> </symbol><symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--restore"> <g transform="translate(0,-1036.3622)"> <path d="M2,1041.4v8h10v-8H2z M11,1048.4H3v-6h8V1048.4z"></path> </g> <g transform="translate(0,-1036.3622)"> <path d="M4,1039.4v3h1v-2h8v6h-2v1h3v-8H4z"></path> </g> </symbol><symbol viewBox="0 0 5 12" id="zc__svg--rightarrow"> <polygon points="4.4,10.3 3.7,9.6 6.7,6.5 3.6,3.4 4.4,2.7 8.1,6.5"></polygon> </symbol><symbol viewBox="-7 -7 64 64" width="100%" height="100%" id="zc__svg--round"> <circle cx="24.5" cy="24.5" r="15.5"></circle> </symbol><symbol viewBox="0 0 15 15" width="100%" height="100%" id="zc__svg--search"> <g id="Ellipse_50" data-name="Ellipse 50" fill="none" stroke="gray" stroke-width="1.5"> <circle cx="6" cy="6" r="6" stroke="none"></circle> <circle cx="6" cy="6" r="5.25" fill="none"></circle> </g> <path id="Rectangle_270" data-name="Rectangle 270" d="M0,0H5A1,1,0,0,1,6,1V1A1,1,0,0,1,5,2H0A0,0,0,0,1,0,2V0A0,0,0,0,1,0,0Z" transform="translate(10.757 9.343) rotate(45)" fill="gray"></path> </symbol><symbol viewBox="0 0 16 16" id="zc__svg--share"> <path class="zpreview__fill" d="M13.5,0.8c0.9,0,1.7,0.8,1.7,1.7s-0.8,1.7-1.7,1.7s-1.7-0.8-1.7-1.7S12.6,0.8,13.5,0.8 M13.5,0C12.1,0,11,1.1,11,2.5S12.1,5,13.5,5S16,3.9,16,2.5S14.9,0,13.5,0L13.5,0z"> </path> <path class="zpreview__fill" d="M2.5,6.3c0.9,0,1.7,0.8,1.7,1.7S3.4,9.7,2.5,9.7S0.8,8.9,0.8,8S1.6,6.3,2.5,6.3 M2.5,5.5C1.1,5.5,0,6.6,0,8s1.1,2.5,2.5,2.5S5,9.4,5,8S3.9,5.5,2.5,5.5L2.5,5.5z"> </path> <path class="zpreview__fill" d="M13.5,11.8c0.9,0,1.7,0.8,1.7,1.7s-0.8,1.7-1.7,1.7s-1.7-0.8-1.7-1.7S12.6,11.8,13.5,11.8 M13.5,11c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5s2.5-1.1,2.5-2.5S14.9,11,13.5,11L13.5,11z"> </path> <rect x="7.5" y="7" transform="matrix(0.4472 -0.8944 0.8944 0.4472 -5.2373 13.1252)" class="zpreview__fill" width="1" height="7.6"></rect> <rect x="4.2" y="4.8" transform="matrix(0.8944 -0.4472 0.4472 0.8944 -1.5256 4.1374)" class="zpreview__fill" width="7.6" height="1"></rect> </symbol><symbol viewBox="0 0 18 17" id="zc__svg--slideshow"> <path class="zpreview__fill" d="M19,2V1h-9V0H9v1H0v1h1v11H0v1h9v0.7l-4,3.7L5.6,19L9,15.8V18h1v-2.2l3.4,3.2l0.5-0.6l-4-3.7V14h9v-1h-1V2H19zM17,13H2V2h15V13z M8,5v5l4.5-2.5L8,5z"></path> </symbol><symbol viewBox="0 0 9 16" id="zc__svg--slideshow__next"> <polyline class="zpreview__fill" points="1,1 8,8 1,15"></polyline> </symbol><symbol viewBox="0 0 10 14" width="100%" height="100%" id="zc__svg--slideshow__pause"> <path class="zpreview__fill" d="M3,1v12H1V1H3 M3,0H1C0.4,0,0,0.4,0,1v12c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V1C4,0.4,3.6,0,3,0L3,0z"> </path><path class="zpreview__fill" d="M9,1v12H7V1H9 M9,0H7C6.4,0,6,0.4,6,1v12c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V1C10,0.4,9.6,0,9,0L9,0z"> </path> </symbol><symbol viewBox="0 0 12 14" id="zc__svg--slideshow__play"> <path fill="white" d="M1,1.2L11,7L1,12.8L1,1.2 M1,0.2c-0.5,0-1,0.4-1,1v11.5c0,0.6,0.5,1,1,1c0.2,0,0.3,0,0.5-0.1l10-5.8c0.7-0.4,0.7-1.3,0-1.7l-10-5.8C1.3,0.3,1.2,0.2,1,0.2L1,0.2z"> </path> </symbol><symbol viewBox="0 0 9 16" id="zc__svg--slideshow__previous"> <polyline class="zpreview__fill" points="8,1 1,8 8,15"></polyline> </symbol><symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--success"> <g> <path d="M41.2,7.2C31.9-2.3,16.7-2.5,7.3,6.8c-9.5,9.3-9.7,24.5-0.4,33.9c9.3,9.5,24.5,9.7,33.9,0.4C50.3,31.9,50.4,16.7,41.2,7.2z M37.9,38.2c-7.9,7.7-20.5,7.6-28.2-0.3S2.1,17.4,10,9.7S30.5,2.1,38.2,10C45.9,17.8,45.8,30.5,37.9,38.2z"></path> <path d="M36,19.3L23.1,32.2c-1.1,1.1-2.9,1.1-4,0l-1-1l-4.5-4.6c-0.2-0.2-1-1.1-0.1-2l1.1-1.1c0.8-0.8,1.6-0.3,1.9,0l4.6,4.7l12-11.8c0.2-0.2,1.1-1,2-0.1l1.1,1.1C36.8,18.2,36.3,18.9,36,19.3z"></path> </g> </symbol><symbol viewBox="-2 -2 20 20" width="100%" height="100%" id="zc__svg--tick"> <polygon points="14.6,2.4 4.9,12.1 1.2,8.5 0.4,9.3 4.9,13.8 15.4,3.2 "></polygon> </symbol><symbol viewBox="0 0 16 16" id="zc__svg--time" width="100%" height="100%"> <path d="M8,0.6C3.9,0.6,0.6,3.9,0.6,8s3.3,7.4,7.4,7.4s7.4-3.3,7.4-7.4S12.1,0.6,8,0.6z M8,13.9c-3.3,0-5.9-2.6-5.9-5.9c0-3.3,2.6-5.9,5.9-5.9c3.3,0,5.9,2.6,5.9,5.9C13.9,11.3,11.3,13.9,8,13.9z"> </path> <polygon points="8.5,7.5 8.5,4.5 6.5,4.5 6.5,9.5 11.5,9.5 11.5,7.5"> </polygon> </symbol><symbol viewBox="0 0 25 25" id="zc__svg--unableload"> <path class="zpreview__fill" d="M12.5,2c0.7,0,1.5,0.4,1.8,1.1l8.5,15c0.7,1.3-0.3,3-1.8,3H4.1c-1.6,0-2.6-1.7-1.8-3l8.4-15C11.1,2.3,11.8,2,12.5,2 M12.5,0.1c-1.4,0-2.7,0.7-3.4,2l-8.4,15c-0.7,1.2-0.7,2.6,0,3.9c0.7,1.2,2,2,3.5,2h16.8c1.4,0,2.7-0.7,3.4-1.9c0.7-1.2,0.7-2.6,0.1-3.8l-8.5-15C15.3,0.9,13.9,0.1,12.5,0.1L12.5,0.1z"> </path><path class="zpreview__fill" d="M13,14h-1l-0.8-6.5C11.1,6.7,11.7,6,12.5,6h0c0.8,0,1.4,0.7,1.3,1.5L13,14z"> </path><circle class="zpreview__fill" cx="12.5" cy="17.5" r="1.5"> </circle> </symbol><symbol viewBox="0 0 17 16" id="zc__svg--upload"> <path class="zpreview__fill" d="M13.8,4.1C13.2,1.7,11.1,0,8.5,0S3.8,1.7,3.2,4.1C1.4,4.5,0,6.1,0,8c0,1.2,0.5,2.3,1.4,3C2.1,11.6,3,12,4,12h4v4h1v-4h4c1,0,1.9-0.4,2.6-1c0.8-0.7,1.4-1.8,1.4-3C17,6.1,15.6,4.5,13.8,4.1z M13,11h-2.6H9V5.7l2.6,2.7l0.8-0.8L8.5,3.8L4.6,7.6l0.8,0.8L8,5.7V11H6.6H4c-1.7,0-3-1.4-3-3c0-1.3,0.8-2.4,2-2.8C3.3,5.1,3.7,5,4,5c0-0.3,0.1-0.7,0.2-1c0.6-1.8,2.3-3,4.2-3c1.9,0,3.6,1.3,4.2,3c0.1,0.3,0.2,0.6,0.2,1c0.3,0,0.7,0.1,1,0.2c1.2,0.4,2,1.5,2,2.8C16,9.6,14.7,11,13,11z"> </path> </symbol><symbol viewBox="-3 -3 22 22" width="100%" height="100%" id="zc__svg--upscroller"> <path d="M0,12l8-8l8,8H0z"></path> </symbol><symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--warning"> <g> <path d="M47.3,36.6L27.7,2.5c-0.9-1.4-2.4-2.2-3.9-2.1c-1.6,0-2.9,0.9-3.7,2.2L0.7,36.5c-0.9,1.3-1,3-0.2,4.4c0.8,1.5,2.3,2.4,4,2.4h39c1.6,0,3.1-0.8,3.9-2.2C48.2,39.7,48.2,38,47.3,36.6z M43.9,39.2c-0.1,0.1-0.2,0.2-0.4,0.2h-39c-0.3,0-0.4-0.2-0.5-0.3c-0.1-0.2,0-0.3,0-0.4L23.5,4.6c0,0,0.1-0.2,0.3-0.2c0,0,0,0,0,0c0.1,0,0.3,0,0.4,0.2l19.6,34C44,38.8,44,39,43.9,39.2z"></path> </g> <path d="M24.1,28.4L24.1,28.4c-0.8,0-1.3-0.4-1.4-1l-1-10c-0.1-1.1,1-2,2.4-2l0,0c1.4,0,2.5,0.9,2.4,2l-1,10C25.4,27.9,24.9,28.4,24.1,28.4z"></path> <circle cx="24" cy="33.4" r="2"></circle> </symbol></svg></body></html>
