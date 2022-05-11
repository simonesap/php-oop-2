<?php

class Magazzino {
    public $prodottiAlimentari;
    public $oggettistica;
    public $prodottiMedicinali;
    // public $quantità;
    // public $prezzo;
    // public $prezzoTotale;

    //Imposto un costruttore
    public function __construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali) {
        $this -> prodottiAlimentari = $_prodottiAlimentari;
        $this -> oggettistica = $_oggettistica;
        $this -> prodottiMedicinali = $_prodottiMedicinali;
    }

}

$prodotti = new Magazzino('Prodotti Alimentari', 'Oggettistica', 'Prodotti medicinali');


// echo "<p>" . $prodotti -> prodottiAlimentari . "</p>";
// echo "<p>" . $prodotti -> oggettistica . "</p>";
// echo "<p>" . $prodotti -> prodottiMedicinali . "</p>";

?>