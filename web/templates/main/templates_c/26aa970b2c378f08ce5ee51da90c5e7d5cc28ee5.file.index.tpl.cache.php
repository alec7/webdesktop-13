<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-04 15:51:09
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32150551f0f975b7bf2-37611144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26aa970b2c378f08ce5ee51da90c5e7d5cc28ee5' => 
    array (
      0 => 'index.tpl',
      1 => 1428155453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32150551f0f975b7bf2-37611144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551f0f97604324_01992891',
  'variables' => 
  array (
    'title' => 0,
    'BASE_URL' => 0,
    'MAIN_URL' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551f0f97604324_01992891')) {function content_551f0f97604324_01992891($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
        
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/wstyle.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/wscripts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="wajax.js"><?php echo '</script'; ?>
>
    
    <!-- Bootstrap included -->
    
    
    
    <body>
        <div class="startpopup"></div>
            <?php echo $_smarty_tpl->getSubTemplate ("user/user-forms.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            
        <?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<br />
        <?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>

        <br />
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">back to home page</a>


        <div class="user-bar gradient">
            
        </div>
        
        <div class="panel-desktop gradient">
            <div class="panel-activator">
                <div>V</div>
            </div>
        </div>
        
        <div class="desktop"></div>
        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    </body>
</html>

<?php }} ?>
