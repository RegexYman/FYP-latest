<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(empty($_SESSION['email'])){
	echo "<script type='text/javascript'>window.location = './login.php';</script>";
}else{
	$mongoClient  = new MongoClient();
	$db = $mongoClient ->fyp_test;
	$collection = $db->broadcast;
	$query = array ('$or' => array(
				array ('Region' => '香港島'),
				array ('Region' => 'Hong Kong Island')
			));
	$cursorHK = $collection->find($query);
	$query = array ('$or' => array(
				array('Region' => '九龍'),
				array('Region' => 'Kowloon')
			));
	$cursorKW = $collection->find($query);
	$query = array ('$or' => array(
				array ('Region' => '新界'),
				array ('Region' => 'New Territories')
			));
	$cursorNT = $collection->find($query);
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
                        <h1 class="page-header">Broadcast</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5>Add Broadcast</h5>
                        </div>
                        <div class="panel-body">
							<form action="addbroadcast.php" method="POST" role="form">
								<div class="form-group">
									<div class="form-group row">
										<div class="col-lg-8">
											<label>Detail Location</label>
											<input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text" class="form-control" name="location" required>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-lg-2">
											<label>Street Number</label>
											<input class="form-control" type="text" id="street_number" disabled="true" name="street_number">
										</div>
										<div class="col-lg-2">
											<label>Street Name</label>
											<input class="form-control" type="text" id="route" disabled="true" name="street_name">
										</div>
										<div class="col-lg-2">
											<label>District</label>
											<input class="form-control" type="text" id="neighborhood" disabled="true" name="district">
										</div>
										<div class="col-lg-2">
											<label>Region</label>
											<input class="form-control" type="text" id="administrative_area_level_1" disabled="true" name="region">
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="">Latitude</label>
                                        <input type="text" id="lat" name="latitude" disabled="true" class="form-control" readonly>
                                    </div>
                                        <div class="col-lg-2">
                                            <label for="">Longitude</label>
                                            <input type="text" id="lng" name="longitude" disabled="true" class="form-control" readonly>
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
    </div>
    <div class="row">
                <div class="col-lg-12">
                    <div id="state1" class="panel panel-default">
                        <div class="panel-heading">
                            Broadcast in Hong Kong Island
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="broadcastinhk">
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
	echo "<td>" . "<a href='delBroadcast.php?id=" . $c["_id"] . "'>" . "<button type='button' class='btn btn-outline btn-danger'>Delete</button>" . "</a>" . "</td>";
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
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Broadcast in Kowloon
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="broadcastinkw">
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
	echo "<td>" . "<a href='delBroadcast.php?id=" . $c["_id"] . "'>" . "<button type='button' class='btn btn-outline btn-danger'>Delete</button>" . "</a>" . "</td>";
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
<div class="row">
                <!-- col12-->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Broadcast in New Territories
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="broadcastinnt">
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
	echo "<td>" . "<a href='delBroadcast.php?id=" . $c["_id"] . "'>" . "<button type='button' class='btn btn-outline btn-danger'>Delete</button>" . "</a>" . "</td>";
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
                    Are you sure to delete this Broadcast?
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
                    <h4 class="modal-title" id="myModalLabel">Add Broadcast</h4>
                </div>
                <div class="modal-body">
                    Are you sure to add this Broadcast?
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
	<script>
      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        neighborhood: 'long_name',
        administrative_area_level_1: 'long_name'
      };

      function initAutocomplete() {
		var options = {
		  componentRestrictions: {country: 'hk'}
		};
        autocomplete = new google.maps.places.Autocomplete((document.getElementById('autocomplete')),
			options);

        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        var place = autocomplete.getPlace();
        $('#lat').prop('disabled',false);
        $('#lng').prop('disabled',false);
        $('#lat').removeAttr('readonly');
        $('#lng').removeAttr('readonly');
        $('#lat').val(place.geometry.location.lat());
        $('#lng').val(place.geometry.location.lng());
        $('#lat').attr('readonly','readonly');
        $('#lng').attr('readonly','readonly');
        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVeetoouOilr4Sb_urexF_aHVzvhjjMqM&libraries=places&callback=initAutocomplete&language=zh-HK"
        async defer></script>
</body>

</html>