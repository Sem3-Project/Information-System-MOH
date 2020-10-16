<?php
Class Selection{
    function myFunction($id){
        if(strlen($id)==10 or strlen($id)==12) {
            echo("<p style='font-size: 17px;border:1px solid black; position:absolute; height: 30px; width:25%;transform: translate(147%,550px); border-radius:5%; text-align: center;background-color:rgb(8, 184, 125);'>"."<a href='Client_pdf.php' style='color:black;'>මාතෘ සායනික වාර්තාව</a>"."</p>");
        
        }
        else{
            echo("<p style='font-size: 17px;border:1px solid black; position:absolute; height: 30px; width:25%;transform: translate(147%,550px); border-radius:5%; text-align: center;background-color:rgb(8, 184, 125);'>"."<a href='Client.php' style='color:black;'>ළමා සායනික වාර්තාව</a>"."</p>");
        }}
}




?>
