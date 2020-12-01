<!DOCTYPE html>
<html lang="en">

<head>
    <?php require APPROOT . '/views/inc/productos_header_tags.php'; ?>
    <title>▶ Encuentra los mejores llaveros de musica </title>
    <meta name ="description" content = "🔴 Entra y elige tu llavero de musica favorito al mejor precio">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top mb-2" id="navbar">
    </nav>

    <main>
        <div class="container">
            <h1 class="display-3 text-center">Llaveros</h1>
            <hr class="header-line">
            <div class="row">
                
            <?php require APPROOT . '/views/inc/productos_y_otros.php'; ?>
        
        <?php require APPROOT . '/views/inc/productos_footer_files.php'; ?>
        <script>createNavbar('otros');</script>
</body>

</html>