<?php

// definisco classe
class Production {
    // creo le variabili d'istanza
    public $title;
    public $language;
    public $rating;

    // definisco costruttore
    function __construct($title, $language, $rating) {
        $this->title = $title;
        $this->language = $language;
        $this->rating = $rating;
    }

}

?>