<?php

trait Utente {
    public $nome;
    public $cognome;
    public $compleanno;
    public $indirizzo;
    public $email;
    public $livello;
    public $sconto;

    public function __construct($_nome,$_cognome,$_compleanno,$_indirizzo,$_email, $_livello){
        $this -> nome = $_nome;
        $this -> cognome = $_cognome;
        $this -> compleanno = $_compleanno;
        $this -> indirizzo = $_indirizzo;
        $this -> email = $_email;
        $this -> livello = $_livello;
        $this -> sconto = $_sconto;
    }

    public function setNome() {
        $this -> nome = $_nome;
        return $this;
    }

    public function setCognome() {
        $this -> cognome = $_cognome;
        return $this;
    }

    public function setCompleanno() {
        $this -> compleanno = $_compleanno;
        return $this;
    }

    public function setCompleanno() {
        $this -> indirizzo = $_indirizzo;
        return $this;
    }
}

?>