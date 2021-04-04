<section>
    <div class="container">
        <h1>Actualizar equipo</h1>
        <form method="POST" action="equiposupdate.php">
            <div class="mb-3">
                <label for="id" class="form-label">Id del equipo</label>
                <input type="number" class="form-control" id="id" name="id" value="<?= $equipo->id ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del equipo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $equipo->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="dt" class="form-label">Director técnico</label>
                <input type="text" class="form-control" id="dt" name="dt" value="<?= $equipo->dt ?>">
            </div>
            <div class="mb-3">
                <label for="municipio" class="form-label">Municipio</label>
                <select class="form-select" aria-label="Default select example" name="municipio" id="municipio" >
                    <?php foreach ($municipios as $municipio) { ?>
                        <!-- <option value="<-?= $municipio->id ?>" <-?php if ($municipio->id == $equipo->municipio) echo "selected" ?>> <-?= $municipio->nombre ?> </option>  -->
                        <option value="<?= $municipio->id ?>" <?php if ($municipio->id == $equipo->municipio){ ?> selected <?php } ?>><?= $municipio->nombre ?></option>
                    <?php } ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Insertar</button>
        </form>
    </div>
</section>