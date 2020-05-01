<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#2196f3">
    <title><{$webconfig.webtitle.val}></title>
    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/css/framework7.ios.min.css">
    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/css/framework7-icons.css">
    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/css/style.css">


    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/css/animate.css">
    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/css/scrollmenu.css">

    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/wap2/css/style.css">


    <!--vue_alert_start-->
    <link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/wu-ui.css"/>
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/vuealert/js/vue.min.js"></script>
    <script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/public/vuealert/js/wu-ui.js"></script>

    <link rel="stylesheet" href="<{VIEW_ROOTPATH}>/assets/alert/css/alert.css">
</head>
<style>
    img {
        display: initial;
        width: initial;
        border: 0;
    }

    .ios .navbar {
        background-color: rgba(255, 255, 255, 0.11);
    }

    .coininfodivlay {
        /*
        width:90%;
        background: #5186d6;
        margin:2%;
        border-radius: 7px;
        */

        margin: .6em 0 1em 0;
        background: rgba(255, 255, 255, 0.11);

        padding: 1rem 3%;

        position: unset!important;
    }

    .coininfoicodiv {
        width: 2rem;
        height: 2rem;
        border-radius: 6px;
        padding: .2rem;
        display: inline-block;
    }

    .coininfotxtdiv {
        width: 66%;
        line-height: 1rem;
        display: inline-block;
        vertical-align: top;
    }

    .coininfotxt1 {
        width: 100%;
        color: #fff;
        font-size: .9rem;
    }

    .coininfotxt2 {
        color: #fff;
        font-size: .7rem;
        overflow: hidden;
        margin-top: 0.2rem;
    }

    .coininfotxt3 {
        width: 97%;
        text-align: right;
        color: #fff;
        font-size: 1.2rem;
    }

    .coininfotxt4 {
        width: 76%;
        margin-left: 12%;
        text-align: center;
        color: #fff;
        font-size: 1rem;
        word-break: break-all;
    }

    .container {
        padding: 0;
    }

    .user-menu li a {
        display: block;
        padding: 10px 20px;
        background-color: rgba(255, 255, 255, 0.11);
        border-radius: 0;
        text-align: center;
    }

    .user-menu li {
        margin-bottom: 0;
        width: 50%;
        float: left;
        border: 0.5px solid rgba(40, 51, 80, 0);
    }

    .user-menu li a img {
        width: 1.7rem;
        height: 1.7rem;
    }

    .user-menu li a:before {
        float: inherit;
    }

    .coinnavspan {
        width: 32.5%;
        text-align: center;
        display: inline-block;
        padding: 5px 0;
        background: rgba(255, 255, 255, 0.06);
    }

    canvas {
        width: 50%;
        border: 12px solid rgb(255, 255, 255);
    }

    .ios .login-box .list .item-content {
        border: 1px solid #c0c0c0;
        border-radius: 100px;
        margin-top: 1em;
        padding: 0 10px;
    }
	.page-content{
		background: #2C2C2E;
	}
	.coininfodivlay{
		background: #2C2C2C !important;
		margin-bottom: 10px!important;
		border-top:unset!important;
	}
	.ios .navbar{
		background: #232323!important;
	}
	.ios .block{
		margin: 5px 0 35px 0;
		background: #2c2c2c;
	}
	.ios .login-box .list .item-content{
		border: 1px solid #565656;
	}
    .ios .button.button-fill, .ios .button.button-fill-ios {
        background-color: #26A07B !important;
    }
    .coininfoicodiv{
        border-radius: 30px;
    }
    .coininfotxtdiv{
        margin-top: 5px;
    }
    ::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: #616467 !important;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: #616467 !important;
    }

    :-ms-input-placeholder {
        /* IE 10+ */
        color: #616467 !important;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        color: #616467 !important;
    }
    body{
        font-family:PingFangSC-Regular,PingFang SC;
    }
</style>

<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
            <div class="page-content" style="padding-top:40px;position: unset!important;">
                <div class="coininfodivlay" style="height: 135px;position: unset!important;">
                    <div style="width:100%;">
                        <div>
                            <!--img style="width: 30px;position: absolute;left: 40%;top: 70px;" src="<{VIEW_ROOTPATH}>/assets/wap/images/tether_200_200.png" /-->
                            <div style="font-size: 18px;color: #5f5f5f;display: block;text-align: center;height: 30px;margin-top: 30px;"><{PFCOINNAME}></div>
                            <div style="color:#BC9568;font-size: 28px;text-align: center;display: block;"><{number_format($myuserinfo["money"]+$myuserinfo["money2"]+$myuserinfo["money3"], 4, '.', '')}></div>
                        </div>
                    </div>
                </div>
                <div class="navbar" style="position: fixed;background: #2C2C2E!important;">
                    <div class="navbar-inner">
                        <div class="left" style="font-weight: bold;color: #fff;">
                            <a href="javascript:history.go(-1);" class="link icon-only external color-white">
                                <i class="icon icon-back"></i>
                            </a>
                        </div>
                        <span style="text-align: center;width: 100%;margin-left: 20px;">
                            提币
                        </span>
                        <div class="title text-color-white"></div>
                        <div class="right">
                            <a class="external" href="<{WSURLSHOW('appuser','withdrawal')}>" style="color: #727679;padding-right: 0.7rem;">
                                提币记录
                            </a>
                        </div>
                    </div>
                </div>
                <div style="padding: 0 3%;background: #2C2C2E;height: 370px;padding-top: 30px;">
                    <div style="color:#727679;font-size: 14px;padding-bottom: 10px;">
                        <p style="display: inline-block;">提币数量</p>
                        <p style="display: inline-block;float: right;">提币手续费 <{$webconfig.presentationfee.val}> USDT</p>
                        <input type="number" name="money" placeholder="请输入提币数量" style="color:#fff;width:100%;padding-bottom: 10px;margin-top: 20px;border-bottom: 2px solid #2F2F31">
                        <p style="position: absolute;top: 252px;right: 3%;font-size: 16px;">USDT</p>
                    </div>
                    <div style="color:#727679;font-size: 14px;padding-bottom: 10px;padding-top: 20px;">
                        <p style="display: inline-block;">提币地址</p>
                        <input type="text" name="money" placeholder="请输入提币地址" style="color:#fff;width:100%;padding-bottom: 10px;margin-top: 20px;border-bottom: 2px solid #2F2F31">
                    </div>
                    <div>
                        <button id="submits" style="font-size:16px;cursor:pointer;background: #BC9568;border:unset;color:#fff;height: 45px;width: 95%;margin: 0 auto;position: fixed;bottom: 14px;border-radius: 5px;">提交</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/clipboard.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>
<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.qrcode.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/bscroll.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/scrollmenu.js"></script>
<script>
    $(document).ready(function () {
        function getUMData() {
            $.get("<{WSURLSHOW('appuser','getUserMoneyData')}>?" + Math.random(), function (json) {
                var data = JSON.parse(json);
                if (data.state == "success") {
                    $('.mymoney1').html(data.data.mymoney1);
                    $('.mymoney2').html(data.data.mymoney2);
                    $('.mymoney3').html(data.data.mymoney3);
                    $('.mymoneyall').html(data.data.mymoneyall);
                }
            });
        }
        setInterval(getUMData, 1000);
        var ectype = 1;
        var ectypev = "USDT";
        ecvM = function () {
            if (ectype == 1) {
                ectype = 3;
                ectypev = "佣金";
                $('.ecv1').html("佣金");
                $('.ecv2').html("USDT");
            } else {
                ectype = 1;
                ectypev = "USDT";
                $('.ecv1').html("USDT");
                $('.ecv2').html("佣金");
            }
        };
        $("#submits").click(function () {
            wu.showLoadingBg();
            setTimeout(() => {
                wu.hideToast();
            }, 3000);
            var options = {
                url: "<{WSURLSHOW($WsCtrlClass,'presentationform')}>" + ectype,
                type: 'post',
                dataType: 'json',
                data: $("#form_post").serialize(),
                success: function (res) {
                    if (res["state"] == "success" && res["code"] == 1) {
                        wu.showMessage({
                            title: "提交成功，审核中！",
                            backgroundColor: '#2bde62',
                            duration: 3000
                        });
                        setTimeout(function () {
                            //history.go(-1);
                            location.href = "<{WSURLSHOW('appuser','withdrawal')}>";
                        }, 2600);
                    }
                    if (res["state"] == "error") {
                        var msg = "网络异常！";
                        if (res["code"] == -1001) {
                            msg = "参数异常！";
                        }
                        if (res["code"] == -1002) {
                            msg = "提现USDT有误！";
                        }
                        if (res["code"] == -1003) {
                            msg = "USDT最小限0.01";
                        }
                        if (res["code"] == -1004) {
                            msg = "请填写收币币种！";
                        }
                        if (res["code"] == -1005) {
                            msg = "请填写收币地址！";
                        }
                        if (res["code"] == -1006) {
                            msg = "提交失败！";
                        }
                        if (res["code"] == -1007) {
                            msg = "账户" + ectypev + "不足！";
                        }
                        if (res["code"] == -1008) {
                            msg = "提交中途异常！";
                        }
                        wu.showMessage({
                            title: msg,
                            backgroundColor: 'red',
                            duration: 3000
                        });
                    }
                },
                complete: function (XMLHttpRequest, textStatus) {
                },
                error: function () {
                    wu.showMessage({
                        title: "网络异常！",
                        backgroundColor: 'red',
                        duration: 3000
                    });
                }
            };
            $.ajax(options);
            return false;
        });


    });
</script>
</body>
</html>
