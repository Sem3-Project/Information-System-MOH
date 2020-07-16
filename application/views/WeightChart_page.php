<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My two lines with colour between them</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../public/css/table.css">
        <script type="text/javascript" src="../../public/js/jquery.js"></script>
        <script type="text/javascript" src="../../public/js/Chart.min.js"></script>
        <script type="text/javascript" src="../../public/js/weightGraph.js"></script>
        <script type="text/javascript"> 
                function doCalc(form) { 
                    form.text22.value = parseInt(form.text2.value) - parseInt(form.text1.value); 
                    form.text33.value = parseInt(form.text3.value) - parseInt(form.text2.value);
                    form.text44.value = parseInt(form.text4.value) - parseInt(form.text3.value); 
                    form.text55.value = parseInt(form.text5.value) - parseInt(form.text4.value);
                    form.text66.value = parseInt(form.text6.value) - parseInt(form.text5.value); 
                    form.text77.value = parseInt(form.text7.value) - parseInt(form.text6.value);
                    form.text88.value = parseInt(form.text8.value) - parseInt(form.text7.value); 
                    form.text99.value = parseInt(form.text9.value) - parseInt(form.text8.value); 
            } 
        </script> 
   </head>
   <form>
    <body>
    <table style="width:80%">
                <tr>
                    <th>POA</th>
                    <td><input type="text" name="one" value=0></td>
                    <td><input type="text" name="two" value=0></td>
                    <td><input type="text" name="thr" value=0></td>
                    <td><input type="text" name="four" value=0></td>
                    <td><input type="text" name="fve" value=0></td>
                    <td><input type="text" name="six" value=0></td>
                    <td><input type="text" name="sev" value=0></td>
                    <td><input type="text" name="eig" value=0></td>
                    <td><input type="text" name="nine" value=0></td>
                   
                   
                </tr>
                <tr>
                    <th>Weight</th>
                    <td><input type="text" name="text1" value="0" onBlur="doCalc(this.form)"></td>
                    <td><input type="text" name="text2" value="0" onBlur="doCalc(this.form)"></td>
                    <td><input type="text" name="text3" value="0" onBlur="doCalc(this.form)"></td>
                    <td><input type="text" name="text4" value="0" onBlur="doCalc(this.form)"></td>
                    <td><input type="text" name="text5" value="0" onBlur="doCalc(this.form)"></td>
                    <td><input type="text" name="text6" value="0" onBlur="doCalc(this.form)"></td>
                    <td><input type="text" name="text7" value="0" onBlur="doCalc(this.form)"></td>
                    <td><input type="text" name="text8" value="0" onBlur="doCalc(this.form)"></td>
                    <td><input type="text" name="text9" value="0" onBlur="doCalc(this.form)"></td>
                </tr>
                <tr>
                    <th>Weight Gain</th>
                    <td style="background-color: black;"></td>
                    <td><input type="text" name="text22" disabled></td>
                    <td><input type="text" name="text33" disabled></td>
                    <td><input type="text" name="text44" disabled></td>
                    <td><input type="text" name="text55" disabled></td>
                    <td><input type="text" name="text66" disabled></td>
                    <td><input type="text" name="text77" disabled></td>
                    <td><input type="text" name="text88" disabled></td>
                    <td><input type="text" name="text99" disabled></td>
                </tr>
                
            </table><br><br>
</form>
        <!--canvas id="mychart"  style="height: 300px; width: 100%;"></canvas-->
        <!--div width="400" height="1200"></div-->
        <canvas id="mychart" width="250" height="300"></canvas>
    
        <script>

            var ctx = document.getElementById('mychart').getContext('2d'); //get the context (canvas)

            var config = { 
                             //configure the chart
                             
                type: 'line',
                data: {
                    labels: [0,17,41],
                    datasets:[
                    
                    {
                        //labels: [1,12,31],
                        label: "E",
                        backgroundColor: 'rgba(255,0,0,0.7)',
                        borderColor: 'rgba(55, 173, 221, 0.0)',
                        fill: false,  //no fill here
                        data: [0,0.75,7],
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


               /*data: {
                    labels: [0,12,15],
                    datasets: [
                    {
                        label: "Q",
                        //backgroundColor: 'rgba(255,255,255,0.7)',
                        borderColor: 'rgba(0, 0, 0, 1)',
                        fill: false,  //no fill here
                        data: [0,0.75,7 ],
                        pointRadius: 0    
                    }
                   
                ]
                },*/


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
                            ticks:[6,12,18,24,30,36,42],
                           ticks: {
                                    display:true,
                                    min: 0,
                                    max: 42,
                                    stepSize: 1,
                                    unitStepSize: 5,
                                    maxTicksLimit: 40,
                                   
                                    fontSize: 12,
                                    //padding: 15,
                                //autoSkip: true,
                            } 
                            
                        }],
                        yAxes:[{
                            ticks: {
                                    min: 0,
                                    max: 18,
                                    stepSize: 1,
                                    beginAtZero: true,
                                    fontSize: 12,
                                    padding: 15,
                                    //callback: function(value, index, values) {
                                    //return '$' + value;
                                    //}
                                },
                        }]
                    }
                }
            };
            
            var chart = new Chart(ctx, config);
           // <script type="text/javascript" src="js/jquery.js"/>
           // <script type="text/javascript" src="js/Chart.min.js"/>
           // <script type="text/javascript" src="js/weightGraph.js"/>
        </script>
    </body>
</html>



