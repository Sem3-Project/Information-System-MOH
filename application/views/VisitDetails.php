<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel = "stylesheet" href ="../../public/css/DailyClinic.css">
    <script src="../../public/js/jquery.min.js"></script>
    <script src="../../public/js/bootstrap.min.css"></script>

  <style>
    .button1{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    transform:translate(500px,0px);
    }


</style>
    <title>Clinic Days</title>
</head>


<header>
<div class="header"><img class="logo" src="../../public/images/logo.jpg"/>
<div class="logo">
		<h1>Medical Officer of Health Office</h1>
		<h3>Gampaha</h3>
	</div>
    <div class="topnav">
  <a href="login_test.php">Log out</a>
  <a href="newHome.php">Home</a>
  
</div>
	</div>
</header>

<body>

<div class="container">
<h2>Clinic Days</h2><br><br>

<table class="table table-striped table-bordered table-hover table-condensed" id="Clinic" style="font-size:20px;">
        <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        </thead>

        <tbody>

        <?php
            $conn=mysqli_connect("localhost","root","","moh");
            if($conn->connect_error){
                die("connection failed:".$conn->connect_error);
            }

            $sql="SELECT `id`, `confirmedDate`, `time`FROM `optionaldate`";
            $result=$conn->query($sql);

            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo("<tr><td>".$row["id"]."</td><td>".$row["confirmedDate"]."</td><td>".$row["time"]."</td></tr>");
                }
                echo("</table>");
            }
            else{
                echo "0 result";
            }
        
        ?>
    </tbody>
    </table>
    <br><br>
    <button class="button1">Sort By Date</button>
    </div>
   
    <script>
    function convertDate(d) {
    var p = d.split("-");
    return +(p[0]+p[1]+p[2]);
    }

        function sortByDate() {
        var tbody = document.querySelector("#Clinic tbody");
        // get trs as array for ease of use
        var rows = [].slice.call(tbody.querySelectorAll("tr"));
        
        rows.sort(function(a,b) {
            return convertDate(a.cells[1].innerHTML) - convertDate(b.cells[1].innerHTML);
        });
        
        rows.forEach(function(v) {
            tbody.appendChild(v); // note that .appendChild() *moves* elements
        });
        }

        document.querySelector("button").addEventListener("click", sortByDate);
    
    </script>
    
</body>
</html>
