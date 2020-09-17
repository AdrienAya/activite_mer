
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

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<?php include "pdo.php"?>
<?php include "function.php" ?>
<div id="main-content2" class="container-fluid">



<div id="selec2">

<?php 

//Stockage variable relatif au pseudo et email
$pseudo=$_POST['pseudo'];
$mail=$_POST['email'];
// mdp crypté pour la sécurité stocker dans une variable
$mdp=password_hash($_POST['mdp'],PASSWORD_BCRYPT);
// creation variable et connexion a la base de donnée pour pour verifier si un email existe
$checkb = "SELECT * FROM users WHERE email=?";
$req = $pdo->prepare($checkb);
$req->execute([$mail]);
$checke = $req->fetch();
$check=true;
//creation token pour valider le compte
$token = str_random(60);


//si pseudo est vide ou ne rempli pas les critère d'un 'bon' pseudo
if(empty($_POST['pseudo']) || !preg_match('/^[a-z0-9_]+$/', $_POST['pseudo'])){

echo "<h2 style='color:white'>Vous n'avez pas rentrer de pseudo ou alors n'on valide<br>(caractère speciaux interdit ex:['-\"_\/)=]&²)</h2>";
$check=false;
}

// check si email est vide
if(empty($mail)){

  echo "<h2 style='color:white'>Vous n'avez pas rentrez d'email</h2>";
  $check=false;

}

// si email déja dans la base de donnée inscription impossible
if($checke){

  echo "<h2 style='color:white'>Cette email a déja était utiliser pour une inscription</h2>";
  $check=false;
}


// si pas de mdp remplis message erreur
if(empty($_POST['mdp'])){
echo "<h2 style='color:white'>Mot de passe incorrect ou inexistant</h2>";
$check=false;

}

// si aucune erreur second partie de l'inscription ajout du compte dans la bdd


if($check) {


// importation des donnée du compte
$import_data ="INSERT INTO users (pseudo,email,mdp,confirmation_token)
VALUES
('$pseudo','$mail','$mdp','$token')";

 if(!$checke){
  $pdo->exec($import_data);
  $user_id = $pdo->lastInsertId();
  echo  "<h4 style='color:white;'>bonjour $pseudo, un email vous a était envoyer a l'adresse mail '$mail' pour confirmer votre inscriptions.<br><br>
  A la suite de votre confirmation vous pourrez soumettre des articles pour qu'il sois diffuser sur notre site web.
  </h4>"; 
  
 // envoie email
  mail($mail, 'My Subject', "pour valiedr votre compte cliquer sur ce lien", "activite_lac.test/confirmation.php?id=$user_id&token=$token");
  
    }
    exit();

 }

 else{

  echo "<button id='exit_inscription' > Retour a lacceuil </button>";

 }

?> 
</div>
    
    <script src='javascript.js'></script>
</body>
</html>