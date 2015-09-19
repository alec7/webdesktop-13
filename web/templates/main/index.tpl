<!DOCTYPE html>
<html id="ng-app" ng-app="app">
<head>
    {*config_load file="{$BASE_URL}/configs/var.conf"*}
    <title>{$title}</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="{$BASE_URL}/img/favicon.ico" />
 
        
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/wstyle.css" />
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/adaptive.css" />
    <link rel="stylesheet" href="{$BASE_URL}/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{$BASE_URL}/vendor/lightbox/css/lightbox.css" />

    
    <script>
        var BASE_URL = '{$BASE_URL}';
        var MAIN_URL = '{$MAIN_URL}';
    </script>

</head>
    <body  ng-controller="AppController" nv-file-drop="" uploader="uploader" filters="queueLimit, customFilter">
        <div class="genpopup"></div>
        <div class="notepad-window" id="notepad-edit">
            {include file='./ajax/notepad-edit.html'}
        </div>
        <div id="notepad-add">
            <div class="window-header">
                <div class="save-note item-trans" title="Add Note"></div>
                <img src="{$BASE_URL}/img/delete.png" class="window-close item-trans" title="Close" />
            </div>
            <input type="text" class="note-title" value="the title of my own note" />
            <textarea class="editor" name="content"></textarea>
        </div>
            
        <div class="startpopup"></div>
            {include file="user/user-forms.html"}
            
        <a href="{$BASE_URL}">back to home page</a>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="live">
                        <div class="user-files user-imgs" data="img">Images</div>
                        <div class="user-files user-music" data="music">Musics</div>
                        <div class="user-files user-video" data="video">Videos</div>
                        <div class="user-files user-docs" data="doc">Documents</div>
                        <div class="user-files user-archives" data="arhive">Arhives</div>
                    </div>
                </div>
            </div>
        </div>
        
        

        <div class="angular-user-uploader trans200">
            {literal}
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
                                            <button type="button" class="btn btn-success btn-xs upl" ng-click="item.upload()" ng-disabled="item.isReady || item.isUploading || item.isSuccess">
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
                                <button type="button" class="btn btn-success btn-s upl" ng-click="uploader.uploadAll()" ng-disabled="!uploader.getNotUploadedItems().length">
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
            {/literal}
        </div>

        <div class="user-bar trans200"></div>
        
        <div class="panel-desktop gradient trans200">
            <div class="panel-activator trans200">
                <div>V</div>
            </div>
        </div>
        
        <div class="desktop"></div>
        <div class="error">{$error}</div>
        <div id="uuu"></div>
        
        
        
    <script type="text/javascript" src="{$BASE_URL}/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="{$BASE_URL}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{$BASE_URL}/js/wscripts.js"></script>
    <script type="text/javascript" src="wajax.js"></script>
    <script type="text/javascript" src="{$BASE_URL}/js/slimscroll.js"></script>
    <script type="text/javascript" src="{$BASE_URL}/vendor/lightbox/js/lightbox.min.js"></script>

    
<script type="text/javascript" src="{$BASE_URL}/vendor/pdfviewer/pdfviewer.js"></script>
    
    
    
    <script type="text/javascript" src="{$BASE_URL}/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        {literal}
            tinymce.init({
                selector: "textarea.editor",
                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code",
                    "insertdatetime media table contextmenu paste"
                ],
                toolbar: "insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent"
            });
        {/literal}
    </script>
    
    
    <script type="text/javascript" src="{$BASE_URL}/js/angular.min.js"></script>
    <script type="text/javascript" src="./angular-file-upload.js"></script>
    <script type="text/javascript" src="./controllers.js"></script>

    </body>
</html>

