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
        <title>Profilo</title>
        <link rel="stylesheet" href="profilo_.css"/> 
        <script src="profilo.js" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>        
        <header>
        <div id="nome">Profilo utente</div>
        
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
    <article id="ServiziTotali">      
        <section>
           <div class="case">
               <h1>Servizi prenotati</h1>
               <ul></ul>
           </div>
           <div class="visitePrenotate">
               <h1>Visite prenotate</h1>
               <ul class="visite"></ul>
           </div>
        </section>
    </article>
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