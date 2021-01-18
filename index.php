<?php

require_once('dipendenti.php');

$impiegato = new Persona('Luciano','Calboni','LCBGBR026621TR');
echo $impiegato->to_string();
var_dump($impiegato); 


?>