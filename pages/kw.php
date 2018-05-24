<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(empty($_SESSION['email'])){
	echo "<script type='text/javascript'>window.location = './login.php';</script>";
}else{
	$mongoClient  = new MongoClient();
	$db = $mongoClient ->fyp_test;
	$collection = $db->tsm_data;
	$geo = $db->tsm_geo;
	$query = array ('$or' => array(
			array('REGION' => '九龍'),
			array('REGION' => 'Kowloon'),
			array('REGION' => 'K')
		));
	$cursor = $collection->find($query);
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

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                                            <a href="wanchai.php">Wanchai Disrict</a>
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
                        <h1 class="page-header">Kowloon Traffic Record
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                </div>
                <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="table-responsive">
                            <!-- /.panel-heading -->
                            <div class="">
                                <table class="table table-striped table-bordered table-hover" id="hkislandtable">
                                    <thead>
                                        <tr>
											<th>Street Name</th>
											<th>Street Number</th>
											<th>District</th>
                                            <th>Road Type</th>
                                            <th>Road Saturation Level</th>
                                            <th>Traffic Speed</th>
                                            <th>Capture Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
foreach ($cursor as $c){
	echo "<tr>";
	$query2 = array ('Link_ID' => $c["LINK_ID"]);
	$cursor2 = $geo->find($query2);
	foreach ($cursor2 as $c2){
		echo "<td>" . $c2["Street_Name"] . "</td>";
		echo "<td>" . $c2["Street_Number"] . "</td>";
		echo "<td>" . $c2["District"] . "</td>";
	}
	echo "<td>" . $c["ROAD_TYPE"] . "</td>";
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
                    </div>
                </div>
                <!-- end off-->
            </div>
        </div>
        <!-- /#page-wrapper -->
        </div>
    </div>
    <!-- /#wrapper -->
    <div class="modal fade" id="report" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Report</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Region</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>Hong Kong</option>
                                <option>Kowloon</option>
                                <option>NT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">District</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>Central and Western</option>
                                <option>Eastern</option>
                                <option>Southern</option>
                                <option>Wan Chai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Detail Location</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1234 Main St OR Lampost ID">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                        </div>
                        <label class="form-check-label" for="defaultCheck1">
                            Type
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Car Crash
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">
                                Injuries
                            </label>
                        </div>
                        <br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                    <button type="button" class="btn btn-primary" id="delete" data-dismiss="modal">Send</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

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
    <script>
        $(document).ready(function () {
            $('#hkislandtable').DataTable({
                responsive: true
            });
        });
    </script>
</body>

</html>