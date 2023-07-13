<!-- view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/style_acceuil.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../../assets/assets/fontawesome-5/css/all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../../assets/assets/fontawesome-5/css/all.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/style_code.css'); ?>">


</head>

<header>
        <nav>
            <ul class="nav">
                <li><a href="<?php echo base_url('home');?>">Accueil</a></li></li>
                <li><a href="<?php echo base_url('programme');?>">Programme</a></li></li>
                <li><a href="<?php echo base_url('Code');?>">Code</a></li></li>
                <li><a href="#">Balance : 0 Ar</a></li>
            </ul>
        </nav>
    </header>

<body>
    <div class="container">
        <h2>Profil</h2>
        <?php echo form_open('profil/save'); ?>
          <label for="gender">Genre :</label>
          <select id="gender" name="genre" required>
            <option value="">Sélectionnez</option>
            <option value="Masculin">Homme</option>
            <option value="Féminin">Femme</option>
          </select>

          <label for="height">Taille (cm):</label>
          <input type="number" id="height" name="taille" required>

          <label for="weight">Poids (kg):</label>
          <input type="number" id="weight" name="poids" required>

          <input type="submit" value="Valider">
        <?php echo form_close(); ?>
      </div>


      <footer>
        <div class="footer1">
          <div class="container1">
            <p>© 2023 Foodie. Tous droits réservés.</p>
            <p>Adresse : 123 Rue de la Gastronomie, Ville, Pays</p>
            <p>Téléphone : 0331588697</p>
            <p>ETU000000,ETU000000,ETU000000</p>
            <i class="fab fa-facebook " style="font-size: 30px; width: 18px;"></i>
            <i class="fab fa-twitter " style="font-size: 30px; width: 18px;margin-left: 15px;"></i>
            <i class=" fab fa-instagram" style="font-size: 30px; width: 18px;margin-left: 15px;"></i>
        </div>
      </footer>
</body>
</html>
