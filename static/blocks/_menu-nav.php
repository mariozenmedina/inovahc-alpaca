
<nav class=" bg-inovahc-green-800" >  
    <div class="container mx-auto flex justify-between p-6 py-2">
        <!-- Menu Mobile -->
        <input type="checkbox" id="toggle-menuMobile" style="display:none;">
        <div class="menuMobile overflow-hidden ">
            <div class="flex flex-col w-full">
                <label for="toggle-menuMobile" class="absolute right-6 top-5 block"><?php svg('icon-fechar',16,16,"fill-white");?></label>
                
                <div class=" flex justify-center mb-20"> 
               logo
                </div>
                <ul class=" w-full flex flex-col justify-center text-center font-campuni text-large font-semibold mb-20 text-white">
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>

             
                <div class="flex gap-4 justify-center">
                    <?php svg('icon-twitter',24,24,"fill-white");?> 
                    <?php svg('icon-facebook',24,24,"fill-white");?> 
                    <?php svg('icon-whatsapp',24,24,"fill-white");?> 
                    <?php svg('icon-linkedin',24,24,"fill-white");?> 
                    <?php svg('icon-compartilhar',24,24,"fill-white");?> 
                </div>
            </div>

        </div>

        <!-- Menu Desktop -->
        <div class="flex w-full justify-between">
        
                <!-- Logo Versão Desktop -->
                <div class="flex">
                    <a href="<?php echo home_url(); ?>">
                    <?php svg('logo-inovahc',55,40,"fill-white");?> 
                    </a> 
                </div>
    
                <!-- Menu Versão Desktop -->
                <div class="hidden md:flex">
                
                    <ul class="flex font-mulish  items-center text-white gap-6">
                        <li>quem somos</li>
                        <li>serviços</li>
                        <li>projetos</li>
                        <li>conteúdos</li>
                        <li>eventos</li>
                        <li>contato</li>
                        <button class="btn btn-menu">inove conosco</button>
                    </ul>

                    <ul>
                        <li>PT</li>
                        <li>EN</li>
                    </ul>
                
                </div>

                <div class="md:hidden flex items-center">
                    <label for="toggle-menuMobile">
                        <?php svg('icon-menu',20,12,"fill-white");?> 
                    </label>
                </div>
     
        </div>
     
    
    </div> 
</nav> 






