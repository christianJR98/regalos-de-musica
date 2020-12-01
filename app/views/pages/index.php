<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel=" icon" type="image/x-icon" href="favicon.ico" />

  <script data-ad-client="ca-pub-4989260190518709" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175972294-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-175972294-1');
    </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
    crossorigin="anonymous" />

  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.min.css">

  <title>▶ Encuentra los mejores regalos para musicos</title>
  <meta name ="description" content = "En esta pagina encontraras productos relacionados con la musica como tazas, camisas, collares y más.
  🔴 Entra y encuentra lo que buscas">

</head>

<body>
  <nav  class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" id="navbar">
  </nav>

  <?php require APPROOT . '/views/inc/main_slider.php'; ?>

        <main>
    <div class="container">
      <h2 class="display-3 text-center mb-4">Productos</h2>
      <hr class="header-line">
      <div class="row">
        <?php foreach($data['categorias'] as $categoria) : ?>
            <div class=" col-md-4 col-sm-6" data-id="<?php echo $categoria->id; ?>">
              <a href="<?php echo URLROOT?>/productos/<?php echo $categoria->nombre_ruta; ?>">
                  <div class="card card-animated card-shadow mb-5">
                  <h4 class="card-header text-center">
                      <?php echo $categoria->nombre; ?>
                  </h4>
                  <div class="img-container">
                      <img src="<?php echo $categoria->imagen; ?>" alt="<?php echo $categoria->alt_imagen;?>">
                  </div>
                  </div>
              </a>
            </div>
        <?php endforeach; ?>

      </div>
    </div>
  </main>
    

<footer class="footer-main" id="footer-main">

</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
  integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>

<script src="<?php echo URLROOT; ?>/js/navbar.js"></script>
<script src="<?php echo URLROOT; ?>/js/footer.js"></script>
<script>createNavbar('inicio');</script>
</body>

</html>

