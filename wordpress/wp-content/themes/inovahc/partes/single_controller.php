<!--  Controller Desktop - Anterior - Proximo -->
<div class="flex justify-between mb-10">
    <?php $prev = get_permalink(get_previous_post()); ?>
    <a href="<?php echo $prev; ?>" class="flex gap-2">
        <?php if($prev && $prev != get_permalink()): ?>
        <button class="btn-icon btn-icon-small">
            <?php svg('icon-seta-esquerda',12,12,"fill-white");?> 
        </button>
        <button class="link"><?php pll_e('anterior'); ?></button>
        <?php endif; ?>
    </a>

    <?php $next = get_permalink(get_next_post()); ?>
    <a href="<?php echo $next; ?>" class="flex gap-2">
        <?php if($next && $next != get_permalink()): ?>
        <button class="link"><?php pll_e('próximo'); ?></button>
        <button class="btn-icon btn-icon-small">
            <?php svg('icon-seta-direita',12,12,"fill-white");?>
        </button>
        <?php endif; ?>
    </a>
</div>