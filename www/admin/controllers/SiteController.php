<?php


class SiteController{

    function home(){
        require_once('views/templates/header.php');
        require_once('views/main/home.php');
        require_once('views/templates/footer.php');
    }            
}

?>