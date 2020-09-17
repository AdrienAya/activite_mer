<?php

include_once 'pdo.php';

$id = $_GET['id'];
echo $id;
session_start();
if(isset($_SESSION['auth'])){

    $req = $pdo->prepare('DELETE FROM article_users WHERE id_article = ?');
    $req->execute([$id]);
    header('location:compte.php');
    exit();
}

else{

    header('location:index.php');
    exit();

}

?>