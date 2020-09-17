<?php include_once "header.php"?>
<?php include "pdo.php"?>
<?php include "function.php" ?>
<div id="main-content2" class="container-fluid">



<div id="selec2">



<?php 

$user_id = $_GET['id'];
$token = $_GET['token'];


include_once "pdo.php";

$req = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$req->execute([$user_id]);
$user = $req->fetch();
session_start();

if($user && $user->confirmation_token == $token ){
    $pdo->prepare('UPDATE users SET confirmation_token = NULL, validation = NOW() WHERE id = ?')->execute([$user_id]);
    $_SESSION['flash']['success'] = 'Votre compte a bien été validé';
    $_SESSION['auth'] = $user;

    echo "<h2 style='color:white;text-align:center'>" .$_SESSION['flash']['success']. "</h2>";
    echo "<button id='exit_page'>Retour au menu</button>";
    echo "<button id='exit_article'>ecrire un article</button>";

}
else{
    $_SESSION['flash']['danger'] = "Ce token n'est plus valide";
    echo $_SESSION['flash']['danger'];
}

?> 


</div>
    
    <script src='javascript.js'></script>
</body>
</html>