<!-- Lista de Donwloads -->
<div class="flex flex-col gap-4 mb-20">
    <?php $files = get_sub_field('arquivos'); foreach($files as $file): ?>
    <!-- Card 1 -->
    <div class="card w-full p-4">
        <div class="text-inovahc-purple-800 text-lg font-semibold"><?php echo $file['arquivo']['title']; ?></div>
        <div class="mb-4 text-xs">.<?php echo $file['arquivo']['subtype']; ?> | <?php echo format_file_size($file['arquivo']['filesize']); ?></div>
        <a class="link" href="<?php echo $file['arquivo']['url']; ?>" download>download</a>
    </div>
    <?php endforeach; ?>
</div>