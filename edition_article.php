<?php 

include_once 'head.php';
include_once 'pdo.php';

if (!empty($_SESSION['auth']) ){


$id=$_SESSION['auth']->id;
$article = array($_POST['ville'],$_POST['type'],$_POST['nature'],$_POST['titre'],$_POST['contenue_text'],);
$req = "INSERT INTO article_users (titre,ville,nature,type,id_users,validé,text_article,date_edition)
VALUES
('$article[3]','$article[0]','$article[2]','$article[1]','$id',0,'$article[4]',NOW())";

}



$pdo->exec($req);
header('location:compte.php');
exit();
?>