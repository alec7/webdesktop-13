<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-13 15:09:05
         compiled from "ajax\user-panel.html" */ ?>
<?php /*%%SmartyHeaderCode:1936855325e9adac169-47404498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbfa2a04e17e06a644f0645af6d2fd858b15885a' => 
    array (
      0 => 'ajax\\user-panel.html',
      1 => 1431513379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1936855325e9adac169-47404498',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55325e9ae1d326_00668754',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55325e9ae1d326_00668754')) {function content_55325e9ae1d326_00668754($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\webdesktop\\libs\\plugins\\modifier.truncate.php';
?><div class="user-wrapper">
    <div class="user-panel">
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/user.jpg" class="user-icon" />
        <div class="panel-login"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['user']->value['login'],10,'',false);?>
</div>
        <span id="idszka"><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</span>
    </div>
    <div class="user-tools">
        <div class="file-upload" title="file uploader"></div>
    </div>
    <div class="clear"></div>
<!--    <div class="user-notepad">
        <div class="h4">Notepad</div>
        <div class="notepad-item">
            tesdt
        </div>
        
    </div>-->
    <div class="h4">
        Notebook
        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/add.png" class="add-item item-trans" title="add item" />
    </div>
    <div class="user-notepad">
        Your notebook is empty. You can add new item
        <?php echo $_smarty_tpl->getSubTemplate ('./user-notepad.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

    </div>
    
    
</div><?php }} ?>
