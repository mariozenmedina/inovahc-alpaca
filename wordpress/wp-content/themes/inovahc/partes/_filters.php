<!-- Filter -->
<section class="py-2 md:py-14">
    <div class="container w-full grid grid-cols-1 md:grid-cols-4 mx-auto p-6  flex-col  gap-3 md:gap-6">

        <?php if($post_type != 'eventos'): ?>
        <!--  filtrar por temática -->
        <div class="select-inovahc">
            <label for="select-inovahc-button" >
                <!-- Button -->
                <button type="button" class="select-inovahc-button" data-id="1">
                    <span class="flex gap-2 items-center">
                    <?php svg('icon-filter',11,11,"fill-white");?>
                    <?php pll_e('filtrar por temática'); ?>
                    </span>
                    <span class="chevron">
                    <?php svg('icon-dropdown',12,7,"fill-white");?>
                    </span>
                </button>
                <!-- Dropdown -->
                <div class="select-inovahc-dropdown" data-id="1">
                    
                    <ul class="form-inovahc two-colls">
                        <?php $tematicas = get_terms( array('taxonomy' => 'category', 'hide_empty' => false) ); foreach( $tematicas as $tm ): ?>
                        <li>
                            <input <?php if(isset($_GET['cat']) && in_array($tm->term_taxonomy_id, $_GET['cat'])){ echo 'checked'; } ?> data-name="<?php echo $tm->name; ?>" data-tax="cat" type="checkbox" value="<?php echo $tm->term_taxonomy_id; ?>" id="filter_<?php echo $tm->term_taxonomy_id; ?>" name="category" />
                            <label for="filter_<?php echo $tm->term_taxonomy_id; ?>"><?php echo $tm->name; ?></label>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="flex justify-between">
                        <p></p>
                        <button class="btn btn-outline" onclick="closeAllDropdowns()"><?php pll_e('fechar'); ?></button>
                    </div>
                </div>
            </label>
        </div>
        <?php endif; ?>
        <?php if($post_type == 'projetos'): ?>
        <!-- filtrar por tecnologia -->
        <div class="select-inovahc">
            <label for="select-inovahc-button" >
                <!-- Button -->
                <button type="button" class="select-inovahc-button" data-id="2">
                    <span class="flex gap-2 items-center">
                    <?php svg('icon-filter',11,11,"fill-white");?>
                    <?php pll_e('filtrar por tecnologia'); ?>
                    </span>
                    <span class="chevron">
                    <?php svg('icon-dropdown',12,7,"fill-white");?>
                    </span>
                </button>
                <!-- Dropdown -->
                <div class="select-inovahc-dropdown" data-id="2">
                    <ul class="form-inovahc">
                        <?php $tech = get_terms( array('taxonomy' => 'tecnologia', 'hide_empty' => false) ); foreach( $tech as $tm ): ?>
                        <li>
                            <input <?php if(isset($_GET['tecnologia']) && in_array($tm->slug, $_GET['tecnologia'])){ echo 'checked'; } ?> data-name="<?php echo $tm->name; ?>" data-tax="tecnologia" type="checkbox" value="<?php echo $tm->slug; ?>" id="filter_<?php echo $tm->term_taxonomy_id; ?>" name="tecnologia" />
                            <label for="filter_<?php echo $tm->term_taxonomy_id; ?>"><?php echo $tm->name; ?></label>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="flex justify-between">
                        <p></p>
                        <button class="btn btn-outline" onclick="closeAllDropdowns()"><?php pll_e('fechar'); ?></button>
                    </div>
                </div>
            </label>
        </div>
        <?php endif; ?>
        <?php if($post_type == 'projetos'): ?>
        <!-- filtrar por instituição -->
        <div class="select-inovahc">
            <label for="select-inovahc-button" >
                <!-- Button -->
                <button type="button" class="select-inovahc-button" data-id="3">
                    <span class="flex gap-2 items-center">
                    <?php svg('icon-filter',11,11,"fill-white");?>
                    <?php pll_e('filtrar por instituição'); ?>
                    </span>
                    <span class="chevron">
                    <?php svg('icon-dropdown',12,7,"fill-white");?>
                    </span>
                </button>
                <!-- Dropdown -->
                <div class="select-inovahc-dropdown" data-id="3">
                    <ul class="form-inovahc">
                        <?php $inst = get_terms( array('taxonomy' => 'instituicao', 'hide_empty' => false) ); foreach( $inst as $tm ): ?>
                        <li>
                            <input <?php if(isset($_GET['instituicao']) && in_array($tm->slug, $_GET['instituicao'])){ echo 'checked'; } ?> data-name="<?php echo $tm->name; ?>" data-tax="instituicao" type="checkbox" value="<?php echo $tm->slug; ?>" id="filter_<?php echo $tm->term_taxonomy_id; ?>" name="instituicao" />
                            <label for="filter_<?php echo $tm->term_taxonomy_id; ?>"><?php echo $tm->name; ?></label>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="flex justify-between">
                        <p></p>
                        <button class="btn btn-outline" onclick="closeAllDropdowns()"><?php pll_e('fechar'); ?></button>
                    </div>
                </div>
            </label>
        </div>
        <?php endif; ?>
        <!-- Busca -->
        <div class="form-inovahc py-4 md:py-0">
            <label for="search-input" class="block relative w-full ">
            <input id="search-input" type="search" name="s" value="<?php echo sanitize_text_field(@$_GET['s']); ?>" class="pr-8 w-[90%] md:w-full bg-transparent" aria-label="Input (search)" placeholder="<?php pll_e('busca por palavras-chave'); ?>" />
                <!-- Button desktop -->
                <button onclick="filterSubmit()" class="absolute right-0 top-0 mt-[0.7rem] mr-2 hidden md:flex">
                    <?php svg('icon-busca',17,17,"fill-inovahc-gray-400");?> 
                </button>

                <!-- Button mobile -->
                <button onclick="filterSubmit()" class="btn-icon btn-icon-big absolute right-0 -top-2 mt-[0.7rem] flex md:hidden">
                        <?php svg('icon-busca',14,14,"fill-iwhite");?> 
                </button>
        
            </label>
        </div>
        
    </div>

    <div class="container mx-auto flex-col gap-4 md:flex-row px-6 pb-6 flex justify-between">
        <div class="flex gap-4 justify-between md:justify-start">
            <a id="aplicar-filtros-archive" data-baseurl="<?php echo get_post_type_archive_link($post_type); ?>" class="btn"><?php pll_e('aplicar e pesquisar'); ?></a>
            <a href="<?php echo get_post_type_archive_link($post_type); ?>" class="btn btn-outline"><?php pll_e('limpar'); ?></a>
        </div>
        <div class="flex gap-2 items-center" id="filtered-taxonomies">
        </div>
    </div>
</section>