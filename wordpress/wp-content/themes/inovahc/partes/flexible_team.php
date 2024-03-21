<!-- Section Equipe  -->
<section>
    <div class="container mx-auto px-6   flex gap-5 flex-col">
        <div class="flex gap-8 flex-col items-center md:justify-center">
            <div class="md:text-center md:w-1/2">
                <div class="text-inovahc-green-800 text-3xl font-poppins mb-4"><?php the_sub_field('titulo'); ?></div>
                <div><?php the_sub_field('texto'); ?></div>
            </div>
        </div>

        <!--  Grid de Perfil - Equipe -->
        <div class=" grid sm:grid-cols-2 md:grid-cols-3 gap-5">
            <?php $colabs = get_sub_field('colaboradores'); if($colabs && is_array($colabs)): foreach($colabs as $c): ?>
            <!-- Card Perfil -->
            <div class="flex gap-4">
                <figure class="w-[90px] max-h-[90px]">
                    <img src="<?php $img = $c['imagem']; echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>" class="w-full rounded-lg object-cover min-w-[90px] max-h-[90px]">
                </figure>
                <div>
                    <div class="mb-1"><?php echo $c['nome']; ?></div>
                    <div class=" text-xs mb-4"><?php echo $c['area_de_atuacao']; ?></div>
                    <div class="flex flex-wrap gap-x-4">
                        <?php if($c['linkedin']): ?>
                        <a class="btn-icon" href="<?php echo $c['linkedin']; ?>" target="_blank">
                            <?php svg('icon-linkedin',16,16,"");?> 
                        </a>
                        <?php endif; ?>
                        <?php if($c['e-mail']): ?>
                        <a href="mailto:<?php echo $c['e-mail']; ?>" class="link"><?php echo $c['e-mail']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; ?>

        </div>

        <div class="flex gap-8 flex-col ">
            <?php $botao = get_sub_field('botao'); if($botao){ include(get_stylesheet_directory() . '/partes/_botao.php'); } ?>
        </div>
    </div>
</section>