<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }
        $conn = mysqli_connect("localhost", "root", "", "hw1");
        $elementi = array();
        $servizo = $_GET['text'];
        $res = mysqli_query($conn, "SELECT * FROM servizi where nome=\"$servizo\"");
        while($row = mysqli_fetch_assoc($res)){
            $elementi[]=$row;
        }
        mysqli_free_result($res);
        mysqli_close($conn);
        echo json_encode($elementi);   
?>