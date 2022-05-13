

<?php include __DIR__ . '/../classi/cartaDiCredito.php'; ?>

<?php include __DIR__ . '/./utente.php'; ?>

<?php include __DIR__ . '/../classi/prodotti.php'; ?>
    
<?php include __DIR__ . '/.././traits/prezzi.php'; ?>


<?php

$carta1 = new Carta ('Marco', 'Marchetti', '05', '2030', 'IT1234568789');

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

    // try{
    //     echo scadenzaCarta();
    //     } catch (Exception $e) {
    //     echo 'La tua carta non è valida. ' . $e->getMessage();
    //     }
}

$costo = new PrezzoFinale(40, 40, 15, 10, 4);


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
            <?php var_dump( $carta1 -> scadenzaCarta() ); ?>
            
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

    <div class="m-5">
        <h2 class="mb-5">Ticket</h2>
        <?php echo  $costo -> getPrezzoSeccoDog(); ?>
        <p>
            <span style="color: blue">Prodotti nel carrello: </span>
            <?php echo  $costo -> getQuantita(); ?>
            <?php echo  $costo -> getPrezzoSeccoDog(); ?>
        </p>
        
    </div>

</div>

