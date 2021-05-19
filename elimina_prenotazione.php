<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }
        $conn = mysqli_connect("localhost", "root", "", "hw1");
        $id = mysqli_real_escape_string($conn, $_GET["id"]);
        mysqli_query($conn, "DELETE FROM prenotazioni WHERE id_servizio = '".$id."' and username = '".$_SESSION['username']."'");
        mysqli_close($conn); 
?>