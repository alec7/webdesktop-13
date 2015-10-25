<?php

require_once 'includes/user.class.php';
require '../libs/Smarty.class.php';

$smarty = new Smarty;
$oUser = new User;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 1;

$BASE_URL = $oUser->getBaseUrl();
$smarty->assign('BASE_URL', $BASE_URL);

$MAIN_URL = $BASE_URL."/templates/main";
$smarty->assign('MAIN_URL', $MAIN_URL);

if($BASE_URL !=''){
    
    $smarty->assign('title', "V Desktop start page");
    $smarty->display('index.tpl');
}else{
    echo "error";
}