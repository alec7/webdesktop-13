<!DOCTYPE html>
<html>
<head>
    {*config_load file="var.conf" section="setup"*}
    <title>{$title}</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
        
    <link rel="stylesheet" type="text/css" href="{$BASE_URL}/css/wstyle.css" />
    <script type="text/javascript" src="{$BASE_URL}/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="{$BASE_URL}/js/wscripts.js"></script>
    <script type="text/javascript" src="wajax.js"></script>
    
    <!-- Bootstrap included -->
    {*<link rel="stylesheet" href="{$BASE_URL}/bootstrap/bootstrap.css">
    <script src="{$BASE_URL}/bootstrap/bootstrap.min.js"></script>*}
    
    
    <body>
        <div class="startpopup"></div>
            {include file="user/user-forms.html"}
            
        {$BASE_URL}<br />
        {$MAIN_URL}
        <br />
        <a href="{$BASE_URL}">back to home page</a>


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

