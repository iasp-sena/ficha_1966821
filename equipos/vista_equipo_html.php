<table>
    <thead>
        <tr>
            <th>Número</th>
            <th>Nombre</th>
            <th>Posicion</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($equipo as $jugador) { ?>
            <tr>
                <td><?php echo $jugador["numero"]; ?></td>
                <td><?= $jugador["nombre"] ?></td>
                <td><?= $jugador["posicion"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>