<!-- Section Contato  -->
<section>
    <div class="container mx-auto px-6 flex gap-5 flex-col md:flex-row ">
        <div class="flex flex-col justify-between md:w-1/2">
            <div class="flex flex-col gap-6">
                <?php $infos = get_sub_field('info'); foreach($infos as $inf): ?>
                <div class="flex gap-2">
                    <?php if($inf['icone']): ?>
                    <figure>
                        <img src="<?php echo @$inf['icone']['url']; ?>" alt="<?php echo @$inf['icone']['alt']; ?>">
                    </figure>
                    <?php endif; ?>
                    <?php if($inf['item']): ?>
                    <?php
                        foreach($inf['item'] as $it):
                        switch($it['acf_fc_layout']){
                            case 'texto':
                                $texto = $it['texto'];
                                echo "<span>$texto</span>";
                                break;
                            case  'link':
                                $texto = $it['link']['title'];
                                $href = $it['link']['url'];
                                $target = $it['link']['target'];
                                echo "<a href='$href' target='$target' class='link'>$texto</a>";
                                break;
                        }
                        endforeach;
                    ?>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>

            <?php $midsoc = get_sub_field('midias_sociais'); if($midsoc): ?>
            <!-- Redes Sociais Desktop -->
            <div class="hidden gap-2 md:flex">
                <figure>
                    <img src="<?php tu(); ?>/img/celular.svg" alt="social">
                </figure>
                <div class="flex items-center">
                    <div class="">
                        <div class="mb-2 text-sm text-inovahc-green-500"><?php pll_e('Acompanhe as redes sociais'); ?></div>

                        <div class="flex gap-4">
                            <?php foreach($midsoc as $mid): $link = $mid['link']; ?>
                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn-icon btn-icon-big">
                                <?php svg('icon-'.$mid['acf_fc_layout'], 19, 19, ""); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

        </div>

        <!-- Iframe Google Maps -->
        <div class="md:w-1/2">
            <?php echo get_sub_field('maps'); ?>
        </div>

        <?php if($midsoc): ?>
        <!-- Redes Sociais Mobile -->
        <div class="flex flex-col justify-center text-center items-center gap-2 py-16 md:hidden">
            <figure>
                <img src="<?php tu(); ?>/img/celular.svg" alt="social">
            </figure>
            <div class="flex items-center">
                <div class="">
                    <div class="mb-2 text-sm text-inovahc-green-500"><?php pll_e('Acompanhe as redes sociais'); ?></div>

                    <div class="flex gap-4">
                        <?php foreach($midsoc as $mid): $link = $mid['link']; ?>
                        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="btn-icon">
                            <?php svg('icon-'.$mid['acf_fc_layout'], 19, 19, ""); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

    </div>
</section>