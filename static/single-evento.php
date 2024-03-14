<!-- Pega o Header -->
<?php $current_page = 'evento'; get_header(); ?>

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
                    <img src="./assets/img/foto1.jpg" alt="Foto Modelo 1"/>
                </figure>
                <!-- Header Default -->
                <div class="post-header">
                    <div class="post-header-categoria">Evento</div>
                    <div class="post-header-titulo">Título do evento</div>
                    <div class="post-header-info">08/09/2023 | Parceiro, instituição etc</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                </div>
                <!-- Info evento -->
                <div class=" mb-10"> 
                    <!-- Duas colunas -->
                    <div class=" grid grid-cols-2 gap-4 mb-6">
                        <!-- Card 1 -->
                        <div class="flex">
                            <div class="p-2">
                                <svg width="13" height="19" viewBox="0 0 13 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4949 11.5605V15.8405C11.4949 16.9277 10.6137 17.8081 9.52725 17.8081H2.96864C1.88141 17.8081 1.00098 16.9269 1.00098 15.8405V2.96766C1.00098 1.88043 1.88219 1 2.96864 1H9.52725C10.6145 1 11.4949 1.88122 11.4949 2.96766V9.24428" stroke="#41CC96" stroke-width="1.21177" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 4.6543H11.4947" stroke="#41CC96" stroke-width="1.21177" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 13.1465H11.4947" stroke="#41CC96" stroke-width="1.21177" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.98012 15.3695C6.98012 15.7744 6.65187 16.1027 6.24695 16.1027C5.84203 16.1027 5.51377 15.7744 5.51377 15.3695C5.51377 14.9646 5.84203 14.6363 6.24695 14.6363C6.65187 14.6363 6.98012 14.9646 6.98012 15.3695Z" fill="#41CC96" stroke="#41CC96" stroke-width="0.0783304"/>
                                </svg>
                            </div>
                            <div>
                                <div class=" text-inovahc-green-800 text-xl font-semibold">08/09/2023</div>
                                <div>Inscrições até lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="flex">
                            <div class="p-2">
                                <svg width="13" height="19" viewBox="0 0 13 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.4949 11.5605V15.8405C11.4949 16.9277 10.6137 17.8081 9.52725 17.8081H2.96864C1.88141 17.8081 1.00098 16.9269 1.00098 15.8405V2.96766C1.00098 1.88043 1.88219 1 2.96864 1H9.52725C10.6145 1 11.4949 1.88122 11.4949 2.96766V9.24428" stroke="#41CC96" stroke-width="1.21177" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 4.6543H11.4947" stroke="#41CC96" stroke-width="1.21177" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1 13.1465H11.4947" stroke="#41CC96" stroke-width="1.21177" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.98012 15.3695C6.98012 15.7744 6.65187 16.1027 6.24695 16.1027C5.84203 16.1027 5.51377 15.7744 5.51377 15.3695C5.51377 14.9646 5.84203 14.6363 6.24695 14.6363C6.65187 14.6363 6.98012 14.9646 6.98012 15.3695Z" fill="#41CC96" stroke="#41CC96" stroke-width="0.0783304"/>
                                </svg>
                            </div>
                            <div>
                                <div class=" text-inovahc-green-800 text-xl font-semibold">Evento presencial</div>
                                <div>Inscrições até lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button class="btn">link do evento</button>
                        <button class="btn btn-outline">galeria opcional</button>
                    </div>
                </div>
             
                <h3>Sobre</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

                <!-- Info Participacao / Programação -->
                <div class="flex md:flex-row flex-col gap-4 mb-20">
                    <!-- Info Participacao -->
                    <div class="flex-col flex">
                        <div class="mb-2 text-xl text-inovahc-green-500 font-semibold">
                            Participação
                        </div>
                        <div class="grid gap-2 ">
                            <!-- Palestrante -->
                            <div>
                                <div class="mb-1">Nome do Palestrante</div>
                                <div class="text-xs">Inscrições até lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                            </div>
                            <!-- Palestrante -->
                            <div>
                                <div class="mb-1">Nome do Palestrante</div>
                                <div class="text-xs">Inscrições até lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                            </div>
                        </div>
                    </div>

                    <!-- Info Programação -->
                    <div class="flex-col flex">
                        <div class="mb-2 text-xl text-inovahc-green-500 font-semibold">
                            Programação
                        </div>
                        <div class="grid gap-2 ">
                            <!-- Palestrante -->
                            <div>
                                <div class="mb-1">22/22/22, 22h</div>
                                <div class="text-xs">Inscrições até lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                            </div>
                            <!-- Palestrante -->
                            <div>
                                <div class="mb-1">22/22/22, 22h</div>
                                <div class="text-xs">Inscrições até lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</div>
                            </div>
                        </div>
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



