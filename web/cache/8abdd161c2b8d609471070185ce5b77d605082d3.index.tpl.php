<?php /*%%SmartyHeaderCode:1366255e1f73dbd0c37-09738451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8abdd161c2b8d609471070185ce5b77d605082d3' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1445110938,
      2 => 'file',
    ),
    '2996a8bdb882e2c7860944592c29bf484152c53f' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1445105703,
      2 => 'file',
    ),
    'b25fd0a4d850548ccb5040c99c8eb2084c046c01' => 
    array (
      0 => '.\\configs\\var.conf',
      1 => 1428184862,
      2 => 'file',
    ),
    '860d86d630dfd99abd7bbc44050a7174e418f52c' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1445108872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1366255e1f73dbd0c37-09738451',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5622a49d57a0f7_51372096',
  'variables' => 
  array (
    'MAIN_URL' => 0,
  ),
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5622a49d57a0f7_51372096')) {function content_5622a49d57a0f7_51372096($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
        <title>V Desktop start page</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
        
    <link rel="stylesheet" href="http://localhost/webdesktop/web/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/webdesktop/web/css/style.css" />
    
</head> 
    
<body>


    
<div class="full-block trans">
    <div class="centered-block text-center">
        <h1>V Webdesktop</h1>
        <div>
            Application to store user data and files. <br />
            The importance of frameworks in creating Single Page web applications.
        </div>
        <div class="btn btn-warning btn-blue trans" onclick="location.href='http://localhost/webdesktop/web/templates/main'">Try Webdesktop</div>
    </div>
</div>
    
    <script>
        var BASE_URL = 'http://localhost/webdesktop/web';
    </script>
    
    <script type="text/javascript" src="http://localhost/webdesktop/web/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="http://localhost/webdesktop/web/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://localhost/webdesktop/web/js/scripts.js"></script>
</body>
</html>

<?php }} ?>
