{include file="header.tpl"}
{*$smarty.server.SERVER_NAME*}
    
    {*foreach from=$main item=frst name=frst}
        {$frst.name}
            <br /><a href="{$BASE_URL}/templates/main/index.php"> {$BASE_URL} - to subpage </a><br />
        {$frst.school}
    {/foreach*}
    {$BASE_URL}
    <br />
    Welcome in V CMS. This is beta version!!! Don't worry. I'll perfecting it!<br />
    You are in main file directory -> index.tpl. And that is a link to subpage: <a href="{$MAIN_URL}"> ----------LINK---------- </a> <br />
    (I hope it will not be necessary).
    
        <br />Anyway, you have base css, jquery.min.js and Bootstrap included.
    
{include file="footer.tpl"}
