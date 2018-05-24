$(function () {

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2010 Q1',
            iphone: 2666,
            ipad: null,
            itouch: 2647
        }, {
            period: '2010 Q2',
            iphone: 2778,
            ipad: 2294,
            itouch: 2441
        }, {
            period: '2010 Q3',
            iphone: 4912,
            ipad: 1969,
            itouch: 2501
        }, {
            period: '2010 Q4',
            iphone: 3767,
            ipad: 3597,
            itouch: 5689
        }, {
            period: '2011 Q1',
            iphone: 6810,
            ipad: 1914,
            itouch: 2293
        }, {
            period: '2011 Q2',
            iphone: 5670,
            ipad: 4293,
            itouch: 1881
        }, {
            period: '2011 Q3',
            iphone: 4820,
            ipad: 3795,
            itouch: 1588
        }, {
            period: '2011 Q4',
            iphone: 15073,
            ipad: 5967,
            itouch: 5175
        }, {
            period: '2012 Q1',
            iphone: 10687,
            ipad: 4460,
            itouch: 2028
        }, {
            period: '2012 Q2',
            iphone: 8432,
            ipad: 5713,
            itouch: 1791
        }],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Download Sales",
            value: 12
        }, {
            label: "In-Store Sales",
            value: 30
        }, {
            label: "Mail-Order Sales",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });

});
$(function () {
    Morris.Bar({
        element: 'bar',
        data: [{
            y: '2006',
            a: 100,
            b: 90
        }, {
            y: '2007',
            a: 75,
            b: 65
        }, {
            y: '2008',
            a: 50,
            b: 40
        }, {
            y: '2009',
            a: 75,
            b: 65
        }, {
            y: '2010',
            a: 50,
            b: 40
        }, {
            y: '2011',
            a: 75,
            b: 65
        }, {
            y: '2012',
            a: 100,
            b: 90
        }],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        hideHover: 'auto',
        resize: true
    });
});


$(function () {
    Morris.Line({
        element: 'cwd',
        data: [{
            time: '2018-01-12 00:00',

            CentralWestern: null

        }, {
            time: '2018-01-12 01:00',

            CentralWestern: '46'

        }, {
            time: '2018-01-12 02:00',

            CentralWestern: '50'

        }, {
            time: '2018-01-12 03:00',

            CentralWestern: '57'

        }, {
            time: '2018-01-12 04:00',

            CentralWestern: '53'

        }, {
            time: '2018-01-12 05:00',

            CentralWestern: '50'

        }, {
            time: '2018-01-12 06:00',

            CentralWestern: '43'

        }, {
            time: '2018-01-12 07:00',

            CentralWestern: '45'

        }, {
            time: '2018-01-12 08:00',

            CentralWestern: '10'

        }, {
            time: '2018-01-12 09:00',

            CentralWestern: '17'

        }, {
            time: '2018-01-12 10:00',

            CentralWestern: '23'

        }, {
            time: '2018-01-12 11:00',

            CentralWestern: '14'

        }, {
            time: '2018-01-12 12:00',

            CentralWestern: '22'

        }, {
            time: '2018-01-12 13:00',

            CentralWestern: '20'

        }, {
            time: '2018-01-12 14:00',

            CentralWestern: '25'

        }, {
            time: '2018-01-12 15:00',
            CentralWestern: '17'

        }, {
            time: '2018-01-12 16:00',

            CentralWestern: 13

        }, {
            time: '2018-01-12 17:00',

            CentralWestern: null

        }, {
            time: '2018-01-12 18:00',

            CentralWestern: null

        }, {
            time: '2018-01-12 19:00',

            CentralWestern: null

        }, {
            time: '2018-01-12 20:00',

            CentralWestern: null

        }, {
            time: '2018-01-12 21:00',

            CentralWestern: null

        }, {
            time: '2018-01-12 22:00',

            CentralWestern: null

        }, {
            time: '2018-01-12 23:00',

            CentralWestern: null

        }, {
            time: '2018-01-12 24:00',

            CentralWestern: null

        }],
        xkey: 'time',
        ykeys: ['CentralWestern'],
        labels: ['CentralWestern'],
        pointSize: 4,
        hideHover: 'auto',
        resize: true,
        smooth: false

    });

});

$(function () {
    Morris.Area({
        element: 'traffic-accident',
        data: [{
            period: '2017-01',
            Accident: 2,
        }, {
            period: '2017-02',
            Accident: 1,
        }, {
            period: '2017-03',
            Accident: 0,
        }, {
            period: '2017-04',
            Accident: 1,
        }, {
            period: '2017-05',
            Accident: 1,
        }, {
            period: '2017-06',
            Accident: 0,
        }, {
            period: '2017-07',
            Accident: 2,
        }, {
            period: '2017-08',
            Accident: 0,
        }, {
            period: '2017-09',
            Accident: 1,
        }, {
            period: '2017-10',
            Accident: 0,
        }, {
            period: '2017-11',
            Accident: 2,
        }, {
            period: '2017-12',
            Accident: 1,
        }],
        xkey: 'period',
        ykeys: ['Accident'],
        labels: ['Accident'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });
});

$(function () {
    Morris.Area({
        element: 'traffic-jam',
        data: [{
            period: '2017-01',
            Accident: 2,
        }, {
            period: '2017-02',
            Accident: 1,
        }, {
            period: '2017-03',
            Accident: 0,
        }, {
            period: '2017-04',
            Accident: 1,
        }, {
            period: '2017-05',
            Accident: 1,
        }, {
            period: '2017-06',
            Accident: 0,
        }, {
            period: '2017-07',
            Accident: 2,
        }, {
            period: '2017-08',
            Accident: 0,
        }, {
            period: '2017-09',
            Accident: 1,
        }, {
            period: '2017-10',
            Accident: 0,
        }, {
            period: '2017-11',
            Accident: 2,
        }, {
            period: '2017-12',
            Accident: 1,
        }],
        xkey: 'period',
        ykeys: ['Accident'],
        labels: ['Accident'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true,
        lineColors: ["Green"]
    });
});



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
$(function(){
    Morris.Line({
        element: 'hkisland',
        data: [{
            time: '2018-01-12 00:00',
            Eastern:null,
            Wanchi:null,
            CentralWestern:null,
            Southern:null
        }, {
            time: '2018-01-12 01:00',
            Eastern:'50',
            Wanchi:'46',
            CentralWestern:'46',
            Southern:'43'
        }, {
            time: '2018-01-12 02:00',
            Eastern:'50',
            Wanchi:'50',
            CentralWestern:'50',
            Southern:'50'
        }, {
            time: '2018-01-12 03:00',
            Eastern:'43',
            Wanchi:'50',
            CentralWestern:'57',
            Southern:'49'
        }, {
            time: '2018-01-12 04:00',
            Eastern:'52',
            Wanchi:'58',
            CentralWestern:'53',
            Southern:'53'
        }, {
            time: '2018-01-12 05:00',
            Eastern:'53',
            Wanchi:'56',
            CentralWestern:'50',
            Southern:'52'
        }, {
            time: '2018-01-12 06:00',
            Eastern:'50',
            Wanchi:'53',
            CentralWestern:'43',
            Southern:'50'
        }, {
            time: '2018-01-12 07:00',
            Eastern:'40',
            Wanchi:'43',
            CentralWestern:'45',
            Southern:'40'
        }, {
            time: '2018-01-12 08:00',
            Eastern:'21',
            Wanchi:'23',
            CentralWestern:'10',
            Southern:'20'
        }, {
            time: '2018-01-12 09:00',
            Eastern:'22',
            Wanchi:'17',
            CentralWestern:'17',
            Southern:'37'
        },{
            time: '2018-01-12 10:00',
            Eastern:'17',
            Wanchi:'20',
            CentralWestern:'23',
            Southern:'29'
        },{
            time: '2018-01-12 11:00',
            Eastern:'18',
            Wanchi:'23',
            CentralWestern:'14',
            Southern:'20'
        },{
            time: '2018-01-12 12:00',
            Eastern:'20',
            Wanchi:'21',
            CentralWestern:'22',
            Southern:'20'
        },{
            time: '2018-01-12 13:00',
            Eastern:'12',
            Wanchi:'17',
            CentralWestern:'20',
            Southern:'30'
        },{
            time: '2018-01-12 14:00',
            Eastern:'29',
            Wanchi:'17',
            CentralWestern:'25',
            Southern:'35'
        },{
            time: '2018-01-12 15:00',
            Eastern:'31',
            Wanchi:'16',
            CentralWestern:'17',
            Southern:'34'
        },{
            time: '2018-01-12 16:00',
            Eastern:null,
            Wanchi:null,
            CentralWestern:null,
            Southern:null
        },{
            time: '2018-01-12 17:00',
            Eastern:null,
            Wanchi:null,
            CentralWestern:null,
            Southern:null
        },{
            time: '2018-01-12 18:00',
            Eastern:null,
            Wanchi:null,
            CentralWestern:null,
            Southern:null
        },{
            time: '2018-01-12 19:00',
            Eastern:null,
            Wanchi:null,
            CentralWestern:null,
            Southern:null
        },{
            time: '2018-01-12 20:00',
            Eastern:null,
            Wanchi:null,
            CentralWestern:null,
            Southern:null
        },{
            time: '2018-01-12 21:00',
            Eastern:null,
            Wanchi:null,
            CentralWestern:null,
            Southern:null
        },{
            time: '2018-01-12 22:00',
            Eastern:null,
            Wanchi:null,
            CentralWestern:null,
            Southern:null
        },{
            time: '2018-01-12 23:00',
            Eastern:null,
            Wanchi:null,
            CentralWestern:null,
            Southern:null
        },{
            time: '2018-01-12 24:00',
            Eastern:null,
            Wanchi:null,
            CentralWestern:null,
            Southern:null
        }],
        xkey: 'time',
        ykeys: ['Eastern','Wanchi','CentralWestern','Southern'],
        labels: ['Eastern','Wanchi','CentralWestern','Southern'],
        pointSize: 4,
        hideHover: 'auto',
        resize: true,
        smooth:false
       
    });
    
});