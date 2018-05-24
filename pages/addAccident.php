<html>
<body>
<?php
$mongoClient  = new MongoClient();
$db = $mongoClient ->fyp_test;
$collection = $db->accident;

date_default_timezone_set('Asia/Hong_Kong');
$date = date('Y-m-d') . 'T' . date('h:i');
$accident = array(
	'Location' => $_POST['location'],
	'Street_Number' => $_POST['street_number'],
	'Street_Name' => $_POST['street_name'],
	'District' => $_POST['district'],
	'Region' => $_POST['region'],
	'Latitude' => $_POST['latitude'],
	'Longitude' => $_POST['longitude'],
	'Datetime' => $_POST['datetime'],
	'Injuries' => $_POST['injuries'],
	'Status' => $_POST['status'],
	'Description' => $_POST['description'],
	'Insert_Time' => $date,
	'End_Time' => null
);
$collection -> insert($accident);
echo "<script type='text/javascript'>window.location = './accident.php';</script>";
?>
</body>
</html>