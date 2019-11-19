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
            <h1>Editar Administrador</h1>
            <small>Llena el formulario para actualizar el Administrador</small>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Crear Administrador</li>
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
            <h3 class="card-title">Editar administrador</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
                <?php
                    $sql = "SELECT * FROM admins WHERE id_admin = $id";
                    $resultado = $conn->query($sql);
                    $admin = $resultado->fetch_assoc();
                ?>
                <form role="form" method="post" action="modelo-admin.php" name="guardar-registro" id="guardar-registro">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="usuario">Usuario</label>
                      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu nombre de usuario" value="<?php echo $admin['usuario'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="nombre">Nombre</label>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" value="<?php echo $admin['nombre'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tuPassword" >
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <input type="hidden"  name="registro" value="actualizar">
                    <input type="hidden" name="id_registrado" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
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
 
  