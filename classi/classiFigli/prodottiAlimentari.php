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
    
        <div>

            <?php 
            
                echo "<p>" . $prodotti -> prodottiAlimentari . "</p>";
                echo "<p>" . $secco -> tipo . "</p>";
                echo "<p>" . $secco -> cane . "</p>";
                echo "<p>" . $secco -> carne . "</p>";
                echo "<p>" . $secco -> prezzo . "</p>";
                echo "<p>" . $secco -> pesce . "</p>";
                echo "<p>" . $secco -> prezzo . "</p>";
                echo "<p>" . $secco -> verdura . "</p>";
                echo "<p>" . $secco -> prezzo . "</p>";
                echo "<p>" . $secco -> gatto . "</p>";
                echo "<p>" . $secco -> carne . "</p>";
                echo "<p>" . $secco -> prezzo . "</p>";
                echo "<p>" . $secco -> pesce . "</p>";
                echo "<p>" . $secco -> prezzo . "</p>";
                echo "<p>" . $secco -> verdura . "</p>";
                echo "<p>" . $secco -> prezzo . "</p>";
            
            ?>

        </div>

        <div>

            <?php 
            
                echo "<p>" . $umido -> tipo . "</p>";
                echo "<p>" . $umido -> cane . "</p>";
                echo "<p>" . $umido -> carne . "</p>";
                echo "<p>" . $umido -> prezzo . "</p>";
                echo "<p>" . $umido -> pesce . "</p>";
                echo "<p>" . $umido -> prezzo . "</p>";
                echo "<p>" . $umido -> verdura . "</p>";
                echo "<p>" . $umido -> prezzo . "</p>";
                echo "<p>" . $umido -> gatto . "</p>";
                echo "<p>" . $umido -> carne . "</p>";
                echo "<p>" . $umido -> prezzo . "</p>";
                echo "<p>" . $umido -> pesce . "</p>";
                echo "<p>" . $umido -> prezzo . "</p>";
                echo "<p>" . $umido -> verdura . "</p>";
                echo "<p>" . $umido -> prezzo . "</p>";
                
            
            ?>

        </div>
        

    </main>

    
</body>
</html>
