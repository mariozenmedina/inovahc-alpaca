<!-- Sidebar -->
<?php $post_type = get_post_type(get_the_ID()); ?>
<aside class="lg:w-[400px] flex flex-col sticky top-[100px] self-start">
    <!--  Lista de Relacionados, somente -->
    <div class="flex flex-col">
        <figure class="md:w-32">
            <img src="<?php tu(); ?>/img/icone-<?php echo $post_type; ?>.svg" alt="Ícone de <?php echo $post_type; ?>" class="md:w-32">
        </figure>
        <div class=" text-inovahc-green-800 text-2xl md:text-3xl font-poppins mb-2"><?php
            switch ($post_type) {
                case 'eventos':
                    echo pll_e('Confira outros eventos em destaque');
                    break;
                case 'projetos':
                    echo pll_e('Confira outros projetos em destaque');
                    break;
                default:
                    echo pll_e('Confira mais conteúdos em destaque');
                    break;
            }
        ?></div>
        <!--  Grid de Relacionados -->
        <div class=" grid grid-cols-1 py-8 gap-5">
            <!-- Card -->
            <?php $query = new WP_Query( array( 'post_type'=>$post_type, 'orderby' => 'rand', 'post__not_in' => array( get_the_id() ) ) ); ?>
            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
            <?php include(get_stylesheet_directory() . '/partes/_card_relacionado.php'); ?>
            <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>
    </div>
    <!--  Temas relacionados -->
    <div class="flex flex-col">
        <div class=" text-inovahc-green-800 text-3xl font-poppins mb-4"><?php echo pll_e('Temas relacionados'); ?></div>
        <div class="flex flex-wrap gap-4">
            <?php $tags = get_the_tags(); foreach($tags as $tag): ?>
            <a href="<?php url(); ?>?tag=<?php echo $tag->slug; ?>&post_type=<?php echo $post_type; ?>" class="tag tag-big"><?php echo $tag->name; ?></a>
            <?php endforeach; ?>
        </div>
    </div>
</aside>