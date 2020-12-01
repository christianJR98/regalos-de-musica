                            
            <?php foreach($data['productos'] as $producto) : ?>

<div class="col-md-4 col-sm-6" data-id ="<?php echo  $producto->id; ?>">
    <div class="card card-animated card-shadow mb-3">
        <a href="<?php echo  $producto->link_amazon; ?>"  rel="nofollow" target="_blank">
            <div class="img-container">
                <img src="<?php echo  $producto->imagen; ?>" alt="<?php echo  $producto->alt_imagen; ?>">
            </div>
        </a>
        <div class="card-footer d-flex flex-column p-0">
            <div class="card-name-product d-flex align-items-center justify-content-center">
                <div class="text-center" id="product-name">
                    <?php echo  $producto->nombre; ?>
                </div>
            </div>
            <div class="card-prize rounded-bottom py-2">
                <?php if($producto->precio != 0){
                    echo "$", (string)$producto->precio;
                } else{
                    echo 'No disponible';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

</div>
</div>
</main>

<section id="otrosProductos">
<div class="container">
<div class="display-4 mt-4">
Otros Productos
</div>
<hr class="bottom-line">
<div class="sliderOtrosProductos mb-4 mx-5">

<?php foreach($data['otrosProductos'] as $producto) : ?>
    <div class="card mr-3">
        <a href="<?php echo  $producto->link_amazon; ?>" rel="nofollow" target="_blank">
            <div class="img-container">
                <img src="<?php echo  $producto->imagen; ?>" alt="<?php echo  $producto->alt_imagen; ?>">
            </div>
        </a>
        <div class="card-footer d-flex flex-column p-0">
            <div class="card-name-product d-flex align-items-center justify-content-center">
                <div class="text-center" id="product-name">
                    <?php echo  $producto->nombre; ?>
                </div>
            </div>
            <div class="card-prize rounded-bottom py-2">
                $<?php echo  $producto->precio; ?>
            </div>
        </div>
    </div>

<?php endforeach; ?>

</div>
</div>
</section>