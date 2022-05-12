<?php include __DIR__ . '/./classi/utente.php'; ?>

<?php

class Pagamento {

    use utente
    
    public $metodoPagamento; //visa - mastercard - paypal
    public $validitaCarta;
    public $quantità;
    public $prezzoTotale;
}

?>