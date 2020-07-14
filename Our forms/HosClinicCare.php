
<?php
$host = "localhost:3307"; 
$user = "root";
$password ="123456";
$database="moh";

$patient_id = "";
$date1="";
$poa="";
$weight1="";
$sugar="";
$albumin="";
$oedema="";
$systolic="";
$diastolic="";
$fundalheight="";
$fundalheight2="";
$lie="";
$presentation="";
$fm="";
$fhs="";
$designation="";
$donext="";


//connect to mysql database
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try{
    $connect = mysqli_connect($host, $user, $password, $database);
    
    
}catch(Exception $ex){
    echo 'Error in connecting';
}

//get data from the form
function getData(){
    $data=array();
    $data[0]=(isset($_POST['patient_id']) ? $_POST['patient_id'] : '');
    $data[1]=(isset($_POST['date1']) ? $_POST['date1'] : '');
    $data[2]=(isset($_POST['poa']) ? $_POST['poa'] : '');  
    $data[3]=(isset($_POST['weight1']) ? $_POST['weight1'] : '');
    $data[4]=(isset($_POST['sugar']) ? $_POST['sugar'] : '');
    $data[5]=(isset($_POST['albumin']) ? $_POST['albumin'] : '');
    $data[6]=(isset($_POST['oedema']) ? $_POST['oedema'] : '');
    $data[7]=(isset($_POST['systolic']) ? $_POST['systolic'] : '');
    $data[8]=(isset($_POST['diastolic']) ? $_POST['diastolic'] : '');
    $data[9]=(isset($_POST['fundalheight']) ? $_POST['fundalheight'] : '');
    $data[10]=(isset($_POST['fundalheight1']) ? $_POST['fundalheight1'] : '');
    $data[11]=(isset($_POST['lie']) ? $_POST['lie'] : '');
    $data[12]=(isset($_POST['presentation']) ? $_POST['presentation'] : '');
    $data[13]=(isset($_POST['fm']) ? $_POST['fm'] : '');
    $data[14]=(isset($_POST['fhs']) ? $_POST['fhs'] : '');
    $data[15]=(isset($_POST['designation']) ? $_POST['designation'] : '');
    $data[16]=(isset($_POST['donext']) ? $_POST['donext'] : '');
    

    return $data;
}

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM `hoscliniccare` WHERE patient_id='$info[0]'";
    $search_result=mysqli_query($connect,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
                        $patient_id=$row['patient_id'];
                        $date1=$row['date1'];
                        $poa=$row['poa'];   
                        $weight1=$row['weight1'];
                        $sugar=$row['sugar'];
                        $albumin=$row['albumin'];
                        $oedema=$row['oedema'];
                        $systolic=$row['systolic'];
                        $diastolic=$row['diastolic'];
                        $fundalheight=$row['fundalheight'];
                        $fundalheight1=$row['fundalheight1'];
                        $lie=$row['lie'];
                        $presentation=$row['presentation'];
                        $fm=$row['fm'];
                        $fhs=$row['fhs'];
                        $designation=$row['designation'];
                        $donext=$row['donext'];
                       
                        
                    }
                }else{
                    echo("no data are available");
                }
        }else{
            echo("result error");
        }
    }
}
//insert
if(isset($_POST['Insert'])){
    $info=getData();
    $insert_query="INSERT INTO hoscliniccare (patient_id,date1,poa,weight1,	sugar,albumin,oedema,systolic,diastolic,fundalheight,fundalheight1,lie,presentation,fm,fhs,designation,donext) 
    VALUES  
    ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[11]','$info[12]'
    '$info[13]','$info[14]','$info[15]','$info[16]'   )";

try{
    $insert_result=mysqli_query($connect,$insert_query);
    if($insert_result){
        if(mysqli_affected_rows($connect)>0){
            echo("data inserted successfully");

        }else{
            echo("data are not inserted");
        }
    }
}catch(Exception $ex){
    echo("error inserted".$ex->getMessage());
}
}

//update
if(isset($_POST['Update'])){
    $info=getData();
    $update_query="UPDATE hoscliniccare SET patient_id='$info[0]',date1='$info[1]',poa= '$info[2]',weight1='$info[3]',sugar='$info[4]',albumin='$info[5]',oedema='$info[6]',systolic='$info[7]',diastolic='$info[8]',fundalheight='$info[9]',fundalheight1='$info[10]',lie='$info[11]',presentation='$info[12]',fm='$info[13]',fhs='$info[14]',designation='$info[15]'
    ,donext='$info[16]'  WHERE patient_id='$info[0]'";

try{
    $pdate_result=mysqli_query($connect,$update_query);
    if($pdate_result){
        if(mysqli_affected_rows($connect)>0){
            echo("data updated");
        }else{
            echo("data not updated");
        }
    }
}catch(Exception $ex){
    echo("error in update".$ex->getMessage());
}
}





?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<style type="text/css">

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 40%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>  

<h4>රෝහල් සායනික සංරක්‍ෂණය​</h4>
    <h2>Hospital Clinic Care</h2>
    <link rel="stylesheet" href="table.css">  
    
</head>
<body>

<form method="POST" action="page5.php">
<input type="text" name="patient_id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($patient_id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>

	
<table width="100%" border="0">

       <tr>
       <td width="35.5%">Date</td>
       <td width="50%"><input type="date" name="dt"></td>
       
        </tr>
        <tr>
        <td>POA</td>
        <td><input type="text" name="poa"></td>
        
        </tr>
        <tr>
        <td >Weight</td>
        <td ><input type="text" name="wt"></td>
       
        </tr>
  </table>
  <table width="100%" border="0">
        <tr>
        <td width="35.5%" >Urine</td>
        <td width="25%"> Sugar:
        <select name="sugar">
            <option value="Green">Green</option>
            <option value="Yellow">Yellow</option>
            <option value="Orange">Orange</option>
            <option value="Brick red">Brick red</option>
            <option value="NIL">NIL</option>
        </td>
        <td width="25%">Albumin:
        <select name="albumin">
       <option value="NIL">NIL</option>
       <option value="+">+</option>
       <option value="++">++</option>
       <option value="+++">+++</option>
      </td>
      </tr>
    </table>

    <table width="100%" border="0">
        <tr>
        <td width="35.5%">Oedema</td>
        <td width="50%">
        <select name="oedema">
            <option value="+">+</option>
            <option value="0">0</option>
        </td>
        </tr>
    </table>

    <table width="100%" border="0">
        <tr>
        <td width="66%" >BP</td>
        <td width="18%">Systolic:<input type="text" name="Systolic"></td>
        <td width="18%">Diastolic:<input type="text" name="Diastolic"></td>
        
      </tr>
    </table>
    <table width="100%" border="0">
    <tr>
        <td width="40%" >Fundal Height</td>
        
        <td width="26%"><input type="text" name="fundalHeight"></td>
        </td>
        <td width="26%">
        <select name="fundalHeight1">
       <option value="NP">NP</option>
       <option value="JP">JP</option>
       
      </td>
      </tr>
    </table>

    <table width="100%" border="0">
        <tr>
        <td width="35.5%">Lie</td>
        <td width="50%">
        <select name="lie">
       <option value="LL">LL</option>
       <option value="TL">TL</option>
       <option value="OL">OL</option>
       <option value="Other">Other</option>
        </td>
        
        </tr>
        </table>
        <table width="100%" border="0">
        <tr>
        <td width="35.5%">Presentation</td>
        <td width="50%">
        <select name="presentation">
       <option value="Cephalic">Cephalic</option>
       <option value="Breech">Breech</option>
       <option value="Other">Other</option>
       </td>
       </tr>
        </table>

        <table width="100%" border="0">
        <tr>
        <td width="35.5%" >FM/FHS</td>
        <td width="25%"> FM:
        <select name="fm">
            <option value="+">+</option>
            <option value="0">0</option>
         </td>
        <td width="25%">FHS:
        <select name="fhs">
       <option value="+">+</option>
       <option value="0">0</option>
       </td>
      </tr>
    </table>

    <table width="100%" border="0">        
        <tr>
        <td width="35.5%">Designation</td>
        <td width="50%"><input type="text" name="designation"></td>
        
        </tr>
        <tr>
        <td width="35.5%">Date of next visit</td>
        <td width="50%"><input type="date" name="donext1"></td>
        
        </tr>
        </table>
        <br>
</form>
</body>
</html>



                        
                       
    
    







                        
 
