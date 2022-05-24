<?php

class SiteController{

    function home(){
        require_once("views/templates/header.php");
        require_once("views/pages/home.php");
        require_once("views/templates/footer.php");
    }

    function about(){
        require_once("views/templates/header.php");
        require_once("views/pages/about.php");
        require_once("views/templates/footer.php");
    }

    function products(){
        require_once("views/templates/header.php");
        require_once("views/pages/products.php");
        require_once("views/templates/footer.php");
    }

    function listContacts(){
        require_once('models/ClientModel.php');
        $clientModel = new ClientModel();
        $result = $clientModel -> listContacts();

        $arrayContacts = array();
        while($line = $result -> fetch_assoc()){
            array_push($arrayContacts, $line);
        }
        
        require_once('views/templates/header.php');
        require_once('views/contact/listContacts.php');
        require_once('views/templates/footer.php');
    }
}
?>