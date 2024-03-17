<?php get_header(); ?>
    <main>
        <!--  Breadcrumbs - Voltar -->
        <section>
            <div class="container mx-auto p-6 flex gap-5 flex-col ">
                <?php include_once(get_stylesheet_directory() . '/partes/_breadcrumb.php'); ?>
            </div>
        </section>
        <!-- Single -->
        <?php if( have_posts() ): the_post(); ?>
        <section>
            <div class="container mx-auto p-6 flex flex-col md:flex-row md:gap-20 gap-10">
                <!-- Post - Article -->
                <article class="flex-1">

                    <?php $img = get_field('imagem'); include(get_stylesheet_directory() . '/partes/single_image.php'); ?>

                    <?php include(get_stylesheet_directory() . '/partes/single_header.php'); ?>

                    <?php if( have_rows('conteudo_single') ): while( have_rows('conteudo_single') ): the_row();
                        switch(get_row_layout()){
                            case 'lide':
                                echo '<p class="lead">'.get_sub_field('texto').'</p>';
                                break;
                            case 'citacao':
                                echo '<blockquote cite="'.get_sub_field('fonte').'">'.get_sub_field('texto').'</blockquote>';
                                break;
                            case 'editor':
                                the_sub_field('conteudo');
                                break;
                            case 'imagem':
                                $img = get_sub_field('imagem');
                                include(get_stylesheet_directory() . '/partes/single_image.php');
                                break;
                            case 'arquivos':
                                include(get_stylesheet_directory() . '/partes/single_files.php');
                            case 'botoes':
                                include(get_stylesheet_directory() . '/partes/single_buttons.php');
                        }
                    endwhile; endif; ?>

               

                    <!-- Temas relacionados somente Mobile -->
                    <!-- <div class="flex flex-col md:hidden mb-10">
                        <div class=" text-inovahc-green-800 text-2xl font-poppins mb-4">
                            Temas relacionados
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <button class="tag tag-big">Tag A</button>
                            <button class="tag tag-big">Tag B</button>
                            <button class="tag tag-big">Tag C</button>
                        </div>
                    </div> -->
                    <!--  Controller Desktop - Anterior - Proximo -->
                    <!-- <div class="flex justify-between mb-10">
                        <a href="home" class="flex gap-2">
                            <button class="btn-icon btn-icon-small">
                            <?php svg('icon-seta-esquerda',12,12,"fill-white");?> 
                            </button>
                            <button class="link">
                                anterior
                            </button>
                        </a>

                        <a href="home" class="flex gap-2">
                            <button class="link">
                                próximo
                            </button>
                            <button class="btn-icon btn-icon-small">
                            <?php svg('icon-seta-direita',12,12,"fill-white");?> 
                            </button>
                        </a>
                    </div> -->
                    <!-- Compartilhe somente Mobile -->
                    <!-- <div class="flex flex-col md:hidden mb-10 justify-center items-center">
                        <div class="mb-2 text-sm text-inovahc-green-500">
                            Compartilhe este conteúdo:
                        </div>
                        <div class="flex gap-2">
                            <button class="btn-icon btn-icon-big ">  
                                <?php svg('icon-x',19,17,"");?> 
                            </button>
                            <button class="btn-icon btn-icon-big">  
                                <?php svg('icon-linkedin',19,19,"");?> 
                            </button>
                            <button class="btn-icon btn-icon-big">  
                                <?php svg('icon-flicker',20,16,"");?> 
                            </button>
                            <button class="btn-icon btn-icon-big">  
                                <?php svg('icon-facebook',11,20,"");?> 
                            </button>
                            <button class="btn-icon btn-icon-big">  
                                <?php svg('icon-instagram',19,19,"");?> 
                            </button>   
                        </div>
                    </div> -->

                </article>

            

                <!-- Sidebar somente Desktop -->
                <aside class="md:w-[400px] hidden md:flex flex-col">
                    <!--  Lista de outros eventos, somente -->
                    <div class="flex flex-col">
                        <figure class="md:w-32">
                            <img src="./assets/img/sessao/conteudosnoticias.svg" alt="Eventos" class="md:w-32">
                        </figure>
                        <div class=" text-inovahc-green-800 text-2xl md:text-3xl font-poppins mb-2">
                        Confira mais conteúdos em destaque
                        </div>
                        <!--  Grid de eventos -->
                        <div class=" grid grid-cols-1 py-8 gap-5">
                            <!-- Card eventos -->
                            <div class="flex flex-col md:flex-row gap-4">
                                <figure class=" bg-inovahc-blue-800 rounded-lg md:w-1/3 max-h-[76px]">
                                    <img src="./assets/img/foto3.jpg" alt="evento" class="w-full max-h-[76px] rounded-lg object-cover">
                                </figure>
                                <div class="flex flex-col md:w-2/3">
                                    <div class="text-inovahc-purple-800 mb-1  font-semibold">Título lorem ipsum magna  consectetur nostrud tempor dolorem adipiscing</div>
                                    <div class="text-xs mb-2">09/2023</div>
                                    <div>
                                        <button class="link">leia mais</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Card eventos -->
                            <div class="flex flex-col md:flex-row gap-4">
                                <figure class=" bg-inovahc-blue-800 rounded-lg md:w-1/3 max-h-[76px]">
                                    <img src="./assets/img/foto3.jpg" alt="evento" class="w-full max-h-[76px] rounded-lg object-cover">
                                </figure>
                                <div class="flex flex-col md:w-2/3">
                                    <div class="text-inovahc-purple-800 mb-1  font-semibold">Título lorem ipsum magna  consectetur nostrud tempor dolorem adipiscing</div>
                                    <div class="text-xs mb-2">09/2023</div>
                                    <div>
                                        <button class="link">leia mais</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Card eventos -->
                            <div class="flex flex-col md:flex-row gap-4">
                                <figure class=" bg-inovahc-blue-800 rounded-lg md:w-1/3 max-h-[76px]">
                                    <img src="./assets/img/foto3.jpg" alt="evento" class="w-full max-h-[76px] rounded-lg object-cover">
                                </figure>
                                <div class="flex flex-col md:w-2/3">
                                    <div class="text-inovahc-purple-800 mb-1  font-semibold">Título lorem ipsum magna  consectetur nostrud tempor dolorem adipiscing</div>
                                    <div class="text-xs mb-2">09/2023</div>
                                    <div>
                                        <button class="link">leia mais</button>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <!--  Temas relacionados -->
                    <div class="flex flex-col">
                        <div class=" text-inovahc-green-800 text-3xl font-poppins mb-4">
                            Temas relacionados
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <button class="tag tag-big">Tag A</button>
                            <button class="tag tag-big">Tag B</button>
                            <button class="tag tag-big">Tag C</button>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>