<?php
    include('conn.php');

    //Get post data
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $time = $_POST['time'];

    //Execute Query
    $query = "INSERT INTO list(title, description, time) VALUES('$title', '$desc', '$time')";
    mysqli_query($con, $query);

    //Return to index.php after running the script
    header('location: index.php');

    //Close connection
    mysqli_close($con);

?>