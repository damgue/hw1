<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: login.php");
        exit;
    }
    ?>
<html>
    <head>
    <title>Farmacia</title>
    <link rel="stylesheet" href="farmacia_.css"/> 
    <script src="farmacia.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>        
        <header>
        <div id="nome">Farmacia</div>
        
        <nav>
            <div id="links">
                <a href="home.php">Home</a>
                <a href="servizi.php">Servizi</a>
                <a href="farmacia.php">Farmacia</a>
                <a href="equipe.php">Equipe</a> 
                <a href="profilo.php">Profilo</a>
                <a href='logout.php'>Esci</a>
            </div>
        </nav>
    </header>
    
        <form name='form' id="form" method="POST">
            <p><label><input type='text' name='text' id="text" placeholder="Inserisci il tuo sintomo... Es. Fever"></label></p>
            <p><label>&nbsp;<input type='submit'></label></p>
        </form>

    <section>
        <div class="contenitore"></div>
    </section>

    <footer>
        <div id="col">
            <div class="item_footer">
                <div id="dati">
                    <ul>
                    <li><address>Morgagni - Catania</address></li>
                    <li><address>Cannizzaro - Catania</address></li>
                    <li><address>San Raffaele - Milano</address></li>
                    <li><address>Humanitas - Milano</address></li>
                    <li><address>Valle Giulia - Roma</address></li>
                </ul>
                </div>
            </div>
            <div class="item_footer">
                <div id="dati">
                    <p>Filadelfo Damiano Guerriera</br>
                        Matricola: O46001644</p>
                    <img src="https://thumbs.dreamstime.com/b/icona-dell-uomo-progettazione-della-persona-grafico-di-vettore-73697014.jpg"/>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>