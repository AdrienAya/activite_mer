<?php 

if(isset($_GET['check'])){

$check = $_GET['check'];


}

if(empty($_GET['check'])){
$check=true;
$uptade =array($_GET['id'],$_GET['titre'],$_GET['text']);
}

if($check==='update'){
include_once 'pdo.php';
$id=$_GET['id'];

$new_article = array($_POST['contenue_text'],$_POST['titre'],$_POST['type'],$_POST['nature'],$_POST['ville']);

$article = $pdo->prepare("UPDATE article_users SET titre='{$new_article[1]}', nature='{$new_article[3]}',type='{$new_article[2]}',ville='{$new_article[4]}', text_article='{$new_article[0]}' WHERE id_article = ?");
$article->execute([$id]);
header("location:compte.php");
exit();

}

else{


header("location:compte.php?id=$uptade[0]&check=$check");

}

?>