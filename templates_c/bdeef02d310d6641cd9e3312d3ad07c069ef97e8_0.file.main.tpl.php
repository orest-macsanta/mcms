<?php /* Smarty version 3.1.27, created on 2016-03-17 02:23:00
         compiled from "/var/www/html/MFramework/templates/default/Test/main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:111884895456ea06f42b56c1_57088413%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdeef02d310d6641cd9e3312d3ad07c069ef97e8' => 
    array (
      0 => '/var/www/html/MFramework/templates/default/Test/main.tpl',
      1 => 1458177045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111884895456ea06f42b56c1_57088413',
  'variables' => 
  array (
    'res' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ea06f4332405_19860978',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ea06f4332405_19860978')) {
function content_56ea06f4332405_19860978 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '111884895456ea06f42b56c1_57088413';
?>
<h3>Test Module</h3>
<p><?php echo $_smarty_tpl->tpl_vars['res']->value;?>
</p>
<?php }
}
?>