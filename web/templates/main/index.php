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

//$error = "Coś tu jest";
//$smarty->assign('error', $error);

//$date = date('Y-m-d', time()); //date('m/d/Y h:i:s a', time());
//$oDesktop->ClearCookiesTable($date);


//ini_set('display_errors', 1); 
//error_reporting(E_ALL);


function dump($value) {
    echo '<pre style="color: red;">';
    print_r($value);
    echo '</pre>';
}

if (isset($_POST)){
//dump($_POST);die();
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
//    if ($_POST['action'] == 'updateCookiesTable') {
//        if($oLogin->updateCookieTable($_POST)){
//            die();
//        }
//    }
    
    if ($_POST['action'] == 'loadByCookie') {
        if($user = $oLogin->loginByCookie($_POST)){
            $smarty->assign('user', $user);
            $smarty->display('ajax/user-panel.html');
            die();
        }else{
            echo "Fatal error!!! Please reload the page";
            $smarty->assign('error', "Fatal error!!! Please reload the page");
            
            if (isset($_SERVER['HTTP_COOKIE'])) {
                $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
                foreach ($cookies as $cookie) {
                    $parts = explode('=', $cookie);
                    $name = trim($parts[0]);
                    setcookie($name, '', time() - 1000);
                    setcookie($name, '', time() - 1000, '/');
                }
            }


            die();
        }
    }
    
    if ($_POST['action'] == 'loadNotepad') {
        if($notd = $oDesktop->loadNotepad($_POST)){
            $smarty->assign('notd', $notd);
            $smarty->display('ajax/user-notepad.html');
            die();
        }else{
            echo "You have no items in notebook";
            $smarty->assign('error', "You have no items in notebook");
            die();
        }
    }
    
    if ($_POST['action'] == 'deleteNotepadItem') {
        if($oDesktop->deleteNotepadItem($_POST)){
            die();
        }else{
            //echo "You have no items in notebook";
            //$smarty->assign('error', "You have no items in notebook");
            die();
        }
    }
    
    if ($_POST['action'] == 'editNotepad') {
        if($editntd = $oDesktop->loadNotepadEditForm($_POST)){
            $smarty->assign('editntd', $editntd);
            $smarty->display('ajax/notepad-edit.html');
            die();
        }
        else{
            echo "Error! Please reload the page";
            $smarty->assign('error', "Error! Please reload the page");
            die();
        }
    }
    
    if ($_POST['action'] == 'addNote') {
        if($oDesktop->addNote($_POST)){
            die();
        }else{
            //echo "You have no items in notebook";
            //$smarty->assign('error', "You have no items in notebook");
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