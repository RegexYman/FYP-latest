<html>
<body>
<?php
$mongoClient  = new MongoClient();
$db = $mongoClient ->fyp_test;
$collection = $db->broadcast;
/*
echo $_POST['location'] . "<br>";
echo $_POST['street_number'] . "<br>";
echo $_POST['street_name'] . "<br>";
echo $_POST['district'] . "<br>";
echo $_POST['region'] . "<br>";
echo $_POST['description'] . "<br>";
*/

date_default_timezone_set('Asia/Hong_Kong');
$date = date('Y-m-d') . 'T' . date('H:i');
$location = array(
	'Location' => $_POST['location'],
	'Street_Number' => $_POST['street_number'],
	'Street_Name' => $_POST['street_name'],
	'District' => $_POST['district'],
	'Region' => $_POST['region'],
	'Latitude' => $_POST['latitude'],
	'Longitude' => $_POST['longitude'],
	'Description' => $_POST['description'],
	'Insert_Time' => $date
);
$collection -> insert($location);
echo "<script type='text/javascript'>window.location = './broadcast.php';</script>";
?>
</body>
</html>