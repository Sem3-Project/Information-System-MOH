<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>

<?php 
require '../../framework/libraries/Model.php';
require '../models/table.php';


$dbObj = Model::getInstance();
$dbObj->connect('localhost','root','','moh');

if (isset($_POST['deactivate'])) {

    if (empty($_POST['id'])) {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","Enter username!","error");';
        echo '}, 200);</script>';
    }
    else{

        $id = $_POST['id'];
        $catagory = $_POST['catagory'];
        
        function delete($tableName,$idname, $id){
            $query_delete = "DELETE FROM $tableName WHERE $idname='$id'";
            return $query_delete;
          }

          
          $sql= "DELETE FROM users WHERE id='$id'";
          $dbObj->doQuery($sql);

    
          if ($catagory == 'Patient-Mother'){
         
          $dbObj->doQuery(delete('investigations','id',$id));
          $dbObj->doQuery(delete('day1','id',$id));
          $dbObj->doQuery(delete('day2','id',$id));
          $dbObj->doQuery(delete('day3','id',$id));
          $dbObj->doQuery(delete('day4','id',$id));
          $dbObj->doQuery(delete('day5','id',$id));
          $dbObj->doQuery(delete('day6','id',$id));
          $dbObj->doQuery(delete('day7','id',$id));
          $dbObj->doQuery(delete('day8','id',$id));
          $dbObj->doQuery(delete('day9','id',$id));
          $dbObj->doQuery(delete('day10','id',$id));
          $dbObj->doQuery(delete('data','id',$id));
          $dbObj->doQuery(delete('data2','id',$id));
          $dbObj->doQuery(delete('hoscliniccare','id',$id));
          $dbObj->doQuery(delete('optionaldate','id',$id));
          $dbObj->doQuery(delete('usscan','id',$id));
          $dbObj->doQuery(delete('pg7','id',$id));
          $dbObj->doQuery(delete('table1','id',$id));
          $dbObj->doQuery(delete('table2','idNew',$id));
        
        }
          else{
            $dbObj->doQuery(delete('childdata','id',$id));
            $dbObj->doQuery(delete('childdata1','id',$id));
            $dbObj->doQuery(delete('childdata2','id',$id));
            $dbObj->doQuery(delete('childdata3','id',$id));
            $dbObj->doQuery(delete('childdata4','id',$id));
            $dbObj->doQuery(delete('childdata5','id',$id));
            $dbObj->doQuery(delete('optionaldate','id',$id));
            $dbObj->doQuery(delete('table3','idn',$id));
            $dbObj->doQuery(delete('table4','id',$id));
            $dbObj->doQuery(delete('table5','id',$id));
            $dbObj->doQuery(delete('table6','id',$id));
            $dbObj->doQuery(delete('table7','id',$id));
            $dbObj->doQuery(delete('table8','id',$id));
            $dbObj->doQuery(delete('table9','id',$id));
            $dbObj->doQuery(delete('table10','id',$id));
           
          }
  
          echo '<script type="text/javascript">';
          echo 'setTimeout(function () { swal("Successful!","Registration completed successfully!","success");';
          echo '}, 200);</script>';
      }


        
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Success!","Successfully deactivated!","success");';
        echo '}, 200);</script>';      
    }

?>
