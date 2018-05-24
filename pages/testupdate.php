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

<?php 

 
    $m = new MongoClient();   
    $db = $m->fyp_test;           
    $collection = $db->Raw_SpeedMap; 
    $dataArray= array("Capture_Date"=>"2018-04-18T11:38:35");
    $cursor = $collection->find($dataArray);

   
    
?>
<script>
    $("button").click(function(){
        $.getJSON("",function(result){
            console.log(result);
        });
    });

    var data = $.getJSON("../data/testjson.json");
var haha = new Morris.Line(data);



$(function () {
    var data;
    $.getJSON("../data/testjson.json", function (d) {
        $('#accendent2').html("");
        haha.setData(d);
        
    });
    setInterval(
        function () {
            $.getJSON("../data/testjson.json", function (d) {
                $('#accendent2').html("");
                d.data[16].CentralWestern=Math.random()*100;
                haha.setData(d);
                
            })
        }
        , 5 *10000)
});
</script>

<script>
    $(function(){

Morris.Line({
    element: 'accendent',
    data: [{
        time: '2018-01-12 00:00',

        CentralWestern:"50"

    }, {
        time: '2018-01-12 01:00',

        CentralWestern:'46'

    }, {
        time: '2018-01-12 02:00',

        CentralWestern:'50'

    }, {
        time: '2018-01-12 03:00',

        CentralWestern:'57'

    }, {
        time: '2018-01-12 04:00',

        CentralWestern:'53'

    }, {
        time: '2018-01-12 05:00',

        CentralWestern:'50'

    }, {
        time: '2018-01-12 06:00',

        CentralWestern:'43'

    }, {
        time: '2018-01-12 07:00',

        CentralWestern:'45'

    }, {
        time: '2018-01-12 08:00',

        CentralWestern:'10'

    }, {
        time: '2018-01-12 09:00',

        CentralWestern:'17'

    },{
        time: '2018-01-12 10:00',

        CentralWestern:'23'

    },{
        time: '2018-01-12 11:00',

        CentralWestern:'14'

    },{
        time: '2018-01-12 12:00',

        CentralWestern:'5'

    },{
        time: '2018-01-12 13:00',

        CentralWestern:'5'

    },{
        time: '2018-01-12 14:00',

        CentralWestern:'13'

    },{
        time: '2018-01-12 15:00',
        CentralWestern:'17'

    },{
        time: '2018-01-12 16:00',

        CentralWestern:13

    },{
        time: '2018-01-12 17:00',

        CentralWestern:null

    },{
        time: '2018-01-12 18:00',

        CentralWestern:null

    },{
        time: '2018-01-12 19:00',

        CentralWestern:null

    },{
        time: '2018-01-12 20:00',

        CentralWestern:null

    },{
        time: '2018-01-12 21:00',

        CentralWestern:null

    },{
        time: '2018-01-12 22:00',

        CentralWestern:null

    },{
        time: '2018-01-12 23:00',

        CentralWestern:null

    },{
        time: '2018-01-12 24:00',

        CentralWestern:null

    }],
    xkey: 'time',
    ykeys: ['CentralWestern'],
    labels: ['CentralWestern'],
    pointSize: 4,
    hideHover: 'auto',
    resize: true,
    smooth:false

});

});
</script>
</body>

</html>