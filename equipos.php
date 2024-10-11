<?php 
require_once "config.php"; 

try {
  $db        = conectar();
  $sql       = "SELECT * FROM equipos ORDER BY id DESC";
  $sentencia = $db->prepare($sql);
  $sentencia->execute();
  $equipos   = $sentencia->fetchAll();

} catch (Exception $e) {
  $_SESSION["error"] = $e->getMessage();
  header("Location: index.php?error=true");
  die;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de PHP 2023</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <?php echo mostrar_error(); ?>
        <?php echo mostrar_mensaje(); ?>

        <?php if (!empty($equipos)): ?>
          <a href="index.php" class="btn btn-success float-end">Agregar equipo</a>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Contacto</th>
                <th>Gamertag</th>
                <th>Email</th>
                <th>Juego</th>
                <th>Miembros</th>
                <th>Registro</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($equipos as $equipo): ?>
              <tr>
                <td><?php echo $equipo["nombre"]; ?></td>
                <td><?php echo $equipo["gamertag"]; ?></td>
                <td><?php echo $equipo["email"]; ?></td>
                <td><?php echo $equipo["juego"]; ?></td>
                <td><?php echo $equipo["miembros"]; ?></td>
                <td><?php echo date('d/M/Y', strtotime($equipo["creado"])); ?></td>
                <td>
                  <a 
                  class="btn btn-primary btn-sm" 
                  href="<?php echo sprintf("equipo.php?id=%s", $equipo["id"]) ?>">Editar</a>
                  <a 
                  class="btn btn-danger btn-sm" 
                  href="<?php echo sprintf("delete.php?id=%s", $equipo["id"]) ?>">Borrar</a>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
          <div class="alert alert-danger text-center">No hay equipos registrados en la base de datos.</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</body>
</html>