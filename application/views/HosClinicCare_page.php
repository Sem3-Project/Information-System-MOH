<?php
require '../models/HosClinicCare_model.php';
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

<form method="POST" action="HosClinicCare_page.php">
<input type="text" name="id" placeholder="රෝගියාගේ හැඳුනුම්පත් අංකය සඳහන් කරන්න/Enter patient's NIC here" value="<?php echo($id);?>"><br><br>

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
