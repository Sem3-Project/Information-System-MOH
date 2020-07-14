<?php
$host = "localhost:3307"; 
$user = "root";
$password ="123456";
$database="moh";

$patient_id="";
$date1="";
$poa="";   
$ebw="";
$crl="";
$gest_sac="";
$bpd="";
$hc="";
$ac="";
$fl="";
$liquor="";
$placenta="";
$average_poa="";
$any_other="";
$designation="";


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
    $data[3]=(isset($_POST['ebw']) ? $_POST['ebw'] : '');
    $data[4]=(isset($_POST['crl']) ? $_POST['crl'] : '');
    $data[5]=(isset($_POST['gest_sac']) ? $_POST['gest_sac'] : '');
    $data[6]=(isset($_POST['bpd']) ? $_POST['bpd'] : '');
    $data[7]=(isset($_POST['hc']) ? $_POST['hc'] : '');
    $data[8]=(isset($_POST['ac']) ? $_POST['ac'] : '');
    $data[9]=(isset($_POST['fl']) ? $_POST['fl'] : '');
    $data[10]=(isset($_POST['liquor']) ? $_POST['liquor'] : '');
    $data[11]=(isset($_POST['placenta']) ? $_POST['placenta'] : '');
    $data[12]=(isset($_POST['average_poa']) ? $_POST['average_poa'] : '');
    $data[13]=(isset($_POST['any_other']) ? $_POST['any_other'] : '');
    $data[14]=(isset($_POST['designation']) ? $_POST['designation'] : '');
    return $data;
}

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM usscan WHERE patient_id='$info[0]'";
    $search_result=mysqli_query($connect,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
                        $patient_id=$row['patient_id'];
                        $date1=$row['date1'];
                        $poa=$row['poa'];   
                        $ebw=$row['ebw'];
                        $crl=$row['crl'];
                        $gest_sac=$row['gest_sac'];
                        $bpd=$row['bpd'];
                        $hc=$row['hc'];
                        $ac=$row['ac'];
                        $fl=$row['fl'];
                        $liquor=$row['liquor'];
                        $placenta=$row['placenta'];
                        $average_poa=$row['average_poa'];
                        $any_other=$row['any_other'];
                        $designation=$row['designation'];
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
    $insert_query="INSERT INTO usscan (patient_id,
    date1,
    poa,
    ebw,
    crl,
    gest_sac,
    bpd,
    hc,
    ac,
    fl,
    liquor,
    placenta,
    average_poa,
    any_other,
    designation) VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[11]','$info[12]'
         ,'$info[13]','$info[14]')";
    
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
    $update_query="UPDATE usscan SET patient_id='$info[0]',date1='$info[1]',poa= '$info[2]',ebw='$info[3]',crl='$info[4]',gest_sac='$info[5]',bpd='$info[6]',hc='$info[7]',ac='$info[8]',fl='$info[9]',liquor='$info[10]',placenta='$info[11]',average_poa='$info[12]', any_other='$info[13]',,designation='$info[14]'
     WHERE patient_id='$info[0]'";

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
<html>
<head>
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

    <h2>US Scan</h2>
    <link rel="stylesheet" href="table.css">
</head>
<body>

<form method="POST" action="page5-part2.php">
<input type="text" name="patient_id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($patient_id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>
<table width="100%" border="0">
<tr>
<td width="50%">Date</td>
       <td width="50%"><input type="date" name="date1"></td>
</tr>
<tr>
<td width="50%">POA</td>
       <td width="50%"><input type="text" name="poa"></td>
</tr>
<tr>
<td width="50%">EBW</td>
       <td width="50%"><input type="text" name="ebw"></td>
</tr>
<tr>
<td width="50%">CRL</td>
       <td width="50%"><input type="text" name="crl"></td>
</tr>
<tr>
<td width="50%">Gest.Sac</td>
       <td width="50%"><input type="text" name="gest_sac"></td>
</tr>
<tr>
<td width="50%">BPD</td>
       <td width="50%"><input type="text" name="bpd"></td>
</tr>
<tr>
<td width="50%">HC</td>
       <td width="50%"><input type="text" name="hc"></td>
</tr>
<tr>
<td width="50%">AC</td>
       <td width="50%"><input type="text" name="ac"></td>
</tr>
<tr>
<td width="50%">FL</td>
       <td width="50%"><input type="text" name="fl"></td>
</tr>
<tr>
<td width="50%">Liquor</td>
       <td width="50%"><input type="text" name="liquor"></td>
</tr>
<tr>
<td width="50%">Placenta</td>
       <td width="50%"><input type="text" name="placenta"></td>
</tr>
<tr>
<td width="50%">Average POA</td>
       <td width="50%"><input type="text" name="average_poa"></td>
</tr>
<tr>
<td width="50%">Any other</td>
       <td width="50%"><input type="text" name="any_other"></td>
</tr>
<tr>
<td width="50%">Designation</td>
       <td width="50%"><input type="text" name="designation"></td>
</tr>
</table>
<input type="hidden" name="pat_id" value="<?=$pat_id?>">
<br><br>

<br>
</form>
</body>
</html>
