
<form action="<?= getUrlControllerMethod('Login','ingresar') ?>" method="POST">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="nombreUsuario">Nombre usuario</label>
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" aria-describedby="nombresHelp" placeholder="Ingrese el username">
                <small id="nombreUsuarioHelp" class="form-text text-muted">Ingrese el número del usuario</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="password" class="form-control" id="clave" name="clave" aria-describedby="apellidosHelp" placeholder="Ingrese la clave">
                <small id="claveHelp" class="form-text text-muted">Ingrese la clave</small>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Ingresar</button>
</form>