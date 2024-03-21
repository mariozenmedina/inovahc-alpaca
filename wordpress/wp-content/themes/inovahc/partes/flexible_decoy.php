<!-- Section Banner -->
<section >
    <div class="container mx-auto px-6  ">
        <div class="banner banner-<?php the_sub_field('cor'); ?>">
            <div class="banner-container">
                <div class="figure-area">
                    <!-- Versao Desktop Parallax -->
                    <figure id="scene" ref="scene" class="md:flex hidden">
                        <?php $galeria = get_sub_field('imagens'); foreach($galeria as $k => $img): ?>
                        <img data-depth="<?php $rnd = mt_rand(-20,20)/100; echo $k ? ($rnd ? $rnd : .5) : 0; ?>" src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
                        <?php endforeach; ?>
                    </figure>
                    <!-- Versao Mobile sem Parallax -->
                    <figure class="flex md:hidden">
                        <img src="<?php $img = get_sub_field('imagem'); echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>" class="principal">
                    </figure>
                </div>
                <div class="text-area"> 
                    <div class="banner-title"><?php the_sub_field('titulo'); ?></div>
                    <div class="mb-4 md:mb-8"><?php the_sub_field('texto') ?></div>
                    <?php $botao = get_sub_field('botao'); if($botao){ include(get_stylesheet_directory() . '/partes/_botao.php'); } ?>
                </div>
            </div>
        </div>
    </div>
</section>