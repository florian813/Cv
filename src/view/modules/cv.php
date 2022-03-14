<style>
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
</style>

	<h1 class=textemenu style="margin-left:1%">CV</h1>

	

	<div id="div-photo" style="width=device-width ; background:#273746 ;">
		<hr>
		

		<div id="myModal" class="modal">
  			<span class="close">&times;</span>
  			<img class="modal-content" id="img01">
  			<div id="caption"></div>
		</div>

		<div style="margin-left:2% ; width:10%;">
			<img id="myImg" src="./img/photo_cv.jpg" class="rounded-circle" style="width: 100% ; margin-top:10% ;"></img>
		</div>

			<div style=" margin-top:-6%; margin-left:13%; font-size:110%;width:21%;">
			<span style="font-size:90%">Florian LEBORGNE<span><br>
			<span style="font-size:92%" >Emploi saisonnier</span><br>
			</div>	

			<div style=" margin-top:-4%; margin-left:36%; font-size:100%;">
			<svg xmlns="http://www.w3.org/2000/svg" width="4%" height="4%" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  				<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
			</svg>
			florianleborgne813@gmail.com

			<svg xmlns="http://www.w3.org/2000/svg" width="4%" height="4%" style="margin-left:1%;" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
  				<path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
			</svg>
			06 65 97 16 90

			<svg xmlns="http://www.w3.org/2000/svg" style="margin-left:0.9%" width="4%" height="4%" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
  				<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
			</svg>
			07/01/2001<br>

			<svg xmlns="http://www.w3.org/2000/svg" width="4%" height="4%" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  				<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
			</svg>
			<span>31 rue de la gare ,Beutin 62170</span>

			<svg xmlns="http://www.w3.org/2000/svg" style="margin-left:1.80%" width="4%" height="4%" fill="currentColor" class="bi bi-credit-card-2-front" viewBox="0 0 16 16">
  				<path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
  				<path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
			</svg>
			<span>Permis B</span>
				
			<svg style="margin-left:3.8%" width="4%" height="4%" fill="currentColor" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#"
    xmlns:xlink="http://www.w3.org/1999/xlink"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:svg="http://www.w3.org/2000/svg"
    xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
    xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
    xmlns:ns1="http://sozi.baierouge.fr"
    id="car"
    viewBox="0 0 500 500"
    version="1.0">
  <g id="left">
    <path d="m30 370v69c0 8.864 7.136 16 16 16h40c8.864 0 16-7.136 16-16v-69z"/>
    <path d="m100.5 40c-11.609 0-21.516 7.014-25.781 17.031l-72.5 170c-1.4364 3.37-2.219 7.07-2.219 10.97v94c0 15.512 12.488 28 28 28h223v-175.12l-192.91 0.53125c12.756-32.024 38.281-96.094 38.281-96.094 4.788-12.02 5.115-13.631 12.031-13.625l142.6 0.123v-35.813h-150.5z"/>
    <path style="fill:#FFF" d="m100 270a35 35 0 0 1 -70 0 35 35 0 1 1 70 0z"/>
  </g>
  <use
      xlink:href="#left"
      transform="matrix(-1,0,0,1,500,0)"/>
  <metadata>
    <rdf:RDF>
      <cc:Work>
        <dc:format>image/svg+xml</dc:format>
        <dc:type
            rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
        <cc:license
            rdf:resource="http://creativecommons.org/licenses/publicdomain/"/>
        <dc:publisher>
          <cc:Agent
              rdf:about="http://openclipart.org/">
            <dc:title>Openclipart</dc:title>
          </cc:Agent>
        </dc:publisher>
        <dc:title>car pictogram</dc:title>
        <dc:date>2011-02-26T18:48:49</dc:date>
        <dc:description>pictogram of a car in front view</dc:description>
        <dc:source>https://openclipart.org/detail/122965/car-pictogram-by-pawnk</dc:source>
        <dc:creator>
          <cc:Agent>
            <dc:title>pawnk</dc:title>
          </cc:Agent>
        </dc:creator>
        <dc:subject>
          <rdf:Bag>
            <rdf:li>car</rdf:li>
            <rdf:li>pictogram</rdf:li></rdf:Bag></dc:subject></cc:Work><cc:Licenserdf:about="http://creativecommons.org/licenses/publicdomain/"><cc:permitsrdf:resource="http://creativecommons.org/ns#Reproduction"/><cc:permits
            rdf:resource="http://creativecommons.org/ns#Distribution"/>
        <cc:permits rdf:resource="http://creativecommons.org/ns#DerivativeWorks"/></cc:License></rdf:RDF></metadata>
</svg>
			Véhicule personnel
			</div>
		<hr style="margin-top:3.5% ">
	</div>

	

	<div style="width=device-width" >
		<div style="margin-left:3%">
			<h2>Diplômes et Formations</h2>
			<br>
			<br>
			<p>2ème année Licence informatique <a href="https://www.google.fr/maps/place/Universit%C3%A9+du+Littoral+C%C3%B4te+d'Opale/@50.9525497,1.8790673,17z/data=!4m9!1m2!2m1!1sUniversit%C3%A9+du+Littoral+C%C3%B4te+D'Opale+Calais!3m5!1s0x47dc4080e9a7d7bb:0x4473bdca0c4169a9!8m2!3d50.9532083!4d1.8787707!15sCixVbml2ZXJzaXTDqSBkdSBMaXR0b3JhbCBDw7R0ZSBEJ09wYWxlIENhbGFpcyIDiAEBkgEKdW5pdmVyc2l0eQ" target="_blank">Université du Littoral Côte D'Opale Calais,France</a> / Depuis septembre 2019</p>
				
			<p>Bac S SI <a href="https://www.google.fr/maps/place/School+Eug%C3%A8ne-Woillez/@50.465282,1.7642147,17z/data=!3m1!4b1!4m5!3m4!1s0x47ddc66415a60755:0xb155ef67daa15148!8m2!3d50.4652375!4d1.7663617" target="_blank">Lycée Eugène Woillez Montreuil,France</a> / De septembre 2016 à juillet 2019<br>
			<span class="opacity-50" style="margin-left:1%">Spécialité: ISN<span></p>
			<p>Brevet des collèges <a href="https://www.google.fr/maps/place/Middle+School+Du+Bras+D'or/@50.4557918,1.7567172,17z/data=!3m1!4b1!4m5!3m4!1s0x47ddc686488ae1bd:0xca2a187a7ee9f7c0!8m2!3d50.4557884!4d1.7589059" target="_blank">Collège du Bras d'Or Ecuires,France</a> / De septembre 2012 à juillet 2016</p>
		</div>
		<hr>
	</div>

	

	<div style="width=device-width">
		<div style="margin-left:3%">
			<h2>Expériences professionnelles</h2>
			<br>
			<p>Opérateur de production (saisonnier) <a href="https://www.google.fr/maps/place/Randstad+Inhouse+Services/@50.5097564,1.6565701,17z/data=!3m1!4b1!4m5!3m4!1s0x47ddd011fa5de001:0xa2bf37e4038c3692!8m2!3d50.509753!4d1.6587588" target="_blank">RANDSTAD INHOUSE SERVICES ( Valeo Etaples),France</a> / De juillet 2021 à août 2021</p>
			<p>Inventaire Intermarché Camiers, France <a href="https://www.google.fr/maps/place/Agence+d%E2%80%99int%C3%A9rim+Manpower+Montreuil-sur-Mer+Recrutement,+offres+d%E2%80%99emploi%2Fjob+CDD/@50.4610089,1.6890206,12z/data=!4m9!1m2!2m1!1sAdecco+near+Montreuil-sur-Mer!3m5!1s0x47ddc67d1a206fbd:0xdc97e13565630256!8m2!3d50.4610396!4d1.7589924!15sCh1BZGVjY28gbmVhciBNb250cmV1aWwtc3VyLU1lciIDiAEBkgELdGVtcF9hZ2VuY3k" target="_blank">(mission Manpower)</a> / Août 2020</p>
			<p>Stagiaire mécanicien <a href="https://www.google.fr/maps/place/Attin+Automobiles/@50.4867506,1.7441177,17z/data=!3m1!4b1!4m5!3m4!1s0x47ddc58e0c1a3ec5:0x1a09840f83d8f7cd!8m2!3d50.4867533!4d1.7463149 " target="_blank">Attin Automobiles Attin, France</a> / Décembre 2015<br>
				<span class="opacity-50" style="margin-left:1%">Stage de découverte d'une semaine</span></p>
		</div>
	</div>

	<hr>

	<div style="width=device-width">
		<div style="margin-left:3%">
			<h2>Langues</h2>
			<br>
			<p>Anglais</p>
			<p>Espagnol</p>
		</div>
	</div>

	<hr>

	<div style="width=device-width ">
		<div style="margin-left:3%">
			<h2>Centre d'intérêt</h2>
			<br>
			<p>Mécanique / Moto / Informatiques / Programmation / Technologies</p>
		</div>
	</div>

	<hr>

	<div style="width=device-width">
		<div style="margin-left:3%">
		<h2>Informatique</h2>
		<br>
		Libre Office <div class="progress" style="width: 25%;" >
  		<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
		</div><br>
		HTML/CSS/PHP/JS<br>
		<div class="progress" style="width: 25%;" >
  			<div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
		</div><br>
		Base de donnée<br>
		<div class="progress" style="width: 25%;" >
  			<div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
		</div><br>
			C/Java<div class="progress" style="width: 25%;" >
  		<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
		</div><br>

		Solidworks<br>
		<div class="progress" style="width: 25%;" >
  			<div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
		</div><br>
		</div>
	</div>

