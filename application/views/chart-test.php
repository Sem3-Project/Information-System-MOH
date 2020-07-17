<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My two lines with colour between them</title>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script> -->
        <script src='https://cdn.plot.ly/plotly-latest.min.js'></script>
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
                    <td><input type="text" name="one" value=7></td>
                    <td><input type="text" name="two" value=13></td>
                    <td><input type="text" name="thr" value=19></td>
                    <td><input type="text" name="four" value=23></td>
                    <td><input type="text" name="fve" value=27></td>
                    <td><input type="text" name="six" value=33></td>
                    <td><input type="text" name="sev" value=36></td>
                    <td><input type="text" name="eig" value=38></td>
                    <td><input type="text" name="nine" value=40></td>
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
                    <td style="background-color: black;" value=0></td>
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
<div id='myDiv'><!-- Plotly chart will be drawn inside this DIV --></div>
    
    </body>
    <script>
  var trace1 = {
  x: [1, 2, 3, 4],
  y: [10, 15, 13, 17],
  mode: 'markers',
  name: 'Scatter'
};

var trace2 = {
  x: [7, 13, 19, 23, 27, 33, 36, 38, 40],
  y: [-2, 5, 11, 9],
  mode: 'lines',
  name: 'Lines'
};

var trace3 = {
  x: [1, 2, 3, 4],
  y: [12, 9, 15, 12],
  mode: 'lines+markers',
  name: 'Scatter and Lines'
};

var data = [trace2];

//var data = [trace1, trace2, trace3];
var layout = {
  title: 'Title of the Graph',
  xaxis: {
    title: 'x-axis title'
  },
  yaxis: {
    title: 'y-axis title'
  }
};

Plotly.newPlot('myDiv', data, layout);

    </script>
</html>



