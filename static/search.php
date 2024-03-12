<!-- Pega o Header -->
<?php $current_page = 'search'; get_header(); ?>

<main >
    <!-- Section Search  -->
    <section>
        <div class="container mx-auto p-6 flex gap-5 flex-col md:flex-row">
            <div>
                <a href="search">
                    <button class="btn-icon btn-icon-small">
                    <?php svg('icon-seta-esquerda',12,12,"fill-white");?> 
                    </button>
                </a>
            </div>
        </div>
    </section>
</main>

<!-- Pega o Footer -->
<?php get_footer(); ?>


