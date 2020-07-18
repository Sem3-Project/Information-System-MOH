<?php
require_once "context.php";
require_once "IdleState.php";
require_once "PDFState.php";

//-------------------------this is the running part-------------------------------
$host="localhost";
$user = "root";
$password = "";
$database = "moh";

$id="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connect = mysqli_connect($host, $user, $password, $database);
    
}catch(Exception $ex){
    echo("<p style='color:black; font-size: 30px; background-color:white;'>"."Error in connecting"."</p>");
    // echo 'Error in connecting';
}

function getData(){
    $data=array();
    $data[0]=$_POST['id'];
    
    
    return $data;
}
//Generate
if(isset($_POST["Generate"])){
    $info=getData();
    //$newid=$info[0];
    $context_1 = new Context();
    $context_1->transitionTo(new PDFState);//----------------using this part state will be change from idlestate to pdfstate-------------------------
    $context_1->request1($info[0]);

}
//search
// if(isset($_POST['Search'])){
//     $info=getData();
//     $search_query="SELECT * FROM `data` WHERE id='$info[0]'";
//     $search_result=mysqli_query($connect,$search_query);
//         if($search_result){
//             if($search_result){
//                 if(mysqli_num_rows($search_result)){
//                     while($row = mysqli_fetch_array($search_result)){
        
//                         $id=$row['id'];
//                         echo("File is ready");}
//                 }else{
//                     echo("no data are available");
//                 }
//         }else{
//             echo("result error");
//         }
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BasicDetails_PDF</title>

    <link rel = "stylesheet" href ="../../public/css/BPDF.css">
<style>
    .content{
        width: 10cm;
        /* background-color:yellow; */
        padding: 6px 52px;
        /* size="25"; */
        font-size: 20px;
        text-align:center;
    }


</style>

</head>

<header>
<div class="header"><img class="logo" src="../../public/images/logo.jpg"/>
<div class="logo">
		<h1>Medical Officer of Health Office</h1>
		<h3>Gampaha</h3>
	</div>
    <div class="topnav">
  
  <a href="login_page.php">Log out</a>
  <a href="home.php">Home</a>
  
  
</div>
	</div>
</header>

<body>
<div class="content">
<form method="POST" action="Client.php">
<input type="text" name="id" style="width: 800px; height: 50px ;font-size: 20px; " placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's id here" value="<?php echo($id);?>"><br><br>

<!-- <input type="submit" name="Search" value="Search"> -->
<input type="submit" name="Generate" value="Generate the Report">
<!-- <input type="submit" name="Generate" value="Generate"> -->

</div>
</form>
    
</body>
</html>