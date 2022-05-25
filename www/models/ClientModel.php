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

    function listClients(){
        $sql = 'SELECT * FROM clients';
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
}

?>