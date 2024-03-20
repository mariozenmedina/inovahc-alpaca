<!-- Section Contato  -->
<section>
    <div class="container mx-auto px-6 flex gap-5 flex-col md:flex-row ">
        <div class="flex flex-col justify-between md:w-1/2">
            <div class="flex flex-col gap-6">
                <div class="flex gap-2">
                    <figure>
                        <img src="<?php tu(); ?>/img/contato-tel.svg" alt="tel">
                    </figure>
                    <button class="link">+55(22)2222 2222</button>
                    <button class="link">+55(22)2222 2222</button>
                </div>
                <div class="flex gap-2">
                    <figure>
                        <img src="<?php tu(); ?>/img/contato-email.svg" alt="email">
                    </figure>
                    <button class="link">email@hc.fm.usp.br</button>
                </div>
                <div class="flex gap-2 mb-8 md:mb-0">
                    <figure>
                        <img src="<?php tu(); ?>/img/contato-local.svg" alt="local">
                    </figure>
                    <span>Prédio do CEAC, 4º e 5º andares,<br />Complexo do HCFMUSP<br /> Cerqueira César, São Paulo - SP<br /> CEP. 05401-000</span>
                </div>
            </div>

            <!-- Redes Sociais Desktop -->
            <div class="hidden gap-2 md:flex">
                <figure>
                    <img src="<?php tu(); ?>/img/celular.svg" alt="social">
                </figure>
                <div class="flex items-center">
                    <div class="">
                        <div class="mb-2 text-sm text-inovahc-green-500">Acompanhe as redes sociais</div>

                        <div class="flex gap-4">
                            <button class="btn-icon btn-icon-big">
                                <?php svg('icon-x', 19, 17, ""); ?>
                            </button>
                            <button class="btn-icon btn-icon-big">
                                <?php svg('icon-linkedin', 19, 19, ""); ?>
                            </button>
                            <button class="btn-icon btn-icon-big">
                                <?php svg('icon-flicker', 20, 16, ""); ?>
                            </button>
                            <button class="btn-icon btn-icon-big">
                                <?php svg('icon-facebook', 11, 20, ""); ?>
                            </button>
                            <button class="btn-icon btn-icon-big">
                                <?php svg('icon-instagram', 19, 19, ""); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Iframe Google Maps -->
        <div class="md:w-1/2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.315433135274!2d-46.670262924514034!3d-23.557112061436403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce565cf65bef8f%3A0x894626630404707a!2sInCor%20-%20Instituto%20do%20Cora%C3%A7%C3%A3o%20do%20Hospital%20das%20Cl%C3%ADnicas%20da%20FMUSP!5e0!3m2!1spt-BR!2spt!4v1710202623084!5m2!1spt-BR!2spt" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Redes Sociais Mobile -->
        <div class="flex flex-col justify-center text-center items-center gap-2 py-16 md:hidden">
            <figure>
                <img src="<?php tu(); ?>/img/celular.svg" alt="social">
            </figure>
            <div class="flex items-center">
                <div class="">
                    <div class="mb-2 text-sm text-inovahc-green-500">Acompanhe as redes sociais</div>

                    <div class="flex gap-4">
                        <button class="btn-icon"><?php svg('icon-x', 19, 17, ""); ?></button>
                        <button class="btn-icon"><?php svg('icon-linkedin', 19, 19, ""); ?></button>
                        <button class="btn-icon"><?php svg('icon-flicker', 20, 16, ""); ?></button>
                        <button class="btn-icon "><?php svg('icon-facebook', 11, 20, ""); ?></button>
                        <button class="btn-icon"><?php svg('icon-instagram', 19, 19, ""); ?></button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>