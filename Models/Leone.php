<?php 
/* Tutto questo appartiene al figlio */
class Leone extends Animale {

    protected $tattiche;

    /* Ora, gli lascio le variabili del padre con construct e ::parent 
    Qui possono starci i tipi di String, Int ecc.. */
    public function __construct(String $famiglia, String $gender, String $alimentazione, String $habitat, String $tattiche ) {
        parent::__construct($famiglia, $gender, $alimentazione, $habitat); // Nel figlio NON ci può essere string
        $this->tattiche = $tattiche; // Questa è l'istanza di una variabile presente solo il Leone.php 
    }       
    /* Questo method permette di vedere, tramite var dump, il verso dell'animale in question 
    e' presente anche nel genitore */
    public function parla() {
        return "Roar";
    }

    /* Avvio un altro method per recuperare un parametro protetto dalla mia dichiarazione */
    public function getTattica(){
        return $this->tattiche; // essendo protetto $tattiche lo salvo in una funzione pubblica
    }
}


?>
