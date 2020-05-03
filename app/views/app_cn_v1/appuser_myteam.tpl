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
	ul li{
		width: 95%;
		margin: 2px auto 0;
		background:rgba(36,36,38,1);
		border-radius:12px;
		list-style: none;
		padding: 15px;
		cursor: pointer;
		margin-bottom: 10px;
	}
</style>
<style type="text/css">
	.progress_bar .pro-bar {
        background: hsl(53, 28%, 24%);
        box-shadow: 0 1px 2px hsla(0, 0%, 0%, 0.1) inset;
        height:3px;
        margin-bottom: 12px;
        margin-top: 30px;
        position: relative;
    }
    .progress_bar .progress_bar_title{
        /*color: hsl(218, 4%, 50%);*/
        color: #D5D6E2;
        font-size: 11px;
        font-weight: 300;
        position: relative;
        top: -28px;
        z-index: 1;
    }
    .progress_bar .progress_number{
        float: right;
        font-size: 11px;
        margin-top: -24px;
    }
    .progress_bar .progress-bar-inner {
        background-color: hsl(0, 0%, 88%);
        display: block;
        width: 0;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transition: width 1s linear 0s;
        animation: animate-positive 2s;
    }
    @-webkit-keyframes animate-positive{
        0% { width: 0%; }
    }
    @keyframes animate-positive{
        0% { width: 0%; }
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
							我的邀请
						</div>
						<div onclick="javascript:window.location.href='/appuser/invitation'" style="color: #727679;display: inline-block;width: 80px;text-align: right;cursor: pointer;">
							邀请码
						</div>
					</div>
				</div>
				<div style="padding-top:90px;width: 100%;text-align: center;padding-bottom: 28px;border-bottom: 13px solid #242426;">
					<div style="color: #727679;font-size: 14px;">
						<span>我的团队返利金额</span>
						<img src="<{VIEW_ROOTPATH}>/assets/wap/img/msg.png" alt="" style="cursor: pointer;vertical-align: middle;margin-left: 3px;"onclick="javascript:window.location.href='/appuser/cashbackinfo'">
					</div>
					<div style="color: #BC9568;font-size: 30px;line-height: 65px;">
						<{$teamfanli}>
					</div>
					<div style="color: #727679;font-size: 14px;margin-top: 7px;">
						<div style="display:inline-block;width: 49%;text-align: center;">
							<span>一级下线</span>
							<span style="color: #fff;margin-left: 3px;"><{$countteaml1}> 人</span>
						</div>
						<div style="display:inline-block;width: 49%;text-align: center;">
							<span>二级下线</span>
							<span style="color: #fff;margin-left: 3px;"><{$countteaml2}> 人</span>
						</div>
					</div>
				</div>
				<div style="width: 100%;padding: 10px">
					<ul>
						<{foreach from=$tradeorders item=$tradeorder}>
						<li>
							<div>
								<div style="width: 49%;font-size: 16px;text-align: left;display: inline-block;">
									下级ID<{$tradeorder['uid']}>
								</div>
								<div style="width: 49%;font-size: 13px;color: #727679;text-align: right;display: inline-block;">
									<span>项目金额</span>
									<span STYLE="margin-left: 5px;"><{$tradeorder['money']}>元</span>
								</div>
							</div>
							<div style="margin-top: 10px;">
								<div style="width: 49%;font-size: 13px;color:#727679;text-align: left;display: inline-block;">
									<span>下级提成比例</span>
									<span><{$bili}>%</span>
								</div>
								<div style="width: 49%;font-size: 14px;color: #BC9568;text-align: right;display: inline-block;">
									返利<{number_format($tradeorder['smoney']-$tradeorder['money'],2,'.','')}>元
								</div>
							</div>
							
							
							<div class="progress_bar">
								<div class="pro-bar">
									<{if $tradeorder.timesv<=25}>
									<{$tradeorder.timesv = 25}>
									<span style="width: 7px;height: 7px;background: #d7a973;border-radius: 50%;position: absolute;left: 25%;top: -2px;margin-left:-3.5px;"></span>
									<span style="width: 7px;height: 7px;background: #514e36;border-radius: 50%;position: absolute;left: 50%;top: -2px;margin-left:-3.5px;"></span>
									<span style="width: 7px;height: 7px;background: #514e36;border-radius: 50%;position: absolute;left: 75%;top: -2px;margin-left:-3.5px;"></span>
									<span class="progress-bar-inner" style="background-color: #d7a973; width: <{$tradeorder.timesv}>%;" data-value="<{$tradeorder.timesv}>" data-percentage-value="<{$tradeorder.timesv}>"></span>
									<{/if}>
									
									<{if $tradeorder.timesv>25 && $tradeorder.timesv<=50}>
									<{$tradeorder.timesv = 50}>
									<span style="width: 7px;height: 7px;background: #d7a973;border-radius: 50%;position: absolute;left: 25%;top: -2px;margin-left:-3.5px;"></span>
									<span style="width: 7px;height: 7px;background: #d7a973;border-radius: 50%;position: absolute;left: 50%;top: -2px;margin-left:-3.5px;"></span>
									<span style="width: 7px;height: 7px;background: #514e36;border-radius: 50%;position: absolute;left: 75%;top: -2px;margin-left:-3.5px;"></span>
									<span class="progress-bar-inner" style="background-color: #d7a973; width: <{$tradeorder.timesv}>%;" data-value="<{$tradeorder.timesv}>" data-percentage-value="<{$tradeorder.timesv}>"></span>
									<{/if}>
									
									<{if $tradeorder.timesv>50 && $tradeorder.timesv<=75}>
									<{$tradeorder.timesv = 75}>
									<span style="width: 7px;height: 7px;background: #d7a973;border-radius: 50%;position: absolute;left: 25%;top: -2px;margin-left:-3.5px;"></span>
									<span style="width: 7px;height: 7px;background: #d7a973;border-radius: 50%;position: absolute;left: 50%;top: -2px;margin-left:-3.5px;"></span>
									<span style="width: 7px;height: 7px;background: #d7a973;border-radius: 50%;position: absolute;left: 75%;top: -2px;margin-left:-3.5px;"></span>
									<span class="progress-bar-inner" style="background-color: #d7a973; width: <{$tradeorder.timesv}>%;" data-value="<{$tradeorder.timesv}>" data-percentage-value="<{$tradeorder.timesv}>"></span>
									<{/if}>
									
									<{if $tradeorder.timesv>75}>
									<{$tradeorder.timesv = 100}>
									<span style="width: 7px;height: 7px;background: #d7a973;border-radius: 50%;position: absolute;left: 25%;top: -2px;margin-left:-3.5px;"></span>
									<span style="width: 7px;height: 7px;background: #d7a973;border-radius: 50%;position: absolute;left: 50%;top: -2px;margin-left:-3.5px;"></span>
									<span style="width: 7px;height: 7px;background: #d7a973;border-radius: 50%;position: absolute;left: 75%;top: -2px;margin-left:-3.5px;"></span>
									<span class="progress-bar-inner" style="background-color: #d7a973; width: <{$tradeorder.timesv}>%;" data-value="<{$tradeorder.timesv}>" data-percentage-value="<{$tradeorder.timesv}>"></span>
									<{/if}>
								</div>
							</div>
							
							
							<div style="position: relative;">
								<div style="width: 49%;font-size: 5px;color:#727679;text-align: left;display: inline-block;">
									<span>存单时间</span>
									<span><{$tradeorder.time}></span>
								</div>
								<div style="text-align: right;color: #727679;font-size: 10px;position: absolute;top: 0.1rem;right: 0;">
									<span>收益时间</span>
									<span><{$tradeorder.stime}></span>
								</div>
							</div>
						</li>
						<{/foreach}>
					</ul>
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
	$(function(){
		var progress = $(".progress-bar-inner");
		progress.each(function (i)
		{
			var data = $(this).attr('data-value');
			$(this).prev().find("span").html(data+"%");
		});
	});
</script>
<script type="text/javascript">
	$('#start').on('click',function () {
		window.location.href = '/apphome/itemstart/id/' + <{$id}>;
	});
</script>
</body>
</html>