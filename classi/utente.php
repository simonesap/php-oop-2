<?php include __DIR__ . '/../traits/sconto.php'; ?>

<?php

class Utente {

    use Sconto;
    
    protected $nome;
    protected $cognome;
    protected $compleanno;
    protected $indirizzo;
    protected $email;
    protected $livello;

    public function __construct($_nome,$_cognome,$_compleanno,$_indirizzo,$_email, $_livello){
        $this -> setNome($_nome);
        $this -> setCognome($_cognome);
        $this -> setCompleanno($_compleanno);
        $this -> setIndirizzo($_indirizzo);
        $this -> setEmail($_email);
        $this -> setLivello($_livello);
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

    public function setLivello($_livello) {
        $this -> livello = $_livello;
    }

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
        return $this -> livello;
    }

    public function getSconto() {
        if( $this -> livello == 1) {
            return $this -> sconto = 20;
        }
    }

}

$account = new Utente('Marco', 'Marchetti', '11-05-2000', 'Via Garibaldi', 'marco@email.it', 1);

echo $account -> getNome() . '<br>';
echo $account -> getCognome() . '<br>';
echo $account -> getCompleanno() . '<br>';
echo $account -> getIndirizzo() . '<br>';
echo $account -> getEmail() . '<br>';
echo $account -> getLivello() . '<br>';
echo $account -> getSconto() . '<br>';



?>