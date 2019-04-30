<!DOCTYPE html>
<html lang="fr">
	<head>
	
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
		<title>Analytics by Oussama</title>

 <style type="text/css">
      #chart-container {
        width: auto;
        height: auto;
      }
    </style>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
    <link href="assets/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="assets/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="assets/js/plugins/lightbox/dist/css/lightbox.min.css" rel="stylesheet">
	

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/mdb.min.css" rel="stylesheet">  
	
	</head>

		






		
		
<body>
<div class="row">
<div class="container-fluid">

<!--Main Navigation-->
<header>

<nav class="navbar navbar-expand-lg navbar-dark blue-gradient text-white fixed-top" >
        <div class="container">
          <a class="navbar-brand" href="index.php">CV Thèque Analytics </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="material-icons">menu</i></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav navbar-right ml-auto">
				 <li class="nav-item active">
                        <a class="nav-link page-scroll" href="dashboard.php">Portail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="accueil.php">Upload C.V.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="deconnexion.php">Deconnexion</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

<!-- Sidebar navigation -->

<!--/. Sidebar navigation -->

	    

</header></div></div></br></br></br>
<!--Main Navigation-->
<main>
<div class="container">
<!--Main layout-->
<div class="row">


<div class="col-sm-6"> 
<?php
	include "dbconn.php";
	$res = mysqli_query($con,"SELECT COUNT(`ID`) total FROM `upload`");
	if($res === FALSE) { 
    die(mysqli_error()); // TODO: better error handling
     }
         
while ($row = mysqli_fetch_array($res, MYSQLI_BOTH)) {	
		?>
<div class="card border border-info"><p><i class="fas fa-bell fa-3x cyan-text pr-3" aria-hidden="true"></i> <b class="alert alert-info">Il ya : <?php echo $row['total'];} ?> candidats actuels.</b></p>
</div></br>
<div  class="border border-info"  id="chart-container">
      <canvas id="mycanvas"></canvas>
    </div>
	</br>
	<div class="border border-success" id="chart-container">
      <canvas id="piecanvas"></canvas>
    </div>
	
	
	</div>
<div class="col-md-6 border border-primary">

		<table class="table">
  <thead class="blue darken-4 white-text">
	  <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Profil</th>
	  <th scope="col">Experience</th>
	  <th scope="col">Télécharger</th>
    </tr>
<?php
	include "dbconn.php";
	$res = mysqli_query($con,"SELECT id,prenom,nom,email,jobcode,ticketNum,fileurl FROM upload");
	if($res === FALSE) { 
    die(mysqli_error()); // TODO: better error handling
     }
         
	while ($row = mysqli_fetch_array($res, MYSQLI_BOTH)) {
		?>
		</thead></table>
		
		
<table class="table black-text text-center">
<td><?php echo $row['prenom']; ?></td>
<td><?php echo $row['nom']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['jobcode']; ?></td>
<td><?php echo $row['ticketNum']; ?></td>
<td><a href="uploads/<?php echo $row["fileurl"] ?>">Cliquez-ici !</a>

<br>


</table>
 <?php

	}
	
	
	
	

?>


</div>
</div>
</div>	   
</main>
     <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->

  <!-- Bootstrap core JavaScript -->

   
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>