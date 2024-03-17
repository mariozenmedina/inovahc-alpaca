<?php $thisUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<div class="flex flex-col mb-10 justify-center items-center">
    <div class="mb-2 text-sm text-inovahc-green-500"><?php pll_e('Compartilhe este conteúdo:'); ?></div>
    <div class="flex gap-2">
        <a target="_blank" href="https://twitter.com/share?url=<?php echo $thisUrl; ?>" class="btn-icon btn-icon-big ">  
            <?php svg('icon-x',19,17,"");?> 
        </a>
        <a target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $thisUrl; ?>" class="btn-icon btn-icon-big">  
            <?php svg('icon-linkedin',19,19,"");?> 
        </a>
        <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo $thisUrl; ?>" class="btn-icon btn-icon-big">  
            <?php svg('icon-facebook',11,20,"");?> 
        </a>
        <a target="_blank" href="https://api.whatsapp.com/send?text=<?php echo $thisUrl; ?>" class="btn-icon btn-icon-big">  
            <?php svg('icon-whatsapp',19,19,"");?> 
        </a>
    </div>
</div>