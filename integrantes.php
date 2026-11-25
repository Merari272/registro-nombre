<?php
$integrantes = [];
if (isset($_POST['nombre']) && $_POST['nombre'] != "") {
    $integrantes[] = $_POST['nombre'];
}
?>
<h2>Integrar integrante</h2>
<form method="POST">
  <label>Nombre:</label><br>
  <input type="text" name="nombre" required>
  <button type="submit">Integrar</button>
</form>

<?php if (!empty($integrantes)): ?>
  <h3>Integrado:</h3>
  <p><?php echo $integrantes[0]; ?> ✅ ya está integrado</p>
<?php endif; ?>