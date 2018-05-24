$(document).ready(function () {

    var fulltime;
    var data = new Array();
    var newdate = new Array();
    var haha = [];

    function getdata() {

        return haha;
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


    start();
 

    function start() {
        var i = 0;
        $("#sl1").show();
        var url = "http://218.255.16.240:3000/getRawTrafficSpeed";
        axios.post(url, {
            yyyy: '' + year,
            mm: month,
            dd: ''+date,
            link_ID: '3006-30069'
        })
            .then(function (response) {
               
                console.log(response);
                var res = response.data;
                console.log(res);
                
               
                for (i; i < res.length; i++) {
                    
                    console.log(res[i]['TRAFFIC_SPEED']['_text']);
                    console.log(res[i]['CAPTURE_DATE']['_text']);
                    
                    data[i] = res[i]['TRAFFIC_SPEED']['_text'];
                    newdate[i] = res[i]['CAPTURE_DATE']['_text'];
                    haha.push({
                        time: newdate[i],
                        佐敦道: data[i]
                    });             
                        
                    
                }
                $("#slow").text("佐敦道");
                $("#sl1").hide();
                var slowtrafficwarning = Morris.Line({
                    element: 'slowtrafficwarning',
                    data: getdata(),
                    xkey: 'time',
                    ykeys: ['佐敦道'],
                    labels: ['佐敦道'],
                    pointSize: 1,
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
            $('#slowtrafficwarning').html("");
            start();
        }
        , 120*1000)
   


})