<?php
	require_once("../Controller/sesion.php");
	
	$sesion = new sesion();
	$usuario = $sesion->get("usuario");
	
   if (($usuario=="Administrador")||($usuario=="administrador")){


	?>
		
  
  <table  class="table table-bordered" style="width:83%" >
    
    <tr id="primeraFila"> 

      <td>ID</td>
	  <td>Nombre</td>
      <td>Fecha Alta</td>
      <td>Genero</td>
      <td>Edad</td>
      <td>Provincia</td>
      <td>Tipo de Animal</td> 
	  <td>Cuidador</td> 
      <td colspan="2">Botones</td>

    </tr>
    <?php
    foreach ($data['listado'] as $animal) {
      ?>
      <tr id="animal_<?= $animal->getId() ?>" align="center" data-idanimal="<?= $animal->getId() ?>">

        <td class="id"><?= $animal->getId() ?></td>
		<td class="nombre"><?= $animal->getNombre() ?></td>
        <td class="alta"><?= $animal->getFechaAlta() ?></td>
        <td class="genero"><?= $animal->getGenero() ?></td>
        <td class="edad"><?= $animal->getEdad() ?></td>
        <td class="provincia"><?= $animal->getProvincia() ?></td>
        <td class="idtipo" name="<?=$animal->getTipo()?>"><?=$animal->getNombreTipo()?></td>
	    <td class="idcuidador" name="<?=$animal->getCuidador()?>"><?=$animal->getNombreCuidador()?></td>

        <td class="accion"> <button id="borrar" type="button" class="btn btn-danger">Borrar</button>
         &nbsp; <button id="modificar" type="button" class="btn btn-warning" >Editar</button></td>

      </tr>


      <?php
    }
    ?>
  </table>
  <div class="table-pagination pull-right">
    <?php echo  paginate($reload, $page, $total_pages, $adjacents,$o,$f); ?>
  </div>

   <?php
   }else{
	   
  $mysql=new mysqli("localhost","root","","zoo");
    $registros=$mysql->query("select animal.*  from  cuidadores, animal, tipo
	where cuidadores.idcuidador=animal.idcuidador AND tipo.idtipo=animal.idtipo AND cuidadores.nombre='$usuario'") or
      die($mysql->error);
	?>
	
<div class="table-responsive"> 

  
  <table  class="table table-bordered" style="width:83%;" >
    
    <tr id="primeraFila"> 

      <td>ID</td>
	  <td>Nombre</td>
      <td>Fecha Alta</td>
      <td>Genero</td>
      <td>Edad</td>
      <td>Provincia</td>
      <td>Tipo de Animal</td> 
    

    </tr>
 <?php
    while ($reg=$registros->fetch_array())
    {
      echo '<tr>';
      echo '<td>';
      echo $reg['idanimal'];
      echo '</td>';	  
      echo '<td>';
      echo $reg['nombre'];	  
      echo '</td>';	  
      echo '<td>';
      echo $reg['fecha'];	  
      echo '</td>';	  
      echo '<td>';
      echo $reg['genero'];	  
      echo '</td>';
       echo '<td>';
      echo $reg['edad'];	  
      echo '</td>';
       echo '<td>';
      echo $reg['provincia'];	  
      echo '</td>';
       echo '<td>';
      echo $reg['idtipo'];	  
      echo '</td>';
	  
       echo '</tr>';
	   
        }
		
        
	?>
	</table>
	
	
  <?php
	 $registros2=$mysql->query("select *  from  tipo") or
      die($mysql->error);	
	  ?>
<div class="table-responsive"> 

  
  <table  class="table table-bordered" style="width:50%;" >
    
    <tr id="primeraFila"> 

      <td>ID</td>
	  <td>Nombre</td>      

    </tr>
 <?php
    while ($reg2=$registros2->fetch_array())
    {
      echo '<tr>';
      echo '<td>';
      echo $reg2['idtipo'];
      echo '</td>';	  
      echo '<td>';
      echo $reg2['nombre'];	  
      echo '</td>';	  
	 
      echo '</tr>';
        }
        $mysql->close();
   }
	?>
		
  </table>
        

   

  


