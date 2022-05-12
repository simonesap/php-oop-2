<?php

class Inventario {
    public $prodottiAlimentari;
    public $oggettistica;
    public $prodottiMedicinali;

    //Imposto un costruttore
    public function __construct($_prodottiAlimentari, $_oggettistica, $_prodottiMedicinali) {
        $this -> prodottiAlimentari = $_prodottiAlimentari;
        $this -> oggettistica = $_oggettistica;
        $this -> prodottiMedicinali = $_prodottiMedicinali;
    }

}

$prodotti = new Inventario('Prodotti Alimentari', 'Oggettistica', 'Prodotti medicinali');

?>