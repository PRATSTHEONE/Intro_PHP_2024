<?php require_once "config.php"; ?>
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
      <div class="col-12 col-md-6 col-lg-4">
        <?php echo mostrar_error(); ?>
        <?php echo mostrar_mensaje(); ?>

        <div class="card">
          <h3 class="card-header border-bottom-0">Registro de equipo</h3>
          <div class="card-body">
            <form action="process.php" method="POST">
              <div class="mb-3">
                <label class="form-label" for="gamertag">Gamertag:</label>
                <input class="form-control" type="text" id="gamertag" name="gamertag">
              </div>
        
              <div class="mb-3">
                <label class="form-label" for="nombre">Nombre:</label>
                <input class="form-control" type="text" id="nombre" name="nombre">
              </div>

              <div class="mb-3">
                <label class="form-label" for="email">Correo electrónico:</label>
                <input class="form-control" type="email" id="email" name="email">
              </div>

              <div class="mb-3">
                <label class="form-label" for="juego">Selecciona un juego:</label>
                <select class="form-select" name="juego" id="juego">
                  <?php foreach (cargar_juegos() as $juego): ?>
                    <option value="<?php echo $juego[0] ?>"><?php echo $juego[1]; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              
              <div class="mb-3">
                <label class="form-label" for="miembros">Número de miembros:</label>
                <input class="form-range" type="range" id="miembros" name="miembros" min="1" max="6" value="1">
              </div>
          
              <div class="mb-3">
                <label class="form-label" for="url">Red social:</label>
                <input class="form-control" type="url" id="url" name="url">
              </div>

              <div class="mb-3">
                <label class="form-label" for="color">Color del equipo:</label>
                <input class="form-control" type="color" id="color" name="color">
              </div>
          
              <button class="btn btn-success" type="submit">Registrarse</button>
              <button class="btn btn-danger" type="reset">Reiniciar</button>
            </form>
          </div>
          <div class="card-footer">
            <a href="equipos.php" class="btn btn-primary btn-sm">Ver equipos</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

