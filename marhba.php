<!DOCTYPE html>
<html lang="fr">
	<head>
		
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


<!--Main Navigation-->
<header>

<nav class="navbar navbar-expand-lg navbar-dark blue-gradient text-white fixed-top" >
        <div class="container">
          <a class="navbar-brand" href="index.php">Bonjour <?php echo $_SESSION['pseudo'];?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="material-icons">menu</i></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav navbar-right ml-auto">
				 <li class="nav-item">
                        <a class="nav-link page-scroll" href="dashboard.php">Portail</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="#">Upload C.V.</a>
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

	    

</header>
<!--Main Navigation-->

<!--Main layout-->
<main class="ml-1 pt-1">
<div class="col-xs-1"></div>

<div class="container-fluid">
		       	
		
			      
<div class="card">

    <h5 class="card-header blue-gradient white-text text-center py-4">
        <strong>Upload C.V.</strong>
    </h5>

    <div class="card-body px-lg-5 pt-0">

        <form class="md-form" style="color: #757575;"  action="upload.php" method="post" enctype="multipart/form-data">

                    
					<input type="text" name="prenom" placeholder="Prénom" id="materialRegisterFormFirstName" class="form-control">
					
					<input type="text" name="nom" placeholder="Nom" id="materialRegisterFormLastName" class="form-control">
                   

                    <input type="email" name="email" placeholder="Email"  id="materialRegisterFormEmail" class="form-control">
                     
                    <input placeholder="nombre d'année d'expérience" id="ticketNum" type="number" name="ticketNum" max ="15">
					 
					 <br></br>
					 
                    <select name="jobcode" class="browser-default custom-select mb-4" id="select">
        <option value="" disabled="" selected="">quelle est votre specialite</option>
        <option value="Webmaster">Webmaster</option>
        <option value="Webdesigner">Webdesigner </option>
        <option value="Responsable SEO">Responsable SEO</option>
		<option value="Data Analyst">Data Analyst</option>
		<option value="Architecte Cloud">Architecte Cloud</option>
		<option value="developpeur web">developpeur web</option>
		<option value="cybersecurite">cybersecurite</option>
    </select>

            <div class="file-field">
                <div class="btn btn-info btn-sm float-left ">
                    <span>Choose file</span>
                    <input type="file" name="fileurl" id="fileToUploadyyy" accept="application/pdf">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload your file">
                </div>
            </div>


            <button class="btn btn-outline-primary btn-block my-4 waves-effect z-depth-0" type="submit"  value="Upload CV" name="submit">Envoyer</button>

            <div class="text-center">
                <p>or sign up with:</p>

                <a type="button" class="btn-floating btn-fb btn-sm">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a type="button" class="btn-floating btn-tw btn-sm">
                    <i class="fab fa-twitter"></i>
                </a>
                <a type="button" class="btn-floating btn-li btn-sm">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a type="button" class="btn-floating btn-git btn-sm">
                    <i class="fab fa-github"></i>
                </a>

                <hr>

                <p>By clicking
                    <em>Sign up</em> you agree to our
                    <a href="" target="_blank">terms of service</a> and
                    <a href="" target="_blank">terms of service</a>. </p>
            </div>

        </form>
    </div>
</div>       
				   
	         
	                

	        
			<div class="col-xs-1"></div>
        </div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class="footer special-color text-white text-center fixed-bottom py-2">
Oussama Eddai - &copy; Capgemini 2019
</footer>
<!--Footer-->	




			<!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
<script>

  // SideNav Scrollbar Initialization
  var sideNavScrollbar = document.querySelector('.custom-scrollbar');
  Ps.initialize(sideNavScrollbar);
</script>

</body></html>
	