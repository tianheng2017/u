<?php
/* Smarty version 3.1.30, created on 2020-05-04 10:15:41
  from "E:\u.xiangxin.me\app\views\app_cn_v1\appuser_upassword.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eaf7acd329697_17923041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff94a83bff221f07578176a3d506f580b03cd5ab' => 
    array (
      0 => 'E:\\u.xiangxin.me\\app\\views\\app_cn_v1\\appuser_upassword.tpl',
      1 => 1577456280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaf7acd329697_17923041 (Smarty_Internal_Template $_smarty_tpl) {
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
/assets/wap/css/style.css">
	
	<!--vue_alert_start-->
	<link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/css/wu-ui.css" />
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/js/vue.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/public/vuealert/js/wu-ui.js"><?php echo '</script'; ?>
>
	<!--vue_alert_end-->
	
</head>
<style>
	img {
		display: initial;
		width: initial;
		border: 0;
	}
	.ios .login-box .list .item-inner {
    padding-left: 10px;
    padding-right: 10px;
}
.ios .theme-dark .list ul, .list.ios .theme-dark ul, .ios .list ul {
    background: rgba(49, 56, 94, 0.45);
    border: 1px solid rgba(59, 66, 114, 0.64);
}
.ios .button.button-fill, .ios .button.button-fill-ios {
    background-color: rgba(59, 66, 114, 0.89);
    border: 1px solid rgba(142, 149, 192, 0.2);
}
	.ios .theme-dark .navbar, .navbar.ios .theme-dark, .ios .navbar{
		background: #282828!important;
	}
	.ios .navbar{
		background: #232323!important;
	}
	.page-content{
		background: #282828!important;
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


	.ios .theme-dark .navbar, .navbar.ios .theme-dark, .ios .navbar {
		background-color: #2C2C2E!important;
		height: 55px;
	}
	.ios .button.button-fill, .ios .button.button-fill-ios {
		background-color: #BC9568 !important;
		border-radius: 5px;
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
	.ios .theme-dark .navbar:after, .navbar.ios .theme-dark:after{
		background: unset;
	}
	.ios .login-box .list .item-content{
		border: unset;
	}
	input{
		border-bottom: 2px solid #313133!important;
	}
	.ios .theme-dark .block{
		margin-top: 10px;
	}
	.ios .login-box .list .item-content{
		margin-top: 9px;
	}
</style>
	
<body class="theme-dark">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
			<div class="navbar">
                <div class="navbar-inner">
                    <div class="left">
                        <a href="javascript:history.go(-1);" class="link icon-only external color-white">
                            <i class="icon icon-back"></i>
                        </a>
                    </div>
                    <div class="title text-color-white">修改密码</div>
                </div>
            </div>
            <div class="page-content" style="padding-top: 55px;">
				<div style="height: 70px;color: #727679;font-size: 14px;text-align: center;padding-top: 10px;background: #2C2C2E;">
					请为您<span style="color: #fff;"> 135****3457 </span>设置一个<br>
					<span style="text-align: center;">新密码</span>
				</div>
                <div class="login-box block">
					<form action="#" id="form_post" name="form_post" method="post">
						<div class="list no-margin no-hairlines">
							<ul>
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<p style="font-size: 12px;">原密码</p>
											<input type="password" name="password" placeholder="输入原密码">
										</div>
									</div>
								</li>
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<p style="font-size: 12px;">新密码</p>
											<input type="password" name="passwordn" placeholder="输入新密码">
										</div>
									</div>
								</li>
								<li class="item-content item-input">
									<div class="item-inner">
										<div class="item-input-wrap">
											<p style="font-size: 12px;">再次输入</p>
											<input type="password" name="passwordn2" placeholder="再次输入新密码">
										</div>
									</div>
								</li>
							</ul>
						</div>
					</form>
					<button class="button button-fill button-big margin-top poatformbtn">确定</button>
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
>
	$(".poatformbtn").click(function () {
		wu.showLoadingBg();
		setTimeout(() => {
			//隐藏loading
			wu.hideToast();
		}, 3000);
		
		var options = {
			url: "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'upasswordform');?>
",
			type: 'post',
			dataType: 'json',
			data: $("#form_post").serialize(),
			success: function (res) {
				var restxt = "网络异常！";
				if (res["data"]["state"]=="true") {
					if(res["data"]["msg"]=="1001"){
						restxt = "修改成功！";
					}
					wu.showMessage({
						title: restxt,
						backgroundColor: '#2bde62',
						duration: 3000
					});
					setTimeout(function(){
						history.go(-1);
					},3000);
				}
				if (res["data"]["state"]=="false") {
					if(res["data"]["msg"]=="1002"){
						restxt = "修改失败！";
					}
					if(res["data"]["msg"]=="1003"){
						restxt = "请输入原密码！";
					}
					if(res["data"]["msg"]=="1004"){
						restxt = "请输入新密码！";
					}
					if(res["data"]["msg"]=="1005"){
						restxt = "请确认新密码！";
					}
					if(res["data"]["msg"]=="1006"){
						restxt = "两次输入的密码不同！";
					}
					if(res["data"]["msg"]=="1007"){
						restxt = "密码长度不能小于6位！";
					}
					if(res["data"]["msg"]=="1008"){
						restxt = "原密码有误！";
					}
					if(res["data"]["msg"]=="1009"){
						restxt = "密码相同，无需修改！";
					}
					wu.showMessage({
						title: restxt,
						backgroundColor: 'red',
						duration: 3000
					});
				}
			},
			complete: function(XMLHttpRequest, textStatus){
            },
            error: function(){
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
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
