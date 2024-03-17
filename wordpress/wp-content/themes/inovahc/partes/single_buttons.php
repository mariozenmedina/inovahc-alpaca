<div class="flex gap-2">
    <?php $botoes = get_sub_field('botoes'); foreach($botoes as $b): ?>
    <a class="btn <?php echo $b['tipo']; ?>" href="<?php echo $b['botao']['url']; ?>" target="<?php echo $b['botao']['target']; ?>"><?php echo $b['botao']['title']; ?></a>
    <?php endforeach; ?>
</div>