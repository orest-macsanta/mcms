<?php /* Smarty version 3.1.27, created on 2015-12-05 08:05:16
         compiled from "/var/www/html/templates/default/products.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16133217495662e10c206dc8_37698836%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e280b4694015a44a8d6e7248af96be9cb582a5cf' => 
    array (
      0 => '/var/www/html/templates/default/products.tpl',
      1 => 1447442973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16133217495662e10c206dc8_37698836',
  'variables' => 
  array (
    'TEMPLATE' => 0,
    'path' => 0,
    'pat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5662e10c226d91_04322601',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5662e10c226d91_04322601')) {
function content_5662e10c226d91_04322601 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16133217495662e10c206dc8_37698836';
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <section>
                <div class="container">
                     <div class="breadcrumb">
                        <ul>
<!--                            <?php echo var_dump($_smarty_tpl->tpl_vars['path']->value);?>
-->
                            <li><a href="/">Головна</a></li>
                            <?php if (isset($_smarty_tpl->tpl_vars['path']->value)) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['path']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pat']->value) {
$_smarty_tpl->tpl_vars['pat']->_loop = true;
$foreach_pat_Sav = $_smarty_tpl->tpl_vars['pat'];
?>
                                <li><a href="/products?cat={}"><?php echo $_smarty_tpl->tpl_vars['pat']->value;?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['pat'] = $foreach_pat_Sav;
}
?>
                            <?php }?>
                        </ul>
                    </div>


                    <div class="produkts">
                        
                        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/products/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


                        <div class="next-prev-button">
                            <button class="prev">Попередня</button>
                            <button class="next">Наступна</button>
                        </div>
                    </div>

                   
                 </div> 
             </section> 
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>