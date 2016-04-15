<?php /* Smarty version 3.1.27, created on 2015-11-27 13:41:28
         compiled from "/var/www/html/templates/admin/categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1587161825658a3d8e3f083_95627762%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb7a8d3856bcb52d67f69ae4ba6f3f6ed038ce86' => 
    array (
      0 => '/var/www/html/templates/admin/categories.tpl',
      1 => 1446721633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1587161825658a3d8e3f083_95627762',
  'variables' => 
  array (
    'AllCategories' => 0,
    'category' => 0,
    'sub_cat' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5658a3d8e7ebd9_33693606',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5658a3d8e7ebd9_33693606')) {
function content_5658a3d8e7ebd9_33693606 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1587161825658a3d8e3f083_95627762';
echo $_smarty_tpl->getSubTemplate ("admin/misc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="wrapper">

<?php echo $_smarty_tpl->getSubTemplate ("admin/misc/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Категорії</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Категорії та підкатегорії
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Назва</th>
                                            <th>Опції</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['AllCategories']->value;
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
                                        <tr class="gradeA">
                                            <td><a class=""><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</a>
                                                <ul class="submenu">
                                                    <?php
$_from = $_smarty_tpl->tpl_vars['AllCategories']->value;
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
                                                            <li><?php echo $_smarty_tpl->tpl_vars['sub_cat']->value['title'];?>
</li>
                                                        <?php }?>
                                                    <?php
$_smarty_tpl->tpl_vars['sub_cat'] = $foreach_sub_cat_Sav;
}
?>
                                                </ul>
                                            </td>
                                            <td class="center" style="text-align:center;">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/admin/categories?action=delete_category&id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" style="margin: 0 5px"><i class="glyphicon glyphicon-remove"></i></a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/admin/categories?action=edit_category&id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" style="margin: 0 5px"><i class="glyphicon glyphicon-edit"></i></a>
                                                <a href="" style="margin: 0 5px"><i class="glyphicon glyphicon-search"></i></a>
                                            </td>
                                        </tr>
                                        <?php }?>
                                        <?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
}
?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/misc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>