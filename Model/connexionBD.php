<?php
    
    include_once __DIR__."/../config.ini.php";
    function newConnect() {
    $conn = NULL;
    GLOBAL $host,$dbname,$userBD,$passwordBD;
   
        try {
           
            // objet PDO qui permet de faire des requete vers la BD
            $conn = new PDO('mysql:host='. $host.';dbname='.$dbname.'',$userBD,$passwordBD);
        } catch (PDOException $e) {
            echo 'Impossible de se connecter à la BDD : '.$e->getMessage();
            
        }

        return $conn;
    }
    
   

    function closeConn(){
        return NULL;
    }

   

?>