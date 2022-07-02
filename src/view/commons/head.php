<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">

<link rel="stylesheet" href="/public/styles/default.css" />
<link rel="icon" type="image/png" sizes="16x16" href="./img/cv.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20,100,1,-25" />
<title><?= $params["title"] ?></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>

<script>

$(document).ready(function(){
    $("#body").fadeIn(1700);
    $("#nav1").fadeIn(1800);
    $("#div-photo").slideDown(1000);
    $("#diplomes").slideDown(2000);
    $("#experiences").slideDown(3000);
    $("#langues").slideDown(4000);
    $("#interet").slideDown(5000);
    $("#informatiques").slideDown(6000);
    $("#footer").slideDown(7000);
    
    $("#button_email").click(function(){
    $("#email").toggle("slow","linear");
  });
  $("#button_tel").click(function(){
    $("#tel").toggle("slow");
  });
  $("#button_date").click(function(){
    $("#date").toggle("slow");
  });
  $("#button_adresse").click(function(){
    $("#adresse").toggle("slow");
  });
  $("#button_permis").click(function(){
    $("#permis").toggle("slow");
  });
  $("#button_voiture").click(function(){
    $("#voiture").toggle("slow");
  });
 
});


</script>
