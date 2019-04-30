<?php
session_start();
include_once('includes.php');

?>

<!DOCTYPE html>
<html lang="fr">
	<header>
		
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
	


		<title>Portail CV Capgemini</title>
	</header>
	
	<body>
		
		

	
	
	
	
	
	
<body class="fixed-sn">
	<main class="mt-5">
	
	    
                    
                  
<?php 
				    
				    	if(!isset($_SESSION['id'])){
							include("not_sign.php");
				    	}else{
									
		    if(isset($_SESSION['flash'])){ 
		        foreach($_SESSION['flash'] as $type => $message): ?>
				<div id="alert" class="alert alert-<?= $type; ?> infoMessage"><a class="close">X</span></a>
					<?= $message; ?>
				</div>	
		    
			<?php
			    endforeach;
			    unset($_SESSION['flash']);
			}
		 
			
					    	include("marhba.php");
				       	}
				       	?>
        
	
	
  	
			       
			       	
			       	<p>
				       	
				    </p>
		
		
		</main>
	
	<!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  
    <script src="assets/js/plugins/typed/typed.js"></script>
    <script src="assets/js/plugins/jquery.mixitup.min.js"></script>
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/plugins/lightbox/dist/js/lightbox.min.js"></script>
    <script src="assets/js/script.js"></script>
	</body>
</html>