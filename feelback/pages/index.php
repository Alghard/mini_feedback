<?php 

include '../utils/utils.php';

?>


<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FeelBack - Questionnaire de Satisfaction</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
<body>

    <!-- Header -->
    <header>
        <img src="../assets/logo.png" alt="Logo FeelBack" class="logo">
        <h1>FeelBack</h1>
        <p class="subtitle">Le questionnaire de satisfaction</p>
    </header>
<div class="h-screen">
    <!-- Bouton Consulter le Tableau de Bord -->
    <a href="dashboard.php"><button class="back-button">CONSULTER LE TABLEAU DE BORD</button></a>

    <!-- Section d'introduction -->
    <section class="intro-section">
        <h2>Bienvenue sur l'application FeelBack</h2>
        <p>Cette application vous permet d'évaluer la livraison de votre commande</p>
        <a href="feedback-form.php"><button class="create-order-button">CRÉER UNE COMMANDE FICTIVE ET RÉPONDRE AU QUESTIONNAIRE DE SATISFACTION</button></a>
    </section>
</div>
    <footer>
        <p>2024 | FeelBack</p>
    </footer>
</body>
</html>
