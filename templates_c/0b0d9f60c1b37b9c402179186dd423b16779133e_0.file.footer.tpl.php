<?php
/* Smarty version 3.1.30, created on 2020-05-17 20:16:11
  from "/www/wwwroot/jinfenxitong.com/app/views/admin_v1/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec12b0bc3bb02_61240317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b0d9f60c1b37b9c402179186dd423b16779133e' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/admin_v1/footer.tpl',
      1 => 1588603624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec12b0bc3bb02_61240317 (Smarty_Internal_Template $_smarty_tpl) {
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
