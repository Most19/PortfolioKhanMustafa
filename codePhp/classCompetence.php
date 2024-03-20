<?php

class Competences {
    public $competence;

    public function __construct($competence = "" ){
        $this->competence = $competence;
    }
}

$competences = [
    new Competences('B1-1 | Gérer le patrimoine informatique'),
    new Competences('B1-2 | Répondre aux incidents et aux demandes d’assistance et d’évolution'),
    new Competences('B1-3 | Développer la présence en ligne de l’organisation'),
    new Competences('B1-4 | Travailler en mode projet'),
    new Competences('B1-5 | Mettre à disposition des utilisateurs un service informatique'),
    new Competences('B1-6 | Organiser son développement professionnel'),
    new Competences('B2R-1 | Concevoir une solution d’infrastructure réseau'),
    new Competences('B2R-2 | Installer, tester et déployer une solution d’infrastructure réseau'),
    new Competences('B2R-3 | Exploiter, dépanner et superviser une solution d’infrastructure réseau'),
    new Competences('B2D-1 | Concevoir et développer une solution applicative'),
    new Competences('B2D-2 | Assurer la maintenance corrective ou évolutive d’une solution applicative'),
    new Competences('B2D-3 | Gérer les données'),
    new Competences('B3R-1 | Protéger les données à caractère personnel'),
    new Competences('B3R-2 | Préserver l\'identité numérique de l’organisation'),
    new Competences('B3R-3 | Sécuriser les équipements et les usages des utilisateurs'),
    new Competences('B3R-4 | Garantir la disponibilité, l’intégrité et la confidentialité des services informatiques et des données de l’organisation face à des cyberattaques'),
    new Competences('B3R-5 | Assurer la cybersécurité d’une infrastructure réseau, d’un système, d’un service'),
    new Competences('B3D-1 | Cybersécurité des services informatiques'),
    new Competences('B3D-2 | Protéger les données à caractère personnel'),
    new Competences('B3D-3 | Préserver l\'identité numérique de l’organisation'),
    new Competences('B3D-4 | Sécuriser les équipements et les usages des utilisateurs'),
    new Competences('B3D-5 | Garantir la disponibilité, l’intégrité et la confidentialité des services informatiques et des données de l’organisation face à des cyberattaques'),
    new Competences('B3D-6 | Assurer la cybersécurité d’une solution applicative et de son développement')
];
    
