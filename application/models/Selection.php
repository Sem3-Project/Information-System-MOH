<?php
Class Selection{
    function myFunction($id){
        if(strlen($id)==10) {
            echo("<p style='color:black; font-size: 30px; background-color:white;'>"."<a href='Client_pdf.php'>Mother's Report</a>"."</p>");
        
        }
        else{
            echo("<p style='color:black; font-size: 30px; background-color:white;'>"."<a href='Client.php'>Child's Report</a>"."</p>");
        }}
}




?>