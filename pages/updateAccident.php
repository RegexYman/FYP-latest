<!DOCTYPE html>
<html lang="en">
<?php
$id = $_GET['id'];
$mongoClient  = new MongoClient();
$db = $mongoClient ->fyp_test;
$collection = $db->accident;
$query = array ('Status' => array(
			'$ne' => 'End'));
$cursor = $collection->find($query);
$query = array ('Status' => 'End');
$cursor2 = $collection->find($query);
$id = New MongoId($id);
$query = array ("_id" => $id);
$cursor3 = $collection->findOne($query);
date_default_timezone_set('Asia/Hong_Kong');
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
                        <h1 class="page-header">Update Accident</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
					<div class="panel-body">
						<form action="updateAccident2.php" method="POST" role="form">
							<div class="form-group">
								<div class="form-group row">
									<div class="col-lg-8">
										<label>Detail Location</label>
										<input id="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text" class="form-control" name="location" value="<?=$cursor3['Location']?>"required>
									</div>
								</div>
								<div class="form-group row">
									<input type="hidden" name="id" value="<?=$cursor3['_id']?>">
									<div class="col-lg-2">
										<label>Street Number</label>
										<input class="form-control" type="text" id="street_number" name="street_number" value="<?=$cursor3['Street_Number']?>">
									</div>
									<div class="col-lg-2">
										<label>Street Name</label>
										<input class="form-control" type="text" id="route" name="street_name" value="<?=$cursor3['Street_Name']?>">
									</div>
									<div class="col-lg-2">
										<label>District</label>
										<input class="form-control" type="text" id="neighborhood" name="district" value="<?=$cursor3['District']?>">
									</div>
									<div class="col-lg-2">
										<label>Region</label>
										<input class="form-control" type="text" id="administrative_area_level_1" name="region" value="<?=$cursor3['Region']?>">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-2">
										<label>Date & Time</label>
										<input type="datetime-local" class="form-control" value="<?=$cursor3['Datetime']?>" id="datetime" name="datetime" required/>
									</div>
									<div class="col-lg-2">
										<label>Injuries</label>
										<input type="text" class="form-control" id="injuries" name="injuries" value="<?=$cursor3['Injuries']?>" required/>
									</div>
									<div class="col-lg-2">
										<label>Status</label>
										<select class="form-control" id="status" name="status" value="<?=$cursor3['Status']?>" required/>
											<option>Policeman arriving</option>
											<option>Policeman handling</option>
											<option>Fireman arriving</option>
											<option>Fireman handling</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-8">
										<label>Description</label>
										<textarea class="form-control" rows="3" id="desc" name="description"><?=$cursor3['Description']?></textarea>
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

                <div class="col-lg-12">
                    <div id="state1" class="panel panel-default">
                        <div class="panel-heading">
                            Accident
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="accident">
								<thead>
									<tr>
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
									</tr>
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
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-12">
                    <div id="state1" class="panel panel-default">
                        <div class="panel-heading">
                            Ended Accident
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="accident2">
								<thead>
									<tr>
										<th>Detil Location</th>
										<th>Region</th>
										<th>District</th>
										<th>Street Name</th>
										<th>Street Number</th>
										<th>Date & Time</th>
										<th>Injuries</th>
										<th>Description</th>
										<th>Generate Report</th>
									</tr>
								</thead>
								<tbody>
<?php
foreach ($cursor2 as $c){
	echo "<tr>";
	echo "<td>" . $c["Location"] . "</td>";
	echo "<td>" . $c["Region"] . "</td>";
	echo "<td>" . $c["District"] . "</td>";
	echo "<td>" . $c["Street_Name"] . "</td>";
	echo "<td>" . $c["Street_Number"] . "</td>";
	echo "<td>" . $c["Datetime"] . "</td>";
	echo "<td>" . $c["Injuries"] . "</td>";
	echo "<td>" . $c["Description"] . "</td>";
	echo "<td>" . "<a href='accidentReport.php?id=" . $c["_id"] . "'>" . "<button type='button' class='btn btn-outline btn-primary'>Generate Report</button>" . "</a>" . "</td>";
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
	
    <script>
        $(document).ready(function () {
            $('#accident').DataTable({
                responsive: true
            });
            $('#accident2').DataTable({
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVeetoouOilr4Sb_urexF_aHVzvhjjMqM&libraries=places&callback=initAutocomplete"
        async defer></script>

</body>

</html>