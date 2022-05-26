<?php 

/* Richiamo il componente di classe padre */
require_once __DIR__ . "/Models/Animale.php";
/* Richiamo il componente di classe ereditaria (figlia) */
require_once __DIR__ . "/Models/Leone.php";

/* Creo un' istanza con Classe Genitrice  */
$animale = new Animale('Leone', 'Maschio', 'Carne', 'Savana');
/* Verifica */
var_dump($animale);
/* Richiamo Esterno di variabili protette */
var_dump("Questo è il method per richiamare una variabile settata su Protected");
var_dump($animale->getSpecie()); // Verifica del vardump

/* Ora richiamo l'istanza per la classe Leone */
$leone = new Leone('Leone', 'Maschio', 'Carne', 'Savana', 'Agguato');
/* Verifica */
var_dump("Questo è il var dump della variabile Leone");
var_dump($leone);
/* Ora invoco il method di Leone e Animale */
var_dump("Questo è il verso del leone");
var_dump($leone->parla());
/* Ora provo invece sulla classe animale */
var_dump("Questo è il verso di Animale");
var_dump($animale->parla());
/* Ora ricavo la variabile protetta "tattiche" che è protetta */
var_dump("Questa è la tattica del leone (tramite method)");
var_dump($leone->getTattica()); // tramite method, funzione

var_dump("Questa è la tattica del leone (senza method)");
var_dump($leone->$tattiche); // senza method, NON FUNZIONA IN QUANTO PROTETTA
/* Non ne ricavo errori ma ovviamente non funziona */
?>
