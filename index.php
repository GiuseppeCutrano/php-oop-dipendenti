<?php

require_once('dipendenti.php');

$impiegato = new Persona('Luciano','Calboni','LCBGBR026621TR');
echo $impiegato->to_string();

$myImpiegato = new Impiegato('Luciano','Calboni','LCBGBR026621TR', 001, 1500);
echo $myImpiegato->to_string();

$myImpiegatoSalariato = new ImpiegatoSalariato('Luciano','Calboni','LCBGBR026621TR',001,60, 50);

echo $myImpiegatoSalariato->to_string();



$myImpiegatoAOre = new ImpiegatoSalariato('Luciano','Calboni','LCBGBR026621TR',001,40,5);

echo $myImpiegatoAOre->to_string();








?>