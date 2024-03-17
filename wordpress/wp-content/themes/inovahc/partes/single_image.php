<?php if($img): ?>
<figure>
    <img src="<?php echo @$img['url']; ?>" alt="<?php echo @$img['alt']; ?>">
    <figcaption class="caption"><?php echo @$img['caption']; ?></figcaption>
</figure>
<?php endif; ?>