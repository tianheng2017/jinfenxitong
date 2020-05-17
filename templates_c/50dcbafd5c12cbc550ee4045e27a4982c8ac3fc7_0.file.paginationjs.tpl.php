<?php
/* Smarty version 3.1.30, created on 2020-05-17 20:16:38
  from "/www/wwwroot/jinfenxitong.com/app/views/admin_v1/public/paginationjs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec12b264e2031_69377770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50dcbafd5c12cbc550ee4045e27a4982c8ac3fc7' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/admin_v1/public/paginationjs.tpl',
      1 => 1588603624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec12b264e2031_69377770 (Smarty_Internal_Template $_smarty_tpl) {
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
