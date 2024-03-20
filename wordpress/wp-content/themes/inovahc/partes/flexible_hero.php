<!-- Section Hero -->
<section id="hero-slide" class="splide grudado" aria-label="Hero Home">
    <div class="splide__track">
        <ul class="splide__list">
            <?php $capas = get_sub_field('lista_de_capas'); foreach($capas as $c): ?>
            <li class="splide__slide">
                <figure>
                    <img src="<?php echo $c['imagem']['url']; ?>" alt="<?php echo $c['imagem']['alt']; ?>">
                </figure>

                <div class="hero-slide-area">
                    <div class="hero-slide-card">
                        <div class="hero-slide-texto">
                            <div class="highlight"><?php echo $c['titulo']; ?></div>
                            <div><?php echo $c['texto']; ?></div>
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>