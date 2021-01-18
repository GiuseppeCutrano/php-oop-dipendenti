<?php

class Persona{

    protected $nome;
    protected $cognome;
    protected $codice_fiscale;

    public function __construct($nome, $cognome, $codice_fiscale){
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->codice_fiscale = $codice_fiscale;

    }
    public function to_string(){
        
        echo 'Nome: ' . $this->nome . '<br>';
        echo 'Cognome: ' . $this->cognome . '<br>';
        echo 'Codice Fiscale: ' . $this->codice_fiscale . '<br>';
        echo '<br>';
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

    public $giorni_lavorati;
    public $compenso_giornaliero;

    public function calcola_compenso(){
        $this->compenso = $this->giorni_lavorati * $this->compenso_giornaliero;
        return $this->compenso;
    }

    

    function __construct($nome,$cognome,$codice_fiscale,$codice_impiegato,$giorni_lavorati,$compenso_giornaliero){
        parent::__construct($nome,$cognome,$codice_fiscale,$codice_impiegato,0);
        
        $this->giorni_lavorati = $giorni_lavorati;
        $this->compenso_giornaliero = $compenso_giornaliero;
        $this->calcola_compenso();
    }
}
  

    class ImpiegatoAOre extends Impiegato{
    public $ore_lavorate;
    public $compenso_orario;

    public function calcola_compenso(){
        $this->compenso = $this->ore_lavorate * $this->compenso_orario;
        return $this->compenso;
    }

    

    function __construct($nome,$cognome,$codice_fiscale,$codice_impiegato,$ore_lavorate,$compenso_orario){
        parent::__construct($nome,$cognome,$codice_fiscale,$codice_impiegato,0);
        
        $this->ore_lavorate = $ore_lavorate;
        $this->compenso_orario = $compenso_orario;
        $this->calcola_compenso();
    }
}






?>