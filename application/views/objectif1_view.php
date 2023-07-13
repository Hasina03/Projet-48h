<!-- view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/menus.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/style_acceuil.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../../assets/assets/fontawesome-5/css/all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../../assets/assets/fontawesome-5/css/all.min.css'); ?>">
    <title>Document</title>
</head>
<body>

    <!-- HEADER -->

    <header style="background-color: #3b3b2c;">

        <nav>
          <ul class="nav">
                <li><a href="<?php echo base_url('home');?>">Accueil</a></li></li>
                <li><a href="<?php echo base_url('programme');?>">Programme</a></li></li>
                <li><a href="<?php echo base_url('Code');?>">Code</a></li></li>
                <li><a href="#">Balance : 0 Ar</a></li>
          </ul>
        </nav>
    </header>


<div>
<h1 style="margin-top: ;50px">Plat</h1>
    <div class="touts">
        <?php if (!empty($programme_details)) { ?>
            <?php foreach ($programme_details as $programme) { ?>
                <div class="cadre1">
                    <div class="image">
                        <img src="<?php echo base_url($programme->plat_photo); ?>" alt="" style="border-radius: 2%; width: 90%;height: 100%;">
                    </div>
                    <div class="context">
                        <p><?php echo $programme->plat_nom; ?></p>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>Aucun programme disponible pour cet objectif.</p>
        <?php } ?>
    </div>
</div>

<div>
    <h1>Activite</h1>
    <div class="touts">
            <?php if (!empty($programme_details)) { ?>
                <?php foreach ($programme_details as $programme) { ?>
                    <div class="cadre1">
                        <div class="image">
                            <img src="<?php echo base_url($programme->activite_photo); ?>" alt="" style="border-radius: 2%; width: 90%;height: 100%;">
                        </div>
                        <div class="context">
                            <p><?php echo $programme->activite_nom; ?></p>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <p>Aucun programme disponible pour cet objectif.</p>
            <?php } ?>
    </div>
</div>


</body>
</html>
