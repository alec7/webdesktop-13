<!DOCTYPE html>
<html>
<head>
    {*config_load file="{$BASE_URL}/configs/var.conf"*}
    <title>{$title}</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
        
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/wstyle.css" />
    <script defer type="text/javascript" src="{$BASE_URL}/js/jquery-1.11.2.min.js"></script>
    <script defer type="text/javascript" src="{$BASE_URL}/js/wscripts.js"></script>
    <script defer type="text/javascript" src="wajax.js"></script>
    
    
    <script defer type="text/javascript" src="{$BASE_URL}/js/dropzone.js"></script>
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/dropzone.css" />
    <script defer type="text/javascript" src="{$BASE_URL}/js/dndfunctions.js"></script>
    
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
    
    <!-- Bootstrap included -->
    {*<link rel="stylesheet" href="{$BASE_URL}/bootstrap/bootstrap.css">
    <script src="{$BASE_URL}/bootstrap/bootstrap.min.js"></script>*}
    
    
    <body>
        <div class="genpopup"></div>
        <div class="notepad-window" id="notepad-edit"> {*add-note*}
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
            
        {$BASE_URL}<br />
        {$MAIN_URL}
        <br />
        <a href="{$BASE_URL}">back to home page</a>
        
        
        

<div class="dropzone-wrap"><form class="dropzone" action="{$MAIN_URL}/upload.php" method="post" enctype="multipart/form-data"></form></div>


        <div class="user-bar gradient">
            
        </div>
        
        <div class="panel-desktop gradient">
            <div class="panel-activator">
                <div>V</div>
            </div>
        </div>
        
        <div class="desktop"></div>
        <div class="error">{$error}</div>
    </body>
</html>

