<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-18 15:39:38
         compiled from "user\user-forms.html" */ ?>
<?php /*%%SmartyHeaderCode:66655325e9aa80417-98017359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ccedffad00cf56538e5676ec51c4b18823152cd' => 
    array (
      0 => 'user\\user-forms.html',
      1 => 1428156737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66655325e9aa80417-98017359',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55325e9aa830e8_83973069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55325e9aa830e8_83973069')) {function content_55325e9aa830e8_83973069($_smarty_tpl) {?><div class="onpopup">
    <div class="login-form">
        <div class="row-log"> <div class="login-data">Nick-name: </div> <input style="background: white;" type='text' name='nickname' /></div>
        <div class="row-log"> <div class="login-data">Password: </div> <input style="background: white;" type='password' name='password' /></div>
        <div class="submit login">Login</div>
        <div class="submit registration">Registration</div>
        <div class="submit" style="margin-left: 107px;">Forgot password ?</div>
    </div>
    <div class="clear"></div>
    <div class="registration-form">
        <p>this is registration user form</p>
        <div class="submit registration">Registration</div>
    </div>
</div>
<?php }} ?>
