<?php  

include_once 'head.php';

?>

<?php include "header.php" ?>





<div id="main-content" class="container-fluid">


<div id="selec"> <form action="article.php" method="post">
  <label for="ville">VILLE</label>

  <div id="villed">
  <select class="form-control" name="ville" id="ville">
    <option value=""> Ville </option>
    <option value="fréjus">fréjus</option>
    <option value="saint-raphael">saint-raphael</option>
    <option value="saint-maxime">saint-maxime</option>
    <option value="roquebrune">roquebrune</option>
    <option value="draguignan">draguignan</option>
  </select>
</div>

  <label for="type">TYPE</label>
  <div id="typed">
  <select class="form-control" name="type" id="type">
  <option value=""> Nature </option>
    <option value="solitaire">solitaire</option>
    <option value="groupe">groupe</option>
  </select>
  </div>

  <label  for="nature de l'activité">SPORT OU DECOUVERTE</label>
  <div id="natured">
  <select class="form-control" name="nature" id="nature">
  <option value="">Type </option>
    <option value="sport">sport</option>
    <option value="decouverte">decouverte</option>
    </div>

  </select>
  <br><br>
  
  <input class="btn btn-light" type="submit" value="Submit">
</form> <div id="bg"></div>

<!-- Modal -->

<?php include 'modal.php' ?>
<?php include 'modal_connexion.php' ?>


<?php 
/*
if(isset($_POST['pseudo'])){
 
  include 'inscription.php';

}*/
?>
</body>
</html>