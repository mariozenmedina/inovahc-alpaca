</div>

<!-- Footer Conteudo -->
<footer class="flex flex-col ">

    <section class="bg-inovahc-green-600">
        <div class="container mx-auto p-6 flex flex-col md:flex-row md:justify-between justify-start">
            <a onclick="javascript:window.scrollTo(0,0)">
                <button class="btn mb-10 md:mb-0">
                    <?php pll_e('voltar ao topo'); ?>
                </button>
            </a>

            <div class="flex flex-col md:flex-row md:gap-4 justify-start md:items-center">

                <div class="font-poppins text-3xl font-light text-white">
                    <?php pll_e('Assine a news'); ?>
                </div>

                <div class="flex form-inovahc type-white items-center">
                    <label for="email-input" class="flex-1">
                        <input id="email-input" type="email" class=" block w-full md:w-[273px] bg-transparent"
                            placeholder="email@..." aria-label="Input (email)">
                    </label>

                    <button class="btn-icon btn-icon-big" onclick="ativarmodalnew()">
                        <?php svg('icon-seta-direita', 16, 16, "fill-white"); ?>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-inovahc-green-800 bg-cover" style="background-image: url('<?php tu(); ?>/img/rodape.jpg')">

        <div class="container mx-auto p-6 gap-4 flex flex-col md:flex-row ">
            <div class="flex gap-4 md:w-5/12  flex-col md:flex-row md:max-w-[358px]">
                <div>
                    <?php svg('logo-inovahc-footer', 77, 77, "fill-white"); ?>
                </div>
                <div class="flex flex-col gap-3 text-white">
                    <div class="link link-white small">+55 (11) XXXX XXXX</div>
                    <div class="link link-white small">email@hc.fm.usp.br</div>
                    <div class="text-xs">Prédio do CEAC, 4º e 5º andares,<br /> Complexo do HCFMUSP <br />Cerqueira
                        César, São Paulo - SP<br /> CEP. 05401-000</div>
                </div>
            </div>

            <div class="flex flex-col  md:w-4/12 md:max-w-[265px]">
                <div class="mb-5">
                    <div class="mb-2 text-xs text-inovahc-green-300">
                        <?php pll_e('Acompanhe as redes sociais'); ?>
                    </div>

                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'ms',
                            'menu_class' => 'flex gap-2 ms',
                            'container' => 'ul',
                            'link_before' => '<button class="btn-icon btn-icon-big btn-icon-white">',
                            'link_after' => '</button>',
                        )
                    ); ?>

                </div>

                <div>
                    <div class="mb-1.5 text-xs text-inovahc-green-300">
                        <?php pll_e('Mapa'); ?>
                    </div>

                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'principal',
                            'menu_class' => 'flex text-xs gap-y-1 flex-wrap gap-x-2 text-white font-semibold',
                            'container' => 'ul',
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </section>

    <?php include_once(get_stylesheet_directory() . '/partes/_newsletter.php'); ?>
</footer>


<!-- Default Wordpress -->
<script type="text/javascript">
    const home_url = '<?php echo home_url(); ?>';
    const template_url = '<?php tu(); ?>/';
</script>

<!-- Carrega o Script -->
<script src="<?php tu(); ?>/js/scripts.js"></script>


</body>

</html>