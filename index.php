<?php
require_once('persona.php');
require_once('impiegato.php');
require_once('impiegato_sal.php');
require_once('impiegato_commis.php');
require_once('impiegato_ore.php');


try{
    $impiegato = new Persona('Luciano','Calboni','LCBGBR026621TR');

   echo $impiegato->to_string();

}

catch(Exception $e){
    echo 'I dati sono errati. ' . $e->getMessage();
}

$myImpiegato = new Impiegato('Luciano','Calboni','LCBGBR026621TR', 001, 1500);

echo $myImpiegato->to_string();

try{
    $myImpiegato =  new ImpiegatoSalariato('Luciano', 'Calboni','LCBGBR026621TR', '001', 10, 150);

    echo $myImpiegato->to_string();

}
    catch(Exception $e){
    echo 'I dati sono errati. ' . $e->getMessage();
}

    

$myImpiegato =  new ImpiegatoAOre('Luciano', 'Calboni','LCBGBR026621TR','001', 118, 25);

echo $myImpiegato->to_string();


$myImpiegato =  new ImpiegatoSuCommissione('Luciano', 'Calboni','LCBGBR026621TR', '001', "Nomen Omen", 55000);

echo $myImpiegato->to_string();


?>