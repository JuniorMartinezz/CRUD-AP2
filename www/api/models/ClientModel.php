<?php

class ClientModel{

    var $Connection;

    function __construct(){
        require_once('db/ConnectClass.php');
        $connectClass = new ConnectClass();
        $connectClass -> openConnect();
        $this -> Connection = $connectClass -> getConn();
    }

    function listContacts(){
        $sql = 'SELECT * FROM contacts';
        return $this -> Connection -> query($sql);
    }

    function listContact($idContact){
        $sql = "SELECT * FROM contacts WHERE idContact = {$idContact}";

        return $this -> Connection -> query($sql);
    }

    function insertContact($contact){
        $sql = "
            INSERT INTO 
            contacts (name, email, message)
            VALUES(
                '{$contact['name']}', 
                '{$contact['email']}', 
                '{$contact['message']}'
            )";

        $this -> Connection -> query($sql);
        return  $this -> Connection -> insert_id;
    }

    function deleteContact($idContact){
        $sql = "
            DELETE FROM
                contacts
            WHERE
            idContact = '{$idContact}'
        ";

        return $this -> Connection -> query($sql);
    }

    function listClients(){
        $sql = 'SELECT * FROM clients';
        return $this -> Connection -> query($sql);
    }

    function listClient($idClient){
        $sql = "SELECT * FROM clients WHERE idClient = {$idClient}";

        return $this -> Connection -> query($sql);
    }
    
    function insertClient($client){
        $sql = "
            INSERT INTO 
            clients (name, phone, email, address)
            VALUES(
                '{$client['name']}', 
                '{$client['phone']}', 
                '{$client['email']}', 
                '{$client['address']}'
            )";

        $this -> Connection -> query($sql);
        return  $this -> Connection -> insert_id;
    }

    function updateClient($client){
        $sql = "
            UPDATE 
                clients
            SET
                name='{$client['name']}',
                email='{$client['email']}',
                phone='{$client['phone']}',
                address='{$client['address']}'
            WHERE
                idClient = '{$client['idClient']}'
            ";
        
        $this -> Connection -> query($sql);
        return $this -> Connection -> insert_id;
    }

    function deleteClient($idClient){
        $sql = "
            DELETE FROM
                clients
            WHERE
            idClient = '{$idClient}'
        ";

        return $this -> Connection -> query($sql);
    }
}

?>