/*let indice = document.getElementsByClassName("img_cover");
let cadre = document.getElementsByClassName("pic1");
let a = indice.length;
let tab = Array.from(indice);
let ville="none";
let check=0;
let test = "<?php include_once('test.php'); ?>";

selecville();





function changementAffichage(){


}
function selecville(){



for (let i = 0; i < a; i++){

indice[i].addEventListener('click', function (){
check++;
tab[i] = 1;

if(check===1){
 for (let j = 0;j<a;j++){

    if (tab[j] === 1){
  
        cadre[j].id="t1";
        setTimeout (function(){
            document.getElementById('part1').style.display = "none";
            document.getElementById('part2').style.display = "none";
            document.getElementById('selec').appendChild(cadre[j]);
            document.getElementById('selec').style.display="block";
            tab[j]=2;
        },550);

        setTimeout (function(){
          document.getElementById("t1").style.opacity="0.20";
        },550);
    
      }  

      else {
         
        cadre[j].style.opacity="0";
       

      }
 
 }

}
});


switch(tab[i]===1){

case tab[0]===1:
    ville="saint-raphael";
    tab[0]=0;
    changementAffichage();
    break;

case tab[1]===1:
    ville="frejus";
    tab[1]=0;
    changementAffichage();
    break;

case tab[2]===1:
    ville="saint-maxime";
    tab[2]=0;
    changementAffichage();
    break;

    case tab[3]===1:
    ville="roquebrune";
    tab[3]=0;
    changementAffichage();
    break;

case tab[4]===1:
    ville="draguignan";
    tab[4]=0;
    changementAffichage();
    break;

case tab[5]===1:
    ville="saint-tropez";
    tab[5]=0;
    changementAffichage();
    break;

}

}

}

*/