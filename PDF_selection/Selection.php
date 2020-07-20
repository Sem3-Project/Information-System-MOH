<?php
Class Selection{
    function myFunction($id){
        if(strlen($id)==10) {
            echo("<p style='color:black; font-size: 30px; background-color:white;'>"."<a href='../application/models/Client_pdf.php'>Mother's Report</a>"."</p>");
        
        }
        else{
            echo("<p style='color:black; font-size: 30px; background-color:white;'>"."<a href='../childReport/StateDesignPattern/Client.php'>Child's Report</a>"."</p>");
        }}
}




?>