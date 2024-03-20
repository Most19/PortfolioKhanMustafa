<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/competences.css">
    <link rel="stylesheet" href="styles/index.css">
    
    <title>PortFolio - Competences</title>
</head>
<body>

    <header class="header"> 
        <h1><a href="index.html">Mes Competences</a></h1>
        
        <ul>
            <li><a href="index.html">Accueil</a></li> 
            <li><a href="projets.php">Projets</a></li>
            <li><a href="competences.php">Competences</a></li> 
            <li><a href="stage.php">Stage</a></li> 
        </ul>
    </header>
    
    <div class="content">
        <div class="content-box">
            <h1>Mes Competences</h1>

            <?php

                require('codePhp/classCompetence.php');
                require('codePhp/classLang.php');
                require('codePhp/classLogiciel.php');
                
                // Opening table tag
                echo '<table class="table-competence">
                <tr>
                    <th>Competences</th>
                    <th>Languages</th>
                    <th>Logiciels</th>
                </tr>';

                // Table body
                foreach ($competences as $index => $competence) {
                echo '<tr>';
                        echo '<td class="competences">' . htmlspecialchars($competence->competence) . '</td>';
                        
                    if (isset($langages[$index])) {
                        echo '<td class="langages">' . htmlspecialchars($langages[$index]->langage) . '</td>';
                    } else {
                        echo '<td></td>';
                    }

                    if (isset($logiciels[$index])) {
                        echo '<td class="logiciels">' . htmlspecialchars($logiciels[$index]->logiciel) . '</td>';
                    } else {
                        echo '<td></td>';
                    }

                echo '</tr>';
                }

                // Closing table tag
                echo '</table>';
            ?>

        </div>
    </div>
    
</body>
</html>
