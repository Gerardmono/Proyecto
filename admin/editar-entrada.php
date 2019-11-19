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
            <h1>Crear Entrada de blog</h1>
            <small>Llena el formulario para agregar una nueva Entrada de blog</small>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Crear Entrada de blog</li>
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
            <h3 class="card-title">Crear Entrada de blog</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
            <?php
                $sql = "SELECT * FROM entradas WHERE id_Entrada = $id";
                $resultado = $conn->query($sql);
                $entrada = $resultado->fetch_assoc();
            ?>
          <div class="card-body">
                <form role="form" method="post" action="modelo-entrada.php" name="guardar-registro" id="guardar-registro-imagen" enctype="multipart/form-data" >
                  <div class="card-body">
                    <div class="form-group">
                        <label for="nombre">Autor:</label>
                        <select name="autor" class="form-control seleccionar select2">
                                <option value="0">- Seleccione -</option>
                                    <?php
                                        try {
                                            $sql = "SELECT * FROM admins";
                                            $resultado = $conn->query($sql);
                                            while($admin = $resultado->fetch_assoc()) { 
                                                if ($entrada['autor']==$admin['id_admin']) {
                                    ?>
                                                    <option value="<?php echo $admin['id_admin']; ?>" selected>
                                                        <?php echo $admin['nombre']; ?>                                                     
                                                    </option>             
                                    <?php 
                                                }else{
                                    ?>
                                                    <option value="<?php echo $admin['id_admin']; ?>">
                                                    <?php echo $admin['nombre']; ?>                                                     
                                                    </option>
                                    <?php  
                                                }
                                            }    
                                        } catch (Exception $e) {
                                            echo "Error: " . $e->getMessage();
                                        };     
                                    ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="titulo">Titulo</label>
                      <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa el titulo" value="<?php echo $entrada['titulo'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="texto">Texto</label>
                      <textarea name="texto" id="texto" rows="8" placeholder="Ingresa el texto" class="form-control">
                            <?php echo $entrada['texto'] ?>
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label for="imagen">Imagen</label>
                      <input type="file" class="form-control" id="imagen" name="imagen">
                      <p class="help-block" >Selecciona una imagen</p>
                      <img src="../img/<?php echo $entrada['url_imagen'] ?>" alt="" with="150px">
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <input type="hidden"  name="registro" value="actualizar">
                    <input type="hidden" name="id_registrado" value="<?php echo $id; ?>">
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
 
  