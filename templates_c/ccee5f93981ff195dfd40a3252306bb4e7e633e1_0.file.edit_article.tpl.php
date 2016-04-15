<?php /* Smarty version 3.1.27, created on 2015-11-25 16:49:13
         compiled from "/var/www/html/templates/admin/edit_article.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:89894941556562cd9354c50_38044012%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccee5f93981ff195dfd40a3252306bb4e7e633e1' => 
    array (
      0 => '/var/www/html/templates/admin/edit_article.tpl',
      1 => 1446555659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89894941556562cd9354c50_38044012',
  'variables' => 
  array (
    'PHP_SELF_ACTION' => 0,
    'article' => 0,
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56562cd9385d60_55508800',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56562cd9385d60_55508800')) {
function content_56562cd9385d60_55508800 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '89894941556562cd9354c50_38044012';
echo $_smarty_tpl->getSubTemplate ("admin/misc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="wrapper">

<?php echo $_smarty_tpl->getSubTemplate ("admin/misc/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  
<div id="page-wrapper">
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Редагувати оголошення</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="col-lg-6">
                        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF_ACTION']->value;?>
" method="post">
                            <div class="form-group">
                                <label>Редагувати назву</label>
                                <input name="title" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" required>
                            </div>
                            <div class="form-group">
                                <label>Редагувати ціну</label>
                                <input name="price" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['price'];?>
" required>
                            </div>

                            <div class="form-group">
                                <label>Редагувати короткий опис</label>
                                <textarea name="a_desc" class="form-control" rows="3"  required><?php echo $_smarty_tpl->tpl_vars['article']->value['a_desc'];?>
</textarea>
                            </div>
                            <div class="form-group">
                                <label>Редагувати категорію</label>
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
                                    <?php if ($_smarty_tpl->tpl_vars['category']->value['id'] == $_smarty_tpl->tpl_vars['article']->value['cat_id']) {?>
                                    <option selected value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</option>
                                    <?php } else { ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['title'];?>
</option>
                                    <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['category'] = $foreach_category_Sav;
}
?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input hidden type="text" name="action" value="edit_article" />
                                <input hidden type="text" name="art_id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" />
                                <input type="submit" class="btn btn-default" value="Зберегти зміни" />
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