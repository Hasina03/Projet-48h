<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="sign.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/singup.css'); ?>">
    <title>Sign Up</title>

</head>

<body>
    <div class="cadre">
        <h2>Sign Up</h2>
        <div>
            <form class="text-center" action="<?php echo base_url('login/insert') ?>" method="post">
                <div class="name"><input type="text" name="nom" placeholder="Username"></div>
                <div class="name" ><input type="email" name="email" placeholder="Email"></div>
                <div class="name"><input  type="date" name="birth"  onfocus="(this.type='date')" placeholder="Birth's date"></div>
                <div class="name"><input type="password" name="password" placeholder="Password"></div>
                <div class="name"><input  type="password" name="passwordConf" placeholder="Confirm your password"></div>
                <div class="name"> <button type="submit" value="Register">S'inscrire</button>
                <P style="color: black;">Déjà un compte?<a style="blue;" href="<?php echo base_url('login/index')?>">Connectez-vous</a></P>
            </form>
        </div>
    </div>
</body>

</html>
