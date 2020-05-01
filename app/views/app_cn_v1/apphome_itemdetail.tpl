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
	.ul1 li{
		list-style: none;
		float: left;
		padding: 1px 6px;
		margin-right: 5px;
		border-radius:2px;
		text-align: center;
		border:1px solid #979797;
		color: #979797;
	}
	.ul2 li::before{
		content: "◆";
		color: #C5A176;
		font-size: 14px;
		margin-right: 10px;
	}
	.ul2 li{
		padding: 0 0 10px;
		color: #727679;
		font-size: 15px;
	}
	.time-horizontal {
		list-style-type: none;
		border-top: 2px solid #707070;
		padding: 0;
		margin: 0;
	}
	.time-horizontal li {
		float: left;
		position: relative;
		text-align: center;
		width: 25%;
		padding-top: 10px;
		font-size: 14px;
	}
	.time-horizontal li b:before {
		content: '';
		position: absolute;
		top: -6px;
		left: 47%;
		width: 10px;
		height: 10px;
		border: 1px solid #727679;
		border-radius: 8px;
		background: #2C2C2E;
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
						<div style="text-align: center;width: 100%;margin-left: -40px;">
							<{$item['item_name']}>
						</div>
					</div>
				</div>
				<div style="padding:88px 15px 50px;border-bottom: 5px solid #242426;">
					<div>
						<div style="display:inline-block;width: 49%;text-align: left;color: #727679;font-size: 13px;">
							年化收益率
						</div>
						<div style="display:inline-block;width: 49%;text-align: left;color: #727679;font-size: 13px;">
							产品期限
						</div>
					</div>
					<div style="margin-top: 5px;">
						<div style="font-size:30px;display:inline-block;width: 49%;text-align: left;color: #BD966A;">
							<{$item['arate']}>%
						</div>
						<div style="font-size:30px;display:inline-block;width: 49%;text-align: left;color: #FFF;">
							<{$item['day_num']}>天
						</div>
					</div>
					<div style="margin-top: 10px;">
						<ul class="ul1">
							<li>储存存款</li>
							<li>储存存款</li>
							<li>储存存款</li>
						</ul>
					</div>
				</div>
				<div style="padding:10px 15px 25px;border-bottom: 5px solid #242426;">
					<div style="margin: 15px 0;font-size: 18px;color: #fff;">
						产品特色
					</div>
					<div style="font-size: 15px;color: #727679;">
						<{$item['desc']}>
					</div>
				</div>
				<div style="padding:10px 15px 25px;">
					<div style="margin: 15px 0;font-size: 18px;color: #fff;">
						交易规则
					</div>
					<div style="font-size: 15px;color: #727679;height: 100px;padding-top: 25px;">
						<ul class="time-horizontal">
							<li>
								<b></b>
								<span style="font-size: 14px;">今日</span>
								<span style="display: block;text-align: center;color: #fff;">预约买入</span>
							</li>
							<li>
								<b></b>
								<span style="font-size: 14px;">明日</span>
								<span style="display: block;color: #fff;">预计成交</span>
							</li>
							<li>
								<b></b>
								<span style="font-size: 14px;"><{$time1}></span>
								<span style="display: block;color: #fff;">预计产生收益</span>
							</li>
							<li>
								<b></b>
								<span style="font-size: 14px;"><{$time2}></span>
								<span style="display: block;color: #fff;">到期</span>
							</li>
						</ul>
					</div>
					<div>
						<ul class="ul2">
							<li>USDT定存是为投资用户提供的加密资产增值服务产品，用户存入后不可撤销，到期前不可取出</li>
							<li>收益规则：当日存入，次日确认后开始计息</li>
							<li>取出时间：到期后利息连同本金自动转入账户余额</li>
							<li>到账时间：当日取出，当日到账</li>
							<li>备注：根据市场情况，定期利率略有波动，收益按照存入时利率计算</li>
						</ul>
					</div>
				</div>
				<div style="width: 100%;background: #2C2C2E;height: 97px;position: fixed;bottom: 0;">
					<button id="start" style="cursor:pointer;font-size:18px;width:90%;color:#fff;background:linear-gradient(128deg,rgba(223,199,161,1) 0%,rgba(188,149,104,1) 100%);
box-shadow:0px 6px 21px 0px rgba(191,153,109,0.1);border-radius:4px;height: 50px;margin: 20px auto;position: fixed;bottom: 0;border: unset;left: 5%;">立即存入</button>
				</div>
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
