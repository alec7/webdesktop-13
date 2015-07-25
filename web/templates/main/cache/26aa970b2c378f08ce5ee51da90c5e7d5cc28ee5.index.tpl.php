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
    'a1e986bbba915f5b96d8626d30df4c238c131cee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\webdesktop\\web\\templates\\main\\ajax\\notepad-edit.html',
      1 => 1429392271,
      2 => 'file',
    ),
    '0ccedffad00cf56538e5676ec51c4b18823152cd' => 
    array (
      0 => 'user\\user-forms.html',
      1 => 1437858871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1039155a29d040f38a4-81309372',
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55b408d3d88c89_10981554',
  'has_nocache_code' => false,
  'cache_lifetime' => 1,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b408d3d88c89_10981554')) {function content_55b408d3d88c89_10981554($_smarty_tpl) {?><!DOCTYPE html>
<html id="ng-app" ng-app="app">
<head>
    
    <title>V desktop by Ivan Dublianski</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="http://localhost/webdesktop/web/templates/main/../../img/favicon.ico" />
 
        
    <link rel="stylesheet" type="text/css" href="http://localhost/webdesktop/web/templates/main/../../css/wstyle.css" />
    <link rel="stylesheet" href="http://localhost/webdesktop/web/templates/main/../../bootstrap/bootstrap.css" />
    <script defer type="text/javascript" src="http://localhost/webdesktop/web/templates/main/../../js/jquery-1.11.2.min.js"></script>

    <script defer src="http://localhost/webdesktop/web/templates/main/../../bootstrap/bootstrap.min.js"></script>
    
    <script defer type="text/javascript" src="http://localhost/webdesktop/web/templates/main/../../js/wscripts.js"></script>
    <script defer type="text/javascript" src="wajax.js"></script>
    
    
    
    
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
    
    
        <script defer type="text/javascript" src="http://localhost/webdesktop/web/templates/main/../../js/angular.min.js"></script>
        <script defer src="angular-file-upload.js"></script>
        <script defer src="controllers.js"></script>
    
    
    
</head>
    <body  ng-controller="AppController" nv-file-drop="" uploader="uploader" filters="queueLimit, customFilter">
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
        <div class="row-log"> <div class="login-data">Nick-name: </div> <input class="trans200" style="background: white;" type='text' name='nickname' /></div>
        <div class="row-log"> <div class="login-data">Password: </div> <input class="trans200" style="background: white;" type='password' name='password' /></div>
        <div class="submit login trans-bez-250">Login</div>
        <div class="submit registration trans-bez-250">Registration</div>
        <div class="submit trans-bez-250" style="margin-left: 107px;">Forgot password ?</div>
    </div>
    <div class="clear"></div>
    <div class="registration-form">
        <p>this is registration user form</p>
        <div class="submit registration trans-bez-250">Registration</div>
    </div>
</div>

            
        http://localhost/webdesktop/web/templates/main/../..<br />
        http://localhost/webdesktop/web/templates/main
        <br />
        <a href="http://localhost/webdesktop/web/templates/main/../..">back to home page</a>


        
        
        
        
        
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
        <div class="error"></div>
    </body>
</html>

<?php }} ?>
