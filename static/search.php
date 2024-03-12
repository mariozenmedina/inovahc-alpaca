<!-- Pega o Header -->
<?php $current_page = 'search'; get_header(); ?>

<main>
    <!-- Section Search  -->
    <section class="bg-inovahc-green-50 bg-no-repeat  bg-[right_bottom]" style="min-height: calc(100vh - 72px)!important; background-image: url(./assets/img/grafismo/bg-search.png)">

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
            <!--   Filtros / Forms -->
            <div class="flex md:justify-center md:flex-row flex-col py-8">
                <div class="flex justify-between md:w-8/12 md:items-center md:flex-row flex-col">
                    <div class="flex form-underline form-green ">
                        <label for="search-input" class="block relative w-[330px]">
                            <input
                            id="search-input"
                            type="search"
                            class="form-input pr-8 w-[85%] md:w-full bg-transparent"
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
                    <div class="md:flex  hidden gap-5 ">
                        <button class="btn">aplicar e pesquisar</button>
                        <button class="btn btn-outline">limpar</button>
                    </div>
                </div>
            </div>
            <!-- Com Resultados -->
            <div>
                <div class="flex md:justify-center md:flex-row flex-col text-inovahc-green-800 text-center font-poppins text-3xl">
                Resultados encontrados:
                </div>
                <!-- Lista encontrada -->
                <div class="grid md:grid-cols-3 gap-4 py-6">
                    <div class="card px-4 py-3 w-full">
                        <div class=" text-xl font-semibold text-inovahc-purple-800">Conteúdos</div>
                        <div class=" text-inovahc-green-500 font-bold underline">100 resultados encontrados</div>
                    </div>
                
                    <div class="card px-4 py-3  w-full">
                        <div class=" text-xl font-semibold text-inovahc-purple-800">Eventos</div>
                        <div class=" text-inovahc-green-500 font-bold underline">100 resultados encontrados</div>
                    </div>

                    <div class="card px-4 py-3  w-full">
                        <div class=" text-xl font-semibold text-inovahc-purple-800">Portfólio</div>
                        <div class=" text-inovahc-green-500 font-bold underline">100 resultados encontrados</div>
                    </div>
                </div>
            </div>
            <!-- Nenhum resultado encontrado. -->
            <div>
                <div class="flex md:justify-center md:flex-row flex-col text-inovahc-green-800 text-center font-poppins text-3xl mb-2">
                Nenhum resultado encontrado.
                </div>
                <div class="flex justify-center md:flex-row flex-col items-center">
                Faça uma nova pesquisa.
                </div>
                <div class="flex items-center justify-center md:flex-row flex-col py-2">
                    <figure class="md:w-32">
                        <img src="./assets/img/sessao/no-search.svg" alt="Sem resultados" class="md:w-32">
                    </figure>
                </div>
            </div>


            
        </div>
        
    </section>
</main>



