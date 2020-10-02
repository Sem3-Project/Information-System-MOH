<?php
require '../controllers/login.php';

class AdminOPDate{
   var $id="";
   var $date1="";
   var $date2="";

   function AdminOPDate($id,$date1,$date2){
        $this->id=$id;
        $this->date1=$date1;
        $this->date2=$date2;
   }
}

class AdminOPDateFactory{
    function &create(&$record){
        return new AdminOPDate(
            $record['id'],
            $record['date1'],
            $record['date2']
        );
    }
}

class DB{
  
    function DB($dbObj){
       
        $dbObj = Model::getInstance();
        $dbObj->connect('localhost', 'root', '', 'moh');
       
    }

   

   static function &queryArray($update_query, &$factory, $dbObj){
        $adminod = new table();
      
      $pdate_result=$adminod->featuredLoad($dbObj,$update_query);

       
       $ret = array();
       if($pdate_result){
           while($record=mysqli_fetch_array($pdate_result)){
               $ret[] = $factory->create($record);
           }
           return $ret;
       }

    }
}

class OptionalDB{
    static function &findById($date1){
        return DB::queryArray("Select * from optionaldate", new AdminOPDateFactory(), Model::getInstance());
        new AdminOPDateFactory();
    }
}

if ($arr = OptionalDB::findById("C992345679")){
    foreach($arr as $person){
        echo $person->date1.''.$person->date2. '';
    }
}
//============================

//get data from the form
/*function getData(){
    $data=array();
    $data[0]=$_POST['id'];
    $data[1]=$_POST['date1'];
    $data[2]=$_POST['date2'];
    return $data;
}



if(isset($_POST['Insert'])){
    $info=getData();
    $update_query="UPDATE `optionaldate` SET `id`='$info[0]',`date1`='$info[1]',`date2`='$info[2]'    
    WHERE id='$info[0]'";

    try{
        $pdate_result=$adminod->featuredLoad($dbObj,$update_query);
      
    }catch(Exception $ex){
        echo("<p style='color:black; font-size: 30px; background-color:white;'>"."error in update".$ex->getMessage()."</p>");
    }
}
*/
?>