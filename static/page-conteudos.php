<!-- Pega o Header -->
<?php $current_page = 'conteudos'; get_header(); ?>

<main >
    <!-- Section Page Header  -->
    <section>
        <div class="container mx-auto p-6 flex justify-center gap-5 flex-col md:flex-row">
            <div class="flex gap-2 flex-col md:flex-row  items-center justify-center md:w-7/12">

                <figure class="md:w-32">
                    <img src="./assets/img/sessao/conteudosnoticias.svg" alt="Conteudos" class="md:w-32">
                </figure>
            
                <div class="flex flex-col md:flex-1 justify-center md:justify-start text-center md:text-left">
                    <div class=" text-inovahc-green-300">Conteúdos</div>
                    <div class=" text-inovahc-green-800 font-poppins font-bold text-4xl">Conteúdos e notícias</div>
                    <div>Lorem ipsum dolor, consectetur adipiscing elit, sed do eiusmod tempor incididunt ipsum lorem ipsum reprehendit.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Filtro  -->
    <section>
        <div class="container mx-auto px-6 md:pt-16 flex flex-col md:flex-row ">
            FILTROS
        </div>
    </section>
    <!-- Section Projetos  -->
    <section>
        <div class="container mx-auto px-6 py-16 flex flex-col">
            <!-- Mostragem dos Projetos -->
            <div class="grid md:grid-cols-4 gap-5">
                <?php get_template_part('blocks/card'); ?> 
                <?php get_template_part('blocks/card'); ?> 
                <?php get_template_part('blocks/card'); ?> 
                <?php get_template_part('blocks/card'); ?> 
                <?php get_template_part('blocks/card'); ?> 
                <?php get_template_part('blocks/card'); ?> 
                <?php get_template_part('blocks/card'); ?> 
                <?php get_template_part('blocks/card'); ?> 
            </div>    
            <!-- Paginação -->
            <div class="py-4 flex justify-end gap-4  items-center"> 
                <div class=" text-inovahc-green-500">
                Página 
                <span class=" text-inovahc-green-800">XX</span>
                de 
                <span class=" text-inovahc-green-800">XX</span>
                </div>
                <div class="flex gap-2">
                    <button class="btn-icon" disabled >
                        <?php svg('icon-anterior',7,12,"fill-white");?> 
                    </button>
                    <button class="btn-icon" active>
                        <?php svg('icon-proximo',7,12,"fill-white");?> 
                    </button>
                <div>
            </div>
        </div>
    </section>
    <!-- Section Notícias -->
    <section class=" bg-inovahc-purple-100">
        <div class="container mx-auto px-6 pt-12 relative ">
        <!--  Section Notícias Header -->
        <div class="section-header">
            <figure >
                <img src="./assets/img/sessao/megafone.svg" alt="megafone">
            </figure>
            <div class="title">Destaques em notícias</div>
        </div>
        </div>
        <!-- #Slider Noticias -->
        <div class="flex items-center overflow-hidden ">
            <div class="container mx-auto px-5">
                <!-- Slide Noticias -->
                <div id="noticias-slide" class="splide" aria-label="Noticias">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>
                            <li class="splide__slide">
                                <?php get_template_part('blocks/card'); ?>       
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section Notícias Rodape -->
        <div class="container mx-auto px-6 pb-12">
        <button class="btn">ir para a página de conteúdos</button>
        </div>
    </section>
</main>

<!-- Pega o Footer -->
<?php get_footer(); ?>


