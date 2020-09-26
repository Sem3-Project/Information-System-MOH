<?php


require_once "Selection.php";
require '../controllers/login.php';

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
    $Selection_1=new Selection();
    $Selection_1->myFunction($info[0]);
    // $context_1 = new Context();
    // $context_1->transitionTo(new PDFState);//----------------using this part state will be change from idlestate to pdfstate-------------------------
    // $context_1->request1($info[0]);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF_Selecting</title>

    <link rel = "stylesheet" href ="../../public/css/PDF.css">
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
<head>
        <body>
            <div class="hero-image">
                <img src="../../public/images/logo.png" class="logo-image"/>
                <img src="../../public/images/line.jpg" class="line-image"/>
                <a href="../controllers/logout.php"><img src="../../public/images/logout.png" class="logout-image"></a>
                <a href="../views/user.php"><img src="../../public/images/home.png" class="home-image"></a>
                <div class="hero-text">
                    <h1 style="font-size:25px">Office of the Medical Officer of Health</h1>
                    <h3 style="font-size:25px">Gampaha</h3>
                </div>
            </div>
</body>
</head>


<body>
<form method="POST" action="PDF_Selecting.php">

<div>
        <div class="caption-container1">
        <div class="caption-container">
            <h3 >Search NIC :</h3>
        </div>
            <center><input type="text" text-align="center" readonly placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න / Enter patient's id here" 
            style="text-align:center; width: 50%; height: 50px; padding:10px; font-size:15px; " name="id" value="<?php echo($_SESSION['id'])?>"><br><br>


<input type="submit" class="link" name="Generate" style="margin-bottom: 110px;" value="Select Report"></center>

</div></div>
</form>
    
</body>
</html>
