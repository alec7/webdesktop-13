<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-08 13:24:47
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2023654fb8b2899da52-60148829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8abdd161c2b8d609471070185ce5b77d605082d3' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1425817485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2023654fb8b2899da52-60148829',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fb8b289fb758_73970534',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'MAIN_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fb8b289fb758_73970534')) {function content_54fb8b289fb758_73970534($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


    
    
    <?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>

    <br />
    Welcome in V CMS. This is beta version!!! Don't worry. I'll perfecting it!<br />
    You are in main file directory -> index.tpl. And that is a link to subpage: <a href="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
"> ----------LINK---------- </a> <br />
    (I hope it will not be necessary).
    
        <br />Anyway, you have base css, jquery.min.js and Bootstrap included.
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
