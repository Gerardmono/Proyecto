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
            <h1>Lista de Propiedades</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Propiedades</li>
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
              <h3 class="card-title">Maneja los Propiedadess</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body ">
              <table id="registros" class="table table-bordered table-striped ">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Eslogan</th>
                  <th>Descripción</th>
                  <th>Recamaras</th>
                  <th>Baños</th>
                  <th>Cajones</th>
                  <th>Imagen</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                    <?php 
                        try {
                            $sql = "SELECT * FROM propiedades";
                            $resultado = $conn->query($sql);
                        } catch (Exception $e) {
                            $error = $e->getMessage();
                            echo $error;
                        }
                        while($propiedad = $resultado->fetch_assoc()){
                    ?>
                            <tr>
                                <td><?php echo $propiedad['id_Propiedad']; ?></td>
                                <td><?php echo $propiedad['nombre']; ?></td>
                                <td><?php echo $propiedad['precio']; ?></td>
                                <td><?php echo $propiedad['eslogan']; ?></td>
                                <td><?php echo $propiedad['descripcion']; ?></td>
                                <td><?php echo $propiedad['recamaras']; ?></td>
                                <td><?php echo $propiedad['banios']; ?></td>
                                <td><?php echo $propiedad['cajones']; ?></td>
                                <td>
                                    <img src="../img/<?php echo $propiedad['imagen'];?>" alt="Imagen prop$propiedad" width="150">
                                </td>
                                <td>
                                    <a href="editar-propiedad.php?id=<?php echo $propiedad['id_Propiedad']; ?>" class="btn btn-warning btn-flat margin">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a href="#" data-id="<?php echo $propiedad['id_Propiedad']; ?>" data-tipo="propiedad" class="btn btn-flat margin btn-danger borrar_registro">
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
                    <th>Precio</th>
                    <th>Eslogan</th>
                    <th>Descripción</th>
                    <th>Recamaras</th>
                    <th>Baños</th>
                    <th>Cajones</th>
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
 
  