</div>

    <!-- Footer Conteudo -->
    <footer  class="flex flex-col ">
  
        <section class="bg-inovahc-green-600"> 
            <div class="container mx-auto p-6 flex flex-col md:flex-row md:justify-between justify-start">
                <a href="#topo">
                 <button class="btn mb-10 md:mb-0">voltar ao topo</button>
               </a>

               <div class="flex flex-col md:flex-row md:gap-4 justify-start md:items-center">

                <div class="font-poppins text-3xl font-light text-white">Assine a news</div>

                <div class="flex form-inovahc type-white items-center">
                    <label for="email-input" class="flex-1">
                        <input id="email-input" type="email" class=" block w-full md:w-[273px] bg-transparent" placeholder="email@..." aria-label="Input (email)">
                    </label>

                    <button class="btn-icon btn-icon-big">
                        <?php svg('icon-seta-direita',16,16,"fill-white");?> 
                    </button>
                </div>

               </div>
            </div> 
        </section>

        <section class="bg-inovahc-green-800 bg-cover" style="background-image: url('./assets/img/grafismo/rodape.jpg')">

            <div class="container mx-auto p-6 gap-4 flex flex-col md:flex-row ">
                <div class="flex gap-4 md:w-5/12  flex-col md:flex-row md:max-w-[358px]">
                    <div>
                    <?php svg('logo-inovahc-footer',77,77,"fill-white");?> 
                    </div>
                    <div class="flex flex-col gap-3 text-white">
                        <div class="link link-white small">+55 (11) XXXX XXXX</div>
                        <div class="link link-white small">email@hc.fm.usp.br</div>
                        <div class="text-xs">Prédio do CEAC, 4º e 5º andares,<br/> Complexo do HCFMUSP <br/>Cerqueira César, São Paulo - SP<br/> CEP. 05401-000</div>
                    </div>
                </div>

                <div class="flex flex-col  md:w-4/12 md:max-w-[265px]">
                    <div class="mb-5">
                        <div class="mb-2 text-xs text-inovahc-green-300">Acompanhe as redes sociais</div>
                       
                        <div class="flex gap-2">
                            <button class="btn-icon btn-icon-white">  
                                <?php svg('icon-x',19,17,"");?> 
                            </button>
                            <button class="btn-icon btn-icon-white">  
                                <?php svg('icon-linkedin',19,19,"");?> 
                            </button>
                            <button class="btn-icon btn-icon-white">  
                                <?php svg('icon-flicker',20,16,"");?> 
                            </button>
                            <button class="btn-icon btn-icon-white">  
                                <?php svg('icon-facebook',11,20,"");?> 
                            </button>
                            <button class="btn-icon btn-icon-white">  
                                <?php svg('icon-instagram',19,19,"");?> 
                            </button>   
                        </div>
                 
                    </div>

                    <div>
                        <div class="mb-1.5 text-xs text-inovahc-green-300">Mapa</div>
                       
                        <ul class="flex text-xs gap-y-1 flex-wrap gap-x-2 text-white font-semibold ">
                            <a href="home"> <li>início</li></a>
                            <a href="quem-somos"> <li>quem somos</li></a>
                            <a href="servicos"><li>serviços</li></a>
                            <a href="projetos"><li>projetos</li></a>
                            <a href="conteudos"><li>conteúdos</li></a>
                            <a href="eventos"><li>eventos</li></a>
                            <a href="contato"><li>contato</li></a>
                        </ul>
                    </div>
                </div>
            </div> 
        </section>
    </footer>


    <!-- Default Wordpress -->
    <?php wp_footer(); ?>
    <script type="text/javascript">
        const home_url = '<?php echo home_url(); ?>';
        const template_url = '<?php tu(); ?>/';
    </script>

    <!-- Carrega o Script -->
    <script src="<?php tu(); ?>/build/js/scripts.js"></script>


</body>    
</html> 
 