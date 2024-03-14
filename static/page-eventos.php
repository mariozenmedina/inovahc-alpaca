<!-- Pega o Header -->
<?php $current_page = 'eventos'; get_header(); ?>

<main >
    <!-- Section Page Header  -->
    <section>
        <div class="container mx-auto p-6 flex justify-center gap-5 flex-col md:flex-row">
            <div class="flex gap-2 flex-col md:flex-row  items-center justify-center md:w-7/12">

                <figure class="md:w-32">
                    <img src="./assets/img/sessao/eventos.svg" alt="Eventos" class="md:w-32">
                </figure>
            
                <div class="flex flex-col md:flex-1 justify-center md:justify-start text-center md:text-left">
                    <div class=" text-inovahc-green-500">Eventos</div>
                    <div class=" text-inovahc-green-800 font-poppins font-bold text-4xl">Encontros, palestras, cursos e mais</div>
                  
                    <div>Lorem ipsum dolor, consectetur adipiscing elit, sed do eiusmod tempor incididunt ipsum lorem ipsum reprehendit.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Filter -->
    <section class="py-2 md:py-14">
        <div class="container mx-auto p-6 flex flex-col md:flex-row gap-3 md:gap-6">
 
            <!-- Busca -->
            <div class="form-inovahc py-4 md:py-0">
                <label for="search-input" class="block relative w-[330px]">
                    <input
                    id="search-input"
                    type="search"
                    class="pr-8 w-[85%] md:w-full bg-transparent"
                    aria-label="Input (search)"
                    placeholder="busca por palavras-chave"
                    />
                    <!-- Button desktop -->
                    <button type="submit" class="absolute right-0 top-0 mt-[0.7rem] mr-2 hidden md:flex">
                        <?php svg('icon-busca',17,17,"fill-inovahc-gray-400");?> 
                    </button>

                    <!-- Button mobile -->
                    <button type="submit" class="btn-icon btn-icon-big absolute right-0 -top-2 mt-[0.7rem] flex md:hidden">
                            <?php svg('icon-busca',14,14,"fill-iwhite");?> 
                    </button>
            
                </label>
            </div>

            <div class="flex gap-4 justify-between md:justify-start">
                <button class="btn">aplicar e pesquisar</button>
                <button class="btn btn-outline">limpar</button>
            </div>
          
        </div>

    </section>
    <!-- Section Eventos   -->
    <section>
        <div class="container mx-auto px-6 py-16 flex flex-col">
            <div class="flex flex-col justify-center">
                <div class="mt-2 flex w-2/3 font-poppins text-3xl  md:w-full md:justify-center md:text-center text-inovahc-green-800 ">CTA próximos eventos</div>
                <div class="md:text-center  mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div> 
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
    <!-- Section Eventos Passados -->
    <section class=" bg-inovahc-green-50">
        <div class="container mx-auto px-6 py-12 relative ">
            <!--  Section Projetos premiados Header -->
            <div class="section-header flex flex-col justify-center">
                <figure >
                    <img src="./assets/img/sessao/holofote.svg" alt="premio" >
                </figure>
                <div class="title text-inovahc-green-800 mt-3">CTA eventos passados</div>
                <div class="md:text-center  mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
            </div>   
            <!-- Mostragem dos Projetos -->
            <div class="grid md:grid-cols-4 gap-5">
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

</main>

<!-- Pega o Footer -->
<?php get_footer(); ?>


