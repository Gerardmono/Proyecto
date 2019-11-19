<?php
    $conn = new mysqli('localhost', 'root', '', 'bienes_raices');

    if ($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }
?>