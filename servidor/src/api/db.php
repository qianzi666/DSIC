<?php
 
    $mysql = new mysqli(
        "localhost",
        "root",
        "",
        "proyecto_3a"
    );

    if($mysql->connect_error)
    {
        die("Failed to conection" . $mysql->connect_error);
    }

  