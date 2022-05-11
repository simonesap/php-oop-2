<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
    1 - L'e-commerce vende prodotti per gli animali.
    2 - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
    3 - L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
    4 - Il pagamento avviene con la carta di credito, che non deve essere scaduta.
    BONUS:
    Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). 
-->

<?php


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

    <?php include __DIR__ . '/./partials/header.php'; ?>

    <main>
        <?php


            include __DIR__ . '/./classi/classiFigli/prodottiAlimentari.php';
            include __DIR__ . '/./classi/classiFigli/oggettistica.php';
            include __DIR__ . '/./classi/classiFigli/prodottiMedicinali.php';

        ?>

        
        
            <!-- // echo "<p>" . $prodotti -> prodottiAlimentari . "</p>";
            // echo "<p>" . $secco -> tipo . "</p>";
            // echo "<p>" . $prodotto -> cane . "</p>";
            // echo "<p>" . $prodotto -> carne . "</p>";
            // echo "<p>" . $prodotto -> pesce . "</p>";
            // echo "<p>" . $prodotto -> verdura . "</p>";
            // echo "<p>" . $prodotto -> gatto . "</p>";
            // echo "<p>" . $prodotto -> carne . "</p>";
            // echo "<p>" . $prodotto -> pesce . "</p>";
            // echo "<p>" . $prodotto -> verdura . "</p>";
         -->
    

    </main>

    
</body>
</html>
