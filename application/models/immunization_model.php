<link rel="stylesheet" href=:../../public/css/sweetalert.min.css">
<script type="text/javascript" src="../../public/js/sweetalert.min.js"></script>

<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$id='';
$bcg='';
$date1='';
$date2='';
$date3='';
$date4='';
$date5='';
$date6='';
$date7='';
$date8='';
$date9='';
$date10='';
$date11='';
$date12='';
$date13='';
$date14='';
$date15='';
$date16='';
$date17='';
$date18='';
$date19='';
$date20='';
$date21='';
$date22='';
$date23='';
$date24='';
$date25='';
$date26='';
$num1='';
$num2='';
$num3='';
$num4='';
$num5='';
$num6='';
$num7='';
$num8='';
$num9='';
$num10='';
$num11='';
$num12='';
$num13='';
$num14='';
$num15='';
$num16='';
$num17='';
$num18='';
$num19='';
$num20='';
$num21='';
$num22='';
$num23='';
$num24='';
$num25='';
$num26='';
$test1='';
$test2='';
$test3='';
$test4='';
$test5='';
$test6='';
$test7='';
$test8='';
$test9='';
$test10='';
$test11='';
$test12='';
$test13='';
$test14='';
$test15='';
$test16='';
$test17='';
$test18='';
$test19='';
$test20='';
$test21='';
$test22='';
$test23='';
$test24='';
$test25='';
$test26='';

//get data from the form
function getData(){
    $data=array();
    $data[0]=(isset($_POST['id']) ? $_POST['id'] : '');
    $data[1]=(isset($_POST['bcg']) ? $_POST['bcg'] : '');
    $data[2]=(isset($_POST['date1']) ? $_POST['date1'] : '');
    $data[3]=(isset($_POST['date2']) ? $_POST['date2'] : '');
    $data[4]=(isset($_POST['date3']) ? $_POST['date3'] : '');
    $data[5]=(isset($_POST['date4']) ? $_POST['date4'] : '');
    $data[6]=(isset($_POST['date5']) ? $_POST['date5'] : '');
    $data[7]=(isset($_POST['date6']) ? $_POST['date6'] : '');
    $data[8]=(isset($_POST['date7']) ? $_POST['date7'] : '');
    $data[9]=(isset($_POST['date8']) ? $_POST['date8'] : '');
    $data[10]=(isset($_POST['date9']) ? $_POST['date9'] : '');
    $data[11]=(isset($_POST['date10']) ? $_POST['date10'] : '');
    $data[12]=(isset($_POST['date11']) ? $_POST['date11'] : '');
    $data[13]=(isset($_POST['date12']) ? $_POST['date12'] : '');
    $data[14]=(isset($_POST['date13']) ? $_POST['date13'] : '');
    $data[15]=(isset($_POST['date14']) ? $_POST['date14'] : '');
    $data[16]=(isset($_POST['date15']) ? $_POST['date15'] : '');
    $data[17]=(isset($_POST['date16']) ? $_POST['date16'] : '');
    $data[18]=(isset($_POST['date17']) ? $_POST['date17'] : '');
    $data[19]=(isset($_POST['date18']) ? $_POST['date18'] : '');
    $data[20]=(isset($_POST['date19']) ? $_POST['date19'] : '');
    $data[21]=(isset($_POST['date20']) ? $_POST['date20'] : '');
    $data[22]=(isset($_POST['date21']) ? $_POST['date21'] : '');
    $data[23]=(isset($_POST['date22']) ? $_POST['date22'] : '');
    $data[24]=(isset($_POST['date23']) ? $_POST['date23'] : '');
    $data[25]=(isset($_POST['date24']) ? $_POST['date24'] : '');
    $data[26]=(isset($_POST['date25']) ? $_POST['date25'] : '');
    $data[27]=(isset($_POST['num1']) ? $_POST['num1'] : '');
    $data[28]=(isset($_POST['num2']) ? $_POST['num2'] : '');
    $data[29]=(isset($_POST['num3']) ? $_POST['num3'] : '');
    $data[30]=(isset($_POST['num4']) ? $_POST['num4'] : '');
    $data[31]=(isset($_POST['num5']) ? $_POST['num5'] : '');
    $data[32]=(isset($_POST['num6']) ? $_POST['num6'] : '');
    $data[33]=(isset($_POST['num7']) ? $_POST['num7'] : '');
    $data[34]=(isset($_POST['num8']) ? $_POST['num8'] : '');
    $data[35]=(isset($_POST['num9']) ? $_POST['num9'] : '');
    $data[36]=(isset($_POST['num10']) ? $_POST['num10'] : '');
    $data[37]=(isset($_POST['num11']) ? $_POST['num11'] : '');
    $data[38]=(isset($_POST['num12']) ? $_POST['num12'] : '');
    $data[39]=(isset($_POST['num13']) ? $_POST['num13'] : '');
    $data[40]=(isset($_POST['num14']) ? $_POST['num14'] : '');
    $data[41]=(isset($_POST['num15']) ? $_POST['num15'] : '');
    $data[42]=(isset($_POST['num16']) ? $_POST['num16'] : '');
    $data[43]=(isset($_POST['num17']) ? $_POST['num17'] : '');
    $data[44]=(isset($_POST['num18']) ? $_POST['num18'] : '');
    $data[45]=(isset($_POST['num19']) ? $_POST['num19'] : '');
    $data[46]=(isset($_POST['num20']) ? $_POST['num20'] : '');
    $data[47]=(isset($_POST['num21']) ? $_POST['num21'] : '');
    $data[48]=(isset($_POST['num22']) ? $_POST['num22'] : '');
    $data[49]=(isset($_POST['num23']) ? $_POST['num23'] : '');
    $data[50]=(isset($_POST['num24']) ? $_POST['num24'] : '');
    $data[51]=(isset($_POST['num25']) ? $_POST['num25'] : '');
    $data[52]=(isset($_POST['test1']) ? $_POST['test1'] : '');
    $data[53]=(isset($_POST['test2']) ? $_POST['test2'] : '');
    $data[54]=(isset($_POST['test3']) ? $_POST['test3'] : '');
    $data[55]=(isset($_POST['test4']) ? $_POST['test4'] : '');
    $data[56]=(isset($_POST['test5']) ? $_POST['test5'] : '');
    $data[57]=(isset($_POST['test6']) ? $_POST['test6'] : '');
    $data[58]=(isset($_POST['test7']) ? $_POST['test7'] : '');
    $data[59]=(isset($_POST['test8']) ? $_POST['test8'] : '');
    $data[60]=(isset($_POST['test9']) ? $_POST['test9'] : '');
    $data[61]=(isset($_POST['test10']) ? $_POST['test10'] : '');
    $data[62]=(isset($_POST['test11']) ? $_POST['test11'] : '');
    $data[63]=(isset($_POST['test12']) ? $_POST['test12'] : '');
    $data[64]=(isset($_POST['test13']) ? $_POST['test13'] : '');
    $data[65]=(isset($_POST['test14']) ? $_POST['test14'] : '');
    $data[66]=(isset($_POST['test15']) ? $_POST['test15'] : '');
    $data[67]=(isset($_POST['test16']) ? $_POST['test16'] : '');
    $data[68]=(isset($_POST['test17']) ? $_POST['test17'] : '');
    $data[69]=(isset($_POST['test18']) ? $_POST['test18'] : '');
    $data[70]=(isset($_POST['test19']) ? $_POST['test19'] : '');
    $data[71]=(isset($_POST['test20']) ? $_POST['test20'] : '');
    $data[72]=(isset($_POST['test21']) ? $_POST['test21'] : '');
    $data[73]=(isset($_POST['test22']) ? $_POST['test22'] : '');
    $data[74]=(isset($_POST['test23']) ? $_POST['test23'] : '');
    $data[75]=(isset($_POST['test24']) ? $_POST['test24'] : '');
    $data[76]=(isset($_POST['test25']) ? $_POST['test25'] : '');
    $data[77]=(isset($_POST['date26']) ? $_POST['date26'] : '');
    $data[78]=(isset($_POST['num26']) ? $_POST['num26'] : '');
    $data[79]=(isset($_POST['test26']) ? $_POST['test26'] : '');
    return $data;
}
$immun = new table();

//search
if(isset($_POST['search'])){
    $info=getData();
    $search_Query="SELECT * FROM childdata WHERE id = '$info[0]'";
    $search_Result=$immun->featuredLoad($dbObj,$search_Query);
        if($search_Result){
                if(mysqli_num_rows($search_Result)){
                    while($row = mysqli_fetch_array($search_Result)){
                        $id=$row['id'];
                        $bcg=$row['bcg'];
                        $date1=$row['date1'];
                        $date2=$row['date2'];
                        $date3=$row['date3'];
                        $date4=$row['date4'];
                        $date5=$row['date5'];
                        $date6=$row['date6'];
                        $date7=$row['date7'];
                        $date8=$row['date8'];
                        $date9=$row['date9'];
                        $date10=$row['date10'];
                        $date11=$row['date11'];
                        $date12=$row['date12'];
                        $date13=$row['date13'];
                        $date14=$row['date14'];
                        $date15=$row['date15'];
                        $date16=$row['date16'];
                        $date17=$row['date17'];
                        $date18=$row['date18'];
                        $date19=$row['date19'];
                        $date20=$row['date20'];
                        $date21=$row['date21'];
                        $date22=$row['date22'];
                        $date23=$row['date23'];
                        $date24=$row['date24'];
                        $date25=$row['date25'];
                        $date26=$row['date26'];
                        $num1=$row['num1'];
                        $num2=$row['num2'];
                        $num3=$row['num3'];
                        $num4=$row['num4'];
                        $num5=$row['num5'];
                        $num6=$row['num6'];
                        $num7=$row['num7'];
                        $num8=$row['num8'];
                        $num9=$row['num9'];
                        $num10=$row['num10'];
                        $num11=$row['num11'];
                        $num12=$row['num12'];
                        $num13=$row['num13'];
                        $num14=$row['num14'];
                        $num15=$row['num15'];
                        $num16=$row['num16'];
                        $num17=$row['num17'];
                        $num18=$row['num18'];
                        $num19=$row['num19'];
                        $num20=$row['num20'];
                        $num21=$row['num21'];
                        $num22=$row['num22'];
                        $num23=$row['num23'];
                        $num24=$row['num24'];
                        $num25=$row['num25'];
                        $num26=$row['num26'];
                        $test1=$row['test1'];
                        $test2=$row['test2'];
                        $test3=$row['test3'];
                        $test4=$row['test4'];
                        $test5=$row['test5'];
                        $test6=$row['test6'];
                        $test7=$row['test7'];
                        $test8=$row['test8'];
                        $test9=$row['test9'];
                        $test10=$row['test10'];
                        $test11=$row['test11'];
                        $test12=$row['test12'];
                        $test13=$row['test13'];
                        $test14=$row['test14'];
                        $test15=$row['test15'];
                        $test16=$row['test16'];
                        $test17=$row['test17'];
                        $test18=$row['test18'];
                        $test19=$row['test19'];
                        $test20=$row['test20'];
                        $test21=$row['test21'];
                        $test22=$row['test22'];
                        $test23=$row['test23'];
                        $test24=$row['test24'];
                        $test25=$row['test25'];
                        $test26=$row['test26'];
                        
                    }
                }else{
                    echo '<script type="text/javascript">';
                    echo 'setTimeout(function () { swal("Error!","Please enter valid patient id","error");';
                    echo '}, 200);</script>';
                }
        }else{
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("Error!","Result error!","error");';
            echo '}, 200);</script>';
        }
    }
    
                    
 //update
 if(isset($_POST['update'])){
    $info=getData();
    $update_Query="UPDATE `childdata` SET `id`='$info[0]',`bcg`='$info[1]',`date1`='$info[2]',`date2`='$info[3]',`date3`='$info[4]',`date4`='$info[5]',`date5`='$info[6]',`date6`='$info[7]',
    `date7`='$info[8]',`date8`='$info[9]',`date9`='$info[10]',`date10`='$info[11]',`date11`='$info[12]',`date12`='$info[13]',`date13`='$info[14]',`date14`='$info[15]',`date15`='$info[16]',`date16`='$info[17]',
    `date17`='$info[18]',`date18`='$info[19]',`date19`='$info[20]',`date20`='$info[21]',`date21`='$info[22]',`date22`='$info[23]',`date23`='$info[24]',`date24`='$info[25]',`date25`='$info[26]',`num1`='$info[27]',
    `num2`='$info[28]',`num3`='$info[29]',`num4`='$info[30]',`num5`='$info[31]',`num6`='$info[32]',`num7`='$info[33]',`num8`='$info[34]',`num9`='$info[35]',`num10`='$info[36]',`num11`='$info[37]',`num12`='$info[38]',
    `num13`='$info[39]',`num14`='$info[40]',`num15`='$info[41]',`num16`='$info[42]',`num17`='$info[43]',`num18`='$info[44]',`num19`='$info[45]',`num20`='$info[46]',`num21`='$info[47]',`num22`='$info[48]',`num23`='$info[49]',
    `num24`='$info[50]',`num25`='$info[51]',`test1`='$info[52]',`test2`='$info[53]',`test3`='$info[54]',
    `test4`='$info[55]',`test5`='$info[56]',`test6`='$info[57]',`test7`='$info[58]',`test8`='$info[59]',`test9`='$info[60]',
    `test10`='$info[61]',`test11`='$info[62]',`test12`='$info[63]',`test13`='$info[64]',`test14`='$info[65]',`test15`='$info[66]',`test16`='$info[67]',`test17`='$info[68]',`test18`='$info[69]',`test19`='$info[70]',`test20`='$info[71]',
    `test21`='$info[72]',`test22`='$info[73]',`test23`='$info[74]',`test24`='$info[75]',`test25`='$info[76]',`date26`='$info[77]',`num26`='$info[78]',`test26`='$info[79]' WHERE  id='$info[0]'";
    
    
try{
        $update_Result=$immun->featuredLoad($dbObj,$update_Query);
        if($update_Result){
                                echo '<script type="text/javascript">';
                                echo 'setTimeout(function () { swal("Success!","Data updated successfully!","success");';
                                echo '}, 200);</script>';
        }
    }catch(Exception $ex){
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal("Error!","Result error!","error");';
        echo '}, 200);</script>';    }
    }

    
 
?>
