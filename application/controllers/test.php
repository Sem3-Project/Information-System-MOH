<?php 
//require_once ("class/DBController.php");
require '../../framework/libraries/Model.php';
class Student
{
    private $db_handle;
    
    function __construct() {
        $this->db_handle = new Model();
    }
    
    function addStudent($name, $roll_number, $dob, $class) {
        $query = "INSERT INTO tbl_student (name,roll_number,dob,class) VALUES (?, ?, ?, ?)";
        $paramType = "siss";
        $paramValue = array(
            $name,
            $roll_number,
            $dob,
            $class
        );
        
        $insertId = $this->db_handle->insert($query, $paramType, $paramValue);
        return $insertId;
    }
    
    function editStudent($name, $roll_number, $dob, $class, $student_id) {
        $query = "UPDATE tbl_student SET name = ?,roll_number = ?,dob = ?,class = ? WHERE id = ?";
        $paramType = "sissi";
        $paramValue = array(
            $name,
            $roll_number,
            $dob,
            $class,
            $student_id
        );
        
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function deleteStudent($student_id) {
        $query = "DELETE FROM tbl_student WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $student_id
        );
        $this->db_handle->update($query, $paramType, $paramValue);
    }
    
    function getStudentById($student_id) {
        $query = "SELECT * FROM tbl_student WHERE id = ?";
        $paramType = "i";
        $paramValue = array(
            $student_id
        );
        
        $result = $this->db_handle->runQuery($query, $paramType, $paramValue);
        return $result;
    }
    
    function getAllStudent() {
        $sql = "SELECT * FROM tbl_student";
        $result = $this->db_handle->runBaseQuery($sql);
        return $result;
    }
}
?>


<?php
require '../../framework/libraries/Model.php';
require '../controllers/tableNew.php';

class DB_con
{
    private $inves;
    private $id;
    function __construct($id)
    {
        $this->id=$id;
       // $this->db_handle = new Model();
        $dbObj = Model::getInstance();
        $dbObj->connect('localhost', 'root', '', 'moh');
        $inves = new table();
    // $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    // $this->dbh=$con;
    }

//Data read Function
public function fetchdata($inves,$id,$dbObj)
	{
        $search_Query = "SELECT * FROM investigations WHERE id = '$id'";
        $search_Result = $inves->featuredLoad($dbObj,$search_Query);
        return $search_Result;
	// $result=mysqli_query($this->dbh,"select * from tblusers");
	// return $result;
	}

//Data updation Function
public function update($fname,$lname,$emailid,$contactno,$address,$userid)
	{
	$updaterecord=mysqli_query($this->dbh,"update  tblusers set FirstName='$fname',LastName='$lname',EmailId='$emailid',ContactNumber='$contactno',Address='$address' where id='$userid' ");
	return $updaterecord;
    }
}
    



    //Data Insertion Function
	// public function insert($fname,$lname,$emailid,$contactno,$address)
	// {
      
	// $ret=mysqli_query($this->dbh,"insert into tblusers(FirstName,LastName,EmailId,ContactNumber,Address) values('$fname','$lname','$emailid','$contactno','$address')");
	// return $ret;
	// }
//Data Deletion function Function
// public function delete($rid)
// 	{
// 	$deleterecord=mysqli_query($this->dbh,"delete from tblusers where id=$rid");
// 	return $deleterecord;
// 	}
// }
?>