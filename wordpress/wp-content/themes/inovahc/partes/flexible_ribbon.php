<section class="bg-inovahc-green-50 grudado temicon">
    <div class="container mx-auto px-6  relative ">
        <div class="section-header flex flex-col justify-center">
            <figure>
            <img src="<?php $img = get_sub_field('icone'); echo $img['url']; ?>" alt="<?php echo $img['alt'] ?>">
            </figure>
            <div class="title text-inovahc-green-800 mt-3"><?php the_sub_field('titulo'); ?></div>
            <div class="md:text-center md:w-1/2 mb-8"><?php the_sub_field('texto'); ?></div>
            <div class=" pb-12">
                <?php
                    $botoes = get_sub_field('botoes'); if(is_array($botoes)){
                        foreach($botoes as $b){
                            $botao = $b['botao'];
                            include(get_stylesheet_directory() . '/partes/_botao.php');
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>