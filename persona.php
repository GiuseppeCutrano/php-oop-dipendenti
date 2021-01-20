<?php

class Persona{

    public $nome;
    public $cognome;
    public $codice_fiscale;

    public function __construct($nome, $cognome, $codice_fiscale){
    
        if(!is_string($nome)|| !is_string($cognome)){
            throw new Exception("Non è stata inserita una stringa");
        }
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->codice_fiscale = $codice_fiscale;
        echo '<br>';
    }

    public function to_string()
    {
        echo "Nome - " . $this->nome . "<br>" .
            "Cognome - " . $this->cognome . "<br>" .
            "Codice Fiscale - " . $this->codice_fiscale . "<br>";
    }
}



?>