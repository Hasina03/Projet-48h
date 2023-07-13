<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/style_code.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/menus.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets/css/style_acceuil.css'); ?>">
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
        <h2>Recharge</h2>
        <form>
            <label for="code">Code de recharge :</label>
            <input type="text" id="code" name="code" required>
            <br>
            <input type="submit" value="Valider">
        </form>
    </div>

    <div class="table" >
        <table>
          <thead>
            <tr>
              <th>Code</th>
              <th>Valeur (Ar)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>ABC12345</td>
              <td>10,000</td>
            </tr>
            <tr>
              <td>DEF67890</td>
              <td>10,000</td>
            </tr>
            <tr>
              <td>GHI12345</td>
              <td>10,000</td>
            </tr>
            <tr>
              <td>JKL67890</td>
              <td>20,000</td>
            </tr>
            <tr>
              <td>MNO12345</td>
              <td>20,000</td>
            </tr>
            <tr>
              <td>PQR67890</td>
              <td>20,000</td>
            </tr>
            <tr>
              <td>STU12345</td>
              <td>50,000</td>
            </tr>
            <tr>
              <td>VWX67890</td>
              <td>50,000</td>
            </tr>
            <tr>
              <td>YZA12345</td>
              <td>50,000</td>
            </tr>
            <tr>
              <td>BCD67890</td>
              <td>100,000</td>
            </tr>
            <tr>
              <td>EFG12345</td>
              <td>100,000</td>
            </tr>
            <tr>
              <td>HIJ67890</td>
              <td>100,000</td>
            </tr>
          </tbody>
        </table>
      </div>
</body>
</html>
