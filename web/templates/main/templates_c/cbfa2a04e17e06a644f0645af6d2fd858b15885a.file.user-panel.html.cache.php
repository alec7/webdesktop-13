<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-04 15:36:44
         compiled from "ajax\user-panel.html" */ ?>
<?php /*%%SmartyHeaderCode:6893551f108a78ef42-17740970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbfa2a04e17e06a644f0645af6d2fd858b15885a' => 
    array (
      0 => 'ajax\\user-panel.html',
      1 => 1428154603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6893551f108a78ef42-17740970',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551f108a7d2fb1_26736173',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551f108a7d2fb1_26736173')) {function content_551f108a7d2fb1_26736173($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\webdesktop\\libs\\plugins\\modifier.truncate.php';
?><div class="user-panel">
    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/user.jpg" class="user-icon" />
    <div class="panel-login"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['user']->value['login'],10,'',false);?>
</div>
    <span id="idszka"><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</span>
</div><?php }} ?>
