<?php /* Smarty version 3.1.27, created on 2016-03-14 16:34:00
         compiled from "/var/www/html/ira_api2/templates/default/Monuments/import.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:127376978656e6d9e88e4d21_73483378%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4154e88e5f25a3cdfbcfb3905728d57ee892ff74' => 
    array (
      0 => '/var/www/html/ira_api2/templates/default/Monuments/import.tpl',
      1 => 1456501004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127376978656e6d9e88e4d21_73483378',
  'variables' => 
  array (
    'import_error' => 0,
    'i_error' => 0,
    'import_json_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56e6d9e891e342_04533425',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56e6d9e891e342_04533425')) {
function content_56e6d9e891e342_04533425 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '127376978656e6d9e88e4d21_73483378';
if (isset($_smarty_tpl->tpl_vars['import_error']->value)) {?>
  <?php if (count($_smarty_tpl->tpl_vars['import_error']->value) !== 0) {?>
    <?php
$_from = $_smarty_tpl->tpl_vars['import_error']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i_error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i_error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i_error']->value) {
$_smarty_tpl->tpl_vars['i_error']->_loop = true;
$foreach_i_error_Sav = $_smarty_tpl->tpl_vars['i_error'];
?>
      <?php echo $_smarty_tpl->tpl_vars['i_error']->value;?>
<br/>
    <?php
$_smarty_tpl->tpl_vars['i_error'] = $foreach_i_error_Sav;
}
?>
    <?php } else { ?>
      File was imported succesfull!
  <?php }?>
<?php }?>

<form enctype="multipart/form-data" action="" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Import JSON file: <br/><input name="json_import" type="file" /><br/>
    <input type="submit" value="Send File" />
</form>

<?php if (isset($_smarty_tpl->tpl_vars['import_json_data']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['import_json_data']->value;?>

<?php }

}
}
?>