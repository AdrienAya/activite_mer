<?php

include_once 'pdo.php';

$id = $_GET['id'];
echo $id;
session_start();
if(isset($_SESSION['auth'])){

    $update = $pdo->prepare("UPDATE article_users SET validé=0 WHERE id_article = ?");
    $update->execute([$id]);

   // $req = $pdo->prepare('DELETE FROM article_users WHERE id_article = ?');
   // $req->execute([$id]);
    header('location:compte.php');
    exit();
}

else{

    header('location:index.php');
    exit();

}

?>