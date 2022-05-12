

<?php include __DIR__ . '/../partials/metaHead.php'; ?>

    <?php include __DIR__ . '/../partials/header.php'; ?>

        <?php include __DIR__ . '/../classi/cartaDiCredito.php'; ?>

        <?php include __DIR__ . '/../classi/utente.php'; ?>

    <?php include __DIR__ . '/../classi/prodotti.php'; ?>


<?php

$carta1 = new Carta ('Marco', 'Marchetti', '05', '2030', 'IT1234568789');

var_dump( $carta1 -> scadenzaCarta() );

class prezzoFinale {

    use Livello;

    public $quantitaProdotto;

    public function setQuantita() {
        $this -> quantitaProdotto = $quantitaProdotto;
    }

    public function getSconto() {
        if( $this -> livello == 1) {
            return $this -> sconto = 20;
        }
    }

    public function getPrezzoSecco() {
        if( $this -> getSconto() == 1 && $carta1 -> scadenzaCarta() == true ) {
            //sconto 20%
            $prezzoFinale = $quantitaProdotti * $secco -> prezzo;
            return $this -> prezzoFinale;
        }
    }
}

$quantita = new prezzoFinale ('4');

// echo $prezzoFinale;
echo $quantita -> getPrezzoSecco() . '<br>';



?>
<div>
    <div>
        <span style="color: blue">Intestatario carta: </span>
        <?php echo $carta1 -> nome; ?>
        <?php  echo $carta1 -> cognome . '<br>'; ?>
    </div>
    <div>
        <span style="color: blue">Data di scadenza carta: </span>
        <?php echo $carta1 -> meseScadenza . '/'; ?>
        <?php  echo $carta1 -> annoScadenza . '<br>'; ?>
    </div>
    <div>
        <span style="color: blue">Iban: </span>
        <?php echo $carta1 -> numero . '<br>'; ?>
    </div>


    <div class="d-flex justify-content-center">
        <img src="./assets/img/cani-e-gatti.jpg" alt="">
    </div>
</div>
