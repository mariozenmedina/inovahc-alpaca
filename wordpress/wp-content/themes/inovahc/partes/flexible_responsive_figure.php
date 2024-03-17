<section>
    <div class="container mx-auto px-6 pb-24 pt-16 md:py-28 flex gap-5 flex-col ">
        <div class="flex gap-8 flex-col items-center justify-center">
            <div class=" md:text-center md:w-1/2">
                <div class=" text-inovahc-green-800 text-3xl font-poppins mb-4"><?php the_sub_field('titulo'); ?></div>
                <div><?php the_sub_field('texto'); ?></div>
            </div>
        </div>
        <?php if(get_sub_field('imagem_desktop') || get_sub_field('imagem_mobile')): ?>
        <div class="mb-10">
            <?php if(get_sub_field('imagem_desktop')): ?>
            <!--  Versao Desktop -->
            <figure class="scale-90 hidden md:flex">
                <img src="<?php $img = get_sub_field('imagem_desktop'); echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>">
            </figure>
            <?php endif; ?>
            <?php if(get_sub_field('imagem_mobile')): ?>
            <!--  Versao Mobile -->
            <figure class="flex md:hidden justify-center">
                <img src="<?php $img = get_sub_field('imagem_mobile'); echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>">
            </figure>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <div class="md:text-center">
            <?php $botao = get_sub_field('botao'); if($botao['url']){ include(get_stylesheet_directory() . '/partes/_botao.php'); } ?>
        </div>
    </div>
</section>