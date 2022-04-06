<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="main.css">
	<title>Mon site ISN</title>
</head>
<body>
<ul class="menu-accordeon">	
<li><a href="index.html">Retour</a></li></ul>
<h1 class="textemenu"> Contact </h1>
	<hr>
<form method="post" action="traitement.php">
    <p>
	<br>
	<br>
	<br>
        <label>Nom :</label>
        <input type="text" name="Nom"  size="35" maxlength="20" />
	<br>
	<label>Prenom :</label>
        <input type="text" name="pseudo"  size="27" maxlength="20" />
	<br>
	<br>
		<label>Message :</label>
		<textarea name="message" id="Message"></textarea>
		<input type="submit" value="envoyer">

    </p>
</form>

</body>
</html>