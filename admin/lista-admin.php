<?php 
  include_once 'funciones/sesiones.php' ;
  include_once 'funciones/funciones.php' ;
  include_once 'templates/header.php' ;
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
            <h1>Lista de Administradores</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Administradores</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Maneja los administradoress</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                    <?php 
                        try {
                            $sql = "SELECT id_admin, usuario, nombre FROM admins";
                            $resultado = $conn->query($sql);
                        } catch (Exception $e) {
                            $error = $e->getMessage();
                            echo $error;
                        }
                        while($admin = $resultado->fetch_assoc()){
                    ?>
                            <tr>
                                <td><?php echo $admin['id_admin']; ?></td>
                                <td><?php echo $admin['usuario']; ?></td>
                                <td><?php echo $admin['nombre']; ?></td>
                                <td>
                                    <a href="editar-admin.php?id=<?php echo $admin['id_admin']; ?>" class="btn btn-warning btn-flat margin">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" data-id="<?php echo $admin['id_admin']; ?>" data-tipo="admin" class="btn btn-flat margin btn-danger borrar_registro">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <?php include_once 'templates/footer.php'; ?>
 
  