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
    <meta name="keywords" content="Vinhomess">
    <meta name="description" content="Vinhomess">
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
        if (('standalone' in window.navigator) && window.navigator.standalone) {
            var noddy, remotes = false;
            document.addEventListener('click', function (event) {
                noddy = event.target;
                while (noddy.nodeName !== 'A' && noddy.nodeName !== 'HTML') noddy = noddy.parentNode;
                if ('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)) {
                    event.preventDefault();
                    document.location.href = noddy.href;
                }
            }, false);
        }
    </script>
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
</head>
<body>
<style type="text/css">
    /* HB */
    .b_3, .b_6, .b_9, .b_12, .b_15, .b_18, .b_21, .b_24 {
        background-color: #cb0816 !important;
        color: #fff !important;
    }

    /* LVB */
    .b_1, .b_4, .b_7, .b_10, .b_16, .b_19, .b_22, .b_25 {
        background-color: #008000 !important;
        color: #fff !important;
    }

    /* LB */
    .b_2, .b_5, .b_8, .b_11, .b_17, .b_20, .b_23, .b_26 {
        background-color: #3d3df5 !important;
        color: #fff !important;
    }

    .haoma_box li span em:not([class*=b_]) {
        width: 30px;
        padding: 0 5px;
        color: #9b6060;
    }

    .haoma_box ul li {
        display: flex;
        justify-content: space-between;
    }

    .lottery_now #haoma_type i.s {
        width: auto;
    }

    .game_box a.rules {
        width: auto;
        height: none;
        padding: 5px;
        text-align: center;
        display: none;
    }

    .line_box .line:first-child .tab:nth-child(n+4) {
        display: none
    }

    @media (min-width: 750px) {
        body {
            font-size: .2rem !important
        }
    }

    .layui-layer-btn a {
        font-size: 14px;
    }

    .send_box .fast_li a {
        width: auto;
        border: 5px;
        padding: 0 10px
    }

    .main .game_box {
        overflow-y: auto;
        bottom: 0px;
        position: absolute;
    }

    .game_box .games {
        margin-bottom: 0
    }

    .game_box {
        height: 200px !important;
    }

    .send_box {
        background: #6590ee !important;
        padding: 5px 1% 10px;
    }
</style>
<div class="main">
    <div class="header">
        <a class="back" href="javascript:history.back(-1)" title="Trở lại"><i class="iconfont icon-fanhui"></i></a>
        <a class="pic" href="?a=user" title="Thông tin cá nhân">
        </a>
        <a class="order" href="?a=order" title="Danh sách đầu tư của tôi"><i class="iconfont icon-liebiao"></i></a>
        <h4>Sơ cấp</h4>
    </div>


    <div class="scroll_box" style="height: 865px;">
        @if(auth()->user()->is_admin)
            <div class="lottery_box">
                <div class="lottery_top">
                    <div class="lottery_now">
                        <div id="qishu_now">
                            Phiên <i id="phien_id1">Dành cho admin xem kết quả trước</i>
                        </div>
                        <div id="haoma" class="hm_list">
                            <i class="blue" id="so_1_admin">8</i>
                            <i class="blue" id="so_2_admin">2</i>
                            <i class="blue" id="so_3_admin">9</i>
                        </div>
                        <div id="haoma_type"><i class="zw">Tổng cộng</i>
                            <i class="b_19" id="tong_admin">19</i>
                            <i class="s c" id="lon_nho_admin">Lớn</i>
                            <i class="s c" id="chan_le_admin">Lẻ</i>
                        </div>
                    </div>
                </div>

            </div>

        @endif
        <div class="lottery_box">
            <div class="lottery_top">
                <div class="lottery_now">
                    <div id="qishu_now">
                        Phiên <i id="phien_id1">1402594</i>
                    </div>
                    <div id="haoma" class="hm_list">
                        <i class="blue" id="so_1">8</i>
                        <i class="blue" id="so_2">2</i>
                        <i class="blue" id="so_3">9</i>
                    </div>
                    <div id="haoma_type"><i class="zw">Tổng cộng</i>
                        <i class="b_19" id="tong">19</i>
                        <i class="s c" id="lon_nho">Lớn</i>
                        <i class="s c" id="chan_le">Lẻ</i>
                    </div>
                </div>

                <div class="user">
                    <a href="{{ route('me') }}}" title=""><i class="iconfont icon-money"></i><em
                            id="so_du">{{ number_format(auth()->user()->balance) }}</em> VNĐ</a>
                </div>
            </div>
            <div class="lottery_next">
				<span id="qishu_next">
					Phiên <i id="phien_id"></i>
				</span>
                <span id="time"><i id="time_phien"></i><em>Đang cược</em></span>
                <!--<a class="go_more" href="?a=haoma">Lịch sử</a>-->
                <a class="more" href="javascript:;" title="更多"></a>
            </div>
            <div class="val_box">
                <span>Chia sẻ con đường：</span>
                <span class="val_list"></span>
            </div>
            <div class="haoma_box">
                <ul>
                    <li><span>Phiên 1402594 </span><span><i>8</i><i>2</i><i>9</i><em
                                class="b_19">19</em><em>Lớn</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1402593 </span><span><i>8</i><i>5</i><i>1</i><em
                                class="b_14">14</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1402592 </span><span><i>6</i><i>2</i><i>5</i><em
                                class="b_13">13</em><em>Nhỏ</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1402591 </span><span><i>3</i><i>9</i><i>6</i><em
                                class="b_18">18</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1402590 </span><span><i>9</i><i>4</i><i>6</i><em
                                class="b_19">19</em><em>Lớn</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1402589 </span><span><i>5</i><i>0</i><i>3</i><em class="b_8">8</em><em>Nhỏ</em><em>Chẵn</em></span>
                    </li>
                    <li><span>Phiên 1402588 </span><span><i>8</i><i>0</i><i>4</i><em
                                class="b_12">12</em><em>Nhỏ</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1402539 </span><span><i>5</i><i>3</i><i>9</i><em
                                class="b_17">17</em><em>Lớn</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1402538 </span><span><i>7</i><i>1</i><i>8</i><em
                                class="b_16">16</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1402537 </span><span><i>1</i><i>5</i><i>7</i><em
                                class="b_13">13</em><em>Nhỏ</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1402536 </span><span><i>5</i><i>2</i><i>9</i><em
                                class="b_16">16</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1402535 </span><span><i>8</i><i>7</i><i>0</i><em
                                class="b_15">15</em><em>Lớn</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1402534 </span><span><i>3</i><i>9</i><i>2</i><em
                                class="b_14">14</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1402533 </span><span><i>6</i><i>5</i><i>7</i><em
                                class="b_18">18</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1402532 </span><span><i>1</i><i>3</i><i>0</i><em class="b_4">4</em><em>Nhỏ</em><em>Chẵn</em></span>
                    </li>
                    <li><span>Phiên 1402531 </span><span><i>6</i><i>4</i><i>3</i><em
                                class="b_13">13</em><em>Nhỏ</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1402530 </span><span><i>3</i><i>0</i><i>5</i><em class="b_8">8</em><em>Nhỏ</em><em>Chẵn</em></span>
                    </li>
                    <li><span>Phiên 1402529 </span><span><i>9</i><i>1</i><i>2</i><em
                                class="b_12">12</em><em>Nhỏ</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1402528 </span><span><i>6</i><i>8</i><i>4</i><em
                                class="b_18">18</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1402527 </span><span><i>1</i><i>0</i><i>9</i><em
                                class="b_10">10</em><em>Nhỏ</em><em>Chẵn</em></span></li>
                </ul>
                <!--<a class="more" href="?a=haoma">Thêm</a>-->
            </div>
        </div>

        <div class="chat_box" style="height: 744px;" id="chat_box">
            <ul id="users">
                {{--                <li><h5>13:29:23</h5><h4>w**4</h4>--}}
                {{--                    <div class="msg"><span class="qishu">Phiên 1402593</span><span--}}
                {{--                            class="money">11.100.000 VNĐ</span><span class="wanfa">5</span></div>--}}
                {{--                </li>--}}
            </ul>
        </div>
        <div class="game_box" style="height: 443px;">
            <div class="games">
                <div class="title">
                    <!--<a href="javascript:;" class="a">Kết hợp</a>-->
                    <!--<a href="javascript:;">Số đặc biệt</a>-->

                    <a href="javascript:;" class="a text1">Bình Thường</a>
                    <a href="javascript:;" class="text2">Đặc biệt</a>
                </div>
                <div id="game" class="line_box">
                    <div class="line a">
                        <h4>Kết hợp</h4>
                        <div class="tab n2">
                            <a href="javascript:;" class="C_DA" data="DA"><i>Lớn</i><em>2.02</em></a>
                            <a href="javascript:;" class="C_X" data="X"><i>Nhỏ</i><em>2.02</em></a>
                        </div>
                        <div class="tab n2">
                            <a href="javascript:;" class="C_D" data="D"><i>Lẻ</i><em>1.95</em></a>
                            <a href="javascript:;" class="C_S" data="S"><i>Chẵn</i><em>1.95</em></a>
                        </div>
                        <div class="tab n2">
                            <a href="javascript:;" class="C_DD" data="DD"><i>Đại Duyên</i><em>4.2</em></a>
                            <a href="javascript:;" class="C_DS" data="DS"><i>Đại Song</i><em>4.6</em></a>
                        </div>
                        <div class="tab n2">
                            <a href="javascript:;" class="C_XD" data="XD"><i>Tiểu Duyên</i><em>4.6</em></a>
                            <a href="javascript:;" class="C_XS" data="XS"><i>Tiểu Song</i><em>4.2</em></a>
                        </div>
                        <div class="tab">
                            <a href="javascript:;" class="C_JD" data="JD"><i>Cực Đại</i><em>13</em></a>
                            <a href="javascript:;" class="C_JX" data="JX"><i>Cực Tiểu</i><em>13</em></a>
                            <a href="javascript:;" class="C_BZ" data="BZ"><i>Bảo Tử</i><em>60</em></a>
                        </div>
                        <div class="tab">
                            <a href="javascript:;" class="C_HB" data="HB"><i>Sóng Đỏ</i><em>2.9</em></a>
                            <a href="javascript:;" class="C_LVB" data="LVB"><i>Sóng Xanh</i><em>2.9</em></a>
                            <a href="javascript:;" class="C_LB" data="LB"><i>Sóng Xanh Dương</i><em>2.9</em></a>
                        </div>
                    </div>
                    <div class="line">
                        <h4>Số đặc biệt</h4>
                        <div class="tab num">
                            <a href="javascript:;" class="C_S0" data="S0"><i>0</i><em>500</em></a>
                            <a href="javascript:;" class="C_S1" data="S1"><i>1</i><em>100</em></a>
                            <a href="javascript:;" class="C_S2" data="S2"><i>2</i><em>50</em></a>
                        </div>
                        <div class="tab num">
                            <a href="javascript:;" class="C_S3" data="S3"><i>3</i><em>40</em></a>
                            <a href="javascript:;" class="C_S4" data="S4"><i>4</i><em>30</em></a>
                            <a href="javascript:;" class="C_S5" data="S5"><i>5</i><em>20</em></a>
                        </div>
                        <div class="tab num">
                            <a href="javascript:;" class="C_S6" data="S6"><i>6</i><em>17</em></a>
                            <a href="javascript:;" class="C_S7" data="S7"><i>7</i><em>16</em></a>
                            <a href="javascript:;" class="C_S8" data="S8"><i>8</i><em>15</em></a>
                        </div>
                        <div class="tab num">
                            <a href="javascript:;" class="C_S9" data="S9"><i>9</i><em>15</em></a>
                            <a href="javascript:;" class="C_S10" data="S10"><i>10</i><em>14</em></a>
                            <a href="javascript:;" class="C_S11" data="S11"><i>11</i><em>14</em></a>
                        </div>
                        <div class="tab num">
                            <a href="javascript:;" class="C_S12" data="S12"><i>12</i><em>12</em></a>
                            <a href="javascript:;" class="C_S13" data="S13"><i>13</i><em>12</em></a>
                            <a href="javascript:;" class="C_S14" data="S14"><i>14</i><em>12</em></a>
                        </div>
                        <div class="tab num">
                            <a href="javascript:;" class="C_S15" data="S15"><i>15</i><em>12</em></a>
                            <a href="javascript:;" class="C_S16" data="S16"><i>16</i><em>14</em></a>
                            <a href="javascript:;" class="C_S17" data="S17"><i>17</i><em>14</em></a>
                        </div>
                        <div class="tab num">
                            <a href="javascript:;" class="C_S18" data="S18"><i>18</i><em>15</em></a>
                            <a href="javascript:;" class="C_S19" data="S19"><i>19</i><em>15</em></a>
                            <a href="javascript:;" class="C_S20" data="S20"><i>20</i><em>16</em></a>
                        </div>
                        <div class="tab num">
                            <a href="javascript:;" class="C_S21" data="S21"><i>21</i><em>17</em></a>
                            <a href="javascript:;" class="C_S22" data="S22"><i>22</i><em>20</em></a>
                            <a href="javascript:;" class="C_S23" data="S23"><i>23</i><em>30</em></a>
                        </div>
                        <div class="tab n2 num">
                            <a href="javascript:;" class="C_S24" data="S24"><i>24</i><em>40</em></a>
                            <a href="javascript:;" class="C_S25" data="S25"><i>25</i><em>50</em></a>
                        </div>
                        <div class="tab n2 num">
                            <a href="javascript:;" class="C_S26" data="S26"><i>26</i><em>100</em></a>
                            <a href="javascript:;" class="C_S27" data="S27"><i>27</i><em>500</em></a>
                        </div>
                    </div>
                </div>
            </div>

            <style type="text/css" media="all">

            </style>
            <div class="send_box">
                <!--<h4>Đặt cược nhanh chóng</h4>-->
                <!--<h5>Chọn cách chơi, nhấn vào số tiền để mua</h5>-->

                <div class="btn_li">
                    <span>Mua số tiền：</span>
                    <input type="text" id="money" value="">
                    <input type="hidden" id="ban" value="">
                    <a id="send" href="javascript:;" style="font-size: 12px">Mua</a>
                    <a class="cancel" href="javascript:;" style="font-size: 12px">Đặt lại</a>
                </div>
                <a class="hide" href="javascript:;"></a>
            </div>
            <a class="rules" href="?a=rules">Cách chơi？</a>
            <div class="game_box_shade" style="height: 744px; display: none;"></div>
        </div>
    </div>
    <div class="footer">
        <a class="game_btn" href="javascript:;">Đặt cược</a>
    </div>
</div>
<link type="text/css" rel="stylesheet" href="statics/css/popup.css">
<div class="popup_wrap popup_chat_wrap" style="display: none;">
    <input type="hidden" name="wanfa" value="">
    <input type="hidden" name="money" value="">
    <input type="hidden" name="qishu" value="">
    <div class="popup_box">
        <div class="popup_box_t ng-binding">Bạn có chắc chắn muốn theo đuổi không<a class="clo"
                                                                                    href="javascript:$('.popup_chat_wrap').hide();"></a>
        </div>
        <div class="popup_box_m">
            <div class="popup_chat">
                <div class="info">
                    <ul>
                        <li id="popup_chat_name" class="ng-binding"><span class="ng-binding">Người chơi：</span></li>
                        <li id="popup_chat_qishu" class="ng-binding"><span class="ng-binding">Phiên：</span></li>
                    </ul>
                </div>
                <div class="list">
                    <ul>
                        <li><span class="ng-binding">Thể loại</span><span class="ng-binding">Số tiền</span></li>
                        <li><span id="popup_chat_type" class="ng-binding"></span><span id="popup_chat_money"
                                                                                       class="ng-binding"></span></li>
                    </ul>
                </div>
                <div class="btnbox"><input id="popup_chat_submit" type="button" class="btn" value="确 定"><a
                        href="javascript:$('.popup_chat_wrap').hide();" class="btn cancel ng-binding">Hủy bỏ</a></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="statics/js/Replacement_pc28.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.7.4/socket.io.js"
        integrity="sha512-tE1z+95+lMCGwy+9PnKgUSIeHhvioC9lMlI7rLWU0Ps3XTdjRygLcy4mLuL0JAoK4TLdQEyP0yOl/9dMOqpH/Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js"
        integrity="sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    //强制页面刷新

    if (window.name != "bencalie") {
        location.reload();
        window.name = "bencalie";
    } else {
        window.name = "";
    }

    window.addEventListener('pageshow', function (event) {
        //event.persisted属性为true时，表示当前文档是从往返缓存中获取
        if (event.persisted) location.reload();
    });
    //如下变量仅作为显示及初步验证用 一次查询多处调用
    var gameid = '31';//游戏ID
    var roomid = '1';//房间ID
    var gamename = 'Vinhomes Lottery';//游戏名称
    var wanfadata = '{"1":["DA@2.02","X@2.02","D@1.95","S@1.95","DD@4.2","DS@4.6","XD@4.6","XS@4.2","JD@13","JX@13","BZ@60","HB@2.9","LVB@2.9","LB@2.9","S0@500","S1@100","S2@50","S3@40","S4@30","S5@20","S6@17","S7@16","S8@15","S9@15","S10@14","S11@14","S12@12","S13@12","S14@12","S15@12","S16@14","S17@14","S18@15","S19@15","S20@16","S21@17","S22@20","S23@30","S24@40","S25@50","S26@100","S27@500"]}';//游戏玩法
    console.log(wanfadata);
    var send_money = '';//购买限制
    var fptime = 15;//提前封盘时间
    var uid = 1637;//用户UID
    var qishu = 0;
    var nextqishu = 0;
    var getchat = false;
    var sotp = 0;
    var is_one = 0;
    const socket = io('{{ env('APP_SOCKET_URL') }}');

    socket.on('{{ $roomName }}', (data) => {
        $('#phien_id').text(data.id)
        $('#time_phien').text(data.time_text)
        const users = data.users;
        const userHtml = users.map(user => {
            const wan = user.wanfa.split('@')[1]
            // fomat money
            const money = user.money.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            const username = user.username.slice(0, 1) + '***' + user.username.slice(-1)
            return `<li>
                <h5>${user.time}</h5>
<!--                <img src="statics/images/autopic/85.jpg">-->
                <h4>${username}</h4>
                <div class="msg">
                    <span class="qishu">Phiên ${data.id}</span>
                    <span class="money">${money} VNĐ</span>
                    <span class="wanfa">${wan}</span>
                </div>
            </li>`
        }).join('')

        $('#users').html(userHtml)
        $('#so_1_admin').text(data.so1);
        $('#so_2_admin').text(data.so2);
        $('#so_3_admin').text(data.so3);
        $('#tong_admin').text(data.result);
        $('#lon_nho_admin').text(data.result_lon_nho);
        $('#chan_le_admin').text(data.result_chan_le);


        if (data.active === false) {
            $('#so_1').text(data.so1);
            $('#so_2').text(data.so2);
            $('#so_3').text(data.so3);
            $('#tong').text(data.result);
            $('#lon_nho').text(data.result_lon_nho);
            $('#chan_le').text(data.result_chan_le);
        }
    })

    socket.on(`user-${'{{ auth()->id() }}'}`, (data) => {
        if(data.balance) {
            let balance = data.balance.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            // format money
            $('#so_du').text(balance)
        }

        if(data.message) {
            layer.alert(data.message, {
                icon: 1
            })
        }
    })


    function startgame() {
        $(function () {
            $("a.game_btn").click(function () {
                $(this).hasClass("a") ? ($(this).removeClass("a"), $(".main .game_box").stop().slideUp(300), $(".main .chat_boxs").stop().slideDown(300), $(this).text("Đặt cược")) : ($(this).addClass("a"), $(".main .game_box").stop().slideDown(300), $(".main .chat_boxs").stop().slideUp(300), $(this).text("Trở lại"))
            });
            $(".lottery_next a.more").click(function () {
                $(this).hasClass("a") ? ($(this).removeClass("a"), $(".haoma_box").slideUp()) : ($(this).addClass("a"), $(".haoma_box").stop().slideDown())
            });
            $(".fast_li a").click(function () {
                var a = $(this).text();
                $("input#money").val(Number(a.replaceAll('.', '')))
            });
            $(".games .title a").click(function () {
                $(this).addClass("a").siblings().removeClass("a");
                $(".line_box .line").eq($(this).index()).addClass("a").siblings().removeClass("a");
                $(".game_box").animate({
                    scrollTop: 0
                }, 300)
            });
            $("#game a").click(function () {
                if (6 > gameid || gameid == 13 || gameid == 14 || is_one) {
                    ($("#game a").removeClass("a"), $(this).addClass("a"))
                } else {
                    $(this).hasClass("a") ? $(this).removeClass("a") : $(this).addClass("a");
                }
                var a = $("#game a.a").length;
                if (a > 7) {
                    alert("Vui lòng không đặt cược vi phạm quy định, tối đa 7 cược！"); //下注限制
                    $(this).click();
                }
                a = 0 == a ? "Chọn cách chơi, nhấp vào số tiền để đặt cược" :
                    "Đã chọn " + a + " ";
                $(".send_box h5").text(a);
                $(".send_box").stop().slideDown(300)
            });
            $("a.cancel").click(function () {
                $("input#money").val("");
                $("#game a").removeClass("a");
                $(".send_box h5").text("Chọn cách chơi, nhấp vào số tiền để đặt cược");
                $(".send_box").stop().slideUp(300)
            });
            $("input#money").keyup(function () {
                // format money
                var a = $(this).val().replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                $(this).val(a)
            });
            $("a.hide").click(function () {
                $(".send_box").stop().slideUp(300)
            });
            $("a#send").click(function () {

                var a = $("#game a.a");
                if (1 > a.length)
                    return layer.alert("Vui lòng chọn cách chơi", {
                        icon: 0
                    }), !1;
                var c = Gsnum($("input#money").val()) * 1000,
                    d = [],
                    e = "";
                is_one && (e = send_money = a.attr("sum"));
                d = send_money.split("-");
                if (c < d[0] || c > d[1])
                    return layer.alert("Số tiền cược nằm trong khoảng" + send_money + "giữa", {
                        icon: 0
                    }), !1;
                var b = "",
                    f = 0;
                $(a).each(function () {
                    var a = $(this).attr("data_type");
                    b && (b += "|");
                    b += $(this).attr("data") + "@" + $(this).find("i").text() + "@" + $(this).find("em").text() + (a ? "@" + a : "");
                    f += c
                });
                var g =
                    $("input#ban").val();

                let result_money = f * 1000;
                result_money = result_money.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                layer.confirm("Tổng số tiền：" + result_money, {
                    btn: ["Xác nhận cược", "Hủy bỏ"]
                }, function () {
                    var a = layer.load(1);
                    axios.post('{{env('API_URL')}}/dat-cuoc', {
                        gameid: gameid,
                        room: 'so_cap',
                        qishu: nextqishu,
                        result_money: parseFloat(f) * 1000,
                        wanfa: b,
                        money: parseFloat(c) * 1000,
                        sum: e,
                        ban: g,
                        dosubmit: "yes",
                        id: "{{ auth()->id() }}",
                        phien_id: $('#phien_id').text()
                    }).then(res => {
                        console.log(b)
                        layer.close(a);
                        layer.alert(res.data.message, {
                            icon: 1
                        })
                        layer.close(g);

                    }).catch(err => {
                        console.log(err)
                        layer.close(a);
                        layer.alert(err.response.data.message, {
                            icon: 0
                        })
                    })
                }, function () {
                })
            })
        });
    }

    startgame();

    socket.on('123', (data) => {
        console.log(data);
    });
</script>

<div class="layui-layer-move"></div>
</body>
</html>
