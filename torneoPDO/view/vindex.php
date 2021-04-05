<section>
    <div class="container DivClassIniciarSesion">
        <?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje?>
            </div>
        <?php  } ?>
        <h1>Iniciar sesión</h1>
        <form action="iniciar.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            </div>
            <div class="d-grid gap-2 divRegistrarse">
                <a class="btn btn-success" href="usuarios/usuarioscreate.php">Registrarse</a>    
            </div>
        </form>
    </div>
</section>