<?php
/* Smarty version 3.1.30, created on 2020-05-04 21:55:37
  from "E:\u.xiangxin.me\app\views\admin_v1\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eb01ed966b511_58309857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4149104a9ea0d554de92f3f12087118370613140' => 
    array (
      0 => 'E:\\u.xiangxin.me\\app\\views\\admin_v1\\footer.tpl',
      1 => 1563617822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb01ed966b511_58309857 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="page-footer">
	<div class="container">

	</div>
	<div class="footer-copyright">
		<div class="container">
			Copyright © <?php echo date('Y',time());?>
  <?php echo $_smarty_tpl->tpl_vars['webconfig']->value['webtitle']['val'];?>
 . All rights reserved
			<span class="right"> <?php echo $_smarty_tpl->tpl_vars['webconfig']->value['webtitle']['val'];?>
(China)  </span>
		</div>
	</div>
</footer><?php }
}
