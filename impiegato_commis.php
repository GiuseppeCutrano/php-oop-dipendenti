<?php

class ImpiegatoSuCommissione extends Impiegato {

    use Progetto;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $progetto, $commissione){
        parent::__construct($nome,$cognome,$codice_fiscale,$codice_impiegato, $compenso=0);
        $this->commissione = $commissione;
        $this->progetto = $progetto;
        $this->commissione = $commissione;
    }

    public function calcolo_compenso(){
        return $this->commissione;
    }

    public function to_string(){
    
        echo "Nome - " . $this->nome . "<br>" .
            "Cognome - " . $this->cognome . "<br>" .
            "Codice Fiscale - " . $this->codice_fiscale . "<br>" .
            "Codice Impiegato - " . $this->codice_impiegato . "<br>" .
            "Nome Progetto - " . $this->progetto . "<br>" .
            "Commissione - " . $this->calcolo_compenso() . "€" . "<br>";
    }
}

trait Progetto{

   public $nome_progetto;
   public $commissione; 
}


?>