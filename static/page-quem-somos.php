<!-- Pega o Header -->
<?php $current_page = 'quem-somos'; get_header(); ?>

<main >
  <!-- Section Page Header  -->
  <section>
    <!-- Imagem topo para mobile -->
    <div class="flex md:hidden w-full">
      <figure class="w-full">
        <img src="./assets/img/header-paginas/quemsomos-mobile.png" alt="Quem somos?" class="w-full object-container">
      </figure>
    </div>
    <div class="container mx-auto p-6 flex gap-5 flex-col md:flex-row">
      <div class="flex gap-8 flex-col md:w-1/2 justify-center">
        <div>
          <div class=" text-inovahc-green-500">Quem somos</div>
          <div class=" text-inovahc-green-800 font-poppins font-bold text-4xl md:text-5xl">O inovaHC</div>
         
        </div>
        <div>
          <div class="text-xl text-inovahc-green-500 mb-4">Lorem ipsum dolor amet, consectetur adipiscing elit, reprehendit sed do eiusmod tempor incididunt.</div>

          <div>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud. Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud.</div>
        </div>
      </div>
      <div class="md:w-1/2 hidden md:flex">
       <figure >
          <img src="./assets/img/header-paginas/quemsomos.png" alt="Quem Somos?">
        </figure>
      </div>
    </div>
  </section>
  <!-- Section Indicadores  -->
  <section>
    <div class="container mx-auto px-6 pb-24 pt-16 md:py-28 flex gap-5 flex-col ">
      <div class="flex gap-8 flex-col items-center justify-center">
        <div class=" md:text-center md:w-1/2">
          <div class=" text-inovahc-green-800 text-3xl font-poppins mb-4">Indicadores</div>
          <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
        </div>
      </div>
      <div class=" mb-10">
       <!--  Versao Desktop -->
       <figure class="scale-90 hidden md:flex" >
          <img src="./assets/img/infografico/infografico1.png" alt="InfoGrafico">
        </figure>
       <!--  Versao Mobile -->
       <figure class="flex md:hidden justify-center" >
          <img src="./assets/img/infografico/infografico1-mobile.png" alt="InfoGrafico">
        </figure>
      </div>
      <div class="flex gap-8 flex-col items-center justify-center">
        <div class=" md:text-center md:w-1/2">
          <div class=" text-inovahc-green-800 text-3xl font-poppins mb-4">HUB inovaHC</div>
          <div class=" mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
          <a href="contato"> <button class="btn">entre em contato</button></a>
         
        </div>
      </div>
    </div>
  </section>
  <!-- Section Pesquisa -->
  <section class=" bg-inovahc-green-50">
    <div class="container mx-auto px-6 pt-12 relative ">
      <!--  Section Notícias Header -->
      <div class="section-header">
        <figure >
            <img src="./assets/img/sessao/pesquisa.svg" alt="megafone" >
        </figure>
        <div class="title text-inovahc-green-800 mt-3">CITs/Laboratórios</div>
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
              <!-- Versao Desktop Parallax -->
              <figure id="scene" ref="scene" class="md:flex hidden">
                <img  src="./assets/img/banner/home/base.png" >
                <!-- Esquerda -->
                <img data-depth-x="0.2" src="./assets/img/banner/home/esquerda1.png" >
                <img data-depth="0.15" src="./assets/img/banner/home/esquerda2.png" >
                <img data-depth="0.3" src="./assets/img/banner/home/esquerda3.png" >
                 <!-- Direita -->
                 <img data-depth-y="0.3" src="./assets/img/banner/home/direita1.png" >
                <img data-depth="0.2" src="./assets/img/banner/home/direita2.png" >
                <img data-depth="0.25" src="./assets/img/banner/home/direita3.png" >
              </figure>
              <!-- Versao Mobile Sem Parallax -->
              <figure class="flex md:hidden">
                <img  src="./assets/img/banner/home/full.png" alt="" class="principal">
              </figure>
            </div>
            <div class="text-area md:w-1/2"> 
              <div class="mb-2 md:mb-4 text-inovahc-blue-800 text-3xl font-poppins ">Inove conosco</div>
              <div class="mb-4 md:mb-8">Lorem ipsum dolor consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam nostrud eiusmod tempor incididunt exercitation. Ut enim ad minim veniam nostrud eiusmod tempor incididunt exercitation.</div>
              <a href="#">
                <button class="btn">conheça a plataforma</button>
              </a>
            </div>
        </div>
       </div>
    </div>
  </section>
  <!-- Section Equipe  -->
  <section>
    <div class="container mx-auto px-6 pt-6 pb-20 md:p-6 flex gap-5 flex-col ">
      <div class="flex gap-8 flex-col items-center md:justify-center">
        <div class=" md:text-center md:w-1/2">
          <div class=" text-inovahc-green-800 text-3xl font-poppins mb-4">A equipe</div>
          <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
        </div>
      </div>

      <!--  Grid de Perfil - Equipe -->
      <div class=" grid md:grid-cols-3 gap-5">
        <!-- Card Perfil -->
        <div class="flex gap-4">
          <figure class >
            <img src="./assets/img/equipe/perfil1.png" alt="Profile 1" class="w-full rounded-lg object-cover">
          </figure>
          <div>
            <div class=" mb-1">Maria Augusta Pires</div>
            <div class=" text-xs mb-4">Descrição área de atuação</div>
            <div class="flex gap-3 justify-center">
              <button class="btn-icon ">  
                  <?php svg('icon-linkedin',16,16,"");?> 
              </button>
              <span class="link">email@hc.fm.usp.br</span>
            </div>
          </div>

        </div>
        <!-- Card Perfil -->
        <div class="flex gap-4">
          <figure class >
            <img src="./assets/img/equipe/perfil1.png" alt="Profile 1" class="w-full rounded-lg object-cover">
          </figure>
          <div>
            <div class=" mb-1">Maria Augusta Pires</div>
            <div class=" text-xs mb-4">Descrição área de atuação</div>
            <div class="flex gap-3 justify-center">
              <button class="btn-icon ">  
                  <?php svg('icon-linkedin',16,16,"");?> 
              </button>
              <span class="link">email@hc.fm.usp.br</span>
            </div>
          </div>

        </div>
        <!-- Card Perfil -->
        <div class="flex gap-4">
          <figure class >
            <img src="./assets/img/equipe/perfil1.png" alt="Profile 1" class="w-full rounded-lg object-cover">
          </figure>
          <div>
            <div class=" mb-1">Maria Augusta Pires</div>
            <div class=" text-xs mb-4">Descrição área de atuação</div>
            <div class="flex gap-3 justify-center">
              <button class="btn-icon ">  
                  <?php svg('icon-linkedin',16,16,"");?> 
              </button>
              <span class="link">email@hc.fm.usp.br</span>
            </div>
          </div>

        </div>
        <!-- Card Perfil -->
        <div class="flex gap-4">
          <figure class >
            <img src="./assets/img/equipe/perfil1.png" alt="Profile 1" class="w-full rounded-lg object-cover">
          </figure>
          <div>
            <div class=" mb-1">Maria Augusta Pires</div>
            <div class=" text-xs mb-4">Descrição área de atuação</div>
            <div class="flex gap-3 justify-center">
              <button class="btn-icon ">  
                  <?php svg('icon-linkedin',16,16,"");?> 
              </button>
              <span class="link">email@hc.fm.usp.br</span>
            </div>
          </div>
        </div>
        <!-- Card Perfil -->
        <div class="flex gap-4">
          <figure class >
            <img src="./assets/img/equipe/perfil1.png" alt="Profile 1" class="w-full rounded-lg object-cover">
          </figure>
          <div>
            <div class=" mb-1">Maria Augusta Pires</div>
            <div class=" text-xs mb-4">Descrição área de atuação</div>
            <div class="flex gap-3 justify-center">
              <button class="btn-icon ">  
                  <?php svg('icon-linkedin',16,16,"");?> 
              </button>
              <span class="link">email@hc.fm.usp.br</span>
            </div>
          </div>

        </div>
        <!-- Card Perfil -->
        <div class="flex gap-4">
          <figure class >
            <img src="./assets/img/equipe/perfil1.png" alt="Profile 1" class="w-full rounded-lg object-cover">
          </figure>
          <div>
            <div class=" mb-1">Maria Augusta Pires</div>
            <div class=" text-xs mb-4">Descrição área de atuação</div>
            <div class="flex gap-3 justify-center">
              <button class="btn-icon ">  
                  <?php svg('icon-linkedin',16,16,"");?> 
              </button>
              <span class="link">email@hc.fm.usp.br</span>
            </div>
          </div>

        </div>
        <!-- Card Perfil -->
        <div class="flex gap-4">
          <figure class >
            <img src="./assets/img/equipe/perfil1.png" alt="Profile 1" class="w-full rounded-lg object-cover">
          </figure>
          <div>
            <div class=" mb-1">Maria Augusta Pires</div>
            <div class=" text-xs mb-4">Descrição área de atuação</div>
            <div class="flex gap-3 justify-center">
              <button class="btn-icon ">  
                  <?php svg('icon-linkedin',16,16,"");?> 
              </button>
              <span class="link">email@hc.fm.usp.br</span>
            </div>
          </div>

        </div>
        <!-- Card Perfil -->
        <div class="flex gap-4">
          <figure class >
            <img src="./assets/img/equipe/perfil1.png" alt="Profile 1" class="w-full rounded-lg object-cover">
          </figure>
          <div>
            <div class=" mb-1">Maria Augusta Pires</div>
            <div class=" text-xs mb-4">Descrição área de atuação</div>
            <div class="flex gap-3 justify-center">
              <button class="btn-icon ">  
                  <?php svg('icon-linkedin',16,16,"");?> 
              </button>
              <span class="link">email@hc.fm.usp.br</span>
            </div>
          </div>
        </div>
      

      </div>
      
      <div class="flex gap-8 flex-col  md:mb-20">
        <a href="contato">
          <button class="btn">entre em contato</button>
        </a>
      </div>
    </div>
  </section>
  <!-- Section Projetos premiados -->
  <section class="bg-inovahc-blue-300">
    <div class="container mx-auto px-6 mt-10 md:mt-0 bg-inovahc-blue-300 py-12 relative">
      <!--  Section Projetos premiados Header -->
      <div class="section-header flex flex-col justify-center">
        <figure >
            <img src="./assets/img/sessao/premio.svg" alt="premio" >
        </figure>
        <div class="title w-full text-inovahc-blue-800 mt-3">Projetos premiados</div>
        <div class="text-white md:text-center md:w-1/2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</div>
      </div>
      <!-- #Grid Premios -->
      <div class=" grid grid-cols-2 md:grid-cols-3 py-8 gap-5">
        <!-- Card Premios -->
        <div class="flex flex-col md:flex-row gap-4">
          <figure class=" bg-inovahc-blue-800 rounded-lg md:w-1/2 min-h-[110px]" >
            <img src="./assets/img/premios/premio.jpg" alt="Premio" class="w-full rounded-lg object-cover">
          </figure>
          <div class="flex justify-center flex-col md:w-1/2">
            <div class=" text-inovahc-blue-800 mb-1 text-xl">OpenCare 5G</div>
            <div class="  text-white text-xs ">09/2023</div>
          </div>
        </div>
        <!-- Card Premios -->
        <div class="flex flex-col md:flex-row gap-4">
          <figure class=" bg-inovahc-blue-800 rounded-lg md:w-1/2 min-h-[110px]" >
            <img src="./assets/img/premios/premio.jpg" alt="Premio" class="w-full rounded-lg object-cover">
          </figure>
          <div class="flex justify-center flex-col md:w-1/2">
            <div class=" text-inovahc-blue-800 mb-1 text-xl">OpenCare 5G</div>
            <div class="  text-white text-xs ">09/2023</div>
          </div>
        </div>
        <!-- Card Premios -->
        <div class="flex flex-col md:flex-row gap-4">
          <figure class=" bg-inovahc-blue-800 rounded-lg md:w-1/2 min-h-[110px]" >
            <img src="./assets/img/premios/premio.jpg" alt="Premio" class="w-full rounded-lg object-cover">
          </figure>
          <div class="flex justify-center flex-col md:w-1/2">
            <div class=" text-inovahc-blue-800 mb-1 text-xl">OpenCare 5G</div>
            <div class="  text-white text-xs ">09/2023</div>
          </div>
        </div>
      
      </div>

      <button class="btn">carregar mais</button>
    </div>
  </section>
  <!-- Section Nossos parceiros -->
  <section>
    <div class="container mx-auto px-6 py-12 relative ">
      <div class="flex gap-8 flex-col items-center md:justify-center">
        <div class=" md:text-center md:w-1/2">
          <div class=" text-inovahc-green-800 text-3xl font-poppins mb-2">Nossos parceiros</div>
          <div class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
        </div>
      </div>
      <!-- #Linha1 Parceiros grid grid-cols-3 md:grid-cols-6  -->
      <div class="grid grid-cols-3 md:grid-cols-6 gap-8 md:gap-x-12 gap-y-4  pt-8 pb-5 mb-8">
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo1.png" alt="parceiro" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo2.png" alt="parceiro" class="w-fit" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo3.png" alt="parceiro" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo4.png" alt="parceiro" class="w-fit" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo5.png" alt="parceiro" >
        </figure>
         <!-- Logo Parceiros -->
         <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo3.png" alt="parceiro" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo4.png" alt="parceiro" class="w-fit" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo5.png" alt="parceiro" >
        </figure>
         <!-- Logo Parceiros -->
         <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo3.png" alt="parceiro" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo4.png" alt="parceiro" class="w-fit" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo5.png" alt="parceiro" >
        </figure>
         <!-- Logo Parceiros -->
         <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo3.png" alt="parceiro" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo4.png" alt="parceiro" class="w-fit" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo5.png" alt="parceiro" >
        </figure>
         <!-- Logo Parceiros -->
         <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo3.png" alt="parceiro" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo4.png" alt="parceiro" class="w-fit" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo5.png" alt="parceiro" >
        </figure>
         <!-- Logo Parceiros -->
         <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo3.png" alt="parceiro" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo4.png" alt="parceiro" class="w-fit" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo5.png" alt="parceiro" >
        </figure>
        <!-- Logo Parceiros -->
        <figure class=" flex justify-center items-center" >
          <img src="./assets/img/parceiros/logo6.png" alt="parceiro" class="w-fit" >
        </figure>   
      </div>
     
      
      <div class=" mb-10">
        <button class="btn">carregar mais</button>
      </div>
  
    </div>
  </section>
  <!-- Section Seja nosso parceiro -->
  <section >
    <div class="container mx-auto px-6 py-12  mt-10 md:mt-0 relative bg-inovahc-green-50">
      <!--  Section Projetos premiados Header -->
      <div class="section-header flex flex-col justify-center">
        <figure >
            <img src="./assets/img/sessao/parceiros.svg" alt="premio" >
        </figure>
        <div class="title text-inovahc-green-800 mt-3">Seja nosso parceiro</div>
        <div class="md:text-center md:w-1/2 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</div>
        <div>
          <button class="btn">link externo</button>
          <a href="contato">
            <button class="btn">contatos</button>
          </a>
        </div>
      </div>   
    </div>
  </section>


</main>

<!-- Pega o Footer -->
<?php get_footer(); ?>


