<?php /* Smarty version 3.1.27, created on 2016-02-17 14:37:47
         compiled from "/var/www/html/ira_api/templates/default/misc/top_articles.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:147632055756c477ab56c985_55960595%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31299c19fa3543b4650f87dca7a9ad1d26c57386' => 
    array (
      0 => '/var/www/html/ira_api/templates/default/misc/top_articles.tpl',
      1 => 1447403864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147632055756c477ab56c985_55960595',
  'variables' => 
  array (
    'articles' => 0,
    'art' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c477ab580734_13240224',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c477ab580734_13240224')) {
function content_56c477ab580734_13240224 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '147632055756c477ab56c985_55960595';
?>
						<div class="product-all-top">
						    <div class="top-news">
						    	<h2>Найновіші оголошення Львова</h2>
                                <?php
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
						    	<div class="product">
                                    <?php if ($_smarty_tpl->tpl_vars['art']->value['images'] == false) {?>
                                    <div class="img_link"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/products?show=<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
" class="foto" style="background-image: url('upload/item.png');"></a></div>
                                    <?php } else { ?>
                                    <div class="img_link"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/products?show=<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
" class="foto" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['art']->value['images'][0];?>
');"></a></div>
                                    <?php }?>

						    		<div class="info">
						    			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/products?show=<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
" class="nazwa"><span><?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>
</span></a>
						    			<div class="cena"><span><?php echo $_smarty_tpl->tpl_vars['art']->value['price'];?>
</span>$</div>
						    		</div>
						    	</div>
                                <?php
$_smarty_tpl->tpl_vars['art'] = $foreach_art_Sav;
}
?>
						    </div>
<!--
	                        <div class="next-prev-button">
	                            <button class="prev">Попередня</button>
	                            <button class="next">Наступна</button>
	                        </div>
-->
    	        		</div>
<?php }
}
?>