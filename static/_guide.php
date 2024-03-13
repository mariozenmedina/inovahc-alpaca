<!-- Pega o Header -->
<?php $current_page = 'guide'; get_header(); ?>

<main>
    <!--  Breadcrumbs - Voltar -->
    <section>
        <div class="container mx-auto p-6 flex gap-5 flex-col ">
            <!--  Breadcrumbs - Voltar -->
            <div>
                <a href="home" class="flex gap-2">
                    <button class="btn-icon btn-icon-small">
                    <?php svg('icon-seta-esquerda',12,12,"fill-white");?> 
                    </button>
                    <button class="link">
                        voltar
                    </button>
                </a>
            </div>
        </div>
    </section>
    <!-- Section Search  -->
    <section>
        <div class="container mx-auto p-6 flex flex-col md:flex-row">
           
        
        </div>
    </section>



  
</main>
<?php get_footer(); ?>



