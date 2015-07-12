<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-12 13:45:35
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2860455325e9a9f64e4-12403151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26aa970b2c378f08ce5ee51da90c5e7d5cc28ee5' => 
    array (
      0 => 'index.tpl',
      1 => 1436701508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2860455325e9a9f64e4-12403151',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55325e9aa50c01_46381224',
  'variables' => 
  array (
    'title' => 0,
    'BASE_URL' => 0,
    'MAIN_URL' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55325e9aa50c01_46381224')) {function content_55325e9aa50c01_46381224($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/favicon.ico" />
 
        
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/wstyle.css" />
    <?php echo '<script'; ?>
 defer type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/wscripts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer type="text/javascript" src="wajax.js"><?php echo '</script'; ?>
>
    
    
    <?php echo '<script'; ?>
 defer type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/dropzone.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/dropzone.css" />
    <?php echo '<script'; ?>
 defer type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/dndfunctions.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        
            tinymce.init({
                selector: "textarea.editor",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code",
                 "insertdatetime media table contextmenu paste"
                ],
                toolbar: "insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent"
            });
        
    <?php echo '</script'; ?>
>
    
    <!-- Bootstrap included -->
    
    
    
    <body>
        <div class="genpopup"></div>
        <div class="notepad-window" id="notepad-edit">
            <?php echo $_smarty_tpl->getSubTemplate ('./ajax/notepad-edit.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>
        <div id="notepad-add">
            <div class="window-header">
                <div class="save-note item-trans" title="Add Note"></div>
                <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/img/delete.png" class="window-close item-trans" title="Close" />
            </div>
            <input type="text" class="note-title" value="the title of my own note" />
            <textarea class="editor" name="content"></textarea>
        </div>
            
        <div class="startpopup"></div>
            <?php echo $_smarty_tpl->getSubTemplate ("user/user-forms.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            
        <?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<br />
        <?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>

        <br />
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
">back to home page</a>


<div class="dropzone-wrap"><form class="dropzone" action="<?php echo $_smarty_tpl->tpl_vars['MAIN_URL']->value;?>
/upload.php" method="post" enctype="multipart/form-data"></form></div>


        <div class="user-bar"></div>
        
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
