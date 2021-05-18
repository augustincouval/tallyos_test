<!DOCTYPE html>
<html>
<head>
	<title>Tallyos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">

	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script type="text/javascript" src="script/script.js"></script>



</head>
<body>
	<?php
	//pour savoir sur quel page on se trouve pour la navbar
		$page = 'ruche';
		include 'navBar.php';
		include 'BDD.php';

	$sql ="select * from ruche";
	$reqTab = $connexion->query($sql);


	?>

	
<!-- tableau des ruches -->
	<section class="containeur-fluid">
		<div class="tableau">
		<div class="row">
			<div class="col-9">
				<br />
				<div id="toolbar">
				<input type=button class="btn btn-success" onclick=window.location.href='AjoutRuche.php'; value="Ajouter une ruche "/>
				  
				</div>

		

				<table id="editetableTable" class="table table-bordered table-striped text-center"


				data-toggle="table"
				data-search="true" 
				data-pagination="true" 
				data-minimum-count-columns="1"
				
				data-page-list="[10, 25, 50, 100, all]"
				data-width ="200">
  				
                    <thead>
                        <tr>
                           
                            <th data-sortable="true" data-width="200">Nom</th>
                            <th data-sortable="true" data-width="200">Latitude</th>
                            <th data-sortable="true" data-width="200">Longitude</th>
                            <th  data-width="200"></th>

                        </tr>
                    </thead>
			<tbody>


                        
                        	<?php
                        	//boucle affiche données ruches
                        		while ($donnees = $reqTab->fetch())
								{
									?>
									<tr>
										
										<td><?php echo $donnees['Nom']; ?></td>
										<td><?php echo $donnees['Latitude']; ?></td>
										<td><?php echo $donnees['Longitude']; ?></td>
										<td>
											<a href="gestionTableau.php?idR=<?php echo $donnees[0]?>" onclick='return confirmationSupp();'>Supprimer</a> /
											<a href="modifRuche.php?idR=<?php echo $donnees[0]?>">Modifier </a>
										</td>
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