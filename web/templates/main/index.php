<?php

require_once '../../includes/user.class.php';
require '../../../libs/Smarty.class.php';
require_once '../../includes/desktop.class.php';
require_once '../../includes/login.class.php';

$smarty = new Smarty;
$oUser = new User;
$oDesktop = new Desktop;
$oLogin = new Login;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 1;

$MAIN_URL = $oUser->getBaseUrl();
$smarty->assign('MAIN_URL', $MAIN_URL);

$BASE_URL = $MAIN_URL."/../..";
$smarty->assign('BASE_URL', $BASE_URL);


$smarty->assign('error', "Coś tu jest kurwa");

//$date = date('Y-m-d', time()); //date('m/d/Y h:i:s a', time());
//$oDesktop->ClearCookiesTable($date);

function dump($value) {
    echo '<pre style="color: red;">';
    print_r($value);
    echo '</pre>';
}

if (isset($_POST)){
    if ($_POST['login'] == 'login') {
        if($user = $oLogin->Log($_POST)){
            $smarty->assign('user', $user);
            $smarty->display('ajax/user-panel.html');
            die();
        }else{
            echo "Error!!! Complete all fields!";
            die();
        }
    }
    if ($_POST['login'] == 'saveCookie') {
        if($oLogin->saveCookie($_POST)){
            die();
        }
    }
    if ($_POST['action'] == 'loadByCookie') {
        if($user = $oLogin->loginByCookie($_POST)){
            $smarty->assign('user', $user);
            $smarty->display('ajax/user-panel.html');
            die();
        }else{
            echo "Fatal error!!! Write to administrator";
            $smarty->assign('error', "Fatal error!!! Write to administrator");
            die();
        }
    }
    
}






if($MAIN_URL !=''){

    $smarty->assign('title', "V desktop by Ivan Dublianski");
    $smarty->display('index.tpl');
}else{
    echo "error";
    die();
}

