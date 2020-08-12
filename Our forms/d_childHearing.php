<?php
$host = "localhost:3307"; 
$user = "root";
$password ="123456";
$database="moh";

$id='';
$sound='';
$highsound='';
$smile='';
$eye='';
$look='';
$hear='';
$search='';
$song='';
$name='';
$respond='';

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
    $data[1]=(isset($_POST['sound']) ? $_POST['sound'] : '');
    $data[2]=(isset($_POST['highsound']) ? $_POST['highsound'] : '');  
    $data[3]=(isset($_POST['smile']) ? $_POST['smile'] : '');
    $data[4]=(isset($_POST['eye']) ? $_POST['eye'] : '');
    $data[5]=(isset($_POST['look']) ? $_POST['look'] : '');
    $data[6]=(isset($_POST['hear']) ? $_POST['hear'] : '');
    $data[7]=(isset($_POST['search']) ? $_POST['search'] : '');
    $data[8]=(isset($_POST['song']) ? $_POST['song'] : '');
    $data[9]=(isset($_POST['name']) ? $_POST['name'] : '');
    $data[10]=(isset($_POST['respond']) ? $_POST['respond'] : '');
    return $data;
  }
  
  //search
  if(isset($_POST['Search'])){
      $info=getData();
      $search_query="SELECT * FROM childdata5 WHERE id='$info[0]'";
      $search_result=mysqli_query($connect,$search_query);
          if($search_result){
              if($search_result){
                  if(mysqli_num_rows($search_result)){
                      while($row = mysqli_fetch_array($search_result)){
                          $id=$row['id'];
                          $sound=$row['sound'];
                          $highsound=$row['highsound'];
                          $smile=$row['smile'];
                          $eye=$row['eye'];
                          $look=$row['look'];
                          $hear=$row['hear'];
                          $search=$row['search'];
                          $song=$row['song'];
                          $name=$row['name'];
                          $respond=$row['respond'];
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
          $insert_query="INSERT INTO childdata5 (id,
                                                 sound;
                                                 highsound;
                                                 smile;
                                                 eye;
                                                 look;
                                                 hear;
                                                 search;
                                                 song;
                                                 name;
                                                 respond;
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
$update_query="UPDATE childdata5 SET id='$info[0]',sound='$info[1]',highsound= '$info[2]',smile='$info[3]',eye='$info[4]',look='$info[5]',hear='$info[6]',search='$info[7]',song='$info[8]',name='$info[9]',respond='$info[10]'  WHERE patient_id='$info[0]'";

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
<form method="POST" action="child9.php">
<input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>
<table width="100%" border="0">
<tr>
    <td width="100%" align="center"><h3>දරුවාගේ ඇසීම​ පරික්‍ෂා කිරීම ​</h3></td></tr>
    <tr><td width="100%" align="center"><h4> (මෙම කොටස මව/පියා/ රැකබලාගන්නන් විසින් පිරවීම සදහාය​)</h4></td>
</tr></table>

  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"><h4>උපතෙන් සුලු වේලාවකට පසු </h4></td><td width="50%" align="center">​<h4>ඔව්/නැත​</h4></td></tr></table>
 
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">හදිසි විශාල ශබ්දයක් ඇසුනු විට(අත්පුඩි ගැසීම​,දොරක් ශබ්ද නගා වැසීම වැනි) දරුවා තිගැස්සී ඇස් පිල්ලම් ගසනවාද​??</td><td width="50%" align="center">​<select name="sound">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>මාස 1 වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> හදිසියේ ඇතිවන හෝ දිගටම පවතින​(වාහනයකින් පිටවන ශබ්ද වැනි) ශබ්ද  හදුනාගැනීමට හා ඒවාට නිහඩව සාවදානව කන්දීමට පටන් ගන්නවාද​? </td><td width="50%" align="center">​<select name="highsound">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
 <h4> මාස 4 සිට​</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> තම මව හෝ රැකබලාගන්නා පෙනීමට නොසිටියත් ඔවුන්ගේ කටහඩ ඇසුනු විට නිශ්ශබ්දව සිටිනවාද​? නැත්නම් මද සිනා පානවාද​?</td><td width="50%" align="center">​<select name="smile">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> පැත්තකින් හෝ පිටිපස සිට මව /රැකබලාගන්නා කතා කල විට ඒ දෙසට හිස හෝ ඇස් හරවනවාද​?</td><td width="50%" align="center">​<select name="eye">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4> මාස 7 සිට​</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> කතා කල වහාම මව /රැකබලාගන්නා දෙසට හැරෙනවාද​?</td><td width="50%" align="center">​<select name="look">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>මාස 9 වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">දිනපතා ඇසෙන හුරුපුරුදු ශබ්ද වලට සාවදානව ඇහුම්කන් දෙනවාද​?</td><td width="50%" align="center">​<select name="hear">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">තමාට නොපෙනෙන තැනක සිට කරන ශබ්ද ගැන සොයා බලනවාද​?</td><td width="50%" align="center">​<select name="search">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left">ශබ්ද නගා තාලයකට කතා කරනවිට එය ප්‍රිය කරනවාද​?</td><td width="50%" align="center">​<select name="song">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
  <h4>මාස 12 වනවිට</h4>
  <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> තමාගේ නමට හෝ අනෙකුත් හුරුපුරුදු ශබ්ද වලට ප්‍රතිචාර දක්වනවාද​?</td><td width="50%" align="center">​<select name="name">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
 <table  width="80%" border="0">
 <tr width=80%><td width="50%" align="left"> නෑ, ටටා වැනි වචනවලට ඊට අදාල ක්‍රියාව නොකලත් ප්‍රතිචාර දක්වනවාද​?</td><td width="50%" align="center">​<select name="respond">
            <option value="Yes"><h5>ඔව්</h5></option>
            <option value="No"><h5>නැත</h5></option>
	</select></t</tr></table>
 
  <h4>ඔබේ දරුවාගේ ඇසීම​ පිලිබඳ යම් සැකයක් ඇත්නම් හෝ ඉහත ප්‍රශ්න වලින් එකකට හෝ ඔව් යැයි පිලිතුරු දීමට නොහැකි නම් ඔබේ ප්‍රදේශයේ පවුල් සෞඛ්‍ය සේවා නිළධාරිනිය​/ සෞඛ්‍ය වෛද්‍ය නිලධාරී/ වෙනත් වෛද්‍යවරයෙකු හමුවන්න​</h4>
