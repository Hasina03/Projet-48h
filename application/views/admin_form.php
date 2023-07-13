<!-- application/views/admin_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style_admin.css'); ?>">
</head>
<body>
    <div class="container">
        <h2>Admin Page</h2>

        <div class="regime-form">
            <h3>Ajouter un programme</h3>
            <form method="post" action="<?php echo site_url('admin/ajouterProgramme'); ?>">
              <label>ID</label>
              <input type="text" name="id" required>
              <label>ID Plat</label>
              <input type="text" name="id_plat" required>
              <label>ID Objectifs</label>
              <input type="text" name="id_objectifs" required>
              <label>ID Activite</label>
              <input type="text" name="id_activite" required>
              <input type="submit" value="Ajouter">
            </form>
          </div>

        <div class="regime">
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>ID Plat</th>
                <th>ID Objectifs</th>
                <th>ID Activite</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($programme as $programme): ?>
              <tr>
                <td><?php echo $programme->id; ?></td>
                <td><?php echo $programme->id_plat; ?></td>
                <td><?php echo $programme->id_objectifs; ?></td>
                <td><?php echo $programme->id_activite; ?></td>
                <td class="actions">
                <a href="<?php echo site_url('admin/supprimerProgramme/'.$programme->id); ?>">Supprimer</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>


        <div class="plats">
            <div class="plats-form">
                <h3>Ajouter un plat</h3>
                <form method="post" action="<?php echo site_url('admin/ajouterPlat'); ?>">
                    <label>ID Plat</label>
                    <input type="text" name="id" required>
                    <label>Nom Plat</label>
                    <input type="text" name="nom" required>
                    <label>Path photos</label>
                    <input type="text" name="photo" required>
                    <input type="submit" value="Ajouter">
                </form>
            </div>

            <table>
              <thead>
                <tr>
                  <th>ID Plat</th>
                  <th>Nom Plat</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($plat as $plat): ?>
                <tr>
                  <td><?php echo $plat->id; ?></td>
                  <td><?php echo $plat->nom; ?></td>
                  <td class="actions">
                    <a href="<?php echo site_url('admin/supprimerPlat/'.$plat->id); ?>">Supprimer</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

          </div>

          <div class="activite">
            <div class="activite-form">
              <h4>Ajouter une activité</h4>
              <form method="post" action="<?php echo site_url('admin/ajouterActivite'); ?>">
                <label>ID Activité</label>
                <input type="text" name="id" required>
                <label>Nom Activité</label>
                <input type="text" name="nom" required>
                <label>Path photos</label>
                <input type="text" name="photo" required>
                <input type="submit" value="Ajouter">
              </form>
            </div>
            <h3>Gestion des activités</h3>
            <table>
              <thead>
                <tr>
                  <th>ID Activité</th>
                  <th>Nom Activité</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($activite as $activite): ?>
                <tr>
                  <td><?php echo $activite->id; ?></td>
                  <td><?php echo $activite->nom; ?></td>
                  <td class="actions">
                    <a href="<?php echo site_url('admin/supprimerActivite/'.$activite->id); ?>">Supprimer</a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>

      </div>
</body>
</html>
