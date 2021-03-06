<!DOCTYPE html>
<html lang="en">
<?php
$mongoClient  = new MongoClient();
$db = $mongoClient ->fyp_test;
$collection = $db->forecast;
$query = array ('Region' => '香港島');
$cursorHK = $collection->find($query);
$query = array ('Region' => '九龍');
$cursorKW = $collection->find($query);
$query = array ('Region' => '新界');
$cursorNT = $collection->find($query);
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
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#">
                                <i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
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
                        <h1 class="page-header">Forecast</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>Add Forecast</h5>
                        </div>
                        <div class="panel-body">
							<form action="addforecast.php" method="POST" role="form">
								<div class="form-group">
									<div class="form-group row">
										<div class="col-lg-8">
											<label>Date</label>
											<input id="date" type="date" class="form-control" name="date" required>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-lg-2">
											<label>Highest Temperature (°C)</label>
											<input class="form-control" type="number" id="high_temp"name="high_temp" min="0" required>
										</div>
										<div class="col-lg-2">
											<label>Lowest Temperature (°C)</label>
											<input class="form-control" type="number" id="low_temp" name="low_temp" min="0" required>
										</div>
										<div class="col-lg-2">
											<label>Highest Humidity (%)</label>
											<input class="form-control" type="number" id="high_humi" name="high_humi" min="0" max="100" required>
										</div>
										<div class="col-lg-2">
											<label>Lowest Humidity (%)</label>
											<input class="form-control" type="number" id="low_humi" name="low_humi" min="0" max="100" required>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-lg-8">
											<label>Weather Type</label>
											<select id="type" class="form-control" name="type" required>
												<option value="Sunny">Sunny</option>
												<option value="Cloudy">Cloudy</option>
												<option value="Rainy">Rainy</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-lg-8">
											<label>Description</label>
											<textarea class="form-control" rows="3" id="desc" name="description"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-lg-12">
											<button type="submit" id="show" class="btn btn-default">Submit Button</button>
											<button type="reset" class="btn btn-default">Reset Button</button>
										</div>
									</div>
								</div>
							</form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div id="state1" class="panel panel-default">
                        <div class="panel-heading">
                            Forecast in Hong Kong Island
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="forecastinhk">
                                <thead>
                                    <tr>
										<th>Detil Location</th>
                                        <th>Region</th>
                                        <th>District</th>
                                        <th>Street Name</th>
                                        <th>Street Number</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
foreach ($cursorHK as $c){
	echo "<tr>";
	echo "<td>" . $c["Location"] . "</td>";
	echo "<td>" . $c["Region"] . "</td>";
	echo "<td>" . $c["District"] . "</td>";
	echo "<td>" . $c["Street_Name"] . "</td>";
	echo "<td>" . $c["Street_Number"] . "</td>";
	echo "<td>" . $c["Description"] . "</td>";
	echo "<td>" . "<a href='delforecast.php?id=" . $c["_id"] . "'>" . "<button type='button' class='btn btn-outline btn-danger'>Delete</button>" . "</a>" . "</td>";
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forecast in Kowloon
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="forecastinkw">
                                <thead>
                                    <tr>
										<th>Detil Location</th>
                                        <th>Region</th>
                                        <th>District</th>
                                        <th>Street Name</th>
                                        <th>Street Number</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
foreach ($cursorKW as $c){
	echo "<tr>";
	echo "<td>" . $c["Location"] . "</td>";
	echo "<td>" . $c["Region"] . "</td>";
	echo "<td>" . $c["District"] . "</td>";
	echo "<td>" . $c["Street_Name"] . "</td>";
	echo "<td>" . $c["Street_Number"] . "</td>";
	echo "<td>" . $c["Description"] . "</td>";
	echo "<td>" . "<a href='delforecast.php?id=" . $c["_id"] . "'>" . "<button type='button' class='btn btn-outline btn-danger'>Delete</button>" . "</a>" . "</td>";
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
                <!-- col12-->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forecast in New Territories
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="forecastinnt">
                                <thead>
                                    <tr>
										<th>Detil Location</th>
                                        <th>Region</th>
                                        <th>District</th>
                                        <th>Street Name</th>
                                        <th>Street Number</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
foreach ($cursorNT as $c){
	echo "<tr>";
	echo "<td>" . $c["Location"] . "</td>";
	echo "<td>" . $c["Region"] . "</td>";
	echo "<td>" . $c["District"] . "</td>";
	echo "<td>" . $c["Street_Name"] . "</td>";
	echo "<td>" . $c["Street_Number"] . "</td>";
	echo "<td>" . $c["Description"] . "</td>";
	echo "<td>" . "<a href='delforecast.php?id=" . $c["_id"] . "'>" . "<button type='button' class='btn btn-outline btn-danger'>Delete</button>" . "</a>" . "</td>";
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
                <!-- col12-->

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Delete Forecast</h4>
                </div>
                <div class="modal-body">
                    Are you sure to delete this Forecast?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                    <button type="button" class="btn btn-primary" id="delete" data-dismiss="modal">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Add Forecast</h4>
                </div>
                <div class="modal-body">
                    Are you sure to Add this Forecast?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancle</button>
                    <button type="button" id="aaa" class="btn btn-primary" data-dismiss="modal">Save changes</button>
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
            $('#forecastinhk').DataTable({
                responsive: true
            });
            $('#forecastinkw').DataTable({
                responsive: true
            });
            $('#forecastinnt').DataTable({
                responsive: true
            });
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVeetoouOilr4Sb_urexF_aHVzvhjjMqM&libraries=places&callback=initAutocomplete"
        async defer></script>
</body>

</html>