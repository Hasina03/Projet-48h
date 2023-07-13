
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('../../assets/assets/fontawesome-5/css/all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/login.css'); ?>">
    <title>Login</title>
</head>

<body >

    <div class="cadre">
        <h1>Connexion</h1>
        <p><i class=" fab fa-user" style="font-size: 30px; width: 18px;margin-left: 15px; color: aqua;"></i></p>
        <form action="<?php echo base_url('Login/check')?>" method="post">
                <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
                <input type="password" name="mdp" placeholder="Password" value="<?php echo $mdp; ?>">
                <button type="submit" value="Login">Login</button>
            <div class="sign">
                <P style="color: black;">Pas encore du compte ?<a style="blue;" href="<?php echo base_url('login/signup')?>">Sign up</a></P>
            </div>
        </form>
    </div>

</body>

</html>
