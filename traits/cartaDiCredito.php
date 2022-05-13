<?php include __DIR__ . '/../traits/infoUtente.php'; ?>

<?php

trait Carta {

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
        $scadenza = DateTime::createFromFormat( 'm-Y', $this -> meseScadenza . '-' . $this -> annoScadenza);
        $now = new DateTime();
        // var_dump($now);

        if( $scadenza < $now) {
            echo 'La carta è valida.';
            return true;
        } else {
            return false;
            throw new Exception('La tua carta non è valida.');
        }
    }
}



?>