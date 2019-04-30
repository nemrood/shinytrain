<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'lab');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("SELECT COUNT(  `jobcode` ) nbr, jobcode
FROM lab.upload
GROUP BY jobcode");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
	while ($row = mysqli_fetch_array($result)) {

		//$jobcode = $jobcode . '"'. $row['jobcode'].'",';
		$data[] = $row;
		
	}



//now print the data
print json_encode($data);
	
?>
