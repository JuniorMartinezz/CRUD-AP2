<?php

class ContactController{
    var $ClientModel;

    function __construct()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?controller=main&action=login');
        }
        require_once('models/ClientModel.php');
        $this->ClientModel = new ClientModel();
    }

    function listContacts(){
        $result = $this->ClientModel->listContacts();
        $arrayContacts = array();
        while ($line = $result->fetch_assoc()) {
            array_push($arrayContacts, $line);
        }
        require_once('views/templates/header.php');
        require_once('views/contact/listContacts.php');
        require_once('views/templates/footer.php');
    }

    function insertContact(){
        require_once('views/templates/header.php');
        require_once('views/contact/insertContact.php');
        require_once('views/templates/footer.php');
    }

    function insertContactAction()
    {
        $contact = array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'message' => $_POST['message'],
            'status' => $_POST['status'],
            'description' => $_POST['description']
        );
        
        $idContact = $this->ClientModel->insertContact($contact);
        header('Location: index.php?controller=contact&action=listContacts');
    }
}

?>