
<?php include __DIR__ . '/./utente.php'; ?>

<?php include __DIR__ . '/../classi/prodotti.php'; ?>
    
<?php include __DIR__ . '/.././traits/prezzi.php'; ?>

<?php include __DIR__ . '/.././traits/cartaDiCredito.php'; ?>


<?php

class PrezzoFinale {

    use Prezzi;

    use Livello;

    use Carta;

    public $quantitaProdotto;
    public $prezzoTotale;

    public function __construct($_prezzoSeccoCane, 
                                $_prezzoSeccoGatto, 
                                $_prezzoUmidoCane, 
                                $_prezzoUmidoGatto, 
                                $_livello, 
                                $_nome,
                                $_cognome, 
                                $_meseScadenza, 
                                $_annoScadenza,
                                $_numero, 
                                $_quantitaProdotto) {
        $this -> prezzoSeccoCane = $_prezzoSeccoCane;
        $this -> prezzoSeccoGatto = $_prezzoSeccoGatto;
        $this -> prezzoUmidoCane = $_prezzoUmidoCane;
        $this -> prezzoUmidoGatto = $_prezzoUmidoGatto;
        $this -> livello = $_livello;
        $this -> nome = $_nome;
        $this -> cognome = $_cognome;
        $this -> meseScadenza = $_meseScadenza;
        $this -> annoScadenza = $_annoScadenza;
        $this -> numero = $_numero;
        $this -> quantitaProdotto = $_quantitaProdotto;
    }

    public function setQuantita() {
        $this -> quantitaProdotto = $quantitaProdotto;
    }

    public function getQuantita() {
        return $this -> quantitaProdotto;
    }

    public function setPrezzoTotale() {
        $this -> PrezzoTotale = $PrezzoTotale;
    }

    public function getPrezzoTotale() {
        return $this -> PrezzoTotale;
    }

    public function getSconto2() {
        if( $this -> livello == 1) {
            return $this -> sconto = 20;
        }
    }

    public function getPrezzoSeccoDog() {
        if( $this -> livello == 1 && $this -> scadenzaCarta() == true ) {
            
            $prezzoTotale = $this -> getPrezzoSeccoCane() * $this -> getQuantita();
            return $this -> prezzoTotale;
        }
    }

    // try{
    //     $scadenza -> scadenzaCarta($scadenza < $now);
    //     } catch (Exception $e) {
    //     echo 'La tua carta non è valida. ' . $e->getMessage();
    //     }
}

// $carta1 = new Carta ('Marco', 'Marchetti', '05', '2000', 'IT1234568789');

$costo = new PrezzoFinale(40, 40, 15, 10, 1, 'Marco', 'Marchetti', '05', '2000', 'IT1234568789', 4);

?>
<div class="d-flex justify-content-center">
    <div>
        <h1 style="color: green">Pagamento</h1>
    </div>
</div>

<div class="container d-flex justify-content-between">
    <div class="m-5">
        <h2 class="mb-5">Info utente registrato</h2>
            <!-- <div class="align-self-start mt-5 me-2"> 
                <button class="btn btn-primary">Impostazioni utente</button>
            </div> -->
        <div id="hov" class="">

            <p><span style="color: blue">Nome utente: </span><?php echo $account -> getNome() . '<br>'; ?> </p>
            <p><span style="color: blue">Cognome utente: </span><?php echo $account -> getCognome() . '<br>'; ?> </p>
            <p><span style="color: blue">Data di nascita: </span><?php echo $account -> getCompleanno() . '<br>'; ?> </p>
            <p><span style="color: blue">Indirizzo: </span><?php echo $account -> getIndirizzo() . '<br>'; ?> </p>
            <p><span style="color: blue">Indirizzo email: </span><?php echo $account -> getEmail() . '<br>'; ?> </p>
            <p><span style="color: blue">Livello utente: </span><?php echo $account -> getLivello() . '<br>'; ?> </p>
            <p><span style="color: blue">Sconto primo livello: </span><?php echo $account -> getSconto() . '% <br>'; ?> </p>
            <?php var_dump( $costo -> scadenzaCarta() ); ?>
            
        </div>

        <div>
            <span style="color: blue">Prezzo patè per cani: </span>
            <?php echo  $costo -> getPrezzoUmidoCane(); ?>
        </div>
    </div>

    <div class="m-5">
        <h2 class="mb-5">Info carta inserita</h2>
        <div>
            <span style="color: blue">Intestatario carta: </span>
            <?php echo $costo -> nome; ?>
            <?php  echo $costo -> cognome . '<br>'; ?>
        </div>
        <div>
            <span style="color: blue">Data di scadenza carta: </span>
            <?php echo $costo -> meseScadenza . '/'; ?>
            <?php  echo $costo -> annoScadenza . '<br>'; ?>
        </div>
        <div>
            <span style="color: blue">Iban: </span>
            <?php echo $costo -> numero . '<br>'; ?>
        </div>
    </div>

    <div class="m-5">
        <h2 class="mb-5">Ticket</h2>
        <p>
            <span style="color: blue">Prodotti nel carrello: </span>
            <?php echo  $costo -> getQuantita(); ?>
        </p>
        <p>
            <span style="color: blue">Totale da pagare: </span>
            <?php echo  $costo -> getPrezzoSeccoDog(); ?>
        </p>
        
    </div>

</div>

