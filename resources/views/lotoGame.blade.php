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
        <a class="pic" href="{{ route('me') }}" title="Thông tin cá nhân">
        </a>
        <a class="order" href="?a=order" title="Danh sách đầu tư của tôi"><i class="iconfont icon-liebiao"></i></a>
        <h4>VIP</h4>
    </div>


    <div class="scroll_box" style="height: 865px;">
        <div class="lottery_box">
            <div class="lottery_top">
                <div class="lottery_now">
                    <div id="qishu_now">
                        Phiên <i>1401850</i>
                    </div>
                    <div id="haoma" class="hm_list"><i class="blue">6</i><i class="blue">9</i><i class="blue">0</i>
                    </div>
                    <div id="haoma_type"><i class="zw">Tổng cộng</i><i class="b_15">15</i><i class="s c">Lớn</i><i
                            class="s c">Lẻ</i></div>
                </div>
                <div class="user">
                    <a href="?a=account" title="资金流水"><i class="iconfont icon-money"></i><em
                            id="money_now">0.00</em> VNĐ</a>
                </div>
            </div>
            <div class="lottery_next">
				<span id="qishu_next">
					Phiên <i>1401851</i>
				</span>
                <span id="time"><i>00:00</i><em>Đã đóng</em></span>
                <!--<a class="go_more" href="?a=haoma">Lịch sử</a>-->
                <a class="more" href="javascript:;" title="更多"></a>
            </div>
            <div class="val_box">
                <span>Chia sẻ con đường：</span>
                <span class="val_list"></span>
            </div>
            <div class="haoma_box">
                <ul>
                    <li><span>Phiên 1401850 </span><span><i>6</i><i>9</i><i>0</i><em
                                class="b_15">15</em><em>Lớn</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1401849 </span><span><i>3</i><i>8</i><i>2</i><em
                                class="b_13">13</em><em>Nhỏ</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1401848 </span><span><i>4</i><i>2</i><i>1</i><em class="b_7">7</em><em>Nhỏ</em><em>Lẻ</em></span>
                    </li>
                    <li><span>Phiên 1401847 </span><span><i>6</i><i>0</i><i>3</i><em class="b_9">9</em><em>Nhỏ</em><em>Lẻ</em></span>
                    </li>
                    <li><span>Phiên 1401846 </span><span><i>9</i><i>1</i><i>0</i><em
                                class="b_10">10</em><em>Nhỏ</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1401845 </span><span><i>4</i><i>2</i><i>6</i><em
                                class="b_12">12</em><em>Nhỏ</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1401844 </span><span><i>7</i><i>9</i><i>3</i><em
                                class="b_19">19</em><em>Lớn</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1401843 </span><span><i>5</i><i>6</i><i>7</i><em
                                class="b_18">18</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1401554 </span><span><i>1</i><i>6</i><i>5</i><em
                                class="b_12">12</em><em>Nhỏ</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1401553 </span><span><i>2</i><i>1</i><i>5</i><em class="b_8">8</em><em>Nhỏ</em><em>Chẵn</em></span>
                    </li>
                    <li><span>Phiên 1401552 </span><span><i>2</i><i>9</i><i>7</i><em
                                class="b_18">18</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1401551 </span><span><i>0</i><i>4</i><i>7</i><em
                                class="b_11">11</em><em>Nhỏ</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1401550 </span><span><i>0</i><i>6</i><i>1</i><em class="b_7">7</em><em>Nhỏ</em><em>Lẻ</em></span>
                    </li>
                    <li><span>Phiên 1401549 </span><span><i>2</i><i>7</i><i>9</i><em
                                class="b_18">18</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1401548 </span><span><i>9</i><i>2</i><i>4</i><em
                                class="b_15">15</em><em>Lớn</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1401547 </span><span><i>5</i><i>3</i><i>2</i><em
                                class="b_10">10</em><em>Nhỏ</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1401546 </span><span><i>5</i><i>7</i><i>4</i><em
                                class="b_16">16</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1401545 </span><span><i>9</i><i>0</i><i>4</i><em
                                class="b_13">13</em><em>Nhỏ</em><em>Lẻ</em></span></li>
                    <li><span>Phiên 1401544 </span><span><i>3</i><i>4</i><i>9</i><em
                                class="b_16">16</em><em>Lớn</em><em>Chẵn</em></span></li>
                    <li><span>Phiên 1401543 </span><span><i>7</i><i>5</i><i>2</i><em
                                class="b_14">14</em><em>Lớn</em><em>Chẵn</em></span></li>
                </ul>
                <!--<a class="more" href="?a=haoma">Thêm</a>-->
            </div>
        </div>
        <div class="chat_box" style="height: 744px;">
            <ul>
                <li class="system"><h5><i class="n"></i>1401851 Phiên đã đóng cửa</h5></li>
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
                            <a href="javascript:;" class="C_DA" data="DA"><i>Lớn</i><em>1.95</em></a>
                            <a href="javascript:;" class="C_X" data="X"><i>Nhỏ</i><em>1.95</em></a>
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
                    <a id="send" href="javascript:;">Mua</a>
                    <a class="cancel" href="javascript:;">Đặt lại</a>
                </div>
                <a class="hide" href="javascript:;"></a>
            </div>
            <a class="rules" href="?a=rules">Cách chơi？</a>
            <div class="game_box_shade" style="height: 744px;"></div>
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
    var roomid = '4';//房间ID
    var gamename = 'Vinhomes Lottery';//游戏名称
    var wanfadata = '{"1":["DA@1.95","X@1.95","D@1.95","S@1.95","DD@4.2","DS@4.6","XD@4.6","XS@4.2","JD@13","JX@13","BZ@60","HB@2.9","LVB@2.9","LB@2.9","S0@500","S1@100","S2@50","S3@40","S4@30","S5@20","S6@17","S7@16","S8@15","S9@15","S10@14","S11@14","S12@12","S13@12","S14@12","S15@12","S16@14","S17@14","S18@15","S19@15","S20@16","S21@17","S22@20","S23@30","S24@40","S25@50","S26@100","S27@500"]}';//游戏玩法
    console.log(wanfadata);
    var send_money = '';//购买限制
    var fptime = 15;//提前封盘时间
    var uid = 1637;//用户UID
    var qishu = 0;
    var nextqishu = 0;
    var getchat = false;
    var sotp = 0;
    var is_one = 0;

    function startgame() {
        $(function () {
            var A = $.parseJSON(wanfadata);
            $.each(A[1], function (a, c) {
                a = c.split("@");
                $(".C_" + a[0] + " em").html(a[1]);
                a[2] && ($(".C_" + a[0]).attr("sum", a[2]), is_one = 1)
            });
            var n = 0,
                h = !0,
                f = 0,
                g = 0,
                l,
                q,
                r,
                t,
                m = !1,
                u = 0,
                v = function (a, c) {
                    h ? (h = !1, $.ajax({
                        url: "?a=ajax_haoma&gameid=" + gameid + "&re=" + c,
                        dataType: "json",
                        success: function (d) {
                            if (d.id) {
                                B(d, a);
                                if (0 == d.awartime) {
                                    d = d.re;
                                    var c = 1
                                } else
                                    d = d.awartime, c = 0;
                                p(d, c)
                            }
                        },
                        error: function () {
                            p(1E3, c);
                            h = !0;
                            console.log("ERR")
                        }
                    })) : p(1E3, c)
                },
                x = function (a) {
                    $.ajax({
                        url: "?a=ajax_haoma&gameid=" +
                            gameid,
                        dataType: "json",
                        success: function (a) {
                            a.id && w(a)
                        },
                        error: function () {
                            setTimeout(function () {
                                var a = Date.parse(new Date);
                                x(a)
                            }, 1E3);
                            console.log("ERR")
                        }
                    })
                },
                p = function (a, c) {
                    var d = Date.parse(new Date);
                    clearTimeout(q);
                    q = setTimeout(function () {
                        v(d, c)
                    }, a)
                },
                B = function (a, c) {
                    if (parseInt(a.qishu) == qishu)
                        return h = !0, !1;
                    w(a);
                    qishu && playSound();
                    qishu = parseInt(a.qishu);
                    $("#qishu_now i").html(qishu);
                    n = parseInt(a.sendtime);
                    nextqishu = parseInt(a.nextqishu);
                    g = parseInt(a.awartime) / 1E3;
                    f = g - fptime;
                    0 < f ? (layer.close(l), getchat =
                        1200 < f ? !1 : !0, $(".game_box_shade").hide(), k('<li class="system"><h5><i class="y"></i>' + nextqishu + " Phiên đang cược</h5></li>"), l = layer.msg(nextqishu + " Phiên đang cược、...", {
                        icon: 1
                    }), m = !1) : (getchat = !1, $(".game_box_shade").show(), k('<li class="system"><h5><i class="n"></i>' + nextqishu + " Phiên đã đóng cửa</h5></li>"), l = layer.msg(nextqishu + " Phiên sắp mở cửa, bây giờ đóng cửa...", {
                        icon: 4
                    }), m = !0);
                    $("#qishu_next i, .order_box h4 span").text(nextqishu);
                    r || (r = setInterval(function () {
                        f = 0 > f - 1 ? 0 : f - 1;
                        g = 0 > g - 1 ? 0 : g - 1;
                        0 != f || m || (getchat = !1, $(".game_box_shade").show(), k('<li class="system"><h5><i class="n"></i>' + nextqishu + " Phiên đã đóng cửa</h5></li>"), l = layer.msg(nextqishu + " Phiên sắp mở cửa, bây giờ đóng cửa...", {
                            icon: 4
                        }), m = !0);
                        0 < n && 0 == g ? setTimeout(function () {
                            location.reload()
                        }, 3000) : 0 == f && 0 < g && $("#time i").text(getTime(g));
                        0 < n && 0 == f ? $("#time em").text("Đã đóng") : (4 == f && playSound_Djs(), $("#time em").text("Đang cược"),
                            $("#time i").text(getTime(f)))
                    }, 1E3));
                    C(c);
                    !sotp && y(c);
                    h = !0
                },
                w = function (a) {
                    var c = "",
                        d = "";
                    if (a.haoma) {
                        var e = [];
                        e = a.haoma.split(",");
                        var b = 0;
                        a = e.length;
                        for (i = 0; i < a; i++)
                            b += parseInt(e[i]), c += '<i class="' + (4 == gameid || 5 == gameid || 9 == gameid || 13 == gameid || gameid == 14 || 10 == gameid ? "orange" : 6 == gameid ? "pk c" + e[i] : "blue") + '">' + e[i] + "</i>";

                        if (6 > gameid || gameid == 14) {
                            if (gameid == 1 || gameid == 14) {
                                b = parseInt(e[3]) * 10 + parseInt(e[4]);
                            } else if (gameid == 4 || gameid == 5 || gameid == 13) {
                                b = parseInt(e[1]) * 10 + parseInt(e[2]);
                            } else if (gameid == 2 || gameid == 3) {
                                b = parseInt(e[6]) * 10 + parseInt(e[7]);
                            }
                            d = '<i class="zw">Lấy hai chữ số cuối cùng</i><i>' + b + "</i>";
                            a = 0 == b % 4 ? 4 : b % 4;
                            d += '<i class="s">%</i><i class="s c">4</i><i class="s">=</i><i class="z" style="width: 36px;">' +
                                a + "Số thứ tự</i>"
                        } else if (6 == gameid) {
                            b = 0;
                            d = "";
                            for (i = 0; i < a; i++)
                                2 > i && (b += parseInt(e[i])), 5 > i && (d += parseInt(e[i]) > parseInt(e[a - 1 - i]) ? '<i class="s c">Con rồng</i>' : '<i class="s c">Con hổ</i>');
                            d = '<i class="zw">Vô địch và Á quân</i><i>' + b + '</i><i class="s c">' + (11 < b ? 'Lớn ' : 'Nhỏ') + '</i><i class="s c">' + (0 == b % 2 ? 'Chẵn' : 'Lẻ') + "</i>" + d
                        } else if (7 == gameid)
                            d = parseInt(e[0]) > parseInt(e[a - 1]) ? "Con rồng" : parseInt(e[0]) == parseInt(e[a - 1]) ? "Hòa" : "Con hổ", d = '<i class="zw">Tổng cộng</i><i>' + b + '</i><i class="s c">' +
                                (22 < b ? 'Lớn' : 'Nhỏ') + '</i><i class="s c">' + (0 == b % 2 ? 'Chẵn' : 'Lẻ') + '</i><i class="s c">' + d + "</i>";
                        else if (27 == gameid || 28 == gameid || 29 == gameid || 30 == gameid || 31 == gameid)
                            d = '<i class="zw">Tổng cộng</i><i class="b_' + b + '">' + b + '</i><i class="s c">' + (13 < b ? 'Lớn' : 'Nhỏ') + '</i><i class="s c">' + (0 == b % 2 ? 'Chẵn' : 'Lẻ') + "</i>";
                        else if (48 == gameid || 49 == gameid || 44 == gameid)//Tổng cộng 大小 单双  快三专用
                            d = '<i class="zw">Tổng cộng</i><i class="b_' + b + '">' + b + '</i><i class="s c">' + (10 < b ? 'Lớn' : 'Nhỏ') + '</i><i class="s c">' + (0 == b % 2 ? 'Chẵn' : 'Lẻ') + "</i>";
                        else if (12 == gameid) {
                            b = parseInt(e[0] + e[1]);
                            if (0 == b || 50 == b)
                                b = parseInt(e[2] + e[3]);
                            50 < b && (b -= 50);
                            d = '<i class="zw">Số đặc biệt</i><i>' + b + '</i><i class="s c">' + (49 == b ? 'Hòa' : 24 < b ? 'Lớn' : 'Nhỏ') + '</i><i class="s c">' + (49 == b ?
                                'Hòa' : 0 == b % 2 ? 'Chẵn' : 'Lẻ') + "</i>"
                        }
                    } else
                        c = '<i class="zw">Đang mở...</i>', setTimeout(function () {
                            location.reload();
                            var a = Date.parse(new Date);
                            x(a)
                        }, 5E3);
                    $("#haoma").html(c);
                    $("#haoma_type").html(d)
                },
                z = function (a) {
                    $.ajax({
                        url: "?a=ajax_gomoney",
                        data: {},
                        type: "POST",
                        dataType: "json",
                        success: function (a) {
                            "n" == a.err && $("#money_now").text(a.money)
                        },
                        error: function () {
                            console.log("ERR")
                        }
                    })
                },
                C = function (a) {
                    $(".haoma_box ul").html('<div class="onload"></div>');
                    $.ajax({
                        url: "?a=ajax_gohaomalist&gameid=" + gameid,
                        dataType: "json",
                        success: function (a) {
                            $(".haoma_box ul, .val_list").empty();
                            "n" == a.err && $.each(a.order, function (a, e) {
                                var b = e.haoma.split(",");
                                var d = "",
                                    c = 0,
                                    f = b.length;
                                for (a = 0; a < f; a++)
                                    c += parseInt(b[a]), d += "<i>" + b[a] + "</i>";

                                if (6 > gameid || gameid == 14) {
                                    if (gameid == 1 || gameid == 14) {
                                        c = parseInt(b[3]) * 10 + parseInt(b[4]);
                                    } else if (gameid == 4 || gameid == 5 || gameid == 13) {
                                        c = parseInt(b[1]) * 10 + parseInt(b[2]);
                                    } else if (gameid == 2 || gameid == 3) {
                                        c = parseInt(b[6]) * 10 + parseInt(b[7]);
                                    }
                                    c = 0 == c % 4 ? 4 : c % 4;
                                    $(".haoma_box ul").append('<li class="fan"><span>Phiên ' + e.qishu + " </span><span>" + d + "<em>" + c + "Số thứ tự</em></span></li>")
                                    $('.val_box').show();
                                    $('.val_list').append('<i class="s' + c + '">' + c + '</i>');
                                } else if (32 == gameid || 33 == gameid || 34 == gameid || 35 == gameid || 36 == gameid || 37 == gameid)//28
                                    b = parseInt(b[0]) > parseInt(b[f - 1]) ? "Con rồng" : parseInt(b[0]) == parseInt(b[f - 1]) ? 'Hòa' : "Con hổ", $(".haoma_box ul").append("<li>" +
                                        "<span>Phiên " + e.qishu + "</span><span>" + d + "<em>" + c + "</em><em>" + (22 < c ? 'Lớn' : 'Nhỏ') + "</em><em>" + b + "</em></span></li>");
                                else if (27 == gameid || 28 == gameid || 29 == gameid || 30 == gameid || 31 == gameid)
                                    $(".haoma_box ul").append("<li><span>Phiên " + e.qishu + " </span><span>" + d + "<em class=\"b_" + c + "\">" + c + "</em><em>" + (13 < c ? 'Lớn' : 'Nhỏ') + "</em><em>" + (0 == c % 2 ? 'Chẵn' : 'Lẻ') + "</em></span></li>");
                                else if (48 == gameid || 49 == gameid || 44 == gameid)//k3
                                    $(".haoma_box ul").append("<li><span>Phiên " + e.qishu + " </span><span>" + d + "<em class=\"b_" + c + "\">" + c + "</em><em>" + (10 < c ? 'Lớn' : 'Nhỏ') + "</em><em>" + (0 == c % 2 ? 'Chẵn' : 'Lẻ') + "</em></span></li>");
                                else if (12 == gameid) {
                                    c = parseInt(b[0] + b[1]);
                                    if (0 == c || 50 == c)
                                        c = parseInt(b[2] + b[3]);
                                    50 < c && (c -= 50);
                                    $(".haoma_box ul").append("<li><span>Phiên " + e.qishu + " </span><span>" + d + "<em>" + c + "</em><em>" + (49 == c ? 'Hòa' : 24 < c ? 'Lớn' :
                                        'Nhỏ') + "</em><em>" + (49 == c ? 'Hòa' : 0 == c % 2 ? 'Chẵn' : 'Lẻ') + "</em></span></li>")
                                } else
                                    $(".haoma_box ul").append("<li><span>Phiên " + e.qishu + " </span><span>" + d + "</span></li>")
                            })
                        },
                        error: function () {
                            console.log("ERR")
                        }
                    })
                },
                y = function (a) {
                    getchat && $.ajax({
                        url: "?a=ajax_chat_order&gameid=" + gameid,
                        data: {
                            id: u,
                            qishu: nextqishu
                        },
                        type: "POST",
                        dataType: "json",
                        success: function (a) {
                            "n" == a.err && (0 != a.id ? (u = a.id, $.each(a.order, function (a, b) {
                                a = b.wanfa.split("@");
                                var c = "statics/images/userpic.png";
                                b.user.pic && (c = /^\d+$/.test(b.user.pic) &&
                                0 < b.user.pic ? "statics/images/pic/" + b.user.pic + ".jpg" : "uppic/user/" + b.user.pic);
                                b = "<li><h5>" + getLocalTime(parseInt(b.addtime), "hh:mm:ss") + '</h5><img src="' + c + '" alt="' + b.addtime + '"/><h4>' + (b.user.nickname ? b.user.nickname : hiddenStr(b.user.username, 2, 2)) + '</h4><div class="msg"><span class="qishu">Phiên ' + nextqishu + '</span><span class="money">' + Gsnum(b.money) + ' VNĐ</span><span class="wanfa">' + (2 == a.length ? a[0] : a[0] + "@" + a[2]) + "</span></li>";
                                k(b)
                            })) : (a = Date.parse(new Date),
                                D(a)))
                        },
                        error: function () {
                            console.log("ERR")
                        }
                    });
                    var c = Date.parse(new Date);
                    a = Math.floor(10 * Math.random()) + 1;
                    clearTimeout(t);
                    t = setTimeout(function () {
                        y(c)
                    }, 1E3 * a)
                },
                D = function (a) { //
                    if (getchat) {
                        a = [, "1idea2 2idea3 3idea4 4idea1 1idea4 2idea1 3idea2 4idea3 1-2angle 2-3angle 3-4angle 4-1angle positive1 positive2 positive3 positive4 Fan1 Fan2 Fan3 Fan4 Single Double".split(" ")];
                        a[2] = a[1];
                        a[3] = a[1];
                        a[4] = a[1];
                        a[5] = a[1];
                        a[6] = "1idea2 2idea3 3idea4 4idea1 1idea4 2idea1 3idea2 4idea3 1-2angle 2-3angle 3-4angle 4-1angle positive1 positive2 positive3 positive4 Fan1 Fan2 Fan3 Fan4 Single Double GuanYaBig@GuanYa GuanYaSmall@GuanYa GuanYasingle@GuanYa GuanYadouble@GuanYa 3@GuanYa 4@GuanYa 5@GuanYa 6@GuanYa 7@GuanYa 8@GuanYa 9@GuanYa 10@GuanYa 11@GuanYa 12@GuanYa 13@GuanYa 14@GuanYa 15@GuanYa 16@GuanYa 17@GuanYa 18@GuanYa 19@GuanYa Big@Champion Small@Champion single@Championdouble@Champion Dragon@Champion tiger@Champion Big@runner-up Small@runner-up single@runner-updouble@runner-up Dragon@runner-up tiger@runner-up Big@third Small@third single@thirddouble@third Dragon@third tiger@third Big@Forth Small@Forth single@Forthdouble@Forth Dragon@Forth tiger@Forth Big@Fivth Small@Fivth single@Fivthdouble@Fivth Dragon@Fivth tiger@Fivth Big@Sixth Small@Sixth single@Sixthdouble@Sixth Big@Seventh Small@Seventh single@Seventhdouble@Seventh Big@eighth Small@eighth single@eighthdouble@eighth Big@ninth Small@ninth single@ninthdouble@ninth Big@tenth Small@tenth single@tenthdouble@tenth 1@Champion 2@Champion 3@Champion 4@Champion 5@Champion 6@Champion 7@Champion 8@Champion 9@Champion 10@Champion 1@runner-up 2@runner-up 3@runner-up 4@runner-up 5@runner-up 6@runner-up 7@runner-up 8@runner-up 9@runner-up 10@runner-up 1@third 2@third 3@third 4@third 5@third 6@third 7@third 8@third 9@third 10@third 1@Forth 2@Forth 3@Forth 4@Forth 5@Forth 6@Forth 7@Forth 8@Forth 9@Forth 10@Forth 1@Fivth 2@Fivth 3@Fivth 4@Fivth 5@Fivth 6@Fivth 7@Fivth 8@Fivth 9@Fivth 10@Fivth 1@Sixth 2@Sixth 3@Sixth 4@Sixth 5@Sixth 6@Sixth 7@Sixth 8@Sixth 9@Sixth 10@Sixth 1@Seventh 2@Seventh 3@Seventh 4@Seventh 5@Seventh 6@Seventh 7@Seventh 8@Seventh 9@Seventh 10@Seventh 1@eighth 2@eighth 3@eighth 4@eighth 5@eighth 6@eighth 7@eighth 8@eighth 9@eighth 10@eighth 1@ninth 2@ninth 3@ninth 4@ninth 5@ninth 6@ninth 7@ninth 8@ninth 9@ninth 10@ninth 1@tenth 2@tenth 3@tenth 4@tenth 5@tenth 6@tenth 7@tenth 8@tenth 9@tenth 10@tenthGuanYaBig@GuanYa GuanYaSmall@GuanYa GuanYasingle@GuanYa GuanYadouble@GuanYa 3@GuanYa 4@GuanYa 5@GuanYa 6@GuanYa 7@GuanYa 8@GuanYa 9@GuanYa 10@GuanYa 11@GuanYa 12@GuanYa 13@GuanYa 14@GuanYa 15@GuanYa 16@GuanYa 17@GuanYa 18@GuanYa 19@GuanYa Big@Champion Small@Champion single@Championdouble@Champion Dragon@Champion tiger@Champion Big@runner-up Small@runner-up single@runner-updouble@runner-up Dragon@runner-up tiger@runner-up Big@third Small@third single@thirddouble@third Dragon@third tiger@third Big@Forth Small@Forth single@Forthdouble@Forth Dragon@Forth tiger@Forth Big@Fivth Small@Fivth single@Fivthdouble@Fivth Dragon@Fivth tiger@Fivth Big@Sixth Small@Sixth single@Sixthdouble@Sixth Big@Seventh Small@Seventh single@Seventhdouble@Seventh Big@eighth Small@eighth single@eighthdouble@eighth Big@ninth Small@ninth single@ninthdouble@ninth Big@tenth Small@tenth single@tenthdouble@tenth 1@Champion 2@Champion 3@Champion 4@Champion 5@Champion 6@Champion 7@Champion 8@Champion 9@Champion 10@Champion 1@runner-up 2@runner-up 3@runner-up 4@runner-up 5@runner-up 6@runner-up 7@runner-up 8@runner-up 9@runner-up 10@runner-up 1@third 2@third 3@third 4@third 5@third 6@third 7@third 8@third 9@third 10@third 1@Forth 2@Forth 3@Forth 4@Forth 5@Forth 6@Forth 7@Forth 8@Forth 9@Forth 10@Forth 1@Fivth 2@Fivth 3@Fivth 4@Fivth 5@Fivth 6@Fivth 7@Fivth 8@Fivth 9@Fivth 10@Fivth 1@Sixth 2@Sixth 3@Sixth 4@Sixth 5@Sixth 6@Sixth 7@Sixth 8@Sixth 9@Sixth 10@Sixth 1@Seventh 2@Seventh 3@Seventh 4@Seventh 5@Seventh 6@Seventh 7@Seventh 8@Seventh 9@Seventh 10@Seventh 1@eighth 2@eighth 3@eighth 4@eighth 5@eighth 6@eighth 7@eighth 8@eighth 9@eighth 10@eighth 1@ninth 2@ninth 3@ninth 4@ninth 5@ninth 6@ninth 7@ninth 8@ninth 9@ninth 10@ninth 1@tenth 2@tenth 3@tenth 4@tenth 5@tenth 6@tenth 7@tenth 8@tenth 9@tenth 10@tenth".split(" ");
                        a[7] = "Sumbig@Sum Sumsmall@Sum Sumsingle@Sum Sumdouble@total dragon@Sum tiger@Sum sum@Sum big@firstBall small@firstBall single@firstBall double@firstBall big@secondBall small@secondBall single@secondBall double@secondBall big@thirdBall small@thirdBall single@thirdBall double@thirdBall big@fourthBall small@fourthBall double@fourthBall double@fourthBall double@fourthBall double@fourthBall double@fourthBall big@fifthBall big Small@fifthBall single@fifthBall double@fifthBall 0@firstBall 1@firstBall 2@firstBall 3@firstBall 4@firstBall 5@firstBall 6@firstBall 7@firstBall 8@firstBall 9@firstBall 0@secondBall 1@secondBall 2@secondBall 3@secondBall 4@secondBall 5@secondBall 6@secondBall 7@secondBall 8@secondBall 9@secondBall 0@thirdBall 1@thirdBall 2@thirdBall 3@thirdBall 4@thirdBall 5@thirdBall 6@thirdBall 7@thirdBall 8@thirdBall 9@thirdBall 0@fourthBall 1@fourthBall 2@fourthBall 3@fourthBall 4@fourthBall 5@fourthBall 6@fourthBall 7@fourthBall 8@fourthBall 9@fourthBall 0@fifthBall 1@fifthBall 2@fifthBall 3@fifthBall 4@fifthBall 5@fifthBall 6@fifthBall 7@fifthBall 8@fifthBall 9@fifthBall leopard@firstThree pairs@firstThree pairsHalfSmooth@firstThree hybridSix@firstThree Leopards@middleThree pairs@middleThree Halfpairs@middleThree HalfSmooth@middleThree mixedSix@middleThree HalfSmooth@backThree HalfShun@backThree HalfShun@backThree six@lastThree".split(" ");
                        a[8] = [];
                        //[9] = "Big small single double bigSingle bigDouble smallSingle smallDouble great Littlesmall leopard redWave greenWave blueWave 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25".split(" ");
                        a[9] = "Lớn Nhỏ Lẻ Chẵn 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25".split(" ");
                        a[100] = "Big small single double bigSingle bigDouble smallSingle smallDouble leopard 4 5 6 7 8 9 10 11 12 13 14 15 16 17".split(" ");
                        a[101] = "1@firstBall 2@firstBall 3@firstBall 4@firstBall 5@firstBall 6@firstBall 7@firstBall 8@firstBall 9@firstBall 11@secondBall 1@secondBall 2@secondBall 3@secondBall 4@secondBall 5@secondBall 6@secondBall 7@secondBall 8@secondBall 9@secondBall 11@thirdBall 1@thirdBall 2@thirdBall 3@thirdBall 4@thirdBall 5@thirdBall 6@thirdBall 7@thirdBall 8@thirdBall 9@thirdBall 11@fourthBall 1@fourthBall 2@fourthBall 3@fourthBall 4@fourthBall 5@fourthBall 6@fourthBall 7@fourthBall 8@fourthBall 9@fourthBall 11@fifthBall 1@fifthBall 2@fifthBall 3@fifthBall 4@fifthBall 5@fifthBall 6@fifthBall 7@fifthBall 8@fifthBall 9@fifthBall 9@fifthBall".split(" ");
                        a[102] = "Big@firstBall small@firstBall single@firstBall double@firstBall big@secondBall small@secondBall single@secondBall double@secondBall big@thirdBall small@thirdBall single@thirdBall double@thirdBall big@fourthBall small@fourthBall single@fourthBall double@fourthBall big@fifthBall small@fifthBall single@fifthBall double@fifthBall big@sixthBall small@sixthBall single@sixthBall double@sixthBall big@seventhBall big Small@seventhBall single@seventhBall double@seventhBall big@eighthBall small@eighthBall single@eighthBall double@eighthBall 1@firstBall 2@firstBall 3@firstBall 4@firstBall 5@firstBall 6@firstBall 7@firstBall 8@firstBall 9@firstBall 10@firstBall 1@secondBall 2@secondBall 3@secondBall 4@secondBall 5@secondBall 6@secondBall 7@secondBall 8@secondBall 9@secondBall 10@secondBall 1@thirdBall 2@thirdBall 3@thirdBall 4@thirdBall 5@thirdBall 6@thirdBall 7@thirdBall 8@thirdBall 9@thirdBall 10@thirdBall 1@fourthBall 2@fourthBall 3@fourthBall 4@fourthBall 5@fourthBall 6@fourthBall 7@fourthBall 8@fourthBall 9@fourthBall 10@fourthBall 1@fifthBall 2@fifthBall 3@fifthBall 4@fifthBall 5@fifthBall 6@fifthBall 7@fifthBall 8@fifthBall 9@fifthBall 10@fifthBall 1@sixthBall 2@sixthBall 3@sixthBall 4@sixthBall 5@sixthBall 6@sixthBall 7@sixthBall 8@sixthBall 9@sixthBall 10@sixthBall 1@seventhBall 2@seventhBall 3@seventhBall 4@seventhBall 5@seventhBall 6@seventhBall 7@seventhBall 8@seventhBall 9@seventhBall 10@seventhBall 1@eighthBall 2@eighthBall 3@eighthBall 4@eighthBall 5@eighthBall 6@eighthBall 7@eighthBall 8@eighthBall 9@eighthBall 10@eighthBall 11@firstBall 1@firstBall 13@firstBall 14@firstBall 15@firstBall 16@firstBall 17@firstBall 18@firstBall 19@firstBall 20@firstBall 11@secondBall 1@secondBall 13@secondBall 14@secondBall 15@secondBall 16@secondBall 17@secondBall 18@secondBall 19@secondBall 20@secondBall 11@thirdBall 1@thirdBall 13@thirdBall 14@thirdBall 14 15@thirdBall 16@thirdBall 17@thirdBall 18@thirdBall 19@thirdBall 20@thirdBall 11@fourthBall 1@fourthBall 13@fourthBall 14@fourthBall 15@fourthBall 16@fourthBall 17@fourthBall 18@fourthBall 19@fourthBall 20@fourthBall 11@fifthBall 1@fifthBall 13@fifthBall 14@fifthBall 15@fifthBall 16@fifthBall 17@fifthBall 18@fifthBall 19@fifthBall 20@fifthBall 11@sixthBall 1@sixthBall 13@sixthBall 14@sixthBall 15@sixthBall 16@sixthBall 17@sixthBall 18@sixthBall 19@sixthBall 20@sixthBall 11@seventhBall 1@seventhBall 13@seventhBall 14@seventhBall 15@seventhBall 16@seventhBall 16@seventhBall 17@seventhBall 18@seventhBall 19@seventhBall 20@seventhBall 11@eighthBall 1@eighthBall 13@eighthBall 14@eighthBall 15@eighthBall 16@eighthBall 17@eighthBall 18@eighthBall 19@eighthBall 20@eighthBall".split(" ");
                        a[27] = a[9];
                        a[28] = a[9];
                        a[29] = a[9];
                        a[30] = a[9];
                        a[31] = a[9];
                        a[32] = a[7];
                        a[33] = a[7];
                        a[34] = a[7];
                        a[35] = a[7];
                        a[36] = a[7];
                        a[37] = a[6];
                        a[38] = a[6];
                        a[39] = a[6];
                        a[40] = a[6];
                        a[41] = a[6];
                        a[42] = a[6];
                        a[43] = a[101];
                        a[46] = a[101];
                        a[47] = a[101];
                        a[44] = a[100];
                        a[48] = a[100];
                        a[49] = a[100];
                        a[45] = a[102];
                        a[50] = a[102];
                        a[51] = a[102];
                        a[52] = "double@firstBall big@secondBall small@secondBall single@secondBall double@double@secondBall big@thirdBall small@thirdBall single@thirdBall single@thirdBall double@thirdBall double@thirdBall big@fourthBall big@fourthBall small@fourthBall single@fourthBall single@fourthBall double@fourthBall double@fourthBall big@fifthBall small@fifthBall single@fifthBall double@fifthBall double@fifthBall big@sixthBall small@sixthBall small@sixthBall small@sixthBall small@sixthBall small@sixthBall small@sixthBall small@fourthBall single@fourthBall single@fourthBall double@double@double@fifthBall big@sixthBall single@sixth double@sixth Big@seventhBall small@seventhBall single@seventhBall single@seventhBall double@seventhBall big@eighthBall small@eighthBall single@eighthBall double@eighthBall 1@firstBall 2@firstBall 3@firstBall 3@firstBall 4@firstBall 5@firstBall 6@firstBall 6@firstBall 7@firstBall 8@firstBall 8@firstBall 9@firstBall 10@firstBall 1@secondBall 2@secondBall 3@secondBall 4@secondBall 4@secondBall 5@secondBall 6@secondBall 7@secondBall 8@8@8@8@8@8@secondBall 8@8@8@8@secondBall 8@secondBall 8@secondBall 8@secondBall 8@secondBall 8@secondBall second 9@second 10@secondBall 1@thirdBall 2@thirdBall 3@thirdBall 3@thirdBall 4@thirdBall 5@thirdBall 6@thirdBall 6@thirdBall 7@thirdBall 8@thirdBall 9@thirdBall 10@thirdBall 10@thirdBall 1@fourthBall 2@fourthBall 3@fourthBall 4@fourthBall 4@fourthBall 5@fourthBall 5@fourthBall 6@fourthBall 7@fourthBall 8@fourthBall 9@fourthBall 10@fourthBall 1@fifthBall 2@fifthBall 3@fifthBall 9@thirdBall 4@fifthBall 4@fifthBall 4@fifthBall 4@fifthBall 4@fifthBall 4@fifthBall 4@fifthBall 4@fifthBall 4@fourthBall 4@fourthBall 5 5@5th 6@5th 7@5th 8@eighthBall 9@fifthBall 9@fifthBall 10@fifthBall 1@sixthBall 2@sixthBall 3@sixthBall 4@sixthBall 4@sixthBall 5@sixthBall 6@sixthBall 7@sixthBall 8@sixthBall 9@sixthBall 9@sixthBall 10@sixthBall 10@sixthBall 1@seventhBall 2@seventhBall 2@seventhBall 3@seventhBall 4@seventhBall 4@seventhBall 5@seventhBall 6@seventhBall 7@seventhBall 8@seventhBall 9@seventhBall 10@seventhBall 10@seventhBall 1@eighthBall 2@8@eighthBall 2@eighthBall 2@eighthBall 3@seventhBall 9@seventhBall 10@seventhBall 1@eighthBall 2@eighthBall 2@eighthBall 3@8th 4@8th 5@8th,6@8th 7@8th 8@8th 9@8th 10@8th".split(" ");
                        a[53] = "Big@1stBall small@1stBall single@1stBall double@1stBall big@2ndBall small@2ndBall single@2ndBall double@2ndBall big@ ThirdBall small@thirdBall single@thirdBall double@thirdBall big@fourthBall small@fourthBall single@fourthBall double@fourthBall big@fifthBall small@fifthBall single@fifthBall double@fifthBall big@sixthBall small@sixthBall single@sixthBall double@sixthBall big@SingleCode Small@SingleCode Single@SingleCode Double@SingleCode 1@SingleCode 2@SingleCode 3@SingleCode 4@SingleCode 5@SingleCode 6@ Single special code 7@SingleCode 8@SingleCode 9@SingleCode 10@SingleCode 11@SingleCode 1@SingleCode 13@SingleCode 14@SingleCode 15@SingleCode 16@SingleCode 17@SingleCode 18@SingleCode 19@SingleCode 20@SingleCode 21@SingleCode 22@SingleCode 23@SingleCode 24@SingleCode 25@SingleCode 26@SingleCode 27@SingleCode 28@SingleCode 29@SingleCode 30@SingleCode 31@ Single special code 32@SingleCode 33@SingleCode 34@SingleCode 35@SingleCode 36@SingleCode 37@SingleCode 38@SingleCode 39@SingleCode 40@SingleCode 41@SingleCode 42@SingleCode 43@SingleCode 44@SingleCode 45@SingleCode 46@SingleCode 47@SingleCode 48@SingleCode 49@SingleCode cattle@SpecialCode chicken@SpecialCode sheep@SpecialCode horse@SpecialCode snake@SpecialCode rat@SpecialCode Tiger@SpecialCode rabbit@SpecialCode dragon@SpecialCode monkey@SpecialCode pig@SpecialCode dog@SpecialCode".split(" ");
                        a[54] = a[53];
                        a[11] = [];
                        a[12] = "Big small Single double bigSingle big double smallSingle smallDouble poultry beast largeComposite smallComposite compositeSingle compositeDouble redWave greenWave blueWave redBig redSmall redSingle redDouble blueBig blueSmall blueSingle blueDouble greenBig greenSmall greenSingle greenDouble 0head 1head 2heads 3heads 4heads 0tails 1tails 2tails 3tails 4tails 5tails 6tails 7tails 8tails 9tails cows chickens sheep pigs dogs horses snakes rats tigers rabbits monkey 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 32 33 34 35 36 37 38 39 40 41 42 43 44 45 46 47 48 49".split(" ");
                        a[13] = a[1];
                        a[14] = a[1];
                        a[25] = a[9];
                        a[26] = a[9];
                        a[20] = a[7];
                        var c = [1000000, 2000000, 3000000, 4000000, 5000000, 5500000, 6000000, 6600000, 7000000, 8000000, 8800000, 9900000, 10000000, 11100000, 12300000, 15000000, 16000000, 16600000, 18000000, 20000000, 21100000, 21200000, 23000000, 24000000, 24100000, 28000000, 29000000, 30000000, 31000000, 32000000, 33000000, 34000000, 37000000, 38000000, 42000000, 46000000, 50000000, 56000000, 56600000, 58000000, 58500000, 59000000, 60000000, 61600000, 65000000, 71000000, 76000000, 77000000, 78000000, 79900000, 80800000, 81000000, 81800000, 82000000, 85000000, 91900000, 92300000, 93000000, 15300000, 102300000, 116000000, 120000000, 121100000, 121200000, 148000000, 150000000, 151000000, 2300000, 210000000, 211000000, 212000000, 228000000, 250000000, 321200000, 350000000, , 500000000, 1000000000, 600000000, 550000000, 660000000, 628800000, 779900000, 782200000, 998800000, 1123300000, 5300000, 6300000];
                        console.log(a[gameid]);
                        a = a[gameid][Math.floor(Math.random() * a[gameid].length)];
                        c = Gsnum(c[Math.floor(Math.random() * c.length)]);
                        var d = Date.parse(new Date) / 1E3;
                        d = getLocalTime(d, "hh:mm:ss");
                        var e = "statics/images/userpic.png",
                            b = Math.ceil(225 * Math.random());
                        25 < b ? e = "statics/images/autopic/" + b + ".jpg" : 0 < b && (e = "statics/images/pic/" + b + ".jpg");

                        var chuoi_so = c.toString();

                        var c = chuoi_so.replace(/\B(?=(\d{3})+(?!\d))/g, ".");


                        a = "<li><h5>" + d + '</h5><img src="' + e + '"/><h4>' + hiddenStr(randomStr(), 2, 2) + '</h4><div class="msg"><span class="qishu">Phiên ' + nextqishu + '</span><span class="money">' + c + ' VNĐ</span><span class="wanfa">' + a + "</span></li>";
                        k(a)
                    }
                },
                k = function (a) {
                    $(".chat_box ul").append(a);
                    $(".chat_box").animate({
                        scrollTop: $(".chat_box")[0].scrollHeight
                    }, 300);
                    50 < $(".chat_box ul li").length &&
                    $(".chat_box ul li").eq(0).detach()
                };
            //跟投
            $(document).on('mousedown', '.chat_box ul li', function () {
                var $this = $(this);
                var name = $this.children("h4").text();
                var wanfa = $this.children(".msg").children(".wanfa").text();
                var money = $this.children(".msg").children(".money").text();

                $(".popup_chat_wrap").find("input[name='wanfa']").val(wanfa);
                $(".popup_chat_wrap").find("input[name='money']").val(money);
                $(".popup_chat_wrap").find("input[name='qishu']").val(nextqishu);
                $(".popup_chat_wrap").find("#popup_chat_name").html("<span class='ng-binding'>Người chơi：</span>" + name);
                $(".popup_chat_wrap").find("#popup_chat_qishu").html("<span class='ng-binding'>Người chơi：</span>" + nextqishu);
                $(".popup_chat_wrap").find("#popup_chat_type").text(wanfa);
                $(".popup_chat_wrap").find("#popup_chat_money").text(money);
                $(".popup_chat_wrap").show();
            });
            $(document).on('mousedown', '#popup_chat_submit', function () {
                var wanfa = $(".popup_chat_wrap").find("input[name='wanfa']").val();
                var money = $(".popup_chat_wrap").find("input[name='money']").val();
                var qishu = $(".popup_chat_wrap").find("input[name='qishu']").val();
                var money_i = money.lastIndexOf("\￥");
                money = money.substring(money_i + 1, money.length);
                wanfa = wanfa.split('@');
                // console.log(wanfa.length);
                if (wanfa.length == 1) {
                    var peilv = $(".C_" + Replacement[wanfa[0]]).children("em").text();
                    wanfa = Replacement[wanfa[0]] + "@" + wanfa[0] + "@" + peilv;
                } else if (wanfa.length == 2) {
                    var peilv = $(".C_" + Replacement[wanfa[0] + "@" + wanfa[1]]).children("em").text();
                    wanfa = Replacement[wanfa[0] + "@" + wanfa[1]] + "@" + wanfa[0] + "@" + peilv + "@" + wanfa[1];
                } else {
                    layer.msg("Lỗi tham số");
                    $(".popup_chat_wrap").hide();
                    return false;
                }
                $.ajax({
                    url: "?a=ajax_touzhu",
                    data: {
                        gameid: gameid,
                        roomid: roomid,
                        gamename: gamename,
                        qishu: qishu,
                        wanfa: wanfa,
                        money: money,
                        sum: null,
                        ban: null,
                        dosubmit: "yes"
                    },
                    type: "POST",
                    dataType: "json",
                    cache: !1,
                    success: function (b) {
                        // layer.close(a);
                        $(".popup_chat_wrap").hide();
                        "y" == b.status ? (layer.msg(b.info, {
                            icon: 1
                        }), b = Date.parse(new Date), z(b)) : "y" == b.login ? layer.confirm(b.info, {
                            btn: ["Đi đến trang đăng nhập",
                                "Hủy bỏ"]
                        }, function () {
                            location.href = "?a=login"
                        }, function () {
                            console.log(11122233);
                        }) : layer.msg(b.info, {
                            icon: 0
                        })
                    },
                    error: function () {
                        layer.close(a);
                        layer.alert("Yêu cầu đến máy chủ thất bại, vui lòng thử lại...", {
                            icon: 0
                        })
                    }
                });

            });

            v(0, 0);
            uid && setInterval(function () {
                var a = Date.parse(new Date);
                z(a)
            }, 1E4);
            setInterval(function () {
                k('<li class="system"><h5>Chúc bạn trúng thưởng</h5></li>');
            }, 3E4);//30秒刷新一次
            $(window).resize(function () {
                var a = $(window).height();
                $(".scroll_box").css({
                    height: a - 98
                });
                if (6 > gameid || 13 == gameid || gameid == 14) {
                    $(".chat_box, .game_box, .game_box_shade").css({
                        height: a - 243
                    });
                    var c = $(".game_box").width();
                    a = (c - 6) / 5;
                    c = c - 2 * a - 126 - 3;
                    $(".game .line_1.df a, .game .line_2.df a, .game .line_6.df a, .game .line_7.df a").css({
                        width: a
                    });
                    $(".game .line_4").css({
                        width: c
                    });
                    $(".game .line_4 a").css({
                        width: c - 1
                    })
                } else {
                    $(".chat_box, .game_box_shade").css({
                        height: a - 219
                    });
                    $('.game_box').css({
                        height: a - 520
                    });
                }
            }).resize();
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
            $("a.hide").click(function () {
                $(".send_box").stop().slideUp(300)
            });
            $("a#send").click(function () {
                if (0 == nextqishu)
                    return layer.alert("Chưa nhận được số kỳ...", {
                        icon: 0
                    }),
                        !1;
                var a = $("#game a.a");
                if (1 > a.length)
                    return layer.alert("Vui lòng chọn cách chơi", {
                        icon: 0
                    }), !1;
                var c = Gsnum($("input#money").val()),
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
                layer.confirm($(".send_box h5").text() + "，Tổng số tiền：" + f, {
                    btn: ["Xác nhận cược", "Hủy bỏ"]
                }, function () {
                    var a = layer.load(1);
                    $.ajax({
                        url: "?a=ajax_touzhu",
                        data: {
                            gameid: gameid,
                            roomid: roomid,
                            gamename: gamename,
                            qishu: nextqishu,
                            wanfa: b,
                            money: c,
                            sum: e,
                            ban: g,
                            dosubmit: "yes"
                        },
                        type: "POST",
                        dataType: "json",
                        cache: !1,
                        success: function (b) {
                            layer.close(a);
                            "y" == b.status ? (layer.msg(b.info, {
                                icon: 1
                            }), b = Date.parse(new Date), z(b)) : "y" == b.login ? layer.confirm(b.info, {
                                btn: ["Đi đến trang đăng nhập",
                                    "Hủy bỏ"]
                            }, function () {
                                location.href = "?a=login"
                            }, function () {
                            }) : layer.msg(b.info, {
                                icon: 0
                            })
                        },
                        error: function () {
                            layer.close(a);
                            layer.alert("Yêu cầu đến máy chủ thất bại, vui lòng thử lại...", {
                                icon: 0
                            })
                        }
                    })
                }, function () {
                })
            })
        });
    }

    startgame();
</script>

<svg id="zohocomponents__svg" style="display: none" class="zh-dnone">
    <symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--add">
        <polygon
            points="13,7.3 8.7,7.3 8.7,3 7.3,3 7.3,7.3 3,7.3 3,8.7 7.3,8.7 7.3,13 8.7,13 8.7,8.7 13,8.7 "></polygon>
    </symbol>
    <symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--arrow">
        <polygon points="6.5,12.5 5.5,11.5 9,8 5.5,4.5 6.5,3.5 11,8"></polygon>
    </symbol>
    <symbol id="zc__svg--arrowbottom" viewBox="0 0 10.70711 6.06066">
        <polyline points="10.354 0.354 5.354 5.354 0.354 0.354"></polyline>
    </symbol>
    <symbol id="zc__svg--arrowleft" viewBox="0 0 6.06066 10.70711">
        <polyline points="5.707 10.354 0.707 5.354 5.707 0.354"></polyline>
    </symbol>
    <symbol id="zc__svg--arrowright" viewBox="0 0 6.06066 10.70711">
        <polyline points="0.354 0.354 5.354 5.354 0.354 10.354"></polyline>
    </symbol>
    <symbol id="zc__svg--arrowup" viewBox="0 0 10.70711 6.06066">
        <polyline points="0.354 5.707 5.354 0.707 10.354 5.707"></polyline>
    </symbol>
    <symbol id="zc__svg--backward" viewBox="0 0 12 12" width="100%" height="100%">
        <polygon points="6.6,10.3 2.9,6.5 6.6,2.7 7.4,3.4 4.3,6.5 7.4,9.6"></polygon>
    </symbol>
    <symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--buttonarrow">
        <polygon points="3.5,6.5 4.5,5.5 8,9 11.5,5.5 12.5,6.5 8,11"></polygon>
    </symbol>
    <symbol viewBox="0 0 14 14" width="100%" height="100%" id="zc__svg--calendaricon">
        <rect x="-22.5" y="3.5" width="13" height="10"></rect>
        <path d="M-10,4v9h-12V4H-10 M-9,3h-14v11h14V3L-9,3z"></path>
        <rect x="-20.6" y="1.4" width="1.2" height="3.2"></rect>
        <path d="M-19.8,1.8v2.5h-0.5V1.8H-19.8 M-19,1h-2v4h2V1L-19,1z"></path>
        <rect x="-20.6" y="7.4" width="1.2" height="1.2"></rect>
        <path d="M-19.8,7.8v0.5h-0.5V7.8H-19.8 M-19,7h-2v2h2V7L-19,7z"></path>
        <rect x="-16.6" y="1.4" width="1.2" height="3.2"></rect>
        <path d="M-15.8,1.8v2.5h-0.5V1.8H-15.8 M-15,1h-2v4h2V1L-15,1z"></path>
        <rect x="-12.6" y="1.4" width="1.2" height="3.2"></rect>
        <path d="M-11.8,1.8v2.5h-0.5V1.8H-11.8 M-11,1h-2v4h2V1L-11,1z"></path>
        <rect x="-16.6" y="7.4" width="1.2" height="1.2"></rect>
        <path d="M-15.8,7.8v0.5h-0.5V7.8H-15.8 M-15,7h-2v2h2V7L-15,7z"></path>
        <rect x="-12.6" y="7.4" width="1.2" height="1.2"></rect>
        <path d="M-11.8,7.8v0.5h-0.5V7.8H-11.8 M-11,7h-2v2h2V7L-11,7z"></path>
        <rect x="-20.6" y="10.4" width="1.2" height="1.2"></rect>
        <path d="M-19.8,10.8v0.5h-0.5v-0.5H-19.8 M-19,10h-2v2h2V10L-19,10z"></path>
        <rect x="-16.6" y="10.4" width="1.2" height="1.2"></rect>
        <path d="M-15.8,10.8v0.5h-0.5v-0.5H-15.8 M-15,10h-2v2h2V10L-15,10z"></path>
        <rect x="-12.6" y="10.4" width="1.2" height="1.2"></rect>
        <path d="M-11.8,10.8v0.5h-0.5v-0.5H-11.8 M-11,10h-2v2h2V10L-11,10z"></path>
        <path d="M4,3c0.6,0,1-0.4,1-1V1H3v1C3,2.6,3.4,3,4,3z"></path>
        <rect x="2" y="7" width="2" height="2"></rect>
        <rect x="2" y="10" width="2" height="2"></rect>
        <rect x="6" y="7" width="2" height="2"></rect>
        <rect x="6" y="10" width="2" height="2"></rect>
        <rect x="10" y="7" width="2" height="2"></rect>
        <rect x="10" y="10" width="2" height="2"></rect>
        <path
            d="M12.8,2c0,1-0.8,1.8-1.8,1.8S9.2,3,9.2,2H5.8C5.8,3,5,3.8,4,3.8S2.2,3,2.2,2H0v3v9h14V5V2H12.8z M13,13H1V6h12V13z"></path>
        <path d="M11,3c0.6,0,1-0.4,1-1V1h-2v1C10,2.6,10.4,3,11,3z"></path>
    </symbol>
    <symbol viewBox="0 0 21.9 21.9" width="100%" height="100%" id="zc__svg--clear">
        <path
            d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0 c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4 s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3 s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7 s-0.1-0.5-0.3-0.7L14.1,11.3z"></path>
    </symbol>
    <symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--close">
        <rect x="1.5" y="7.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -3.3137 8)" class="st0" width="13"
              height="1.1"></rect>
        <rect x="1.5" y="7.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 8 -3.3137)" class="st0" width="13"
              height="1.1"></rect>
    </symbol>
    <symbol viewBox="0 0 600 598" width="100%" height="100%" id="zc__svg--zcolorpicker-advancedpicker">
        <path
            d="M299.7-0.2C128.3-0.2-7,134,0.2,305.2C7.4,476.9,138,577.3,259.7,595.9c88.2,13.4,107.8-45.1,87.3-67.3 c-35.5-38.3-22.6-68.6-7.3-82.5c17.4-15.7,50.3-17.3,77.3-13.8c65.5,8.5,175-40,182.2-144.8C611,116.5,471.1-0.2,299.7-0.2z M118.1,299.7c-27.7,0-50.1-22.4-50.1-50.1c0-27.7,22.4-50.1,50.1-50.1c27.7,0,50.1,22.4,50.1,50.1 C168.2,277.3,145.8,299.7,118.1,299.7z M217.6,166.6c-27.7,0-50.1-22.4-50.1-50.1c0-27.7,22.4-50.1,50.1-50.1 c27.7,0,50.1,22.4,50.1,50.1C267.7,144.1,245.2,166.6,217.6,166.6z M384.9,166.9c-27.7,0-50.1-22.4-50.1-50.1 c0-27.7,22.4-50.1,50.1-50.1c27.7,0,50.1,22.4,50.1,50.1C435,144.4,412.6,166.9,384.9,166.9z M485.2,299.9 c-27.7,0-50.1-22.4-50.1-50.1c0-27.7,22.4-50.1,50.1-50.1c27.7,0,50.1,22.4,50.1,50.1C535.2,277.5,512.8,299.9,485.2,299.9z"></path>
    </symbol>
    <symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--zcolorpicker-nocolor">
        <path
            d="M8,0C3.6,0,0,3.6,0,8s3.6,8,8,8s8-3.6,8-8S12.4,0,8,0z M8,1c1.8,0,3.3,0.7,4.6,1.7l-9.9,9.9C1.7,11.3,1,9.8,1,8 C1,4.1,4.1,1,8,1z M8,15c-1.8,0-3.3-0.7-4.6-1.7l9.9-9.9C14.3,4.7,15,6.2,15,8C15,11.9,11.9,15,8,15z"></path>
    </symbol>
    <symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--confirm">
        <g>
            <path
                d="M24,0C10.7,0,0,10.7,0,24s10.7,24,24,24s24-10.7,24-24C48,10.8,37.3,0,24,0z M24,44.1c-11,0-20-9-20-20s9-20,20-20s20,9,20,20C44,35.2,35,44.1,24,44.1z"></path>
            <g>
                <path
                    d="M22.8,31.9c-1.7,0-2.6,0.9-2.6,2.7c0,0.9,0.2,1.5,0.7,2c0.4,0.5,1.1,0.7,1.9,0.7c0.8,0,1.5-0.2,1.9-0.7c0.5-0.5,0.7-1.1,0.7-2c0-0.8-0.2-1.5-0.7-2C24.3,32.2,23.6,31.9,22.8,31.9z"></path>
                <path
                    d="M29.3,12.4c-1.3-1.1-3.2-1.7-5.5-1.7s-4.4,0.5-6.5,1.4c-1.1,0.5-0.6,1.7-0.6,1.7l0.5,1c0,0,0.5,0.9,1.7,0.5l0,0c0.5-0.2,1-0.4,1.5-0.6c0.9-0.3,2-0.5,3.1-0.5c1.2,0,2.2,0.3,2.8,0.8c0.7,0.5,1,1.3,1,2.3c0,0.8-0.2,1.6-0.6,2.2c-0.4,0.6-1.3,1.5-2.7,2.6c-1.2,0.9-2,1.8-2.5,2.7c-0.5,0.9-0.7,1.9-0.7,3.2c0,0.9,1.1,1.1,1.1,1.1h0.7c0,0,1.4,0,1.6-1.2l0,0c0-0.8,0.2-1.4,0.5-1.8c0.4-0.6,1.1-1.3,2.2-2.1c1.3-1,2.2-1.8,2.7-2.4s0.9-1.3,1.2-2s0.4-1.5,0.4-2.3C31.4,15.1,30.7,13.5,29.3,12.4z"></path>
            </g>
        </g>
    </symbol>
    <symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--decrement">
        <path class="cls-1" d="M11.76,13L24,26.521,37.147,13,41,16.9,24,35,7,16.9Z"></path>
    </symbol>
    <symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--downarrow">
        <polygon points="3.5,6.5 4.5,5.5 8,9 11.5,5.5 12.5,6.5 8,11"></polygon>
    </symbol>
    <symbol viewBox="0 0 17 16" id="zc__svg--download">
        <path class="zpreview__fill"
              d="M17,16H0v-3h1v2h15v-2h1V16z M12.6,6.6L9,10.3V1H8v9.3L4.4,6.6L3.6,7.4l4.9,4.9l4.9-4.9L12.6,6.6z"></path>
    </symbol>
    <symbol viewBox="-3 -3 22 22" width="100%" height="100%" id="zc__svg--downscroller">
        <path d="M16,4l-8,8L0,4H16z"></path>
    </symbol>
    <symbol viewBox="0 0 17 16" id="zc__svg--edit">
        <path class="zpreview__fill"
              d="M13,0L1,12v4h3.8L17,4L13,0z M15.6,4l-2.5,2.4l-2.5-2.6L13,1.4L15.6,4z M4.3,15H2v-2.6l7.8-7.8l2.6,2.6L4.3,15z"></path>
    </symbol>
    <symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--error">
        <path
            d="M41.2,7.2C31.9-2.2,16.7-2.5,7.3,6.9c-9.5,9.3-9.7,24.5-0.4,33.9c9.3,9.5,24.5,9.7,33.9,0.4C50.3,31.9,50.4,16.8,41.2,7.2z M37.9,38.2C30,46,17.4,45.9,9.7,38S2.1,17.5,10,9.8S30.5,2.1,38.2,10C45.9,17.9,45.8,30.5,37.9,38.2z"></path>
        <path
            d="M31.7,17.5l-1.1-1.1c-0.8-0.8-1.7-0.1-2,0.1L24,21l-4.6-4.7c-0.3-0.3-1.1-0.8-1.9,0l-1.1,1.1c-0.8,0.8-0.1,1.7,0.1,2L21,24l-4.7,4.6c-0.9,0.9-0.3,1.6-0.1,1.8l1.3,1.3c0.2,0.2,0.9,0.8,1.8-0.1L24,27l4.6,4.7c0.9,0.9,1.6,0.3,1.8,0.1l1.3-1.3c0.2-0.2,0.8-0.9-0.1-1.8L27,24l4.7-4.6C32,19.1,32.5,18.4,31.7,17.5z"></path>
    </symbol>
    <symbol viewBox="0 0 12 12" id="zc__svg--fastbackward" width="100%" height="100%">
        <polygon points="5.6,10.3 1.9,6.5 5.6,2.6 6.3,3.4 3.3,6.5 6.4,9.6"></polygon>
        <polygon points="9.6,10.3 5.9,6.5 9.6,2.6 10.3,3.4 7.3,6.5 10.4,9.6"></polygon>
    </symbol>
    <symbol viewBox="1 0 12 12" id="zc__svg--fastforward" width="100%" height="100%">
        <polygon points="7.4,10.3 6.7,9.6 9.7,6.5 6.6,3.4 7.4,2.7 11.1,6.5"></polygon>
        <polygon points="3.4,10.3 2.7,9.6 5.7,6.5 2.6,3.4 3.4,2.7 7.1,6.5"></polygon>
    </symbol>
    <symbol viewBox="0 0 19 10" id="zc__svg--filmstrip">
        <path class="zpreview__fill"
              d="M4,4v5H1V4H4 M5,3H0v7h5V3L5,3z M0,0h19v1H0V0z M18,4v5h-3V4H18 M19,3h-5v7h5V3L19,3z M11,4v5H8V4H11 M12,3H7v7h5V3L12,3z"></path>
    </symbol>
    <symbol viewBox="1 0 12 12" id="zc__svg--forward" width="100%" height="100%">
        <polygon points="4.4,10.3 3.7,9.6 6.7,6.5 3.6,3.4 4.4,2.7 8.1,6.5"></polygon>
    </symbol>
    <symbol viewBox="0 0 17 16" id="zc__svg--fullscreen">
        <path class="zpreview__fill"
              d="M6.9,10.9L2.7,15H5v1H1v-4h1v2.3l4.1-4.1C6.3,10,6.7,10,6.9,10.1S7,10.7,6.9,10.9z M15,12v2.3l-4.1-4.2c-0.2-0.1-0.6-0.1-0.8,0s-0.1,0.6,0,0.8l4.1,4.1H12v1h4v-4H15z M12,1v1h2.3l-4.2,4.1c-0.1,0.2-0.1,0.6,0,0.8C10.2,7,10.4,7,10.5,7s0.3,0,0.4-0.1L15,2.7V5h1V1H12z M6.9,6.1L2.7,2H5V1H1v4h1V2.7l4.1,4.1C6.2,7,6.4,7,6.5,7s0.3,0,0.4-0.1C7,6.7,7,6.3,6.9,6.1z"></path>
    </symbol>
    <symbol viewBox="0 0 5 10" width="100%" height="100%" id="zc__svg--grippy">
        <rect width="2" height="2"></rect>
        <rect x="3" width="2" height="2"></rect>
        <rect y="4" width="2" height="2"></rect>
        <rect x="3" y="4" width="2" height="2"></rect>
        <rect x="3" y="8" width="2" height="2"></rect>
        <rect y="8" width="2" height="2"></rect>
    </symbol>
    <symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--help">
        <g>
            <path
                d="M24,0C10.7,0,0,10.7,0,24s10.7,24,24,24s24-10.7,24-24C48,10.8,37.3,0,24,0z M24,44.1c-11,0-20-9-20-20s9-20,20-20s20,9,20,20C44,35.2,35,44.1,24,44.1z"></path>
            <g>
                <path
                    d="M22.8,31.9c-1.7,0-2.6,0.9-2.6,2.7c0,0.9,0.2,1.5,0.7,2c0.4,0.5,1.1,0.7,1.9,0.7c0.8,0,1.5-0.2,1.9-0.7c0.5-0.5,0.7-1.1,0.7-2c0-0.8-0.2-1.5-0.7-2C24.3,32.2,23.6,31.9,22.8,31.9z"></path>
                <path
                    d="M29.3,12.4c-1.3-1.1-3.2-1.7-5.5-1.7s-4.4,0.5-6.5,1.4c-1.1,0.5-0.6,1.7-0.6,1.7l0.5,1c0,0,0.5,0.9,1.7,0.5l0,0c0.5-0.2,1-0.4,1.5-0.6c0.9-0.3,2-0.5,3.1-0.5c1.2,0,2.2,0.3,2.8,0.8c0.7,0.5,1,1.3,1,2.3c0,0.8-0.2,1.6-0.6,2.2c-0.4,0.6-1.3,1.5-2.7,2.6c-1.2,0.9-2,1.8-2.5,2.7c-0.5,0.9-0.7,1.9-0.7,3.2c0,0.9,1.1,1.1,1.1,1.1h0.7c0,0,1.4,0,1.6-1.2l0,0c0-0.8,0.2-1.4,0.5-1.8c0.4-0.6,1.1-1.3,2.2-2.1c1.3-1,2.2-1.8,2.7-2.4s0.9-1.3,1.2-2s0.4-1.5,0.4-2.3C31.4,15.1,30.7,13.5,29.3,12.4z"></path>
            </g>
        </g>
    </symbol>
    <symbol viewBox="1 2 9 9" width="100%" height="100%" id="zc__svg--horizontaldecrement">
        <polygon points="6.6,10.3 2.9,6.5 6.6,2.7 7.4,3.4 4.3,6.5 7.4,9.6"></polygon>
    </symbol>
    <symbol viewBox="1 2 9 9" width="100%" height="100%" id="zc__svg--horizontalincrement">
        <polygon points="4.4,10.3 3.7,9.6 6.7,6.5 3.6,3.4 4.4,2.7 8.1,6.5"></polygon>
    </symbol>
    <symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--increment">
        <path class="cls-1" d="M6,32l5,4L24,22,38,36l4-4L24,13Z"></path>
    </symbol>
    <symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--info">
        <g>
            <g>
                <path
                    d="M23.9,17.4c1.5,0,2.5-1.1,2.4-2.3c0-1.3-0.9-2.4-2.3-2.4s-2.4,1.1-2.4,2.4C21.6,16.3,22.6,17.4,23.9,17.4z"></path>
                <path
                    d="M26.2,35.5V21.8c0-1.2-1.4-1.3-1.8-1.3h-0.7c0,0-1.7,0-1.7,1.1v14.3c0,0.3,0.2,0.9,1.3,0.9h1.6C25.3,36.7,26.2,36.5,26.2,35.5z"></path>
            </g>
            <path
                d="M24,0C10.7,0,0,10.7,0,24s10.7,24,24,24s24-10.7,24-24S37.3,0,24,0z M24,44C13,44,4,35,4,24S13,4,24,4s20,9,20,20S35,44,24,44z"></path>
        </g>
    </symbol>
    <symbol id="zc__svg--lines" viewBox="0 0 12 12" width="100%" height="100%">
        <line x1="11" y1="1" x2="1" y2="11"></line>
        <line x1="11" y1="5" x2="5" y2="11"></line>
        <line x1="11" y1="9" x2="9" y2="11"></line>
    </symbol>
    <symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--maximize">
        <g transform="translate(0,-1036.3622)">
            <g>
                <path d="M13,1040.4v8H3v-8H13 M14,1039.4H2v10h12V1039.4L14,1039.4z"></path>
            </g>
        </g>
    </symbol>
    <symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--minimize">
        <rect x="2" y="12" width="12" height="1"></rect>
    </symbol>
    <symbol viewBox="0 0 12 10" width="100%" height="100%" id="zc__svg--minus">
        <rect x="2" y="5" width="9" height="1"></rect>
    </symbol>
    <symbol viewBox="0 0 4 16" id="zc__svg--more">
        <path class="zpreview__fill"
              d="M2,1c0.6,0,1,0.4,1,1S2.6,3,2,3S1,2.6,1,2S1.4,1,2,1 M2,0C0.9,0,0,0.9,0,2s0.9,2,2,2s2-0.9,2-2S3.1,0,2,0L2,0z"></path>
        <path class="zpreview__fill"
              d="M2,13c0.6,0,1,0.4,1,1s-0.4,1-1,1s-1-0.4-1-1S1.4,13,2,13 M2,12c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S3.1,12,2,12L2,12z"></path>
        <path class="zpreview__fill"
              d="M2,7c0.6,0,1,0.4,1,1S2.6,9,2,9S1,8.6,1,8S1.4,7,2,7 M2,6C0.9,6,0,6.9,0,8s0.9,2,2,2s2-0.9,2-2S3.1,6,2,6L2,6z"></path>
    </symbol>
    <symbol viewBox="0 0 12 20" id="zc__svg--navigationnext">
        <path class="zpreview__fill"
              d="M1.5,19.5c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4L9,10L0.8,2.2c-0.4-0.4-0.4-1,0-1.4c0.4-0.4,1-0.4,1.4,0l9,8.5c0.2,0.2,0.3,0.5,0.3,0.7c0,0.3-0.1,0.5-0.3,0.7l-9,8.5C2,19.4,1.7,19.5,1.5,19.5z"></path>
    </symbol>
    <symbol viewBox="0 0 12 20" id="zc__svg--navigationprevious">
        <path class="zpreview__fill"
              d="M9.8,19.2l-9-8.5c-0.2-0.2-0.3-0.4-0.3-0.7c0-0.2,0.1-0.5,0.3-0.7l9-8.5c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4L3,10l8.2,7.8c0.4,0.4,0.4,1,0,1.4c-0.2,0.2-0.4,0.3-0.7,0.3C10.3,19.5,10,19.4,9.8,19.2z"></path>
    </symbol>
    <symbol viewBox="0 0 25 25" id="zc__svg--notfound">
        <path class="zpreview__fill"
              d="M12.5,1.8c5.9,0,10.7,4.8,10.7,10.7s-4.8,10.7-10.7,10.7S1.8,18.4,1.8,12.5S6.6,1.8,12.5,1.8 M12.5,0C5.6,0,0,5.6,0,12.5S5.6,25,12.5,25S25,19.4,25,12.5S19.4,0,12.5,0L12.5,0z"></path>
        <line class="zpreview__stroke" stroke-width="2" x1="8" y1="8" x2="17" y2="17"></line>
        <line class="zpreview__stroke" stroke-width="2" x1="17" y1="8" x2="8" y2="17"></line>
    </symbol>
    <symbol viewBox="0 0 12 12" width="100%" height="100%" id="zc__svg--plus">
        <polygon points="11,6 7,6 7,2 6,2 6,6 2,6 2,7 6,7 6,11 7,11 7,7 11,7 "></polygon>
    </symbol>
    <symbol viewBox="0 0 16 16" id="zc__svg--print">
        <path class="zpreview__fill"
              d="M16,3h-3.1L12,0H4L3.1,3H0v9h2.8L2,16h12l-0.8-4H16V3z M4.7,1h6.5l0.6,2H4.1L4.7,1z M3.2,15l1.1-6h7.3l1.1,6 H3.2z M15,11h-1.9l-0.6-3h-9l-0.6,3H1V4h14V11z"></path>
        <rect x="13" y="5" class="zpreview__fill" width="1" height="1"></rect>
    </symbol>
    <symbol viewBox="0 0 16 16" width="100%" height="100%" id="zc__svg--restore">
        <g transform="translate(0,-1036.3622)">
            <path d="M2,1041.4v8h10v-8H2z M11,1048.4H3v-6h8V1048.4z"></path>
        </g>
        <g transform="translate(0,-1036.3622)">
            <path d="M4,1039.4v3h1v-2h8v6h-2v1h3v-8H4z"></path>
        </g>
    </symbol>
    <symbol viewBox="0 0 5 12" id="zc__svg--rightarrow">
        <polygon points="4.4,10.3 3.7,9.6 6.7,6.5 3.6,3.4 4.4,2.7 8.1,6.5"></polygon>
    </symbol>
    <symbol viewBox="-7 -7 64 64" width="100%" height="100%" id="zc__svg--round">
        <circle cx="24.5" cy="24.5" r="15.5"></circle>
    </symbol>
    <symbol viewBox="0 0 15 15" width="100%" height="100%" id="zc__svg--search">
        <g id="Ellipse_50" data-name="Ellipse 50" fill="none" stroke="gray" stroke-width="1.5">
            <circle cx="6" cy="6" r="6" stroke="none"></circle>
            <circle cx="6" cy="6" r="5.25" fill="none"></circle>
        </g>
        <path id="Rectangle_270" data-name="Rectangle 270"
              d="M0,0H5A1,1,0,0,1,6,1V1A1,1,0,0,1,5,2H0A0,0,0,0,1,0,2V0A0,0,0,0,1,0,0Z"
              transform="translate(10.757 9.343) rotate(45)" fill="gray"></path>
    </symbol>
    <symbol viewBox="0 0 16 16" id="zc__svg--share">
        <path class="zpreview__fill"
              d="M13.5,0.8c0.9,0,1.7,0.8,1.7,1.7s-0.8,1.7-1.7,1.7s-1.7-0.8-1.7-1.7S12.6,0.8,13.5,0.8 M13.5,0C12.1,0,11,1.1,11,2.5S12.1,5,13.5,5S16,3.9,16,2.5S14.9,0,13.5,0L13.5,0z"></path>
        <path class="zpreview__fill"
              d="M2.5,6.3c0.9,0,1.7,0.8,1.7,1.7S3.4,9.7,2.5,9.7S0.8,8.9,0.8,8S1.6,6.3,2.5,6.3 M2.5,5.5C1.1,5.5,0,6.6,0,8s1.1,2.5,2.5,2.5S5,9.4,5,8S3.9,5.5,2.5,5.5L2.5,5.5z"></path>
        <path class="zpreview__fill"
              d="M13.5,11.8c0.9,0,1.7,0.8,1.7,1.7s-0.8,1.7-1.7,1.7s-1.7-0.8-1.7-1.7S12.6,11.8,13.5,11.8 M13.5,11c-1.4,0-2.5,1.1-2.5,2.5s1.1,2.5,2.5,2.5s2.5-1.1,2.5-2.5S14.9,11,13.5,11L13.5,11z"></path>
        <rect x="7.5" y="7" transform="matrix(0.4472 -0.8944 0.8944 0.4472 -5.2373 13.1252)" class="zpreview__fill"
              width="1" height="7.6"></rect>
        <rect x="4.2" y="4.8" transform="matrix(0.8944 -0.4472 0.4472 0.8944 -1.5256 4.1374)" class="zpreview__fill"
              width="7.6" height="1"></rect>
    </symbol>
    <symbol viewBox="0 0 18 17" id="zc__svg--slideshow">
        <path class="zpreview__fill"
              d="M19,2V1h-9V0H9v1H0v1h1v11H0v1h9v0.7l-4,3.7L5.6,19L9,15.8V18h1v-2.2l3.4,3.2l0.5-0.6l-4-3.7V14h9v-1h-1V2H19zM17,13H2V2h15V13z M8,5v5l4.5-2.5L8,5z"></path>
    </symbol>
    <symbol viewBox="0 0 9 16" id="zc__svg--slideshow__next">
        <polyline class="zpreview__fill" points="1,1 8,8 1,15"></polyline>
    </symbol>
    <symbol viewBox="0 0 10 14" width="100%" height="100%" id="zc__svg--slideshow__pause">
        <path class="zpreview__fill"
              d="M3,1v12H1V1H3 M3,0H1C0.4,0,0,0.4,0,1v12c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V1C4,0.4,3.6,0,3,0L3,0z"></path>
        <path class="zpreview__fill"
              d="M9,1v12H7V1H9 M9,0H7C6.4,0,6,0.4,6,1v12c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V1C10,0.4,9.6,0,9,0L9,0z"></path>
    </symbol>
    <symbol viewBox="0 0 12 14" id="zc__svg--slideshow__play">
        <path fill="white"
              d="M1,1.2L11,7L1,12.8L1,1.2 M1,0.2c-0.5,0-1,0.4-1,1v11.5c0,0.6,0.5,1,1,1c0.2,0,0.3,0,0.5-0.1l10-5.8c0.7-0.4,0.7-1.3,0-1.7l-10-5.8C1.3,0.3,1.2,0.2,1,0.2L1,0.2z"></path>
    </symbol>
    <symbol viewBox="0 0 9 16" id="zc__svg--slideshow__previous">
        <polyline class="zpreview__fill" points="8,1 1,8 8,15"></polyline>
    </symbol>
    <symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--success">
        <g>
            <path
                d="M41.2,7.2C31.9-2.3,16.7-2.5,7.3,6.8c-9.5,9.3-9.7,24.5-0.4,33.9c9.3,9.5,24.5,9.7,33.9,0.4C50.3,31.9,50.4,16.7,41.2,7.2z M37.9,38.2c-7.9,7.7-20.5,7.6-28.2-0.3S2.1,17.4,10,9.7S30.5,2.1,38.2,10C45.9,17.8,45.8,30.5,37.9,38.2z"></path>
            <path
                d="M36,19.3L23.1,32.2c-1.1,1.1-2.9,1.1-4,0l-1-1l-4.5-4.6c-0.2-0.2-1-1.1-0.1-2l1.1-1.1c0.8-0.8,1.6-0.3,1.9,0l4.6,4.7l12-11.8c0.2-0.2,1.1-1,2-0.1l1.1,1.1C36.8,18.2,36.3,18.9,36,19.3z"></path>
        </g>
    </symbol>
    <symbol viewBox="-2 -2 20 20" width="100%" height="100%" id="zc__svg--tick">
        <polygon points="14.6,2.4 4.9,12.1 1.2,8.5 0.4,9.3 4.9,13.8 15.4,3.2 "></polygon>
    </symbol>
    <symbol viewBox="0 0 16 16" id="zc__svg--time" width="100%" height="100%">
        <path
            d="M8,0.6C3.9,0.6,0.6,3.9,0.6,8s3.3,7.4,7.4,7.4s7.4-3.3,7.4-7.4S12.1,0.6,8,0.6z M8,13.9c-3.3,0-5.9-2.6-5.9-5.9c0-3.3,2.6-5.9,5.9-5.9c3.3,0,5.9,2.6,5.9,5.9C13.9,11.3,11.3,13.9,8,13.9z"></path>
        <polygon points="8.5,7.5 8.5,4.5 6.5,4.5 6.5,9.5 11.5,9.5 11.5,7.5"></polygon>
    </symbol>
    <symbol viewBox="0 0 25 25" id="zc__svg--unableload">
        <path class="zpreview__fill"
              d="M12.5,2c0.7,0,1.5,0.4,1.8,1.1l8.5,15c0.7,1.3-0.3,3-1.8,3H4.1c-1.6,0-2.6-1.7-1.8-3l8.4-15C11.1,2.3,11.8,2,12.5,2 M12.5,0.1c-1.4,0-2.7,0.7-3.4,2l-8.4,15c-0.7,1.2-0.7,2.6,0,3.9c0.7,1.2,2,2,3.5,2h16.8c1.4,0,2.7-0.7,3.4-1.9c0.7-1.2,0.7-2.6,0.1-3.8l-8.5-15C15.3,0.9,13.9,0.1,12.5,0.1L12.5,0.1z"></path>
        <path class="zpreview__fill"
              d="M13,14h-1l-0.8-6.5C11.1,6.7,11.7,6,12.5,6h0c0.8,0,1.4,0.7,1.3,1.5L13,14z"></path>
        <circle class="zpreview__fill" cx="12.5" cy="17.5" r="1.5"></circle>
    </symbol>
    <symbol viewBox="0 0 17 16" id="zc__svg--upload">
        <path class="zpreview__fill"
              d="M13.8,4.1C13.2,1.7,11.1,0,8.5,0S3.8,1.7,3.2,4.1C1.4,4.5,0,6.1,0,8c0,1.2,0.5,2.3,1.4,3C2.1,11.6,3,12,4,12h4v4h1v-4h4c1,0,1.9-0.4,2.6-1c0.8-0.7,1.4-1.8,1.4-3C17,6.1,15.6,4.5,13.8,4.1z M13,11h-2.6H9V5.7l2.6,2.7l0.8-0.8L8.5,3.8L4.6,7.6l0.8,0.8L8,5.7V11H6.6H4c-1.7,0-3-1.4-3-3c0-1.3,0.8-2.4,2-2.8C3.3,5.1,3.7,5,4,5c0-0.3,0.1-0.7,0.2-1c0.6-1.8,2.3-3,4.2-3c1.9,0,3.6,1.3,4.2,3c0.1,0.3,0.2,0.6,0.2,1c0.3,0,0.7,0.1,1,0.2c1.2,0.4,2,1.5,2,2.8C16,9.6,14.7,11,13,11z"></path>
    </symbol>
    <symbol viewBox="-3 -3 22 22" width="100%" height="100%" id="zc__svg--upscroller">
        <path d="M0,12l8-8l8,8H0z"></path>
    </symbol>
    <symbol viewBox="0 0 48 48" width="100%" height="100%" id="zc__svg--warning">
        <g>
            <path
                d="M47.3,36.6L27.7,2.5c-0.9-1.4-2.4-2.2-3.9-2.1c-1.6,0-2.9,0.9-3.7,2.2L0.7,36.5c-0.9,1.3-1,3-0.2,4.4c0.8,1.5,2.3,2.4,4,2.4h39c1.6,0,3.1-0.8,3.9-2.2C48.2,39.7,48.2,38,47.3,36.6z M43.9,39.2c-0.1,0.1-0.2,0.2-0.4,0.2h-39c-0.3,0-0.4-0.2-0.5-0.3c-0.1-0.2,0-0.3,0-0.4L23.5,4.6c0,0,0.1-0.2,0.3-0.2c0,0,0,0,0,0c0.1,0,0.3,0,0.4,0.2l19.6,34C44,38.8,44,39,43.9,39.2z"></path>
        </g>
        <path
            d="M24.1,28.4L24.1,28.4c-0.8,0-1.3-0.4-1.4-1l-1-10c-0.1-1.1,1-2,2.4-2l0,0c1.4,0,2.5,0.9,2.4,2l-1,10C25.4,27.9,24.9,28.4,24.1,28.4z"></path>
        <circle cx="24" cy="33.4" r="2"></circle>
    </symbol>
</svg>
<div class="layui-layer layui-layer-dialog layui-layer-border layui-layer-msg" id="layui-layer1" type="dialog" times="1"
     showtime="3000" contype="string" style="z-index: 19891015; width: 360px; top: 436.5px; left: 501.5px;">
    <div id="" class="layui-layer-content layui-layer-padding"><i class="layui-layer-ico layui-layer-ico4"></i>1401851
        Phiên sắp mở cửa, bây giờ đóng cửa...
    </div>
    <span class="layui-layer-setwin"></span></div>
<div class="layui-layer-move"></div>
</body>
</html>
