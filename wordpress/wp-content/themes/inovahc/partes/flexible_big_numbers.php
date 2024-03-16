<!-- Section Big Numbers -->
<section>
    <div class="container mx-auto px-6 pt-8 pb-28 md:py-28">
        <div class="flex justify-center text-lg text-center md:text-xl font-semibold text-inovahc-gray-400 mb-4"><?php the_sub_field('texto'); ?></div>

        <div class="grid md:grid-cols-3 gap-5">

            <?php $numbers = get_sub_field('numbers'); foreach($numbers as $n): ?>
            <div class=" big-number">
                <figure>
                    <img src="<?php echo $n['imagem']['url']; ?>" alt="<?php echo $n['imagem']['alt']; ?>">
                </figure>
                <div class="big-number-text">
                    <div class="number"><?php echo $n['numero']; ?></div>
                    <div class="description"><?php echo $n['texto']; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>