<?php
include "dbconn.php";
if(isset($_POST["submit"])){
	

$allowedExts = array("pdf");
$temp = explode(".", $_FILES["fileurl"]["name"]);
$extension = end($temp);
$upload_pdf=$_FILES["fileurl"]["name"];
$jobcode = $_POST['jobcode'];
$prenom = $_POST['prenom'];
$ticketNum = $_POST['ticketNum'];
$nom = $_POST['nom'];
$email = $_POST['email'];


move_uploaded_file($_FILES["fileurl"]["tmp_name"],"uploads/" . $_FILES["fileurl"]["name"]);

$sql=mysqli_query($con,"INSERT INTO `upload`(fileurl,prenom,ticketNum,nom,email,jobcode)VALUES('$upload_pdf','$prenom','$ticketNum','$nom','$email','$jobcode')");

if($sql){
	$upload_pdf = "test/uploads";?>
	<div class="alert alert-primary" role="alert">
  
 <i class="far fa-check-circle">File uploaded ! <a href="dashboard.php" class="alert-link">Back to home here :) !</a>
</i>
</div>
	<?php
	
	$res = mysqli_query($con,"SELECT id,prenom,nom,email,jobcode,ticketNum,fileurl FROM upload");
	if($res === FALSE) { 
    die(mysqli_error()); // TODO: better error handling
     }
         
	while ($row = mysqli_fetch_array($res, MYSQLI_BOTH)) {
		?>
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
		<br>
		<br>
		<table class="table  style="display: none;"">
  <thead  style="display: none;" class="info-color white-text">
	<tr  style="display: none;">



<br>
</tr>
</thead>
</table>
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  				
</body>
</html>
 <?php
	//	echo  $rows['name']."<a href='download.php?dow=$upload_pdf'>telecharger</a><br>";
	}
	
	
	
	
}else{
	echo "Data Submit Error 1";
}
}
else{
	echo "Data Submit Error2";
}


/*
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$jobcode = $_POST['jobcode'];
$fileurl = $_POST['fileurl']; 

if(!empty($prenom)|| !empty($nom) || !empty($email) || !empty($jobcode) || !empty($fileToUpload)){
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "lab";	

$conn = new mysqli($host , $dbUsername , $dbPassword , $dbname);
}
if (mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}else{
	$SELECT = "SELECT email From upload Where email = ? Limit 1";
	$INSERT = "INSERT INTO upload (prenom,nom,email,jobcode,fileurl values(?,?,?,?,?)";
	
	$stmt = $conn->prepare($SELECT);
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->store_result();
	$rnum = $stmt->num_rows;
	
	if($rnum==0){
		$stmt->close();
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("ssii",$prenom,$nom,$email,$jobcode,$fileurl); 
		$stmt->execute();
		echo "les coordonnées sont bien enregistré";
		
	}else {
		echo"quelqu'un déjà ajoute son CV  en utilisant cet email ";
	}
	$stmt->close();
	$conn->close();
	
}




$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx"
&& $imageFileType != "rtf" ) {
    echo "Sorry, only pdf, doc, docx & rtf files are allowed.";
    $uploadOk = 0;
}
}else {
	
	
	
	
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$req = $db->prepare('INSERT INTO  upload(prenom,nom,email,jobcode,fileurl) VALUES(?,?,?,?,?)');
		$req->execute(array());
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
*/

?>