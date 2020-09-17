<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>En Mer</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@700&display=swap" rel="stylesheet">

    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>


</head>
<body>

<div id="navbar">


<ul>
<li>Accueil</li>
<li>Terre</li>
<li>Mer</li>
<li>Hebergements</li>
</ul>


</div>

<?php include "header.php" ?>
<?php include "pdo.php"?>


<div id="main-content" class="container-fluid">

<?php




if(!empty($_POST)){

$ville=$_POST['ville'];
$nature=$_POST['nature'];
$type=$_POST['type'];
$test = "SELECT * FROM article_mer WHERE ville = '{$ville}' AND taille_activite = '{$type}' AND nature_activite= '{$nature}'";

$req = $pdo->query($test);


$resultat= $req->fetch();

if(empty($resultat->nature_activite )){

    $article_empty="Pas d'article correspondant";
  
}

}

 ?>

<div id="selec"> 

<?php 

if(!empty($resultat->nature_activite)){

echo '<div id="titre_article"><h3>'.$resultat->titre.'</h3></div>' ;  
echo '<div id="texte_article"><p>'.$resultat->texte.'</p></div>';
echo '<div id=image_article><img src="image/'.$resultat->imagee.'"/></div>';

}
else if(empty($resultat->nature_activite)){

    echo '<div id="empty"><h4>'.$article_empty.'</div></h4>';
}

?>
<div id="bg"></div>