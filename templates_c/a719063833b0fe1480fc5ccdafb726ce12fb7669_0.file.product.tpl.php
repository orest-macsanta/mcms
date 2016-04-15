<?php /* Smarty version 3.1.27, created on 2015-12-05 08:05:16
         compiled from "/var/www/html/templates/default/misc/products/product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9381122185662e10c2536d6_86324223%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a719063833b0fe1480fc5ccdafb726ce12fb7669' => 
    array (
      0 => '/var/www/html/templates/default/misc/products/product.tpl',
      1 => 1448401168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9381122185662e10c2536d6_86324223',
  'variables' => 
  array (
    'articles' => 0,
    'art' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5662e10c268016_44449203',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5662e10c268016_44449203')) {
function content_5662e10c268016_44449203 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9381122185662e10c2536d6_86324223';
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['art'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['art']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->_loop = true;
$foreach_art_Sav = $_smarty_tpl->tpl_vars['art'];
?>
<div class="block">
    <?php if ($_smarty_tpl->tpl_vars['art']->value['images'] == false) {?>
    <div class="foto" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/upload/item.png');"></div>
    <?php } else { ?>
    <div class="foto" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['art']->value['images'][0];?>
');"></div>
    <?php }?>
    <div class="information">
        <div class="nazwa">
            <div class="title">
                <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/products?show=<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>
</a>
            </div>
            <div class="cena">
                <p><?php echo $_smarty_tpl->tpl_vars['art']->value['price'];?>
<span> UAH<span></p>
            </div>
        </div>
        <div class="opis">
            <p><?php echo $_smarty_tpl->tpl_vars['art']->value['a_desc'];?>
...</p>
        </div>

        <div class="date">
            <p><?php echo $_smarty_tpl->tpl_vars['art']->value['date'];?>
</p>
        </div>  
    </div>
</div>
<?php
$_smarty_tpl->tpl_vars['art'] = $foreach_art_Sav;
}
}
}
?>