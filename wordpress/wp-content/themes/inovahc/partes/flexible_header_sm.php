<!-- Section Page Header  -->
<section>
    <div class="container mx-auto p-6 flex justify-center gap-5 flex-col md:flex-row">
        <div class="flex gap-2 flex-col md:flex-row  items-center justify-center md:w-7/12">

            <figure class="md:w-32">
                <img src="<?php $img = get_sub_field('imagem'); echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>" class="md:w-32">
            </figure>
        
            <div class="flex flex-col md:flex-1 justify-center md:justify-start w-full text-center md:text-left">
                <div class=" text-inovahc-green-500"><?php the_sub_field('chapeu'); ?></div>
                <div class=" text-inovahc-green-800 font-poppins font-bold w-full text-4xl"><?php the_sub_field('titulo'); ?></div>
                <div><?php the_sub_field('texto'); ?></div>
            </div>
        </div>
    </div>
</section>