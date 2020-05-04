<?php
/* Smarty version 3.1.30, created on 2020-05-04 14:47:11
  from "E:\u.xiangxin.me\app\views\app_cn_v1\appuser_coupon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eafba6f440852_84140780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22a4276cc821cc96210111610c53c56b3d5f0370' => 
    array (
      0 => 'E:\\u.xiangxin.me\\app\\views\\app_cn_v1\\appuser_coupon.tpl',
      1 => 1588574818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eafba6f440852_84140780 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#2196f3">
    <title><?php echo $_smarty_tpl->tpl_vars['webconfig']->value['webtitle']['val'];?>
</title>
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/css/framework7.ios.min.css">
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/css/framework7-icons.css">
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/css/style.css">
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/scrollmenu/css/animate.css">
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap/scrollmenu/css/scrollmenu.css">
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/wap2/css/style.css">
    <!--vue_alert_start-->
    <link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/wu-ui.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/vuealert/js/vue.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/js/wu-ui.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo VIEW_ROOTPATH;?>
/assets/alert/css/alert.css">
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
    .coininfodivlay{
        border-top: 1px solid #ffffff42;
        margin:.6em 0 1em 0;
        background: #232323 !important;
        font-size: 20px;
        padding: 15px 25px 15px 25px;
        position: relative;
    }
    .coininfoicodiv{
        width:2rem;height:2rem;border-radius: 6px;background: #fff;padding:.2rem;
        display: inline-block;
    }
    .coininfotxtdiv{
        width:66%;
        line-height: 1rem;
        display: inline-block;
        vertical-align: top;
    }
    .coininfotxt1{
        width:100%;color:#fff;font-size:.9rem;
    }
    .coininfotxt2{
        color:#fff;
        font-size: .7rem;
        overflow: hidden;
        margin-top: 0.2rem;
    }
    .coininfotxt3{
        width:97%;text-align:right;color:#fff;font-size:1.2rem;
    }
    .coininfotxt4{
        width:97%;text-align:right;color:#fff;font-size:.7rem;
    }
    .coininfotxt12{
        color:#fff;
        font-size: .7rem;
        margin-top: 0.2rem;
    }
    .coininfotxtsondiv12 {
        width: 49%;
        color: #8cdfff;
        padding: 3px 0 3px 3%;
        border: 1px solid rgba(190, 244, 255, 0.1);
        display: inline-block;
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
    .user-menu li a img{
        width: 1.7rem;
        height: 1.7rem;
    }
    .user-menu li a:before{
        float: inherit;
    }
    .menu-footer{
        background-color: #242424;
        border-top: 1px solid rgba(62, 62, 62, 0.88);
        color:#D3D3D3;
    }
    .menu-footer li span{
        color: #D3D3D3;
    }
    .coininfodivlay ul li{
        list-style: none;
        margin: 0;
        padding: 0;
        float: left;
        width: 33.33%;
        text-align: center;
        margin-bottom: 5px;
    }
    .coininfodivlay ul li p{
        color: #8E8D92;
        font-size: 16px;
    }
    ul li{
        width: 100%;
        margin: 2px auto 0;
        border-radius:12px;
        list-style: none;
        padding: 15px 5px;
        cursor: pointer;
        margin-bottom: 10px;
    }
</style>
<style type="text/css">
    .stamp * {
        padding: 0;
        margin: 0;
        list-style:none;
        font-family:"Microsoft YaHei", 'Source Code Pro', Menlo, Consolas, Monaco, monospace;
    }
    .stamp {
        width: 100%;
        height: 140px;
        padding: 0 10px;
        margin-bottom: 50px;
        position: relative;
        overflow: hidden;
    }
    .stamp:before {
        content: '';
        position: absolute;
        top:0;
        bottom:0;
        left:10px;
        right:10px;
        z-index: -1;
    }
    .stamp .par {
        float: left;
        padding: 16px 15px;
        width: 220px;
        border-right:2px dashed rgba(255, 255, 255, .3);
        text-align: left;
    }
    .stamp .par p {
        color:#fff;
        font-size: 16px;
        line-height: 21px;
        text-align: center;
    }
    .stamp .par span {
        font-size: 50px;
        color:#fff;
        margin-right: 5px;
        line-height: 65px;
    }
    .stamp .par .sign {
        font-size: 34px;
    }
    .stamp .par sub {
        position: relative;
        top:-5px;
        color:rgba(255, 255, 255, .8);
    }
    .stamp .copy {
        display: inline-block;
        padding:21px 14px;
        width:100px;
        vertical-align: text-bottom;
        font-size: 30px;
        color:rgb(255,255,255);
        text-align: center;
        line-height: initial;
    }
    .stamp .copy p {
        font-size: 16px;
        margin-top: 15px;
    }
    .stamp01 {
        background: radial-gradient(rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 5px, #F39B00 5px);
        background-size: 15px 15px;
        background-position: 9px 3px;
    }
    .stamp01:before {
        background-color:#F39B00;
    }
    .stamp02 {
        background: radial-gradient(transparent 0, transparent 5px, #D24161 5px);
        background-size: 15px 15px;
        background-position: 9px 3px;
    }
    .stamp02:before {
        background-color:#D24161;
    }
    .stamp03 {
        /*background: radial-gradient(transparent 0, transparent 5px, #7EAB1E 5px);*/
        background-size: 15px 15px;
        background-position: 9px 3px;
    }
    .stamp03:before {
        background-color:#7EAB1E;
    }
    .stamp03 .copy {
        padding: 10px 6px 10px 12px;
        font-size: 24px;
        margin-top: 45px;
    }
    .stamp03 .copy p {
        font-size: 14px;
        margin-top: 5px;
        margin-bottom: 8px;
    }
    .stamp03 .copy a {
        background-color:#fff;
        color:#333;
        font-size: 14px;
        text-decoration:none;
        padding:5px 10px;
        border-radius:3px;
        display: block;
    }
    .stamp04 {
        width: 390px;
        background: radial-gradient(rgba(0, 0, 0, 0) 0, rgba(0, 0, 0, 0) 4px, #50ADD3 4px);
        background-size: 12px 8px;
        background-position: -5px 10px;
    }
    .stamp04:before {
        background-color:#50ADD3;
        left: 5px;
        right: 5px;
    }
    .stamp04 .copy {
        padding: 10px 6px 10px 12px;
        font-size: 24px;
    }
    .stamp04 .copy p {
        font-size: 14px;
        margin-top: 5px;
        margin-bottom: 8px;
    }
    .stamp04 .copy a {
        background-color:#fff;
        color:#333;
        font-size: 14px;
        text-decoration:none;
        padding:5px 10px;
        border-radius:3px;
        display: block;
    }
</style>
<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
            <div class="page-content" style="padding-bottom: 100px;background: #2C2C2C;">
                <div class="navbar" style="position: fixed;background: #2C2C2E!important;font-size: 16px;height: 60px;">
                    <div class="navbar-inner">
                        <div class="left" style="font-weight: bold;color: #fff;">
                            <a href="javascript:history.go(-1);" class="link icon-only external color-white">
                                <i class="icon icon-back"></i>
                            </a>
                        </div>
                        <div style="text-align: center;width: 100%;">
                            我的优惠卷
                        </div>
                    </div>
                </div>
                <div style="width: 100%;padding: 10px;margin-top: 70px;text-align: center;">
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <li>
                            <div class="stamp stamp03">
                                <div class="par">
                                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 优惠劵</p>
                                    <sub class="sign">￥</sub>
                                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['money'];?>
</span>
                                    <p>获得时间：<?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</p>
                                </div>
                                <div class="copy">
                                    <a href="javascript:coupon_tx(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)">立即提现</a>
                                </div>
                            </div>
                        </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/framework7.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/scrollmenu/js/bscroll.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/scrollmenu/js/scrollmenu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='<?php echo VIEW_ROOTPATH;?>
/assets/alert/js/alert.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    function coupon_tx(val) {
        var confirmis=confirm("确定提现该优惠劵吗？");
        if (confirmis==true){
            wu.showLoadingBg();
            setTimeout(() => {
                wu.hideToast();
            }, 3000);
            var options = {
                url: "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'coupon_tx');?>
",
                type: 'post',
                dataType: 'text',
                data: 'id='+val,
                success: function (data) {
                    if (res["state"] == "success" && res["code"] == 1) {
                        wu.showMessage({
                            title: "提交成功，审核中！",
                            backgroundColor: '#2bde62',
                            duration: 3000
                        });
                        setTimeout(function () {
                            location.href = "<?php echo WSURLSHOW('appuser','withdrawal');?>
";
                        }, 1000);
                    }
                    if (res["state"] == "error") {
                        var msg = "网络异常！";

                        if (res["code"] == -1001) {
                            msg = "参数异常！";
                        }
                        if (res["code"] == -1020) {
                            msg = "优惠卷不存在！";
                        }
                        if (res["code"] == -1010) {
                            msg = "请上传收款二维码！";
                        }
                        if (res["code"] == -1011) {
                            msg = "收款二维码格式有误！";
                        }
                        if (res["code"] == -1008) {
                            msg = "提交中途异常！";
                        }
                        if (res["code"] == -1006) {
                            msg = "提交失败！";
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
        }else{
            return false;
        }
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
