<?php
    session_start();
    session_destroy();
    header("Location: pre_page.php");
    exit;

?>


