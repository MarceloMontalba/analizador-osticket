<?php 
include "conex.php";

$sql = "SELECT topic_id, topic FROM ost_help_topic 
        WHERE topic_id>11 ORDER BY topic ASC";
$consulta = mysqli_query($conexion, $sql); 
?>

<div class="row">
  <div class="col-md-2 d-flex align-items-center justify-content-center">
    <h6 class="br-section-label">Tema/Tópico</h6>
  </div>
  <div class="col-md-5 bd-success">
    <select class="form-control select2" data-placeholder="Elegir tema">
      <optgroup label="Temas/Tópicos Activos">
        <?php while($fila = mysqli_fetch_assoc($consulta)) { ?>
        <option value='<?php echo $fila["topic_id"]; ?>'><?php echo $fila["topic"]; ?></option>
        <?php } ?>
      </optgroup>
    </select>
  </div>
</div>