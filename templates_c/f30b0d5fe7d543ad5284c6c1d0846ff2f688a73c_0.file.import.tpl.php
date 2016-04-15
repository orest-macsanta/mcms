<?php /* Smarty version 3.1.27, created on 2016-02-28 15:32:45
         compiled from "/var/www/html/ira_api/templates/default/Monuments/import.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:146029435056d3050d62fab5_70126820%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f30b0d5fe7d543ad5284c6c1d0846ff2f688a73c' => 
    array (
      0 => '/var/www/html/ira_api/templates/default/Monuments/import.tpl',
      1 => 1456501003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146029435056d3050d62fab5_70126820',
  'variables' => 
  array (
    'import_error' => 0,
    'i_error' => 0,
    'import_json_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56d3050d64dd50_81578956',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56d3050d64dd50_81578956')) {
function content_56d3050d64dd50_81578956 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '146029435056d3050d62fab5_70126820';
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