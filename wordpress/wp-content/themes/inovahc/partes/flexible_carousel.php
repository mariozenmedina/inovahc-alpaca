<!-- Section Notícias -->
<section class=" bg-inovahc-purple-100">
    <div class="container mx-auto px-6 pt-12 relative ">
        <!--  Section Notícias Header -->
        <div class="section-header">
            <figure>
                <img src="<?php $img = get_sub_field('icone'); echo $img['url']; ?>" alt="<?php $img['alt']; ?>">
            </figure>
            <div class="title text-[28px] md:text-3xl"><?php the_sub_field('titulo'); ?></div>
        </div>
    </div>

    <!-- #Slider Noticias -->
    <?php $type = get_sub_field('tipo_de_conteudo'); ?>
    <div class="flex items-center overflow-hidden ">
        <div class="container mx-auto px-5">
            <!-- Slide Noticias -->
            <div id="noticias-slide" class="splide" aria-label="Noticias">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php switch($type){
                            case 'post_type':
                                $query = new WP_Query( array( 'post_type' => get_sub_field('post_type') ) );
                                if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                                    echo '<li class="splide__slide">';
                                    include(get_stylesheet_directory() . '/partes/_card.php');
                                    echo '<li>';
                                endwhile; endif; wp_reset_postdata();
                                break;
                            case 'categoria':
                                $query = new WP_Query( array( 'post_type' => get_sub_field('post_type'), 'cat' => get_sub_field('taxonomia') ) );
                                if($query->have_posts()) : while($query->have_posts()) : $query->the_post();
                                    echo '<li class="splide__slide">';
                                    include(get_stylesheet_directory() . '/partes/_card.php');
                                    echo '<li>';
                                endwhile; endif; wp_reset_postdata();
                                break;
                            default:
                                foreach( get_sub_field('cards') as $card ){
                                    echo '<li class="splide__slide">';
                                    include(get_stylesheet_directory() . '/partes/_card.php');
                                    echo '<li>';
                                }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Notícias Rodape -->
    <?php $botao = get_sub_field('botao'); if($botao['url']): ?>
    <div class="container mx-auto px-6 pb-12">
        <?php include(get_stylesheet_directory() . '/partes/_botao.php'); ?>
    </div>
    <?php endif; ?>
</section>