<?php
/* Smarty version 3.1.30, created on 2020-05-04 12:01:14
  from "E:\u.xiangxin.me\app\views\admin_v1\public\paginationjs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eaf938a174e91_31840906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f6ac14f19a6913988dfe32b52df2d9741f887e6' => 
    array (
      0 => 'E:\\u.xiangxin.me\\app\\views\\admin_v1\\public\\paginationjs.tpl',
      1 => 1562778452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaf938a174e91_31840906 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
        

	$(".selpagebtn").click(function () {
		self.location = '<?php echo INSTALL_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['WsCtrlClass']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/'+$(".selpagev").val()+'<?php echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
';
	});
	
	
	
	
<?php echo '</script'; ?>
><?php }
}
