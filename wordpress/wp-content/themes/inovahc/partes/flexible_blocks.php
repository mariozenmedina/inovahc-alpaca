<!-- Section Projetos inovaHC  -->
<section>
    <div class="container mx-auto px-6 py-16 flex gap-5 flex-col ">
        <?php $linhas = get_sub_field('linha'); foreach($linhas as $linha): ?>
        <div class="flex flex-col md:flex-row gap-5">
            <?php foreach($linha['bloco'] as $bloco): ?>
            <div class="relative flex gap-5 rounded-3xl p-6 bg-inovahc-purple-100">
                <div class=" md:text-center flex md:justify-center md:items-center flex-col"> 
                    <div class="mb-2 md:mb-4 text-inovahc-purple-800 text-3xl font-poppins "><?php echo $bloco['titulo']; ?></div>
                    <div class="mb-4 md:w-8/12 "><?php echo $bloco['texto']; ?></div>
                    <div><?php $botao = $bloco['botao']; if($botao['url']){ include(get_stylesheet_directory() . '/partes/_botao.php'); } ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endforeach; ?>
    </div>
</section>