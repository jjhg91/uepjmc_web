<?php 
require('menu.php');


inicio();
head();  

$conexion  = new mysqli("localhost", "root", "", "iutjmc");

if($conexion->connect_errno)
{
    echo "Error de conexion de la base datos".$conexion->connect_error;
    exit();
}

 $v1 = $_POST['ci'];

         $sql = "SELECT `racademico`.`ID_Estudia`,
          `racademico`.`Período`,
           `racademico`.`Curso`,
            `racademico`.`Califica`,
             `estudiante`.`Cédula`,
              `estudiante`.`P_APELLIDO`,
              `estudiante`.`P_Nombres`,
               `estudiante`.`Especialidad`
                FROM `racademico`,`estudiante`
                 WHERE `racademico`.`ID_Estudia` = `estudiante`.`ID_Estudia`
                  AND `estudiante`.`Cédula` = ".$v1." ";

$resultado = $conexion->query($sql);

$v2=$resultado->fetch_array();

				
?>

    <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse">
            <div class="col-xl-12">
            	<h3><strong>Registro de Calificaciones</strong></h3> 
                <br>
                <h3><strong>Lapso a consultar</strong></h3><br>
                  <h5><strong>Nombre : </strong><?php echo $v2["P_Nombres"] .' '. $v2["P_APELLIDO"];  ?></h5>
                  <h5><strong>Cedula : </strong><?php echo $v2["Cédula"];   ?></h5>
                  <h5><strong>Carrera : </strong><?php  echo $v2["Especialidad"];  ?></h5>
                <br>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Materia</th>
      <th scope="col">Nota</th>
      <th scope="col">Periodo</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while($datos=$resultado->fetch_array()){
        ?>
            <tr>
                <td><?php echo $datos["Curso"]; ?></td>
                <td><?php echo $datos["Califica"]; ?></td>
                <td><?php echo $datos["Período"]; ?></td>
            </tr>
            <?php   
        }
     ?>
 </tbody>
    </table>
            </div>
          </div>
        </div>
         </section>
        </br> </br>

      <?php 
        footer();
      ?>
