<?php
    session_start();
    if(isset($_SESSION["username"]))
    {
        header("Location: home.php");
        exit;
    }
    
    if(!empty($_POST["username"]) && !empty($_POST["password"])){

        $conn = mysqli_connect("localhost", "root", "", "hw1");
        
        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        
        $query = "SELECT username, password FROM users WHERE username = '$username'";
        $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
        
        if(mysqli_num_rows($res) > 0){

            $entry = mysqli_fetch_assoc($res);
            if(password_verify($_POST['password'], $entry['password'])){
                $_SESSION["username"] = $_POST['username'];
                header("Location: home.php");
                mysqli_free_result($res);
                mysqli_close($conn);
                exit;
            } 
            else $errore = true;
        }
    }
?>

<html>
    <head>
        <title>Login</title>
        <link rel='stylesheet' href='login.css'>
        <script src='login.js' defer></script>
    </head>
    <body>
        <header>
            <main id='blocco'>
                <?php
                if(isset($errore)){
                    echo "<p class='errore'>Credenziali non valide.</p>";
                }
                ?>
                <form name='form' method='post'>
                    <p><label>Username <input type='text' name='username'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>
                    <p><label>&nbsp;<input type='submit'></label></p>
                    <label>&nbsp;<p id="indirizzamento">Se non sei registrato, <a href='signup.php'>clicca qui</a></p></label>
                </form>
                <div id='avviso' class='hidden'>Compilare tutti i campi.</div>
            </main>        
        </header>
    </body>
</html>