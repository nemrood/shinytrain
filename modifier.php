<?php
session_start();
include_once('includes.php');

if(!isset($_SESSION['pseudo'])){
	header('Location: accueil.php');
	exit;
}

if(!empty($_POST)){
	extract($_POST);
	$valid = true;

	if($modifier == "form"){
		$Pseudo = htmlspecialchars(trim($Pseudo));
	
		if(empty($Pseudo)){
			$valid = false;
			$_SESSION['flash']['danger'] = "Veuillez mettre un pseudo !";
			
		}
		
		$req = $DB->query("Select pseudo from user where idpublic = :id", array('id' => $_SESSION['id']));
		$req = $req->fetch();
		
		if($Pseudo == $_SESSION['pseudo']){
			$valid = false;
			$_SESSION['flash']['info'] = "Votre pseudo est le même";
		
		}
		
		if($valid){
			
			$DB->insert("UPDATE user SET pseudo = :newpseudo where idpublic = :id ", array('id' => $_SESSION['id'], 'newpseudo' => $Pseudo));
			
			$_SESSION['pseudo'] = $Pseudo;
			$_SESSION['flash']['success'] = "Votre pseudo a bien été modifié !";
			header('Location: modifier.php');
			exit;
		}
		
	}elseif($modifier == "mdp"){
		
		$Password = trim($Password);
		$PasswordConfirmation =trim($PasswordConfirmation);
		$NewPassword = trim($NewPassword);
		
		$req = $DB->query("Select * from user where idpublic = :id", array('id' => $_SESSION['id']));
		$req = $req->fetch();
		
		if(empty($Password)){
			$valid = false;
			$_SESSION['flash']['warning'] = "Veuillez mettre votre mot de passe !";
		
		}elseif($Password && empty($PasswordConfirmation)){
			$valid = false;
			$_SESSION['flash']['warning'] = "Veuillez confirmer votre mot de passe";

		}elseif($Password != $PasswordConfirmation){
			$valid = false;
			$_SESSION['flash']['danger'] = "Votre mot de passe ne correspond pas au mot de passe !";

		}else if($req['password'] != (crypt($Password, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t'))){
			$valid = false;
			$_SESSION['flash']['danger'] = "Votre mot de passe n'est pas le bon !";
			
		}else if(empty($NewPassword)){
			$valid = false;
			$_SESSION['flash']['warning'] = "Veuillez mettre un nouveau mot de passe !";
	
		}else if($valid){
			
			$DB->insert("UPDATE user SET password = :newpassword where idpublic = :id", array('id' => $_SESSION['id'], 'newpassword' => (crypt($NewPassword, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t'))));
			
			$_SESSION['flash']['success'] = "Votre nouveau mot de passe a été enregistré !";
			header('Location: modifier.php');
			exit;
			
		}	
	}
}		
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
	

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mdb.min.css" rel="stylesheet">  
	
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
		<title>Upload CV</title>
	</header>
	
	<body>	
		
		<?php 
		    if(isset($_SESSION['flash'])){ 
		        foreach($_SESSION['flash'] as $type => $message): ?>
				<div id="alert" class="alert alert-<?= $type; ?> infoMessage"><a class="close">X</span></a>
					<?= $message; ?>
				</div>	
		    
			<?php
			    endforeach;
			    unset($_SESSION['flash']);
			}
		?> 
			
		
		
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
</html