
<?php if(isset($data["mensaje"]) && $data["mensaje"]) { ?>
    <div class="alert alert-success" role="alert">
    <?= $data["mensaje"] ?>
    </div>
<?php } ?>