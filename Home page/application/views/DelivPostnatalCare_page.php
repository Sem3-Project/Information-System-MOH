<?php
require '../models/DelivPostnatalCare_model.php';
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
<form method="POST" action="DelivPostnatalCare_page.php">
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