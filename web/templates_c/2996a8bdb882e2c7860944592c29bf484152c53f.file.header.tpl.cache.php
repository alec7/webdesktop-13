<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-16 19:47:33
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8554fb8b28a11655-47282624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2996a8bdb882e2c7860944592c29bf484152c53f' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1426531650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8554fb8b28a11655-47282624',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fb8b28a1d178_10113739',
  'variables' => 
  array (
    'title' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fb8b28a1d178_10113739')) {function content_54fb8b28a1d178_10113739($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <?php  $_config = new Smarty_Internal_Config("var.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
        
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/style.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/scripts.js"><?php echo '</script'; ?>
>
    
    <!-- Bootstrap included -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/bootstrap/bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
</head> 
    
<body>
<?php }} ?>
