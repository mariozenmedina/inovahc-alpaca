<?php get_header(); ?>
    <main>
        <?php $post_type = get_query_var('post_type') ? get_query_var('post_type') : 'post'; ?>
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

        <!-- Section Projetos  -->
        <section>
            <div class="container mx-auto px-6 flex flex-col">

                <!-- Mostragem dos Projetos -->
                <div class="grid md:grid-cols-4 gap-5">
                    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>
                    <?php include(get_stylesheet_directory() . '/partes/_card.php'); ?>
                    <?php endwhile; endif; ?>
                </div>    
                <!-- Paginação -->
                <div class="py-4 flex justify-end gap-4  items-center"> 
                    <?php pagination(); ?>
                </div>
            </div>
        </section>

    </main>
<?php get_footer(); ?>