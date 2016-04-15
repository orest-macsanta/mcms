<?php /* Smarty version 3.1.27, created on 2015-12-08 13:37:29
         compiled from "/var/www/html/templates/default/misc/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7187325856672369d37d22_84236830%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fccb65deca899559ad89b6d367ed7924d1df6e60' => 
    array (
      0 => '/var/www/html/templates/default/misc/footer.tpl',
      1 => 1447708567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7187325856672369d37d22_84236830',
  'variables' => 
  array (
    'FB_LINK_AUTH' => 0,
    'VK_LINK_AUTH' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56672369d50616_21995726',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56672369d50616_21995726')) {
function content_56672369d50616_21995726 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7187325856672369d37d22_84236830';
?>
<footer>
	        	<div class="footer">
		        	<div class="box-link">
		        		<div class="all">
			        		<a class="link" href="#">Зворотній зв'язок</a>
			        		<a class="link" href="#">Допомога</a>
			        		<a class="link" href="#">Карта категорій</a>
			        		<a class="link open-popup-link" href="#small-dialog">Вхід</a>
			        		<a class="link" href="#">Реєстрація</a>
			        		<a class="link" href="#">Всі оголошення</a>
			        	</div>
		        		<div class="copyright">
		        			<p><strong>Copyright © 2015-2016 LVIV.BARACHOLKA. </strong> Використання сервісу означає згоду з  <a href="" class="regulamin">правилами використання.</a></p>
		        		</div>
		        	</div>

			        <div class="bottom">
			        	<div class="bottom-logo">
			        		
			        	</div>
			        	<div class="social">
			        		
			        	</div>
			        </div>
		       	</div>
	        </footer>
		</div>



<div id="small-dialog" class="white-popup zoom-anim-dialog mfp-hide">
    <div class="form">
        <div class="button">
            <p>Увійти через:</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['FB_LINK_AUTH']->value;?>
" class="log-with-fb"></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['VK_LINK_AUTH']->value;?>
" class="log-with-vk"></a>
            <!-- <button class="log-with-tw"></button>
            <button class="log-with-google"></button> -->
        </div>

        <div class="or"><span>або</span><hr></div>

        <form class="log-in" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/auth?type=site" method="post" id="login_form">
            <div class="element-log">    
                <input class="email" type="text" name="uid" required="true" placeholder="Логін">
                <input class="pass" type="password" type="text" required="true" name="password" placeholder="Пароль">
            </div>
            <div class="element-register">  
                <input class="pass" type="password" name="repas" placeholder="Повторити пароль">
                <input class="text" type="text" name="first_name" placeholder="Ім'я">
                <input class="text" type="text" name="last_name" placeholder="Прізвище">
            </div>
            <input type="hidden" name="action" value="login" id="hide"/>
<!--            <div class="g-recaptcha" data-sitekey="6LehwhATAAAAAPiVaj9UMknMhoaXBTKVl01ZYbQS"></div>-->
        </form>

        <div class="save-pass"></div>   

        <div class="log-in-border">
            
            <button type="submit" form="login_form" class="log-in-go"><span class="log">Увійти</span></button>
        </div>

        <div class="link-to-rejestr">
            <p>Ти ще не зареєстрований?</p>
            <a href="#" class="zarejes"><span>Зареєструйся тут</span></a>
        </div>
    </div>
</div>


<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function() {
            $(".mt-hov").mouseover(function() {
                
              if ($(window).width() > 1024) {
                var c_w = parseInt($(this).css('width'));
                var s_w = parseInt($(this).find('.submenu').css('width'));
                var def_marg = parseInt($(this).find('.submenu').css('marginLeft'));

                $(this).find('.submenu').show();
              }
            });
            $(".mt-hov").mouseout(function() {
                
              if ($(window).width() > 1024) {
                   $(this).find('.submenu').hide();
              }
            });
        });
    <?php echo '</script'; ?>
>
     </body>
</html>

<?php }
}
?>