<?php if( have_rows('conteudo_flexivel') ): while( have_rows('conteudo_flexivel') ): the_row(); ?>
    <?php
        switch(get_row_layout()){
            case 'hero':
                include(get_stylesheet_directory() . '/partes/flexible_hero.php');
                break;
            case 'big_numbers':
                include(get_stylesheet_directory() . '/partes/flexible_big_numbers.php');
                break;
            case 'carousel':
                include(get_stylesheet_directory() . '/partes/flexible_carousel.php');
                break;
            case 'decoy':
                include(get_stylesheet_directory() . '/partes/flexible_decoy.php');
                break;
            case 'header_lg':
                include(get_stylesheet_directory() . '/partes/flexible_header_lg.php');
                break;
            case 'header_sm':
                include(get_stylesheet_directory() . '/partes/flexible_header_sm.php');
                break;
            case 'blocos':
                include(get_stylesheet_directory() . '/partes/flexible_blocks.php');
                break;
            case 'ribbon':
                include(get_stylesheet_directory() . '/partes/flexible_ribbon.php');
                break;
            case 'equipe':
                include(get_stylesheet_directory() . '/partes/flexible_team.php');
                break;
            case 'logos':
                include(get_stylesheet_directory() . '/partes/flexible_logos.php');
                break;
            case 'figura_responsiva':
                include(get_stylesheet_directory() . '/partes/flexible_responsive_figure.php');
                break;
            case 'awards':
                include(get_stylesheet_directory() . '/partes/flexible_awards.php');
                break;
            case 'contato':
                include(get_stylesheet_directory() . '/partes/flexible_contact.php');
                break;
        }
    ?>
<?php endwhile; endif; ?>