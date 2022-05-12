<?php 

include __DIR__ . '/../../classi/prodotti.php';

?>

<?php

class ProdottiAlimentari extends Inventario {
    //secco umido crocchette patè gusti
    //pesce carne verdura
    public $tipo;

    public function __construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali, $_tipo) {
        parent::__construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali);
        $this -> tipo = $_tipo;
    }

}

$prodotti = new ProdottiAlimentari('Prodotti Alimentari', 'Oggettistica', 'Prodotti medicinali', 'Tipo: ');
$secco = new ProdottiAlimentari('Prodotti Alimentari', 'Oggettistica', 'Prodotti medicinali', '----------SECCO----------');
$umido = new ProdottiAlimentari('Prodotti Alimentari', 'Oggettistica', 'Prodotti medicinali', '----------UMIDO----------');



// echo "<p>" . $prodottiAlimentari -> prodottiAlimentari . "</p>";

class Secco extends ProdottiAlimentari {
    //secco umido crocchette patè gusti
    //pesce carne verdura
    public $cane;
    public $gatto;
    public $carne;
    public $pesce;
    public $verdura;
    public $prezzo;
    
    


    public function __construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali, $_tipo, $_cane, $_gatto, $_carne, $_pesce, $_verdura, $_prezzo ) {
        parent::__construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali, $_tipo);
        $this -> cane = $_cane;
        $this -> gatto = $_gatto;
        $this -> carne = $_carne;
        $this -> pesce = $_pesce;
        $this -> verdura = $_verdura;
        $this -> prezzo = $_prezzo;
    }

}

$secco = new Secco('Prodotti Alimentari',
                                 'Oggettistica',
                                 'Prodotti medicinali',
                                 '----------SECCO----------',
                                 '----------Cane----------',
                                 '----------Gatto----------',
                                 'CARNE: <br> Crocchette di manzo - Crocchette al maiale',
                                 'PESCE: <br> Crocchette al salmone - Crocchette al tonno',
                                 'VEGETALI: <br> Crocchette vegetali',
                                  40);


class Umido extends ProdottiAlimentari {
    //secco umido crocchette patè gusti
    //pesce carne verdura
    public $cane;
    public $gatto;
    public $carne;
    public $pesce;
    public $verdura;
    public $prezzo;
    


    public function __construct($_prodottiAlimentari, 
                                $_oggettistica, 
                                $_prodottiMedicinali, 
                                $_tipo, 
                                $_cane, 
                                $_gatto, 
                                $_carne, 
                                $_pesce, 
                                $_verdura, 
                                $_prezzo) {
        parent::__construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali, $_tipo);
        $this -> cane = $_cane;
        $this -> gatto = $_gatto;
        $this -> carne = $_carne;
        $this -> pesce = $_pesce;
        $this -> verdura = $_verdura;
        $this -> prezzo = $_prezzo;
    }

}

$umido = new Umido('Prodotti Alimentari',
                                 'Oggettistica',
                                 'Prodotti medicinali',
                                 '----------UMIDO----------',
                                 '----------Cane----------',
                                 '----------Gatto----------',
                                 'CARNE: <br> Patè di manzo - Patè di maiale',
                                 'PESCE: <br>Patè di salmone - Patè di tonno',
                                 'VEGETALI: <br> Patè vegetali',
                                  10);


?>

<?php include __DIR__ . '/../../partials/metaHead.php'; ?>

    <?php include __DIR__ . '/../../partials/header.php'; ?>
   

    <main>
        
        <div class="d-flex justify-content-center">
            <img src="../../assets/img/caneGatto.png" alt="">
        </div>
    
        <div class="container">

            <h1 class="d-flex justify-content-center text-danger ">
                <?php echo "<p>" . $prodotti -> prodottiAlimentari . "</p>"; ?>
            </h1>

            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="text-primary">
                        <?php echo "<p>" . $secco -> tipo . "</p>"; ?>
                    </h2>
                    <p> <?php echo "<p>" . $secco -> cane . "</p>"; ?> </p>
                    <p> <?php echo "<p>" . $secco -> carne . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $secco -> prezzo . " Euro</p>"; ?> </p>
                    <p> <?php echo "<p>" . $secco -> pesce . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $secco -> prezzo . " Euro</p>"; ?> </p>
                    <p> <?php echo "<p>" . $secco -> verdura . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $secco -> prezzo . " Euro</p>"; ?> </p>
                    <p> <?php echo "<p>" . $secco -> gatto . "</p>"; ?> </p>
                    <p> <?php echo "<p>" . $secco -> carne . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $secco -> prezzo . " Euro</p>"; ?> </p>
                    <p> <?php echo "<p>" . $secco -> pesce . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $secco -> prezzo . " Euro</p>"; ?> </p>
                    <p> <?php echo "<p>" . $secco -> verdura . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $secco -> prezzo . " Euro</p>"; ?> </p>
                </div>
                
                <div>
                    <h2 class="text-primary">
                        <?php echo "<p>" . $umido -> tipo . "</p>"; ?>
                    </h2>
                    <p> <?php echo "<p>" . $umido -> cane . "</p>"; ?> </p>
                    <p> <?php echo "<p>" . $umido -> carne . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $umido -> prezzo . " Euro</p>"; ?> </p>
                    <p> <?php echo "<p>" . $umido -> pesce . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $umido -> prezzo . " Euro</p>"; ?> </p>
                    <p> <?php echo "<p>" . $umido -> verdura . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $umido -> prezzo . " Euro</p>"; ?> </p>
                    <p> <?php echo "<p>" . $umido -> gatto . "</p>"; ?> </p>
                    <p> <?php echo "<p>" . $umido -> carne . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $umido -> prezzo . " Euro</p>"; ?> </p>
                    <p> <?php echo "<p>" . $umido -> pesce . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $umido -> prezzo . " Euro</p>"; ?> </p>
                    <p> <?php echo "<p>" . $umido -> verdura . "</p>"; ?> </p>
                    <p> <?php echo "<p> Prezzo: " . $umido -> prezzo . " Euro</p>"; ?> </p>
                </div>
                
            </div>

        </div>

    </main>

    
</body>
</html>
