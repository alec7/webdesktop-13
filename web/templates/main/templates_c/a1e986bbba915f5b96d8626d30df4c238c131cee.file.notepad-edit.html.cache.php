<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 23:25:08
         compiled from "C:\xampp\htdocs\webdesktop\web\templates\main\ajax\notepad-edit.html" */ ?>
<?php /*%%SmartyHeaderCode:288555325e9aa65fd6-73004773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1e986bbba915f5b96d8626d30df4c238c131cee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webdesktop\\web\\templates\\main\\ajax\\notepad-edit.html',
      1 => 1429392271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '288555325e9aa65fd6-73004773',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55325e9aa6ece1_29190691',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'editntd' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55325e9aa6ece1_29190691')) {function content_55325e9aa6ece1_29190691($_smarty_tpl) {?><div class="window-header">
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/delete.png" class="window-close item-trans" title="Close" />
</div>
<div class="note-ttl"><?php echo $_smarty_tpl->tpl_vars['editntd']->value['title'];?>
</div>
<div class="wind-wrap"><?php echo $_smarty_tpl->tpl_vars['editntd']->value['content'];?>
</div>

    <?php }} ?>
