<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/projets.css">
    <link rel="stylesheet" href="styles/index.css">
    <title>PortFolio - Projets</title>
</head>
<body>
    <header class="header"> 
        <h1><a href="index.html">Mes Projets</a></h1>
        <ul>
            <li><a href="index.html">Accueil</a></li> 
            <li><a href="projets.php">Projets</a></li>
            <li><a href="competences.php">Competences</a></li> 
            <li><a href="stage.php">Stage</a></li> 
        </ul>
    </header>

    <div class="boxes">

        <?php
        require('codePhp/classProjet.php');

        foreach ($projects as $project) {
            $project->render();
        }
        ?>

    </div>

</body>
</html>
