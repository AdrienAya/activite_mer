
<?php include "pdo.php"?>

<div id="navbar">


<ul>
<li>Accueil</li>
<li>Terre</li>
<li>Mer</li>
<li>Hebergements</li>
</ul>


</div>



<Header class="container-fluid">
<img id="logo" src="image/logo-09.png">


<?php


if(empty($_SESSION['auth'])){
echo    "<ul id='signinUp'>";
echo "<li><a href='' class='btn btn-default btn-rounded' data-toggle='modal' data-backdrop='false' data-target='#darkModalForm'>inscription </a><li>/</li></li>";
echo "<li><a href='' class='btn btn-default btn-rounded' data-toggle='modal' data-backdrop='false' data-target='#darkModalForm2'>Connexion </a></li></ul>";

}


else{

echo "bonjour " .$_SESSION['auth']->pseudo. " ! ";
echo " <a href='compte.php'>Mon compte</a><span> /</span>";
echo " <a href='deconnexion.php'>Déconnexion</a>";

}


?>

<div id="intro" class="container" "><img class="col-lg-3 col-md-3 col-sm-3 col-3" src="image/10046.jpg"><p class="col-lg-9 col-md-9 col-sm-9 col-9"">Lorem ipsum dolor sit amet,
     consectetur adipiscing elit. Suspendisse non ante hendrerit,
      porta mauris eu, facilisis sem. Proin quam tellus, viverra sit amet
       erat vitae, pretium aliquet ipsum. Vivamus dictum quam eget sem hendrerit
    convallis</p>
    <button>DONNER VOTRE AVIS</button>
</div>

<h5>ACTIVITES</h5>

</Header>
 