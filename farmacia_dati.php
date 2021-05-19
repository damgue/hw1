<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }

    $conn = mysqli_connect("localhost", "root", "", "hw1");
    if(!$conn){
        die('Impossibile effettuare la connessione:' .mysql_error());
    }

    if(isset($_POST["text"])){
        $txt = $_POST["text"];
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL,"https://api.fda.gov/drug/event.json?search=patient.drug.drugindication=".$txt);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
        $result = curl_exec($curl);
        curl_close($curl);
        echo $result;
    }
?>