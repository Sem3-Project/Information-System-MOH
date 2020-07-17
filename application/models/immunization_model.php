<?php
require '../../framework/libraries/Model.php';
require '../models/table.php';

$dbObj = Model::getInstance();
$dbObj->connect('localhost', 'root', '', 'moh');
session_start();

$patient_id='';
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
$text1='';
$text2='';
$text3='';
$text4='';
$text5='';
$text6='';
$text7='';
$text8='';
$text9='';
$text10='';
$text11='';
$text12='';
$text13='';
$text14='';
$text15='';
$text16='';
$text17='';
$text18='';
$text19='';
$text20='';
$text21='';
$text22='';
$text23='';
$text24='';
$text25='';

//get data from the form
function getData(){
    $data=array();
    $data[0]=(isset($_POST['patient_id']) ? $_POST['patient_id'] : '');
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
    $data[52]=(isset($_POST['text1']) ? $_POST['text1'] : '');
    $data[53]=(isset($_POST['text2']) ? $_POST['text1'] : '');
    $data[54]=(isset($_POST['text3']) ? $_POST['text1'] : '');
    $data[55]=(isset($_POST['text4']) ? $_POST['text1'] : '');
    $data[55]=(isset($_POST['text5']) ? $_POST['text1'] : '');
    $data[57]=(isset($_POST['text6']) ? $_POST['text1'] : '');
    $data[58]=(isset($_POST['text7']) ? $_POST['text1'] : '');
    $data[59]=(isset($_POST['text8']) ? $_POST['text1'] : '');
    $data[60]=(isset($_POST['text9']) ? $_POST['text1'] : '');
    $data[61]=(isset($_POST['text10']) ? $_POST['text1'] : '');
    $data[62]=(isset($_POST['text11']) ? $_POST['text1'] : '');
    $data[63]=(isset($_POST['text12']) ? $_POST['text1'] : '');
    $data[64]=(isset($_POST['text13']) ? $_POST['text1'] : '');
    $data[65]=(isset($_POST['text14']) ? $_POST['text1'] : '');
    $data[66]=(isset($_POST['text15']) ? $_POST['text1'] : '');
    $data[67]=(isset($_POST['text16']) ? $_POST['text1'] : '');
    $data[68]=(isset($_POST['text17']) ? $_POST['text1'] : '');
    $data[69]=(isset($_POST['text18']) ? $_POST['text1'] : '');
    $data[70]=(isset($_POST['text19']) ? $_POST['text1'] : '');
    $data[71]=(isset($_POST['text20']) ? $_POST['text1'] : '');
    $data[72]=(isset($_POST['text21']) ? $_POST['text1'] : '');
    $data[73]=(isset($_POST['text22']) ? $_POST['text1'] : '');
    $data[74]=(isset($_POST['text23']) ? $_POST['text1'] : '');
    $data[75]=(isset($_POST['text24']) ? $_POST['text1'] : '');
    $data[76]=(isset($_POST['text25']) ? $_POST['text1'] : '');
    return $data;
}
$immun = new table();

//search
if(isset($_POST['Search'])){
    $info=getData();
    $search_query="SELECT * FROM childdata WHERE patient_id='$info[0]'";
    $search_result=$immun->featuredLoad($dbObj,$search_query);
        if($search_result){
            if($search_result){
                if(mysqli_num_rows($search_result)){
                    while($row = mysqli_fetch_array($search_result)){
                        $patient_id=$row['patient_id'];
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
                    }
                }else{
                    echo("no data are available");
                }
        }else{
            echo("result error");
        }
    }
    $search_query1="SELECT * FROM childdata3 WHERE patient_id='$info[0]'";
    $search_result1=$immun->featuredLoad($dbObj,$search_query1);
        if($search_result1){
            if($search_result1){
                if(mysqli_num_rows($search_result1)){
                    while($row = mysqli_fetch_array($search_result1)){
                        $patient_id=$row['patient_id'];
                        $text1=$row['text1'];
                        $text2=$row['text2'];
                        $text3=$row['text3'];
                        $text4=$row['text4'];
                        $text5=$row['text5'];
                        $text6=$row['text6'];
                        $text7=$row['text7'];
                        $text8=$row['text8'];
                        $text9=$row['text9'];
                        $text10=$row['text10'];
                        $text11=$row['text11'];
                        $text12=$row['text12'];
                        $text13=$row['text13'];
                        $text14=$row['text14'];
                        $text15=$row['text15'];
                        $text16=$row['text16'];
                        $text17=$row['text17'];
                        $text18=$row['text18'];
                        $text19=$row['text19'];
                        $text20=$row['text20'];
                        $text21=$row['text21'];
                        $text22=$row['text22'];
                        $text23=$row['text23'];
                        $text24=$row['text24'];
                        $text25=$row['text25'];
                    }
                }else{
                    echo(" no data are available");
                }
        }else{
            echo("result error");
        }
    }
                        


}
 //update
 if(isset($_POST['Update'])){
    $info=getData();
    $update_query="UPDATE `childdata` SET `patient_id`='$info[0]',`bcg`='$info[1]',`date1`='$info[2]',`date2`='$info[3]',`date3`='$info[4]',`date4`='$info[5]',`date5`='$info[6]',`date6`='$info[7]',
    `date7`='$info[8]',`date8`='$info[9]',`date9`='$info[10]',`date10`='$info[11]',`date11`='$info[12]',`date12`='$info[13]',`date13`='$info[14]',`date14`='$info[15]',`date15`='$info[16]',`date16`='$info[17]',
    `date17`='$info[18]',`date18`='$info[19]',`date19`='$info[20]',`date20`='$info[21]',`date21`='$info[22]',`date22`='$info[23]',`date23`='$info[24]',`date24`='$info[25]',`date25`='$info[26]',`num1`='$info[27]',
    `num2`='$info[28]',`num3`='$info[29]',`num4`='$info[30]',`num5`='$info[31]',`num6`='$info[32]',`num7`='$info[33]',`num8`='$info[34]',`num9`='$info[35]',`num10`='$info[36]',`num11`='$info[37]',`num12`='$info[38]',
    `num13`='$info[39]',`num14`='$info[40]',`num15`='$info[41]',`num16`='$info[42]',`num17`='$info[43]',`num18`='$info[44]',`num19`='$info[45]',`num20`='$info[46]',`num21`='$info[47]',`num22`='$info[48]',`num23`='$info[49]',
    `num24`='$info[50]',`num25`='$info[51]' WHERE  patient_id='$info[0]'";
    
    
try{
        $pdate_result=$immun->featuredLoad($dbObj,$update_query);
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

    
 if(isset($_POST['Update'])){
    $info=getData();

    $update_query= "UPDATE `childdata3` SET `patient_id`='$info[0]',`text1`='$info[52]',`text2`='$info[53]',`text3`='$info[54]',`text4`='$info[55]',`text5`='$info[56]',`text6`='$info[57]',`text7`='$info[58]',`text8`='$info[59]',`text9`='$info[60]',
    `text10`='$info[61]',`text11`='$info[62]',`text12`='$info[63]',`text13`='$info[64]',`text14`='$info[65]',`text15`='$info[66]',`text16`='$info[67]',`text17`='$info[68]',`text18`='$info[69]',`text19`='$info[70]',`text20`='$info[71]',
    `text21`='$info[72]',`text22`='$info[73]',`text23`='$info[74]',`text24`='$info[75]',`text25`='$info[76]' WHERE patient_id='$info[0]'";
                        

                     try{
                            $pdate_result=$immun->featuredLoad($dbObj,$update_query);
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