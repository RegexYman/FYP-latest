<html>
<body>
<?php
$mongoClient  = new MongoClient();
$db = $mongoClient ->fyp_test;
$collection = $db->forecast;
/*
echo $_POST['location'] . "<br>";
echo $_POST['street_number'] . "<br>";
echo $_POST['street_name'] . "<br>";
echo $_POST['district'] . "<br>";
echo $_POST['region'] . "<br>";
echo $_POST['description'] . "<br>";
*/
$location = array(
	'Date' => $_POST['date'],
	'Hightest_Temperature' => $_POST['high_temp'],
	'Lowest_Temperature' => $_POST['low_temp'],
	'Hightest_Humidity' => $_POST['high_humi'],
	'Lowest_Humidity' => $_POST['low_humi'],
	'Weather_Type' => $_POST['type'],
	'Description' => $_POST['description']
);
$collection -> insert($location);
echo "<script type='text/javascript'>window.location = './forecast.php';</script>";
?>
</body>
</html>