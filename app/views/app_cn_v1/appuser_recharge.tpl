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
		background: #242426 !important;

        padding: 0 3% 25px;

        position: relative;
        width: 95%;
        margin: 0 auto!important;
        border-radius: 5px;
    }

    .coininfoicodiv {
        width: 2rem;
        height: 2rem;
        border-radius: 6px;
        background: #fff;
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
        width: 175px;
        border: 12px solid rgb(255, 255, 255);
    }

    .ios .login-box .list .item-content {
        border: 1px solid #c0c0c0;
        border-radius: 100px;
        margin-top: 1em;
        padding: 0 10px;
    }


    .img-upload {
        display: block;
        position: relative;
        background-color: #2C2C2C;
        border: 1px solid #565656;
        border-radius: 5px;
        text-align: center;
        padding-top: 100%;
        height: 0;
        overflow: hidden;
		top: 0.6rem;
    }

    .img-upload .text i {
        background-color: #09f;
        display: block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        margin-bottom: 10px;
    }

    .img-upload img {
        display: initial;
    }
	.ios .navbar{
		background: #2C2C2E!important;
	}
	.page-content{
		background: #2C2C2E!important;
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
    input{
        border-bottom: 2px solid #2F2F31!important;
        width: 100%!important;
        height: 42px!important;
        color: #fff!important;
        font-size: 16px!important;
    }

</style>

<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
            <div class="page-content" style="padding-top:55px;">
                <div class="navbar" style="position: fixed;height: 55px;">
                    <div class="navbar-inner">
                        <div class="left" style="font-weight: bold;color: #fff;">
                            <a href="javascript:history.go(-1);" class="link icon-only external color-white">
                                <i class="icon icon-back"></i>
                            </a>
                        </div>
                        <span style="text-align: center;width: 100%;margin-left: 20px;">
                            充币
                        </span>
                        <div class="right">
                            <a class="external" href="<{WSURLSHOW('appuser','rechargelog')}>" style="color: #727679;padding-right: 0.7rem;">
                                充币记录
                            </a>
                        </div>
                    </div>
                </div>


                <div class="coininfodivlay coininfodivlayusdt" style="display:;">
                    <div style="width:100%;">
                        <div class="coininfotxtdiv" style="width: 100%;">
                            <div class="coininfotxt2">
                                <div class="cpck_address"
                                     style="width:100%;display:inline-block;word-wrap: break-word;text-align: center;font-size: 1.2rem;margin: 5px 0 20px 0;"
                                     id="copytxtid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="width: 100%;margin: 0 auto;">
                        <div style="width:100%;text-align: center;" id="codedivusdt"></div>
                    </div>
                    <div style="width:100%;margin-top:1rem;">
                        <div class="coininfotxt4" id="copyv1" style="color:#727679;font-size: 16px;"><{$webconfig.usdtaddress.val}></div>
                        <button data-clipboard-target="#copyv1" class="copybtn1"
                        style="cursor:pointer;width: 60px;background: #353535;text-align: center;padding: 3px 10px;margin: 10px auto 0;color: #8E929F;border: unset;display: block;">
                            复制
                        </button>
                    </div>
                </div>
                <form action="#" id="form_post" name="form_post" method="post">
                    <div style="padding: 0 3%;color: #727679;margin: 20px 0;">
                        <div>
                            <p>USDT数量</p>
                            <input type="number" id="money" name="money" placeholder="请输入充值数量">
                        </div>
                        <div style="color: #727679;margin-top: 5px;font-size: 10px;">
                            最小充值金额<{$webconfig.minrechargemoney.val}>USDT
                        </div>
                    </div>
                    <div style="padding: 0 3%;color: #727679;margin: 20px 0;">
                        <div>
                            <p>充款手机号码</p>
                            <input type="number" id="phone" name="phone" placeholder="请输入充款手机号">
                        </div>
                    </div>
                    <div style="padding: 0 3%;color: #727679;margin: 20px 0;">
                        <div>
                            <p>上传收款凭证</p>
                            <div class="block">
                                <div class="row">
                                    <div class="col-50" style="margin-left:25%;">
                                        <a href="javascript:;" class="img-upload">
                                            <input type="file" accept="image/png,image/jpeg,image" name="img1" id="sfz1" style="cursor:pointer;width: 100%!important;height: 100%!important;">
                                            <img src="" alt="" id="sfzimg1">
                                            <div class="text" style="padding-top: 30%">
                                                <i class="f7-icons">+</i>
                                                <p>转款凭证</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button id="submits" style="font-size:16px;cursor:pointer;background: #BC9568;border:unset;color:#fff;height: 45px;width: 95%;margin: 0 auto;margin-bottom: 20px;border-radius: 5px;position: absolute;left: 2.5%;">提交</button>
                    </div>
                </form>
                <!--div class="item-content margin-top alerttxt"
                     style="font-size:16px;padding: 1em;background: #2c2c2c;margin-top: 5px!important;text-align: center;color: red;">
                    最小充值金额： <{$webconfig.minrechargemoney.val}> USDT
                </div-->
                <!--div class="login-box block">
                    <form action="#" id="form_post" name="form_post" method="post">
                        <div class="list no-margin no-hairlines">
                            <ul>
                                <li class="item-content item-input">
                                    <div style="width: 9em;text-align:right;">USDT数量：</div>
                                    <div class="item-inner">
                                        <div class="item-input-wrap">
                                            <input type="number" id="money" name="money" placeholder="USDT">
                                        </div>
                                    </div>
                                </li>
                                <li class="item-content item-input">
                                    <div style="width: 9em;text-align:right;">手机号：</div>
                                    <div class="item-inner">
                                        <div class="item-input-wrap">
                                            <input type="number" id="phone" name="phone" placeholder="手机号">
                                        </div>
                                    </div>
                                </li>
                                <li style="display:none;" class="item-content item-input">
                                    <div style="width: 9em;text-align:right;">转款地址：</div>
                                    <div class="item-inner">
                                        <div class="item-input-wrap">
                                            <input type="text" id="address" name="address" placeholder="转款地址"
                                                   value="见凭证图片">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="block">
                            <div class="row">
                                <div class="col-100">
                                    <a href="javascript:;" class="img-upload">
                                        <input type="file" accept="image/png,image/jpeg,image" name="img1" id="sfz1">
                                        <img src="" alt="" id="sfzimg1">
                                        <div class="text">
                                            <i class="f7-icons">+</i>
                                            <p>转款凭证</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <button class="button button-fill button-big margin-top poatformbtn">提交</button>
                </div-->

            </div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/upload.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/clipboard.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>
<script type="text/javascript" src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.qrcode.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/bscroll.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/scrollmenu.js"></script>
<script>
    $(document).ready(function () {
        var copycallM = function () {
            wu.showMessage({
                title: "复制成功！",
                backgroundColor: '#2bde62',
                duration: 3000
            });
        };
        var clipboard1 = new ClipboardJS('.copybtn1');
        clipboard1.on('success', function (e) {
            copycallM();
            e.clearSelection();
        });
        jQuery('#codedivusdt').qrcode("<{$webconfig.usdtaddress.val}>");
        $('.img-upload').each(function (i) {
            i = i + 1;
            new uploadPreview({
                UpBtn: 'sfz' + i,
                ImgShow: 'sfzimg' + i,
                callback: function (e, file) {
                    console.log(e, file);
                    $(e).closest('.img-upload').find('.text').hide();
                }
            });
        });
        $("#submits").click(function () {
            wu.showLoadingBg();
            setTimeout(() => {
                //隐藏loading
                wu.hideToast();
            }, 3000);
            var formData = new FormData();
            //var formData = $("#form_post").serialize();
            formData.append("img1", $("#sfz1")[0].files[0]);
            formData.append("money", $("#money").val());
            formData.append("phone", $("#phone").val());
            formData.append("address", $("#address").val());
            var options = {
                url: "<{WSURLSHOW($WsCtrlClass,'rechargeform')}>",
                type: 'post',
                dataType: 'json',
                processData: false,
                contentType: false,
                data: formData,
                success: function (res) {
                    if (res["state"] == "success" && res["code"] == 1) {
                        wu.showMessage({
                            title: "提交成功，审核中！",
                            backgroundColor: '#2bde62',
                            duration: 3000
                        });
                        setTimeout(function () {
                            //history.go(-1);
                            location.href = "<{WSURLSHOW('appuser','rechargelog')}>";
                        }, 2600);
                    }
                    if (res["state"] == "error") {
                        var msg = "网络异常！";

                        if (res["code"] == -1001) {
                            msg = "参数异常！";
                        }

                        if (res["code"] == -1002) {
                            msg = "充值金额有误！";
                        }
                        if (res["code"] == -1003) {
                            msg = "充值金额最小限 <{$webconfig.minrechargemoney.val}> USDT";
                        }
                        if (res["code"] == -1004) {
                            msg = "请填写手机号！";
                        }
                        if (res["code"] == -1005) {
                            msg = "请填写收款地址！";
                        }
                        if (res["code"] == -1006) {
                            msg = "提交失败！";
                        }

                        if (res["code"] == -1008) {
                            msg = "提交中途异常！";
                        }

                        if (res["code"] == -1010) {
                            msg = "请上传转款凭证！";
                        }
                        if (res["code"] == -1011) {
                            msg = "转款凭证格式有误！";
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
