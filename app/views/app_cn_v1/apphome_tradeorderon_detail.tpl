<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui, viewport-fit=cover">
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
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="<{VIEW_ROOTPATH}>/assets/public/vuealert/css/wu-ui.css" />
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
	.ul1{
		margin-top: 5px;
		padding-bottom: 112px;
		border-bottom: 1px solid #38383A;
	}
	.ul1 li{
		color:#727679!important;
		font-size: 14px!important;
		list-style: none;
		float: left;
		width: 100%;
		margin-bottom: 13px;
	}
	.ul1 li > div:nth-child(1){
		width: 49%;
		text-align: left;
		display: inline-block;
	}
	.ul1 li > div:nth-child(2){
		width: 49%;
		text-align: right;
		display: inline-block;
		color: #B8B8B8;
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
							<a href="javascript:window.location.href = '/apphome/tradeorderon';" class="link icon-only external color-white">
								<i class="icon icon-back"></i>
							</a>
						</div>
						<div style="text-align: center;width: 100%;margin-left: -40px;">
							存单明细
						</div>
					</div>
				</div>
				<div style="padding-top:90px;width: 100%;text-align: center;">
					<div style="font-size: 16px;color: #E8E8E8;">
						<{$tradeorder.item_name}>
					</div>
					<div style="font-size: 30px;color:#BC9568; line-height: 55px;">
						+<{$tradeorder.sy}>
					</div>
					<div style="color: #01DCA4;font-size: 16px;">
						<{if $tradeorder.status == '确认中'}>
						<span style="color:#0177F8;"><{$tradeorder.status}>
						<{else}>
						<{$tradeorder.status}>
						<{/if}>
					</div>
				</div>
				<div style="padding: 0 15px;margin-top: 52px;">
					<div style="color: #fff;font-size: 16px;line-height: 50px;">
						买入信息
					</div>
					<ul class="ul1">
						<li>
							<div>买入产品</div>
							<div><{$tradeorder.item_name}></div>
						</li>
						<li>
							<div>买入金额</div>
							<div><{$tradeorder['money']}></div>
						</li>
						<li>
							<div>买入时间</div>
							<div><{$tradeorder.timev1}></div>
						</li>
					</ul>
				</div>
				<{if $tradeorder.status <> '确认中'}>
				<div style="padding: 0 15px;margin-top: 5px;">
					<div style="color: #fff;font-size: 16px;line-height: 50px;">
						确认信息
					</div>
					<ul class="ul1" style="border-bottom:unset;">
						<li>
							<div>确认时间</div>
							<div><{$tradeorder.timev2}></div>
						</li>
						<li>
							<div>订单编号</div>
							<div>O<{$tradeorder.id}></div>
						</li>
						<li>
							<div>产品状态</div>
							<div style="color: #BC9568;"><{$tradeorder.status}></div>
						</li>
					</ul>
				</div>
				<{/if}>
			</div>
        </div>
    </div>
</div>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/jquery.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/framework7.min.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/js/app.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/bscroll.js"></script>
<script src="<{VIEW_ROOTPATH}>/assets/wap/scrollmenu/js/scrollmenu.js"></script>
<script src='<{VIEW_ROOTPATH}>/assets/alert/js/alert.js'></script>
<script type="text/javascript">
	$('#start').on('click',function () {
		window.location.href = '/apphome/itemstart/id/' + <{$id}>;
	});
</script>
</body>
</html>
