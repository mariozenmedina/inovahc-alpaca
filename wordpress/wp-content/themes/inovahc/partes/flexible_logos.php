<section>
    <div class="container mx-auto px-6 py-12 relative ">
        <div class="flex gap-8 flex-col items-center md:justify-center">
            <div class=" md:text-center md:w-1/2">
                <div class="text-inovahc-green-800 text-3xl font-poppins mb-2"><?php the_sub_field('titulo'); ?></div>
                <div><?php the_sub_field('texto'); ?></div>
            </div>
        </div>

        <!-- #Linha1 Parceiros grid grid-cols-3 md:grid-cols-6  -->
        <div class="grid grid-cols-3 md:grid-cols-6 gap-8 md:gap-x-12 gap-y-4 pt-8 pb-5 mb-8">
            <?php $logos = get_sub_field('logos'); foreach($logos as $img): ?>
            <!-- Logo -->
            <figure class=" flex justify-center items-center">
                <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="w-fit">
            </figure>
            <?php endforeach; ?>
        </div>

        <div class="mb-10">
            <button class="btn"><?php pll_e('carregar mais'); ?></button>
        </div>

    </div>
</section>