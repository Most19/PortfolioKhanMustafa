<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/detailProjet.css">
    <link rel="stylesheet" href="../styles/portfolio.css">
    <link rel="stylesheet" href="../styles/index.css">
    <title>PortFolio - Projet Service Info PRO</title>
</head>
<body>
    <header class="header"> 
        <h1><a href="index.html">Projet Portfolio</a></h1>
        <ul>
            <li><a href="../index.html">Accueil</a></li> 
            <li><a href="../projets.php">Projets</a></li>
            <li><a href="../competences.php">Competences</a></li> 
            <li><a href="../stage.php">Stage</a></li> 
        </ul>
    </header>

    <div class="content">

        <div class="info">
            <a href="../index.html">
                <img src="../images/portfolio.png">
            </a>
        </div>

        <div class="description">
            <h1>Description</h1>
            <p>Le projet Portfolio est un projet </p> 
            <p>L'objectif de ce projet était de développer un nouveau site web fonctionnel pour l'entreprise.</p>
            <p>Le site contient des informations sur l'entreprise ainsi que sur ses activités.</p>
            
            <div class="buttons">
                <a href="../index.html">Visiter le site</a>
                <a href="../zipProjet/Portfolio.zip" download>Télécharger le Projet</a>
            </div>
           
        </div>

        <div class="competences">
            <h1>Competences mises en œuvre</h1>

            <?php
                require('../codePhp/classCompetence.php');
                require('../codePhp/classLang.php');

                $selectedCompetences = [0, 1, 2, 4, 5];
                $selectedLangages = [0, 1, 2, 3]; 

                echo '<table class=" table-competence">
                        <thead>
                            <tr>
                                <th>Competences</th>
                                <th>Langages</th>
                            </tr>
                        </thead>';

                for ($i = 0; $i < count($selectedCompetences); $i++) {
                    $competenceIndex = $selectedCompetences[$i];
                    $competence = isset($competences[$competenceIndex]) ? $competences[$competenceIndex]->competence : '';

                    $langageIndex = $selectedLangages[$i];
                    $langage = isset($langages[$langageIndex]) ? $langages[$langageIndex]->langage : '';

                    echo '<tbody>
                            <tr>
                                <td class="competence-cell">' . $competence . '</td>
                                <td class="langage-cell">' . $langage . '</td>
                            </tr>
                        </tbody>';
                }

                echo '</table>';
            ?>
        </div>

    </div>
</body>
</html>