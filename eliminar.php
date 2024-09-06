<?php
include("conn.php");
if($_GET) {
    $id = $_GET["id"];
    $query = $conn->query("DELETE FROM `libros` WHERE id=$id");
}
header("location:index.php");