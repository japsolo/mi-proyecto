<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_GET['archivo']) &&
    file_exists(dirname(__FILE__).'/subidos/'.$_GET['archivo'])): ?>
    <a href="subidos/<?=$_GET['archivo']?>" download><?=$_GET['archivo']?></a>
    <?php else:
      $archivos = glob(dirname(__FILE__).'/subidos/*');
    ?>
    <ul>
      <?php
      foreach($archivos as $archivo):
        $archivo = basename($archivo);
      ?>
      <li><a href="subidos/<?=$archivo?>" download><?=$archivo?></a></li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </body>
</html>
