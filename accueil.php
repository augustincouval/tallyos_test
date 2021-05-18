<!DOCTYPE html>
<html>
<head>
	<title>TALLYOS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">

	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script type="text/javascript" src="script/script.js"></script>
	
</head>
<body>

<?php
//pour savoir sur quel page on se trouve pour la navbar
		$page = 'accueil';
		include 'navBar.php';
		



	?>
<!-- affichage photo -->
<div class="grid-container">
  <div class="left">
  	<img src="img/ruche.png" class="rounded-circle" alt="Cinque Terre">
  	<form name="formAccueil" method="POST" action="">

  		<div class="form-group">
		    <label for="templateName">Template</label>
		    <input type="text" class="form-control" id="templateName" aria-describedby="emailHelp" value="Uncompleted Profile">
		    
		  </div>
		  <div class="form-group">
		    <label for="subject">Subject</label>
		    <input type="text" class="form-control" id="subject" value="Hello, Augustin">
		  </div>
	</form>

	<!-- zone de message -->
    <div class="message">
    	<div class="form-group">
		    <label for="textMessage"> Message</label>
		    <textarea class="form-control" id="textMessage" rows="7">
Hello Augustin,
At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</textarea>
		</div>

    	
    </div>



  </div>
  <div class="right">
   

   <!-- zone de la photo a droite -->
    <div class="imgLabel">
    	<img src="img/miel2.png" width="320" height="200">
    </div>
    <!-- zone du texte en dessous de l'image  -->
     <div class="textlabel">
     	<p class="h2">Thumbnail label </p>
     	<p>Donec non lectus vel nunc bibendum tristique ut ut turpis. Donec a leo sem. Donec et sagittis purus, in tristique mauris.</p>

     	<button type="button" class="btn btn-primary">button</button>

     	<button type="button" class="btn btn-light">button</button>
    	
    </div>


<!-- zone en bas à droite -->
    <div class="tagTarget">
    	<div class="form-group">

  			<label for="tag">Message type</label>
  			<select id="tag" class="form-control">
  				<option selected="Profil Screen">Profil Screen</option>
			    <option>...</option>
			    <option>...</option>
			    
  			</select>
  			<br>

  			<label for="">Set Type</label>
  			<div class="form-check">
			  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
			  <label class="form-check-label" for="flexRadioDefault1">
			   <mark class="success">New</mark>
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
			  <label class="form-check-label" for="flexRadioDefault2">
			    <mark class="info">Reports</mark>
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" >
			  <label class="form-check-label" for="flexRadioDefault3">
			    
			    <mark class="warning">Documents</mark>
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" >
			  <label class="form-check-label" for="flexRadioDefault4">
			    
			    <mark class="primary">Media</mark>
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" >
			  <label class="form-check-label label label-primary" for="flexRadioDefault5">
			    <mark class="default">Text</mark>
			  </label>
			</div>
  			<br>
  			<button type="button" style="width: 160px; margin: 3px;" class="btn btn-danger">Supprimer</button>

  	
  		</div>

  
  	</div>

    	
  </div>

 <!-- zone en bas à gauche -->
  <div class="messageType">

  	
  		<div class="form-group">
  			<label for="list">Message type</label>
  			<select id="list" class="form-control">
  				<option selected="Eamil + Push">Email + Push</option>
			    <option>Just Email</option>
			    <option>Aute</option>
			    
  			</select>
  			<br>
			<label>Send to group</label>

  			<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Top Management
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" checked="" id="defaultCheck2">
			  <label class="form-check-label" for="defaultCheck2">
			   Marketing Departement
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Design Departement
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Financial Departement
			  </label>
			</div>
			<div class="form-check">
			  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
			  <label class="form-check-label" for="defaultCheck1">
			    Supply Department
			  </label>
			</div>
  		</div>
  		<br>

  		<div class="subButton">
  			<button type="button" style="width: 160px; margin: 3px;" class="btn btn-primary">Valider</button>
  			<button type="button" style="width: 120px; margin-left: 4px;" class="btn btn-light btn-light">Annuler</button>
  		</div>
  		<br>
  		
  	
  	
  </div>
 

</form>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
<script src="https://unpkg.com/bootstrap-table@1.16.0/dist/locale/bootstrap-table-fr-FR.min.js"></script>

</body>
</html>