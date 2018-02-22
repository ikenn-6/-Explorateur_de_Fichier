<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">
        <script src="http://d3js.org/d3.v3.min.js" language="JavaScript"></script>
        <script type="text/javascript" src="jquery-3.2.1.js"></script>
        <link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.css"> 
        <link rel="stylesheet" type="text/css" href="style.css">
        <title></title>

    </head>

    <body class="container">

        <header>
            <nav>
                <h1>Etat du Raspberry</h1>
            </nav>
        </header>

        <div id='heure'></div>

        <div>
            <h3>Espace disque</h3>
            <div id='disk'></div><br>

            <h3>Mémoire vive</h3>
            <div id='process'></div>
            <svg id="fillgauge1" width="25%" height="250"></svg>
            <h6>Evolution de la mémoire vive utilisée</h6>
            <svg id="fillgauge2" width="19%" height="200"></svg>
            <h6>Mémoire totale</h6>
            <svg id="fillgauge4" width="19%" height="200"></svg>
            <h6>Mémoire utilisée</h6><br>

            <h3>Mon OS</h3>
            <div id='distrib'></div><br>

            <h3>Mon dossier</h3>
            <div id='dossier'></div><br>
        </div>

                <script type="text/javascript" src="javascript.js"></script>

        
    </body>

</html>
