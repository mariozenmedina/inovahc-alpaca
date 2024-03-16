<?php get_header(); ?>
    <?php if( have_rows('conteudo_flexivel') ): while( have_rows('conteudo_flexivel') ): the_row(); ?>
        <?php
            switch(get_row_layout()){
                case 'hero':
                    include(get_stylesheet_directory() . '/partes/flexible_hero.php');
                    break;
            }
        ?>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>