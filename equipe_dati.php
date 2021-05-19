<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }
        $conn = mysqli_connect("localhost", "root", "", "hw1");
        $elementi = array();
        $query = "SELECT cognome FROM medico ORDER BY cognome";
        $res = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($res)){
            $elementi[]=$row;
        }
        mysqli_free_result($res);
        mysqli_close($conn);
        echo json_encode($elementi);   
?>