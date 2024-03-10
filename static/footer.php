</div>

    <!-- Footer Conteudo -->
    <footer  class="flex flex-col">
        <section class="bg-blue-700">
            <div class="container mx-auto px-6 pt-6 md:pt-20">
                rodape
            </div>
        </section>

        <section class="bg-blue-200"> 
            <div class="container mx-auto p-6 font-lato text-xs  text-branco md:flex md:justify-between">
           rodape2
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
 