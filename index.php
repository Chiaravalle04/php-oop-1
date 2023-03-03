<?php

    class Movie {

        public $title;
        public $genre;
        public $description;
        public $watched;

        function __construct(string $_title, string $_genre, string $_description, bool $_watched = false) {
            
            $this->title = $_title;
            $this->genre = $_genre;
            $this->description = $_description;
            $this->watched = $_watched;

        }

        public function printMovie() {

            echo "<h2>Film</h2>";
            echo "<b>Titolo:</b> " . $this->title . "<br>";
            echo "<b>Genere:</b> " . $this->genre . "<br>";        
            echo "<b>Descrizione:</b> " . $this->description . "<br>";        
            echo "<b>Visto:</b> " . ($this->watched ? "Si" : "No") . "<br>";
        }
    }

    $pulpFiction = new Movie('Pulp Fiction', 'Giallo', 'Il film è diviso in diverse storie interconnesse che ruotano attorno al mondo della criminalità organizzata di Los Angeles.', true);

    var_dump($pulpFiction);

    $pulpFiction->printMovie();

    $djangoUnchained = new Movie('Django Unchained', 'Western', 'La D è muta!', true);

    $djangoUnchained->printMovie();

?>