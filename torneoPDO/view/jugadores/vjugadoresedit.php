<section>
<div class="container">
<h1>Actualizar Jugador</h1>
<form method="post" action="jugadoresupdate.php">
<div class="mb-3">
    <label for="documento" class="form-label">Documento del Jugador</label>
    <input type="text" class="form-control" id="documento" name="documento" value="<?= $jugador->documento ?>" readonly>
  </div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre del Jugador</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $jugador->nombre?>">
  </div>
  <div class="mb-3">
    <label for="posicion" class="form-label">Posición del Jugador</label>
    <select class="form-select" aria-label="Default select example" name="posicion" id="posicion" >
      <?php foreach ($posiciones as $posicion) { ?>
        <option value="<?= $posicion->id ?>" <?php if ($posicion->id == $jugador->posicion) { ?>selected<?php } ?> ><?= $posicion->nombre ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="equipo" class="form-label">Equipo del Jugador</label>
    <select class="form-select" aria-label="Default select example" name="equipo" id="equipo" >
      <?php foreach ($equipos as $equipo) { ?>
        <option value="<?= $equipo->id ?>" <?php if ($equipo->id == $jugador->equipo) { ?> selected <?php } ?> ><?= $equipo->nombre ?></option>
      <?php } ?>  
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Insertar</button>
</form>
</div>
</section>