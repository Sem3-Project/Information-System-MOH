<?php
$host = "localhost:3307"; 
$user = "root";
$password ="123456";
$database="moh";

$id='';
$light='';
$watch='';
$smile='';
$eye='';
$look='';
$touch='';
$eyeerror='';
$pick='';
$touch2='';
$recognize='';

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
    $data[0]=(isset($_POST['id']) ? $_POST['id'] : '');
    $data[1]=(isset($_POST['light']) ? $_POST['light'] : '');
    $data[2]=(isset($_POST['watch']) ? $_POST['watch'] : '');  
    $data[3]=(isset($_POST['smile']) ? $_POST['smile'] : '');
    $data[4]=(isset($_POST['eye']) ? $_POST['eye'] : '');
    $data[5]=(isset($_POST['look']) ? $_POST['look'] : '');
    $data[6]=(isset($_POST['touch']) ? $_POST['touch'] : '');
    $data[7]=(isset($_POST['eyeerror']) ? $_POST['eyeerror'] : '');
    $data[8]=(isset($_POST['pick']) ? $_POST['pick'] : '');
    $data[9]=(isset($_POST['touch2']) ? $_POST['touch2'] : '');
    $data[10]=(isset($_POST['recognize']) ? $_POST['recognize'] : '');
    return $data;
  }
  
  //search
  if(isset($_POST['Search'])){
      $info=getData();
      $search_query="SELECT * FROM childdata4 WHERE id='$info[0]'";
      $search_result=mysqli_query($connect,$search_query);
          if($search_result){
              if($search_result){
                  if(mysqli_num_rows($search_result)){
                      while($row = mysqli_fetch_array($search_result)){
                          $id=$row['id'];
                          $light=$row['light'];
                          $watch=$row['watch'];
                          $smile=$row['smile'];
                          $eye=$row['eye'];
                          $look=$row['look'];
                          $touch=$row['touch'];
                          $eyeerror=$row['eyeerror'];
                          $pick=$row['pick'];
                          $touch2=$row['touch2'];
                          $recognize=$row['recognize'];
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
          $insert_query="INSERT INTO childdata4 (id,
                                                 light;
                                                 watch;
                                                 smile;
                                                 eye;
                                                 look;
                                                 touch;
                                                 eyeerror;
                                                 pick;
                                                 touch2;
                                                 recognize;
                                                 VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]','$info[11]')";

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
$update_query="UPDATE childdata4 SET id='$info[0]',light='$info[1]',watch= '$info[2]',smile='$info[3]',eye='$info[4]',look='$info[5]',touch='$info[6]',eyeerror='$info[7]',pick='$info[8]',touch2='$info[9]',recognize='$info[10]'  WHERE patient_id='$info[0]'";

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
   
    
</head>
<body>
<form method="POST" action="child8.php">
<input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>
<table width="100%" border="0">
<tr>
    <td width="100%" align="center"><h3>දරුවාගේ පෙනීම පරික්‍ෂා කිරීම ​</h3></td></tr>
    <tr><td width="100%" align="center"><h4> (මෙම කොටස මව/පියා/ රැකබලාගන්නන් විසින් පිරවීම සදහාය​)</h4></td>
</tr></table>

  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"><h4>ඉපදී පලමු සතියේ සිට </h4></td><td width="50%" align="center">​<h4>ඔව්/නැත​</h4></td></tr></table>
 
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">ආලෝකය දෙසට ළදරුවා ඇස් යොමුකරනවාද​?</td><td width="50%" align="center">​<select name="light">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> ළදරුවා ඔබේ මුහුණ දෙස හොදින් බලනවාද​?</td><td width="50%" align="center">​<select name="watch">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
 <h4> මාස දෙක වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> ඔබ මුහුණ දෙපැත්තට හැරවීමේදි ඔබේ දෙසම බලා දරුවා ප්‍රතිචාරාත්මකව සිනාසෙනවාද​?</td><td width="50%" align="center">​<select name="smile">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> එවිට දරුවාගේ ඇස් දෙකම එකට චලනය වේද​?</td><td width="50%" align="center">​<select name="eye">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4> මාස 6 වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> දරුවා විමසිල්ලෙන් අවට බලන්නේද​?</td><td width="50%" align="center">​<select name="look">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> දරුවා අත දිගුකර යමක් ඇල්ලීමට උත්සහ කරන්නේද​?</td><td width="50%" align="center">​<select name="touch">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> දරුවාට වපරයක් ඇති බවට ඔබ සැක කරනවද​?</td><td width="50%" align="center">​<select name="eyeerror">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>මාස 10 දී</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> දරුවාට මාපටඟිල්ල හා දබර ඇඟිල්ල ආධාරයෙන් කුඩා ද්‍රව්‍ය අහුලා ගැනීමට හැකියාව ඇත්ද​?</td><td width="50%" align="center">​<select name="pick">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>මාස 12 දී</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> ඔබේ දරුවා නොයෙක් දේවල් දෙසට අත දිගුකර ඒවා ඉල්ලනවාද​?</td><td width="50%" align="center">​<select name="touch2">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> හඳුනන පුද්ගලයන් දුටුවිට ඔවුන් දරුවාට කතා කිරීමට පෙරම දරුවා ඔවුන්ව හදුනා ගන්නවාද​?</td><td width="50%" align="center">​<select name="recognize">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>ඔබේ දරුවාගේ පෙනීම පිලිබඳ යම් සැකයක් ඇත්නම්/ දරුවාට වපරයක් ඇතැයි පෙනී යන්නේ නම් හෝ ඉහත අනෙකුත් ප්‍රශ්න වලින් එකකට හෝ ඔව් යැයි පිලිතුරු දීමට නොහැකි නම් ඔබේ ප්‍රදේශයේ පවුල් සෞඛ්‍ය සේවා නිළධාරිනිය​/ සෞඛ්‍ය වෛද්‍ය නිලධාරී/ වෙනත් වෛද්‍යවරයෙකු හමුවන්න​</h4>
