<?php

require_once('dipendenti.php');

$impiegato = new Persona('Luciano','Calboni','LCBGBR026621TR');

echo $impiegato->to_string();


$myImpiegato = new Impiegato('Luciano','Calboni','LCBGBR026621TR', 001, 1500);

echo $myImpiegato->to_string();


$myImpiegato =  new ImpiegatoSalariato('Luciano', 'Calboni','LCBGBR026621TR', '001', 24, 1500);

echo $myImpiegato->to_string();

$myImpiegato =  new ImpiegatoAOre('Luciano', 'Calboni','LCBGBR026621TR','001', 118, 25);

echo $myImpiegato->to_string();


$myImpiegato =  new ImpiegatoSuCommissione('Luciano', 'Calboni','LCBGBR026621TR', '001', "Nomen Omen", 55000);

echo $myImpiegato->to_string();




















?>