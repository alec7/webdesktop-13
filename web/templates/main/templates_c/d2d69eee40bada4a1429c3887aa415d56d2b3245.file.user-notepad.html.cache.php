<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 18:59:48
         compiled from "C:\xampp\htdocs\webdesktop\web\templates\main\ajax\user-notepad.html" */ ?>
<?php /*%%SmartyHeaderCode:983255a29d047f0830-29718222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2d69eee40bada4a1429c3887aa415d56d2b3245' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webdesktop\\web\\templates\\main\\ajax\\user-notepad.html',
      1 => 1429386116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '983255a29d047f0830-29718222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notd' => 0,
    'notepad' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a29d04811985_73010730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a29d04811985_73010730')) {function content_55a29d04811985_73010730($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\webdesktop\\libs\\plugins\\modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars['notepad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notepad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notd']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notepad']->key => $_smarty_tpl->tpl_vars['notepad']->value) {
$_smarty_tpl->tpl_vars['notepad']->_loop = true;
?>
    <div class="notepad-item" id="notepad_item_<?php echo $_smarty_tpl->tpl_vars['notepad']->value['id'];?>
" ident="<?php echo $_smarty_tpl->tpl_vars['notepad']->value['id'];?>
" title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['notepad']->value['content'],250,'...',false);?>
">
        <div class="notepad-item-wrap" id="notepad_item_<?php echo $_smarty_tpl->tpl_vars['notepad']->value['id'];?>
" ident="<?php echo $_smarty_tpl->tpl_vars['notepad']->value['id'];?>
"></div>
            <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['notepad']->value['title'],45,'',false);?>

        <div class="delete-item" id="<?php echo $_smarty_tpl->tpl_vars['notepad']->value['id'];?>
" title="delete item"></div>
    </div>
<?php } ?><?php }} ?>
