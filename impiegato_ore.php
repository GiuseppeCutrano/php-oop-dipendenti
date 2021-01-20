<?php


class ImpiegatoAOre extends Impiegato
{
    public $ore_lavorate;
    public $compenso_orario;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $ore_lavorate, $compenso_orario)
    {
        parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $ore_lavorate, $compenso_orario);
        $this->ore_lavorate = $ore_lavorate;
        $this->compenso_orario = $compenso_orario;
    }

    public function calcolo_compenso(){
        return $this->ore_lavorate * $this->compenso_orario;

    }
    
        
    

    public function to_string(){
    
        echo "Nome - " . $this->nome . "<br>" .
            "Cognome - " . $this->cognome . "<br>" .
            "Codice Fiscale - " . $this->codice_fiscale . "<br>" .
            "Codice Impiegato - " . $this->codice_impiegato . "<br>" .
            "Ore Lavorate - " . $this->ore_lavorate . "<br>" .
            "Compenso Orario - " . $this->compenso_orario . "€" . "<br>" .
            "Compenso - " . $this->calcolo_compenso() . "€" . "<br>";
    }
}

?>