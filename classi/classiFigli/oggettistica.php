<?php

include __DIR__ . '/../../classi/prodotti.php';

class Oggettistica extends Inventario {
    //trasportini cucce giochi guinsagli
    public $cane;
    public $gatto;
    public $collari;
    public $guinsagli;
    public $cucce;
    public $giochi;
    public $prezzo;


    public function __construct($_prodottiAlimentari, 
                                $_oggettistica, 
                                $_prodottiMedicinali, 
                                $_cane, 
                                $_gatto, 
                                $_collari, 
                                $_guinsagli, 
                                $_cucce,
                                $_giochi,
                                $_prezzo) {
        parent::__construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali);
        $this -> cane = $_cane;
        $this -> gatto = $_gatto;
        $this -> collari = $_collari;
        $this -> guinsagli = $_guinsagli;
        $this -> cucce = $_cucce;
        $this -> giochi = $_giochi;
        $this -> prezzo = $_prezzo;
    }
    
}

$prodotti = new Oggettistica('Prodotti Alimentari', 
                             'Oggettistica', 
                             'Prodotti medicinali', 
                             '----------Cane----------', 
                             '----------Gatto----------',
                             'Collari',
                             'Guinsagli',
                             'Cucce',
                             'Giochi',
                              10);

$cane = new Oggettistica('Prodotti Alimentari', 
                          'Oggettistica', 
                          'Prodotti medicinali', 
                          '----------Cane----------', 
                          '----------Gatto----------',
                          'Collari',
                          'Guinsagli',
                          'Cucce',
                          'Giochi',
                           10);

$gatto = new Oggettistica('Prodotti Alimentari', 
                          'Oggettistica', 
                          'Prodotti medicinali', 
                          '----------Cane----------', 
                          '----------Gatto----------',
                          'Collari',
                          'Guinsagli',
                          'Cucce',
                          'Giochi',
                           10);


?>

<?php include __DIR__ . '/../../partials/metaHead.php'; ?>

<?php include __DIR__ . '/../../partials/header.php'; ?>


<main>
    
    <div class="d-flex justify-content-center">
        <img src="../../assets/img/cuccioli.jpg" alt="">
    </div>

    <div class="container">

            <h1 class="d-flex justify-content-center text-danger ">
                <?php echo "<p>" . $prodotti -> oggettistica . "</p>"; ?>
            </h1>

            <div class="d-flex justify-content-between">
                <div>
                    <h2 class="text-primary">
                        <?php echo "<p>" . $cane -> cane . "</p>"; ?>
                    </h2>
                    <?php 
                        echo "<p>" . $prodotti -> collari . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                        echo "<p>" . $prodotti -> guinsagli . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                        echo "<p>" . $prodotti -> cucce . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                        

                    ?>
                </div>

                <div>
                    <h2 class="text-primary">
                        <?php echo "<p>" . $gatto -> gatto . "</p>"; ?>
                    </h2>
                    <?php 
                        echo "<p>" . $prodotti -> collari . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                        echo "<p>" . $prodotti -> guinsagli . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                        echo "<p>" . $prodotti -> cucce . "</p>";
                        echo "<p>" . $prodotti -> prezzo . " Euro </p>";
                    ?>
                </div>
                
            </div>

        </div>


</main>

    
</body>
</html>