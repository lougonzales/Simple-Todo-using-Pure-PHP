<?php
    $mysql_servername = "localhost";
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_database = "todo";
    $prefix = "";
    $con = new mysqli($mysql_servername, $mysql_username, $mysql_password) or die("Could not connect database");
    mysqli_select_db($con, $mysql_database) or die("Could not select databases");
?>