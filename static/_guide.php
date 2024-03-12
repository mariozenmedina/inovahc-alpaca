<!-- Pega o Header -->
<?php $current_page = 'guide'; get_header(); ?>

<main>
    <!--  Breadcrumbs - Voltar -->
    <section>
        <div class="container mx-auto p-6 flex gap-5 flex-col ">
            <!--  Breadcrumbs - Voltar -->
            <div>
                <a href="home" class="flex gap-2">
                    <button class="btn-icon btn-icon-small">
                    <?php svg('icon-seta-esquerda',12,12,"fill-white");?> 
                    </button>
                    <button class="link">
                        voltar
                    </button>
                </a>
            </div>
        </div>
    </section>
    <!-- Section Search  -->
    <section>
        <div class="container mx-auto p-6 flex flex-col md:flex-row md:gap-20 gap-10">
            <!-- Post - Article -->
            <article class="flex-1">
                <figure>
                    <img src="./assets/img/foto3.jpg" alt="Foto Modelo 1"/>
                </figure>
                <div class="post-header">
                    <div class="post-header-categoria">Projeto</div>
                    <div class="post-header-titulo">Projeto</div>
                    <div class="post-header-info">08/09/2023</div>
                </div>
         
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <p>Para centros médicos e profissionais de saúde que tratam pacientes diabéticos, a BIOO associa conhecimento científico e tecnológico para mudar a realidade de pacientes com complicações do “pé diabético” e que poderiam ser evitadas em até 85% se atendidas precocemente. </p>
                <figure>
                    <img
                    src="./assets/img/foto3.jpg"
                    alt="Foto Modelo 1"
                    />
                </figure>
                <p class="caption">
                     Legenda da imagem
                </p>
                <h3>Subtítulo da notícia</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                <blockquote>
                    “Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod reprehendit nostrud enum.”
	            </blockquote>
                <h3>Arquivos para download</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <p>
            </article>

             <!-- Footer somente mobile -->
             <section class="flex flex-col md:hidden">
                <!-- Temas relacionados -->
                <div>
                    <div class=" text-inovahc-green-800 text-3xl font-poppins mb-4">
                        Temas relacionados
                    </div>
                    <div class="flex flex-wrap gap-4">
                        <button class="tag tag-big">Tag A</button>
                        <button class="tag tag-big">Tag B</button>
                        <button class="tag tag-big">Tag C</button>
                    </div>
                </div>
            </section>

            <!-- Sidebar somente Desktop -->
            <aside class="md:w-[400px] hidden md:flex flex-col">
                <!--  Lista de outros eventos, somente -->
                <div class="flex flex-col">
                    <figure class="md:w-32">
                        <img src="./assets/img/sessao/eventos.svg" alt="Eventos" class="md:w-32">
                    </figure>
                    <div class=" text-inovahc-green-800 text-2xl md:text-3xl font-poppins mb-2">
                        Confira outros eventos em destaque
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



  
</main>
<?php get_footer(); ?>



