<?php /*%%SmartyHeaderCode:2860455325e9a9f64e4-12403151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26aa970b2c378f08ce5ee51da90c5e7d5cc28ee5' => 
    array (
      0 => 'index.tpl',
      1 => 1430643380,
      2 => 'file',
    ),
    'a1e986bbba915f5b96d8626d30df4c238c131cee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webdesktop\\web\\templates\\main\\ajax\\notepad-edit.html',
      1 => 1429392271,
      2 => 'file',
    ),
    '0ccedffad00cf56538e5676ec51c4b18823152cd' => 
    array (
      0 => 'user\\user-forms.html',
      1 => 1428156737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2860455325e9a9f64e4-12403151',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5545e644277de6_95598019',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5545e644277de6_95598019')) {function content_5545e644277de6_95598019($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    
    <title>V desktop by Ivan Dublianski</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
        
    <link rel="stylesheet" type="text/css" href="http://localhost/webdesktop/web/templates/main/../../css/wstyle.css" />
    <script defer type="text/javascript" src="http://localhost/webdesktop/web/templates/main/../../js/jquery-1.11.2.min.js"></script>
    <script defer type="text/javascript" src="http://localhost/webdesktop/web/templates/main/../../js/wscripts.js"></script>
    <script defer type="text/javascript" src="wajax.js"></script>
    
    
    <script defer type="text/javascript" src="http://localhost/webdesktop/web/templates/main/../../js/dropzone.js"></script>
    <link rel="stylesheet" type="text/css" href="http://localhost/webdesktop/web/templates/main/../../css/dropzone.css" />
    <script defer type="text/javascript" src="http://localhost/webdesktop/web/templates/main/../../js/dndfunctions.js"></script>
    
    <script type="text/javascript" src="http://localhost/webdesktop/web/templates/main/../../js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        
            tinymce.init({
                selector: "textarea.editor",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code",
                 "insertdatetime media table contextmenu paste"
                ],
                toolbar: "insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent"
            });

            
        
    </script>
    
    <!-- Bootstrap included -->
    
    
    
    <body>
        <div class="genpopup"></div>
        <div class="notepad-window" id="notepad-edit"> 
            <div class="window-header">
    <img src="http://localhost/webdesktop/web/templates/main/../../img/delete.png" class="window-close item-trans" title="Close" />
</div>
<div class="note-ttl"></div>
<div class="wind-wrap"></div>

    
        </div>
        <div id="notepad-add">
            <div class="window-header">
                <div class="save-note item-trans" title="Add Note"></div>
                <img src="http://localhost/webdesktop/web/templates/main/../../img/delete.png" class="window-close item-trans" title="Close" />
            </div>
            <input type="text" class="note-title" value="the title of my own note" />
            <textarea class="editor" name="content"></textarea>
        </div>
            
        <div class="startpopup"></div>
            <div class="onpopup">
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

            
        http://localhost/webdesktop/web/templates/main/../..<br />
        http://localhost/webdesktop/web/templates/main
        <br />
        <a href="http://localhost/webdesktop/web/templates/main/../..">back to home page</a>
        
        
        

<div class="dropzone-wrap"><form class="dropzone" action="http://localhost/webdesktop/web/templates/main/upload.php" method="post" enctype="multipart/form-data"></form></div>


        
        
        
        
        
        
        
        
        


        <div class="user-bar gradient">
            
        </div>
        
        <div class="panel-desktop gradient">
            <div class="panel-activator">
                <div>V</div>
            </div>
        </div>
        
        <div class="desktop"></div>
        <div class="error">Coś tu jest kurwa</div>
    </body>
</html>

<?php }} ?>
