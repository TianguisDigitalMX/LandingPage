<?php

$ls_servidor = "";
$ls_servidor = $_SERVER['SERVER_NAME'];
if ($ls_servidor === "localhost") {
    $ls_servidor = "http://localhost:8000/";
} else {
    $ls_servidor = "https://mitd.cc/";
}

$ls_url = "";
$ls_url = (isset(($_GET["l"])) ? $_GET["l"] : "mx");
$ls_contrasena = (isset(($_GET["c"])) ? $_GET["c"] : "");
$la_lugares = array(
    "mx" => "México",
    "chis" => "Chiapas",
    "ver" => "Veracruz",
    "qro" => "Querétaro",
    "edomx" => "Estado de México",
    "cdmx" => "Ciudad de México",
    "pbl" => "Puebla"
);

$ls_lugar = "";
$ls_lugar = (isset($la_lugares[$ls_url]) ? $la_lugares[$ls_url] : "México");

$ls_dominio = $_SERVER['SERVER_NAME'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Title of Website -->
    <title>Reducir enlaces - Mi Tianguis Digital</title>

    <meta name="description"
        content="Reducir enlaces es una herramienta para que los negocios de <?php echo $ls_lugar; ?> puedan utilizarla.">
    <meta name="keywords"
        content="Reducir, Acortar, enlaces, Tianguis, Digital, negocios, comercio, economia local, <?php echo $ls_lugar; ?>">
    <meta name="author" content="Construyendo el Futuro con Tecnología y Progreso SAS de CV">

    <!-- Favicon -->
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">


    <meta property="og:title" content="Reducir enlaces - Mi Tianguis Digital">
    <meta property="og:description"
        content="Reducir enlaces es una herramienta para que los negocios de <?php echo $ls_lugar; ?> puedan utilizarla.">
    <meta property="og:image" content="<?php echo $ls_servidor; ?>imagen_destacada.jpg">
    <meta property="og:url" content="<?php echo $ls_servidor; ?>">


    <meta property="og:type" content="website">
    <meta property="og:image:alt"
        content="Mi Tianguis Digital - Un espacio digital donde los negocios de <?php echo $ls_lugar; ?> crecen juntos">
    <meta property="og:site_name"
        content="Mi Tianguis Digital - Un espacio digital donde los negocios de <?php echo $ls_lugar; ?> crecen juntos">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo rand(); ?>">

</head>

<body>
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card p-3">
                        <div class="text-center">
                            <img src="../imagenes/mitd_500x500.png" width="200px">
                            <div class="titulo-negocio">
                                <h1>Reducir enlaces - Mi TD.</h1>
                                <p>Es una herramienta para que comerciantes, pequeños negocios y familias emprendedoras
                                    de <span class="span-negro"><?php echo $ls_lugar; ?></span> puedan usarla para
                                    acortar sus enlaces, dando así una mejor presentación al compartir contenido.</p>

                                <p><small>Ej. https://progrestecnologico.com/proyectos/proyecto1, <br>resultado:
                                        https://mitd.cc/MQ==</small></p>
                            </div>

                            <?php if ($ls_contrasena == "" AND $ls_contrasena != "Kazone10"): ?>
                                <h4 class="span-negro">Acceso restringido</h4>
                                <div class="alert alert-danger" role="alert">Solo los miembros de Tianguis Digital México pueden utilizar esta herramienta</div>
                          
                                <div class="botones-largos">
                                    <ul class="social-list-vertical">
                                        <li><a href="https://api.whatsapp.com/send?phone=529621697680" target="_blank"><i class="bi bi-whatsapp"></i> Quiero afiliarme</a></li>
                                    </ul>
                                </div>
                            <?php else: ?>
                                <form class="row g-3 needs-validation text-left" novalidate>
                                    <div class="col-12">
                                        <label for="enlaceLargoText" class="form-label">URL larga</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text text-bg-success" id="inputGroupPrepend"><i class="bi bi-link"></i></span>
                                            <input type="text" autofocus class="form-control" id="enlaceLargoText" aria-describedby="inputGroupPrepend" required placeholder="https://">
                                            <div class="invalid-feedback">
                                                Por favor ingresa una URL válida
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-success" type="submit">Reducir enlace</button>
                                    </div>
                                </form>
                            <?php endif; ?>

                            Tianguis Digital <?php echo $ls_lugar; ?> - <?php echo date('Y'); ?> | Hecho con ❤️ por <a
                                href="https://progresotecnologico.com">Progreso Tecnológico</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="overlay" aria-hidden="true"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>

</body>

</html>