<?php
Class Selection{
    function myFunction($id){
        if(strlen($id)==10) {
            echo("<p style='font-size: 25px;border:1.5px solid black; height: 5%; width:50%;transform: translate(380px,650px); text-align: center;background-color:rgb(8, 184, 125);'>"."<a href='Client_pdf.php' style='color:white;'>Mother's Report</a>"."</p>");
        
        }
        else{
            echo("<p style='font-size: 25px;border:1.5px solid black; height: 5%; width:50%;transform: translate(380px,650px); text-align: center;background-color:rgb(8, 184, 125);'>"."<a href='Client.php' style='color:white;'>Child's Report</a>"."</p>");
        }}
}




?>