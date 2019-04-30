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
  <tbody>
    
 <tr>
 <?php
	
	$res = mysqli_query($con,"SELECT id,prenom,nom,email,jobcode,ticketNum,fileurl FROM upload");
	if($res === FALSE) { 
    die(mysqli_error()); // TODO: better error handling
     }
         
	while ($row = mysqli_fetch_array($res, MYSQLI_BOTH)) {
		?>
<td><?php echo $row['prenom']; ?></td>
<td><?php echo $row['nom']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['jobcode']; ?></td>
<td><?php echo $row['ticketNum']; ?></td>
<td><a href="uploads/<?php echo $row["fileurl"] ?>">Cliquez-ici</a>
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


?>
</tr>
</tbody><!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
 	</body></html>