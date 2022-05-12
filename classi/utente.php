<?php include __DIR__ . '/../traits/sconto.php'; ?>

<?php include __DIR__ . '/../traits/livello.php'; ?>

<?php

class Utente {

    use Sconto;

    use Livello;
    
    public $nome;
    public $cognome;
    public $compleanno;
    public $indirizzo;
    public $email;
    // public $livello;

    public function __construct($_livello, $_nome,$_cognome,$_compleanno,$_indirizzo,$_email){
        $this -> setLivello($_livello);
        // $this -> setSconto($_sconto);
        $this -> setNome($_nome);
        $this -> setCognome($_cognome);
        $this -> setCompleanno($_compleanno);
        $this -> setIndirizzo($_indirizzo);
        $this -> setEmail($_email);
        // $this -> setLivello($_livello);
    }

    //Setter
    public function setNome($_nome) {
        $this -> nome = $_nome;
    }

    public function setCognome($_cognome) {
        $this -> cognome = $_cognome;
    }

    public function setCompleanno($_compleanno) {
        $this -> compleanno = $_compleanno;
    }

    public function setIndirizzo($_indirizzo) {
        $this -> indirizzo = $_indirizzo;
    }

    public function setEmail($_email) {
        $this -> email = $_email;
    }

    // public function setLivello($_livello) {
    //     $this -> livello = $_livello;
    // }

    //Getter
    public function getNome() {
        return $this -> nome;
    }

    public function getCognome() {
        return $this -> cognome;
    }

    public function getCompleanno() {
        return $this -> compleanno;
    }

    public function getIndirizzo() {
        return $this -> indirizzo;
    }

    public function getEmail() {
        return $this -> email;
    }

    public function getLivello() {
        $this -> livello == 1;
        return $this -> livello;
    }

    public function getSconto() {
        if( $this -> livello == 1) {
            return $this -> sconto = 20;
        }
    }

}

$account = new Utente('1', 'Marco', 'Marchetti', '11-05-2000', 'Via Garibaldi', 'marco@email.it');

?>

<?php include __DIR__ . '/../partials/metaHead.php'; ?>

<?php include __DIR__ . '/../partials/header.php'; ?>

<div>
    
    

</div> 

