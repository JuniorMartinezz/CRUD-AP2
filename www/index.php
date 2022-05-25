<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_GET['controller'])){
    require_once('controllers/SiteController.php');
    $site = new SiteController();
    $site -> home();
}else{
    switch ($_REQUEST['controller']){
        case 'site':
            require_once("controllers/SiteController.php");
            $site = new SiteController();
            if(!isset($_GET['action'])){
                $site -> home();
            }else{
                switch ($_REQUEST['action']) {
                    case 'home':
                        $site -> home();
                    break;

                    case 'about':
                        $site -> about();
                    break;

                    case 'products':
                        $site -> products();
                    break;

                    case 'contact':
                        $site -> listContacts();
                    break;
                }
            }
        break;

        case 'client':
            require_once("controllers/ClientController.php");
            $ClientController = new ClientController(); 
            if(!isset($_GET['action'])){
                $ClientController -> insertClient();
            }else{
                switch ($_REQUEST['action']) {
                    case 'insertClient':
                        $ClientController -> insertClient();
                    break;

                    case 'insertClientAction':
                        $ClientController -> insertClientAction();
                    break;

                    case 'listClients':
                        $ClientController -> listClients();
                    break;
                }
            }
        break;

        case 'contact':
            require_once("controllers/SiteController.php");
            $SiteController = new SiteController(); 
            if($_REQUEST['action'] = 'listClients'){
                $SiteController -> listContacts();
            }
        break;

        case 'admin':
            require_once("admin/controllers/MainController.php");
        break;
    }
}

?>