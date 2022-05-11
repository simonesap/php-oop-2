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

    public function __construct($_prodottiAlimentari, 
                                $_oggettistica, 
                                $_prodottiMedicinali, 
                                $_cane, 
                                $_gatto, 
                                $_collari, 
                                $_guinsagli, 
                                $_cucce,
                                $_giochi) {
        parent::__construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali);
        $this -> cane = $_cane;
        $this -> gatto = $_gatto;
        $this -> collari = $_collari;
        $this -> guinsagli = $_guinsagli;
        $this -> cucce = $_cucce;
        $this -> giochi = $_giochi;
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
                             'Giochi');

$cane = new Oggettistica('Prodotti Alimentari', 
                          'Oggettistica', 
                          'Prodotti medicinali', 
                          '----------Cane----------', 
                          '----------Gatto----------',
                          'Collari',
                          'Guinsagli',
                          'Cucce',
                          'Giochi');

$gatto = new Oggettistica('Prodotti Alimentari', 
                          'Oggettistica', 
                          'Prodotti medicinali', 
                          '----------Cane----------', 
                          '----------Gatto----------',
                          'Collari',
                          'Guinsagli',
                          'Cucce',
                          'Giochi');


// echo "<p>" . $prodotti -> oggettistica . "</p>";
// echo "<p>" . $cane -> cane . "</p>";
// echo "<p>" . $prodotti -> collari . "</p>";
// echo "<p>" . $prodotti -> guinsagli . "</p>";
// echo "<p>" . $prodotti -> cucce . "</p>";
// echo "<p>" . $gatto -> gatto . "</p>";
// echo "<p>" . $prodotti -> collari . "</p>";
// echo "<p>" . $prodotti -> guinsagli . "</p>";
// echo "<p>" . $prodotti -> cucce . "</p>";

?>

<?php include __DIR__ . '/../../partials/metaHead.php'; ?>

<?php include __DIR__ . '/../../partials/header.php'; ?>


<main>
    
    <div class="d-flex justify-content-center">
        <img src="../../assets/img/cuccioli.jpg" alt="">
    </div>

    <div>

        <?php 
        
            echo "<p>" . $prodotti -> oggettistica . "</p>";
            echo "<p>" . $cane -> cane . "</p>";
            echo "<p>" . $prodotti -> collari . "</p>";
            echo "<p>" . $prodotti -> guinsagli . "</p>";
            echo "<p>" . $prodotti -> cucce . "</p>";
            echo "<p>" . $gatto -> gatto . "</p>";
            echo "<p>" . $prodotti -> collari . "</p>";
            echo "<p>" . $prodotti -> guinsagli . "</p>";
            echo "<p>" . $prodotti -> cucce . "</p>";

        ?>

    </div>


</main>

    
</body>
</html>