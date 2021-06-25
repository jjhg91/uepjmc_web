
<?php 
require('menu.php');
inicio();
head();  
?>
    <!--Base typography -->
    <section class="section section-lg bg-default">
        <div class="container">
          <div class="row row-50 flex-lg-row-reverse">
            <div class="col-xl-12">
                <h3><strong>Registro de Calificaciones</strong></h3> 
                <br>
                <h5><strong>Lapso a consultar</strong></h5>
                <br>
                <form method="post" action="nota2.php" >
                    <label for="ci">C.I</label>
                    &nbsp;&nbsp;
                    <input  name = "ci" type="text" class="redondeado" placeholder="Cedula" required="">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button  type="submit" class="redondeado" onclick="" href="nota.php?variable1=valor1&variable2=valor2">Buscar</button>
                </form>
                <br>
              <ul class="list-xl">
                <li>
                </li>
              </ul>
            </div>
             <div class="col-xl-12">
          </section>  

      <?php 
        footer();
      ?>
