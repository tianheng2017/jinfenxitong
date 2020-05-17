<?php
/* Smarty version 3.1.30, created on 2020-05-17 20:16:38
  from "/www/wwwroot/jinfenxitong.com/app/views/admin_v1/public/pagination.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec12b264dba35_72046580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c03ffd3a8d9d06ddbb8a84e6e4176ab100213679' => 
    array (
      0 => '/www/wwwroot/jinfenxitong.com/app/views/admin_v1/public/pagination.tpl',
      1 => 1588603624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec12b264dba35_72046580 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
.pagination2 li {
    font-size: 1rem;
    float: left;
    padding: 0 0px;
    line-height: 30px;
    margin: 0 5px;
    border-radius: 1px;
    text-align: center;
	border: 1px solid #a2a2a2;
}
.pagination2 li a {
    padding: 0 5px;
}
</style>

<?php if (!$_smarty_tpl->tpl_vars['pagenum']->value) {?>
<div class="collection-item datanonetxt">已无更多数据！</div>
<?php }?>



<div class="col s12 paginationdiv">
	<ul class="pagination pagination2">
		<?php if ($_smarty_tpl->tpl_vars['pallnum']->value > 10) {?>
		<li class="active" style="background-color: #ff62b1;"><a href="<?php echo INSTALL_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['WsCtrlClass']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/1<?php echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
">1</a></li>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['page']->value <= 1) {?>
		<li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>
		<?php } else { ?>
		<li class="waves-effect"><a href="<?php echo INSTALL_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['WsCtrlClass']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value-1;
echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
"><i class="mdi-navigation-chevron-left"></i></a></li>
		<?php }?>
		<?php
$_smarty_tpl->tpl_vars['fooi'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['fooi']->step = 1;$_smarty_tpl->tpl_vars['fooi']->total = (int) ceil(($_smarty_tpl->tpl_vars['fooi']->step > 0 ? $_smarty_tpl->tpl_vars['pallnume']->value+1 - ($_smarty_tpl->tpl_vars['pallnums']->value) : $_smarty_tpl->tpl_vars['pallnums']->value-($_smarty_tpl->tpl_vars['pallnume']->value)+1)/abs($_smarty_tpl->tpl_vars['fooi']->step));
if ($_smarty_tpl->tpl_vars['fooi']->total > 0) {
for ($_smarty_tpl->tpl_vars['fooi']->value = $_smarty_tpl->tpl_vars['pallnums']->value, $_smarty_tpl->tpl_vars['fooi']->iteration = 1;$_smarty_tpl->tpl_vars['fooi']->iteration <= $_smarty_tpl->tpl_vars['fooi']->total;$_smarty_tpl->tpl_vars['fooi']->value += $_smarty_tpl->tpl_vars['fooi']->step, $_smarty_tpl->tpl_vars['fooi']->iteration++) {
$_smarty_tpl->tpl_vars['fooi']->first = $_smarty_tpl->tpl_vars['fooi']->iteration == 1;$_smarty_tpl->tpl_vars['fooi']->last = $_smarty_tpl->tpl_vars['fooi']->iteration == $_smarty_tpl->tpl_vars['fooi']->total;?>
		<li class="<?php if ($_smarty_tpl->tpl_vars['fooi']->value == $_smarty_tpl->tpl_vars['page']->value) {?>active<?php } else { ?>waves-effect<?php }?>"><a href="<?php echo INSTALL_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['WsCtrlClass']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['fooi']->value;
echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['fooi']->value;?>
</a></li>
		<?php }
}
?>

		<?php if ($_smarty_tpl->tpl_vars['pallnum']->value <= $_smarty_tpl->tpl_vars['page']->value) {?>
		<li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>
		<?php } else { ?>
		<li class="waves-effect"><a href="<?php echo INSTALL_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['WsCtrlClass']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value+1;
echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
"><i class="mdi-navigation-chevron-right"></i></a></li>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['pallnum']->value > 10) {?>
		<li class="active" style="background-color: #ff62b1;"><a href="<?php echo INSTALL_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['WsCtrlClass']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pagesign']->value;?>
/page/<?php echo $_smarty_tpl->tpl_vars['pallnum']->value;
echo $_smarty_tpl->tpl_vars['pagehrefadd']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pallnum']->value;?>
</a></li>
		<?php }?>
		
		<li><input style="width: 4em;font-size: 12px;height: 2em;margin: 0;" class="selpagev" value="" placeholder="页码" type="text"></li>
			
		<li class="active selpagebtn" id="selpagebtn" style="background-color: #ff62b1;"><a href="javascript:;">跳转</a></li>
		<li style="color: #686868;border: none;">共<?php echo $_smarty_tpl->tpl_vars['dallnumcount']->value;?>
条数据</li>
	</ul>

</div><?php }
}
