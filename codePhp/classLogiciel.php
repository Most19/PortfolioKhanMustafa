<?php

class Logiciel {
    public $logiciel;

    public function __construct($logiciel = "" ){
        $this->logiciel = $logiciel;
    }
}

$logiciels = [
    new Logiciel('Visual Studio Code'),
    new Logiciel('BlueFish'),
    new Logiciel('Xmind'),
    new Logiciel('Qt Creator'),
    new Logiciel('Word'),
    new Logiciel('Exel'),
    new Logiciel('PowerPoint')
];