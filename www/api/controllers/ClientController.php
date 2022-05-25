<?php

class ClientController{
    var $ClientModel;

    function __construct(){
        require_once('models/ClientModel.php');
        $this->ClientModel = new ClientModel();
    }

    function listClients(){
        $result = $this->ClientModel->listClients();
        $arrayClients = array();
        while ($line = $result->fetch_assoc()) {
            array_push($arrayClients, $line);
        }
        header('Content-Type: application/json');
        echo json_encode($arrayClients);
    }

    function listClient($idClient){
        $result = $this->ClientModel->listClient($idClient);
        if ($client = $result->fetch_assoc()) {
            header('Content-Type: application/json');
            echo json_encode($client);
        }else{
            header('Content-Type: application/json');
            echo('{"error": 01, "message": "cliente não encontrado"}');
        }
    }

    function insertClient(){
        $client = json_decode(file_get_contents('php://input'));
        $arrayClient = array(
            'name' => $client -> name,
            'phone' => $client -> phone,
            'email' => $client -> email,
            'address' => $client -> address
        );
        $idClient = $this->ClientModel->insertClient($arrayClient);
        header('Content-Type: application/json');
        echo('{"cod": 01, "message": "cliente foi cadastrado"}');
    }

    function updateClient($idClient){
        $client = json_decode(file_get_contents('php://input'));
        $arrayClient = array(
            'idClient' => $idClient,
            'name' => $client -> name,
            'phone' => $client -> phone,
            'email' => $client -> email,
            'address' => $client -> address
        );
        header('Content-Type: application/json');
        echo('{"message": "cliente atualizado"}');
        $this->ClientModel->updateClient($arrayClient);
    }

    function deleteClient($idClient){
        header('Content-Type: application/json');
        echo('{"message": "cliente deletado"}');
        $this->ClientModel->deleteClient($idClient);
    }

    function savePhoto($idClient){
        if (isset($_FILES["photo"]) && $_FILES["photo"]['name'] != ''){
            $foto_temp = $_FILES["photo"]["tmp_name"];    //pega o caminho temporário do arquivo
            $foto_name = $_FILES["photo"]["name"];        //pega o nome

            $extensao = str_replace('.', '', strrchr($foto_name, '.')); //strtolower(end(explode('.', $foto_name))); //seleciona a extenção da imagem
            $max_width = 600; //define largura máxima
            $max_height = 600; //define altura míxima

            // Carrega a imagem 
            $img = null;

            //Transforma a imagem em JPG
            if ($extensao == 'jpg' || $extensao == 'jpeg') {
                $img = imagecreatefromjpeg($foto_temp);
            } else if ($extensao == 'png') {
                $img = imagecreatefrompng($foto_temp);
            } else if ($extensao == 'gif') {
                $img = imagecreatefromgif($foto_temp);
            } else
                $img = imagecreatefromjpeg($foto_temp);

            // Se a imagem foi carregada com sucesso, testa o tamanho da mesma
            if ($img) {
                // Pega o tamanho da imagem e calcula proporção de resize 
                $width  = imagesx($img);
                $height = imagesy($img);
                $scale  = min($max_width / $width, $max_height / $height);
                // Se a imagem é maior que o permitido, encolhe ela! 
                if ($scale < 1) {
                    $new_width = floor($scale * $width);
                    $new_height = floor($scale * $height);
                    // Cria uma imagem temporária 
                    $tmp_img = imagecreatetruecolor($new_width, $new_height);
                    // Copia e resize a imagem velha na nova     
                    imagecopyresampled(
                        $tmp_img,
                        $img,
                        0,
                        0,
                        0,
                        0,
                        $new_width,
                        $new_height,
                        $width,
                        $height
                    );
                    imagedestroy($img);
                    $img = $tmp_img;
                }
            }

            //cria imagem no diretório @imagejpeg($img,"diretorio/".$id_noticia) se já tiver com este nome vai substituir
            $localFile = "assets/img/clients/{$idClient}.jpg";
            imagejpeg($img, $localFile);
        }else{
            $linkPhoto = "assets/img/clients/{$idClient}.jpg";
            if(is_file($linkPhoto)){
                unlink($linkPhoto);
            }
            header('Location: index.php?controller=client&action=listClients');
        }
    }
}
