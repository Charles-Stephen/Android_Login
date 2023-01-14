<?php
include("conn.php");


        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $email = $_POST["email"];
            $pass = $_POST["pass"];

             $sel = "SELECT * FROM `users` WHERE `emalil` = '$email' AND `pass` = '$pass'";
             $res = mysqli_query($conn, $sel);
             if(mysqli_num_rows($res)){
                 echo "User Already Exists";
             }
             else{
                echo "NO DATA FOUND";
             }
        }
        else{
            echo "no reuquest";
        }
    
?>