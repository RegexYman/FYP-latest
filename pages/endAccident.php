<html>
<body>
<?php
$id = $_GET['id'];
$mongoClient  = new MongoClient();
$db = $mongoClient ->fyp_test;
$collection = $db->accident;
$id = New MongoId($id);
date_default_timezone_set('Asia/Hong_Kong');
$date = date('Y-m-d') . 'T' . date('h:i');
$collection->update(
	array("_id" => $id),
	array('$set' => array('Status' => 'End', 'End_Time' => $date))
);
echo "<script type='text/javascript'>window.location = './accident.php';</script>";
?>
</body>
</html>