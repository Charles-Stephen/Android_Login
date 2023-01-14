<?php
    include("conn.php");

    $sel = "SELECT * FROM `users` ";
    $res = mysqli_query($conn, $sel);

    while($row = mysqli_fetch_array($res)){
        $allusers[] = $row;
    }

    echo $showusers["users"] = json_encode($allusers);


?>