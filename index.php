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

            echo "<h2>" . $this->title . "</h2>";
            echo "<p>" . $this->description . "</p>";        
            echo "<span>Genere:</span> ";
            if (empty($this->genre)) {
                echo " "."<br>";
            } else {
                echo implode(', ', $this->genre) . "<br>";
            } 
            echo "<span>Visto:</span> " . ($this->watched ? "Si" : "No") . "<br>";
            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">

        <!--Style-->
        <link rel="stylesheet" href="css/style.css">

        <title>PHP OOP - Movies</title>
    </head>
    <body>

        <main>

            <h1>Movies</h1>
            
            <div class="container">

                <ul>
                    <li>
                        <?php 
                            $movie1 = new Movie('Pulp Fiction', 'Il film è diviso in diverse storie interconnesse che ruotano attorno al mondo della criminalità organizzata di Los Angeles.', array('Giallo', 'Drammatico'), true);

                            $movie1->printMovie(); 
                        ?>
                    </li>

                    <li>
                        <?php 
                            $movie2 = new Movie('Django Unchained', 'La D è muta!', array('Western'), true);

                            $movie2->printMovie(); 
                        ?>
                    </li>

                    <li>
                        <?php 
                            $movie3 = new Movie('Bastardi senza gloria', 'Francia, Seconda Guerra Mondiale: un gruppo di soldati americani di origine ebraica viene paracadutato sul suolo francese per una missione speciale.', array('Guerra', 'Azione'), true);

                            $movie3->printMovie(); 
                        ?>
                    </li>

                    <li>
                        <?php 
                            $movie4 = new Movie('Jackie Brown', 'La hostess Jackie Brown esporta illegalmente valuta per conto del trafficante d\'armi Ordell Robbie. Quando viene arrestata deve però guardarsi dal suo socio, pronto a ucciderla pur di non farla testimoniare.', array('Giallo', 'Drammatico'), true);

                            $movie4->printMovie(); 
                        ?>
                    </li>

                    <li>
                        <?php 
                            $movie5 = new Movie('The Hateful Eight', 'Qualche anno dopo la fine della guerra civile, una diligenza è costretta a fermarsi nel cuore del Wyoming a causa di una tempesta di neve. Il cacciatore di taglie John Ruth e la propria prigioniera Daisy Domergue sono attesi nella città di Red Rock.', array('Western', 'Drammatico'), true);

                            $movie5->printMovie(); 
                        ?>
                    </li>

                    <li>
                        <?php 
                            $movie6 = new Movie('Le iene', 'A seguito di una rapina andata male, i membri di una banda iniziano a sospettare l\'uno dell\'altro perchè sembra che qualcuno abbia parlato più del dovuto.', array('Giallo', 'Drammatico'), true);

                            $movie6->printMovie(); 
                        ?>
                    </li>

                    <li>
                        <?php 
                            $movie7 = new Movie('Kill Bill', 'Risvegliatasi dal coma, una assassina va alla ricerca del suo ex capo e della gang responsabile dell\'agguato in cui è caduta quattro anni prima.', array('Azione', 'Giallo'), true);

                            $movie7->printMovie(); 
                        ?>
                    </li>

                    <li>
                        <?php 
                            $movie8 = new Movie('Grindhouse - A prova di morte', 'Per la dj più famosa di Austin: Jungle Julia, l\'ora che si avvicina al tramonto costituisce il momento migliore per un po\' di relax insieme alle sue due migliori amiche Shanna e Arlene. Al Texas Chili Parlor non tutti si limitano a guardarle: tra chi le osserva c\'è anche lo stuntman Mike che attende solo di poterle attirare nella sua trappola.', array('Azione', 'Horror'), false);

                            $movie8->printMovie(); 
                        ?>
                    </li>
                </ul>

            </div>

        </main>

    </body>
</html>