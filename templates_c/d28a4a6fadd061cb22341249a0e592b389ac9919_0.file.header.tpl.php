<?php /* Smarty version 3.1.27, created on 2015-12-03 06:17:29
         compiled from "/var/www/html/templates/admin/misc/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:460173133566024c99a3af9_50819003%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd28a4a6fadd061cb22341249a0e592b389ac9919' => 
    array (
      0 => '/var/www/html/templates/admin/misc/header.tpl',
      1 => 1446500440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '460173133566024c99a3af9_50819003',
  'variables' => 
  array (
    'title' => 0,
    'Name' => 0,
    'TPL_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566024c99ae605_83244606',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566024c99ae605_83244606')) {
function content_566024c99ae605_83244606 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '460173133566024c99a3af9_50819003';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</title>

    <!-- Bootstrap Core CSS -->
    <link href="../<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../<?php echo $_smarty_tpl->tpl_vars['TPL_URL']->value;?>
/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body><?php }
}
?>