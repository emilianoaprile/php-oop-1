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

    // metodo per ottenere il titolo
    public function getTitle() {
        return $this->title;
    }

    // metodo per impostare la lingua
    public function getLanguage() {
        return $this->language;
    }

    // metodo per ottenere il rating
    public function getRating() {
        return $this->rating;
    }

}

?>