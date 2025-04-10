<div class="flex flex-row gap-4">
    <?php $img = get_field('imagem'); if($img): ?>
    <figure class=" bg-inovahc-blue-800 overflow-auto rounded-lg w-1/3 max-h-[76px]">
        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="w-full h-full  object-cover">
    </figure>
    <?php else: ?>
    <figure class=" w-1/3 max-h-[76px]">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php tu(); ?>/img/no-img.jpg" alt="Sem imagem" class=" rounded-lg">
        </a>
    </figure>
    <?php endif; ?>
    <div class="flex flex-col md:w-2/3">
        <div class="text-inovahc-purple-800 mb-1 font-semibold"><?php the_title(); ?></div>
        <div class="text-xs mb-2"><?php echo $post_type != 'eventos' ? the_field('pre_autoria') : ''; ?></div>
        <div>
            <a href="<?php the_permalink(); ?>" class="link"><?php pll_e('leia mais'); ?></a>
        </div>
    </div>
</div>