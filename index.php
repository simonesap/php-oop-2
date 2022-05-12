<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
    1 - L'e-commerce vende prodotti per gli animali.
    2 - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    3 - L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
    4 - Il pagamento avviene con la carta di credito, che non deve essere scaduta.
    BONUS:
    Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). 
-->

<?

include __DIR__ . '/./classi/cartaDiCredito.php'; 


?>

<?php include __DIR__ . '/./partials/metaHead.php'; ?>

<?php include __DIR__ . '/./partials/header.php'; ?>

<?php 

$carta1 = new Carta ('Marco', 'Marchetti', '05', '2000', '1234568789');

echo $carta1 -> nome . '<br>';
echo $carta1 -> cognome . '<br>';
echo $carta1 -> meseScadenza . '<br>';
echo $carta1 -> annoScadenza . '<br>';
echo $carta1 -> numero . '<br>';

var_dump( $carta1 -> scadenzaCarta() );

?>


<div class="d-flex justify-content-center">
    <img src="./assets/img/cani-e-gatti.jpg" alt="">
</div>

    
</body>
</html>
