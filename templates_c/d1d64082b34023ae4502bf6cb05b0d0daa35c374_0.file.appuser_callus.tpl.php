<?php
/* Smarty version 3.1.30, created on 2020-05-04 13:46:01
  from "E:\u.xiangxin.me\app\views\app_cn_v1\appuser_callus.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eafac19e86281_34707774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1d64082b34023ae4502bf6cb05b0d0daa35c374' => 
    array (
      0 => 'E:\\u.xiangxin.me\\app\\views\\app_cn_v1\\appuser_callus.tpl',
      1 => 1578462962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eafac19e86281_34707774 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
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
		/*
		width:90%;
		background: #5186d6;
		margin:2%;
		border-radius: 7px;
		*/
		
		margin:.6em 0 1em 0;
		background: rgba(255, 255, 255, 0.11);
		
		padding: 5% 3%;
		
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
		width:76%;margin-left:12%;text-align:center;color:#fff;font-size:1rem;word-break: break-all;
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
	
	.coinnavspan{
		width:32.5%;text-align:center;display: inline-block;
		padding: 5px 0;
		background: rgba(255, 255, 255, 0.06);
	}
	canvas{
		width: 50%;
		border: 12px solid rgb(255, 255, 255);
	}
	.ios .theme-dark .navbar, .navbar.ios .theme-dark, .ios .navbar{
		background: #282828!important;
	}
	.ios .navbar{
		background: #232323!important;
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
	.coininfodivlay{
		background: #2C2C2C !important;
		padding: 1rem 3%;
	}
	.coininfoicodiv{
		width: 3rem;
		height: 3rem;
	}
	.coininfotxt1{
		font-size: 13px;
		padding-left: 5px;
	}
	.coininfotxt2{
		font-size: 13px;
		margin-top: 13px;
		padding-left: 5px;
	}
	.ios .list .item-inner{
		border-bottom: 2px solid #2c2c2c;
	}
	body{
		font-family:DINAlternate-Bold,DINAlternate;
	}
</style>
	
<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
            
            <div class="page-content" style="padding-top:60px;">
				
				<div class="navbar" style="position: fixed;background: #2C2C2E!important;height: 60px;line-height: 60px;">
					<div class="navbar-inner">
						<div class="left" style="font-weight: bold;color: #fff;">
							<a href="javascript:history.go(-1);" class="link icon-only external color-white">
								<i class="icon icon-back"></i>
							</a>
						</div>
						<span style="position: absolute;left: 46%;">客服</span>
					</div>
				</div>
				<div style="text-align: center;margin-top: 165px;">
					<img src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/img/kefu.png" alt="">
					<p style="color: #727679; height: 50px; line-height: 50px; font-size: 16px;margin-top: 10px;">客服24h在线</p>
					<p style="font-size: 23px;"><?php echo $_smarty_tpl->tpl_vars['webconfig']->value['callus']['val'];?>
</p>
					<input type="text" style="display: none;" value="<?php echo $_smarty_tpl->tpl_vars['webconfig']->value['callus']['val'];?>
" id="copy">
					<button class="copy" data-clipboard-target="#copy" style="cursor:pointer;color: #FFF; width: 75px; height: 30px;line-height: 30px; background: rgba(142,146,159,0.15); border-radius: 4px; opacity: 0.5; border: unset; margin-top: 20px;">复制</button>
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
/assets/wap/js/clipboard.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/wap/js/jquery.qrcode.min.js"><?php echo '</script'; ?>
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
>
	$(document).ready(function () {

		var copycallM = function(){
		
			wu.showMessage({
				title: "复制成功！",
				backgroundColor: '#2bde62',
				duration: 3000
			});
		
		};
		var clipboard1 = new ClipboardJS('.copy');
		clipboard1.on('success', function(e) {
			copycallM();
			e.clearSelection();
		});
		
	});
<?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
