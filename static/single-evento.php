<!-- Pega o Header -->
<?php $current_page = 'evento'; get_header(); ?>

<main>
    <!--  Breadcrumbs - Voltar -->
    <section>
        <div class="container mx-auto p-6 flex gap-5 flex-col ">
            <!--  Breadcrumbs - Voltar -->
            <div>
                <a href="home" class="flex gap-2">
                    <button class="btn-icon btn-icon-small">
                    <?php svg('icon-seta-esquerda',12,12,"fill-white");?> 
                    </button>
                    <button class="link">
                        voltar
                    </button>
                </a>
            </div>
        </div>
    </section>
    <!-- Section Search  -->
    <section>
        <div class="container mx-auto p-6 flex flex-col md:flex-row gap-20">
            <!-- Post - Article -->
            <article class="flex-1">
                <div class="post-header">
                    <div class="post-header-categoria">Projeto</div>
                    <div class="post-header-titulo">Projeto</div>
                    <div class="post-header-info">08/09/2023</div>
                <div>
         
                <figure>
                    <img
                    src="./assets/img/foto2.jpg"
                    alt="Foto Modelo 1"
                    />
                    <figcaption>
                     Legenda da imagem
                    </figcaption>
                </figure>

                <blockquote>
                    <p>
                    “Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod reprehendit nostrud enum.”
                    </p>
	            </blockquote>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                <p>Para centros médicos e profissionais de saúde que tratam pacientes diabéticos, a BIOO associa conhecimento científico e tecnológico para mudar a realidade de pacientes com complicações do “pé diabético” e que poderiam ser evitadas em até 85% se atendidas precocemente. </p>
                <p>Diferente dos protocolos usados no sistema de saúde, a BIOO utiliza técnicas de linguagem natural e inteligência artificial para classificar o risco do desenvolvimento dessas complicações, possibilitar o seu diagnóstico precoce e priorizar o atendimento do paciente. Com isso, fornece informações de melhor qualidade para médicos, aumenta a qualidade de vida dos pacientes e reduz os custos para o sistema de saúde.</p>

                <h3>Subtítulo da notícia</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>

                <h3>Arquivos para download</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <p>
            </article>
            <!-- Lateral - Sidebar -->
            <aside class="md:w-[400px] bg-red-700">
                LATERAL
            </aside>
        </div>
    </section>



  
</main>
<?php get_footer(); ?>



