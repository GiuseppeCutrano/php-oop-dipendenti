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


    


?>