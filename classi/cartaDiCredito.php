<?php include __DIR__ . '/../traits/infoUtente.php'; ?>

<?php

class Carta {

    use UtenteInfo;

    public $meseScadenza;
    public $annoScadenza;
    public $numero;
    // public $quantità;
    // public $prezzoTotale;

    //Costruttore
    public function __construct($_nome, $_cognome, $_meseScadenza, $_annoScadenza, $_numero) {
        $this -> nome = $_nome;
        $this -> cognome = $_cognome;
        $this -> meseScadenza = $_meseScadenza;
        $this -> annoScadenza = $_annoScadenza;
        $this -> numero = $_numero;
    }

    public function scadenzaCarta() {
        $scadenza = DateTime::createFromFormat( 'm-y', $this -> meseScadenza . '--' . $this -> annoScadenza);
        $now = new DateTime();

        if( $scadenza < $now) {
            //carta scaduta
            return true;
        } else {
            return false;
        }
    }
}

?>