<?php
include("conn.php");

if($_POST) {
    $id = $_POST["id"];
    $titulo_libro = $_POST["titulo_libro"];
    $nombre_autor = $_POST["nombre_autor"];
    $resumen_libro = $_POST["resumen_libro"];

    $query = $conn->query("UPDATE `libros` 
    SET `id`='$id',`titulo_libro`='$titulo_libro',`nombre_autor`='$nombre_autor',`resumen_libro`='$resumen_libro' WHERE id=$id");
}
header("location:index.php");
