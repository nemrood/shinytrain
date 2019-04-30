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
	$Password = trim($Password);
		
	if(empty($Mail)){
		$valid = false;
		$_SESSION['flash']['warning'] = "Veuillez renseigner votre mail !";
	}
	
	if(empty($Password)){
		$valid = false;
		$error_password = "Veuillez renseigner un mot de passe !";
	}
	
	
	$req = $DB->query('Select * from user where mail = :mail and password = :password', array('mail' => $Mail, 'password' => crypt($Password, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t')));
	$req = $req->fetch();
		
	if(!$req['mail']){
		$valid = false;
		$_SESSION['flash']['danger'] = "Votre mail ou mot de passe ne correspondent pas";
	}
	
	
	if($valid){
		
		//$_SESSION['id'] = $req['id'];
		$_SESSION['id'] = $req['idpublic'];
		$_SESSION['pseudo'] = $req['pseudo'];
		$_SESSION['mail'] = $req['mail'];
		$_SESSION['password'] = $req['password'];
		
		$_SESSION['flash']['info'] = "Bonjour " . $_SESSION['pseudo'];
		header('Location: accueil.php');
		exit;
			
	}else{echo"password or email failed";};
	
}	
?>

<!DOCTYPE html>
<html lang="fr">
	<header>
		

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

		
	</header>
	
	<body>
	<main class="mt-5 p-5">
	    <nav class="navbar navbar-expand-lg navbar-dark blue-gradient text-white fixed-top">
        <div class="container">
          <a class="navbar-brand" href="modifier.php">Connexion</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><i class="material-icons">menu</i></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav navbar-right text-danger ml-auto">
				   <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="inscription.php">Inscription</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="connexion.php">Connexion</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
		


		<div class="container">
		<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		
		
		<!-- Material form login -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Se connecter</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form method="post" action="" class="text-center" style="color: #757575;">

      <!-- Email -->
      <div class="md-form">
        <input class="form-control" type="email" name="Mail" placeholder="Mail" value="<?php if (isset($Mail)) echo $Mail; ?>" required="required">
     
      </div>

      <!-- Password -->
      <div class="md-form">
     <?php
							if(isset($error_password)){
								echo $error_password."<br/>";
							}	
						?>

                        <input class="form-control" type="password" name="Password" placeholder="Mot de passe" value="<?php if (isset($Password)) echo $Password; ?>" required="required">
      </div>

      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
            <label class="form-check-label" for="materialLoginFormRemember">Se souvenir de moi</label>
          </div>
        </div>
        <div>
          <!-- Forgot password -->
          <a href="">Oubli de Mot de passe?</a>
        </div>
      </div>

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Se connecter</button>

      <!-- Register -->
      <p>Pas encore membre?
        <a href="inscription.php">S'inscrire</a>
      </p>

      <!-- Social login -->
      <p>Nous suivre: </p>
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

    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
		
		
		
		
		</div>
		<div class="col-md-2"></div>
		</div>
		</div>
		
		
	  

    

		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
