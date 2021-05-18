<!DOCTYPE html>
<html>
<head>
	<title>Tallyos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">

	
	</script>
</head>
<body>

	<?php
	include 'BDD.php';
//nb ruche a afficher dans le menu
	$reqNbRuche = $connexion->query("SELECT COUNT(*) as NbRuche FROM ruche");
	$donnees = $reqNbRuche->fetch();
	$reqNbRuche->closecursor();

	?>

<!-- Menu -->
<div class="topnav" id="myTopnav">
  <a href="#home" >Company</a>
  <a href="accueil.php" class="<?php if($page == 'accueil'){echo 'active';}?>" >Accueil</a>
  <a href="ruche.php" class="<?php if($page == 'ruche' || $page == 'ajoutRuche' || $page == 'modifRuche'){echo 'active';}?>">Ruches <mark><?php echo $donnees['NbRuche'];   ?></mark> </a>
  <a href="infoRuche.php" class="<?php if($page == 'infoRuche'){echo 'active';}?>">Information</a>
  <a href="#déco">Déconnexion</a>

  
</div>








<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>