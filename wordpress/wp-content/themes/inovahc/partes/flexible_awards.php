<section class="bg-inovahc-blue-300 pt-12 grudado temicon">
    <div class="container mx-auto px-6 mt-10 md:mt-0 bg-inovahc-blue-300 relative">
        <!--  Section Projetos premiados Header -->
        <div class="section-header flex flex-col justify-center">
            <figure>
                <img src="<?php $img = get_sub_field('icone'); echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>">
            </figure>
            <div class="title w-full text-inovahc-blue-800 mt-3"><?php the_sub_field('titulo'); ?></div>
            <div class="text-white md:text-center md:w-1/2"><?php the_sub_field('texto'); ?></div>
        </div>
        <!-- #Grid Premios -->
        <div class=" grid grid-cols-2 md:grid-cols-3 py-8 gap-5">
            <?php foreach(get_sub_field('awards') as $award): ?>
            <!-- Card Premios -->
            <div class="flex flex-col md:flex-row gap-4">
                <figure class="bg-inovahc-blue-800 rounded-lg md:w-1/2 min-h-[110px]">
                    <img src="<?php echo $award['imagem']['url']; ?>" alt="<?php echo $award['imagem']['alt']; ?>" class="w-full rounded-lg object-cover">
                </figure>
                <div class="flex justify-center flex-col md:w-1/2">
                    <div class="text-inovahc-blue-800 mb-1 text-xl"><?php echo $award['titulo']; ?></div>
                    <div class="text-white text-xs "><?php echo $award['subtitulo']; ?></div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <button class="btn"><?php pll_e('carregar mais'); ?></button>
    </div>
</section>