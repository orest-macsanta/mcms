<?php /* Smarty version 3.1.27, created on 2015-12-03 06:17:29
         compiled from "/var/www/html/templates/admin/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1477617105566024c997b393_93384565%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b40cb3e37f66bbeb6dbfeb5abefd43d6add85e01' => 
    array (
      0 => '/var/www/html/templates/admin/login.tpl',
      1 => 1446497421,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1477617105566024c997b393_93384565',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566024c999d174_75605683',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566024c999d174_75605683')) {
function content_566024c999d174_75605683 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1477617105566024c997b393_93384565';
echo $_smarty_tpl->getSubTemplate ("admin/misc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/admin/login.html" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="text" hidden name="action" value="admin_login">
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/misc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>