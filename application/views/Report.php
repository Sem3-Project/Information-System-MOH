
<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
<title>Report Selection</title>
<link rel = "stylesheet" href ="../../public/css/Report.css">

<!-- <style>
    .content{
        background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    }


</style> -->

</head>

<header>
<div class="header"><img class="logo" src="../../public/images/logo.jpg"/>
<div class="logo">
		<h1>Medical Officer of Health Office</h1>
		<h3>Gampaha</h3>
	</div>
    <div class="topnav">
  
  <a href="login_page.php">Log out</a>
  <a href="user_home.php">Home</a>
  
  
</div>
	</div>
</header>
<body>
<div class="content">
<button onclick="myFunction('987211362v')" style="background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;transform:translate(600px,200px);
    font-size: 16px;">Report Selecting</button></div>


<script>
function myFunction($id){
if($id.length==10) {

document.write("<a href='../models/Client_pdf.php'>Mother's Report</a>")
}
else{
    document.write("<p id='jstext'>"+"<a href='user_home.php'>Child's Report</a>"+"</p>")
}}
</script>
</body>
</html>

