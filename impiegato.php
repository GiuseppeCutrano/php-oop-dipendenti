<?php
require_once ('persona.php');


class Impiegato extends Persona{

    public $codice_impiegato;
    public $compenso;

    public function calcola_compenso(){
        return $this->compenso;
    }


     function __construct($nome,$cognome,$codice_fiscale,$codice_impiegato, $compenso){
        parent::__construct($nome,$cognome,$codice_fiscale);
        $this->codice_impiegato = $codice_impiegato;
        $this->compenso = $compenso;
    }
    
    public function to_string(){
        
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Cognome: ' . $this->cognome . '<br>';
        echo 'Codice Fiscale: ' . $this->codice_fiscale . '<br>';
        echo 'codice_impiegato: ' . $this->codice_impiegato . '<br>';
        echo 'compenso: ' . $this->compenso . '<br>';
        echo '<br>';
    }
}



?>