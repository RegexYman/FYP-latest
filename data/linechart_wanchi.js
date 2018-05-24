$(document).ready(function () {

    var fulltime;
    var haha = [];
    
    function getdata() {

        return haha;
    }
    function getlocation(){
        return location;
    }

    var d = new Date();
    var year = d.getFullYear();
    var m = d.getMonth() + 1;
    var month;
    if (m < 10) {
        month = '0' + m;
    } else {
        month = m;
    }
    var date;
    if (d.getDate() < 10) {
        date = '0' + d.getDate();
    } else {
        date = d.getDate();
    }
    var hour = d.getHours();
    var minute;
    var min = d.getMinutes();
    if (min % 2 == 0) {
        minute = min;
    } else {
        minute = min - 1;
    }
    if (minute < 10) {
        minute = "0" + minute;
    }
    fulltime = year + "-" + month + "-" + date + " ";
    console.log(fulltime);
    console.log(date);

    $("#hkislandtable").on("click", "#btn", function(){
        var loc;
        val = $(this).val();
        console.log(val);
        var el = document.getElementById(val);
        var loc = (el.innerText || el.textContent);
        console.log(loc);
      
        $('#wanchi').html("");
        location = new Array();
        location.push(loc+"");  
        start();
    });
    var location = [];
    location.push("黃泥涌道");  

    var val = '46479-781';
    console.log(location);
    start();
    
    console.log(val);

    function start() {
        var i = 0;
      $("#wan").show();
        var url = "http://218.255.16.240:3000/getRawTrafficSpeed";
        axios.post(url, {
            yyyy: '' + year,
            mm: month,
            dd: ''+date,
            link_ID: ''+val
        })
            .then(function (response) {
               
                console.log(response);
                var res = response.data;
                console.log(res);
                 var data = new Array();
                 var newdate = new Array();
                 haha = new Array();
                for (i; i < res.length; i++) {
                    
                    console.log(res[i]['TRAFFIC_SPEED']['_text']);
                    console.log(res[i]['CAPTURE_DATE']['_text']);
                    
                    data[i] = res[i]['TRAFFIC_SPEED']['_text'];
                    newdate[i] = res[i]['CAPTURE_DATE']['_text'];
                    haha.push({
                        time: newdate[i],
                        黃泥涌道: data[i]
                    });             
                        
                    
                }
                $("#wan").hide();
                $('#wanchi').html("");
                var wanchi = Morris.Line({
                    element: 'wanchi',
                    data: getdata(),
                    xkey: 'time',
                    ykeys: ['黃泥涌道'],
                    labels: [getlocation()],
                    pointSize: 3,
                    hideHover: 'auto',
                    resize: true,
                    smooth: false

                });
            })
            .catch(function (error) {
                console.log(error);
            });
    }
    setInterval(
        function () {
            $('#wanchi').html("");
            start();
        }
        , 120*1000)
   


})