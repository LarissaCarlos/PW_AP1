<?php

class ClientController{

    public function listClients(){
        require_once('models/ClientModel.php');
        $ClientModel = new ClientModel();
        $result = $ClientModel -> listClients();

        $arrayClients = array();

        while($client = $result -> fetch_assoc()){
            array_push($arrayClients, $client);
        }

        require_once('views/templates/header.php');
        require_once('views/client/listClients.php');
        require_once('views/templates/footer.php');
    }

    public function detailsClient($idClient){
        require_once('models/ClientModel.php');
        $ClientModel = new ClientModel();
        $result = $ClientModel -> detailsClient($idClient);
        
        if($arrayClient = $result -> fetch_assoc()){

            require_once('views/templates/header.php');
            require_once('views/cliente/detailsClient.php');
            require_once('views/templates/footer.php');
        }      
    }

}