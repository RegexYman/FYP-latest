<html>
<body>
<?php
$id = $_GET['id'];
$mongoClient  = new MongoClient();
$db = $mongoClient ->fyp_test;
$collection = $db->forecast;
$id = New MongoId($id);
$query = array ("_id" => $id);
$collection->remove($query);
echo "<script type='text/javascript'>window.location = './forecast.php';</script>";
?>
</body>
</html>