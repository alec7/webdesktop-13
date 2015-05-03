<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-08 00:37:01
         compiled from ".\templates\home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2047254fb8b9da9ae60-70443826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd536f7057e747b922f37ca6268ed4c4e7f5b013' => 
    array (
      0 => '.\\templates\\home\\index.tpl',
      1 => 1425770073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2047254fb8b9da9ae60-70443826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'main' => 0,
    'frst' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fb8b9db2aea2_95228885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fb8b9db2aea2_95228885')) {function content_54fb8b9db2aea2_95228885($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



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
