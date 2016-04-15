<?php /* Smarty version 3.1.27, created on 2015-12-08 13:37:29
         compiled from "/var/www/html/templates/default/main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:113252134656672369c45578_76722042%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd52af9a645864e4adb32dd2ec12fcdc69b28824' => 
    array (
      0 => '/var/www/html/templates/default/main.tpl',
      1 => 1447190855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113252134656672369c45578_76722042',
  'variables' => 
  array (
    'TEMPLATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56672369c78ad4_70570941',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56672369c78ad4_70570941')) {
function content_56672369c78ad4_70570941 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '113252134656672369c45578_76722042';
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<section>
	<div class="container">
		<div class="categories">
			<div class="block">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/left-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/main-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

			</div>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/top_articles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

		</div>
	</div>
</section>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>