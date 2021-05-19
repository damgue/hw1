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
        <title>Homepage</title>
        <link rel="stylesheet" href="home_.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>        
        <header>
        <div id="nome"><?php echo $_SESSION["username"];?>, </br>benvenuto in </br>Cliniche MaterEtna</div>
        
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
    <section>
            <div id="scelta">Le nostre cliniche
                <a href="work_in_progress.php" id="cliniche" class="button">Catania</a>
                <a href="work_in_progress.php" id="cliniche" class="button">Milano</a>
                <a href="work_in_progress.php" id="cliniche" class="button">Roma</a>
            </div>
            <div id="row">
                <div class="item">
                    <div id="image">
                        <h1>Equipe medica</h1>
                        <img src="https://www.centromedicinsieme.it/multimedia/2016/11/specialisti.jpg"/>
                        <p>Professionisti a servizio della gente.</p>
                    </div>
                </div>
                <div class="item">
                    <div id="image">
                        <h1>Assistenza fornita</h1>
                        <img src="https://www.newsflash24.it/wp-content/uploads/2021/01/Tipi-di-cliniche-sanitarie-e-servizi-sanitari-offerti.jpg"/>
                        <p>I nostri operatori ti accompagneranno in tutta la tua degenza.</p>
                    </div>
                </div>
            </div>
            <div id="row">
                <div class="item">
                    <div id="image">
                        <h1>Laboratorio analisi</h1>
                    <img src="https://dnewpydm90vfx.cloudfront.net/wp-content/uploads/2019/09/GDPR-laboratorio-analisi-cliniche.jpg"/>
                    <p>Le nuove tecnologie utilizzate garantiscono l’accuratezza dei risultati.</p>
                    </div>
                </div>
                <div class="item">
                    <div id="image">
                        <h1>Centro Riabilitativo</h1>
                    <img src="https://www.progettosaluteforlimpopoli.it/wp-content/uploads/2019/02/09_Fisioterapia-Progetto-salute-Forlimpopoli.jpg"/>
                    <p>Tecniche poco invasive che ti faranno sentire bene.</p>
                    </div>
                </div>
            </div>
            <div id="row">
                <div class="item">
                    <div id="image">
                        <h1>Le strutture</h1>
                    <img src="https://www.bioedilprogetti.com/wp-content/uploads/2017/12/clinica-paideia-roma.jpg"/>
                    <p>Strutture realizzate con il massimo della tecnologia </br>per soddisfare tuti i vostri bisogni.</p>
                    </div>
                </div>
                <div class="item">
                    <div id="image">
                        <h1>Lavora con Noi</h1>
                    <img src="https://img.freepik.com/free-photo/two-confident-business-man-shaking-hands-during-meeting-office-success-dealing-greeting-partner-concept_1423-185.jpg?size=626&ext=jpg&ga=GA1.2.1416119577.1612310400"/>
                    <p>Entra a far parte del nostro Team.</p>
                    </div>
                </div>
            </div>
            <div>
                <p class="frasefinale">Scegli noi, scegli il meglio.</p>
            </div>
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