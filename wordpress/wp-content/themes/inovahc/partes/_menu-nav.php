
<div class="controller-nav">
    <nav class="bg-inovahc-green-800 fixed top-0 z-50 w-full min-h-[50px]" id="topo">  
        <div class="container mx-auto flex justify-between p-6 py-4">
            
            <!-- Menu Mobile -->
            <input type="checkbox" id="toggle-menuMobile" style="display:none;">
            <div class="menuMobile overflow-hidden ">
                <div class="flex flex-col w-full">

                    <div class="absolute left-6 top-4 block"> 
                        <a href="<?php echo home_url(); ?>">
                            <?php svg('logo-inovahc',55,40,"fill-white");?> 
                        </a>
                    </div>
                    <label for="toggle-menuMobile" class="absolute right-6 top-5 block">
                        <?php svg('icon-fechar-menu',20,20,"fill-white");?>
                    </label>
                    
                    <?php wp_nav_menu(array(
                        'theme_location' => 'principal',
                        'menu_class' => 'w-full flex flex-col  text-white gap-3 text-lg mt-20',
                        'container' => 'ul',
                    )); ?>

                    <div class="flex gap-2 my-12 items-center justify-between">
                        <div>
                            <a href="search">
                                <button class="btn-icon btn-icon-white  btn-icon-big">
                                <?php svg('icon-busca',17,17,"fill-inovahc-green-800");?> 
                                </button>
                            </a>
                        </div>
                        <div class="flex gap-2">
                            <?php $langs = pll_the_languages(array( 'raw' => 1 )); foreach($langs as $l): ?>
                            <a href="<?php echo $l['url']; ?>" class="btn-icon btn-icon-white btn-icon-small <?php echo $l['current_lang'] ? 'active' : ''; ?>"><?php echo strtoupper($l['slug']); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                
                    <?php wp_nav_menu(array(
                        'theme_location' => 'ms',
                        'menu_class' => 'flex gap-1 ms',
                        'container' => 'ul',
                        'link_before' => '<button class="btn-icon btn-icon-big btn-icon-purple">',
                        'link_after' => '</button>',
                    )); ?>
                </div>

            </div>

            <!-- Menu Desktop -->
            <div class="flex w-full justify-between">
            
                    <!-- Logo Versão Desktop -->
                    <div class="flex logo">
                        <a href="<?php echo home_url(); ?>">
                        <?php svg('logo-inovahc',55,40,"fill-white");?> 
                        </a> 
                    </div>
        
                    <!-- Menu Versão Desktop -->
                    <div class="hidden md:flex flex-1 justify-end">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'principal',
                            'menu_class' => 'flex font-mulish items-center text-white md:gap-2 lg:gap-6',
                            'container' => 'ul',
                        )); ?>

                        <div class="flex gap-2 md:mx-2 lg:mx-8 items-center">
                            <?php $langs = pll_the_languages(array( 'raw' => 1 )); foreach($langs as $l): ?>
                            <a href="<?php echo $l['url']; ?>" class="btn-icon btn-icon-white btn-icon-small <?php echo $l['current_lang'] ? 'active' : ''; ?>"><?php echo strtoupper($l['slug']); ?></a>
                            <?php endforeach; ?>
                        </div>

                        <div class="flex  items-center">
                            <a href="search">
                            <button class="btn-icon btn-icon-white btn-icon-big">
                                <?php svg('icon-busca',17,17,"fill-inovahc-green-800");?> 
                            </button>
                            </a>
                        </div>

                    </div>

                    <div class="md:hidden flex items-center">
                        <label for="toggle-menuMobile">
                            <?php svg('icon-menu',24,20,"fill-white");?> 
                        </label>
                    </div>
        
            </div>

        </div> 
    </nav> 
</div>

