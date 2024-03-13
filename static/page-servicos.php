<!-- Pega o Header -->
<?php $current_page = 'servicos'; get_header(); ?>

<main >
  <!-- Section Page Header  -->
  <section>
    <!-- Imagem topo para mobile -->
    <div class="flex md:hidden w-full">
      <figure class="w-full">
        <img src="./assets/img/header-paginas/servicos-mobile.png" alt="Quem somos?" class="w-full object-container">
      </figure>
    </div>
    <div class="container mx-auto p-6 flex gap-5 flex-col md:flex-row">
      <div class="flex gap-8 flex-col md:w-1/2 justify-center">
        <div>
          <div class=" text-inovahc-green-300">Serviços</div>
          <div class=" text-inovahc-green-800 font-poppins font-bold text-4xl md:text-5xl">Como o inovaHC pode te ajudar?</div>
         
        </div>
        <div>
          <div class="text-xl text-inovahc-green-300 mb-4">Lorem ipsum dolor amet, consectetur adipiscing elit, reprehendit sed do eiusmod tempor incididunt.</div>

          <div>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud. Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam, quis nostrud.</div>
        </div>
      </div>
      <div class="md:w-1/2 hidden md:flex">
       <figure >
          <img src="./assets/img/header-paginas/servicos.png" alt="Quem Somos?">
        </figure>
      </div>
    </div>
  </section>
  <!-- Section Projetos inovaHC  -->
  <section>
    <div class="container mx-auto px-6 py-16 flex gap-5 flex-col ">
       <!--  Linha 1 -->
        <div class="relative flex gap-5 rounded-3xl p-6 bg-inovahc-purple-100">
            <div class=" md:text-center flex md:justify-center md:items-center flex-col"> 
                <div class="mb-2 md:mb-4 text-inovahc-purple-800 text-3xl font-poppins ">Inove conosco</div>
                <div class="mb-4 md:w-8/12 ">Lorem ipsum dolor consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam nostrud eiusmod tempor incididunt exercitation.</div>
                <div>
                    <button class="btn">conheça a plataforma</button>
                </div>
            </div>
        </div>
        <!--  Linha 2 - 3 objetos -->
        <div class="flex flex-col md:flex-row gap-5">
            <!-- Objeto 1 -->
            <div class="relative flex gap-5 rounded-3xl p-6 bg-inovahc-purple-100">
                <div class="flex flex-col"> 
                    <div class="mb-2 text-inovahc-purple-800 text-3xl font-poppins ">in.cube</div>
                    <div class="mb-4 ">Programa de capacitação e apoio à inovação para intraempreendedores que tenham ideias e projetos iniciais de inovação em saúde.</div>
                    <div>
                        <button class="btn">conheça a plataforma</button>
                    </div>
                </div>
            </div>
            <!-- Objeto 2 -->
            <div class="relative flex gap-5 rounded-3xl p-6 bg-inovahc-purple-100">
                <div class="flex flex-col"> 
                    <div class="mb-2 text-inovahc-purple-800 text-3xl font-poppins ">in.cube</div>
                    <div class="mb-4 ">Programa de capacitação e apoio à inovação para intraempreendedores que tenham ideias e projetos iniciais de inovação em saúde.</div>
                    <div>
                        <button class="btn">conheça a plataforma</button>
                    </div>
                </div>
            </div>
            <!-- Objeto 3 -->
            <div class="relative flex gap-5 rounded-3xl p-6 bg-inovahc-purple-100">
                <div class="flex flex-col"> 
                    <div class="mb-2 text-inovahc-purple-800 text-3xl font-poppins ">in.cube</div>
                    <div class="mb-4 ">Programa de capacitação e apoio à inovação para intraempreendedores que tenham ideias e projetos iniciais de inovação em saúde.</div>
                    <div>
                        <button class="btn">conheça a plataforma</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!-- Section Banner -->
  <section>
    <div class="container mx-auto px-6 pt-28 pb-28 md:py-28  ">
       <div class="banner bg-inovahc-green-800">
         <div class="banner-container">
            <div class="figure-area md:w-1/2">
              <!-- Versao Desktop Parallax -->
              <figure id="scene" ref="scene" class="md:flex hidden">
                <img data-depth="0.1" src="./assets/img/banner/servicos/base.png" >
                <!-- Esquerda -->
                <img data-depth-x="0.2" src="./assets/img/banner/servicos/esquerda1.png" >
                <img data-depth="0.15" src="./assets/img/banner/servicos/esquerda2.png" >
                <img data-depth="0.3" src="./assets/img/banner/servicos/esquerda3.png" >
                 <!-- Direita -->
                 <img data-depth-y="0.3" src="./assets/img/banner/servicos/direita1.png" >
                <img data-depth="0.2" src="./assets/img/banner/servicos/direita2.png" >
                <img data-depth="0.25" src="./assets/img/banner/servicos/direita3.png" >
              </figure>
              <!-- Versao Mobile Sem Parallax -->
              <figure class="flex md:hidden">
                <img  src="./assets/img/banner/servicos/full.png" alt="" class="principal">
              </figure>
            </div>
            <div class="text-area md:w-1/2"> 
              <div class="mb-2 md:mb-4 text-white text-3xl font-poppins ">Conheça o portfólio</div>
              <div class="mb-4 md:mb-8 text-white">Lorem ipsum dolor elit consectetur adipiscing, eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam nostrud exercitation. Lorem ipsum consectetur .</div>
              <button class="btn btn-white">veja os projetos</button>
            </div>
        </div>
       </div>
    </div>
  </section>

  <!-- Section Seja nosso parceiro -->
  <section class=" bg-inovahc-green-50">
    <div class="container mx-auto px-6 py-12 relative ">
      <!--  Section Projetos premiados Header -->
      <div class="section-header flex flex-col justify-center">
        <figure >
            <img src="./assets/img/sessao/parceiros.svg" alt="premio" >
        </figure>
        <div class="title text-inovahc-green-800 mt-3">Seja nosso parceiro</div>
        <div class="md:text-center md:w-1/2 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</div>
        <div>
          <button class="btn">link externo</button>
          <button class="btn">contatos</button>
        </div>
      </div>   
    </div>
  </section>


</main>

<!-- Pega o Footer -->
<?php get_footer(); ?>


