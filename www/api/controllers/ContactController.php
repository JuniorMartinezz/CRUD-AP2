<?php

class ContactController{
    var $ClientModel;

    function __construct(){
        require_once('models/ClientModel.php');
        $this->ClientModel = new ClientModel();
    }

    function listContacts(){
        $result = $this->ClientModel->listContacts();
        $arrayContacts = array();
        while ($line = $result->fetch_assoc()) {
            array_push($arrayContacts, $line);
        }
        header('Content-Type: application/json');
        echo json_encode($arrayContacts);
    }

    function listContact($idContact){
        $result = $this->ClientModel->listContact($idContact);
        if ($contact = $result->fetch_assoc()) {
            header('Content-Type: application/json');
            echo json_encode($contact);
        }else{
            header('Content-Type: application/json');
            echo('{"error": 01, "message": "contato não encontrado"}');
        }
    }

    function insertContact(){
        $contact = json_decode(file_get_contents('php://input'));
        $arrayContact = array(
            'name' => $contact -> name,
            'email' => $contact -> email,
            'message' => $contact -> message
        );
        $idContact = $this->ClientModel->insertContact($arrayContact);
        header('Content-Type: application/json');
        echo('{"cod": 01, "message": "contato foi cadastrado"}');
    }
}

?>