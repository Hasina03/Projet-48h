<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/style_regime.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/style_acceuil.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/style_code.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/menus.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../../assets/assets/fontawesome-5/css/all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../../assets/assets/fontawesome-5/css/all.min.css'); ?>">
</head>

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
<body>
    <div class="container" style="margin-top: 225px;">
           <form action="<?php echo base_url('objectif/save')?> " method="post">
                <label for="regime">choix de régime:
                    <select id="regime" name="objectif" required>
                        <option value="1">Perdre du poids</option>
                        <option value="2">Prendre du poids</option>
                    </select>
                </label>
                <br>
                <input type="submit" value="suivant">
            </form>
    </div>
</body>
</html>
