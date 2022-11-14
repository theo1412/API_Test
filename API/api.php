<?php

function getTache(){
    $pdo = getConnexion();
    $req = "SELECT * from tache";
    $stmt = $pdo->prepare($req);
    $stmt->execute();
    $tache = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    sendJSON($tache);
}

function getConnexion(){
    return new PDO("mysql:host=localhost;dbname=agendaemlv;charset=utf8","root","");
}

function sendJSON($infos){
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    echo json_encode($infos,JSON_UNESCAPED_UNICODE);
}