<?php

require_once("./api.php");

//www.monsite.fr/tache
try{
    if(!empty($_GET['demande'])){
        $url = explode("/", filter_var($_GET['demande'],FILTER_SANITIZE_URL));
        switch($url[0]){
            case "tache" : 
                if (empty($url[1])){
                    getTache();
                } else {
                    getTache();
                }
            break;
            default : throw new Exception ("La demande n'est pas valide, verifiez l'url.");    
        }

    } else {
        throw new Exception ("Problème de récupération de donnée.");
    }
} catch(Exception $e){
    $erreur =[
        "message" => $e->getMessage(),
        "code" => $e->getCode()
    ];
    print_r($erreur);
}