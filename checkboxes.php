<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
  $categorias = file_get_contents("categorias.json");
  $json = json_decode($categorias, true);
?>
    <form action="checkboxes_recibir.php" method="post">

      <?php foreach($json['categorias'] as $categoria): ?>

      <input type="checkbox" name="categorias[]" value="<?=$categoria['id']?>"> <?=$categoria['nombre']?><br>

      <?php endforeach; ?>

    </form>
  </body>
</html>
