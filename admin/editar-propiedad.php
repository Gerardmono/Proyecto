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
            <h1>Editar Propiedad</h1>
            <small>Llena el formulario para editar una Propiedad</small>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Editar Propiedad</li>
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
            <h3 class="card-title">Editar Propiedad</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
                <?php
                    $sql = "SELECT * FROM propiedades WHERE id_propiedad = $id";
                    $resultado = $conn->query($sql);
                    $propiedad = $resultado->fetch_assoc();
                ?>
                <form role="form" method="post" action="modelo-propiedad.php" name="guardar-registro" id="guardar-registro-imagen" enctype="multipart/form-data" >
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre" value="<?php echo $propiedad['nombre'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="precio">Precio</label>
                      <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio" value="<?php echo $propiedad['precio'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="eslogan">Eslogan</label>
                      <input type="text" class="form-control" id="eslogan" name="eslogan" placeholder="Ingresa el eslogan" value="<?php echo $propiedad['eslogan'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="descripcion">Descripcion</label>
                      <textarea name="descripcion" id="descripcion" rows="8" placeholder="Ingresa la descripcion" class="form-control"> <?php echo $propiedad['descripcion'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="recamaras">Recamaras</label>
                      <input type="number" class="form-control col-2" id="recamaras" name="recamaras" value="<?php echo $propiedad['recamaras'] ?>" min=1 max=10>
                    </div>
                    <div class="form-group">
                      <label for="baños">Baños</label>
                      <input type="number" class="form-control col-2" id="baños" name="baños" value="<?php echo $propiedad['banios'] ?>" min=1 max=2>
                    </div>
                    <div class="form-group">
                      <label for="estacionamiento">Cajones de estacionamiento</label>
                      <input type="number" class="form-control col-2" id="estacionamiento" name="estacionamiento" value="<?php echo $propiedad['cajones'] ?>" min=0 max=10>
                    </div>
                    <div class="form-group">
                      <label for="imagen">Imagen</label>
                      <input type="file" class="form-control" id="imagen" name="imagen">
                      <p class="help-block" >Selecciona una imagen</p>
                    </div>
                    <img src="../img/<?php echo $propiedad['imagen'] ?>" alt="Actual" width="150px">
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <input type="hidden"  name="registro" value="actualizar">
                    <input type="hidden" name="id_registrado" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-primary" id="crear-registro">Actualizar</button>
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
 
  