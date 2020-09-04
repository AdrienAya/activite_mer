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


<div id="selec"> <form action="article.php" method="post">
  <label for="ville">VILLE</label>

  <div id="villed">
  <select class="form-control" name="ville" id="ville">
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
    <option value="solitaire">solitaire</option>
    <option value="groupe">groupe</option>
  </select>
  </div>

  <label  for="nature de l'activité">SPORT OU DECOUVERTE</label>
  <div id="natured">
  <select class="form-control" name="nature" id="nature">
    <option value="sport">sport</option>
    <option value="decouverte">decouverte</option>
    </div>

  </select>
  <br><br>
  
  <input class="btn btn-light" type="submit" value="Submit">
</form> <div id="bg"></div>




<div>



</div>




</div>

<!-- <footer class="footer container-fluid">
        <div class="row">
            <div class="title col-xl-3 col-lg-3 col-md-3 col-sm-3 ">
                <p>Ecologie-Tourisme</p>
            </div>
            <div class="reseaux-sociaux col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                <a href="#"><img src="../image/fb.svg" alt="facebook"></a>
                <a href="#"><img src="../image/lin.svg" alt="lin"></a>
                <a href="#"><img src="../image/wa.svg" alt="what's app"></a>
                <a href="#"><img src="../image/email.jpg" alt="email var nature"></a>
            </div>
            <div class="container_logo col-xl-2 col-lg-2 col-md-2 col-sm-2" >
            <a href="#"><img class="img-fluid" src="../image/logo.png" alt="Logo var nature"></a>
            </div>
        </div>
 
    </footer>  
-->
    <script src="javascript.js"></script>
</body>
</html>