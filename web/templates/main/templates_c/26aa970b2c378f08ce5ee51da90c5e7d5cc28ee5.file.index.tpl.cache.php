<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-26 00:04:10
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1039155a29d040f38a4-81309372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26aa970b2c378f08ce5ee51da90c5e7d5cc28ee5' => 
    array (
      0 => 'index.tpl',
      1 => 1437861844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1039155a29d040f38a4-81309372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55a29d04150d01_07971655',
  'variables' => 
  array (
    'title' => 0,
    'BASE_URL' => 0,
    'MAIN_URL' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a29d04150d01_07971655')) {function content_55a29d04150d01_07971655($_smarty_tpl) {?><!DOCTYPE html>
<html id="ng-app" ng-app="app">
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/bootstrap/bootstrap.css" />
    <?php echo '<script'; ?>
 defer type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 defer src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 defer type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/wscripts.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 defer type="text/javascript" src="wajax.js"><?php echo '</script'; ?>
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
    
    
        <?php echo '<script'; ?>
 defer type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/js/angular.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 defer src="angular-file-upload.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 defer src="controllers.js"><?php echo '</script'; ?>
>
    
    
    
</head>
    <body  ng-controller="AppController" nv-file-drop="" uploader="uploader" filters="queueLimit, customFilter">
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


        
        
        
        
        
        <div class="angular-user-uploader trans200">
            
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <h3>Select files</h3>
                            <div ng-show="uploader.isHTML5">
                                <div class="drophere my-drop-zone" nv-file-over="" uploader="uploader">
                                    Drop here your files
                                </div>
                            </div>
                            Multiple
                            <input type="file" nv-file-select="" uploader="uploader" multiple  /><br/>

                            Single
                            <input type="file" nv-file-select="" uploader="uploader" />
                        </div>

                        <div class="col-md-7" style="margin-bottom: 40px">

                            <h3>Upload queue</h3>
                            <p>Queue length: {{ uploader.queue.length }}</p>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="50%">Name</th>
                                        <th ng-show="uploader.isHTML5">Size</th>
                                        <th ng-show="uploader.isHTML5">Progress</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="item in uploader.queue">
                                        <td><strong>{{ item.file.name }}</strong></td>
                                        <td ng-show="uploader.isHTML5" nowrap>{{ item.file.size/1024/1024|number:2 }} MB</td>
                                        <td ng-show="uploader.isHTML5">
                                            <div class="progress" style="margin-bottom: 0;">
                                                <div class="progress-bar" role="progressbar" ng-style="{ 'width': item.progress + '%' }"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span ng-show="item.isSuccess"><i class="glyphicon glyphicon-ok"></i></span>
                                            <span ng-show="item.isCancel"><i class="glyphicon glyphicon-ban-circle"></i></span>
                                            <span ng-show="item.isError"><i class="glyphicon glyphicon-remove"></i></span>
                                        </td>
                                        <td nowrap>
                                            <button type="button" class="btn btn-success btn-xs" ng-click="item.upload()" ng-disabled="item.isReady || item.isUploading || item.isSuccess">
                                                <span class="glyphicon glyphicon-upload"></span> Upload
                                            </button>
                                            <button type="button" class="btn btn-warning btn-xs" ng-click="item.cancel()" ng-disabled="!item.isUploading">
                                                <span class="glyphicon glyphicon-ban-circle"></span> Cancel
                                            </button>
                                            <button type="button" class="btn btn-danger btn-xs" ng-click="item.remove()">
                                                <span class="glyphicon glyphicon-trash"></span> Remove
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div>
                                <div>
                                    Queue progress:
                                    <div class="progress" style="">
                                        <div class="progress-bar" role="progressbar" ng-style="{ 'width': uploader.progress + '%' }"></div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success btn-s" ng-click="uploader.uploadAll()" ng-disabled="!uploader.getNotUploadedItems().length">
                                    <span class="glyphicon glyphicon-upload"></span> Upload all
                                </button>
                                <button type="button" class="btn btn-warning btn-s" ng-click="uploader.cancelAll()" ng-disabled="!uploader.isUploading">
                                    <span class="glyphicon glyphicon-ban-circle"></span> Cancel all
                                </button>
                                <button type="button" class="btn btn-danger btn-s" ng-click="uploader.clearQueue()" ng-disabled="!uploader.queue.length">
                                    <span class="glyphicon glyphicon-trash"></span> Remove all
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            
        </div>
        
        
        
        


        <div class="user-bar trans200"></div>
        
        <div class="panel-desktop gradient trans200">
            <div class="panel-activator trans200">
                <div>V</div>
            </div>
        </div>
        
        <div class="desktop"></div>
        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    </body>
</html>

<?php }} ?>
