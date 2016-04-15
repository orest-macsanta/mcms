<?php /* Smarty version 3.1.27, created on 2015-11-27 13:40:39
         compiled from "/var/www/html/templates/admin/articles.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13018102815658a3a7384240_53933265%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b8023d90cdbb9bcfcff056fe57ce3b5d726b6d8' => 
    array (
      0 => '/var/www/html/templates/admin/articles.tpl',
      1 => 1446553036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13018102815658a3a7384240_53933265',
  'variables' => 
  array (
    'AllArticles' => 0,
    'article' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5658a3a73d9b20_23300941',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5658a3a73d9b20_23300941')) {
function content_5658a3a73d9b20_23300941 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13018102815658a3a7384240_53933265';
echo $_smarty_tpl->getSubTemplate ("admin/misc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="wrapper">

<?php echo $_smarty_tpl->getSubTemplate ("admin/misc/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Оголошення</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Назва</th>
                                            <th>Короткий опис</th>
                                            <th>Ціна</th>
                                            <th>Категорії</th>
                                            <th>Дата</th>
                                            <th>Опції</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->tpl_vars['AllArticles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['article']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
$foreach_article_Sav = $_smarty_tpl->tpl_vars['article'];
?>
                                        <tr class="gradeA">
                                            <td><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['article']->value['a_desc'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['article']->value['price'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['article']->value['cat_title'];?>
</td>
                                            <td class="center"><?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
</td>
                                            <td class="center" style="text-align:center;">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/admin/articles?action=delete_art&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" style="margin: 0 5px"><i class="glyphicon glyphicon-remove"></i></a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/admin/articles?action=edit_article&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
" style="margin: 0 5px"><i class="glyphicon glyphicon-edit"></i></a>
                                                <a href="" style="margin: 0 5px"><i class="glyphicon glyphicon-search"></i></a>
                                            </td>
                                        </tr>
                                        <?php
$_smarty_tpl->tpl_vars['article'] = $foreach_article_Sav;
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