<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Usuarios - Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
</head>
<body>

    <?php if($mensaje) { ?>
        <div class="alert alert-success" role="alert">
        <?= $mensaje ?>
        </div>
    <?php } ?>

    <form action="<?= CONTEXT_ROOT."/index.php" ?>" method="POST">
        <input type="hidden" name="controller" value="Usuarios"/>
        <input type="hidden" name="method" value="registrar"/>
        <div class="form-group">
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" aria-describedby="nombresHelp" placeholder="Ingrese los nombres del nuevo usuario">
            <small id="nombresHelp" class="form-text text-muted">Ingrese todos los nombres</small>
        </div>
        <div class="form-group">
            <label for="apellidos">apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" aria-describedby="apellidosHelp" placeholder="Ingrese los apellidos del nuevo usuario">
            <small id="apellidosHelp" class="form-text text-muted">Ingrese todos los apellidosHelp</small>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>