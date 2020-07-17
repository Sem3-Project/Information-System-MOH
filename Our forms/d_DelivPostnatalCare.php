<?php
$host = "localhost:3307"; 
$user = "root";
$password ="123456";
$database="moh";

$patient_id = '';
$hosptal='';
$birth_weight='';
$poa='';
$live_birth='';
$still_birth='';
$abs='';
$del_dt='';
$sex='';
$del_mod='';
$ep='';
$bt='';
$ve='';
$mc='';
$infect='';
$fpm='';
$cm='';
$reason='';
$danger='';
$bf='';
$bp='';
$vita='';
$rubella='';
$antid='';
$diags='';
$chdr='';
$presc='';
$reff='';
$other='';
$dis_dt='';
$notes='';

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
    $data[0]=$_POST['patient_id'];
    $data[1]=(isset($_POST['hosptal']) ? $_POST['hosptal'] : ''); 
    $data[2]=$_POST['birth_weight'];
    $data[3]=$_POST['poa'];
    $data[4]=$_POST['live_birth'];
    $data[5]=$_POST['still_birth'];
    $data[6]=$_POST['abs'];
    $data[7]=$_POST['del_dt'];
    $data[8]=$_POST['ep'];
    $data[9]=$_POST['bt'];
    $data[10]=$_POST['ve'];
    $data[11]=$_POST['mc'];
    $data[12]=$_POST['infect'];
    $data[13]=$_POST['fpm'];
    $data[14]=$_POST['cm'];
    $data[15]=$_POST['reason'];
    $data[16]=$_POST['danger'];
    $data[17]=$_POST['bf'];
    $data[18]=$_POST['bp'];
    $data[19]=$_POST['vita'];
    $data[20]=$_POST['rubella'];
    $data[21]=$_POST['antid'];
    $data[22]=$_POST['diags'];
    $data[23]=(isset($_POST['chdr']) ? $_POST['chdr'] : ''); 
    $data[24]=(isset($_POST['presc']) ? $_POST['presc'] : ''); 
    $data[25]=$_POST['reff'];
    $data[26]=$_POST['other'];
    $data[27]=$_POST['dis_dt'];
    $data[28]=$_POST['notes'];
    return $data;
}

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM `pg7` WHERE patient_id='$info[0]'";
    $search_result=mysqli_query($connect,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
                        $patient_id=$row['patient_id'];
                        $hosptal=$row['hosptal'];
                        $birth_weight=$row['birth_weight'];
                        $poa=$row['poa'];
                        $live_birth=$row['live_birth'];
                        $still_birth=$row['still_birth'];
                        $abs=$row['abs'];
                        $del_dt=$row['del_dt'];
                        $sex=$row['sex'];
                        $del_mod=$row['del_mod'];
                        $ep=$row['ep'];
                        $bt=$row['bt'];
                        $ve=$row['ve'];
                        $mc=$row['mc'];
                        $infect=$row['infect'];
                        $fpm=$row['fpm'];
                        $cm=$row['cm'];
                        $reason=$row['reason'];
                        $danger=$row['danger'];
                        $bf=$row['bf'];
                        $bp=$row['bp'];
                        $vita=$row['vita'];
                        $rubella=$row['rubella'];
                        $antid=$row['antid'];
                        $diags=$row['diags'];
                        $chdr=$row['chdr'];
                        $presc=$row['presc'];
                        $reff=$row['reff'];
                        $other=$row['other'];
                        $dis_dt=$row['dis_dt'];
                        $notes=$row['notes'];
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
    $insert_query="INSERT INTO pg7 (patient_id,
				hosptal,
				birth_weight,
				poa,
				live_birth,
				still_birth,
				abs,
				del_dt,
				sex,
				del_mod,
				ep,
				bt,
				ve,
				mc,
				infect,
				fpm,
				cm,
				reason,
				danger,
				bf,
				bp,
				vita,
				rubella,
				antid,
				diags,
				chdr,
				presc,
				reff,
				other,
				notes)
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
        $update_query="UPDATE `pg7` SET patient_id='$info[0]',hosptal='$info[1]',birth_weight= '$info[2]',poa='$info[3]',live_birth='$info[4]',still_birth='$info[5]',abs='$info[6]',del_dt='$info[7]',sex='$info[8]',del_mod='$info[9]',ep='$info[10]',bt='$info[11]',ve='$info[12]',mc='$info[13]',infect='$info[14]',fpm='$info[15]'
        ,cm='$info[16]',reason='$info[17]',danger= '$info[18]',bf='$info[19]',bp='$info[20]',vita='$info[21]',rubella='$info[22]',antid='$info[23]',chdr='$info[24]',presc= '$info[25]',reff='$info[26]',other='$info[27]',notes='$info[28]'  WHERE patient_id='$info[0]'";

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
<form method="POST" action="page7.php">
<input type="text" name="patient_id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($patient_id);?>"><br><br>

<input type="submit" name="Search" value="Search">
<input type="submit" name="Update" value="Update"><br><br>
	
<table width="100%" border="0">
<link rel="stylesheet" href="table.css">  
  <tr>
    <td width="86%" align="center"><h3>ප්‍රසව හා පසුප්‍රසව සංරක්‍ෂණය​</h3><h2>Delivary and Postnatal Care</h2></td>
    <td width="14%" align="right"><table width="99%" border="1">
      <tr>
        <td width="43%"><h4>රෝහල​</h4>Hospital</td>
        <td width="57%"><input type="text" name="hospital" value="<?=$hosptal?>"> </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left"><h5>හෙද නිලධාරිනිය / පවුල් සෞඛ්‍ය සේවා නිලධරිනිය විසින් රෝහලින් මුදාහරින අවස්ථාවේදි සම්පුර්ණ කල යුතුය</h5>
    To be filled by the nursing officer or midwife at discharge</td>
    <td align="right">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="left"><table width="100%" border="1">
      <tr>
        <td><h5>උපත් බර</h5> Birth Weight</td>
        <td><input type="number" name="birth_weight" value="<?=$birth_weight?>"></td>
        <td><h5>ගර්භ සති ගණන</h5>POA</td>
        <td><input type="text" name="poa" value="<?=$poa?>"></td>
        <td><h5> සජිව උපත්</h5> Live Birth</td>
        <td><input type="text" name="live_birth" value="<?=$live_birth?>"></td>
        <td><h5>මළ දරු උපත්</h5> Still Birth</td>
        <td><input type="text" name="still_birth" value="<?=$still_birth?>"></td>
      </tr>
    </table>
    <table width="100%" border="1">
  <tr>
    <td width="24%"><h5>දරුවාගේ හදුනාගත් අසාමාන්‍යතා</h5>Abnormality detected in baby</td>
    <td width="76%"><input type="text" name="abs" value="<?=$abs?>" style="width:100%"></td>
  </tr>
</table>

    </td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="50%" align="left" valign="top"><table width="100%" border="1">
      <tr>
        <td width="25%"><h5>ප්‍රසූතිය සිදුකල දිනය​</h5>Date of Delivery</td>
        <td width="26%"><input type="date" name="del_dt" value="<?=$del_dt?>"></td>
        <td width="21%"><h5>ස්ත්‍රී පුරුෂ භාවය​</h5>Sex</td>
        <td width="28%">
          <select name="sex">
            <option value="Male"><h5>පුරුෂ/</h5>Male</option>
            <option value="Female"><h5>ස්ත්‍රී/ </h5>Female</option>
            </select>
          </td>
      </tr>
      </table>
      <table width="100%" border="1">
        <tr>
    <td width="50%"><h5>ප්‍රසූතිය සිදුකල ආකාරය​</h5>Mode of delivery</td>
    <td><p>
      <select name="del_mod">
        <option value="VD"><h5>සාමාන්‍ය යෝනි ප්‍රසූතිය​/</h5>VD</option>
        <option value="Forceps"><h5>අඬු භාවිතය/ ​</h5>Forceps</option>
        <option value="Vacume"><h5>වැකියුම් භාවිතය/</h5>Vacume</option>
        <option value="LSCS"><h5> සිසේරියන් ශල්‍ය කර්ම/</h5>LSCS</option>
      </select>
    	</p>
      </td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="74%"><h5>වටපිය කැපුම​</h5>Episiotomy</td>
    <td width="26%" align="center">
    <select name="ep">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
    </td>
  </tr>
  <tr>
    <td><h5>පසුගිය දින දෙක ඇතුලත ශරීර උෂ්ණත්වය සාමාන්‍යව පැවතියේද යන්න​</h5>Body Temp. normal for last 2 days</td>
    <td align="center">
    <select name="bt">
            <option value="Yes"><h5>ඔව්/ ​</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
    </td>
  </tr>
  <tr>
    <td><h5>සැරහුම් ද්‍රුව්‍ය සදහා යෝනි පරික්‍ෂාව සිදුකලේද යන්න​</h5>Vaginal Examination done to check packs</td>
    <td align="center">
    <select name="ve">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
    </td>
  </tr>
  <tr>
    <td><h5>ඕනෑම මාතෘ සංකූලතවක් තිබුණේනම් සදහන් කරන්න​</h5>any maternal complications. If yes specify</td>
    <td align="center">
    <select name="mc">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
    </td>
  </tr>
  <tr>
    <td><h5>වටපිය කැපුම/ඉරීම්/සිසේරියන් තුවාලයේ ආසාදන​</h5>Epis/Tear/LSCS infection</td>
    <td align="center">
    <select name="infect">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
    </td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="74%"><h5>පවුල් සැලසුම් ලබාදුන්</h5>Family Planning method given</td>
    <td width="26%" align="center">
    <select name="fpm">
            <option value="T">T</option>
            <option value="PL">PL</option>
	</select>
    </td>
    
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="74%"><h5>තෝරාගත්</h5>Chosen Method</td>
    <td width="26%" align="center">
    <select name="cm">
            <option value="T">T</option>
            <option value="L">L</option>
            <option value="IP">IP</option>
            <option value="N">N</option>
            <option value="V">V</option>
            <option value="C">C</option>
	</select>    
    </td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="50%"><h5>නැතිනම් හේතුව​</h5>If not reason</td>
    <td><input type="text" name="reason" value="<?=$reason?>" style="width:100%"></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="74%"><h5>පසු ප්‍රසව අනතුරු සංඥා පහදා දුන්නේද යන්න​</h5>Post partum danger signal explained</td>
    <td>
    <select name="danger">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
    </td>
  </tr>
  <tr>
    <td><h5>මවු කිරි දීම ස්ථාපිත කලේද යන්න​</h5>Breast Feeding established</td>
    <td>
    <select name="bf">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
    </td>
  </tr>
</table>

    </td>
    <td align="left" valign="top"><table width="100%" border="1">
      <tr>
        <td width="74%"><h5>රෝහලෙන් මුදාහරින විට රුධිර පීඩනය​</h5>Blood Pressure at the time of discharge</td>
        <td><input type="text" name="bp" value="<?=$bp?>"></td>
      </tr>
      <tr>
        <td><h5>විටමින් ඒ අධිමාත්‍රාව දුන්නේද​</h5>Vitamin A megadose given</td>
        <td align="center">
        <select name="vita">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
        </td>
      </tr>
      <tr>
        <td><h5>රුබෙල්ලා ප්‍රතිශක්තිකරණය ලබා දුන්නේද​</h5>Rubella Immunization given</td>
        <td align="center">
        <select name="rubella">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
        </td>
      </tr>
      <tr>
        <td><h5>Anti-D එන්නත දුන්නේද​</h5>Anti-D antibodies given</td>
        <td align="center">
        <select name="antid">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
        </td>
      </tr>
      <tr>
        <td><h5>රෝග විනිශ්චය කාඩ්පතක් දුන්නේද (අවශ්‍ය අවස්ථා වලදි)</h5>Diagnosis card given if indicated</td>
        <td align="center">
        <select name="diags">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
        </td>
      </tr>
      <tr>
        <td><h5>ළමා සෞඛ්‍ය වර්ධන සටහන් පත සම්පූර්ණ කර මවට ලබා දුන්නේද යන්න​</h5>CHDR Completed and handed over</td>
        <td align="center">
        <select name="chrd">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
        </td>
      </tr>
      <tr>
        <td><h5>අවශ්‍ය නම් ප්‍රතිකාර සටහනක් දුන්නේද යන්න​</h5>Prescription given if needed</td>
        <td align="center">
        <select name="presc">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
        </td>
      </tr>
      <tr>
        <td><h5>ක්‍ෂේත්‍ර පවුල් සෞඛ්‍ය සේවා නිලධාරිනියට යොමු කළේද යන්න​</h5>Referred to the field public health midwife</td>
        <td align="center">
        <select name="reff">
            <option value="Yes"><h5>ඔව්/</h5>Yes</option>
            <option value="No"><h5>නැත/</h5>No</option>
	</select>
        </td>
      </tr>
    </table>
    <table width="100%" border="1">
  <tr>
    <td><p><h5>වෙනත් ​</h5>Any other</p>
      <p><textarea name="other" style="width:100%"><?=$other?></textarea></p></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="25%" align="center" valign="bottom"><p>&nbsp;</p>
      <p><h5>මුදාහළ දිනය</h5>date of Discharge      </p></td>
      <td width="26%"><input type="date" name="dis_dt" value="<?=$row['	dis_dt']?>"></td>
    <td align="center" valign="bottom"><h5>අත්සන</h5>Signature      </td>
  </tr>
</table>

    </td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top"><p><h4>විශේෂ සටහන්</h4><h3>Special Notes</h3></p>
    <p><textarea name="notes" style="width:100%"><?=$notes?></textarea></p></td>
  </tr>
</table>

</body>
</html>