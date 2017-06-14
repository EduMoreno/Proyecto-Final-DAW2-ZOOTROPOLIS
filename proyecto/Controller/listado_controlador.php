<?php
$action = (isset($_REQUEST['action']) && $_REQUEST['action'] != NULL) ? $_REQUEST['action'] : '';
$o = (isset($_REQUEST['ordenar']) && $_REQUEST['ordenar'] != NULL) ? $_REQUEST['ordenar'] : '1';
$f=(isset($_REQUEST['forma']) && $_REQUEST['forma'] != NULL) ? $_REQUEST['forma'] : 'ASC';
 require_once '../Model/Contenido.php';
if ($action == 'ajax') {
	if(isset($_REQUEST['buscar'])){
		$buscar = $_GET['buscar'];
	}else{
		$buscar = "";
	}
  $data['listado'] = Contenido::getListZoo($o,$f,$buscar);
  include '../Model/lista.php';
  include '../View/listado.php';
  ?>

<?php
} else {
  ?>
  <div class="alert alert-warning alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    No hay datos para mostrar
  </div>
  <?php
}
?>

