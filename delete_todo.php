<?php
    include('conn.php');

    $id = $_GET['id'];
    
    //Execute Query
    $query = "DELETE FROM list WHERE id=$id";
    mysqli_query($con, $query);

    //Return to index.php after running the script
    header('location: index.php');

    //Close connection
    mysqli_close($con);

?>