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
        <title>Prenota una visita con i nostri specialsiti</title>
        <link rel="stylesheet" href="prenota_.css"/>
        <script src='prenota_scelta_medico.js' defer></script>
        <script src='prenota_visita_data.js' defer></script>
        <script src='prenota_generale.js' defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>        
        <header>
        <div id="nome">Prenota una<br>visita con uno dei<br>nostri medici</div>
        
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

    <section class="gestione">
        <form name="MioForm" method='POST'>
            <label>Seleziona un medico: <select name="medico" id="medico"></select></label><br>
            <label>Seleziona una data in cui desideri effettuare la visita: </label><input type = "text" size=12 name = "dato">
            <p><label>&nbsp;<input type='submit' id="invia"></label></p>
        </form>
        <span id = "messaggio" class="hidden"></span><br>
        <span><a href="profilo.php">Clicca qui</a> per vedere le tue visite prenotate.</span>
            <div id="qui"><a href="javascript:vai()"><img src="immaC.jpg"></a></div>
        
    </section>

        <footer>
            <div id="col">
                <div class="item">
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
                <div class="item">
                    <div id="dati">
                        <p>Filadelfo Damiano Guerriera</br>
                            Matricola: O46001644</p>
                        <img src="https://thumbs.dreamstime.com/b/icona-dell-uomo-progettazione-della-persona-grafico-di-vettore-73697014.jpg"/>
                    </div>
                </div>
            </div>
        </footer>
    </article>
    </body>
</html>