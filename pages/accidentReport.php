<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(empty($_SESSION['email'])){
	echo "<script type='text/javascript'>window.location = './login.php';</script>";
}else{
	$id = $_GET['id'];
	$mongoClient  = new MongoClient();
	$db = $mongoClient ->fyp_test;
	$collection = $db->accident;
	$data = $db->tsm_data;
	$id = New MongoId($id);
	$query = array ("_id" => $id);
	$c = $collection->findOne($query);
	$time = $c['End_Time'];
	$c2 = $data->find(array("CAPTURE_DATE" => array('$lte' => $time)))->sort(array('CAPTURE_DATE'=>-1))->limit(1);
	$c3 = $data->find(array("CAPTURE_DATE" => array('$gt' => $time)))->sort(array('CAPTURE_DATE'=>1))->limit(1);
}
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Traffic Flow Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Traffic Flow Management System</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                                <!-- /.dropdown -->
                                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    <li>
                            <a href="logout.php">
                                Logout</a>
                        </li>
                    </ul>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->


            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="index.php">
                                <i class="fa fa-home fa-lg" aria-hidden="true"></i> Home Page</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-clock-o  fa-lg"></i> Real-Time Data
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="realtime-data.html">Hong Kong
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="hkoverall.php">Hong Kong Overall</a>
                                        </li>
                                        <li>
                                            <a href="eastern.php">Eastern Disrict</a>
                                        </li>
                                        <li>
                                            <a href="wanchai.php">Wanchai Disrict</a>
                                        </li>
                                        <li>
                                            <a href="central_and_western_district.php">central_and_western_district</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">Kowloon
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="kowloon.php">Kowloon Overall</a>
                                        </li>
                                        <li>
                                            <a href="WongTaiSin.php">Wong Tai Sin Disrict</a>
                                        </li>
                                        <li>
                                            <a href="KwunTongDistrict.php">Kwun Tong Disrict</a>
                                        </li>
                                        <li>
                                            <a href="YauTsimMong.php">Yau Tsim Mong Disrict</a>
                                        </li>
                                        <li>
                                            <a href="KowloonCity.php">KowloonCity Disrict</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="#">New Territories
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="stoverall.php">Overall(ST)</a>
                                        </li>
                                        <li>
                                            <a href="tuenmun.php">Overall(TM)</a>
                                        </li>
                                        <li>
                                            <a href="ShaTin.php">ShaTin Disrict</a>
                                        </li>
                                        <li>
                                            <a href="yuenlong.php">YuenLong Disrict</a>
                                        </li>
                                        <li>
                                            <a href="TsuenWan.php">TsuenWan Disrict</a>
                                        </li>
                                        <li>
                                            <a href="TuenMun.php">TuenMun Disrict</a>
                                        </li>
                                        <li>
                                            <a href="KwaiTsing.php">KwaiTsing Disrict</a>
                                        </li>
                                </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-clock-o  fa-lg"></i> Traffic Record
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="hk.php">Hong Kong</a>
                                </li>
                                <li>
                                    <a href="kw.php">Kowloon</a>
                                </li>
                                <li>
                                    <a href="nt.php">New Territories</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="trafficForecast.php">
                                <i class="fa fa-fw fa fa-warning"></i> Traffic Jam Forecast</a>
                        </li>
                        <li>
                            <a href="broadcast.php">
                                <i class="fa fa-fw fa fa-bullhorn"></i> Broadcast</a>
                        </li>
                        <li>
                            <a href="accident.php">
                                <i class="fa fa-fw fa-newspaper-o"></i> Accidents Report</a>
                        </li>
                        <li>
                            <a href="trafficCounterSimulation.html">
                                <i class="fa fa-fw fas fa-lightbulb"></i> traffic Counter Simulation</a>
                        </li>
                        <li>
                            <a href="trafficLightSimulation.html">
                                <i class="fa fa-fw fas fa-lightbulb"></i> traffic Light Simulation</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Accident Report</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
					<div class="panel-body">
						<form action="addAccident.php" method="POST" role="form">
							<div class="form-group">
								<div class="form-group row">
									<div class="col-lg-8">
										<label>Detail Location</label>
										<input id="autocomplete" type="text" class="form-control" name="location" value="<?=$c["Location"]?>" disabled="true">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-2">
										<label>Street Number</label>
										<input class="form-control" type="text" id="street_number" value="<?=$c["Street_Number"]?>" disabled="true" name="street_number">
									</div>
									<div class="col-lg-2">
										<label>Street Name</label>
										<input class="form-control" type="text" id="route" value="<?=$c["Street_Name"]?>" disabled="true" name="street_name">
									</div>
									<div class="col-lg-2">
										<label>District</label>
										<input class="form-control" type="text" id="neighborhood" value="<?=$c["District"]?>" disabled="true" name="district">
									</div>
									<div class="col-lg-2">
										<label>Region</label>
										<input class="form-control" type="text" id="administrative_area_level_1" value="<?=$c["Region"]?>" disabled="true" name="region">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-2">
										<label>Date & Time</label>
										<input type="datetime-local" class="form-control" value="<?=$c["Datetime"]?>" disabled="true" id="datetime" name="datetime" required/>
									</div>
									<div class="col-lg-2">
										<label>Injuries</label>
										<input type="text" class="form-control" id="injuries" name="injuries" value="<?=$c["Injuries"]?>" disabled="true"/>
									</div>
									<div class="col-lg-2">
										<label>Status</label>
										<input type="text" class="form-control" id="status" name="status" value="<?=$c["Status"]?>" disabled="true"/>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-8">
										<label>Description</label>
										<textarea class="form-control" rows="3" id="desc" name="description" value="<?=$c["Description"]?>" disabled="true"></textarea>
									</div>
								</div>
							</div>
						</form>
					</div>

                <div class="col-lg-12">
                    <div id="state1" class="panel panel-default">
                        <div class="panel-heading">
                            Traffic Record Before Accident
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="accident">
								<thead>
									<tr>
										<th>Road Saturation Level</th>
										<th>Traffic Speed</th>
										<th>Capture Date</th>
									</tr>
								</thead>
								<tbody>
<?php
foreach ($c2 as $c){
	echo "<tr>";
	echo "<td>" . $c["ROAD_SATURATION_LEVEL"] . "</td>";
	echo "<td>" . $c["TRAFFIC_SPEED"] . "</td>";
	echo "<td>" . $c["CAPTURE_DATE"] . "</td>";
	echo "</tr>";
}
?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-12">
                    <div id="state1" class="panel panel-default">
                        <div class="panel-heading">
                            Traffic Record After Accident
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="accident2">
								<thead>
									<tr>
										<th>Road Saturation Level</th>
										<th>Traffic Speed</th>
										<th>Capture Date</th>
									</tr>
								</thead>
								<tbody>
<?php
foreach ($c3 as $c){
	echo "<tr>";
	echo "<td>" . $c["ROAD_SATURATION_LEVEL"] . "</td>";
	echo "<td>" . $c["TRAFFIC_SPEED"] . "</td>";
	echo "<td>" . $c["CAPTURE_DATE"] . "</td>";
	echo "</tr>";
}
?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

	
	<script src="../vendor/moment/moment.js"></script>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
	
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	
	<script src="../vendor/bootstrap/js/transition.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap-datetimepicker.min.js"></script>
	
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVeetoouOilr4Sb_urexF_aHVzvhjjMqM&libraries=places&callback=initAutocomplete"
        async defer></script>

</body>

</html>