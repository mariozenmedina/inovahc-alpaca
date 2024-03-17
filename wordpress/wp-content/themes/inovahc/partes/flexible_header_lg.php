<!-- Section Page Header LG -->
<section>
    <!-- Imagem topo para mobile -->
    <div class="flex md:hidden w-full">
        <figure class="w-full">
            <img src="<?php $img = get_sub_field('imagem'); echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>" class="w-full object-container">
        </figure>
    </div>
    <div class="container mx-auto p-6 flex gap-5 flex-col md:flex-row">
        <div class="flex gap-8 flex-col md:w-1/2 justify-center">
            <div>
                <div class=" text-inovahc-green-500"><?php the_sub_field('chapeu'); ?></div>
                <div class=" text-inovahc-green-800 font-poppins font-bold text-4xl md:text-5xl"><?php the_sub_field('titulo'); ?></div>
            </div>
            <div>
                <div class="text-xl text-inovahc-green-500 mb-4"><?php the_sub_field('subtitulo'); ?></div>
                <div><?php the_sub_field('texto'); ?></div>
            </div>
        </div>
        <div class="md:w-1/2 hidden md:flex">
            <figure>
                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>">
            </figure>
        </div>
    </div>
</section>