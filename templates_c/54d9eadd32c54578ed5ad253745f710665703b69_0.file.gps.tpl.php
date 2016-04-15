<?php /* Smarty version 3.1.27, created on 2016-03-05 01:40:28
         compiled from "/var/www/html/ira_api2/templates/default/Api/gps.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:190856832456da2afc9cbba7_92428781%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54d9eadd32c54578ed5ad253745f710665703b69' => 
    array (
      0 => '/var/www/html/ira_api2/templates/default/Api/gps.tpl',
      1 => 1457138131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190856832456da2afc9cbba7_92428781',
  'variables' => 
  array (
    'gps_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56da2afc9daa98_47334523',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56da2afc9daa98_47334523')) {
function content_56da2afc9daa98_47334523 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '190856832456da2afc9cbba7_92428781';
if (count($_smarty_tpl->tpl_vars['gps_params']->value) !== 0) {?>
<iframe width="100%" height="98%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo $_smarty_tpl->tpl_vars['gps_params']->value['latitude'];?>
,<?php echo $_smarty_tpl->tpl_vars['gps_params']->value['longitude'];?>
&hl=es;z=14&amp;output=embed"></iframe>
<?php }

}
}
?>