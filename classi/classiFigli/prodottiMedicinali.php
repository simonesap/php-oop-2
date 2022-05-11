
<?php

include __DIR__ . '/../../classi/prodotti.php';

class Prodotti_Medicinali extends Inventario {
    //spray collari-antipulci shampoo tagliaunghie 
    public $cane;
    public $gatto;
    public $collareAntipulci;
    public $sprayAntipulci;
    public $shampooNeutro;

    public function __construct($_prodottiAlimentari, 
                                $_oggettistica, 
                                $_prodottiMedicinali, 
                                $_cane, 
                                $_gatto, 
                                $_collareAntipulci, 
                                $_sprayAntipulci, 
                                $_shampooNeutro) {
        parent::__construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali);
        $this -> cane = $_cane;
        $this -> gatto = $_gatto;
        $this -> collareAntipulci = $_collareAntipulci;
        $this -> sprayAntipulci = $_sprayAntipulci;
        $this -> shampooNeutro = $_shampooNeutro;

    }

}

$prodotti = new Prodotti_Medicinali('Prodotti Alimentari', 
                                    'Oggettistica', 
                                    'Prodotti medicinali', 
                                    '----------Cane----------', 
                                    '----------Gatto----------',
                                    'Collare antipulci',
                                    'Spray antipulci',
                                    'Shampoo neutro');
$cane = new Prodotti_Medicinali('Prodotti Alimentari', 
                                'Oggettistica', 
                                'Prodotti medicinali', 
                                '----------Cane----------', 
                                '----------Gatto----------',
                                'Collare antipulci',
                                'Spray antipulci',
                                'Shampoo neutro');
$gatto = new Prodotti_Medicinali('Prodotti Alimentari', 
                                 'Oggettistica', 
                                 'Prodotti medicinali', 
                                 '----------Cane----------', 
                                 '----------Gatto----------',
                                 'Collare antipulci',
                                 'Spray antipulci',
                                 'Shampoo neutro');

// echo "<p>" . $prodotti -> prodottiMedicinali . "</p>";
// echo "<p>" . $cane -> cane . "</p>";
// echo "<p>" . $prodotti -> collareAntipulci . "</p>";
// echo "<p>" . $prodotti -> sprayAntipulci . "</p>";
// echo "<p>" . $prodotti -> shampooNeutro . "</p>";
// echo "<p>" . $gatto -> gatto . "</p>";
// echo "<p>" . $prodotti -> collareAntipulci . "</p>";
// echo "<p>" . $prodotti -> sprayAntipulci . "</p>";
// echo "<p>" . $prodotti -> shampooNeutro . "</p>";




?>


<?php include __DIR__ . '/../../partials/metaHead.php'; ?>

    <?php include __DIR__ . '/../../partials/header.php'; ?>
   

    <main>
        
        <div class="d-flex justify-content-center">
            <img src="../../assets/img/gruppo.jpg" alt="">
        </div>

        <div>

            <?php 
            
                echo "<p>" . $prodotti -> prodottiMedicinali . "</p>";
                echo "<p>" . $cane -> cane . "</p>";
                echo "<p>" . $prodotti -> collareAntipulci . "</p>";
                echo "<p>" . $prodotti -> sprayAntipulci . "</p>";
                echo "<p>" . $prodotti -> shampooNeutro . "</p>";
                echo "<p>" . $gatto -> gatto . "</p>";
                echo "<p>" . $prodotti -> collareAntipulci . "</p>";
                echo "<p>" . $prodotti -> sprayAntipulci . "</p>";
                echo "<p>" . $prodotti -> shampooNeutro . "</p>";
            
            ?>

        </div>


    </main>

    
</body>
</html>
