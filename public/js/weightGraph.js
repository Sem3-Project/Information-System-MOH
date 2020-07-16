$(document).ready(function(){
  $.ajax({
    url : "http://localhost:8080/charts/weightChart.php",
    type : "GET",
    success : function(data){
      console.log(data);
      var week = [];
      var weightgain = [];

      for (var i  in data){
        week.push("week " + data[i].week);
        weightgain.push(data[i].gain);

      }
        var chartdata = {
          labels: week,
          datasets:[

        {
        label: "weight gain",
        fill: false,
        lineTension: 0.1,
        backgroundColor: "rgba(211, 72, 54, 0.75)",
        borderColor: "rgba(211, 72, 54, 1)",
        pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
        pointHoverBorderColor: "rgba(211, 72, 54, 1)",
        data: weightgain
        }
      ]
    };
    
        var ctx = $("#mycanvas");
        var LineGraph = new Chart(ctx,{
          type: 'line',
          data: chartdata
        });
    },
    error : function(data){

    }
  });
});


/*var ctx1 = document.getElementById('mychart').getContext('2d'); //get the context (canvas)

var config = {              //configure the chart
    type: 'line',
    data: {
        labels: [0,17,41],
        datasets: [
        {
            label: "E",
            backgroundColor: 'rgba(255,0,0,0.7)',
            borderColor: 'rgba(55, 173, 221, 0.0)',
            fill: false,  //no fill here
            data: [0,0.75,7 ],
            pointRadius: 0    
        },
        {
            label: "D",
            backgroundColor: 'rgba(38, 166, 91, 0.5)',
            borderColor: 'rgba(55, 173, 221, 0.0)',
            fill: '-1',  //no fill here
            data: [0,1.6,11.5 ],
            pointRadius: 0
        },
        {
            label: "C",
            backgroundColor: 'rgba(255, 203, 5, 0.6)',
            borderColor: 'rgba(55, 173, 221, 0.0)',
            fill: '-1',  //no fill here
            data: [0,2.25,12.5 ],
            pointRadius: 0
        },
        {
            label: "B",
            backgroundColor: 'rgba(249, 105, 14, 0.6)',
            borderColor: 'rgba(55, 173, 221, 0.0)',
            fill: '-1',  //no fill here
            data: [0,3.25,16],
            pointRadius: 0
        },
        {
            label: "A",
            backgroundColor: 'rgba(255,0,0,0.4)',
            borderColor: 'rgba(55, 173, 221, 0.0)',
            fill: '-1', //fill until previous dataset
            data: [0, 3.75,18],
            pointRadius: 0
        }
    ]
    },
    options: {
        maintainAspectRatio: false,
        spanGaps: false,
        elements: {
            line: {
                tension: 0.000001
            }
        },
        plugins: {
            filler: {
                propagate: false
            }
        },
        scales: {
            xAxes: [{
                ticks: {
                    autoSkip: false
                }
            }]
        }
    }
};

var chart = new Chart(ctx1, config);
*/