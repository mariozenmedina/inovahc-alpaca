<?php get_header(); ?>
    <main>
        <!--  Breadcrumbs - Voltar -->
        <section>
            <div class="container mx-auto p-6 flex gap-5 flex-col ">
                <?php include_once(get_stylesheet_directory() . '/partes/_breadcrumb.php'); ?>
            </div>
        </section>
        <!-- Single -->
        <?php if( have_posts() ): the_post(); ?>
        <section>
            <div class="container relative mx-auto p-6 flex flex-col lg:flex-row lg:gap-20 gap-10">
                <!-- Post - Article -->
                <article class="flex-1">

                    <?php $img = get_field('imagem'); include(get_stylesheet_directory() . '/partes/single_image.php'); ?>

                    <?php include(get_stylesheet_directory() . '/partes/single_header.php'); ?>

                    <?php if( have_rows('conteudo_single') ): while( have_rows('conteudo_single') ): the_row();
                        switch(get_row_layout()){
                            case 'lide':
                                echo '<p class="lead">'.get_sub_field('texto').'</p>';
                                break;
                            case 'citacao':
                                echo '<blockquote cite="'.get_sub_field('fonte').'">'.get_sub_field('texto').'</blockquote>';
                                break;
                            case 'editor':
                                the_sub_field('conteudo');
                                break;
                            case 'imagem':
                                $img = get_sub_field('imagem');
                                include(get_stylesheet_directory() . '/partes/single_image.php');
                                break;
                            case 'arquivos':
                                include(get_stylesheet_directory() . '/partes/single_files.php');
                                break;
                            case 'botoes':
                                include(get_stylesheet_directory() . '/partes/single_buttons.php');
                                break;
                            case 'duas_colunas':
                                include(get_stylesheet_directory() . '/partes/single_cols.php');
                                break;
                        }
                    endwhile; endif; ?>

                </article>

                <?php include(get_stylesheet_directory() . '/partes/single_aside.php'); ?>
            </div>
        </section>
        <?php endif; ?>
        <?php include(get_stylesheet_directory() . '/partes/_flexible.php'); ?>
        <div class="container mx-auto p-6">
            <?php include(get_stylesheet_directory() . '/partes/single_controller.php'); ?>

            <!-- Share -->
            <?php include(get_stylesheet_directory() . '/partes/_share.php'); ?>
        </div>
    </main>
<?php get_footer(); ?>