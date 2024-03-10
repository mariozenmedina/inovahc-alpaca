
<nav class=" bg-inovahc-green-800   shadow-lg" >  
    <div class="container mx-auto flex justify-between items-center h-14 px-4 ">
        <!-- Menu Mobile -->
        <input type="checkbox" id="toggle-menuMobile" style="display:none;">
        <div class="md:hidden w-6 h-6 flex justify-center items-center cursor-pointer">
            <label for="toggle-menuMobile">
                <?php svg('icon-menu',20,12,"fill-branco");?> 
            </label>
        </div>
        
        <div class="menuMobile overflow-hidden ">
            <div class="flex flex-col w-full">
                <label for="toggle-menuMobile" class="absolute right-6 top-5 block"><?php svg('icon-fechar',16,16,"fill-branco");?></label>
                
                <div class=" flex justify-center mb-20"> 
                   LOGO
                </div>
                <ul class=" w-full flex flex-col justify-center text-center font-campuni text-large font-semibold mb-20 ">
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>

                <div class="text-xs font-lato text-branco text-center mb-3">Compartilhe</div>
                <div class="flex gap-4 justify-center">
                    <?php svg('icon-twitter',24,24,"fill-branco");?> 
                    <?php svg('icon-facebook',24,24,"fill-branco");?> 
                    <?php svg('icon-whatsapp',24,24,"fill-branco");?> 
                    <?php svg('icon-linkedin',24,24,"fill-branco");?> 
                    <?php svg('icon-compartilhar',24,24,"fill-branco");?> 
                </div>
            </div>

        </div>

        <!-- Menu Desktop -->
        <div class="flex w-full justify-center">
            <div class="md:justify-start md:w-1/12 lg:w-4/12 items-center">
                <!-- Logo Versão Mobile -->
                <div class="md:hidden">
                    Logo
                </div>
                <!-- Logo Versão Desktop -->
                <div class="hidden md:flex">
                    <a href="<?php echo home_url(); ?>">
                       Logo
                    </a> 
                </div>
            </div>
            <div class="hidden md:flex md:w-3/12 lg:w-4/12 md:justify-center items-center">
                <?php svg('logo-dados-navegaveis',160,32,"fill-branco");?> 
            </div>
            <div class="hidden md:flex md:w-8/12 lg:w-4/12 md:justify-end items-center">
                <ul class="flex font-campuni text-branco font-medium items-center">
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                </ul>
            </div>
        </div>
     
        <!-- Busca Resposiva -->
        <div class="md:hidden">
            <?php svg('icon-busca',24,24,"fill-branco");?> 
        </div>
    </div> 
   
</nav> 






