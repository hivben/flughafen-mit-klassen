<?php

    try{
    $pdo = new PDO('mysql:host=localhost;dbname=flugterminal','root','');
    Alert("Verbindung erfolgreich.");    
    }
    catch(Exception $ex){
        //echo "Verbindung fehlgeschlagen.";
        //Alert("Verbindung fehlgeschlagen.");  

        die(Alert("Verbindung fehlgeschlagen."));
    }

?>