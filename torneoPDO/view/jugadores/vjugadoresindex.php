<section>
<div class="container">
<?php if(isset($_GET["accion"])){ ?>
  <div class="<?= $clase ?>" role="alert">
  <?= $mensaje ?>
</div>
<?php } ?>
<h1>Listado de Jugadores</h1>
<table class="table">
  <thead>
    <tr>     
      <th scope="col">Documento</th>
      <th scope="col">Nombre</th>
      <th scope="col">Posición</th>
      <th scope="col">Equipo</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($jugadores as $jugador){  ?>
    <tr>      
      <td><?= $jugador->documento ?></td>
      <td><?= $jugador->nombre ?></td>
      <td><?= $jugador->posicion_nombre ?></td>
      <td><?= $jugador->equipo_nombre ?></td>
      <td>
      <a class="btn btn-primary" href="jugadoresedit.php? documento=<?= $jugador->documento ?>" role="button">Actualizar</a>
      <a class="btn btn-danger" href="jugadoresdestroy.php? documento=<?= $jugador->documento ?>" role="button">Eliminar</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</section>