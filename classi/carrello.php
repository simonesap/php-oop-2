



    

        <?php include __DIR__ . '/../classi/cartaDiCredito.php'; ?>

        <?php include __DIR__ . '/./utente.php'; ?>

    <?php include __DIR__ . '/../classi/prodotti.php'; ?>
    
        <?php include __DIR__ . '/.././traits/prezzi.php'; ?>


<?php

$carta1 = new Carta ('Marco', 'Marchetti', '05', '2030', 'IT1234568789');

var_dump( $carta1 -> scadenzaCarta() );

class PrezzoFinale {

    use Prezzi;

    use Livello;

    public $quantitaProdotto;

    public function __construct($_prezzoSeccoCane, $_prezzoSeccoGatto, $_prezzoUmidoCane, $_prezzoUmidoGatto, $_quantitaProdotto) {
        $this -> prezzoSeccoCane = $_prezzoSeccoCane;
        $this -> prezzoSeccoGatto = $_prezzoSeccoGatto;
        $this -> prezzoUmidoCane = $_prezzoUmidoCane;
        $this -> prezzoUmidoGatto = $_prezzoUmidoGatto;
        $this -> quantitaProdotto = $_quantitaProdotto;
    }

    public function setQuantita() {
        $this -> quantitaProdotto = $quantitaProdotto;
    }

    public function getQuantita() {
        return $this -> quantitaProdotto;
    }

    public function getSconto2() {
        if( $this -> livello == 1) {
            return $this -> sconto = 20;
        }
    }

    //Setter
    public function setPrezzoSeccoCane() {
        $this -> prezzoSeccoCane = $_prezzoSeccoCane;
        return $this -> prezzoSeccoCane;
    }

    public function setPrezzoSeccoGatto() {
        $this -> prezzoSeccoGatto = $_prezzoSeccoGatto;
        return $this -> prezzoSeccoGatto;
    }

    public function setPrezzoUmidoCane() {
        $this -> prezzoUmidoCane = $_prezzoUmidoCane;
        return $this -> prezzoUmidoCane;
    }
    
    public function setPrezzoUmidoGatto() {
        $this -> prezzoUmidoGatto = $_prezzoUmidoGatto;
        return $this -> prezzoUmidoGatto;
    }

    //Getter
    public function getPrezzoSeccoCane() {
        return $this -> prezzoSeccoCane;
    }

    public function getPrezzoSeccoGatto() {
        return $this -> prezzoSeccoGatto;
    }

    public function getPrezzoUmidoCane() {
        return $this -> prezzoUmidoCane;
    }
    
    public function getPrezzoUmidoGatto() {
        return $this -> prezzoUmidoGatto;
    }

    public function getPrezzoSeccoDog() {
        if( $this -> livello == 1 && $carta1 -> scadenzaCarta() == true ) {
            //sconto 20%
            $prezzoFinale = getPrezzoSeccoCane() * getQuantita($quantitaProdotto);
            return $this -> prezzoFinale;
        } 
    }
}

$costo = new PrezzoFinale(40, 40, 15, 10, 4);


?>

<div>
    <span style="color: blue">Prezzo patè per cani: </span>
    <?php echo  $costo -> getPrezzoSeccoDog(); ?>
</div>
<!-- <div>
    <span style="color: blue">Livello utente: </span>
    
</div> -->
<!--
<div>
    <span style="color: blue">Iban: </span>
    
</div> -->



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

</div>
