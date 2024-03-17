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

                    <?php $img = get_field('imagem'); if($img): ?>
                    <figure>
                        <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"/>
                    </figure>
                    <?php endif; ?>

                    <!-- Header Default -->
                    <div class="post-header">
                        <div class="post-header-categoria"><?php switch( get_post_type( get_the_ID() ) ){
                            case 'eventos':
                                echo pll_e('Evento');
                                break;
                            case 'projetos':
                                echo pll_e('Projeto');
                                break;
                            default:
                                echo pll_e('Conteúdo');
                                break;
                        }; ?></div>
                        <h1 class="post-header-titulo"><?php the_title(); ?></h1>
                        <div class="post-header-info"><?php the_date('d/m/Y'); ?><?php $autoria = get_field('autoria'); if($autoria){ echo ' | '.$autoria; } ?></div>
                    </div>

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
                                $src = $img['url'];
                                $alt = $img['alt'];
                                $caption = $img['caption'];
                                echo '<figure>';
                                echo "<img src='$src' alt='$alt' />";
                                if($caption){ echo "<figcaption class='caption'>$caption</figcaption>"; }
                                echo '</figure>';
                                break;
                        }
                    endwhile; endif; ?>
                    

                    <h2>Arquivos para download</h2>
                    <h3>Arquivos para download</h3>
                    <h4>Arquivos para download</h4>
                    <h5>Arquivos para download</h5>
                    <h6>Arquivos para download</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                    <p class="mario">Paragrafo do mario</p>
                    
                    <!-- Lista de Donwloads -->
                    <div class="flex flex-col gap-4 mb-20">      
                        <!-- Card 1 -->
                        <div class="card w-full p-4">
                            <div class=" text-inovahc-purple-800 text-lg font-semibold">Título lorem ipsum magna  consectetur nostrud tempor dolorem </div>
                            <div class="mb-4 text-xs">.ppt | 15mb</div>
                            <div class="link">download</div>
                        </div>
                        <!-- Card 2 -->
                        <div class="card w-full p-4">
                            <div class=" text-inovahc-purple-800 text-lg font-semibold">Título lorem ipsum magna  consectetur nostrud tempor dolorem </div>
                            <div class="mb-4 text-xs">.ppt | 15mb</div>
                            <div class="link">download</div>
                        </div>
                    </div>
                

                    <!-- Temas relacionados somente Mobile -->
                    <div class="flex flex-col md:hidden mb-10">
                        <div class=" text-inovahc-green-800 text-2xl font-poppins mb-4">
                            Temas relacionados
                        </div>
                        <div class="flex flex-wrap gap-4">
                            <button class="tag tag-big">Tag A</button>
                            <button class="tag tag-big">Tag B</button>
                            <button class="tag tag-big">Tag C</button>
                        </div>
                    </div>
                    <!--  Controller Desktop - Anterior - Proximo -->
                    <div class="flex justify-between mb-10">
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
                    </div>
                    <!-- Compartilhe somente Mobile -->
                    <div class="flex flex-col md:hidden mb-10 justify-center items-center">
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
                    </div>

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