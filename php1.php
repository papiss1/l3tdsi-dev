<!DOCTYPE html>
<html>
<head>
	<title>php</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/dist/css/bootstrap/css">
</head>
<body>
<!-- methode get <form action="" method="get">
	 Prenom <input type="text" name="prenom">
	 Nom <input type="text" name="nom">
	 <input type="submit" value="Envoyer">
</form>
<?php

/*echo 'Bonjour ' . ($_GET["prenom"]) . ' ' .($_GET["nom"]);*/
?> -->
<!-- 22<form method="post">
	Login:<input class="" type="text" name="login"><br>
	Mot de passe:<input type="text" name="mdp">
	<input type="submit" value="valider">
</form>
<?php

	if ($_POST) {
		$family= array('papathiame11@gmail.com' ,'birama','Ousseynou','papa thiam' );
		$family=array('1234','12345','gouyar');
		$isnkown=false;

		foreach ($family as  $value) {
			if ($value==$_POST['login'] && $value==$_POST['mdp']) {
				$isnkown=true;
			}
		}
		if ($isnkown) {
			echo '<button class="btn btn-success">svbvh</button>';
		}
		else{
			echo "<button>erreur</button>";
		}
	}
	?> 22-->


	        <h1>Bienvenue sur le site de toto </h1>
	        <h2>Commencez-donc par vous inscrire :</h2>
	        <form name="inscription" method="post" action="php1.php">
	            Entrez votre pseudo : <input type="text" name="pseudo"/> <br/>
	            Entrez votre ville : <input type="text" name="ville"/><br/>
	            <input type="submit" name="valider" value="OK"/>
	        </form>
	        <?php
	        if(isset($_POST['valider'])){
	            $pseudo=$_POST['pseudo'];
	            $ville=$_POST['ville'];
	            echo 'Salut '. $pseudo.'de '. $ville.'<br/>Bienvenue sur mon site !';
	        }
	        ?>


</body>
</html>
