<?php 

// Création et test de la connexion
$serveur = 'localhost';
$loginsql = 'root';
$passsql = '';
$base = 'activite_mer';



try {

  

  $pdo = new PDO('mysql:host=' . $serveur . ';dbname=' . $base . ';charset=utf8', $loginsql, $passsql);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  

   

    }
     catch (PDOException $exception){
      
 mail('balbunho@gmail.com', 'PDOException', $exception->getMessage());
    exit('Erreur de connexion à la base de données');

  }
  


$nom_table = 'article_mer';
   $table = "CREATE TABLE IF NOT EXISTS $nom_table(
    `Colonne 1` INT(100) NOT NULL AUTO_INCREMENT,
    `ville` CHAR(50) NULL DEFAULT NULL,
    `taille_activite` CHAR(50) NULL DEFAULT NULL,
    `nature_activite` CHAR(50) NULL DEFAULT NULL,
    `titre` CHAR(50) NULL DEFAULT NULL,
    `texte` TEXT NULL DEFAULT NULL,
    `imagee` CHAR(50) NULL DEFAULT NULL,
    PRIMARY KEY (`Colonne 1`)
    )";

$pdo->exec($table);

include_once 'creation_table.php';

$test = "SELECT * FROM article_mer WHERE ville=ville ";
$req = $pdo->query($test);
$resulat= $req->fetchall();

if(empty($resulat)){
$pdo->exec($import_data);
}

?>


