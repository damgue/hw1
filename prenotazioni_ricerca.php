<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }  

    $conn = mysqli_connect("localhost", "root", "", "hw1");
    $prenotato = $_GET["nome"];
    $user = $_SESSION['username'];
    mysqli_query($conn, "INSERT INTO prenotazioni SELECT * FROM servizi s, users u
    WHERE u.username ='".$user."' and s.nome ='".$prenotato."'");
    mysqli_close($conn);
    echo $prenotato;
?>