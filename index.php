<?php

// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//     => all’interno della classe sono dichiarate delle variabili d’istanza
//     => all’interno della classe è definito un costruttore
//     => all’interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie {

    public $nome;
    public $anno;
    public $regista;
    public $genere;

    public function __construct($nome, $anno, $regista) {
        $this->nome = $nome;
        $this->anno = $anno;
        $this->regista = $regista;
    }
    
    public function genere($genere) {
        if($genere == "fantascenza") {
            $this->genere = 'i <3 fantascenza';
        } else {
            $this->genere = $genere;
        }
    }

    public function stampa() {
        return "<h2>" . $this->nome . "</h2>".
        "<h2>" . $this->anno . "</h2>".
        "<h2>" . $this->regista . "</h2>".
        "<h2>" . $this->genere . "</h2>";
    }

}

$RitornoAlFuturo = new Movie('Ritorno al futuro', 1985, 'Robert Zemeckis');
$RitornoAlFuturo->genere('action');
echo "<h2>" . $RitornoAlFuturo->stampa() . "</h2>";

echo "<h2>----------------------------------</h2>";

$StarTrekGenerazioni = new Movie('Star Trek - Generazioni', 1994, 'David Carson');
$StarTrekGenerazioni->genere('fantascenza');
echo "<h2>" . $StarTrekGenerazioni->stampa() . "</h2>";

?>