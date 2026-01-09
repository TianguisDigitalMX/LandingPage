<?php
$ls_servidor = "";
$ls_servidor = $_SERVER['SERVER_NAME'];
if($ls_servidor === "localhost"){
  $ls_servidor = "http://localhost:8000/";
}else{
  $ls_servidor = "https://mitd.cc/";
}

$ls_url = "";
$ls_url = (isset(($_GET["l"]))?$_GET["l"]:"mx");
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
$ls_lugar = (isset($la_lugares[$ls_url])?$la_lugares[$ls_url]:"México");

$ls_dominio = $_SERVER['SERVER_NAME'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

  <!-- Title of Website -->
  <title>Mi Tianguis Digital - Un espacio digital donde los negocios de <?php echo $ls_lugar; ?> crecen juntos</title>

  <meta name="description"
    content="Mi Tianguis Digital - Un espacio digital donde los negocios de <?php echo $ls_lugar; ?> crecen juntos">
  <meta name="keywords" content="Tianguis, Digital, negocios, comercio, economia local, <?php echo $ls_lugar; ?>">
  <meta name="author" content="Construyendo el Futuro con Tecnología y Progreso SAS de CV">

  <!-- Favicon -->
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">


  <meta property="og:title" content="Mi Tianguis Digital - Un espacio digital donde los negocios de <?php echo $ls_lugar; ?> crecen juntos">
  <meta property="og:description"
    content="Un espacio digital donde los negocios de <?php echo $ls_lugar; ?> crecen juntos">
  <meta property="og:image" content="<?php echo $ls_servidor; ?>imagen_destacada.jpg">
  <meta property="og:url" content="<?php echo $ls_servidor; ?>">


  <meta property="og:type" content="website">
  <meta property="og:image:alt" content="Mi Tianguis Digital - Un espacio digital donde los negocios de <?php echo $ls_lugar; ?> crecen juntos">
  <meta property="og:site_name" content="Mi Tianguis Digital - Un espacio digital donde los negocios de <?php echo $ls_lugar; ?> crecen juntos">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/style.css?v=<?php echo rand(); ?>">

</head>

<body>
  <main>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
          <div class="card p-3">
            <div class="text-center">
              <img src="imagenes/mitd_500x500.png" width="200px">
              <div class="titulo-negocio">
                <h1>Tianguis Digital <span class="span-blanco"><?php echo $ls_lugar; ?></span>.</h1>
                <p>Es una plataforma colectiva que conecta comerciantes, pequeños negocios y familias emprendedoras de <span class="span-negro"><?php echo $ls_lugar; ?></span>. Aquí compartimos herramientas digitales, reducimos costos y fortalecemos nuestra economía local.</p>
              </div>

              <?php if($ls_lugar == "México"): ?>
                <h4 class="span-negro">¿De dónde <span class="span-blanco">nos visita</span>?</h4>
                <br>
                <div class="botones-largos">
                  <ul class="social-list-vertical">
                    <?php foreach($la_lugares as $key => $lugar): ?>
                      <?php if($key != "mx"): ?>
                        <li><a href="<?php echo $ls_servidor."?l=".$key;?>"><?php echo $lugar;?></a></li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php else: ?>
                <ul class="social-list">
                  <li>
                    <a href="https://api.whatsapp.com/send?phone=529621697680" target="_blank">
                      <i class="bi bi-whatsapp"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/TianguisDigital" target="_blank">
                      <i class="bi bi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://instagram.com/tianguisdigitalchis" target="_blank">
                      <i class="bi bi-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://youtube.com/@TianguisDC" target="_blank">
                      <i class="bi bi-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://tiktok.com/@tianguisdigital" target="_blank">
                      <i class="bi bi-tiktok"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://x.com/TianguisDC" target="_blank">
                      <i class="bi bi-twitter-x"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/company/tianguisdigital" target="_blank">
                      <i class="bi bi-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a href="mailto:hola@mitd.cc" target="_blank">
                      <i class="bi bi-envelope-at"></i>
                    </a>
                  </li>
                </ul>

                <div class="px-4 mt-1 titulo-negocio">
                  <p class="fonts">
                    <span class="span-negro">Síguenos en redes sociales.</span>
                  </p>
                </div>

                <div class="botones-largos">
                  <ul class="social-list-vertical">
                    <li>
                      <a href="https://api.whatsapp.com/send?phone=529621697680" target="_blank">
                        <i class="bi bi-whatsapp"></i> <span>962 169 7680</span>
                      </a>
                    </li>
                    <!--<li>
                      <a href="https://maps.app.goo.gl/YRC2GA3Giq1LJXgu7" target="_blank">
                        <i class="bi bi-geo-alt-fill"></i> <span>Dirección</span>
                      </a>
                    </li>-->
                    <li>
                      <a href="https://www.facebook.com/TianguisDigital" target="_blank">
                        <i class="bi bi-facebook"></i> <span>/TianguisDigital</span>
                      </a>
                    </li>
                    <li>
                      <a href="https://instagram.com/tianguisdigitalchis" target="_blank">
                        <i class="bi bi-instagram"></i> <span>tianguisdigitalchis</span>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.youtube.com/@TianguisDC" target="_blank">
                        <i class="bi bi-youtube"></i> <span>@TianguisDC</span>
                      </a>
                    </li>
                    <li>
                      <a href="https://tiktok.com/@tianguisdigital" target="_blank">
                        <i class="bi bi-tiktok"></i> <span>@tianguisdigital</span>
                      </a>
                    </li>
                    <li>
                      <a href="https://x.com/TianguisDC" target="_blank">
                        <i class="bi bi-twitter-x"></i> <span>@TianguisDC</span>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/company/tianguisdigital" target="_blank">
                        <i class="bi bi-linkedin"></i> <span>/company/tianguisdigital</span>
                      </a>
                    </li>
                    <li>
                      <a href="mailto:hola@mitd.cc" target="_blank">
                        <i class="bi bi-envelope-at"></i> <span>hola@mitd.cc</span>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="titulo-negocio">
                  <h1>Digitalización del Comercio formal e informal en <span class="span-blanco"><?php echo $ls_lugar; ?></span>.</h1>
                </div>
              <?php endif; ?>

              Tianguis Digital <?php echo $ls_lugar; ?> - <?php echo date('Y'); ?> | Hecho con ❤️ por <a href="https://progresotecnologico.com">Progreso Tecnológico</a>.
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
  <script src="js/scripts.js"></script>

</body>

</html>