<?php /* Smarty version 3.1.27, created on 2015-11-25 16:49:14
         compiled from "/var/www/html/templates/admin/add_article.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:57912762956562cda7edd10_71961667%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f384194ad85960bf4f612ac899e696a6b63d46c8' => 
    array (
      0 => '/var/www/html/templates/admin/add_article.tpl',
      1 => 1447163125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57912762956562cda7edd10_71961667',
  'variables' => 
  array (
    'PHP_SELF_ACTION' => 0,
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56562cda81c3a0_02541679',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56562cda81c3a0_02541679')) {
function content_56562cda81c3a0_02541679 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '57912762956562cda7edd10_71961667';
echo $_smarty_tpl->getSubTemplate ("admin/misc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="wrapper">

<?php echo $_smarty_tpl->getSubTemplate ("admin/misc/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  
<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Добавити нове оголошення</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="col-lg-6">
                        <form enctype="multipart/form-data" role="form" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF_ACTION']->value;?>
" method="post">
                            <div class="form-group">
                                <label>Додати назву</label>
                                <input name="title" type="text" class="form-control" value="" required>
                            </div>
                            <div class="form-group">
                                <label>Подати ціну</label>
                                <input name="price" type="text" class="form-control" value="" required>
                            </div>

                            <div class="form-group">
                                <label>Подати короткий опис</label>
                                <textarea name="a_desc" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Вибрати категорію</label>
                                <select name="cat_id" class="form-control">
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
                                    <option  value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
}
?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Прикріпити фотографії</label>
                                <input name="userfile" type="file">
                            </div>
                            <div class="form-group">
                                <input hidden type="text" name="action" value="add_article" />
                                <input type="submit" class="btn btn-default" value="Добавити оголошення" />
                            </div>
                        </form>
                    </div>
                    <!-- /.panel -->

                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
    </div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/misc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>