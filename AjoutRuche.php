<?php
session_start();

//pour savoir sur quel page on se trouve pour la navbar
	$page = 'ajoutRuche';
	include 'BDD.php';
	if (isset($_POST['btnAjoutRuche'])) 

	{
		$nom = $_POST['Nom'];
		$lat = $_POST['Latitude'];
		$long = $_POST['Longitude'];
		


                 
             
                //On utilise les requêtes préparées et des marqueurs nommés 
                $AjouteRuche = $connexion->prepare("INSERT INTO ruche(Nom, Latitude, Longitude) 


                									VALUES ('".$nom."', '".$lat."', '".$long."')"
                );
                if(!$AjouteRuche->execute())

                //creation des messages de confirmation lors de l'ajout ou la modification	
                {
                	$message = '<div class="alert alert-danger" role="alert">
					  This is a danger alert—check it out!
					</div>';
                }
                else
                {
                	$message ='<div class="alert alert-success center " role="alert">
						  Ruche ajouter avec succès !
						</div>';
                }


	}


	if (isset($_POST['btnRetour'])) 
	{
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
	<script type="text/javascript" src="script/script.js"></script>
	<script src="extensions/editable/bootstrap-table-editable.js"></script>

</head>
<body>
<?php



	include 'navBar.php';
	


	


?>
<br />

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


                       
                        		
									<tr>
										
										<td data-editable="true">
											<input type="text" name="Nom" placeholder="Nom">
										</td>
										<td data-editable="true">
											<input type="text" name="Latitude" placeholder="Latitude">
										</td>
										<td data-editable="true">
											<input type="text" name="Longitude" placeholder="Longitude">

										</td>
										
										
									</tr>
									
									
								

								
                        		
									

                    </tbody>
                </table>
                <br />
                <div id="toolbar">
                	<input type="submit" value="Ajouter" name="btnAjoutRuche" class="btn btn-success">
                	<input type="submit" value="Retour" name="btnRetour" class="btn btn-primary">
						

				</div>
				<br />
				<?php
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


