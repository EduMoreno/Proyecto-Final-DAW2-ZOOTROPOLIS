<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page'])) ? $_REQUEST['page'] : 1;
    $per_page = 3; 
    $adjacents = 3; 
    $offset = ($page - 1) * $per_page;
    $numrows= Contenido::contador();
    $total_pages = ceil($numrows / $per_page);
    $reload = 'index.php';
    
    ?>
  </body>
</html>
