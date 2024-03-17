<?php get_header(); ?>
    <main>
        <!-- Section Search  -->
        <section class="bg-inovahc-green-50 bg-no-repeat bg-[right_bottom]" style="min-height: calc(100vh - 72px) !important; background-image: url('<?php tu(); ?>/img/bg-search.png');">

            <div class="container mx-auto p-6 flex gap-5 flex-col ">
                <?php include_once(get_stylesheet_directory() . '/partes/_breadcrumb.php'); ?>
                <!--   Filtros / Forms -->
                <div class="flex md:justify-center md:flex-row flex-col py-8">
                    <form action="<?php url(); ?>" class="flex justify-between md:w-8/12 md:items-center md:flex-row flex-col">


                        <!-- Busca -->
                        <div class="form-inovahc py-4 md:py-0">
                            <label for="search-input" class="block relative w-full ">
                                <input id="search-input" name="s" value="<?php echo sanitize_text_field($_GET['s']); ?>" type="search" class="pr-8 w-[90%] md:w-full md:min-w-[350px] bg-transparent" aria-label="Input (search)" placeholder="<?php pll_e('busca por palavras-chave'); ?>" />
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
                            <button type="submit" class="btn"><?php pll_e('aplicar e pesquisar'); ?></button>
                            <a href="<?php url(); ?>?s" class="btn btn-outline"><?php pll_e('limpar'); ?></a>
                        </div>
                    </form>
                </div>
                <!-- Com Resultados -->
                <div>
                    <div class="flex md:justify-center md:flex-row flex-col text-inovahc-green-800 text-center font-poppins text-3xl">
                    <?php pll_e('Resultados encontrados:'); ?>
                    </div>
                    <!-- Lista encontrada -->
                    <div class="grid md:grid-cols-3 gap-4 py-6">
                        <div class="card px-4 py-3 w-full">
                            <div class="text-xl font-semibold text-inovahc-purple-800"><?php pll_e('Conteúdos'); ?></div>
                            <div class="text-inovahc-green-500 font-bold underline">100 <?php pll_e('resultados encontrados'); ?></div>
                        </div>
                    
                        <div class="card px-4 py-3  w-full">
                            <div class="text-xl font-semibold text-inovahc-purple-800"><?php pll_e('Eventos'); ?></div>
                            <div class="text-inovahc-green-500 font-bold underline">100 <?php pll_e('resultados encontrados'); ?></div>
                        </div>

                        <div class="card px-4 py-3  w-full">
                            <div class="text-xl font-semibold text-inovahc-purple-800"><?php pll_e('Portfólio'); ?></div>
                            <div class="text-inovahc-green-500 font-bold underline">100 <?php pll_e('resultados encontrados'); ?></div>
                        </div>
                    </div>
                </div>
                <!-- Nenhum resultado encontrado. -->
                <div>
                    <div class="flex md:justify-center md:flex-row flex-col text-inovahc-green-800 text-center font-poppins text-3xl mb-2">
                    <?php pll_e('Nenhum resultado encontrado.'); ?>
                    </div>
                    <div class="flex justify-center md:flex-row flex-col items-center">
                    <?php pll_e('Faça uma nova pesquisa.'); ?>
                    </div>
                    <div class="flex items-center justify-center md:flex-row flex-col py-2">
                        <figure class="md:w-32">
                            <img src="<?php tu(); ?>/img/no-search.svg" alt="Sem resultados" class="md:w-32">
                        </figure>
                    </div>
                </div>


                
            </div>
            
        </section>
    </main>
<?php get_footer(); ?>