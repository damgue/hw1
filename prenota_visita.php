<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }  

        $utente = $_SESSION['username'];
        $medico = $_POST['medico'];
        $data = strtotime($_POST['dato']);
        $newformat = date('Y-m-d', $data);        

        $conn = mysqli_connect("localhost", "root", "", "hw1");
        $medico = mysqli_real_escape_string($conn, $_POST['medico']);
        $newdata = mysqli_real_escape_string($conn, $_POST['dato']);
        $query = "INSERT INTO visita (paziente, medico, data_visita) VALUES (\"$utente\", \"$medico\", \"$newformat\");";
        $res = mysqli_query($conn, $query);
        mysqli_close($conn);
        echo $utente;
        echo $medico;
        echo $data;
    
?>