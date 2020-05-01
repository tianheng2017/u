<?php
/* Smarty version 3.1.30, created on 2020-05-01 13:23:00
  from "E:\u.xiangxin.me\app\views\admin_v1\admin_home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eabb23432b642_18928673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0806b66c1b4be706905963a739037fd973cda447' => 
    array (
      0 => 'E:\\u.xiangxin.me\\app\\views\\admin_v1\\admin_home.tpl',
      1 => 1577714814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:h_l_nav_useradmin.tpl' => 1,
    'file:r_nav_useradmin.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5eabb23432b642_18928673 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 1.0
	Author: GeeksLabs
	
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>系统配置-<?php echo $_smarty_tpl->tpl_vars['webconfig']->value['webtitle']['val'];?>
</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->    
    <link href="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
    <style>
        .cyan {
            background-color: #2C2C2E !important;
        }
        .side-nav li{
            background: #2c2c2e;
        }
        .cyan.darken-2{
            background-color: #2c2c2e!important;
        }
        ul.side-nav.fixed{
            background: #2c2c2e;
        }
        ul.side-nav.fixed li:hover, ul.side-nav.fixed li.active{
            background-color: #454850;
        }
    </style>
</head>

<body>
            <!-- Start Page Loading --><!-- START HEADER --><!-- START LEFT SIDEBAR NAV-->
            <?php $_smarty_tpl->_subTemplateRender("file:h_l_nav_useradmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- End Page Loading --><!-- END HEADER --><!-- END LEFT SIDEBAR NAV-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">
                    <div class="section">


                        <!--Basic Form-->
                        <div id="basic-form" class="section">
                            <div class="row">

                                <div class="col s12">
                                    <div class="card-panel">
                                        <div class="row">
                                            <form class="col s12">
                                                <div class="row">
                                                    <a class="btn waves-effect waves-light left" href="javascript:location.reload();" target="_self">刷新</a>
                                                    <a class="btn waves-effect waves-light right" href="<?php echo WSURLSHOW();?>
" target="_blank">进入网站首页</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            
							
							
							
							
							
							
							
							
							
							
							
							
							
							<div class="row">
								
								<style>
									
								</style>
								
								
								<div class="col s12">
																									
									<form class="s12 card-panel" id="pdataform">
								
										<ul id="projects-collection" class="collection">
											<li class="collection-item avatar">
												<i class="mdi-notification-event-available circle light-blue darken-2"></i>
												<span class="collection-header">统计报表</span>
												<p id="boxtimev"></p>
												<div class="secondary-content">
													
													<i style="vertical-align: text-bottom;position: initial;color:#fff;font-size: 16px;width: 16px;height: 16px;line-height: 16px;text-align: center;" class="mdi-action-accessibility circle purple darken-2 xuanzhuns1"></i>
													
													<i style="vertical-align: text-bottom;position: initial;color:#fff;font-size: 16px;width: 16px;height: 16px;line-height: 16px;text-align: center;" class="mdi-action-track-changes circle light-blue darken-2 xuanzhuns1"></i>
													
												</div>
											</li>
											
											
											<li class="collection-item openriskilay">
												<div class="row">
													<div class="col s4">
														<p class="collections-title">注册总人数</p>
														<p class="collections-content"></p>
													</div>
													<div class="col s2">
														<i style="color:#fff;font-size:14px;" class="mdi-action-accessibility circle  purple darken-2 xuanzhuns1"></i>
													</div>
													<div class="col s3">
													<span class="task-cat cyan">AllUser</span>
													</div>
													<div style="text-align:right;" class="col s3 alluser">
														Loading···
													</div>
												</div>
											</li>
											
											<li class="collection-item openriskilay">
												<div class="row">
													<div class="col s4">
														<p class="collections-title">接单总金额</p>
														<p class="collections-content"></p>
													</div>
													<div class="col s2">
														<i style="color:#fff;font-size:14px;" class="mdi-action-track-changes circle light-blue darken-2 xuanzhuns1"></i>
													</div>
													<div class="col s3">
													<span class="task-cat cyan">AllInvestment</span>
													</div>
													<div style="text-align:right;" class="col s3 allinvestment">
														Loading···
													</div>
												</div>
											</li>
											
										</ul>
									
									
									
									</form>
									
								</div>


							</div>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							

                            <div class="row">

                                <div class="col s12">
                                    <div class="card-panel">
                                        <h4 class="header2">系统配置</h4>
                                        <div class="row">
                                            <form class="col s12" id="systinfoform">
                                                <div class="row">
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['webconfig']->value, 'webconfigi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['webconfigi']->value) {
?>
                                                    <div class="input-field col s6">
                                                        <input id="<?php echo $_smarty_tpl->tpl_vars['webconfigi']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['webconfigi']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['webconfigi']->value['val'];?>
" type="text">
                                                        <label for="<?php echo $_smarty_tpl->tpl_vars['webconfigi']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['webconfigi']->value['content'];?>
</label>
                                                    </div>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <div class="btn cyan waves-effect waves-light right btnsystinfo">修改
                                                            <i class="mdi-content-send right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
							
							
							<div class="row">

                                <div class="col s12">
                                    <div class="card-panel">
                                        <h4 class="header2">修改资料</h4>
                                        <div class="row">
                                            <form class="col s12" id="umyinfoform">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <i class="mdi-action-lock prefix"></i>
                                                        <input id="password" name="password" value="" type="password">
                                                        <label for="password">密码</label>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <div class="btn cyan waves-effect waves-light right btnumyinfo">修改
                                                            <i class="mdi-content-send right"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            </div>
							
                        </div>

                    </div>
                </div>
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <?php $_smarty_tpl->_subTemplateRender("file:r_nav_useradmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
            <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- END FOOTER -->






    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <?php echo '<script'; ?>
 src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/jquery-1.10.2.js"><?php echo '</script'; ?>
>
    <!--materialize js-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/materialize.min.js"><?php echo '</script'; ?>
>
    <!--scrollbar-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"><?php echo '</script'; ?>
>
       

    <!-- chartist -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/chartist-js/chartist.min.js"><?php echo '</script'; ?>
>

    <!-- chartjs -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/chartjs/chart.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/chartjs/chart-script.js"><?php echo '</script'; ?>
>

    <!-- sparkline -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/sparkline/jquery.sparkline.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/sparkline/sparkline-script.js"><?php echo '</script'; ?>
>
    
    <!--jvectormap-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins/jvectormap/vectormap-script.js"><?php echo '</script'; ?>
>
    
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/plugins.js"><?php echo '</script'; ?>
>
    <!-- Toast Notification -->
    <?php echo '<script'; ?>
 type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span style="color: #ffffff">Welcome!</span>', 4000);
        }, 666);
    });



    $(".btnumyinfo").click(function () {

        var options = {
            url: "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'myinfo_updateform');?>
",
            type: 'post',
            dataType: 'text',
            data: $("#umyinfoform").serialize(),
            success: function (data) {
                if (data.length > 0) {
                    if (data == '成功') {
                        Materialize.toast('<span style="color: #0fef72">修改成功!</span>', 3000);
                    }
                    if (data == '失败') {
                        Materialize.toast('<span style="color: #ef192c">修改失败!</span>', 3000);
                    }
                    if (data == '相同') {
                        Materialize.toast('<span style="color: #ef192c">数据相同，无需修改!</span>', 3000);
                    }
                    if (data == 'none') {
                        Materialize.toast('<span style="color: #ef192c">不可为空哟!</span>', 3000);
                    }
                }
            }
        };
        $.ajax(options);
        return false;
    });

    $(".btnsystinfo").click(function () {

        var options = {
            url: "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'sysinfo_updateform');?>
",
            type: 'post',
            dataType: 'text',
            data: $("#systinfoform").serialize(),
            success: function (data) {
                if (data.length > 0) {
                    if (data == '成功') {
                        Materialize.toast('<span style="color: #0fef72">修改成功!</span>', 3000);
                    }
                    if (data == '失败') {
                        Materialize.toast('<span style="color: #ef192c">修改失败!</span>', 3000);
                    }
                    if (data == '相同') {
                        Materialize.toast('<span style="color: #ef192c">数据相同，无需修改!</span>', 3000);
                    }
                }
            }
        };
        $.ajax(options);
        return false;
    });

    
	
	
	
	
	
	
	
	
	
	
	
		function getCurrentDate(){                    
			var date=new Date();
			var myYear=date.getFullYear();
			var myMonth=date.getMonth()+1;
			myMonth=isSingleDigit(myMonth);            
			var myDate=date.getDate();
			myDate=isSingleDigit(myDate);
			var week=date.getDay();
			var arr=['星期日','星期一','星期二','星期三','星期四','星期五','星期六',]
			var myWeek=arr[week];
			var myHours=date.getHours();
			myHours=isSingleDigit(myHours);
			var myMinutes=date.getMinutes();
			myMinutes=isSingleDigit(myMinutes);
			var mySeconds=date.getSeconds();
			mySeconds=isSingleDigit(mySeconds);
			var separator1='-';
			var separator2=':';
			function isSingleDigit(num){
				if(num >= 0 && num <= 9){
				num='0'+num;
				}
				return num;
			}
			var today=myYear+separator1+myMonth+separator1+myDate+'&nbsp&nbsp'+myWeek+' '+myHours+separator2+myMinutes+separator2+mySeconds;
			var boxtimevoBox=document.getElementById('boxtimev');
			boxtimevoBox.innerHTML=''+today;
		                
		}
		getCurrentDate();     
		setInterval('getCurrentDate()',1000);
		
		
		
		
		
		
		
		
		
		
		
		
		function getData(){
			$.get("<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'getHomeControlData');?>
?" + Math.random(), function(json) {
				var data=JSON.parse(json);
				if(data.state == "success"){
				
					//console.log(data);
					$('.alluser').html(Number(data.data.alluser));
					$('.allinvestment').html(Number(data.data.allinvestment));
					
					$('.alltraprofit1').html(Number(data.data.alltraprofit1));
					$('.alltraprofit2').html(Number(data.data.alltraprofit2));
				}
			});
		}
		
		
		setInterval("getData()",1000);
    <?php echo '</script'; ?>
>


    <!--prism-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/prism.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
