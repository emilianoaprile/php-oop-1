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

// creazione di due oggetti production
$movie1 = new Production('The Big Short', 'English', 9.3);
$movie2 = new Production('The Wolf of Wall Street', 'English', 9.5);

// stampo in pagina i valori delle due produzioni
echo "Titolo: " . $movie1->getTitle() . "<br>";
echo "Lingua: " . $movie1->getLanguage() . "<br>";  
echo "Rating: " . $movie1->getRating() . "<br>";

echo "<br>";

echo "Titolo: " . $movie2->getTitle() . "<br>";
echo "Lingua: " . $movie2->getLanguage() . "<br>";  
echo "Rating: " . $movie2->getRating() . "<br>";

?>