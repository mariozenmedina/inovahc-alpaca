<!-- Sidebar -->
<?php $post_type = get_post_type(get_the_ID()); ?>
<aside class="lg:w-[400px] flex flex-col sticky top-[100px] self-start">
    <!--  Lista de outros eventos, somente -->
    <div class="flex flex-col">
        <figure class="md:w-32">
            <img src="<?php tu(); ?>/img/icone-<?php echo $post_type; ?>.svg" alt="Eventos" class="md:w-32">
        </figure>
        <div class=" text-inovahc-green-800 text-2xl md:text-3xl font-poppins mb-2"><?php
            switch ($post_type) {
                case 'eventos':
                    echo pll_e('Confira outros eventos em destaque');
                    break;
                case 'projetos':
                    echo pll_e('Confira outros projetos em destaque');
                    break;
                default:
                    echo pll_e('Confira mais conteúdos em destaque');
                    break;
            }
        ?></div>
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