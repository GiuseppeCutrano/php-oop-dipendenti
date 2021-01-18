<?php

class Persona{

    public $nome;
    public $cognome;
    public $codice_fiscale;

    public function __construct($nome, $cognome, $codice_fiscale)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->codice_fiscale = $codice_fiscale;
        echo '<br>';
    }

    public function to_string()
    {
        echo "nome - " . $this->nome . "<br>" .
            "cognome - " . $this->cognome . "<br>" .
            "Codice Fiscale - " . $this->codice_fiscale . "<br>";
    }
}

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


class ImpiegatoSalariato extends Impiegato{

    public $giorni_lavorativi;
    public $compenso_giornaliero;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $giorni_lavorativi, $compenso_giornaliero)
    {   
        parent::__construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $giorni_lavorativi, $compenso_giornaliero);
        $this->giorni_lavorativi = $giorni_lavorativi;
        $this->compenso_giornaliero = $compenso_giornaliero;
    }

    public function calcolo_compenso()
    {
        return $this->giorni_lavorativi * $this->compenso_giornaliero;
    }

    public function to_string()
    {
        echo "Nome - " . $this->nome . "<br>" .
        "Cognome - " . $this->cognome . "<br>" .
        "Codice Fiscale - " . $this->codice_fiscale . "<br>" .
        "Codice Impiegato - " . $this->codice_impiegato . "<br>" .
        "Giorni Lavorativi - " . $this->giorni_lavorativi . "<br>" . 
        "Compenso Giornaliero - " . $this->compenso_giornaliero . "€" . "<br>" .
        "Compenso - " . $this->calcolo_compenso() . "€" . "<br>";
    }
}

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