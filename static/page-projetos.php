<!-- Pega o Header -->
<?php $current_page = 'projetos'; get_header(); ?>

<main >
    <!-- Section Page Header  -->
    <section>
        <div class="container mx-auto p-6 flex justify-center gap-5 flex-col md:flex-row">
            <div class="flex gap-2 flex-col md:flex-row  items-center justify-center md:w-7/12">

                <figure class="md:w-32">
                    <img src="./assets/img/sessao/projetos.svg" alt="Contato" class="md:w-32">
                </figure>
            
                <div class="flex flex-col md:flex-1 justify-center md:justify-start w-full text-center md:text-left">
                    <div class=" text-inovahc-green-500">Portfólio</div>
                    <div class=" text-inovahc-green-800 font-poppins font-bold w-full text-4xl">Conheça os projetos</div>
                    <div>Lorem ipsum dolor, consectetur adipiscing elit, sed do eiusmod tempor incididunt ipsum lorem ipsum reprehendit.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Filter -->
    <section class="py-2 md:py-14">
        <div class="container w-full grid grid-cols-1 md:grid-cols-4 mx-auto p-6  flex-col  gap-3 md:gap-6">
 
            <!--  filtrar por temática -->
            <div class="select-inovahc">
                <label for="select-inovahc-button" >
                    <!-- Button -->
                    <button type="button" class="select-inovahc-button" data-id="1">
                        <span class="flex gap-2 items-center">
                        <?php svg('icon-filter',11,11,"fill-white");?>
                        filtrar por temática
                        </span>
                        <span class="chevron">
                        <?php svg('icon-dropdown',12,7,"fill-white");?>
                        </span>
                    </button>
                    <!-- Dropdown -->
                    <div class="select-inovahc-dropdown" data-id="1">
                        
                        <ul class="form-inovahc two-colls">
                            <li>
                                <input type="checkbox" id="item1" name="itens">
                                <label for="item1">Item 1</label>
                            </li>
                            <li>
                                <input type="checkbox" id="item2" name="itens">
                                <label for="item2">Item 2</label>
                            </li>
                            <li>
                                <input type="checkbox" id="item3" name="itens">
                                <label for="item3">Item 3</label>
                            </li>
                            <li>
                                <input type="checkbox" id="item4" name="itens">
                                <label for="item4">Item 4</label>
                            </li>
                            <li>
                                <input type="checkbox" id="item5" name="itens">
                                <label for="item5">temática C ipsum dolor sit amet, consectetur adipiscing elit</label>
                            </li>
                            <li>
                                <input type="checkbox" id="item6" name="itens">
                                <label for="item6">Item 6</label>
                            </li>
                            <li>
                                <input type="checkbox" id="item7" name="itens">
                                <label for="item7">temática C ipsum dolor sit amet, consectetur adipiscing elit</label>
                            </li>
                            <li>
                                <input type="checkbox" id="item8" name="itens">
                                <label for="item8">Item 8</label>
                            </li>
                        </ul>


                        <div class="flex justify-between">
                            <button class="btn" onclick="closeAllDropdowns()">selecionar</button>
                            <button class="btn btn-outline" onclick="closeAllDropdowns()">cancelar</button>
                        </div>
                    </div>
                </label>
            </div>
            <!-- filtrar por tecnologia -->
            <div class="select-inovahc">
                <label for="select-inovahc-button" >
                    <!-- Button -->
                    <button type="button" class="select-inovahc-button" data-id="2">
                        <span class="flex gap-2 items-center">
                        <?php svg('icon-filter',11,11,"fill-white");?>
                        filtrar por tecnologia
                        </span>
                        <span class="chevron">
                        <?php svg('icon-dropdown',12,7,"fill-white");?>
                        </span>
                    </button>
                    <!-- Dropdown -->
                    <div class="select-inovahc-dropdown" data-id="2">
                        <ul class="form-inovahc">
                            <li>
                                <input type="checkbox" id="item1" name="itens">
                                <label for="item1">Hardware</label>
                            </li>
                            <li>
                                <input type="checkbox" id="item2" name="itens">
                                <label for="item2">Software</label>
                            </li>
                            <li>
                                <input type="checkbox" id="item3" name="itens">
                                <label for="item2">biotech</label>
                            </li>
                        </ul>


                        <div class="flex justify-between">
                            <button class="btn" onclick="closeAllDropdowns()">selecionar</button>
                            <button class="btn btn-outline" onclick="closeAllDropdowns()">cancelar</button>
                        </div>
                    </div>
                </label>
            </div>
            <!-- filtrar por instituição -->
            <div class="select-inovahc">
                <label for="select-inovahc-button" >
                    <!-- Button -->
                    <button type="button" class="select-inovahc-button" data-id="3">
                        <span class="flex gap-2 items-center">
                        <?php svg('icon-filter',11,11,"fill-white");?>
                        filtrar por instituição
                        </span>
                        <span class="chevron">
                        <?php svg('icon-dropdown',12,7,"fill-white");?>
                        </span>
                    </button>
                    <!-- Dropdown -->
                    <div class="select-inovahc-dropdown" data-id="3">
                        <ul class="form-inovahc">
                            <li>
                                <input type="checkbox" id="item1" name="itens">
                                <label for="item1">Tipo A</label>
                            </li>
                            <li>
                                <input type="checkbox" id="item2" name="itens">
                                <label for="item2">Tipo B</label>
                            </li>
                            <li>
                                <input type="checkbox" id="item3" name="itens">
                                <label for="item2">tipo C ipsum dolor sit amet, consectetur adipiscing elit</label>
                            </li>
                        </ul>


                        <div class="flex justify-between">
                            <button class="btn" onclick="closeAllDropdowns()">selecionar</button>
                            <button class="btn btn-outline" onclick="closeAllDropdowns()">cancelar</button>
                        </div>
                    </div>
                </label>
            </div>  
            <!-- Busca -->
            <div class="form-inovahc py-4 md:py-0">
                <label for="search-input" class="block relative w-full ">
                    <input
                    id="search-input"
                    type="search"
                    class="pr-8 w-[90%] md:w-full bg-transparent"
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
          
        </div>

        <div class="container mx-auto flex-col gap-4 md:flex-row px-6 pb-6 flex justify-between">
            <div class="flex gap-4 justify-between md:justify-start">
                <button class="btn">aplicar e pesquisar</button>
                <button class="btn btn-outline">limpar</button>
            </div>
            <div class="flex gap-2 items-center">
                <span class="tag">
                    categoria fecha filtro  <?php svg('icon-fechar-menu',5,5,"fill-inovahc-blue-800 ml-2 ");?>
                </span>
                <span class="tag">
                    categoria fecha filtro  <?php svg('icon-fechar-menu',5,5,"fill-inovahc-blue-800 ml-2 ");?>
                </span>
            </div>
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



</main>

<!-- Pega o Footer -->
<?php get_footer(); ?>


