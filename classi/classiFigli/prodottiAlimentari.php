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
    


    public function __construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali, $_tipo, $_cane, $_gatto, $_carne, $_pesce, $_verdura ) {
        parent::__construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali, $_tipo);
        $this -> cane = $_cane;
        $this -> gatto = $_gatto;
        $this -> carne = $_carne;
        $this -> pesce = $_pesce;
        $this -> verdura = $_verdura;
    }

}

$prodotto = new Secco('Prodotti Alimentari',
                                 'Oggettistica',
                                 'Prodotti medicinali',
                                 '----------SECCO----------',
                                 '----------Cane----------',
                                 '----------Gatto----------',
                                 'CARNE: <br> Crocchette di manzo - Crocchette al maiale',
                                 'PESCE: <br> Crocchette al salmone - Crocchette al tonno',
                                 'VEGETALI: <br> Crocchette vegetali');


// echo "<p>" . $prodotti -> prodottiAlimentari . "</p>";
// echo "<p>" . $secco -> tipo . "</p>";
// echo "<p>" . $prodotto -> cane . "</p>";
// echo "<p>" . $prodotto -> carne . "</p>";
// echo "<p>" . $prodotto -> pesce . "</p>";
// echo "<p>" . $prodotto -> verdura . "</p>";
// echo "<p>" . $prodotto -> gatto . "</p>";
// echo "<p>" . $prodotto -> carne . "</p>";
// echo "<p>" . $prodotto -> pesce . "</p>";
// echo "<p>" . $prodotto -> verdura . "</p>";
// // echo "<p>" . $umido -> tipo . "</p>";

class Umido extends ProdottiAlimentari {
    //secco umido crocchette patè gusti
    //pesce carne verdura
    public $cane;
    public $gatto;
    public $carne;
    public $pesce;
    public $verdura;
    


    public function __construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali, $_tipo, $_cane, $_gatto, $_carne, $_pesce, $_verdura ) {
        parent::__construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali, $_tipo);
        $this -> cane = $_cane;
        $this -> gatto = $_gatto;
        $this -> carne = $_carne;
        $this -> pesce = $_pesce;
        $this -> verdura = $_verdura;
    }

}

$prodotto = new Umido('Prodotti Alimentari',
                                 'Oggettistica',
                                 'Prodotti medicinali',
                                 '----------UMIDO----------',
                                 '----------Cane----------',
                                 '----------Gatto----------',
                                 'CARNE: <br> Patè di manzo - Patè di maiale',
                                 'PESCE: <br>Patè di salmone - Patè di tonno',
                                 'VEGETALI: <br> Patè vegetali');


// echo "<p>" . $umido -> tipo . "</p>";
// echo "<p>" . $prodotto -> cane . "</p>";
// echo "<p>" . $prodotto -> carne . "</p>";
// echo "<p>" . $prodotto -> pesce . "</p>";
// echo "<p>" . $prodotto -> verdura . "</p>";
// echo "<p>" . $prodotto -> gatto . "</p>";
// echo "<p>" . $prodotto -> carne . "</p>";
// echo "<p>" . $prodotto -> pesce . "</p>";
// echo "<p>" . $prodotto -> verdura . "</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Animalista.it</title>
</head>
<body>

   

    <main>
        
        <?php

            include __DIR__ . '/./oggettistica.php';
            include __DIR__ . '/./prodottiMedicinali.php';

        ?>
        <div>

            <?php 
            
                echo "<p>" . $prodotti -> prodottiAlimentari . "</p>";
                echo "<p>" . $secco -> tipo . "</p>";
                echo "<p>" . $prodotto -> cane . "</p>";
                echo "<p>" . $prodotto -> carne . "</p>";
                echo "<p>" . $prodotto -> pesce . "</p>";
                echo "<p>" . $prodotto -> verdura . "</p>";
                echo "<p>" . $prodotto -> gatto . "</p>";
                echo "<p>" . $prodotto -> carne . "</p>";
                echo "<p>" . $prodotto -> pesce . "</p>";
                echo "<p>" . $prodotto -> verdura . "</p>";
            
            ?>

        </div>

        <div>

            <?php 
            
                echo "<p>" . $umido -> tipo . "</p>";
                echo "<p>" . $prodotto -> cane . "</p>";
                echo "<p>" . $prodotto -> carne . "</p>";
                echo "<p>" . $prodotto -> pesce . "</p>";
                echo "<p>" . $prodotto -> verdura . "</p>";
                echo "<p>" . $prodotto -> gatto . "</p>";
                echo "<p>" . $prodotto -> carne . "</p>";
                echo "<p>" . $prodotto -> pesce . "</p>";
                echo "<p>" . $prodotto -> verdura . "</p>";
                
            
            ?>

        </div>
        

    </main>

    
</body>
</html>
