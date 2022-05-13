
<?php

include __DIR__ . '/../../classi/prodotti.php';

class Prodotti_Medicinali extends Inventario {
    //spray collari-antipulci shampoo tagliaunghie 
    public $cane;
    public $gatto;
    public $collareAntipulci;
    public $sprayAntipulci;
    public $shampooNeutro;
    public $prezzo;

    public function __construct($_prodottiAlimentari, 
                                $_oggettistica, 
                                $_prodottiMedicinali, 
                                $_cane, 
                                $_gatto, 
                                $_collareAntipulci, 
                                $_sprayAntipulci, 
                                $_shampooNeutro,
                                $_prezzo) {
        parent::__construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali);
        $this -> cane = $_cane;
        $this -> gatto = $_gatto;
        $this -> collareAntipulci = $_collareAntipulci;
        $this -> sprayAntipulci = $_sprayAntipulci;
        $this -> shampooNeutro = $_shampooNeutro;
        $this -> prezzo = $_prezzo;

    }

}

$prodotti = new Prodotti_Medicinali('Prodotti Alimentari', 
                                    'Oggettistica', 
                                    'Prodotti medicinali', 
                                    '----------Cane----------', 
                                    '----------Gatto----------',
                                    'Collare antipulci',
                                    'Spray antipulci',
                                    'Shampoo neutro',
                                     10);
$cane = new Prodotti_Medicinali('Prodotti Alimentari', 
                                'Oggettistica', 
                                'Prodotti medicinali', 
                                '----------Cane----------', 
                                '----------Gatto----------',
                                'Collare antipulci',
                                'Spray antipulci',
                                'Shampoo neutro',
                                 10);
$gatto = new Prodotti_Medicinali('Prodotti Alimentari', 
                                 'Oggettistica', 
                                 'Prodotti medicinali', 
                                 '----------Cane----------', 
                                 '----------Gatto----------',
                                 'Collare antipulci',
                                 'Spray antipulci',
                                 'Shampoo neutro',
                                  10);




?>


<?php include __DIR__ . '/../../partials/metaHead.php'; ?>

    <?php include __DIR__ . '/../../partials/header.php'; ?>
   

    <main>
        
        <div class="container">
            <div class="d-flex justify-content-center">
                <img src="../../assets/img/gruppo.jpg" alt="">
            </div>

            <h1 class="d-flex justify-content-center text-danger ">
                <?php echo "<p>" . $prodotti -> prodottiMedicinali . "</p>"; ?>
            </h1>

            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="text-primary">
                        <?php echo "<p>" . $cane -> cane . "</p>"; ?>
                    </h2>
                    <?php 
                        echo "<p>" . $prodotti -> collareAntipulci . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                        echo "<p>" . $prodotti -> sprayAntipulci . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                        echo "<p>" . $prodotti -> shampooNeutro . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                    ?>
                </div>

                <div>
                    <h2 class="text-primary">
                        <?php echo "<p>" . $gatto -> gatto . "</p>"; ?>
                    </h2>
                    <?php 
                        echo "<p>" . $prodotti -> collareAntipulci . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                        echo "<p>" . $prodotti -> sprayAntipulci . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                        echo "<p>" . $prodotti -> shampooNeutro . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                    ?>
                </div>
                    
            </div>
        </div>

    </main>

    
</body>
</html>
