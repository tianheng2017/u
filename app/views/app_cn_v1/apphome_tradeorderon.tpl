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
        border-top: 1px solid #ffffff42;
        margin: .6em 0 1em 0;
        background: rgba(255, 255, 255, 0.11);

        padding: 1.1rem 3%;

        position: relative;
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
        font-size: 1rem;
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
        color: #D4AF37;
        font-size: 1.2rem;
		position: absolute;
		top: 4.3rem;
		right: 2rem;
    }

    .coininfotxt4 {
        width: 97%;
        text-align: right;
		font-size: .9rem;
		position: absolute;
		top: 6.8rem;
		right: 2rem;
		color: #A8A8A7!important;
    }

    .coininfotxt12 {
        color: #fff;
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

    .user-menu li a img {
        width: 1.7rem;
        height: 1.7rem;
    }

    .user-menu li a:before {
        float: inherit;
    }
	.menu-footer {
		background-color: #242424;
		border-top: 1px solid rgba(62, 62, 62, 0.88);
		color: #D3D3D3;
	}
	.menu-footer li span {
		color: #D3D3D3;
	}
	.page-content{
		background: #2C2C2E;
	}
	.coininfodivlay{
		background: #242426 !important;
		margin-bottom: 5px!important;
		border-top:unset!important;
	}
    .menu-footer{
        border-top: unset;
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
            <ul class="menu-footer clearfix">
                <li>
                    <a href="<{WSURLSHOW('apphome','index')}>" class="external">
                        <img src="<{VIEW_ROOTPATH}>/assets/wap/img/licai.png" alt="" width="22" height="22" style="margin-bottom: 5px;">
                        <span style="color: #505253;">理财</span>
                    </a>
                </li>
                <li>
                    <a href="<{WSURLSHOW('apphome','tradeorderon')}>" class="external">
                        <img src="<{VIEW_ROOTPATH}>/assets/wap/img/cundan_on.png" alt="" width="22" height="22" style="margin-bottom: 5px;">
                        <span>存单</span>
                    </a>
                </li>
                <li class="active">
                    <a href="<{WSURLSHOW('appuser','index')}>" class="external">
                        <img src="<{VIEW_ROOTPATH}>/assets/wap/img/wode.png" alt="" width="22" height="22" style="margin-bottom: 5px;">
                        <span style="color: #505253;">我的</span>
                    </a>
                </li>
            </ul>
            <div class="page-content" style="padding-bottom: 100px;">
                <div style="height: 60px;line-height: 60px;font-size: 16px;text-align: center;">
                    存单
                </div>
                <div style="height: 120px;width: 95%;background: #242426;border-radius: 12px;margin: 0 auto;">
                    <div style="height: 75px;width: 49%;padding: 20px 3%;display: inline-block;text-align: center;">
                        <p style="color:#727679;">存单总额</p>
                        <p style="font-size: 40px;color: #BC9568;font-weight: bold;"><{$moneya151}></p>
                    </div>
                    <div style="height: 75px;width: 49%;padding: 20px 3%;display: inline-block;text-align: center;">
                        <p style="color:#727679">累积获得回报</p>
                        <p style="font-size: 40px;color: #BC9568;"><{$moneya152}></p>
                    </div>
                    <!--div style="width:100%;">
                        <div style="width: 49%;padding: 15px 3%;display: inline-block">
                            <p style="color:#727679;margin-top: 16px;">昨日存单</p>
                            <p style="font-size: 24px;color: #BC9568;"><{$zmoneya151}></p>
                        </div>
                        <div style="width: 49%;padding: 15px 3%;display: inline-block">
                            <p style="color:#727679">累积获得回报</p>
                            <p style="font-size: 24px;color: #BC9568;"><{$moneya152}></p>
                        </div>
                    </div-->
                </div>
                <div style="height: 55px;line-height: 55px;padding: 0 3%;font-size: 16px;color: #B8B8B8;">
                    持有产品
                </div>
                <{foreach from=$tradeorders item=$tradeorder}>
                <div class="coininfodivlay" style="width: 95%;margin: 0 auto 7px!important;height: 110px;border-radius:12px;cursor: pointer;" id="<{$tradeorder.id}>" onclick="detail(this);">
                    <div style="width:100%;">
                        <div class="coininfotxtdiv">
                            <div class="coininfotxt1">
                                <{$tradeorder.item_name}>
                            </div>
                            <div class="coininfotxt2">
                                <div class="cpck_address" style="font-size:10px;color: #727679!important;position: absolute;top: 5.5rem;">
                                    存单时间：<{$tradeorder.time}>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
						<span style="font-size:12px;text-align:center;color:#727679;border-radius: 1px;min-width:7rem;padding: 5px;display:inline-block;position:absolute;right:.7rem;top: .6rem;">
							项目金额 <{$tradeorder['money']}> 元
						</span>
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
					
                    <div style="width:100%;margin-top:.1rem;">
                        <div class="coininfotxt3" style="color: #BC9568;width: 100%;top: 2.3rem;right: 1rem;">
                            +<{$tradeorder.sy}>
                        </div>
                    </div>
                    <div style="text-align: right;color: #727679;font-size: 10px;position: absolute;top: 5.5rem;right: .8rem;">
                        <span>收益时间：<{$tradeorder.stime}></span>
                    </div>
                </div>
                <{/foreach}>
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
    function detail(obj) {
        var id = $(obj).attr('id');
        window.location.href = '/apphome/tradeorderon_detail/id/' + id;
    }
    $(document).ready(function () {
        function gettraorderonallData() {
            $.get("<{WSURLSHOW($WsCtrlClass,'gettraorderonallData')}>?" + Math.random(), function (json) {
                var data = JSON.parse(json);
                if (data.state == "success") {


                    $('.profit_p').html('<img style="height:1em;vertical-align: sub;" class="xuanzhuns1" src="<{VIEW_ROOTPATH}>/assets/wap/images/stop01.png" />已完成');


                    //console.log(data);
                    for (var index in data.data) {
                        var datai = data.data[index];

                        //console.log(datai);

                        if (datai.state == 1) {
                            $('.profit_' + datai.id).html('<span style="color:#f0982d;">' + datai.profit + '</span>');
                        }

                    }

                }
            });
        }

        gettraorderonallData();
        setInterval(gettraorderonallData, 1000);
    });
</script>
</body>
</html>
