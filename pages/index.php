<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(empty($_SESSION['email'])){
	echo "<script type='text/javascript'>window.location = './login.php';</script>";
}else{
	$mongoClient  = new MongoClient();
	$db = $mongoClient ->fyp_test;
	$collection = $db->accident;
	$query = array ('Status' => array(
				'$ne' => 'End'));
	$cursor = $collection->find($query);
	date_default_timezone_set('Asia/Hong_Kong');
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Traffic Flow Management System</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-bar-chart-o fa-fw"></i> Accident
						<div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
									Actions
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right" role="menu">
									<li>
										<a href="#">Month</a>
									</li>
									<li>
										<a href="#">Week</a>
									</li>
									<li>
										<a href="#">Day</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /.panel-body -->

					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<thead>
									<th>Detil Location</th>
									<th>Region</th>
									<th>District</th>
									<th>Street Name</th>
									<th>Street Number</th>
									<th>Date & Time</th>
									<th>Injuries</th>
									<th>Status</th>
									<th>Description</th>
									<th>Update Status</th>
									<th>End Accident</th>
								</thead>
								<tbody>
<?php
foreach ($cursor as $c){
	echo "<tr>";
	echo "<td>" . $c["Location"] . "</td>";
	echo "<td>" . $c["Region"] . "</td>";
	echo "<td>" . $c["District"] . "</td>";
	echo "<td>" . $c["Street_Name"] . "</td>";
	echo "<td>" . $c["Street_Number"] . "</td>";
	echo "<td>" . $c["Datetime"] . "</td>";
	echo "<td>" . $c["Injuries"] . "</td>";
	echo "<td>" . $c["Status"] . "</td>";
	echo "<td>" . $c["Description"] . "</td>";
	echo "<td>" . "<a href='updateAccident.php?id=" . $c["_id"] . "'>" . "<button type='button' class='btn btn-outline btn-primary'>Update Status</button>" . "</a>" . "</td>";
	echo "<td>" . "<a href='endAccident.php?id=" . $c["_id"] . "'>" . "<button type='button' class='btn btn-outline btn-primary'>End Accident</button>" . "</a>" . "</td>";
	echo "</tr>";
}
?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
            </div>
            <!-- /.row -->
            <!-- <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right">
                                    <i class="fa fa-arrow-circle-right"></i>
                                </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> -->
            <!-- /.row -->
            <div class="row">
                <h3 class="slowingDown ">Slow Traffic Warning</h3>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="#">Action</a>
                                        </li>
                                        <li>
                                            <a href="#">Another action</a>
                                        </li>
                                        <li>
                                            <a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <!-- /.panel-heading -->
                        <!-- <div class="panel-body">
                            <div id="morris-area-chart"></div>
                        </div> -->
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i><label id="slow"></label>
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Forecast
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                            <div class="fa-3x" id="sl1" >
                                    <center>
                                        <i class="fas fa-spinner fa-pulse" ></i></center>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.col-lg-4 (nested) -->
                            <div>
                                <div id="slowtrafficwarning"></div>
                            </div>
                            <!-- /.col-lg-8 (nested) -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                                <div class="pull-right">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                            Actions
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="#">Action</a>
                                            </li>
                                            <li>
                                                <a href="#">Another action</a>
                                            </li>
                                            <li>
                                                <a href="#">Something else here</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                        <!-- /.panel-heading -->
                        <!-- <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div> -->
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i><label id="slow2"></label> 
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Forecast
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="#"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.table-responsive -->
                                <div class="fa-3x" id="sl2" >
                                    <center>
                                        <i class="fas fa-spinner fa-pulse" ></i></center>
                                </div>
                            </div>
                            <!-- /.col-lg-4 (nested) -->
                            <div>
                                <div id="slowtrafficwarning2">
                                    
                                </div>
                            </div>
                            <!-- /.col-lg-8 (nested) -->
                        </div>
                        <!-- /.row -->
                    </div>

                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
                <!-- <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Notifications Panel
                        </div>
                        <!-- /.panel-heading -->
                <!-- <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-comment fa-fw"></i> Forecast in HK
                                    <span class="pull-right text-muted small">
                                        <em>5 hours ago</em>
                                    </span>
                                </a>

                            </div> -->
                <!-- /.list-group -->
                <!-- <a href="#" class="btn btn-default btn-block">View All Alerts</a>
                        </div> -->
                <!-- /.panel-body -->
                <!-- </div>
                </div>  -->


            </div>
            <div class="row">
				<div class="panel panel-default">
						<div class="panel-heading">
							<i class="fa fa-bar-chart-o fa-fw"></i> Map
							<div class="pull-right">
							</div>
						</div>
						<!-- /.panel-heading -->
						<style>
							iframe {
								width: 100%;
								height: 600px;
							}
						</style>
						<div class="panel-body">
							<iframe src="../simplegeo/examples/streetsTest/streets.html"></iframe>
						</div>
						<!-- /.panel-body -->
				</div>
					
					<br><br>
            </div>
        </div>
        <!-- /.panel .chat-panel -->

    </div>
    <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
    <script src="../data/slowTrafficWarning.js"></script>
    <script src="../data/slowTrafficWarning2.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>