<?php

trait Prezzi {

    public $prezzoSeccoCane;
    public $prezzoSeccoGatto;
    public $prezzoUmidoCane;
    public $prezzoUmidoGatto;

    public function __construct($_prezzoSeccoCane, $_prezzoSeccoGatto, $_prezzoUmidoCane, $_prezzoUmidoGatto ) {
        $this -> prezzoSeccoCane = $_prezzoSeccoCane;
        $this -> prezzoSeccoGatto = $_prezzoSeccoGatto;
        $this -> prezzoUmidoCane = $_prezzoUmidoCane;
        $this -> prezzoUmidoGatto = $_prezzoUmidoGatto;
    }
    
    //Setter
    public function setPrezzoSeccoCane() {
        $this -> prezzoSeccoCane = $_prezzoSeccoCane;
        return $this -> prezzoSeccoCane;
    }

    public function setPrezzoSeccoGatto() {
        $this -> prezzoSeccoGatto = $_prezzoSeccoGatto;
        return $this -> prezzoSeccoGatto;
    }

    public function setPrezzoUmidoCane() {
        $this -> prezzoUmidoCane = $_prezzoUmidoCane;
        return $this -> prezzoUmidoCane;
    }
    
    public function setPrezzoUmidoGatto() {
        $this -> prezzoUmidoGatto = $_prezzoUmidoGatto;
        return $this -> prezzoUmidoGatto;
    }

    //Getter
    public function getPrezzoSeccoCane() {
        return $this -> prezzoSeccoCane;
    }

    public function getPrezzoSeccoGatto() {
        return $this -> prezzoSeccoGatto;
    }

    public function getPrezzoUmidoCane() {
        return $this -> prezzoUmidoCane;
    }
    
    public function getPrezzoUmidoGatto() {
        return $this -> prezzoUmidoGatto;
    }
    
}


?>