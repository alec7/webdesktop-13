<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-08 00:17:14
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:860954fb82ae6a8ec2-84031418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebbde7835e72bb725111fd9316dd5b3d9cc016f7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1425770073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '860954fb82ae6a8ec2-84031418',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fb82ae712336_63533408',
  'variables' => 
  array (
    'main' => 0,
    'frst' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fb82ae712336_63533408')) {function content_54fb82ae712336_63533408($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



    <?php  $_smarty_tpl->tpl_vars['frst'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['frst']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['main']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['frst']->key => $_smarty_tpl->tpl_vars['frst']->value) {
$_smarty_tpl->tpl_vars['frst']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['frst']->value['name'];?>

        aaaaaaaaaaaaaaaa
        <?php echo $_smarty_tpl->tpl_vars['frst']->value['school'];?>

    <?php } ?>
    
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
