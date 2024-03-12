
<nav class=" bg-inovahc-green-800" id="topo" >  
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
                

                <ul class=" w-full flex flex-col  text-white gap-3 text-lg mt-20">
                    <a href="indes"><li>home</li></a>
                    <a href="quem-somos"><li>quem somos</li></a>
                    <a href="servicos"><li>serviços</li></a>
                    <a href="projetos"><li>projetos</li></a>
                    <a href="noticias"><li>notícias e conteúdos</li></a>
                    <a href="eventos"><li>eventos</li></a>
                    <a href="contatos"><li>contatos</li></a>
                </ul>

                <div class="flex gap-2 my-12 items-center">
                    <button class="btn-icon btn-icon-white btn-icon-small active">PT</button>
                    <button class="btn-icon btn-icon-white btn-icon-small">EN</button>
                    <a href="search">
                        <button class="btn-icon btn-icon-white">
                        <?php svg('icon-busca',17,17,"fill-inovahc-green-800");?> 
                        </button>
                    </a>
                </div>

                <div class="mb-6">
                    <button class="btn btn-menu btn-menu-purple "> inove conosco </button>
                </div>

             
                <div class="flex gap-3">
                    <button class="btn-icon btn-icon-purple">  
                         <?php svg('icon-x',19,17,"");?> 
                    </button>
                    <button class="btn-icon btn-icon-purple">  
                         <?php svg('icon-linkedin',19,19,"");?> 
                    </button>
                    <button class="btn-icon btn-icon-purple">  
                         <?php svg('icon-flicker',20,16,"");?> 
                    </button>
                    <button class="btn-icon btn-icon-purple">  
                         <?php svg('icon-facebook',11,20,"");?> 
                    </button>
                    <button class="btn-icon btn-icon-purple">  
                         <?php svg('icon-instagram',19,19,"");?> 
                    </button>   
                </div>
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
                
                    <ul class="flex  font-mulish  items-center text-white md:gap-2 lg:gap-6">
                        <a href="quem-somos"> <li>quem somos</li></a>
                        <a href="servicos"><li>serviços</li></a>
                        <a href="projetos"><li>projetos</li></a>
                        <a href="conteudos"><li>conteúdos</li></a>
                        <a href="eventos"><li>eventos</li></a>
                        <a href="contato"><li>contato</li></a>
                        <a href="#"><button class="btn btn-menu whitespace-nowrap">inove conosco</button></a>
                    </ul>

                    <div class="flex gap-2 md:mx-2 lg:mx-8 items-center">
                        <button class="btn-icon btn-icon-white btn-icon-small active">PT</button>
                        <button class="btn-icon btn-icon-white btn-icon-small">EN</button>
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






