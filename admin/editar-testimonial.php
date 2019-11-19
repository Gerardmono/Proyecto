<?php 
  include_once 'funciones/sesiones.php' ;
  include_once 'funciones/funciones.php' ;
  include_once 'templates/header.php' ;
  $id = $_GET['id'];
  if (!filter_var($id, FILTER_VALIDATE_INT)) {
      die("Error");
  }
  include_once 'templates/barra.php' ;
  include_once 'templates/sidebar.php' ;
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Testimonial</h1>
            <small>Llena el formulario para editar un nuevo Testimonial</small>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editar Testimonial</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
    <!-- Main content -->
    <div class="row">
      <div class="col-md-8">
      <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Editar testimonial</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
                <?php
                    $sql = "SELECT * FROM testimoniales WHERE id_Testimonial = $id";
                    $resultado = $conn->query($sql);
                    $testimonial = $resultado->fetch_assoc();
                ?>
                <form role="form" method="post" action="modelo-testimonial.php" name="guardar-registro" id="guardar-registro">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nombre">Autor</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del autor" value="<?php echo $testimonial["Autor"] ?>">
                    </div>
                    <div class="form-group">
                      <label for="texto">Texto</label>
                      <textarea name="texto" id="texto" rows="8" placeholder="Ingresa la Texto" class="form-control">
                            <?php echo $testimonial["Texto"] ?>
                      </textarea>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <input type="hidden"  name="registro" value="nuevo">
                    <button type="submit" class="btn btn-primary" id="crear-registro">Añadir</button>
                  </div>
                </form>
          </div>
          <!-- /.card-body -->
          
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

        </section>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <?php include_once 'templates/footer.php'; ?>
 
  