<?php
    if($post_type){
        $img = get_field('imagem');
        $pTitulo = get_the_title();
        $pData = get_the_date('d/m/Y');
        $pExcerpt = get_the_excerpt();
        $pBlocos = array();
        $pTags = get_the_tags();
    }
    else{
        $img = $card['imagem'];
        $pTitulo = $card['titulo'];
        $pData = $card['gravata'];
        $pExcerpt = $card['texto'];
        $pBlocos = $card['blocos'];
        $pTags = array();
    }
?>
<div class="card">

    <?php if($img): ?>
    <figure>
        <a href="<?php the_permalink(); ?>" >
            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
        </a>
    </figure>
    <?php else: ?>
    <figure>
        <a href="<?php the_permalink(); ?>">
            <img src="<?php tu(); ?>/img/no-img.jpg" alt="Sem imagem">
        </a>
    </figure>
    <?php endif; ?>

    <div class="card-content">

        <div class="card-header">
            <a href="<?php the_permalink(); ?>" >
            <?php if($pTitulo): ?><div class="titulo"><?php echo $pTitulo; ?></div><?php endif; ?>
            </a>
            <?php if($pData && $post_type !== "eventos"): ?><div class="data"><?php echo $pData; ?></div><?php endif; ?>
            <?php if($pExcerpt): ?><div class="texto"><?php echo $pExcerpt; ?></div><?php endif; ?>
        </div>

        <?php if(is_array($pBlocos)): foreach($pBlocos as $info): ?>
        <div class="card-info">
            <div class="representante">

                <?php if($info['chapeu']): ?><div class="titulo"><?php echo $info['chapeu']; ?></div><?php endif; ?>
                <?php if($info['texto']): ?><div class="nome"><?php echo $info['texto']; ?></div><?php endif; ?>
                <?php if($info['botao']): ?>
                    <a class="link small" href="<?php echo $info['botao']['url']; ?>" target="<?php echo $info['botao']['target']; ?>"><?php echo $info['botao']['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; endif; ?>

        <?php if($post_type): ?>
        <div>
            <a href="<?php the_permalink(); ?>" class="link"><?php pll_e('leia mais'); ?></a>
        </div>
        <?php endif; ?>
       
        <?php if($post_type): ?>
        <div class="card-tags">
            <?php if(is_array($pTags)): foreach($pTags as $tag): ?>
                <a href="<?php url(); ?>?tag=<?php echo $tag->slug; ?>&post_type=<?php echo $post_type; ?>" class="tag tag-big"><?php echo $tag->name; ?></a>
            <?php endforeach; endif; ?>
        </div>
        <?php endif; ?>

    </div>
</div>