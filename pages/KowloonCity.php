<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

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

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
                        <h1 class="page-header">Kowloon City District
                            <div id="test"></div>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#report">Report</button>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->

                </div>
                <!-- /.row -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> data
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Average
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="#">Average</a>
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
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="hkisland"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>

                    <!-- /.container-fluid -->
                </div>
                <?php 
        
    ?>
                <div class="col-lg-12">

                    <hr>
                    <div class="row">
                        <div class="table-responsive">
                            <div class="">
                                <center>
                                    <h1>The latest record for now</h1>
                                </center>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    Display Area:
                                    <select class="form-control">
                                        <option>Over all</option>
                                        <option>Eastern</option>
                                        <option>Wahchi</option>
                                        <option>Central & Western</option>
                                        <option>Southern</option>
                                    </select>
                                </div>
                                <div class="col-lg-3">
                                    Display time:
                                    <select class="form-control">
                                        <option>latest</option>
                                        <option>All day</option>
                                        <option>Wahchi</option>
                                        <option>Central & Western</option>
                                        <option>Southern</option>
                                    </select>
                                </div>
                                <div class="col-lg-1">
                                    <br>
                                    <button type="button" class="btn btn-outline btn-success">Submit</button>
                                </div>
                            </div>
                            <br>
                            <div id="t">
                                <table class="table table-striped table-bordered table-hover" id="hkislandtable">
                                    <thead>
                                    <tr>
                                            <th>Road condition</th>
                                            <th>km/h</th>
                                            <th>Road Type</th>
                                            <th>location</th>
                                            <th>Street Number</th>
                                            <th>District</th>
                                            <th>time</th>
                                        </tr>
                                    </thead>

                                    <tbody id="table">
                                        <?php 
                                        //    function wanchai(){
                                        //     $aggregate = array(
                                        //         array(
                                        //             '$match' => $filters, 
                                        //         ),
                                        //         array(
                                        //             '$lookup' => array(
                                        //                 'from' => 'comments',
                                        //                 'localField' => '_id',
                                        //                 'foreignField' => 'comment_post',
                                        //                 'as' => 'post_comments'
                                        //             ),
                                        //         )
                                        //         // array(
                                        //         //     '$limit' => // Example option
                                        //         // ),
                                        //         // array(
                                        //         //     '$sort' => // Other example option
                                        //         // )
                                        //     );
                                            
                                        //     $results = $this->getCollection()->aggregate($aggregate);
                                        //    }

                                        
                                            $m = new MongoClient();   
                                            $db = $m->fyp_test;           
                                            $collection = $db->speed_maps; 
                                            
                                            $cursor = $collection->find();
                                            $condition = ["Good_Speed","Average_Speed","Poor_Speed"];
                                            $roadtype= ["Urban_Route","Major_Route"];

                                            foreach($cursor as $data){
                                                for($x=0;$x< count($condition);$x++){
                                                    for($z=0; $z<count($roadtype);$z++){
                                                        for($i = 0 ; $i < count($data['Speed_List']['KL_Region'][$condition[$x]][$roadtype[$z]]); $i++){
                                                           

                                                            $res = findAllLinkIDInWanChai();
                                                            foreach($res as $wanchai){
                                                                if($wanchai['Link_ID']==$data['Speed_List']['KL_Region'][$condition[$x]][$roadtype[$z]][$i]['Link_ID']){
                                                                    
                                                                    echo "<td>".$condition[$x]."</td><td>".$data['Speed_List']['KL_Region'][$condition[$x]][$roadtype[$z]][$i]['Traffic_Speed']."</td>";
                                                                    echo "<td>".$roadtype[$z]."</td>";
                                                                    echo "<td>". $wanchai['Street_Name']."</td>";
                                                                    echo "<td>". $wanchai['Street_Number']."</td>";
                                                                    echo "<td>". $wanchai['District']."</td>";
                                                                    echo "<td>".$data["Capture_Date"]."</td></tr>";

                                                                }
                                                            }
                                                           
                                                        }
                                                    }
                                                }
                                            }                  
                                            function findlocation($id){
                                                global   $db;  
                                                $collection2 = $db->tsm_geo; 
                                                $speedmapQuery = array(
                                                    'Link_ID' => $id
                                                );
                                                $cursor2 = $collection2->find($speedmapQuery);
                                                foreach($cursor2 as $result){
                                                   return $result;
                                                }
                                            }
                                            function findAllLinkIDInWanChai(){
                                                global   $db;  
                                                $collection2 = $db->tsm_geo; 
                                                $speedmapQuery = array(
                                                    'District' => "九龍城區"
                                                );
                                                $cursor2 = $collection2->find($speedmapQuery);
                                                return $cursor2;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end off-->
            </div>
            <br>

            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Kowloon City Traffic Condition
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
                <br>
                <br>
            </div>
        </div>
        <!-- /#page-wrapper -->

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
        $('#hkislandtable').DataTable({
            responsive: true
        });
    </script>
</body>

</html>