<?php
	$page = 'modifRuche';
	include 'BDD.php';
	if (isset($_POST['btnValidModif'])) 

	{
		$nom = $_POST['Nom'];
		$lat = $_POST['Latitude'];
		$long = $_POST['Longitude'];

		//modification des ruches
		
		$req = $connexion->prepare("UPDATE ruche SET Nom = :nom , Latitude = :lat , Longitude = :long where Id = :id");
		$req->bindParam(':nom', $nom);
		$req->bindParam(':lat', $lat);
		$req->bindParam(':long', $long);
		$req->bindParam(':id', $_GET['idR']);
		$req->execute();

		if(!$req->execute())

                {
                	//Affichage des messages de confirmations
                	$message = '<div class="alert alert-danger" role="alert">
					  Problème avec la modification de la ruche!
					</div>';
                }
                else
                {
                	$message ='<div class="alert alert-success center " role="alert">
						  Ruche modifié avec succès !
						</div>';

					
					
                }
	}
	if (isset($_POST['btnRetour'])) 
	{
		//redirection page des ruches
		header("Location: ruche.php");
	}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Tallyos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">

	<link rel="stylesheet" type="text/css" href="style/style.css">
	
	

</head>
<body>
<?php



	include 'navBar.php';
	


	


?>
<br />

<!-- tableau pour la modification des ruches -->

<form name="modifRuche" method="POST" action="">
	<section class="containeur-fluid">
		<div class="tableau">
		<div class="row">
			<div class="col-9">



				<table class="table table-bordered table-striped text-center"


				data-toggle="table"
				data-width ="200">
  				
                    <thead>
                        <tr>
                           
                            <th data-sortable="true" data-width="200">Nom</th>
                            <th data-sortable="true" data-width="200">Latitude</th>
                            <th data-sortable="true" data-width="200">Longitude</th>
                           

                        </tr>
                    </thead>
			<tbody>


                        
                        	<?php
                        	//affichage des données de la ruche sélectionner
                        		if (isset($_GET['idR'])) 
								{
									$modifRuche = $connexion->query("SELECT *  FROM ruche where Id = ".$_GET['idR']." ");
									$donnees = $modifRuche->fetch();
									
								}
                        		
									?>
									<tr>
										
										<td data-editable="true"><input type="text" name="Nom" 
											value="<?php echo $donnees['Nom']; ?>"></td>
										<td data-editable="true"><input type="text" name="Latitude" 
											value="<?php echo $donnees['Latitude']; ?>"></td>
										<td data-editable="true"><input type="text" name="Longitude" 
											value="<?php echo $donnees['Longitude']; ?>"></td>
										
										
									</tr>
									
								
								



                        	
                            
                        
                       
                    </tbody>
                </table>
                <br />
                <div id="toolbar">
                	<input type="submit" value="Modifier" name="btnValidModif" class="btn btn-success">
                	<input type="submit" value="Retour" name="btnRetour" class="btn btn-primary">
						
				</div>
				<br />
				<?php

				//affichage du message de confirmation de modification
			    if (isset($message)) 
			    {
			    	echo $message;
			    }

			    ?>
            </div>
        </div>
      </div>
    </section>

    </form>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>

</body>
</html>


