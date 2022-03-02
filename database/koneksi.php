<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "akademik";

    $koneksi = mysqli_connect($host,$user,$password);

    if ($koneksi) {
        $coba = mysqli_select_db($database);
        if($coba){
            echo "";
        }else {
            echo mysqli_connect_error();
        }
    }
?>