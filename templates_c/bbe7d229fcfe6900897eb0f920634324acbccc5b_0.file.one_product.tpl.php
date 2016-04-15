<?php /* Smarty version 3.1.27, created on 2015-12-01 07:37:35
         compiled from "/var/www/html/templates/default/misc/products/one_product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1083748908565d948f492be7_94832811%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe7d229fcfe6900897eb0f920634324acbccc5b' => 
    array (
      0 => '/var/www/html/templates/default/misc/products/one_product.tpl',
      1 => 1447799414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1083748908565d948f492be7_94832811',
  'variables' => 
  array (
    'TEMPLATE' => 0,
    'article' => 0,
    'p_images' => 0,
    'BASE_URL' => 0,
    'p_img' => 0,
    'u_data' => 0,
    'sArts' => 0,
    'sArt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565d948f5065f2_76328893',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565d948f5065f2_76328893')) {
function content_565d948f5065f2_76328893 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1083748908565d948f492be7_94832811';
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<section>
                <div class="container">
                    <div class="breadcrumb">
                        <ul>
                                <li><a href="/">asdfasdf</a></li>
                                <li><a href="/">assdfsadf</a></li>
                                <li><a href="/">asdfasdfsadf</a></li>    
                            </ul>
                    </div>

                    <div class="pojedynczy">
                        <div class="nazwa">
                            <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
                            <div class="cena">
                                <p><?php echo $_smarty_tpl->tpl_vars['article']->value['price'];?>
<span> UAH<span></p>
                            </div>
                        </div>

                        <div class="dane-dodania">
                            <span>Додане <?php echo $_smarty_tpl->tpl_vars['article']->value['date'];?>
</span>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['p_images']->value !== false) {?>
                        <div class="foto">
                            <div class="swiper-container pojedyncza gallery-top">
                                <div class="swiper-wrapper">
                                    <?php if ($_smarty_tpl->tpl_vars['p_images']->value !== false) {?>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['p_images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p_img'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p_img']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p_img']->value) {
$_smarty_tpl->tpl_vars['p_img']->_loop = true;
$foreach_p_img_Sav = $_smarty_tpl->tpl_vars['p_img'];
?>
                                    <div class="swiper-slide" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['p_img']->value;?>
');"></div>
                                    <?php
$_smarty_tpl->tpl_vars['p_img'] = $foreach_p_img_Sav;
}
?>
                                    <?php }?>
                                    
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next swiper-button-white"></div>
                                <div class="swiper-button-prev swiper-button-white"></div>
                            </div>
                        <div class="swiper-container gallery-thumbs">
                            <div class="swiper-wrapper">
                                <?php if ($_smarty_tpl->tpl_vars['p_images']->value !== false) {?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['p_images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p_img'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p_img']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['p_img']->value) {
$_smarty_tpl->tpl_vars['p_img']->_loop = true;
$foreach_p_img_Sav = $_smarty_tpl->tpl_vars['p_img'];
?>
                                <div class="swiper-slide" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;
echo $_smarty_tpl->tpl_vars['p_img']->value;?>
')"></div>
                                <?php
$_smarty_tpl->tpl_vars['p_img'] = $foreach_p_img_Sav;
}
?>
                                <?php }?>
                            </div>
                        </div>
                        </div>
                            <?php } else { ?>
                            В цьому оголошенні немає зображень!
                        <?php }?>

                        <div class="opis">
                            <div class="info">
                                <?php echo $_smarty_tpl->tpl_vars['article']->value['a_desc'];?>

                            </div>
                            <div class="contact">
                                <div class="text">Зв'язатись з власником оголошення:</div>
                                <div class="name"><p><?php echo $_smarty_tpl->tpl_vars['u_data']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['u_data']->value['last_name'];?>
</p></div>
                                <div class="number">
                                    <p>+380 93 12 12 324</p>
                                    <!-- <button class="look">Показати</button> -->
                                </div>
                                <div class="send">
                                    <button>Відправити повідомлення</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="podobne">
                        <div class="title-podobne"><h2>Подібні оголошення</h2></div>
                        <div class="produkts">
                            <?php
$_from = $_smarty_tpl->tpl_vars['sArts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sArt'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sArt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sArt']->value) {
$_smarty_tpl->tpl_vars['sArt']->_loop = true;
$foreach_sArt_Sav = $_smarty_tpl->tpl_vars['sArt'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['sArt']->value['id'] !== $_smarty_tpl->tpl_vars['article']->value['id']) {?>
                            <div class="block">
                                <div class="foto" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sArt']->value['images'][0];?>
');"></div>

                                <div class="information">
                                    <div class="nazwa">
                                        <div class="title">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/products?show=<?php echo $_smarty_tpl->tpl_vars['sArt']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['sArt']->value['title'];?>
</a>
                                        </div>
                                        <div class="cena">
                                            <p><?php echo $_smarty_tpl->tpl_vars['sArt']->value['price'];?>
<span>UAH<span></span></span></p>
                                        </div>
                                    </div>
                                    <div class="opis">
                                        <p><?php echo $_smarty_tpl->tpl_vars['sArt']->value['a_desc'];?>
</p>
                                    </div>

                                    <div class="date">
                                        <p><?php echo $_smarty_tpl->tpl_vars['sArt']->value['date'];?>
</p>
                                    </div>  
                                </div>
                            </div>
                            <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['sArt'] = $foreach_sArt_Sav;
}
?>
                        </div>
                    </div>
            </div>
                    </section>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>