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
    <!-- Filter -->
    <section>
        <div class="container mx-auto p-6 flex flex-col md:flex-row gap-3 md:gap-6">
 
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
                            <button class="btn">selecionar</button>
                            <button class="btn btn-outline">cancelar</button>
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
                            <button class="btn">selecionar</button>
                            <button class="btn btn-outline">cancelar</button>
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
                            <button class="btn">selecionar</button>
                            <button class="btn btn-outline">cancelar</button>
                        </div>
                    </div>
                </label>
            </div>  
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
  
  

</main>
<?php get_footer(); ?>



