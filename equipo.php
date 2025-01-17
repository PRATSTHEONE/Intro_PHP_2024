<?php 
require_once "config.php"; 

try {
  $id        = null;

  // Validando que exista el parámetro en la url
  if (!isset($_GET["id"])) {
    throw new Exception("No existe el equipo en la base de datos.");
  }

  $id        = $_GET["id"];
  $db        = conectar();
  $sql       = "SELECT * FROM equipos WHERE id = :id LIMIT 1";
  $sentencia = $db->prepare($sql);
  $sentencia->bindParam("id", $id);
  $sentencia->execute();
  $equipos   = $sentencia->fetchAll();

  // Validar si existe el equipo
  if (empty($equipos)) {
    throw new Exception("No existe el equipo en la base de datos.");
  }

  $equipo = $equipos[0];

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
  <title><?php echo sprintf("Actualizando %s - Curso de PHP 2023", $equipo["gamertag"]); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <?php echo mostrar_error(); ?>
        <?php echo mostrar_mensaje(); ?>

        <div class="card">
          <h3 class="card-header border-bottom-0">Actualizar equipo</h3>
          <div class="card-body">
            <form action="process_update.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $equipo["id"]; ?>">
              <div class="mb-3">
                <label class="form-label" for="gamertag">Gamertag:</label>
                <input 
                value="<?php echo $equipo["gamertag"]; ?>"
                class="form-control" 
                type="text" 
                id="gamertag" 
                name="gamertag">
              </div>
        
              <div class="mb-3">
                <label class="form-label" for="nombre">Nombre:</label>
                <input 
                value="<?php echo $equipo["nombre"]; ?>"
                class="form-control" 
                type="text" 
                id="nombre" 
                name="nombre">
              </div>

              <div class="mb-3">
                <label class="form-label" for="email">Correo electrónico:</label>
                <input 
                value="<?php echo $equipo["email"]; ?>"
                class="form-control" 
                type="email" 
                id="email" 
                name="email">
              </div>

              <div class="mb-3">
                <label class="form-label" for="juego">Selecciona un juego:</label>
                <select class="form-select" name="juego" id="juego">
                  <?php foreach (cargar_juegos() as $juego): ?>
                    <option 
                    value="<?php echo $juego[0] ?>"
                    <?php echo $juego[0] === $equipo["juego"] ? "selected" : null; ?>
                    ><?php echo $juego[1]; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              
              <div class="mb-3">
                <label class="form-label" for="miembros">Número de miembros:</label>
                <input 
                value="<?php echo $equipo["miembros"]; ?>"
                class="form-range" 
                type="range" 
                id="miembros" 
                name="miembros" 
                min="1" max="6">
              </div>
          
              <div class="mb-3">
                <label class="form-label" for="url">Red social:</label>
                <input 
                value="<?php echo $equipo["url"]; ?>"
                class="form-control" 
                type="url" 
                id="url" 
                name="url">
              </div>

              <div class="mb-3">
                <label class="form-label" for="color">Color del equipo:</label>
                <input 
                value="<?php echo $equipo["color"]; ?>"
                class="form-control" 
                type="color" 
                id="color" 
                name="color">
              </div>
          
              <button class="btn btn-success" type="submit">Guardar cambios</button>
              <button class="btn btn-danger" type="reset">Cancelar</button>
            </form>
          </div>
          <div class="card-footer">
            <a href="equipos.php" class="btn btn-primary btn-sm">Regresar a equipos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>