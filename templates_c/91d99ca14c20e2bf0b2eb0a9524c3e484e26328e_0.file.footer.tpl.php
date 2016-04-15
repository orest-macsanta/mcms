<?php /* Smarty version 3.1.27, created on 2015-12-03 06:17:29
         compiled from "/var/www/html/templates/admin/misc/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1093780714566024c99b5f40_31168167%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91d99ca14c20e2bf0b2eb0a9524c3e484e26328e' => 
    array (
      0 => '/var/www/html/templates/admin/misc/footer.tpl',
      1 => 1446496268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1093780714566024c99b5f40_31168167',
  'variables' => 
  array (
    'TPL_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566024c99bdc53_69599020',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566024c99bdc53_69599020')) {
function content_566024c99bdc53_69599020 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1093780714566024c99b5f40_31168167';
?>
    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Metis Menu Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>

    <!-- Morris Charts JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/bower_components/raphael/raphael-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/bower_components/morrisjs/morris.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/js/morris-data.js"><?php echo '</script'; ?>
>

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
}
?>