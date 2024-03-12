<!-- Pega o Header -->
<?php $current_page = 'home'; get_header(); ?>

<main >
  <!-- Section Hero -->
  <section id="hero-slide" class="splide" aria-label="Hero Home">
    <div class="splide__track">
      <ul class="splide__list">

        <li class="splide__slide">
          <figure >
            <img src="./assets/img/hero/img1.png" >
          </figure>
        
          <div class="hero-slide-area">
            <div class="hero-slide-card">
              <div class="hero-slide-texto">
                <div class="highlight">Olá!</div>
                <div>
                Somos o Núcleo de Inovação Tecnológica do maior hospital da América Latina
                </div>
              </div>
            </div>
          </div>
        </li>


        <li class="splide__slide">
          <figure >
            <img src="./assets/img/hero/img2.png" >
          </figure>

          <div class="hero-slide-area">
            <div class="hero-slide-card">
              <div class="hero-slide-texto">
                Viabilizamos soluções e negócios inovadores que atendam demandas do sistema de saúde
              </div>
            </div>
          </div>
        </li>

        <li class="splide__slide">
          <figure >
            <img src="./assets/img/hero/img3.png" >
          </figure>
          
          <div class="hero-slide-area">
            <div class="hero-slide-card">
              <div class="hero-slide-texto">
                Por meio de uma cultura de inovação, co-desenvolvimento tecnológico e conexão do ecossistema.
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- Section Big Numbers -->
  <section>
    <div class="container mx-auto px-6 pt-8 pb-28 md:py-28">
      <div class="flex justify-center text-lg text-center md:text-xl font-semibold text-inovahc-gray-400 mb-4">Fundado em 1944, na cidade de São Paulo, nosso complexo tem:</div>
     
      <div class="grid md:grid-cols-3 gap-5">

        <div class=" big-number">
          <figure >
            <img src="./assets/img/big-number/big1.svg" alt="Big Number1">
          </figure>
          <div class="big-number-text">
            <div class="number">9</div>
            <div class="description">institutos especializados</div>
          </div>
        </div>

        <div class=" big-number">
          <figure >
            <img src="./assets/img/big-number/big2.svg" alt="Big Number 2">
          </figure>
          <div class="big-number-text">
            <div class="number">66</div>
            <div class="description">laboratórios de pesquisa</div>
          </div>
        </div>

        <div class=" big-number">
          <figure >
            <img src="./assets/img/big-number/big3.svg" alt="Big Number 3">
          </figure>
          <div class="big-number-text">
            <div class="number">+80</div>
            <div class="description">parcerias em 3 anos</div>
          </div>
        </div>

        <div class=" big-number">
          <figure >
            <img src="./assets/img/big-number/big4.svg" alt="Big Number 4">
          </figure>
          <div class="big-number-text">
            <div class="number">+80</div>
            <div class="description">médicos residentes por ano (6.2% do Brasil)</div>
          </div>
        </div>

        <div class=" big-number">
          <figure >
            <img src="./assets/img/big-number/big5.svg" alt="Big Number 5">
          </figure>
          <div class="big-number-text">
            <div class="number">+5</div>
            <div class="description">petabytes de dados médicos até 2023.</div>
          </div>
        </div>

        <div class=" big-number">
          <figure >
            <img src="./assets/img/big-number/big6.svg" alt="Big Number 6">
          </figure>
          <div class="big-number-text">
            <div class="number">7,3%</div>
            <div class="description">de publicações brasileiras de saúde e ciências da vida</div>
          </div>
        </div>
     
      </div>
    </div>
  </section>
  <!-- Section Notícias -->
  <section class=" bg-inovahc-purple-100">
    <div class="container mx-auto px-6 pt-12 relative ">
      <!--  Section Notícias Header -->
      <div class="section-header">
        <figure >
            <img src="./assets/img/sessao/megafone.svg" alt="megafone">
        </figure>
        <div class="title">Destaques em notícias</div>
      </div>
    </div>
    <!-- #Slider Noticias -->
    <div class="flex items-center overflow-hidden ">
        <div class="container mx-auto px-5">
            <!-- Slide Noticias -->
            <div id="noticias-slide" class="splide" aria-label="Noticias">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <?php get_template_part('blocks/card'); ?>       
                        </li>
                        <li class="splide__slide">
                            <?php get_template_part('blocks/card'); ?>       
                        </li>
                        <li class="splide__slide">
                            <?php get_template_part('blocks/card'); ?>       
                        </li>
                        <li class="splide__slide">
                            <?php get_template_part('blocks/card'); ?>       
                        </li>
                        <li class="splide__slide">
                            <?php get_template_part('blocks/card'); ?>       
                        </li>
                        <li class="splide__slide">
                            <?php get_template_part('blocks/card'); ?>       
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Notícias Rodape -->
    <div class="container mx-auto px-6 pb-12">
      <a href="conteudos">
        <button class="btn">ir para a página de conteúdos</button>
      </a>
    </div>
  </section>
  <!-- Section Banner -->
  <section>
    <div class="container mx-auto px-6 pt-28 pb-14 md:py-28  ">
       <div class="banner bg-inovahc-blue-100">
         <div class="banner-container">
            <div class="figure-area md:w-1/2">
              <figure>
                <img src="./assets/img/banner/banner1.png" alt="" class="principal">
                <img src="./assets/img/banner/esquerda1.svg" alt="" class="esquerda">
                <img src="./assets/img/banner/direita1.svg" alt="" class="direita">
              </figure>
            </div>
            <div class="text-area md:w-1/2"> 
              <div class="mb-2 md:mb-4 text-inovahc-blue-800 text-3xl font-poppins ">Inove conosco</div>
              <div class="mb-4 md:mb-8">Lorem ipsum dolor consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam nostrud eiusmod tempor incididunt exercitation.</div>
              <a href="quem-somos">
                <button class="btn">conheça a plataforma</button>
              </a>
            </div>
        </div>
       </div>
    </div>
  </section>
   
</main>

<!-- Pega o Footer -->
<?php get_footer(); ?>


