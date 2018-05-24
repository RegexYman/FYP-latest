<html>
<body>
<?php
$id = $_POST['id'];
$mongoClient  = new MongoClient();
$db = $mongoClient ->fyp_test;
$collection = $db->accident;
$id = New MongoId($id);
$accident = array(
	'Location' => $_POST['location'],
	'Street_Number' => $_POST['street_number'],
	'Street_Name' => $_POST['street_name'],
	'District' => $_POST['district'],
	'Region' => $_POST['region'],
	'Datetime' => $_POST['datetime'],
	'Injuries' => $_POST['injuries'],
	'Status' => $_POST['status'],
	'Description' => $_POST['description']
);
$collection->update(
	array("_id" => $id),
	array('$set' => $accident)
);
echo "<script type='text/javascript'>window.location = './accident.php';</script>";
?>
</body>
</html>