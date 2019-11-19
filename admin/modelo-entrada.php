<?php

    if (isset($_POST['registro'])) {
    
        if (($_POST['registro'] == 'nuevo')) {
            // $respuesta = array(
            //     'respuesta' => $_POST,
            //     'file' => $_FILES
            // );
            // die(json_encode($respuesta));

            $autor = $_POST['autor'];
            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];

            $directorio = "../img/";
            if (!is_dir($directorio)) {
                mkdir($directorio, 0755,true);
            }

            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio.$_FILES['imagen']['name'])) {
                $imagen_url = $_FILES['imagen']['name'];
                $result = "Se subio bien";
            } else {
                $respuesta = array(
                    'respuesta' => error_get_last()
                );
            }
            try {
                include_once 'funciones/funciones.php' ;
                $stmt = $conn->prepare("INSERT INTO entradas (autor, titulo, texto, url_imagen, fecha) VALUES (?, ?, ?, ?, NOW())");
                $stmt->bind_param("isss", $autor, $titulo, $texto, $imagen_url);
                $stmt->execute();
                if ($stmt->affected_rows) {
                    $respuesta = array(
                        'respuesta' => 'exito',
                        'id_admin' => $stmt->insert_id,
                        'resultado_imagen' => $result
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
                $stmt = $conn->prepare("DELETE FROM entradas WHERE id_Entrada = ?");
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
            $autor = $_POST['autor'];
            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];

            $id_registrado = $_POST['id_registrado'];
            try {
                include_once 'funciones/funciones.php' ;
                if ($_FILES['imagen']['size']>0) {
                    $directorio = "../img/";
                    if (!is_dir($directorio)) {
                        mkdir($directorio, 0755,true);
                    }

                    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio.$_FILES['imagen']['name'])) {
                        $imagen_url = $_FILES['imagen']['name'];
                        $result = "Se subio bien";
                    } else {
                        $respuesta = array(
                            'respuesta' => error_get_last()
                        );
                    }
                    $stmt = $conn->prepare("UPDATE entradas SET autor=?, titulo=?, texto=?, url_imagen=? WHERE id_Entrada = ? ");
                    $stmt->bind_param("isssi", $autor, $titulo, $texto, $imagen_url, $id_registrado);
                }else{
                    $stmt = $conn->prepare("UPDATE entradas SET autor=?, titulo=?, texto=? WHERE id_Entrada = ? ");
                    $stmt->bind_param("issi", $autor, $titulo, $texto, $id_registrado);
                }
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