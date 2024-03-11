<?php 
    $current_page = 'forms';
    get_header();
?>

<main>
    <section class="bg-inovahc-purple-100">
        <!-- #Slide Noticias -->
        <div class="flex items-center overflow-hidden p-0"><!-- overflow-hidden -->
            <div class="container mx-auto px-5">
                <!-- Slide Noticias -->
                <div id="noticias-slide" class="splide" aria-label="Noticias">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                    
                    
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <section>

</main>


<?php get_footer(); ?>


