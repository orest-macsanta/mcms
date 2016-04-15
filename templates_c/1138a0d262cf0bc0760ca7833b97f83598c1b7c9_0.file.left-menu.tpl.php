<?php /* Smarty version 3.1.27, created on 2016-02-17 14:37:47
         compiled from "/var/www/html/ira_api/templates/default/misc/left-menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2911855956c477ab538007_38621643%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1138a0d262cf0bc0760ca7833b97f83598c1b7c9' => 
    array (
      0 => '/var/www/html/ira_api/templates/default/misc/left-menu.tpl',
      1 => 1447419562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2911855956c477ab538007_38621643',
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'BASE_URL' => 0,
    'TPL_URL' => 0,
    'TEMPLATE' => 0,
    'sub_cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c477ab550326_92375348',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c477ab550326_92375348')) {
function content_56c477ab550326_92375348 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2911855956c477ab538007_38621643';
?>
<div class="left">

	<ul>
	<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$foreach_category_Sav = $_smarty_tpl->tpl_vars['category'];
?>
		<?php if ($_smarty_tpl->tpl_vars['category']->value['parent_id'] == 0) {?>
		<li class="mt-hov">
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/products?cat=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
				<div style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['category']->value['ico'];?>
.png');" class="position-categories <?php echo $_smarty_tpl->tpl_vars['category']->value['ico'];?>
"></div>
				<span><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</span>
			</a>
			<div class="submenu">
				<ul>
				<?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sub_cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sub_cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sub_cat']->value) {
$_smarty_tpl->tpl_vars['sub_cat']->_loop = true;
$foreach_sub_cat_Sav = $_smarty_tpl->tpl_vars['sub_cat'];
?>
					<?php if ($_smarty_tpl->tpl_vars['sub_cat']->value['parent_id'] == $_smarty_tpl->tpl_vars['category']->value['id']) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/products?cat=<?php echo $_smarty_tpl->tpl_vars['sub_cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub_cat']->value['title'];?>
</a></li>
					<?php }?>
				<?php
$_smarty_tpl->tpl_vars['sub_cat'] = $foreach_sub_cat_Sav;
}
?>
				</ul>
			</div>
		</li>
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
}
?>
	</ul>
</div><?php }
}
?>