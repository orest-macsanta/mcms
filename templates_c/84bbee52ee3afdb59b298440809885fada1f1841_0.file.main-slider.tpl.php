<?php /* Smarty version 3.1.27, created on 2015-12-08 13:37:29
         compiled from "/var/www/html/templates/default/misc/main-slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:60924593556672369ce5d06_96523825%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84bbee52ee3afdb59b298440809885fada1f1841' => 
    array (
      0 => '/var/www/html/templates/default/misc/main-slider.tpl',
      1 => 1447441583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60924593556672369ce5d06_96523825',
  'variables' => 
  array (
    'hotArticles' => 0,
    'hot_art' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56672369d09869_06186237',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56672369d09869_06186237')) {
function content_56672369d09869_06186237 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '60924593556672369ce5d06_96523825';
?>
	        				<div class="right">
	        					<div class="swiper-container first">

							        <div class="swiper-wrapper">

							        <?php
$_from = $_smarty_tpl->tpl_vars['hotArticles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['hot_art'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['hot_art']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['hot_art']->value) {
$_smarty_tpl->tpl_vars['hot_art']->_loop = true;
$foreach_hot_art_Sav = $_smarty_tpl->tpl_vars['hot_art'];
?>
							            <div class="swiper-slide">
                                            <?php if ($_smarty_tpl->tpl_vars['hot_art']->value['images'] == false) {?>
							            	<div style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/upload/item.png')" class="foto"></div>
                                            <?php } else { ?>
                                            <div style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['hot_art']->value['images'][0];?>
')" class="foto"></div>
                                            <?php }?>
							            	
							            	<div class="opis">
							            		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/products?show=<?php echo $_smarty_tpl->tpl_vars['hot_art']->value['id'];?>
" class=""><?php echo $_smarty_tpl->tpl_vars['hot_art']->value['title'];?>
</a>
							            		<div class="date"><?php echo $_smarty_tpl->tpl_vars['hot_art']->value['date'];?>
</div>
							            		<div class="information"><?php echo $_smarty_tpl->tpl_vars['hot_art']->value['a_desc'];?>
</div>
							            		<div class="cena"><?php echo $_smarty_tpl->tpl_vars['hot_art']->value['price'];?>
 UAH</div>
							            		<a href="" class="call-to-person">Звязатись з продавцем</a>
							            	</div>
							            </div>
							        <?php
$_smarty_tpl->tpl_vars['hot_art'] = $foreach_hot_art_Sav;
}
?>
							        </div>
	
							        <!-- <div class="swiper-pagination"></div> -->
							       
							        <div class="swiper-button-next"></div>
							        <div class="swiper-button-prev"></div>
							    </div>
							</div><?php }
}
?>