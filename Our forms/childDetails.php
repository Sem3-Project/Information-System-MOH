<?php
$host="localhost";
$user = "root";
$password = "123456";
$database = "moh";

$patient_id='';
$doctor='';
$moh='';
$idnum='';
$childname='';
$regno='';
$childbday='';
$regdate='';
$momname='';
$momage='';
$num1='';
$weight1='';
$headperi='';
$length='';
$health='';
$vitk='';
$posture='';
$rel='';
$date1='';
$date2='';
$date3='';
$date4='';
$date5='';
$date6='';
$date7='';
$date8='';
$date9='';
$date0='';
$date10='';

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
    $data[1]=(isset($_POST['doctor']) ? $_POST['doctor'] : '');
    $data[2]=(isset($_POST['moh']) ? $_POST['moh'] : '');  
    $data[3]=(isset($_POST['idnum']) ? $_POST['idnum'] : '');
    $data[4]=(isset($_POST['childname']) ? $_POST['childname'] : '');
    $data[5]=(isset($_POST['regno']) ? $_POST['regno'] : '');
    $data[6]=(isset($_POST['childbday']) ? $_POST['childbday'] : '');
    $data[7]=(isset($_POST['regdate']) ? $_POST['regdate'] : '');
    $data[8]=(isset($_POST['momname']) ? $_POST['momname'] : '');
    $data[9]=(isset($_POST['momage']) ? $_POST['momage'] : '');
    $data[10]=(isset($_POST['num1']) ? $_POST['num1'] : '');
    $data[11]=(isset($_POST['weight1']) ? $_POST['weight1'] : '');
    $data[12]=(isset($_POST['headperi']) ? $_POST['headperi'] : '');
    $data[13]=(isset($_POST['length']) ? $_POST['length'] : '');
    $data[14]=(isset($_POST['health']) ? $_POST['health'] : '');
    $data[15]=(isset($_POST['vitk']) ? $_POST['vitk'] : '');
    $data[16]=(isset($_POST['posture']) ? $_POST['posture'] : '');
    $data[17]=(isset($_POST['rel']) ? $_POST['rel'] : '');
    $data[18]=(isset($_POST['date1']) ? $_POST['date1'] : '');
    $data[19]=(isset($_POST['date2']) ? $_POST['date2'] : '');
    $data[20]=(isset($_POST['date3']) ? $_POST['date3'] : '');
    $data[21]=(isset($_POST['date4']) ? $_POST['date4'] : '');
    $data[22]=(isset($_POST['date5']) ? $_POST['date5'] : '');
    $data[23]=(isset($_POST['date6']) ? $_POST['date6'] : '');
    $data[24]=(isset($_POST['date7']) ? $_POST['date7'] : '');
    $data[25]=(isset($_POST['date8']) ? $_POST['date8'] : '');
    $data[26]=(isset($_POST['date9']) ? $_POST['date9'] : '');
    $data[27]=(isset($_POST['date0']) ? $_POST['date0'] : '');
    $data[28]=(isset($_POST['date10']) ? $_POST['date10'] : '');
    return $data;
  }
  
  //search
  if(isset($_POST['Search'])){
      $info=getData();
      $search_query="SELECT * FROM childdata1 WHERE patient_id='$info[0]'";
      $search_result=mysqli_query($connect,$search_query);
          if($search_result){
              if($search_result){
                  if(mysqli_num_rows($search_result)){
                      while($row = mysqli_fetch_array($search_result)){
                          $patient_id=$row['patient_id'];
                          $doctor=$row['doctor'];
                          $moh=$row['moh'];
                          $idnum=$row['idnum'];
                          $childname=$row['childname'];
                          $regno=$row['regno'];
                          $childbday=$row['childbday'];
                          $regdate=$row['regdate'];
                          $momname=$row['momname'];
                          $momage=$row['momage'];
                          $num1=$row['num1'];
                          $weight1=$row['weight1'];
                          $headperi=$row['headperi'];
                          $length=$row['length'];
                          $health=$row['health'];
                          $vitk=$row['vitk'];
                          $posture=$row['posture'];
                          $rel=$row['rel'];
                          $date1=$row['date1'];
                          $date2=$row['date2'];
                          $date3=$row['date3'];
                          $date4=$row['date4'];
                          $date5=$row['date5'];
                          $date6=$row['date6'];
                          $date7=$row['date7'];
                          $date8=$row['date8'];
                          $date9=$row['date9'];
                          $date0=$row['date0'];
                          $date10=$row['date10'];
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
          $insert_query="INSERT INTO childdata1 (patient_id,
                                                doctor;
                                                moh;
                                                idnum;
                                                childname;
                                                regno;
                                                childbday;
                                                regdate;
                                                momname;
                                                momage;
                                                num1;
                                                weight1;
                                                headperi;
                                                length;
                                                health;
                                                vitk;
                                                posture;
                                                rel;
                                                date1;
                                                date2;
                                                date3;
                                                date4;
                                                date5;
                                                date6;
                                                date7;
                                                date8;
                                                date9;
                                                date0;
                                                date10;
                                                VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[11]','$info[12]'
         ,'$info[13]','$info[14]','$info[15]','$info[16]','$info[17]','$info[18]','$info[19]','$info[20]','$info[21]','$info[22]','$info[23]','$info[24]','$info[25]'
         ,'$info[26]','$info[27]','$info[28]')";

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
        $update_query="UPDATE childdata1 SET patient_id='$info[0]',doctor='$info[1]',moh= '$info[2]',idnum='$info[3]',childname='$info[4]',regno='$info[5]',childbday='$info[6]',regdate='$info[7]',momname='$info[8]',momage='$info[9]',num1='$info[10]',weight1='$info[11]',headperi='$info[12]',length='$info[13]',health='$info[14]',vitk='$info[15]'
        ,posture='$info[16]',rel='$info[17]',date1= '$info[18]',date2='$info[19]',date3='$info[20]',date4='$info[21]',date5='$info[22]',date6='$info[23]',date7='$info[24]',date8= '$info[25]',date9='$info[26]',date0='$info[27]',date110='$info[28]'  WHERE patient_id='$info[0]'";

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
<style type="text/css">
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>    
    
</head>
<body>
<form method="POST" action="child1.php">
<input type="text" name="patient_id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($patient_id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>
	
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="34%" align="left">සෞ:වෛ:නි:<input type="text" name="doctor" value="<?=$doctor?>"></td>
  <td width="33%" align="center">ප:සෞ:සේ:නි:කො<input type="text" name="moh" value="<?=$moh?>"></td>
    <td width="33%" align="right">හැ:අංකය​<input type="text" name="idnum" value="<?=$idnum?>"></td>
 </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="75%" align="left">දරුවාගේ නම ​<input type="text" name="childname" value="<?=$childname?>"></td>
  <td width="25%" align="center">ලි:ප​ අංකය<input type="text" name="regn0" value="<?=$regno?>"></td>
    </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="25%" align="left">දරුවගේ උපන් දිනය​</td>
  <td width="25%" align="center"><input type="date" name="childbday" value="<?=$childbday?>"></td>
    <td width="25%" align="right">ලි:ප කල දිනය</td>
    <td width="25%" align="right">​<input type="text" name="regdate" value="<?=$regdate?>"></td>
 </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="75%" align="left">මවගේ නම ​ ​<input type="text" name="momname" value="<?=$momname?>"></td>
  <td width="25%" align="center">වයස<input type="number" name="momage" value="<?=$momage?>"></td>
    </tr>
</table>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><h3>අලුත උපන් ළදරුවගේ රැකවරණය​</h3>
  </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="25%" align="left">ඇප්ගා සංඛ්‍යාව​<input type="number" name="num1" value="<?=$num1?>"></td>
  <td width="25%" align="center">උපත් බර​(කි.ග්‍රෑ)<input type="number" name="weight1" value="<?=$weight1?>"></td>
    <td width="25%" align="right">උපතේදි හිසේ වට ප්‍රමාණය​(සෙ.මී)<input type="number" name="headperi" value="<?=$headperi?>"></td>
    <td width="25%" align="right">උපතේදි දරුවගේ දිග​(සෙ.මී)​<input type="number" name="length" value="<?=$length?>"></td>
 </tr>
</table>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="25%" align="left">අලුත උපන් දරුවගේ සෞඛ්‍ය තත්වය​</td>
  <td><select name="health">
            <option value="normal"><h5>සමාන්‍යය​</h5></option>
            <option value="needspec"><h5>විශේෂ රැකවරණයක් අවශ්‍ය වේ​</h5></option></td>

  
 </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="25%" align="left">විටමින් K</td>
  <td><select name="vitk">
            <option value="Yes"><h5>ලබා දී ඇත​​</h5></option>
            <option value="No"><h5>නැත​​</h5></option></td>
  
    
 </tr>
</table>
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr>
    <td rowspan="2" width="50%" align="center">මව් කිරි දීම   </td>
    <td width="50" align="right">ඉරියව්ව  <select name="posture">
            <option value="correct">නිවරදියි</option>
            <option value="wrong">වැරදියි </option>
            </select></td>
    <tr><td width="80" align="left">සම්බන්ධය <select name="rel">
            <option value="correct">නිවරදියි</option>
            <option value="wrong">වැරදියි </option>
            </select> </td></tr>
   </tr>
  </table>

  <h3>විශේෂයෙන් රැකබලා ගැනීමට හේතු </h3>

<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr><td width="70%"></td><td width="15%">සලකුණු කරන්න​​</td><td width="15%">දිනය</td>
 </tr>
 <tr><td width="70%">නොමේරු දරු උපත් ​</td><td width="15%"><input type="checkbox" name="select" value="select"></td></td><td width="15%"><input type="date" name="date1" value="<?=$date1?>"></td>
 </tr>
 <tr><td width="70%">අඩු උපත් බර</td><td width="15%"><input type="checkbox" name="select" value="select">​</td><td width="15%"><input type="date" name="date2" value="<?=$date2?>"></td>
 </tr>
 <tr><td width="70%">නවජ සංකූලතා</td><td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date3" value="<?=$date3?>"></td>
 </tr>
 <tr><td width="70%">සංජානනීය ආබාධ</td><td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date4" value="<?=$date4?>"></td>
 </tr>
 <tr><td width="70%">ප්‍රසුතියෙන් පසු මවගේ තදබල රෝග තත්වයන්</td><td width="15%"><input type="checkbox" name="select" value="select">​</td><td width="15%"><input type="date" name="date5" value="<?=$date5?>"></td>
 </tr>
 <tr><td width="70%">පලමු මාස 6 තුලදි පිටිකිරි දීම ​</td><td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date6" value="<?=$date6?>"></td>
 </tr>
 <tr><td width="70%">වර්ධනය අඩාල වීම</td> <td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date7" value="<?=$date7?>"></td>
 </tr>
 <tr><td width="70%">මව්කිරි/ ආහාර දීමේ අපහසුතා</td> <td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date8" value="<?=$date8?>"></td>
 </tr>
 <tr><td width="70%">මවගේ/ පියාගේ මරණය</td><td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date9" value="<?=$date9?>"></td>
 </tr>
 <tr><td width="70%">මවගේ/ පියාගේ වෙන්වීම​/විදේශගත වීම</td><td width="15%"><input type="checkbox" name="select" value="select"> ​</td><td width="15%"><input type="date" name="date0" value="<?=$date0?>"></td>
 </tr>
 <tr><td width="70%">වෙනත්</td><td width="15%"><input type="checkbox" name="select" value="select">​</td><td width="15%"><input type="date" name="date10" value="<?=$date10?>"></td>
 </tr>
 
</table>
