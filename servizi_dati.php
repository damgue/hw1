<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }
        $conn = mysqli_connect("localhost", "root", "", "hw1");
        $elementi = array();
        $res = mysqli_query($conn, "SELECT * FROM servizi");
        while($row = mysqli_fetch_assoc($res)){
            $elementi[]=$row;
        }
        mysqli_free_result($res);
        mysqli_close($conn);
        echo json_encode($elementi);   
?>