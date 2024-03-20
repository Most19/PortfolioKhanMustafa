<?php

class Langages {
    public $langage;

    public function __construct($langage = "" ){
        $this->langage = $langage;
    }
}

$langages = [
    new Langages('HTML'),
    new Langages('CSS'),
    new Langages('JS'),
    new Langages('PHP'),
    new Langages('SQL'),
    new Langages('C++')
];
    