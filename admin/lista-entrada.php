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
            <h1>Lista de Entradas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Entradas</li>
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
              <h3 class="card-title">Maneja los Entradas</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body ">
              <table id="registros" class="table table-bordered table-striped ">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Autor</th>
                  <th>Titulo</th>
                  <th>Texto</th>
                  <th>Imagen</th>
                  <th>Fecha</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                    <?php 
                        try {
                            $sql = "SELECT id_Entrada, nombre, titulo, texto, url_imagen, fecha FROM entradas";
                            $sql .= " INNER JOIN admins ";
                            $sql .= " ON entradas.autor=admins.id_admin";
                            $sql .= " ORDER BY id_entrada";
                            $resultado = $conn->query($sql);
                        } catch (Exception $e) {
                            $error = $e->getMessage();
                            echo $error;
                        }
                        while($entrada = $resultado->fetch_assoc()){
                    ?>
                            <tr>
                                <td><?php echo $entrada['id_Entrada']; ?></td>
                                <td><?php echo $entrada['nombre'];?></td>
                                <td><?php echo $entrada['titulo']; ?></td>
                                <td><?php echo $entrada['texto']; ?></td>
                                <td>
                                    <img src="../img/<?php echo $entrada['url_imagen'];?>" alt="Imagen invitado" width="150">
                                </td>
                                <td><?php echo $entrada['fecha']; ?></td>
                                <td>
                                    <a href="editar-entrada.php?id=<?php echo $entrada['id_Entrada']; ?>" class="btn btn-warning btn-flat margin">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" data-id="<?php echo $entrada['id_Entrada']; ?>" data-tipo="entrada" class="btn btn-flat margin btn-danger borrar_registro">
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
                  <th>Nombre</th>
                  <th>Biografia</th>
                  <th>Imagen</th>
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
 
  