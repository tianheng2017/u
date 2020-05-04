<?php
/* Smarty version 3.1.30, created on 2020-05-04 08:29:26
  from "E:\u.xiangxin.me\app\views\admin_v1\adminuser_itemadd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eaf61e6394378_94640038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cddb1f122e883a1c1e6d7a9dde952a36758a8cc' => 
    array (
      0 => 'E:\\u.xiangxin.me\\app\\views\\admin_v1\\adminuser_itemadd.tpl',
      1 => 1588551446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:h_l_nav_useradmin.tpl' => 1,
    'file:r_nav_useradmin.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:public/paginationjs.tpl' => 1,
  ),
),false)) {
function content_5eaf61e6394378_94640038 (Smarty_Internal_Template $_smarty_tpl) {
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
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title><?php echo $_smarty_tpl->tpl_vars['pagesigntitle']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['webconfig']->value['webtitle']['val'];?>
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

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container" style="min-height: 600px;">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12">
                                <div class="card-panel">
                                    <h4 class="header2"><?php echo $_smarty_tpl->tpl_vars['pagesigntitle']->value;?>
</h4>
                                    <div class="row">
                                        <form class="col s12" id="dataform">
                                            <div class="row">

                                                <div class="input-field col s6">
                                                    <input id="username" name="item_name" type="text">
                                                    <label for="username">项目名称</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input id="price" name="price" type="text">
                                                    <label for="price">项目金额</label>
                                                </div>
												<div class="input-field col s6" style="display:;">
                                                    <input id="passwordtwo" value="" name="arate" type="text">
                                                    <label for="passwordtwo">年化率（%）</label>
                                                </div>
												<div class="input-field col s6" style="display:;">
                                                    <input id="passwordtwo" value="" name="day_num" type="text">
                                                    <label for="passwordtwo">投资天数</label>
                                                </div>
                                                <div class="input-field col s6" style="display:;">
                                                    <input id="password" value="" name="desc" type="text">
                                                    <label for="password">描述</label>
                                                </div>
												<div class="input-field col s6" style="display:;">
                                                    <input id="passwordtwo" value="" name="rrule" type="text">
                                                    <label for="passwordtwo">收益规则</label>
                                                </div>
												<div class="input-field col s6" style="display:;">
                                                    <input id="passwordtwo" value="" name="srule" type="text">
                                                    <label for="passwordtwo">存入规则</label>
                                                </div>
												<div class="input-field col s6">
                                                    <input id="username" name="deposit_time" type="text">
                                                    <label for="username">存入时间</label>
                                                </div>
                                                <div class="input-field col s6" style="display:;">
                                                    <input id="password" value="" name="sec_time" type="text">
                                                    <label for="password">取出时间</label>
                                                </div>
                                                <div class="input-field col s6" style="display:;">
                                                    <input id="password" value="0" name="isty" type="number">
                                                    <label for="password">类型：0.普通项目 1.新手体验金项目</label>
                                                </div>
                                                <div class="input-field col s6" style="display:;">
                                                    <input id="password" value="0.0000" name="tymoney" type="text">
                                                    <label for="password">体验金额度</label>
                                                </div>
                                                <div class="input-field col s6" style="display:;">
                                                    <input id="coupon" value="0" name="coupon" type="text">
                                                    <label for="password">赠送优惠券金额（0为不赠送）</label>
                                                </div>
                                                <div class="input-field col s6" style="display:;">
                                                    <input id="coupon_expire" value="3" name="coupon_expire" type="text">
                                                    <label for="password">优惠券有效期几个月</label>
                                                </div>
                                                <!--  <div class="input-field col s6" style="display:;">
                                                 <input id="passwordtwo" value="" name="yield_time" type="text">
                                                 <label for="passwordtwo">收益时间</label>
                                             </div>

                                         <div class="input-field col s12">
                                                 <input id="remarks" name="remarks" type="text" value="">
                                                 <label for="remarks">备注</label>
                                             </div> -->
                                            </div>
                                            <div class="row adddiv">
                                                <div class="input-field col s12">
                                                    <div class="btn cyan waves-effect waves-light right btnvideoadd">添加
                                                        <i class="mdi-content-send right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row jxadddiv" style="display: none">
                                                <div class="input-field col s12">
                                                    <div class="btn cyan waves-effect waves-light right btnjxadd">继续添加
                                                        <i class="mdi-content-send right"></i>
                                                    </div>
                                                </div>
                                                <div class="input-field col s12">
                                                    <div class="btn right disabled">添加！！
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
                    <!--card stats end-->


                    <!-- //////////////////////////////////////////////////////////////////////////// -->


                </div>
                <!--end container-->
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
        $(".btnvideoadd").click(function () {
            $(".adddiv").fadeOut();$(".jxadddiv").fadeIn();
            var options = {
                url: "<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,'itemadd_do');?>
",
                type: 'post',
                dataType: 'text',
                data: $("#dataform").serialize(),
                success: function (data) {
				//alert(data);
					
					if (data.length > 0) {
						if (data == "成功") {
							Materialize.toast('<span style="color: #0fef72">添加成功!</span>', 3000);
						}
						if (data !="成功") {
							Materialize.toast('<span style="color: #ef192c">'+data+'</span>', 3000);
						}
					}
                }
            };
            $.ajax(options);
            return false;
        });
        $(".btnjxadd").click(function () {
            $(".jxadddiv").fadeOut();$(".adddiv").fadeIn();
        });
		
    <?php echo '</script'; ?>
>
	
	<?php $_smarty_tpl->_subTemplateRender("file:public/paginationjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


	
    <!--prism-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo VIEW_ROOTPATH;?>
/assets/exquisiteui/js/prism.js"><?php echo '</script'; ?>
>
</body>

</html>
<?php }
}
