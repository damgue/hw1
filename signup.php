<?php
    session_start();
    if(isset($_SESSION["username"])) {
        header("Location: home.php");
        exit;
    }

    if(isset($_POST["nome"]) && isset($_POST['cognome']) && isset($_POST['eta']) && 
       isset($_POST['username']) && isset($_POST['password'])){
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $eta = $_POST["eta"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        
        if(strlen("$password")<6){
            $errore_password = true; 
        }

        if(isset($_POST["username"])){
            $conn = mysqli_connect("localhost", "root", "", "hw1");
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $query = "SELECT username FROM users where username=\"$username\"";
            $res = mysqli_query($conn, $query) or die("Errore: ".mysqli_error($conn));
            if (mysqli_num_rows($res) > 0)
                $errore_username = true;
            mysqli_free_result($res);
            mysqli_close($conn);
        }

        if(!isset($errore_username) && !isset($errore_password)){
        $conn = mysqli_connect("localhost", "root", "", "hw1");
        if(!$conn){
            die('Impossibile effettuare la connessione:' .mysql_error());
         }
        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
        $eta = $_POST['eta'];
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO users VALUES ('$nome', '$cognome', '$eta', '$username', '$hash')";
        $res = mysqli_query($conn, $query);
        mysqli_close($conn);
        $_SESSION["username"] = $username;
        header("Location: home.php");
        exit;
        }
    }
?>

<html>
    <head>
        <title>Registrati</title>
        <link rel='stylesheet' href='signup.css'>
        <script src='signup.js' defer></script>
    </head>
    <body>
        <header>
            <main id='blocco'>
                <form name='form' method='post'>
                    <p><label>Nome <input type='text' name='nome'></label></p>
                    <p><label>Cognome <input type='text' name='cognome'></label></p>
                    <p><label>Età <input type='text' name='eta'></label></p>
                    <p><label>Username <input type='text' name='username'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>
                    <p><label>&nbsp;<input type='submit'></label></p>
                    <label>&nbsp;<p id="indirizzamento">Se hai già un account, <a href='login.php'>clicca qui</a></p></label>
                </form>
                <div id='avviso' class='hidden'>Compilare tutti i campi.</div>
                <div id="errore">
                            <?php
                            if (isset($errore_password)){
                                echo "<span>La password deve essere di almeno</span><br>";
                                echo "<span>6 caratteri. Riprovare.</span><br>";
                            }  
                            if (isset($errore_username)) {
                                echo "<span>Username non disponibile</span><br>";
                            }
                            ?>
                    </div>
            </main>        
            
        </header>
    </body>
</html>
