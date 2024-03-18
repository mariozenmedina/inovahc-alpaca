<?php get_header(); ?>
    <main>
        <?php $post_type = get_post_type(get_the_ID()); if(!$post_type){ $post_type = 'post'; } ?>
        <?php
            switch($post_type){
                case 'projetos':
                    $type_name = 'Projetos';
                    break;
                case 'eventos':
                    $type_name = 'Eventos';
                    break;
                default:
                    $type_name = 'Conteúdos';
                    break;
            }
        ?>
        <!-- Section Page Header  -->
        <section>
            <div class="container mx-auto p-6 flex justify-center gap-5 flex-col md:flex-row">
                <div class="flex gap-2 flex-col md:flex-row  items-center justify-center md:w-7/12">

                    <figure class="md:w-32">
                        <img src="<?php tu(); ?>/img/icone-<?php echo $post_type; ?>.svg" alt="Ícone de <?php echo $type_name; ?>" class="md:w-32">
                    </figure>
                
                    <div class="flex flex-col md:flex-1 justify-center md:justify-start text-center md:text-left">
                        <div class="text-inovahc-green-500"><?php pll_e($type_name); ?></div>
                        <div class="text-inovahc-green-800 font-poppins font-bold text-4xl"><?php pll_e('Feed de '.$type_name); ?></div>
                        <div><?php pll_e('Aqui você encontra tudo o que temos de '.$type_name); ?></div>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once(get_stylesheet_directory() . '/partes/_filters.php'); ?>


        <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
            <h2><?php the_title(); ?></h2>
        <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>