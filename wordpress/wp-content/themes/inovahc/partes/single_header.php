<!-- Header Default -->
<div class="post-header">
    <div class="post-header-categoria">
        <?php $post_type = get_post_type(get_the_ID()); switch ($post_type) {
            case 'eventos':
                echo pll_e('Evento');
                break;
            case 'projetos':
                echo pll_e('Projeto');
                break;
            default:
                echo pll_e('Conteúdo');
                break;
        }
        ; ?>
    </div>
    <h1 class="post-header-titulo">
        <?php the_title(); ?>
    </h1>
    <div class="post-header-info">
        <?php echo $post_type == "eventos" ? '' : get_the_date('d/m/Y'); ?>
        <?php $autoria = get_field('autoria');
        if ($autoria) {
            echo ' | ' . $autoria;
        } ?>
    </div>
</div>