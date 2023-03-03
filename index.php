<?php

    class Movie {

        public $title;
        public $genre;
        public $description;
        public $watched;

        function __construct(string $_title, string $_description, array $_genre = array(), bool $_watched = false) {
            
            $this->title = $_title;
            $this->genre = $_genre;
            $this->description = $_description;
            $this->watched = $_watched;

        }

        public function printMovie() {

            echo "<h2>Film</h2>";
            echo "<b>Titolo:</b> " . $this->title . "<br>";
            echo "<b>Descrizione:</b> " . $this->description . "<br>";        
            echo "<b>Genere:</b> ";
            if (empty($this->genre)) {
                echo " "."<br>";
            } else {
                echo implode(', ', $this->genre) . "<br>";
            } 
            echo "<b>Visto:</b> " . ($this->watched ? "Si" : "No") . "<br>";
            
        }
    }

    $pulpFiction = new Movie('Pulp Fiction', 'Il film è diviso in diverse storie interconnesse che ruotano attorno al mondo della criminalità organizzata di Los Angeles.', array('Giallo', 'Drammatico'), true);

    $pulpFiction->printMovie();

    $djangoUnchained = new Movie('Django Unchained', 'La D è muta!', array('Western'), true);

    $djangoUnchained->printMovie();

?>