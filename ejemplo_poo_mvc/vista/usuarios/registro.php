
    <form action="<?= getUrlControllerMethod('Usuarios','registrar') ?>" method="POST">
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