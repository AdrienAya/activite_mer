<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php


echo $_POST['pseudo'];
echo $_POST['mdp'];
if(!empty($_POST) && !empty($_POST['pseudo']) && !empty($_POST['mdp'])){
    require_once 'pdo.php';
    $req = $pdo->prepare('SELECT * FROM users WHERE (pseudo = :pseudo OR email = :pseudo) AND validation IS NOT NULL');
    $req->execute(['pseudo' => $_POST['pseudo']]);
    $user = $req->fetch();
  
   
    if($user == null){
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
        header('Location: index.php');

    }elseif(password_verify($_POST['mdp'], $user->mdp)){
        session_start();
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
        header('Location: index.php');
        var_dump($_SESSION['auth']);

        exit();
    }else{
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
        echo 'ggc';
        header('Location: index.php');

 }   
}
?>

</body>
</html>
