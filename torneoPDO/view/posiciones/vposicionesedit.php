<section>
    <div class="container">
        <h1>Actualizar posicion</h1>
        <form method="POST" action="posicionesupdate.php">
            <div class="mb-3">
                <label for="id" class="form-label">Id de la posicion</label>
                <input type="number" class="form-control" id="id" name="id" value="<?= $posicion->id ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="posicion" class="form-label">Nombre de la posición</label>
                <input type="text" class="form-control" id="posicion" name="posicion" value="<?= $posicion->nombre ?>">
            </div>
            <button type="submit" class="btn btn-primary">Insertar</button>
        </form>
    </div>
</section>