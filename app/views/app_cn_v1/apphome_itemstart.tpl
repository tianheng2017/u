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
		background: #2C2C2C !important;
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
	input::-webkit-input-placeholder {
		color: #484848;
		font-size: 18px;
	}
	.ul1 li::before{
		content: "◆";
		color: #C5A176;
		font-size: 14px;
		margin-right: 10px;
	}
</style>
	
<body style="padding-top: 0;padding-bottom: 0;">
<div id="app">
    <div class="statusbar"></div>
    <div class="view view-main">
        <div class="page">
			<div class="page-content" style="padding-bottom: 100px;background: #2c2c2e;">
				<div class="navbar" style="position: fixed;background: #2C2C2E!important;font-size: 16px;height: 60px;">
					<div class="navbar-inner">
						<div class="left" style="font-weight: bold;color: #fff;">
							<a href="javascript:history.go(-1);" class="link icon-only external color-white">
								<i class="icon icon-back"></i>
							</a>
						</div>
						<div style="text-align: center;width: 100%;margin-left: -40px;">
							存入
						</div>
					</div>
				</div>
				<div class="coininfodivlay" style="width:100%;margin-top: 70px!important;height: 133px!important;border-top:unset;border-bottom: 14px solid #242426;">
					<div style="padding: 0 0 15px 0;">
						<div style="display: inline-block;font-size: 18px;"><{$item['item_name']}></div>
						<div style="display: inline-block;position: absolute;right: 20px;color: #727272;font-size: 16px;top: 20px;">年化收益率：<span id="nhnl"><{$item.arate}></span>%</div>
						<span id="day_num" style="display: none"><{$item.day_num}></span>
					</div>
					<div style="padding-top: 10px;">
						<div style="display: inline-block;color: #727272;font-size: 16px;">可用余额</div>
						<div style="display: inline-block;position: absolute;right: 20px;color: #727272;font-size: 16px;">
							<span id="user_money"><{$uinfo.money}></span>
							<span> 元</span>
							<button id="recharge" style="cursor:pointer;width: 70px;height:26px;line-height:26px;display: inline-block;color:#8E929F;border-radius:4px;border:1px solid rgba(151,151,151,0.1);font-size: 14px;margin-left: 5px;">转入</button>
						</div>
					</div>
				</div>
				<div class="coininfodivlay" style="width:100%;margin-top:10px!important;height: 183px!important;border: unset;">
					<div style="position: relative;">
						<div style="position: absolute;">
							<p style="width:100%;font-size: 16px;line-height: 30px;">交易规则</p>
							<input style="color: #fff;font-size: 18px;height: 50px;line-height: 50px;" type="text" id="money" placeholder="请输入存入金额" onkeyup="value=value.replace(/^\D*(\d*(?:\.\d{0,4})?).*$/g, '$1')">
						</div>
						<div style="position: absolute;top: 45px;right: 10px;font-size: 16px;">
							<span style="color: #727272;">元</span>
							<span style="color: #BD9669;margin-left: 15px;cursor: pointer;" id="all">全部</span>
						</div>
					</div>
					<div style="margin-top: 80px;font-size: 16px;padding: 15px 0 0 0;border-top: 1px solid #333333;">
						<div>
							<p style="position: absolute;color: #727272;">预期到账收益:</p>
							<p style="position: absolute;right: 20px;color: #727272;" id="yqsy">0 元</p>
						</div>
						<div>
							<p style="position: absolute;color: #727272;margin-top: 30px;">到期日期:</p>
							<p style="position: absolute;right: 20px;margin-top: 30px;color: #727272;"><{$day}></p>
						</div>
					</div>
				</div>
					<div style="border-top: 14px solid #242426;padding: 15px 25px 15px 25px;">
						<p style="width:100%;font-size: 16px;line-height: 30px;margin-bottom: 10px;">温馨提示</p>
						<ul class="ul1">
							<li style="text-align: left;width: 100%;margin-bottom: 10px;color: #727679;">
								<p style="display: inline-block;width: 90%;">单笔存币限额 100-1000000 USDT。</p>
							</li>
							<li style="text-align: left;width: 100%;margin-bottom: 10px;color: #727679;">
								<p style="display: inline-block;width: 90%;">存币时间按UTC+8时间计算，当日存币，次日0点计息。</p>
							</li>
							<li style="text-align: left;width: 100%;margin-bottom: 10px;color: #727679;">
								<p style="display: inline-block;width: 90%;">定期存币不支持提前支取，存币到期后，本金+利息将自动转入余额。</p>
							</li>
						</ul>
					</div>

				<div style="width: 100%;background: #2C2C2E;height: 97px;position: fixed;bottom: 0;">
					<button id="start" style="cursor:pointer;font-size:18px;width:90%;color:#fff;background:linear-gradient(128deg,rgba(223,199,161,1) 0%,rgba(188,149,104,1) 100%);
box-shadow:0px 6px 21px 0px rgba(191,153,109,0.1);border-radius:4px;height: 50px;margin: 20px auto;position: fixed;bottom: 0;border: unset;left: 5%;">下一步</button>
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
	$('#all').on('click',function () {
		var user_money = parseFloat($('#user_money').text());
		$("#money").val(user_money);
		clac();
	});
	$('#money').keyup(function () {
		clac();
	});
	function clac(){
		var money = parseFloat($("#money").val());
		var nhnl = parseFloat($('#nhnl').text());
		var day_num = parseInt($('#day_num').text());
		if (money){
			$('#yqsy').text((day_num * nhnl/100)/365*money);
		}else{
			$('#yqsy').text(0);
		}
	}
	$('#recharge').on('click',function () {
		window.location = '/appuser/recharge';
	});
	$('#start').on('click',function () {
		var money = $("#money").val();
		var id = <{$item.id}>;
		var options = {
			url: "<{WSURLSHOW($WsCtrlClass,'itemstartdo')}>",
			type: 'post',
			dataType: 'json',
			data:{id:id,money:money},
			success: function (data) {
				if (data['code'] == "1000") {
					self.location = "<{WSURLSHOW($WsCtrlClass,'itemsuccess')}>";
					//wu.showMessage({
					//	title: "存入成功！",
					//	backgroundColor: '#09f',
					//	duration: 3000
					//});
					//setTimeout(function(){
						//self.location = "<{WSURLSHOW($WsCtrlClass,'index')}>";
					//},3000);
				} else {
					if (data['code'] == "-1001") {
						wu.showMessage({
							title: "存入金额有误",
							backgroundColor: 'red',
							duration: 3000
						});
					}
					if (data['code'] == "-1002") {
						wu.showMessage({
							title: "余额不足",
							backgroundColor: 'red',
							duration: 3000
						});
					}
					wu.showMessage({
						title: "存入失败",
						backgroundColor: 'red',
						duration: 3000
					});

				}
			}
		};
		$.ajax(options);
		return false;
	});
</script>
</body>
</html>
