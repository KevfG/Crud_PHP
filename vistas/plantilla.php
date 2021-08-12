<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--Phone first boostrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Document</title>

    <!--Other documents of bootstrap (It serve to make it work boostrap)-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--Font Awersome-->
    <script src="https://kit.fontawesome.com/a223af4fbb.js" crossorigin="anonymous"></script>

</head>

<body>
    <!--Logo-->
    <div class="container-fluid">
        <h3 class="text-center">LOGO</h3>
    </div>
    <!--Buttons-->
    <div class="container-fluid  bg-ligth">

        <div class="container">

            <!--Las variables get son variables que se pasan con parametros url, la primera se separa con ? y las que siguen con &-->

            <ul class="nav nav-justified py-2 nav-pills">

                <?php if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "registro") : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                        </li>
                    <?php endif ?>
                <?php endif ?>

                <?php if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "registro") : ?>

                    <?php endif ?>
                <?php endif ?>

                <?php if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "registro") : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                        </li>
                    <?php endif ?>
                <?php endif ?>

                <?php if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "registro") : ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                        </li>
                    <?php endif ?>
                <?php endif ?>

                <?php if (isset($_GET["pagina"])) : ?>
                    <?php if ($_GET["pagina"] == "registro") : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?pagina=salir">Salida</a>
                        </li>
                    <?php endif ?>
                <?php endif ?>
                
            </ul>

        </div>

    </div>

    <!--Cpntenido-->

    <div class="container-fluid py-5">

        <div class="container">

            <?php

            #ISSET: isset() determina si una variable esta definida y no es NULL
            if (isset($_GET["pagina"])) {
                if (
                    $_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "inicio" ||
                    $_GET["pagina"] == "salir"
                ) {
                    include "paginas/" . $_GET["pagina"] . ".php";
                }
            } else {
                include "paginas/registro.php";
            }

            ?>

        </div>
    </div>
</body>

</html>