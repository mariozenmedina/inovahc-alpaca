</div>

    <!-- Footer Conteudo -->
    <footer  class="flex flex-col ">
  
        <section class="bg-inovahc-green-600"> 
            <div class="container mx-auto p-6 flex flex-col md:flex-row md:justify-between justify-start">
                <a href="#topo">
                 <button class="btn mb-10 md:mb-0"><?php pll_e('voltar ao topo'); ?></button>
               </a>

               <div class="flex flex-col md:flex-row md:gap-4 justify-start md:items-center">

                <div class="font-poppins text-3xl font-light text-white"><?php pll_e('Assine a news'); ?></div>

                <div class="flex form-inovahc type-white items-center">
                    <label for="email-input" class="flex-1">
                        <input id="email-input" type="email" class=" block w-full md:w-[273px] bg-transparent" placeholder="email@..." aria-label="Input (email)">
                    </label>

                    <button 
                    class="btn-icon btn-icon-big" 
                    onclick="ativarmodalnew()"
                    >
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
                        <div class="mb-2 text-xs text-inovahc-green-300"><?php pll_e('Acompanhe as redes sociais'); ?></div>
                       
                        <?php wp_nav_menu(array(
                            'theme_location' => 'ms',
                            'menu_class' => 'flex gap-2 ms',
                            'container' => 'ul',
                            'link_before' => '<button class="btn-icon btn-icon-big btn-icon-white">',
                            'link_after' => '</button>',
                        )); ?>
                 
                    </div>

                    <div>
                        <div class="mb-1.5 text-xs text-inovahc-green-300"><?php pll_e('Mapa'); ?></div>

                        <?php wp_nav_menu(array(
                            'theme_location' => 'principal',
                            'menu_class' => 'flex text-xs gap-y-1 flex-wrap gap-x-2 text-white font-semibold',
                            'container' => 'ul',
                        )); ?>
                    </div>
                </div>
            </div> 
        </section>

        <!-- Modal -->
        <div class="overlay" id="overlay" onclick="fecharmodalnew()">
        </div>
        <div class="modal" id="modalnews">
            <div class="close btn-icon" onclick="fecharmodalnew()">
                <?php svg('icon-fechar-menu',12,12,"fill-white");?>
            </div>
            <div class="flex gap-4 md:flex-row flex-col">
                <figure>
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="56.4947" height="54.7013" rx="8.96743" transform="matrix(0.967282 -0.253703 0.253702 0.967282 -1 18.6748)" fill="#CCBDF1"/>
                        <g clip-path="url(#clip0_1514_14961)"><path d="M45.3155 12.9748C48.0306 11.2338 51.6527 12.2051 53.1347 15.0705C54.1175 16.9702 56.1159 18.1247 58.2531 18.026C61.4747 17.8758 64.1269 20.528 63.9767 23.7495C63.878 25.8867 65.031 27.8852 66.9321 28.8679C69.796 30.3485 70.7674 33.9721 69.0279 36.6872C67.8734 38.4882 67.8734 40.7957 69.0279 42.5967C70.7688 45.3119 69.7975 48.934 66.9321 50.416C65.0324 51.3988 63.878 53.3972 63.9767 55.5344C64.1269 58.756 61.4747 61.4082 58.2531 61.258C56.1159 61.1593 54.1175 62.3123 53.1347 64.2134C51.6541 67.0774 48.0306 68.0487 45.3155 66.3092C43.5144 65.1547 41.207 65.1547 39.406 66.3092C36.6908 68.0501 33.0687 67.0788 31.5867 64.2134C30.6039 62.3137 28.6055 61.1593 26.4683 61.258C23.2467 61.4082 20.5945 58.756 20.7448 55.5344C20.8435 53.3972 19.6905 51.3988 17.7893 50.416C14.9254 48.9354 13.954 45.3119 15.6936 42.5967C16.848 40.7957 16.848 38.4882 15.6936 36.6872C13.9526 33.9721 14.9239 30.35 17.7893 28.8679C19.689 27.8852 20.8435 25.8867 20.7448 23.7495C20.5945 20.528 23.2467 17.8758 26.4683 18.026C28.6055 18.1247 30.6039 16.9717 31.5867 15.0705C33.0673 12.2066 36.6908 11.2352 39.406 12.9748C41.207 14.1292 43.5144 14.1292 45.3155 12.9748Z" fill="#CCBCF1"/><path d="M42.3598 61.229C54.2817 61.229 63.9464 51.5643 63.9464 39.6423C63.9464 27.7203 54.2817 18.0557 42.3598 18.0557C30.4378 18.0557 20.7731 27.7203 20.7731 39.6423C20.7731 51.5643 30.4378 61.229 42.3598 61.229Z" fill="#BEEFD9"/><path d="M39.1341 51.2223C38.0712 51.2223 37.0527 50.8003 36.3017 50.0493L28.5983 42.3459C27.7271 41.4747 27.7271 40.0614 28.5983 39.1902L31.106 36.6824C31.9772 35.8113 33.3906 35.8113 34.2618 36.6824L39.1327 41.5548L51.0175 29.67C51.8887 28.7988 53.3021 28.7988 54.1732 29.67L56.681 32.1777C57.5521 33.0489 57.5521 34.4623 56.681 35.3335L41.9637 50.0507C41.2127 50.8018 40.1941 51.2238 39.1313 51.2238L39.1341 51.2223Z" fill="#41CC96"/><path d="M32.0485 20.6735C35.1127 19.0041 38.6247 18.0557 42.3598 18.0557C54.2818 18.0557 63.9464 27.7203 63.9464 39.6423C63.9464 51.5644 54.2818 61.229 42.3598 61.229C30.4378 61.229 20.7731 51.5644 20.7731 39.6423C20.7731 34.4409 22.6128 29.6687 25.677 25.9422" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M45.3155 12.9748C48.0306 11.2338 51.6527 12.2051 53.1347 15.0705C54.1175 16.9702 56.1159 18.1247 58.2531 18.026C61.4747 17.8758 64.1269 20.528 63.9767 23.7495C63.878 25.8867 65.031 27.8852 66.9321 28.8679C69.796 30.3485 70.7674 33.9721 69.0279 36.6872C67.8734 38.4882 67.8734 40.7957 69.0279 42.5967C70.7688 45.3119 69.7975 48.934 66.9321 50.416C65.0324 51.3988 63.878 53.3972 63.9767 55.5344C64.1269 58.756 61.4747 61.4082 58.2531 61.258C56.1159 61.1593 54.1175 62.3123 53.1347 64.2134C51.6541 67.0774 48.0306 68.0487 45.3155 66.3092C43.5144 65.1547 41.207 65.1547 39.406 66.3092C36.6908 68.0501 33.0687 67.0788 31.5867 64.2134C30.6039 62.3137 28.6055 61.1593 26.4683 61.258C23.2467 61.4082 20.5945 58.756 20.7448 55.5344C20.8435 53.3972 19.6905 51.3988 17.7893 50.416C14.9254 48.9354 13.954 45.3119 15.6936 42.5967C16.848 40.7957 16.848 38.4882 15.6936 36.6872C13.9526 33.9721 14.9239 30.35 17.7893 28.8679C19.689 27.8852 20.8435 25.8867 20.7448 23.7495C20.5945 20.528 23.2467 17.8758 26.4683 18.026C28.6055 18.1247 30.6039 16.9717 31.5867 15.0705C33.0673 12.2066 36.6908 11.2352 39.406 12.9748C41.207 14.1292 43.5144 14.1292 45.3155 12.9748Z" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M43.7705 48.2454L41.9666 50.0493C41.2155 50.8003 40.197 51.2223 39.1341 51.2223C38.0712 51.2223 37.0527 50.8003 36.3017 50.0493L28.5983 42.3459C27.7271 41.4747 27.7271 40.0614 28.5983 39.1902L31.106 36.6824C31.9772 35.8113 33.3906 35.8113 34.2618 36.6824L39.1327 41.5548L51.0175 29.67C51.8887 28.7988 53.3021 28.7988 54.1732 29.67L56.681 32.1777C57.5521 33.0489 57.5521 34.4623 56.681 35.3335L46.5543 45.4602" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.10599 6.10596L18.5889 15.5889" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.28485 19.8667L14.3117 21.0083" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M22.8663 6.28516L24.0079 11.312" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M76.176 73.1764L66.6945 63.6948" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M75.9987 59.4174L70.9719 58.2744" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M62.4173 72.9986L61.2744 67.9717" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M76.1763 6.10596L66.6947 15.5889" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M62.4176 6.28369L61.2746 11.3106" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M75.9989 19.8652L70.972 21.0068" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.10631 73.1759L18.5893 63.6943" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M22.8665 72.9981L24.0081 67.9712" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/><path d="M9.28506 59.4164L14.3119 58.2734" stroke="#604B8C" stroke-width="2.21303" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_1514_14961"><rect width="69.2832" height="69.2834" fill="white" transform="translate(8 5)"/></clipPath></defs>
                    </svg>
                </figure>
                <div>
                    <div class=" text-inovahc-green-500 text-4xl font-poppins font-bold mb-4">Obrigado!</div>
                    
                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorem.</p>
                </div>
            </div>  
        </div>
    </footer>


    <!-- Default Wordpress -->
    <script type="text/javascript">
        const home_url = '<?php echo home_url(); ?>';
        const template_url = '<?php tu(); ?>/';
    </script>

    <!-- Carrega o Script -->
    <script src="<?php tu(); ?>/build/js/scripts.js"></script>


</body>    
</html>