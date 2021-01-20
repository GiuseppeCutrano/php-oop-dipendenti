<?php


class ImpiegatoSalariato extends Impiegato{

    public $giorni_lavorativi;
    public $compenso_giornaliero;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $giorni_lavorativi, $compenso_giornaliero){

        if($giorni_lavorativi == 0){
            throw new Exception ("Il numero inserito potrebbe essere sbagliato");
        }
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


?>


