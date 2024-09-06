<?php
include("conn.php");

$query = $conn->query("SELECT * FROM `libros`");

?>

<!doctype html>
<html lang="en">

<head>
    <title>Mi_Biblioteca</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <h1 class="text-center mt-5">BASE DE DATOS BIBLIOTECA</h1>
        <div class="container">
            <a name="" id="" class="btn btn-primary mt-5 mb-4" href="form_nuevo.php" role="button"><i class="bi bi-file-earmark-plus"></i> Agregar</a>
            <div class="table-responsive">
                <table class="table table-respondive table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITULO</th>
                            <th>AUTOR</th>
                            <th>RESEÑA</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($libros = $query->fetch_object()) { ?>
                            <tr>
                                <td><?= $libros->id ?></td>
                                <td><?= $libros->titulo_libro ?></td>
                                <td><?= $libros->nombre_autor ?></td>
                                <td><?= $libros->resumen_libro ?></td>
                                <td>
                                    <a name="" id="" class="btn btn-warning" href="form_editar.php?id=<?= $libros->id ?>" role="button"><i class="bi bi-pencil-square"></i></a>
                                    <a name="" id="" class="btn btn-danger" href="eliminar.php?id=<?= $libros->id ?>" role="button"><i class="bi bi-trash3"></i></a>
                                </td>
                            </tr>
                    </tbody>
                <?php } ?>
                </table>
            </div>

        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


</body>

</html>