    <section >
        <div class="container"> 
            <?php if (isset($_GET["accion"])) { ?>
                <div class="<?= $clase ?>" role="alert">
                    <?= $mensaje?>
                </div>
            <?php  } ?>
            <h1>Aca va el contenido principal</h1>
            
        </div>
    </section> 