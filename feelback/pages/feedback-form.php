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

    <a href="index.php"><button class="back-button">REVENIR SUR LA PAGE D'ACCUEIL</button></a>

    <!-- Formulaire d'avis -->
    <section class="feedback-form">
        <h2>Donner votre avis</h2>
        
        <form>
            <p>Évaluer de 1 à 5 le respect du délai de livraison</p>
            <div class="rating">
                <label><input type="radio" name="delai" value="1"> 1</label>
                <label><input type="radio" name="delai" value="2"> 2</label>
                <label><input type="radio" name="delai" value="3"> 3</label>
                <label><input type="radio" name="delai" value="4"> 4</label>
                <label><input type="radio" name="delai" value="5"> 5</label>
            </div>
            
            <p>Évaluer de 1 à 5 l'état de votre colis à sa réception</p>
            <div class="rating">
                <label><input type="radio" name="etat_colis" value="1"> 1</label>
                <label><input type="radio" name="etat_colis" value="2"> 2</label>
                <label><input type="radio" name="etat_colis" value="3"> 3</label>
                <label><input type="radio" name="etat_colis" value="4"> 4</label>
                <label><input type="radio" name="etat_colis" value="5"> 5</label>
            </div>
            
            <p>Évaluer de 1 à 5 le comportement du livreur</p>
            <div class="rating">
                <label><input type="radio" name="comportement_livreur" value="1"> 1</label>
                <label><input type="radio" name="comportement_livreur" value="2"> 2</label>
                <label><input type="radio" name="comportement_livreur" value="3"> 3</label>
                <label><input type="radio" name="comportement_livreur" value="4"> 4</label>
                <label><input type="radio" name="comportement_livreur" value="5"> 5</label>
            </div>

            <button type="submit" class="submit-button">ENVOYER</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>2024 | FeelBack</p>
    </footer>
    
</body>
</html>