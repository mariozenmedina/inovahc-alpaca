<?php get_header(); ?>
<?php get_template_part('partes/menu', 'menu'); ?>
<main class="home">
    <?php get_template_part('partes/hero', 'hero'); ?>
    <div class="grafismo">
        <div class="container">
            <?php get_template_part('partes/numeros', 'numeros'); ?>
        </div>
        <?php get_template_part('partes/destaques', 'destaques'); ?>
    </div>
    <div class="container">
        <?php get_template_part('partes/inove-conosco', 'inove-conosco'); ?>
    </div>
</main>
<script src="./js/texto-video.js"></script>
<?php get_footer(); ?>