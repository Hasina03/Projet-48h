<!-- welcome_message.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/style_acceuil.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/style_code.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../../assets/assets/fontawesome-5/css/all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../../assets/assets/fontawesome-5/css/all.min.css'); ?>">
</head>
<body>
    <header>
        <nav>
            <ul class="nav">
                <li><a href="<?php echo base_url('home');?>">Accueil</a></li></li>
                <li><a href="<?php echo base_url('objectif');?>">Programme</a></li></li>
                <li><a href="<?php echo base_url('Code');?>">Code</a></li></li>
                <li><a href="#">Balance : 0 Ar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="feature-section">
            <h2 style="font-size: 60px; font-family: italic;">Bienvenue sur notre site</h2>
            <div class="menu">
                <p> Chez Foodie, nous sommes passionnés par la création d'expériences culinaires </p>
                <p> exceptionnelles. Notre équipe dévouée de chefs et de personnel travaille</p>
                <p> sans relâche pour vous offrir des plats succulents préparés à partir </p>
                <p> des ingrédients les plus frais.</p>
            </div>
            <a href="<?php echo base_url('objectif'); ?>"><button>En savoir plus</button></a>
        </div>
    </main>

    <footer>
        <div class="footer1">
            <div class="container">
                <p>© 2023 Foodie. Tous droits réservés.</p>
                <p>Adresse : 123 Rue de la Gastronomie, Ville, Pays</p>
                <p>Téléphone : 0331588697</p>
                <p>ETU000000, ETU000000, ETU000000</p>
                <i class="fab fa-facebook" style="font-size: 30px; width: 18px;"></i>
                <i class="fab fa-twitter" style="font-size: 30px; width: 18px; margin-left: 15px;"></i>
                <i class="fab fa-instagram" style="font-size: 30px; width: 18px; margin-left: 15px;"></i>
            </div>
        </div>
    </footer>
</body>
</html>
