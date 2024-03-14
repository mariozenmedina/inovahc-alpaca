<!-- Pega o Header -->
<?php $current_page = 'contato'; get_header(); ?>

<main >
  <!-- Section Page Header  -->
  <section>
    <div class="container mx-auto p-6 flex justify-center gap-5 flex-col md:flex-row">

        <div class="flex gap-2 flex-col md:flex-row  items-center justify-center md:w-7/12">

            <figure class="md:w-32">
                <img src="./assets/img/sessao/contato.svg" alt="Contato" class="md:w-32">
            </figure>
       
            <div class="flex flex-col md:flex-1 justify-center md:justify-start text-center md:text-left">
                <div class=" text-inovahc-green-500">Contatos</div>
                <div class=" text-inovahc-green-800 font-poppins font-bold text-4xl md:text-5xl">Fale conosco</div>
                <div>Lorem ipsum dolor, consectetur adipiscing elit, sed do eiusmod tempor incididunt ipsum lorem ipsum reprehendit.</div>
            </div>
        </div>
  
    </div>
      
    </div>
  </section>
  <!-- Section Contato  -->
  <section>
    <div class="container mx-auto px-6 md:py-16 flex gap-5 flex-col md:flex-row ">
      <div class="flex flex-col justify-between md:w-1/2">
        <div class="flex flex-col gap-6">
          <div class="flex gap-2">
            <figure >
              <img src="./assets/img/sessao/contato-tel.svg" alt="tel" >
            </figure>
            <button class="link">+55(22)2222 2222</button>
            <button class="link">+55(22)2222 2222</button>
          </div>
          <div class="flex gap-2">
            <figure >
              <img src="./assets/img/sessao/contato-email.svg" alt="email" >
            </figure>
            <button class="link">email@hc.fm.usp.br</button>
          </div>
          <div class="flex gap-2 mb-8 md:mb-0">
            <figure >
              <img src="./assets/img/sessao/contato-local.svg" alt="local" >
            </figure>
            <span>Prédio do CEAC, 4º e 5º andares,<br/>Complexo do HCFMUSP<br/> Cerqueira César, São Paulo - SP<br/> CEP. 05401-000</span>
          </div>
        </div>

        <!-- Redes Sociais Desktop -->
        <div class="hidden gap-2 md:flex">
          <figure >
              <img src="./assets/img/sessao/celular.svg" alt="social" >
          </figure>
          <div class="flex items-center">
            <div class="">
                <div class="mb-2 text-sm text-inovahc-green-500">Acompanhe as redes sociais</div>
                
                <div class="flex gap-4">
                    <button class="btn-icon btn-icon-big">  
                        <?php svg('icon-x',19,17,"");?> 
                    </button>
                    <button class="btn-icon btn-icon-big">  
                        <?php svg('icon-linkedin',19,19,"");?> 
                    </button>
                    <button class="btn-icon btn-icon-big">  
                        <?php svg('icon-flicker',20,16,"");?> 
                    </button>
                    <button class="btn-icon btn-icon-big">  
                        <?php svg('icon-facebook',11,20,"");?> 
                    </button>
                    <button class="btn-icon btn-icon-big">  
                        <?php svg('icon-instagram',19,19,"");?> 
                    </button>   
                </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Iframe Google Maps -->
      <div class="md:w-1/2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.315433135274!2d-46.670262924514034!3d-23.557112061436403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce565cf65bef8f%3A0x894626630404707a!2sInCor%20-%20Instituto%20do%20Cora%C3%A7%C3%A3o%20do%20Hospital%20das%20Cl%C3%ADnicas%20da%20FMUSP!5e0!3m2!1spt-BR!2spt!4v1710202623084!5m2!1spt-BR!2spt" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <!-- Redes Sociais Mobile -->
      <div class="flex flex-col justify-center text-center items-center gap-2 py-16 md:hidden">
        <figure >
            <img src="./assets/img/sessao/celular.svg" alt="social" >
        </figure>
        <div class="flex items-center">
          <div class="">
              <div class="mb-2 text-sm text-inovahc-green-300">Acompanhe as redes sociais</div>
              
              <div class="flex gap-4">
                  <button class="btn-icon ">  
                      <?php svg('icon-x',19,17,"");?> 
                  </button>
                  <button class="btn-icon ">  
                      <?php svg('icon-linkedin',19,19,"");?> 
                  </button>
                  <button class="btn-icon ">  
                      <?php svg('icon-flicker',20,16,"");?> 
                  </button>
                  <button class="btn-icon ">  
                      <?php svg('icon-facebook',11,20,"");?> 
                  </button>
                  <button class="btn-icon ">  
                      <?php svg('icon-instagram',19,19,"");?> 
                  </button>   
              </div>
          </div>
        </div>
      </div>


    </div>
  </section>
  <!-- Section Banner -->
  <section>
    <div class="container mx-auto px-6 py-28  ">
       <div class="banner bg-inovahc-purple-100">
         <div class="banner-container">
            <div class="figure-area md:w-1/2">
              <!-- Versao Desktop Parallax -->
              <figure id="scene" ref="scene" class="md:flex hidden">
                <img  src="./assets/img/banner/contato/base.png" >
                <!-- Esquerda -->
                <img data-depth-x="0.2" src="./assets/img/banner/contato/esquerda1.png" >
                <img data-depth="0.15" src="./assets/img/banner/contato/esquerda2.png" >
                <img data-depth="0.3" src="./assets/img/banner/contato/esquerda3.png" >
                 <!-- Direita -->
                 <img data-depth-y="0.3" src="./assets/img/banner/contato/direita1.png" >
                <img data-depth="0.2" src="./assets/img/banner/contato/direita2.png" >
                <img data-depth="0.25" src="./assets/img/banner/contato/direita3.png" >
              </figure>
              <!-- Versao Mobile Sem Parallax -->
              <figure class="flex md:hidden">
                <img  src="./assets/img/banner/contato/full.png" alt="" class="principal">
              </figure>
            </div>
            <div class="text-area md:w-1/2"> 
              <div class="mb-2 md:mb-4  text-inovahc-purple-800 text-3xl font-poppins ">Trabalhe conosco</div>
              <div class="mb-4 md:mb-8">Lorem ipsum dolor elit consectetur adipiscing, eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam nostrud exercitation. Lorem ipsum consectetur .</div>
              <button class="btn ">veja os projetos</button>
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


