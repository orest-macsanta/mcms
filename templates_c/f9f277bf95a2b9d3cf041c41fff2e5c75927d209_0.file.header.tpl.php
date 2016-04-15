<?php /* Smarty version 3.1.27, created on 2016-02-17 14:37:47
         compiled from "/var/www/html/ira_api/templates/default/misc/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:153144524656c477ab5177e1_46745545%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9f277bf95a2b9d3cf041c41fff2e5c75927d209' => 
    array (
      0 => '/var/www/html/ira_api/templates/default/misc/header.tpl',
      1 => 1447687194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153144524656c477ab5177e1_46745545',
  'variables' => 
  array (
    'title' => 0,
    'Name' => 0,
    'pageKeywords' => 0,
    'pageDescription' => 0,
    'TPL_URL' => 0,
    'LOGGED' => 0,
    'UserData' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56c477ab532927_76166663',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56c477ab532927_76166663')) {
function content_56c477ab532927_76166663 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '153144524656c477ab5177e1_46745545';
?>
<!DOCTYPE html>
<html lang="en">
    <head>

         <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</title> 

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['pageKeywords']->value;?>
" />
        <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['pageDescription']->value;?>
" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

       <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

        <link href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/default/css/swiper.min.css" rel="stylesheet">
        <link href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/default/css/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/default/css/animate.min.css">
        <link href="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/default/css/main.css" rel="stylesheet" type="text/css"/>

<?php echo '<script'; ?>
 type="text/javascript" src="//vk.com/js/api/openapi.js?117"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/default/js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/default/js/swiper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/default/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/default/js/main.js"><?php echo '</script'; ?>
>

    </head>
    <body>
	    <div class="content">
	    	<header>
	    		<div class="contact">
	    			<div class="pas">	
		    			<div class="email">
		    				<a href="mail:baraholka.lviv@gmail.com">baraholka.lviv@gmail.com</a>
		    			</div>

			        	<div class="acount">
                            <?php if ($_smarty_tpl->tpl_vars['LOGGED']->value == 1) {?>
                            Привіт, <?php echo $_smarty_tpl->tpl_vars['UserData']->value['first_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['UserData']->value['last_name'];?>
 | <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
?action=logout">Вихід</a>
                            <?php } else { ?>
                            <a href="#small-dialog" class="open-popup-link">
			        			<span>Вхід</span>/<span>Реєстрація</span>
			        		</a>
                            <?php }?>
			        		
			        	</div>
			        </div>
	    		</div>

	    		<div class="logo-box">
				    <div class="pas2">
				        <div class="logo">
                            <a href="/"><h5>ЛЬВІВ<span>-БАРАХОЛКА</span></h5></a>
			        		<p>Львів - оголошення, робота, нерухомість</p>
			        	</div>

			        	<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/products?add_product" class="dodaj-new">
				        	<span class="dodaj animated rubberBand"><span>Додати оголошення</span></span>
				        </a>
			        </div>
    		       <div class="search-box">
	        			<div class="fixed-box">
		        			<div class="search">
		        				<input class="search-input" placeholder="Пошук по оголошенням..." name="search" type="text" >
			        			<div class="button-search"><button><span>Пошук</span></button></div>
		        			</div>
	        			</div>
	        		</div>
		       </div>	 
	        </header><?php }
}
?>