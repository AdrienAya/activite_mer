<?php 
 include_once 'head.php';
include_once 'pdo.php';


$id = $_SESSION['auth']->id;
$req = $pdo->prepare('SELECT * FROM article_users WHERE id_users = ?');
$req->execute([$id]);
$user = $req->fetchall();
$tab_ville = array('fréjus','saint-raphael','saint-maxime','roquebrune','draguignan');
$tab_nature =array('solitaire','groupe');
$tab_type = array('sport','decouverte');
if(isset($_GET['check'])){
 
  $check = $_GET['check'];
  $id=$_GET['id'];
  $article = $pdo->prepare('SELECT * FROM article_users WHERE id_article = ?');
  $article->execute([$id]);
  $article_contenue = $article->fetch();
  $update = 'update';


}



if (!empty($_SESSION['auth'])){


echo "<div style='background:grey;display:flex;height:30px;'><h5>Bonjour " .$_SESSION['auth']->pseudo. "</h5><a href='deconnexion.php'style='position:absolute;right:1%;'>Deconnexion</a></div>";


echo "<div id='main-content' class='container-fluid' style='height:100vh';>
       


<div id='selec_form'  class='col-lg-7 col-md-7 col-sm-7 col-7'>";
       
if(isset($check)){
      echo " <h3 style='text-align:center';>Modifier</h3>";
    }
    else{
      echo "<h3 style='text-align:center';>Ecrire un article</h3>";
     }
      echo "<div class='row'>";

      if(isset($check)){

        echo "<form  class='row' style='width:100%'; method='post' action='edit.php?check=$update&id=$id'>";

      }

      else{
       echo "<form  class='row' style='width:100%'; method='post' action='edition_article.php'>";
      }

       
       echo "<select required class='form-control' class='col-lg-3 col-md-3 col-sm-3 col-3' name='ville' id='ville' style='width:100px';>";
       if(isset($check)){
         $lenght = count($tab_ville);
         echo "<option value=".$article_contenue->ville.">" .$article_contenue->ville. "</option>";
         for($i = 0; $i < $lenght; $i++) {
           if($tab_ville[$i]===$article_contenue->ville){
             unset($tab_ville[$i]);
                    }
              
           else {echo " <option value=".$tab_ville[$i].">".$tab_ville[$i]."</option>";
           
         }
        }
        
         echo "</select>";
       }
       else{
        echo "<option value=''>ville</option>
          <option value='fréjus'>fréjus</option>
         <option value='saint-raphael'>saint-raphael</option>
         <option value='saint-maxime'>saint-maxime</option>
         <option value='roquebrune'>roquebrune</option>
         <option value='draguignan'>draguignan</option>
       </select>";
       }
     
      
       
       echo "<select required class='form-control' class='col-lg-3 col-md-3 col-sm-3 col-3' name='nature' id='type' style='width:100px';>";
       if(isset($check)){
        $lenght = count($tab_nature);
        echo "<option value=".$article_contenue->nature.">" .$article_contenue->nature. "</option>";
        for($i = 0; $i < 2; $i++) {
          if($tab_nature[$i]===$article_contenue->nature){
            unset($tab_nature[$i]);
                   }
             
          else {echo " <option value=".$tab_nature[$i].">".$tab_nature[$i]."</option>";
          
        }
       }
       
        echo "</select>";
      }

      else{
       echo "<option value=''> Nature </option>
         <option value='solitaire'>solitaire</option>
         <option value='groupe'>groupe</option>
           </select>";
           }
       
       echo"  <select required class='form-control' class='col-lg-3 col-md-3 col-sm-3 col-3'  name='type' id='nature' style='width:100px';>";
       if(isset($check)){
        $lenght = count($tab_type);
        echo "<option value=".$article_contenue->type.">" .$article_contenue->type. "</option>";
        for($i = 0; $i < 2; $i++) {
          if($tab_type[$i]===$article_contenue->type){
            unset($tab_type[$i]);
                   }
             
          else {echo " <option value=".$tab_type[$i].">".$tab_type[$i]."</option>";
          
        }
       }
       
        echo "</select>";
      }
      else{
       echo "<option value=''>Type </option>
         <option value='sport'>sport</option>
         <option value='decouverte'>decouverte</option>
           </select>";

      }
       if(isset($check)){
        echo "<textarea required id='titre_article' name='titre' placeholder='Ecrivez un titre' class='col-lg-3 col-md-3 col-sm-3 col-3' rows='1' >".$article_contenue->titre."</textarea>
        <textarea  required id='contenue_text' name='contenue_text' placeholder='Contenue de l article' class='col-lg-12 col-md-12 col-sm-12 col-12' rows='12' >".$article_contenue->text_article."</textarea>";

       }

       else{
       echo "<textarea required id='titre_article' name='titre' placeholder='Ecrivez un titre' class='col-lg-3 col-md-3 col-sm-3 col-3' rows='1' ></textarea>
       <textarea  required id='contenue_text' name='contenue_text' placeholder='Contenue de l article' class='col-lg-12 col-md-12 col-sm-12 col-12' rows='12' ></textarea>";
       }
      
       if(isset($check)){
        
        echo  "</div>

        <button type='submit'class='btn-light'>Envoyer</button>
        <button type='submit'class='btn-light'>Ecrire un article</button>
      </div>
         <br><br>";

       }

       else{
      echo  "</div>

    
      <button type='submit'class='btn-light' >Envoyer</button>
    </div>
       <br><br>";
       }
    echo "<div id='espace_article_users' class='col-lg-5 col-md-5 col-sm-5 col-5'>
     ";   foreach ($user as $row) {

      if($row->validé==1 or $row->validé==2){
        $titre = $row->titre;
        $id_article = $row->id_article;
        $uptade=false;
        $text = $row->text_article;
             echo "<div class='article_users'>" .$titre. ":<div class='edit_suppr'><a href='delet_edit.php?id=$id_article'> supprimer </a><span>/</span><a href='edit.php?id=$id_article&titre=$titre&text=$text'> edit</a></div><br>";
            
             echo "<p>" .$text. "</p></div>";
            if($row->validé  ===  '1'  or $row->validé  ===  '2' ){
             echo "<h5 style='color:white;background:black;width:80px;padding:5px;text-align:center';>En attente</h5>";
            }
             else{

                echo "<h5 style='color:white;background:black;width:80px;padding:5px;text-align:center'; >Article validé</h5>";
             }
            }
          }
     }
  

else {

    header('Location: index.php');
}

"</div>";

?>  
     





