<?php
include("conn.php");

if($_POST) {
    $titulo_libro = $_POST["titulo_libro"];
    $nombre_autor = $_POST["nombre_autor"];
    $resumen_libro = $_POST["resumen_libro"];

    $query = $conn->query("INSERT INTO `libros`(`id`, `titulo_libro`, `nombre_autor`, `resumen_libro`)
    VALUES (null,'$titulo_libro','$nombre_autor','$resumen_libro')");
}

header("location:index.php");
