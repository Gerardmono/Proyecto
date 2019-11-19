<?php

    if (isset($_POST['registro'])) {
    
        if (($_POST['registro'] == 'nuevo')) {
            $nombre = $_POST['nombre'];
            $texto = $_POST['texto'];
            try {
                include_once 'funciones/funciones.php' ;
                $stmt = $conn->prepare("INSERT INTO testimoniales (Autor, Texto) VALUES (?, ?)");
                $stmt->bind_param("ss", $nombre, $texto);
                $stmt->execute();
                if ($stmt->insert_id > 0) {
                    $respuesta = array(
                        'respuesta' => 'exito',
                        'id_admin' => $stmt->insert_id
                    );
                }else {
                    $respuesta = array(
                        'respuesta' => 'error',
                    );
                }
                $stmt->close();
                $conn->close();
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }

            die(json_encode($respuesta));
        }

        if (($_POST['registro'] == 'eliminar')) {
            $id_borrar = $_POST['id'];
            try {
                include_once 'funciones/funciones.php' ;
                $stmt = $conn->prepare("DELETE FROM testimoniales WHERE id_Testimonial = ?");
                $stmt->bind_param("i", $id_borrar);
                $stmt->execute();
                if ($stmt->affected_rows) {
                    $respuesta = array(
                        'respuesta' => 'exito',
                        'id_eliminado' => $id_borrar
                    );
                }else {
                    $respuesta = array(
                        'respuesta' => 'error',
                    );
                }
                $stmt->close();
                $conn->close();
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }

            die(json_encode($respuesta));
        }

        if (($_POST['registro'] == 'actualizar')) {
            $nombre = $_POST['nombre'];
            $texto = $_POST['texto'];
            $id_registrado = $_POST['id_registrado'];
        
            try {
                include_once 'funciones/funciones.php' ;

                $stmt = $conn->prepare("UPDATE testimoniales SET Autor = ?, Texto = ? WHERE id_Testimonial = ? ");
                $stmt->bind_param("ssi", $nombre, $texto, $id_registrado);
                
                $stmt->execute();
                if ($stmt->affected_rows > 0) {
                    $respuesta = array(
                        'respuesta' => 'exito'
                    );
                }else {
                    $respuesta = array(
                        'respuesta' => 'Cambia los datos para poder actualizar',
                    );
                }
                $stmt->close();
                $conn->close();
            } catch (Exception $e) {
                $respuesta = array(
                    'respuesta' => $e->getMessage()
                );
            }

            die(json_encode($respuesta));
        }
    }

    

?>