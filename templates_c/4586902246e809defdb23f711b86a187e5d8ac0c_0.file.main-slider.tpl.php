<?php /* Smarty version 3.1.27, created on 2016-02-17 14:37:47
         compiled from "/var/www/html/ira_api/templates/default/misc/main-slider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:181301652356c477ab554416_75645740%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4586902246e809defdb23f711b86a187e5d8ac0c' => 
    array (
      0 => '/var/www/html/ira_api/templates/default/misc/main-slider.tpl',
      1 => 1447419984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181301652356c477ab554416_75645740',
  'variables' => 
  array (
    'hotArticles' => 0,
    'hot_art' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c477ab568cd4_30175881',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c477ab568cd4_30175881')) {
function content_56c477ab568cd4_30175881 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '181301652356c477ab554416_75645740';
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