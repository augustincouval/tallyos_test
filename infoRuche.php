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
	//pour savoir sur quel page on se trouve pour la navbar
	$page = 'infoRuche';
		include 'navBar.php';
		include 'BDD.php';


	//affichage des données des ruches et leurs informations
	$sql ="select ruche.Nom, infoRuche.dateCollect, infoRuche.Poids,infoRuche.Temperature,infoRuche.Humidite
			from ruche, infoRuche
			Where ruche.Id = infoRuche.idR";
	$reqTab = $connexion->query($sql);


	?>

	
<!-- tableau des ruches avec les informations -->
	<section class="containeur-fluid">
		<div class="tableau">
		<div class="row">
			<div class="col-9">
				<br />
				<p class="h2">Information des ruches </p>
				  
				
				

				<table id="editetableTable" class="table table-bordered table-striped text-center"


				data-toggle="table"
				data-search="true" 
				data-pagination="true" 
				data-minimum-count-columns="1"
				
				data-page-list="[10, 25, 50, 100, all]"
				data-width ="200">
                    <thead>
                        <tr>
                           
                            <th data-sortable="true" data-width="150">Ruche</th>
                            <th data-sortable="true" data-width="300">Date</th>
                            <th data-sortable="true" data-width="100">Poids</th>
                            <th data-sortable="true" data-width="200">Température</th>
                            <th data-sortable="true" data-width="200">Humidité</th>


                        </tr>
                    </thead>
			<tbody>


                        
                        	<?php

                        	//affichage des données
                        		while ($donnees = $reqTab->fetch())
								{
									?>
									<tr>
										
										<td><?php echo $donnees['Nom']; ?></td>
										<td><?php echo $donnees['dateCollect']; ?></td>
										<td><?php echo $donnees['Poids']; ?></td>
										<td><?php echo $donnees['Temperature']; ?></td>
										<td><?php echo $donnees['Humidite']; ?></td>
										
									</tr>
									<?php  
								}
								



                        	?>
                            
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </section>




















<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
	<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>

</body>
</html>