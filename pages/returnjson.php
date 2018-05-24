
<html>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

<button>Get JSON data</button>

<div><label id="da"></label></div>
<script>
var url ="http://218.255.16.240:3000/getTrafficSpeeds" ;
    axios.post(url, {
        year: '2018',
        month: '04',
        date: '02',
        hour: '18',
        minute: '02',
        region: 'HK'
    })
    .then(function (response) {

        console.log(response);
        var data = response.data;
        console.log(data[0]['Speed_List']['HK_Region']['Average_Speed']['Major_Route'][0]);
        
    })
    .catch(function (error) {
        console.log(error);
    });
</script>
<?php 
date_default_timezone_set("Asia/Hong_Kong");
    echo "Date".$date1 = date("Y-m-d");
    echo "<BR>";
    echo "day".$day =  date("H:i:s");
    echo "<BR>";
    echo $date = $date1."T".$day;
?>
</body>
</html>
