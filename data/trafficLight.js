$(document).ready(function () {

    getrecord();
    function getrecord() {
        $("#capture_date").text("");
        $("#current_speed").text("");
        $("#greenLightTime").text("");
        $("#redLightTime").text("");
        $("#loading1").show();
        $("#loading2").show();
        $("#loading3").show();
        $("#loading4").show();
        console.log("Running");
        var url = "http://218.255.16.240:3000/getTrafficLightTime";
        axios.post(url, {
            lampostID: 'AA1111',
            password: '0000'

        })
            .then(function (response) {
                var data = response.data;
                $("#loading1").hide();
                $("#loading2").hide();
                $("#loading3").hide();
                $("#loading4").hide();
                console.log(data);
                console.log(data['capture_date']);
                console.log(data['current_speed']);
                console.log(data['tfJSON']['greenLightTime']);
                console.log(data['tfJSON']['redLightTime']);
                $("#capture_date").text(data['capture_date']);
                $("#current_speed").text(data['current_speed']);
                $("#greenLightTime").text(data['tfJSON']['greenLightTime']);
                $("#redLightTime").text(data['tfJSON']['redLightTime']);
            })
            .catch(function (error) {
                console.log(error);
            });
    } setInterval(

        function () {



            getrecord();

        }
        , 30 * 1000)



})