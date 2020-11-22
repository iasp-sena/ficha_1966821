
<form action="<?= getUrlControllerMethod('Usuarios','registrar') ?>" method="POST">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="tipoDocumento">Tipo de documento</label>
                <select class="custom-select" name="tipoDocumento">
                    <option selected>Seleccione una opción...</option>
                    <?php foreach($data["tiposDocumentos"] as $td){ ?>
                    <option value="<?= $td->getId() ?>"><?= $td->getDescripcion() ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="numeroDocumento">Número documento</label>
                <input type="text" class="form-control" id="numeroDocumento" name="numeroDocumento" aria-describedby="apellidosHelp" placeholder="Ingrese el número de documento">
                <small id="numeroDocumentoHelp" class="form-text text-muted">Ingrese el número de documento</small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" aria-describedby="nombresHelp" placeholder="Ingrese los nombres del nuevo usuario">
                <small id="nombresHelp" class="form-text text-muted">Ingrese todos los nombres</small>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" aria-describedby="apellidosHelp" placeholder="Ingrese los apellidos del nuevo usuario">
                <small id="apellidosHelp" class="form-text text-muted">Ingrese todos los apellidosHelp</small>
            </div>
        </div>
    </div>
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
    <button type="submit" class="btn btn-primary">Registrar</button>
</form>