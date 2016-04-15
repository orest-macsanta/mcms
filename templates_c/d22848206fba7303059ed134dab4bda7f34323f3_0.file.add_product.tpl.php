<?php /* Smarty version 3.1.27, created on 2015-12-05 08:04:43
         compiled from "/var/www/html/templates/default/misc/products/add_product.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14389586775662e0eb0b5a70_16272746%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd22848206fba7303059ed134dab4bda7f34323f3' => 
    array (
      0 => '/var/www/html/templates/default/misc/products/add_product.tpl',
      1 => 1447706447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14389586775662e0eb0b5a70_16272746',
  'variables' => 
  array (
    'TEMPLATE' => 0,
    'LOGGED' => 0,
    'PHP_SELF_ACTION' => 0,
    'categories' => 0,
    'cat' => 0,
    'UserData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5662e0eb0f4124_25729803',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5662e0eb0f4124_25729803')) {
function content_5662e0eb0f4124_25729803 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14389586775662e0eb0b5a70_16272746';
echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if ($_smarty_tpl->tpl_vars['LOGGED']->value == 1) {?>
<section class="forma-nowe-ogloszenia" >
                <h4>Подати безкоштовне оголошення</h4>
    <form id="add_prod" action="<?php echo $_smarty_tpl->tpl_vars['PHP_SELF_ACTION']->value;?>
" enctype="multipart/form-data" method="POST">
                <div class="first-section">
                    <div class="box">
                        <label class="title">Заголовок<span class="star">*</span></label>
                        <div class="text">
                            <input type="text" name="title" class="add-title" data-maxtext="70" data-mintext="6" required>
                            <div class="liczylnyk">    
                                <span class="znaki"></span>
                                <span>знаків залишилося</span>
                            </div>
                        </div>  
                    </div>

                    <div class="box">
                         <label class="title">Категорія<span class="star">*</span></label>
                          <div class="text">
                            <select name="cat">
                                <?php
$_from = $_smarty_tpl->tpl_vars['categories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['title'];?>
</option> 
                                <?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
                            </select>
                        </div>
                    </div>
                    
                    <div class="box">
                         <label class="title">Ціна<span class="star">*</span></label>
                          <div class="text">
                            <input type="text" name="price" class="add-title" data-maxtext="70" data-mintext="6" required>
                        </div>
                    </div>
                </div>

                <div class="second-section">
                    <div class="box">
                        <label class="title">Опис<span class="star">*</span></label>
                        <div class="text textarea">
                            <textarea type="text" name="a_desc" class="add-opis" data-maxtext="4096" data-mintext="6" required></textarea>
                            <div class="liczylnyk">    
                                <span class="znaki"></span>
                                <span>знаків залишилося</span>
                            </div>
                        </div>  
                    </div>
                </div>


                <div class="third-section">
                    <div class="box"> 
                        <div class="in">
                            <label class="title">Фотографії</label>
                            <label class="mini-title">Оголошення з фото отримують в средньому в 3-5 разів більше відгуків</label>
                        </div>
                        <div class="block-choose">
                            <div class="fileUpload btn btn-primary">
                                <input name="img1" type="file" class="upload" />
                            </div>
                            <div class="fileUpload btn btn-primary">
                                <input name="img2" type="file" class="upload" />
                            </div>
                            <div class="fileUpload btn btn-primary">
                                <input name="img3" type="file" class="upload" />
                            </div>
                        </div>
                    </div>
                </div>






                <!-- <div class="fourth-section"> -->
<!--                     <div class="box">
                        <label class="title">Додайте населений пункт<span class="star">*</span></label>
                        <div class="text">
                            <input type="text" name="data[title]" class="add-title" data-mintext="6">
                        </div>  
                    </div> -->
                <!-- </div> -->

                <div class="fifth-section">
                    <div class="box">
                        <label class="title">Контактна особа<span class="star">*</span></label>
                        <div class="text">
                            <input type="text" name="user_name" class="add-title" data-mintext="6" value="<?php echo $_smarty_tpl->tpl_vars['UserData']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['UserData']->value['last_name'];?>
" required>
                        </div>  
                    </div>
                    <div class="box">
                        <label class="title">Email-адреса<span class="star">*</span></label>
                        <div class="text">
                            <input type="text" name="email" class="add-title" data-mintext="6" value="<?php if ($_smarty_tpl->tpl_vars['UserData']->value['email'] == null) {
} else {
echo $_smarty_tpl->tpl_vars['UserData']->value['email'];
}?>" required>
                        </div>  
                    </div>
                    <div class="box">
                        <label class="title">Номер телефону +380</label>
                        <div class="text">
                            <input type="text" name="tel" class="add-title" data-mintext="6" value="<?php if ($_smarty_tpl->tpl_vars['UserData']->value['tel'] == null) {
} else {
echo $_smarty_tpl->tpl_vars['UserData']->value['tel'];
}?>">
                        </div>  
                    </div>

                    <div class="box">
                        <label class="title">Skype</label>
                        <div class="text">
                            <input type="text" name="skype" class="add-title" data-mintext="6">
                        </div>  
                    </div>
                </div>
                
                <h4>Згода на обробку даних</h4>
                
                <div class="sixth-section">
                    <div class="box">
                        <div class="text checkbox">
                            <label class="check"></label>
                        </div>  
                    </div>
                </div>
        <input type="hidden" name="action" value="add_prod" />
    </form>


                <div class="public">
                    <button form="add_prod" class="publicated">Опублікувати</button>
                </div>
            </section>
<?php } else { ?>
<div class="uwaga"> Щоб додати оголошення на сайті вам потрібно <a href="#small-dialog" class="link open-popup-link">зареєструватись або увійти </a>у свій профіль!</div>
<?php }?>
<?php echo '<script'; ?>
>
    document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['TEMPLATE']->value)."/misc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>