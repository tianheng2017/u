<?php
/* Smarty version 3.1.30, created on 2020-05-04 08:02:30
  from "E:\u.xiangxin.me\app\views\admin_v1\adminuser_withdrawaled.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eaf5b960e3e92_34497962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '680195a53e68a65b6a13c7c7ca8f96b2ef398929' => 
    array (
      0 => 'E:\\u.xiangxin.me\\app\\views\\admin_v1\\adminuser_withdrawaled.tpl',
      1 => 1577708648,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:h_l_nav_useradmin.tpl' => 1,
    'file:public/pagination.tpl' => 1,
    'file:r_nav_useradmin.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:public/paginationjs.tpl' => 1,
  ),
),false)) {
function content_5eaf5b960e3e92_34497962 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="container" style="min-height: 800px;">

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
								
								
								
                            <style>
								[type="checkbox"] + label {
									position: relative;
									padding-left: 20px;
									cursor: pointer;
									display: inline-block;
									height: 16px;
									line-height: 16px;
									font-size: 1rem;
									-webkit-user-select: none;
									-moz-user-select: none;
									-khtml-user-select: none;
									-ms-user-select: none;
								}
								
								.allcheckboxdiv .btn {
									height: 26px;
									line-height: 26px;
									padding: 0 0.5em;
								}
                            </style>
							
							
							
                            <div class="col s12 pagecontenttitle">
                                <ul class="collection">
                                    <div class="collection-item"><?php echo $_smarty_tpl->tpl_vars['pagesigntitle']->value;?>
-第<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
页</div>
									
									<div class="input-field col s10">
										<input class="querykeywords" id="querykeywords" name="querykeywords" value="<?php echo $_smarty_tpl->tpl_vars['querykeywords']->value;?>
" placeholder="请输入用户ID或用户名" type="text">
										<label for="first_name">搜索</label>
									</div>
									<div class="input-field col s2">
										<div class="btn cyan waves-effect waves-light right seabtna">查询
											<i class="mdi-content-send right"></i>
										</div>
									</div>
                                </ul>
                            </div>


							<style>
								.dif_span{
									width:5em;
									overflow: hidden;
									display: inline-block;
									background: rgba(159, 188, 212, 0.39);
									text-align:center;
									border-bottom:1px solid #fff;
								}
								
								.dif_span2{
									min-width:10em;
									width:10em;
									overflow: hidden;
									display: inline-block;
									text-align:left;
								}
							</style>
							
							
                            <div class="col s12">
																								
								<form class="s12" id="pdataform">
							
                                <table class="striped" style="border: 1px solid #bdbdbd;">
                                    <thead>
                                    <tr>
										<th data-field="">ID</th>
                                        <th data-field="">用户ID</th>

										
										<th data-field="">用户名</th>
										
										<th data-field="">金额</th>
                                        <th data-field="">手续费</th>
                                        
										<th data-field="">币种</th>
										
										<th data-field="">钱包地址</th>
										
										<th data-field="">提现类型</th>
										
										<th data-field="">状态</th>
										
										<th data-field="">时间</th>
										
										
										
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'datai');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['datai']->value) {
?>
                                    <tr class="usertr<?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
">
										<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['datai']->value['id'];?>
</td>
										<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['datai']->value['uid'];?>
</td>
										<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['datai']->value['username'];?>
</td>
										<td class="tdtcenter" style="font-weight: bold;font-style: italic;"><?php echo $_smarty_tpl->tpl_vars['datai']->value['money'];?>
</td>
										<td class="tdtcenter"><?php echo $_smarty_tpl->tpl_vars['datai']->value['presentationfee'];?>
</td>
										
										<td class="tdtcenter fontweight100"><?php echo $_smarty_tpl->tpl_vars['datai']->value['coin'];?>
</td>
										
										<td class="tdtcenter fontweight100"><?php echo $_smarty_tpl->tpl_vars['datai']->value['address'];?>
</td>
										
										
										<td class="tdtcenter fontweight100">
											<?php if ($_smarty_tpl->tpl_vars['datai']->value['mtype'] == 1) {?>
											USDT提现
											<?php } elseif ($_smarty_tpl->tpl_vars['datai']->value['mtype'] == 2) {?>
											佣金提现
											<?php } else { ?>
											其它
											<?php }?>
										</td>
										
										
										<?php if ($_smarty_tpl->tpl_vars['datai']->value['state'] == 1) {?>
										<td class="tdtcenter" style="background: rgba(91, 211, 96, 0.2);color:#000;">	审核中</td>
										<?php } elseif ($_smarty_tpl->tpl_vars['datai']->value['state'] == -1) {?>
										<td class="tdtcenter" style="background: rgba(255, 90, 146, 0.2);color:#000;">	失败</td>
										<?php } elseif ($_smarty_tpl->tpl_vars['datai']->value['state'] == 2) {?>
										<td class="tdtcenter" style="background: rgba(0, 188, 212, 0.2);color:#000;">	成功</td>
										<?php } else { ?>
										<td class="tdtcenter" style="background: #fff;color:#000;">	其它</td>
										<?php }?>
										
										
										
										
										
										
										<td class="tdtcenter fontcolorb6b6b6 fontweight100"><?php echo $_smarty_tpl->tpl_vars['datai']->value['time'];?>
</td>
										
										
										
                                    </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </tbody>
                                </table>
								
								
								
								</form>
								
								
                                


								<?php $_smarty_tpl->_subTemplateRender("file:public/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




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
        
		
		
        $(".seabtna").click(function () {
            self.location = '<?php echo WSURLSHOW($_smarty_tpl->tpl_vars['WsCtrlClass']->value,$_smarty_tpl->tpl_vars['pagesign']->value);?>
/querykeywords/'+$(".querykeywords").val();
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
