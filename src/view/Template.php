<?php

namespace view;

class Template {
  static function render($params) {
?>

<!DOCTYPE html>
<html>

<head>

  <!-- Inclusion des méta-données -->
  <?php include "commons/head.php" ?>
  
  <!--Compteur de visite -->
  <?php
    if(file_exists('compteur_pages_vues.txt'))
    {
        $compteur_f = fopen('compteur_pages_vues.txt', 'r+');
        $compte = fgets($compteur_f);
    }
    else
    {
        $compteur_f = fopen('compteur_pages_vues.txt', 'a+');
        $compte = 0;
    }
    $compte++;
    fseek($compteur_f, 0);
    fputs($compteur_f, $compte);
    fclose($compteur_f); 
    echo "<script>console.log('Nombre de visites : " . $compte . "' );</script>";
?>

<style>

html, body { height: 100%; margin: 0; }
  * {
  box-sizing: border-box;
}

/* Google Fonts */

@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap');


/* General reset */

* {
  box-sizing: border-box;
}

/* General styles */

h1 {
  font-size: 42px;
  font-weight: 700;
}

h2 {
  font-size: 32px;
}

h3 {
  font-size: 20px;
  font-weight: 600;
}

h4 {
  font-size: 18px;
  font-weight: 600;
}


input[type="submit"]:hover {
  cursor: pointer;
  text-decoration: underline;
}

.box {
  border: 1px solid rgba(0, 0, 0, .2);
  display: inline-block;
  margin: 16px 0;
  padding: 16px;
}

.box.info {
  background: var(--bg-info);
}

.box.error {
  background: var(--bg-error);
}

strong {
  font-weight: 600;
}

/* Nav styles */

nav {
  background-color: #F8F8FF;
  display: flex;
  height: 64px;
  width=device-width;
  padding: 8px 16px;
}

nav img {
  margin-right: 8px;
}

nav a {
  align-self: center;
  font-size: 14px;
  font-weight: bold;
  letter-spacing: -.2px;
  padding: 0 8px;
  text-transform: uppercase;
}

nav a:after {
  content: '';
  background: transparent; 
  display:block;
  height: 1px;
}

nav a:hover {
  text-decoration: none;
}

nav a:hover:after {
  background: var(--color-main); 
}

nav a.account {
  margin-left: auto;
}

nav a img {
  vertical-align: top;
  width: 16px;
}

/* Home styles */

#home .banner {
  background-color: var(--bg-accent);
  display: flex;
  flex-direction: column;
  justify-content: center;
  min-height: 50vh;
  padding: 0 32px;
}

#home .banner h2 {
  margin-bottom: 32px;
}

#home .banner a {
  background-color: var(--color-main);
  color: #fff;
  font-size: 18px;
  padding: 16px;
}

#home .brief {
  display: flex;
  margin: 32px 16px;
  padding: 16px;
}

#home .brief-image {
  align-self: center;
  flex: 1;
  text-align: center;
  padding: 0 32px;
}

#home .brief-text {
  flex: 1;
  align-self: center;
}

#home .brief-image img {
  max-width: 100%;
}

#home .brief-text h3 {
  margin-bottom: 8px;
}

#home .brief-text p {
  margin-bottom: 8px;
}

#home .brief-text a {
  border: 2px solid var(--color-main);
  display: inline-block;
  padding: 8px 12px;
}

/* Error styles */

#error {
  margin: 64px 32px;
}

#error h1 {
  margin-bottom: 16px;
}

#error p {
  font-size: 20px;
  margin-bottom: 32px;
}

#error a {
  border: 2px solid var(--color-main);
  display: inline-block;
  padding: 8px 12px;
}

/* Footer styles */

footer {
  border-top: 1px solid rgba(0, 0, 0, .2);
  margin: 64px 32px 0;
  padding: 32px 0;
  text-align: right;
}

footer strong {
  font-weight: 600;
}



hr {
   width:device-width;
}
	
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}


.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.9);
}

.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}
	
.modal-content, #caption {  
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform: scale(0.1)} 
  to {transform: scale(1)}
}

.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}


.radialProgressBar {
  border-radius: 50%;
  -webkit-transform: translate(50%, 50%);
          transform: translate(50%, 50%);
  width: 100px;
  height: 100px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  background: #ddd;
  margin: 20px;
  float:left;
  
}
.radialProgressBar .overlay {
  border-radius: 50%;
  width: 88px;
  height: 88px;
  margin: auto;
  background: #191A19;
  text-align: center;
  padding-top: 20%;
}

.progress-0 {
  background-image: -webkit-linear-gradient(left, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(90deg, #ddd 50%, transparent 50%), linear-gradient(90deg, #028cd5 50%, #ddd 50%);
}

.progress-10 {
  background-image: -webkit-linear-gradient(36deg, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(54deg, #ddd 50%, transparent 50%), linear-gradient(90deg, #028cd5 50%, #ddd 50%);
}

.progress-20 {
  background-image: -webkit-linear-gradient(72deg, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(18deg, #ddd 50%, transparent 50%), linear-gradient(90deg, #028cd5 50%, #ddd 50%);
}

.progress-30 {
  background-image: -webkit-linear-gradient(108deg, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(-18deg, #ddd 50%, transparent 50%), linear-gradient(90deg, #028cd5 50%, #ddd 50%);
}

.progress-40 {
  background-image: -webkit-linear-gradient(144deg, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(-54deg, #ddd 50%, transparent 50%), linear-gradient(90deg, #028cd5 50%, #ddd 50%);
}

.progress-50 {
  background-image: -webkit-linear-gradient(right, #ddd 50%, transparent 50%), -webkit-linear-gradient(left, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(-90deg, #ddd 50%, transparent 50%), linear-gradient(90deg, #028cd5 50%, #ddd 50%);
}

.progress-60 {
  background-image: -webkit-linear-gradient(left, #028cd5 50%, transparent 50%), -webkit-linear-gradient(36deg, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(90deg, #028cd5 50%, transparent 50%), linear-gradient(54deg, #028cd5 50%, #ddd 50%);
}

.progress-70 {
  background-image: -webkit-linear-gradient(left, #028cd5 50%, transparent 50%), -webkit-linear-gradient(72deg, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(90deg, #028cd5 50%, transparent 50%), linear-gradient(18deg, #028cd5 50%, #ddd 50%);
}

.progress-80 {
  background-image: -webkit-linear-gradient(left, #028cd5 50%, transparent 50%), -webkit-linear-gradient(108deg, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(90deg, #028cd5 50%, transparent 50%), linear-gradient(-18deg, #028cd5 50%, #ddd 50%);
}

.progress-90 {
  background-image: -webkit-linear-gradient(left, #028cd5 50%, transparent 50%), -webkit-linear-gradient(144deg, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(90deg, #028cd5 50%, transparent 50%), linear-gradient(-54deg, #028cd5 50%, #ddd 50%);
}

.progress-100 {
  background-image: -webkit-linear-gradient(left, #028cd5 50%, transparent 50%), -webkit-linear-gradient(right, #028cd5 50%, #ddd 50%);
  background-image: linear-gradient(90deg, #028cd5 50%, transparent 50%), linear-gradient(-90deg, #028cd5 50%, #ddd 50%);
}

</style>
</head>

<body id="body" style="background:#191A19 ; color:white; min-width:320px;">
  <!-- TODO: Inclure le nav ici -->
  <?php include "commons/nav.php"?>

  <div >
  <!-- Inclusion du module à afficher -->
  <?php include "modules/" . $params["module"]; ?>
</div>

  <!-- TODO: Inclure le footer ici -->
    <?php include "commons/footer.php"?>

    <?php include "./public/scripts/dark_mode.js"?>
    <?php include "./public/scripts/photo_cv.js"?>
</body>

</html>

<?php
  }
}
?>
