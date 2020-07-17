<?php
    $conn = mysqli_connect('localhost', 'agharayee', 'Xv6a_jsu3(jV~0UQ', 'emaagharaye');

    if(!$conn){
        echo 'Not Connected to server';
    }

    if (!mysqli_select_db($conn, 'id14358097_emaagharaye')){
        echo 'Database not Selected';
    }

    $PersonEmail = $_POST['PersonEmail'];

    $sql = "INSERT INTO email (Email) VALUES ('$PersonEmail')";

    if(!mysqli_query ($conn, $sql)){
        echo 'Email not saved';
    }

    else{
        echo 'Email saved successfully';
    }

    header("refresh:2, url=index.html");
?>