<?php

include __DIR__ . '/../../classi/magazzino.php';

class ProdottiAlimentari extends Magazzino {
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
// echo "<p>" . $umido -> tipo . "</p>";

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
