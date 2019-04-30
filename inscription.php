<?php
session_start();
include_once('includes.php');

if(isset($_SESSION['pseudo'])){
	header('Location: accueil.php');
	exit;
}

if(!empty($_POST)){
	extract($_POST);
	$valid = true;
	
	$Mail = htmlspecialchars(trim($Mail));
	$Pseudo = htmlspecialchars(ucfirst(trim($Pseudo)));
	$Password = trim($Password);
	$PasswordConfirmation = trim($PasswordConfirmation);
		
	if(empty($Pseudo)){
		$valid = false;
		$_SESSION['flash']['danger'] = "Veuillez mettre un pseudo !";
	}
	
	if(empty($Mail)){
		$valid = false;
		$_SESSION['flash']['danger'] = "Veuillez mettre un mail !";
	}
	
	$req = $DB->query('Select mail from user where mail = :mail', array('mail' => $Mail));
	$req = $req->fetch();
	
	if(!empty($Mail) && $req['mail']){
		$valid = false;
		$_SESSION['flash']['danger'] = "Ce mail existe déjà";
		
	}
	if(!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $Mail)){
		$valid = false;
		$_SESSION['flash']['danger'] = "Veuillez mettre un mail conforme !";
	}
	
	if(empty($Password)){
		$valid = false;
		$_SESSION['flash']['danger'] = "Veuillez renseigner votre mot de passe !";

	}elseif($Password && empty($PasswordConfirmation)){
		$valid = false;
		$_SESSION['flash']['danger'] = "Veuillez confirmer votre mot de passe !";
	
	}elseif(!empty($Password) && !empty($PasswordConfirmation)){
		if($Password != $PasswordConfirmation){
			
			$valid = false;
			$_SESSION['flash']['danger'] = "La confirmation est différente !";
		}
		
	}
		
	if($valid){
		
		$id_public = uniqid();
		
		$DB->insert('Insert into user (pseudo, mail, password, idpublic) values (:pseudo, :mail,:password, :idpublic)', array('pseudo' => $Pseudo, 'mail' => $Mail, 'password' => crypt($Password, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t'), 'idpublic' => $id_public));

		
		$_SESSION['flash']['success'] = "Votre inscription a bien été prise en compte, connectez-vous !";
		header('Location: connexion.php');
		exit;
		
	}	
}	
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		

    <!-- AFFICHAGE -->
	
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
	
	<link href="assets/css/main.css" rel="stylesheet">

		
	</head>
	
	<body class="">
	<header>
	<div class="container-fluid">
	
	
	    <nav class="navbar navbar-expand-lg navbar-dark blue-gradient text-white fixed-top">
        <div class="container">
          <a class="navbar-brand" href="modifier.php">Inscription</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="material-icons">menu</i></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav navbar-right text-danger ml-auto">
				 <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="connexion.php">Connexion</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav></div>
	</header>	
<main class="mt-5 pt-5">


 	<div class="container"> <!-- Material form register -->
<div class="card">

    <h5 class="card-header blue-gradient white-text waves-effect text-center py-4">
        <strong>S'inscrire</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" action="inscription.php" class="text-center" style="color: #757575;">
						
				
		
                
                    <!-- First name -->
                    <div class="md-form"><?php
							if(isset($error_pseudo)){
								echo $error_pseudo."<br/>";
							}	
						?>
                        <input class="form-control" type="text" name="Pseudo" placeholder="Pseudo" value="<?php if (isset($Pseudo)) echo $Pseudo; ?>" maxlength="20" required="required">	
                    
                    </div>
               
             
           
     
            <!-- E-mail -->
            <div class="md-form">
                <input type="email" class="form-control"  id="materialRegisterFormEmail" placeholder="Adresse Email" name="Mail" value="<?php if (isset($Mail)) echo $Mail; ?>" required="required">	
            
            </div>

            <!-- Password -->
            <div class="md-form">
			<?php
							if(isset($error_password)){
								echo $error_password."<br/>";
							}	
						?>
                <input type="password" name="Password" placeholder="Mot de passe" value="<?php if (isset($Password)) echo $Password; ?>" required="required" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock">
                <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                   n'importe lequel.. pas de limitations ;)
                </small>

            </div>
			
			            <div class="md-form">
						<?php
							if(isset($error_passwordConf)){
								echo $error_passwordConf."<br/>";
							}	
						?>
                <input type="password" type="password" class="form-control" name="PasswordConfirmation" placeholder="Confirmation du mot de passe" required="required">
                  
            </div>



            <!-- Newsletter -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
            </div>

            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Envoyer</button>

            <!-- Social register -->
            <p>nous suivre:</p>

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

            <!-- Terms of service -->
            <p>By clicking
                <em>Sign up</em> you agree to our
                <a href="#">terms of service</a>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register --></div>
  <div class="col-md-2"> </div>
</div>	
	</div>
	
	
		



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
