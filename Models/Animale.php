<?php 

/* Questo ora è un componente */

/* Avvio la Classe, entità */
class Animale {
    protected $famiglia; // A che famiglia appartiene
    protected $gender; // Che genere
    protected $alimentazione; // Che cosa mangia
    protected $habitat; // Dove vive

    /* Definisco un construct */
    function __construct(String $famiglia, String $gender, String $alimentazione, String $habitat) {
        /* Definisco le istanze all'interno del construtto */
        $this->famiglia = $famiglia;
        $this->gender = $gender;
        $this->alimentazione = $alimentazione;
        $this->habitat = $habitat;
    }
    /* Avvio un method */
    public function getSpecie(){
        return $this->famiglia; // essendo protetto $famiglia lo salvo in una funzione pubblica
    }
    /* Avvio altro method per ereditarietà */
    public function parla() {
        return "Io Parlo";
    }
}
?>