

// Dashboard 1 Morris-chart
Morris.Area({
        element: 'morris-area-chart2',
        data: [{
            period: '2010',
            Tacna: 0,
            Central: 0,
            
        }, {
            period: '2011',
            Tacna: 130,
            Central: 100,
            
        }, {
            period: '2012',
            Tacna: 30,
            Central: 60,
            
        }, {
            period: '2013',
            Tacna: 30,
            Central: 200,
            
        }, {
            period: '2014',
            Tacna: 200,
            Central: 150,
            
        }, {
            period: '2015',
            Tacna: 105,
            Central: 90,
            
        },
         {
            period: '2016',
            Tacna: 250,
            Central: 150,
           
        }],
        xkey: 'period',
        ykeys: ['Tacna', 'Central'],
        labels: ['Tacna', 'Central'],
        pointSize: 0,
        fillOpacity: 0.4,
        pointStrokeColors:['#b4becb', '#00c292'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#b4becb', '#00c292'],
        resize: true
        
    });
Morris.Bar({
        element: 'morris-area-chart1',
        data: [{
            period: 'Junio',
            Tacna: 40,
            Central: 50,
            
        }, {
            period: '2011',
            Tacna: 130,
            Central: 100,
            
        }, {
            period: 'Julio',
            Tacna: 30,
            Central: 60,
            
        }, {
            period: '2013',
            Tacna: 30,
            Central: 200,
            
        }, {
            period: 'Agosto',
            Tacna: 200,
            Central: 150,
            
        }, {
            period: '2015',
            Tacna: 105,
            Central: 90,
            
        },
         {
            period: 'Septiembre',
            Tacna: 250,
            Central: 150,
           
        }],
        xkey: 'period',
        ykeys: ['Tacna', 'Central'],
        labels: ['Tacna', 'Central'],
        pointSize: 0,
       
        pointStrokeColors:['#469fb4', '#01c0c8'],
        barColors:['#469fb4', '#01c0c8'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#469fb4', '#01c0c8'],
        resize: true
        
    });




     



 



$("#sparkline8").sparkline($data, {
            type: 'line',
            width: '100%',
            height: '130',
            lineColor: '#00c292',
            fillColor: 'rgba(0, 194, 146, 0.2)',
            maxSpotColor: '#00c292',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#00c292'
        });
        $("#sparkline9").sparkline([2,4,8,6,8,5,6,4,8,6,6,2 ], {
            type: 'line',
            width: '100%',
            height: '130',
            lineColor: '#03a9f3',
            fillColor: 'rgba(3, 169, 243, 0.2)',
            minSpotColor:'#03a9f3',
            maxSpotColor: '#03a9f3',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#03a9f3'
        });
        $("#sparkline10").sparkline([2,4,4,6,8,5,6,4,8,6,6,2], {
            type: 'line',
            width: '100%',
            height: '130',
            lineColor: '#b10f1c',
            fillColor: 'rgba(251, 150, 120, 0.2)',
            maxSpotColor: '#b10f1c',
            highlightLineColor: 'rgba(0, 0, 0, 0.2)',
            highlightSpotColor: '#b10f1c'
        });
