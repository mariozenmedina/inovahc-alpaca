<?php if(is_array($botao) && isset($botao['url'])): ?>
<a href="<?php echo $botao['url']; ?>" target="<?php echo $botao['target']; ?>">
    <button class="btn"><?php echo $botao['title']; ?></button>
</a>
<?php endif; ?>